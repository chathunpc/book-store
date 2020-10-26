<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/27/2018
 * Time: 5:57 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class ItemsListController extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct(){
        parent::__construct();
        $this->load->library('auth_lib');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('category');
        $this->load->model('admin');
        $this->load->model('book');
        $this->load->model('bookImage');
        $this->load->helper(array('form', 'url'));
    }


    public function index()
    {
        $this->load->view('all_books_view');
    }

    public function viewAllBooks(){

        $field  = $this->input->get('category');
        $search = $this->input->get('search');


        $config = array();
        $config["base_url"]     = base_url() . 'index.php/ItemsListController/viewAllBooks/';
        $config["total_rows"]   = $this->category->record_count();
        $config["per_page"]     = 10;
        $config["uri_segment"]  = 2;
        $config['first_link']   = 'First Page';
        $config['last_link']    = 'Last Page';
        $config['cur_tag_open'] = '<a class="active">';
        $config['cur_tag_close'] = '</a>';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;


        // build paging links
        $data["links"] = $this->pagination->create_links();
        $data['books'] = $this->book->getBooks($search,$field, $config["per_page"], $page);
        $data['categories'] = $this->category->getBookCategoriesFilter();

        $this->load->view('all_books_view',$data);
    }



}






