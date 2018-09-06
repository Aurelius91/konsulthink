<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    private $_lang;
    private $_setting;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();

        // Set Language from Cookie
        $this->_lang = (!get_cookie('konsulthink_lang')) ? $this->_setting->setting__system_language : get_cookie('konsulthink_lang');
        $this->_lang = ($this->_setting->setting__website_enabled_dual_language <= 0) ? $this->_setting->setting__system_language : $this->_lang;

        // check maintenance
        if ($this->_setting->setting__system_main_website_maintenance > 0)
        {
            // Redirect if Setting Maintenance is On
            redirect(base_url() . 'maintenance/');
        }
    }




    /* Public Function Area */
    public function index()
    {
        $header_id = 6;

        $arr_data['title'] = 'Gallery';
        $arr_data['header_id'] = $header_id;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['setting'] = $this->_setting;
        $arr_data['lang'] = $this->_lang;
        $arr_data['metatag'] = $this->cms_function->generate_metatag($header_id);
        $arr_data['arr_header'] = $this->cms_function->generate_header();
        $arr_data['arr_section'] = $this->cms_function->generate_section($header_id);

        $this->load->view('header', $arr_data);
        $this->load->view('gallery', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}
