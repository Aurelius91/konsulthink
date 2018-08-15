<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patch_sale_customer extends CI_Controller
{
	private $_setting;

	public function __construct()
	{
		parent:: __construct();

		$this->_setting = $this->setting_model->load();
	}




	public function generate()
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			$this->db->select('id, customer_id, customer_type, customer_number, customer_name, customer_date, customer_status');
			$arr_sale = $this->core_model->get('sale');

			foreach ($arr_sale as $sale)
			{
				$sale_item_record = array();
				$sale_item_record['customer_id'] = $sale->customer_id;
				$sale_item_record['customer_type'] = $sale->customer_type;
				$sale_item_record['customer_number'] = $sale->customer_number;
				$sale_item_record['customer_name'] = $sale->customer_name;
				$sale_item_record['customer_date'] = $sale->customer_date;
				$sale_item_record['customer_status'] = $sale->customer_status;

				$this->db->where('sale_id', $sale->id);
				$this->core_model->update('sale_item', 0, $sale_item_record);
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
}