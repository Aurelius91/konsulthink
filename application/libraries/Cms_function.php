<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms_function
{
    public function extract_records($records, $field)
    {
        $data = array();

        foreach ($records as $record)
        {
            if (isset($data[$record->$field]))
            {
                continue;
            }

            $data[$record->$field] = $record->$field;
        }

        return array_values($data);
    }

    public function generate_acl($user_id)
    {
        if ($user_id <= 0)
        {
            return array();
        }

        $CI = &get_instance();

        $acl = array();

        $CI->db->select('id');
        $CI->db->where('enabled <=', 0);
        $arr_module = $CI->core_model->get('module');
        $arr_module_id = $CI->cms_function->extract_records($arr_module, 'id');

        $CI->db->where('user_id', $user_id);

        if (count($arr_module_id) > 0)
        {
            $CI->db->where_not_in('module_id', $arr_module_id);
        }

        $arr_user_access = $CI->core_model->get('user_access');

        foreach ($arr_user_access as $user_access)
        {
            $acl[$user_access->module_id] = new stdClass();
            $acl[$user_access->module_id]->add = $user_access->add;
            $acl[$user_access->module_id]->delete = $user_access->delete;
            $acl[$user_access->module_id]->edit = $user_access->edit;
            $acl[$user_access->module_id]->list = $user_access->list;
        }

        return $acl;
    }

	public function generate_csrf()
	{
		$CI = &get_instance();

		$arr_csrf = array();
		$arr_csrf['name'] = $CI->security->get_csrf_token_name();
		$arr_csrf['hash'] = $CI->security->get_csrf_hash();

		return $arr_csrf;
	}

    public function generate_header()
    {
        $CI = &get_instance();

        $CI->db->where('header_id <=', 0);
        $CI->db->order_by('sort');
        $arr_header = $CI->core_model->get('header');
        $arr_header_id = $CI->cms_function->extract_records($arr_header, 'id');

        $arr_header_lookup = array();

        if (count($arr_header_id) > 0)
        {
            $CI->db->where_in('header_id', $arr_header_id);
            $CI->db->order_by('sort');
            $arr_child_header = $CI->core_model->get('header');

            foreach ($arr_child_header as $child_header)
            {
                $arr_header_lookup[$child_header->header_id][] = clone $child_header;
            }
        }

        foreach ($arr_header as $header)
        {
            $header->arr_child_header = (isset($arr_header_lookup[$header->id])) ? $arr_header_lookup[$header->id] : array();
        }

        return $arr_header;
    }

    public function generate_image($type, $id, $query = '')
    {
        $CI = &get_instance();

        $CI->db->where("{$type}_id", $id);
        $CI->db->where('type', $query);
        $arr_image = $CI->core_model->get('image');

        $image_name = '';

        if (count($arr_image) > 0)
        {
            $image_name = ($arr_image[0]->name != '') ? $arr_image[0]->name : $arr_image[0]->id . '.' . $arr_image[0]->ext;
        }

        return $image_name;
    }

	public function generate_metatag($header_id)
	{
		$CI = &get_instance();

		$CI->db->where('header_id', $header_id);
		$arr_metatag = $CI->core_model->get('metatag');

		return (count($arr_metatag) > 0) ? $arr_metatag[0] : '';
	}

    public function generate_section($header_id)
    {
        $CI = &get_instance();

        $CI->db->where('header_id', $header_id);
        $CI->db->order_by('id');
        $arr_section = $CI->core_model->get('section');
        $arr_section_id = $CI->cms_function->extract_records($arr_section, 'id');

        $arr_image_lookup = array();

        if (count($arr_section_id) > 0)
        {
            $CI->db->where_in('section_id', $arr_section_id);
            $arr_image = $CI->core_model->get('image');

            foreach ($arr_image as $image)
            {
                $arr_image_lookup[$image->section_id] = ($image->name != '') ? $image->name : $image->id . '.' . $image->ext;
            }
        }

        foreach ($arr_section as $section)
        {
            $section->image_name = (isset($arr_image_lookup[$section->id])) ? $arr_image_lookup[$section->id] : '';
        }

        return $arr_section;
    }

    public function populate_foreign_field($id, $record, $table)
    {
        $CI = &get_instance();

        if ($table == 'module')
        {
            $CI->db->select('type, number, name, date, status');
            $CI->db->where('id', $id);
            $arr_query_result = $CI->core_model->get($table);

            $query_result = (count($arr_query_result) > 0) ? $arr_query_result[0] : new stdClass();
        }
        else
        {
            if ($id > 0)
            {
                $CI->db->select('type, number, name, date, status');
                $query_result = $CI->core_model->get($table, $id);
            }
        }

        if ($id > 0)
        {
            foreach ($query_result as $k => $v)
            {
                $record["{$table}_{$k}"] = $v;
            }
        }

        return $record;
    }

    public function system_log($type, $record, $old_record, $table)
    {
        $CI = &get_instance();

        $log_record = array();
        $log_record['date'] = time();

        if ($type == 'add')
        {
			$log_record['name'] = (isset($record['name'])) ? 'Add ' . $table . ' ' . $record['name'] : 'Add ' . $table . ' ' . $record['title'];
        }
        elseif ($type == 'edit')
        {
			$log_record['name'] = (isset($record['name'])) ? 'Edit ' . $table . ' ' . $old_record['name'] . ' to ' .  $record['name'] : 'Edit ' . $table . ' ' . $old_record['title'] . ' to ' .  $record['title'];
        }
        elseif ($type == 'delete')
        {
			$log_record['name'] = (isset($record['name'])) ? 'Delete ' . $table . ' ' . $record['name'] : 'Delete ' . $table . ' ' . $record['title'];
        }
        elseif ($type == 'status')
        {
            $status = ($record['active'] > 0) ? 'Active' : 'Inactive';
            $log_record['name'] = (isset($old_record['name'])) ? 'Change Status ' . $old_record['name'] . ' to ' . $status : 'Change Status ' . $old_record['title'] . ' to ' . $status;
        }
        elseif ($type == 'Update Stock')
        {
            $log_record['name'] = 'Update Stock ' . $old_record['name'] . ' from ' . number_format($old_record['quantity'], 0, '', '') . ' to ' . $record['quantity'];
        }
        elseif ($type == 'setting')
        {
            $log_record['name'] = 'Update Setting';
        }

        $log_record['query'] = $record['last_query'];
        $CI->core_model->insert('log', $log_record);
    }
}
