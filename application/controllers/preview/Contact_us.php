<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller
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
        $header_id = 5;

        $arr_data['title'] = 'Contact Us';
        $arr_data['header_id'] = $header_id;
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['setting'] = $this->_setting;
        $arr_data['lang'] = $this->_lang;
        $arr_data['metatag'] = $this->cms_function->generate_metatag($header_id);
        $arr_data['arr_header'] = $this->cms_function->generate_header();
        $arr_data['arr_section'] = $this->cms_function->generate_section($header_id);

        $this->load->view('preview/header', $arr_data);
        $this->load->view('preview/contact_us', $arr_data);
    }
    /* End Public Function Area */




    /* Ajax Area */
    public function ajax_send_message()
    {
        $json['status'] = 'success';

        try
        {
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');

            // send email
            $this->load->library('email');

            $this->email->from('no-reply@hijau.expert', 'KonsulTHINK');
            $this->email->to($this->_setting->system_email_send_to);

            $arr_cc_email = explode(';', $this->_setting->system_email_send_cc);

            foreach ($arr_cc_email as $cc_email)
            {
                $cc_email = trim($cc_email);
            }

            $this->email->cc($arr_cc_email);

            $this->email->to($this->_setting->system_email_send_to);
            $this->email->bcc($this->_setting->system_email_bcc);

            $message = "Dear Admin KonsulTHINK \n\nan email has contacted you\n\nName: {$name}\nEmail: {$email}\nphone: {$phone}\nMessage: {$message} \n\nThank you.";

            $this->email->subject("[KonsulTHINK] Enquiry from {$email} - {$subject}");
            $this->email->message($message);

            if ($this->input->post('email') && $this->input->post('email') != '')
            {
                @$this->email->send();
            }
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
