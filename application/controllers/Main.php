<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
    private $_lang;
    private $_setting;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();

        // check language
        $this->_lang = (!get_cookie('otella_lang')) ? $this->_setting->setting__system_language : get_cookie('otella_lang');
        $this->_lang = ($this->_setting->setting__website_enabled_dual_language <= 0) ? $this->_setting->setting__system_language : $this->_lang;

        // check maintenance
        if ($this->_setting->setting__system_main_website_maintenance > 0)
        {
            redirect(base_url() . 'maintenance/');
        }
    }




    /* Public Function Area */
    public function index()
    {
        $header_id = 1;

        $arr_data['title'] = 'Home';
        $arr_data['setting'] = $this->_setting;
        $arr_data['lang'] = $this->_lang;
        $arr_data['arr_header'] = $this->cms_function->generate_header($this->_lang, $this->_setting);
        $arr_data['csrf'] = $this->cms_function->generate_csrf();

        $this->load->view('home', $arr_data);
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
                'name'   => 'otella_lang',
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
