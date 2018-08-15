<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller
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
        $header_id = 4;
        $now = time();

        $this->db->where('events_id >', 0);
        $this->db->where('type', '');
        $arr_image = $this->core_model->get('image');

        $arr_image_lookup = array();

        foreach ($arr_image as $image)
        {
            $arr_image_lookup[$image->events_id] = ($image->name != '') ? $image->name : $image->id . '.' . $image->ext;
        }

        // get upcoming events
        $this->db->where('date >', $now);
        $this->db->limit(4);
        $arr_upcoming_events = $this->core_model->get('events');

        foreach ($arr_upcoming_events as $upcoming_events)
        {
            $upcoming_events->date_display = date('M d, Y', $upcoming_events->date);
            $upcoming_events->image_name = (isset($arr_image_lookup[$upcoming_events->id])) ? $arr_image_lookup[$upcoming_events->id] : '';
        }

        // get past events
        $this->db->where('date <=', $now);
        $this->db->limit(4);
        $arr_past_events = $this->core_model->get('events');

        foreach ($arr_past_events as $past_events)
        {
            $past_events->date_display = date('M d, Y', $past_events->date);
            $past_events->image_name = (isset($arr_image_lookup[$past_events->id])) ? $arr_image_lookup[$past_events->id] : '';
        }

        $arr_data['title'] = 'Events';
        $arr_data['header_id'] = $header_id;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['setting'] = $this->_setting;
        $arr_data['lang'] = $this->_lang;
        $arr_data['metatag'] = $this->cms_function->generate_metatag($header_id);
        $arr_data['arr_header'] = $this->cms_function->generate_header();
        $arr_data['arr_section'] = $this->cms_function->generate_section($header_id);
        $arr_data['arr_upcoming_events'] = $arr_upcoming_events;
        $arr_data['arr_past_events'] = $arr_past_events;

        $this->load->view('header', $arr_data);
        $this->load->view('events', $arr_data);
    }




    public function detail($url_name = '')
    {
        $header_id = 4;

        if ($url_name == '')
        {
            redirect(base_url() . 'events/');
        }

        $this->db->where('url_name', $url_name);
        $arr_events = $this->core_model->get('events');

        if (count($arr_events) <= 0)
        {
            redirect(base_url() . 'events/');
        }

        $events = $arr_events[0];
        $events->date_display = date('M d, Y', $events->date);
        $events->upcoming = ($events->date > time()) ? 1 : 0;
        $events->image_name = '';

        $arr_image_lookup = array();

        // get image
        $this->db->where('events_id', $events->id);
        $arr_image = $this->core_model->get('image');

        foreach ($arr_image as $image)
        {
            if ($image->type == '')
            {
                $events->image_name = ($image->name != '') ? $image->name : $image->id . '.' . $image->ext;
            }
            else
            {
                $arr_image_lookup[$image->events_id] = ($image->name != '') ? $image->name : $image->id . '.' . $image->ext;
            }
        }

        $events->arr_image_events = $arr_image_lookup;

        $metatag = $this->cms_function->generate_metatag($header_id);
        $metatag->name = ($events->metatag_title != '') ? $events->metatag_title : $metatag->name;
        $metatag->keywords = ($events->metatag_keywords != '') ? $events->metatag_keywords : $metatag->keywords;
        $metatag->author = ($events->metatag_author != '') ? $events->metatag_author : $metatag->author;
        $metatag->description = ($events->metatag_description != '') ? $events->metatag_description : $metatag->description;

        $arr_data['title'] = 'Events Detail';
        $arr_data['header_id'] = $header_id;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['setting'] = $this->_setting;
        $arr_data['lang'] = $this->_lang;
        $arr_data['metatag'] = $metatag;
        $arr_data['arr_header'] = $this->cms_function->generate_header();
        $arr_data['events'] = $events;

        $this->load->view('header', $arr_data);
        $this->load->view('events_detail', $arr_data);
    }

    public function register($url_name = '')
    {
        $header_id = 4;

        if ($url_name == '')
        {
            redirect(base_url() . 'events/');
        }

        $this->db->where('url_name', $url_name);
        $arr_events = $this->core_model->get('events');

        if (count($arr_events) <= 0)
        {
            redirect(base_url() . 'events/');
        }

        $events = $arr_events[0];
        $events->date_display = date('M d, Y', $events->date);

        $metatag = $this->cms_function->generate_metatag($header_id);
        $metatag->name = ($events->metatag_title != '') ? $events->metatag_title : $metatag->name;
        $metatag->keywords = ($events->metatag_keywords != '') ? $events->metatag_keywords : $metatag->keywords;
        $metatag->author = ($events->metatag_author != '') ? $events->metatag_author : $metatag->author;
        $metatag->description = ($events->metatag_description != '') ? $events->metatag_description : $metatag->description;

        $arr_data['title'] = 'Events Registration';
        $arr_data['header_id'] = $header_id;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['setting'] = $this->_setting;
        $arr_data['lang'] = $this->_lang;
        $arr_data['metatag'] = $metatag;
        $arr_data['arr_header'] = $this->cms_function->generate_header();
        $arr_data['events'] = $events;

        $this->load->view('header', $arr_data);
        $this->load->view('events_register', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_register()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

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
                    $registrant_record[$k] = ($k == 'date') ? strtotime($v) : $v;
                }
            }

            $registrant_record = $this->cms_function->populate_foreign_field($registrant_record['events_id'], $registrant_record, 'events');

            $registrant_id = $this->core_model->insert('registrant', $registrant_record);

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
    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}
