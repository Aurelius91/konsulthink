<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller
{
	private $_setting;
	private $_user;
	private $_acl;

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
		}
		else
		{
			redirect(base_url() . 'login/');
		}

		// load cms_excel
		$this->load->library('cms_excel');
	}




	public function registrant($events_id = 0)
	{
		$arr_record = $this->_export_registrant($events_id);

		$title = 'Registrant - ' . $arr_record['events']->name;
		$objPHPExcel = $this->cms_excel->create_excel($title);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', "Registrant List - {$arr_record['events']->name}");
		$objPHPExcel->getActiveSheet()->setCellValue('A2', "Date: - {$arr_record['events']->date_display}");
		$objPHPExcel->getActiveSheet()->setCellValue('A3', "Time - {$arr_record['events']->time}");
		$objPHPExcel->getActiveSheet()->setCellValue('A4', "Location - {$arr_record['events']->location}");
		$this->cms_excel->setbold($objPHPExcel, array('A1', 'A2', 'A3', 'A4'));
		$this->cms_excel->setmerge($objPHPExcel, array('A1:L1', 'A2:L2', 'A3:L3', 'A4:L4'));
		$this->cms_excel->setautosize($objPHPExcel, array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L'));

		$row = 6;

		$objPHPExcel->getActiveSheet()->setCellValue("A{$row}", 'Name');
		$objPHPExcel->getActiveSheet()->setCellValue("B{$row}", 'Phone');
		$objPHPExcel->getActiveSheet()->setCellValue("C{$row}", 'Email');
		$objPHPExcel->getActiveSheet()->setCellValue("D{$row}", 'Birthday');
		$objPHPExcel->getActiveSheet()->setCellValue("E{$row}", 'Position');
		$objPHPExcel->getActiveSheet()->setCellValue("F{$row}", 'Company');

		$objPHPExcel->getActiveSheet()->setCellValue("G{$row}", 'Have you attend similar training before?');
		$objPHPExcel->getActiveSheet()->setCellValue("H{$row}", 'If Yes, When?');
		$objPHPExcel->getActiveSheet()->setCellValue("I{$row}", 'Reason(s) for attending this training?');
		$objPHPExcel->getActiveSheet()->setCellValue("J{$row}", 'Preferred date if we provide the Next Training?');
		$objPHPExcel->getActiveSheet()->setCellValue("K{$row}", 'Preferred location for the next training?');
		$objPHPExcel->getActiveSheet()->setCellValue("L{$row}", 'Training option you preferred for the next training?');
		$this->cms_excel->setbold($objPHPExcel, array("A{$row}", "B{$row}", "C{$row}", "D{$row}", "E{$row}", "F{$row}", "G{$row}", "H{$row}", "I{$row}", "J{$row}", "K{$row}", "L{$row}"));
		$this->cms_excel->setborder($objPHPExcel, "A{$row}", "L{$row}", '#000');

		$row += 1;

		foreach ($arr_record['arr_registrant'] as $registrant)
		{
			$objPHPExcel->getActiveSheet()->setCellValue("A{$row}", $registrant->name);
			$objPHPExcel->getActiveSheet()->setCellValueExplicit("B{$row}", $registrant->phone);
			$objPHPExcel->getActiveSheet()->setCellValue("C{$row}", $registrant->email);
			$objPHPExcel->getActiveSheet()->setCellValue("D{$row}", $registrant->birthday);
			$objPHPExcel->getActiveSheet()->setCellValue("E{$row}", $registrant->position);
			$objPHPExcel->getActiveSheet()->setCellValue("F{$row}", $registrant->company);

			$objPHPExcel->getActiveSheet()->setCellValue("G{$row}", $registrant->question_1);
			$objPHPExcel->getActiveSheet()->setCellValue("H{$row}", $registrant->question_2);
			$objPHPExcel->getActiveSheet()->setCellValue("I{$row}", $registrant->question_3);
			$objPHPExcel->getActiveSheet()->setCellValue("J{$row}", $registrant->question_4);
			$objPHPExcel->getActiveSheet()->setCellValue("K{$row}", $registrant->question_5);
			$objPHPExcel->getActiveSheet()->setCellValue("L{$row}", $registrant->question_6);
			$this->cms_excel->setborder($objPHPExcel, "A{$row}", "L{$row}", '#000');

			$row += 1;
		}

		$this->cms_excel->download_excel($objPHPExcel, $title);
	}




	private function _export_registrant($events_id)
	{
		$events = $this->core_model->get('events', $events_id);
		$events->date_display = date('d F Y', $events->date);

		$this->db->where('events_id', $events_id);
		$this->db->order_by('name');
		$arr_registrant = $this->core_model->get('registrant');

		$arr_record['events'] = $events;
		$arr_record['arr_registrant'] = $arr_registrant;

		return $arr_record;
	}
}