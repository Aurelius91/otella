<?php defined('BASEPATH') OR exit('No direct script access allowed');

class News_and_gallery extends CI_Controller
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

        $arr_data['title'] = 'News and Gallery';

        $this->load->view('news-and-gallery', $arr_data);
    }
    /* End Public Function Area */



    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}
