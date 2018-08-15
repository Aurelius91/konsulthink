<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrant extends CI_Controller
{
	private $_setting;
	private $_user;
	private $_acl;
	private $_has_image;

	public function __construct()
	{
		parent:: __construct();

		$user_id = $this->session->userdata('user_id');

		if ($user_id > 0)
		{
			$this->_user = $this->core_model->get('user', $user_id);
			$this->_setting = $this->setting_model->load();
			$this->_acl = $this->cms_function->generate_acl($this->_user->id);

			$this->_user->address = $this->cms_function->trim_text($this->_user->address);
			$this->_setting->company_address = $this->cms_function->trim_text($this->_setting->company_address);
			$this->_user->image_name = $this->cms_function->generate_image('user', $this->_user->id);

			$this->_has_image = 1;
		}
		else
		{
			redirect(base_url() . 'login/');
		}
	}




	public function add()
	{
		$acl = $this->_acl;

		if (!isset($acl['registrant']) || $acl['registrant']->add <= 0)
		{
			redirect(base_url());
		}

		$arr_data['setting'] = $this->_setting;
		$arr_data['account'] = $this->_user;
		$arr_data['acl'] = $acl;
		$arr_data['type'] = 'Registrant';
		$arr_data['csrf'] = $this->cms_function->generate_csrf();

		$this->load->view('html', $arr_data);
		$this->load->view('registrant_add', $arr_data);
	}

	public function edit($registrant_id = 0)
	{
		$acl = $this->_acl;

		if ($registrant_id <= 0)
		{
			redirect(base_url());
		}

		if (!isset($acl['registrant']) || $acl['registrant']->edit <= 0)
		{
			redirect(base_url());
		}

		$registrant = $this->core_model->get('registrant', $registrant_id);
		$registrant->image_name = '';
		$registrant->date_display = date('Y-m-d', $registrant->date);

		$this->db->where('registrant_id', $registrant->id);
		$this->db->where('type', '');
		$arr_image = $this->core_model->get('image');

		if (count($arr_image) > 0)
		{
			$registrant->image_name = ($arr_image[0]->name != '') ? $arr_image[0]->name : $arr_image[0]->id . '.' . $arr_image[0]->ext;
		}

		$arr_data['setting'] = $this->_setting;
		$arr_data['account'] = $this->_user;
		$arr_data['acl'] = $acl;
		$arr_data['type'] = 'Registrant';
		$arr_data['registrant'] = $registrant;
		$arr_data['csrf'] = $this->cms_function->generate_csrf();

		$this->load->view('html', $arr_data);
		$this->load->view('registrant_edit', $arr_data);
	}

	public function view($events_id = 0, $page = 1, $filter = 'all', $query = '')
	{
		$acl = $this->_acl;

		if (!isset($acl['registrant']) || $acl['registrant']->list <= 0)
		{
			redirect(base_url());
		}

		if ($events_id <= 0)
		{
			redirect(base_url());
		}

		$query = ($query != '') ? base64_decode($query) : '';

		if ($query != '')
		{
			$this->db->like('name', $query);
		}

		if ($filter == 'all')
		{
			$this->db->like('name', $query);
		}
		else
		{
			$this->db->like($filter, $query);
		}

		$this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
		$this->db->order_by("name");
		$arr_registrant = $this->core_model->get('registrant');

		if ($query != '')
		{
			$this->db->like('name', $query);
		}

		if ($filter == 'all')
		{
			$this->db->like('name', $query);
		}
		else
		{
			$this->db->like($filter, $query);
		}

		$count_registrant = $this->core_model->count('registrant');
		$count_page = ceil($count_registrant / $this->_setting->setting__limit_page);

		$events = $this->core_model->get('events', $events_id);

		$arr_data['setting'] = $this->_setting;
		$arr_data['account'] = $this->_user;
		$arr_data['acl'] = $acl;
		$arr_data['type'] = 'Registrant';
		$arr_data['page'] = $page;
		$arr_data['count_page'] = $count_page;
		$arr_data['query'] = $query;
		$arr_data['filter'] = $filter;
		$arr_data['arr_registrant'] = $arr_registrant;
		$arr_data['csrf'] = $this->cms_function->generate_csrf();
		$arr_data['events'] = $events;

		$this->load->view('html', $arr_data);
		$this->load->view('registrant', $arr_data);
	}




	public function ajax_add()
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$acl = $this->_acl;

			if (!isset($acl['registrant']) || $acl['registrant']->add <= 0)
			{
				throw new Exception('You have no access to add registrant. Please contact your administrator.');
			}

			$registrant_record = array();
			$image_id = 0;

			foreach ($_POST as $k => $v)
			{
				if ($k == 'image_id')
				{
					$image_id = $v;
				}
				else
				{
					$registrant_record[$k] = ($k == 'date' || $k == 'date_end') ? strtotime($v) : $v;
				}
			}

			$registrant_record['url_name'] = str_replace(array('.', ',', '&', '?', '!', '/', '(', ')', '+'), '' , strtolower($registrant_record['name']));
            $registrant_record['url_name'] = preg_replace("/[\s_]/", "-", $registrant_record['url_name']);

            $this->_validate_add($registrant_record);

			$registrant_id = $this->core_model->insert('registrant', $registrant_record);
			$registrant_record['id'] = $registrant_id;
			$registrant_record['last_query'] = $this->db->last_query();

			$this->cms_function->system_log($registrant_record['id'], 'add', $registrant_record, array(), 'registrant');

			if ($image_id > 0)
			{
				$this->core_model->update('image', $image_id, array('registrant_id' => $registrant_id));
			}

			$json['registrant_id'] = $registrant_id;

			$this->db->trans_complete();
		}
		catch (Exception $e)
		{
			$json['message'] = $e->getMessage();
			$json['status'] = 'error';

			if ($json['message'] == '')
			{
				$json['message'] = 'Server error.';
			}
		}

		echo json_encode($json);
	}

	public function ajax_change_status($registrant_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($registrant_id <= 0)
			{
				throw new Exception();
			}

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$acl = $this->_acl;

			if (!isset($acl['registrant']) || $acl['registrant']->edit <= 0)
			{
				throw new Exception('You have no access to edit registrant. Please contact your administrator.');
			}

			$old_registrant = $this->core_model->get('registrant', $registrant_id);

			$old_registrant_record = array();

			foreach ($old_registrant as $key => $value)
			{
				$old_registrant_record[$key] = $value;
			}

			$registrant_record = array();

			foreach ($_POST as $k => $v)
			{
				$registrant_record[$k] = ($k == 'date') ? strtotime($v) : $v;
			}

			$this->core_model->update('registrant', $registrant_id, $registrant_record);
			$registrant_record['id'] = $registrant_id;
			$registrant_record['last_query'] = $this->db->last_query();

			$this->cms_function->system_log($registrant_id, 'status', $registrant_record, $old_registrant_record, 'registrant');

			$this->db->trans_complete();
		}
		catch (Exception $e)
		{
			$json['message'] = $e->getMessage();
			$json['status'] = 'error';

			if ($json['message'] == '')
			{
				$json['message'] = 'Server error.';
			}
		}

		echo json_encode($json);
	}

	public function ajax_delete($registrant_id = 0)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($registrant_id <= 0)
			{
				throw new Exception();
			}

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$acl = $this->_acl;

			if (!isset($acl['registrant']) || $acl['registrant']->delete <= 0)
			{
				throw new Exception('You have no access to delete registrant. Please contact your administrator.');
			}

			$registrant = $this->core_model->get('registrant', $registrant_id);
			$updated = $_POST['updated'];
			$registrant_record = array();

			foreach ($registrant as $k => $v)
			{
				if ($k == 'updated' && $v != $updated)
				{
					throw new Exception('This data has been updated by another User. Please refresh the page.');
				}
				else
				{
					$registrant_record[$k] = $v;
				}
			}

			$this->_validate_delete($registrant_id);

			$this->core_model->delete('registrant', $registrant_id);
			$registrant_record['id'] = $registrant->id;
			$registrant_record['last_query'] = $this->db->last_query();

			$this->cms_function->system_log($registrant_record['id'], 'delete', $registrant_record, array(), 'registrant');

			if ($this->_has_image > 0)
			{
				$this->db->where('registrant_id', $registrant_id);
	            $arr_image = $this->core_model->get('image');

	            foreach ($arr_image as $image)
	            {
	                unlink("images/website/{$image->id}.{$image->ext}");

	                $this->core_model->delete('image', $image->id);
	            }
			}

			$this->db->trans_complete();
		}
		catch (Exception $e)
		{
			$json['message'] = $e->getMessage();
			$json['status'] = 'error';

			if ($json['message'] == '')
			{
				$json['message'] = 'Server error.';
			}
		}

		echo json_encode($json);
	}

	public function ajax_edit($registrant_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$acl = $this->_acl;

			if (!isset($acl['registrant']) || $acl['registrant']->edit <= 0)
			{
				throw new Exception('You have no access to edit registrant. Please contact your administrator.');
			}

			$old_registrant = $this->core_model->get('registrant', $registrant_id);

			$old_registrant_record = array();

			foreach ($old_registrant as $key => $value)
			{
				$old_registrant_record[$key] = $value;
			}

			$registrant_record = array();
			$image_id = 0;

			foreach ($_POST as $k => $v)
			{
				if ($k == 'image_id')
				{
					$image_id = $v;
				}
				else
				{
					$registrant_record[$k] = ($k == 'date' || $k == 'date_end') ? strtotime($v) : $v;
				}
			}

			$registrant_record['url_name'] = str_replace(array('.', ',', '&', '?', '!', '/', '(', ')', '+'), '' , strtolower($registrant_record['name']));
            $registrant_record['url_name'] = preg_replace("/[\s_]/", "-", $registrant_record['url_name']);

			$this->_validate_edit($registrant_id, $registrant_record);

			$this->core_model->update('registrant', $registrant_id, $registrant_record);
			$registrant_record['id'] = $registrant_id;
			$registrant_record['last_query'] = $this->db->last_query();

			$this->cms_function->system_log($registrant_record['id'], 'edit', $registrant_record, $old_registrant_record, 'registrant');
			$this->cms_function->update_foreign_field(array('registrant'), $registrant_record, 'registrant');

			if ($image_id > 0)
            {
                $this->db->where('registrant_id', $registrant_id);
                $arr_image = $this->core_model->get('image');

                foreach ($arr_image as $image)
                {
                    unlink("images/website/{$image->id}.{$image->ext}");

                    $this->core_model->delete('image', $image->id);
                }

                $this->core_model->update('image', $image_id, array('registrant_id' => $registrant_id));
            }

			$this->db->trans_complete();
		}
		catch (Exception $e)
		{
			$json['message'] = $e->getMessage();
			$json['status'] = 'error';

			if ($json['message'] == '')
			{
				$json['message'] = 'Server error.';
			}
		}

		echo json_encode($json);
	}

	public function ajax_get($registrant_id = 0)
	{
		$json['status'] = 'success';

		try
		{
			if ($registrant_id <= 0)
			{
				throw new Exception();
			}

			$registrant = $this->core_model->get('registrant', $registrant_id);

			$json['registrant'] = $registrant;
		}
		catch (Exception $e)
		{
			$json['message'] = $e->getMessage();
			$json['status'] = 'error';

			if ($json['message'] == '')
			{
				$json['message'] = 'Server error.';
			}
		}

		echo json_encode($json);
	}




	private function _validate_add($registrant_record)
	{
		$this->db->where('name', $registrant_record['name']);
		$count_registrant = $this->core_model->count('registrant');

		if ($count_registrant > 0)
		{
			throw new Exception('Name already exist.');
		}
	}

	private function _validate_delete($registrant_id)
	{
		$this->db->where('deletable <=', 0);
		$this->db->where('id', $registrant_id);
		$count_registrant = $this->core_model->count('registrant');

		if ($count_registrant > 0)
		{
			throw new Exception('Data cannot be deleted');
		}
	}

	private function _validate_edit($registrant_id, $registrant_record)
	{
		$this->db->where('editable <=', 0);
		$this->db->where('id', $registrant_id);
		$count_registrant = $this->core_model->count('registrant');

		if ($count_registrant > 0)
		{
			throw new Exception('Data cannot be updated.');
		}

		$this->db->where('id !=', $registrant_id);
		$this->db->where('name', $registrant_record['name']);
		$count_registrant = $this->core_model->count('registrant');

		if ($count_registrant > 0)
		{
			throw new Exception('Name is already exist.');
		}
	}
}