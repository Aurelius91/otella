<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller
{
    private $_lang;
    private $_setting;

    public function __construct()
    {
        parent:: __construct();

    }




    /* Public Function Area */
    public function index()
    {
        $header_id = 1;

        $arr_data['title'] = 'Search';

        $this->load->view('search', $arr_data);
    }
    /* End Public Function Area */



    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}
