<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
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
    }




    /* Public Function Area */
    public function index()
    {
        $header_id = 1;

        // get all image
        $this->db->where('slideshow_id >', 0);
        $arr_image = $this->core_model->get('image');

        $arr_image_lookup = array();

        foreach ($arr_image as $image)
        {
            $arr_image_lookup[$image->slideshow_id] = ($image->name != '') ? $image->name : $image->id . '.' . $image->ext;
        }

        // get slideshow
        $this->db->order_by('id');
        $this->db->limit('4');
        $arr_slideshow = $this->core_model->get('slideshow');

        foreach ($arr_slideshow as $slideshow)
        {
            $slideshow->image_name = (isset($arr_image_lookup[$slideshow->id])) ? $arr_image_lookup[$slideshow->id] : '';
        }

        $arr_data['title'] = 'Home';
        $arr_data['header_id'] = $header_id;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['setting'] = $this->_setting;
        $arr_data['lang'] = $this->_lang;
        $arr_data['metatag'] = $this->cms_function->generate_metatag($header_id);
        $arr_data['arr_header'] = $this->cms_function->generate_header();
        $arr_data['arr_section'] = $this->cms_function->generate_section($header_id);
        $arr_data['arr_slideshow'] = $arr_slideshow;

        $this->load->view('preview/header', $arr_data);
        $this->load->view('preview/index', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_set_language($lang)
    {
        $json['status'] = 'success';

        try
        {
            // set cookie Language
            // change expiration in expire = time() + {duration}
            $cookie = array(
                'name'   => 'konsulthink_lang',
                'value'  => $lang,
                'expire' => time() + 7200,
            );

            set_cookie($cookie);
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
    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}
