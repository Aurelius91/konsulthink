<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms_analytics
{
	public function record()
	{
		$CI = &get_instance();

		$CI->load->library('user_agent');
		$time = time();
        $old_time = time() - 86400;

		// get IP
		$ip_address = '';

        if (getenv('HTTP_CLIENT_IP'))
        {
            $ip_address = getenv('HTTP_CLIENT_IP');
        }
        else if(getenv('HTTP_X_FORWARDED_FOR'))
        {
            $ip_address = getenv('HTTP_X_FORWARDED_FOR');
        }
        else if(getenv('HTTP_X_FORWARDED'))
        {
            $ip_address = getenv('HTTP_X_FORWARDED');
        }
        else if(getenv('HTTP_FORWARDED_FOR'))
        {
            $ip_address = getenv('HTTP_FORWARDED_FOR');
        }
        else if(getenv('HTTP_FORWARDED'))
        {
           $ip_address = getenv('HTTP_FORWARDED');
        }
        else if(getenv('REMOTE_ADDR'))
        {
            $ip_address = getenv('REMOTE_ADDR');
        }
        else
        {
            $ip_address = 'UNKNOWN';
        }

        // get location
        //$ipdat = json_decode(file_get_contents("http://freegeoip.net/json/{$ip_address}"));
        $location = '';

        // check old analytics
        $CI->db->where('date >', $old_time);
        $CI->db->where('ip_address', $ip_address);
        $CI->db->where('browser', $CI->agent->browser());
        $CI->db->where('version', $CI->agent->version());
        $CI->db->where('mobile', $CI->agent->mobile());
        $CI->db->where('platform', $CI->agent->platform());
        $CI->db->where('location', $location);
        $CI->db->where('website_url', current_url());
        $count_old_analytics = $CI->core_model->count('analytics');

        if ($count_old_analytics <= 0)
        {
            $analytics_record = array();
            $analytics_record['date'] = time();
            $analytics_record['browser'] = $CI->agent->browser();
            $analytics_record['version'] = $CI->agent->version();
            $analytics_record['mobile'] = $CI->agent->mobile();
            $analytics_record['platform'] = $CI->agent->platform();
            $analytics_record['referrer'] = $CI->agent->referrer();
            $analytics_record['agent_string'] = $CI->agent->agent_string();
            $analytics_record['location'] = $location;
            $analytics_record['ip_address'] = $ip_address;
            $analytics_record['website_url'] = current_url();

            $CI->core_model->insert('analytics', $analytics_record);
        }
    }
}