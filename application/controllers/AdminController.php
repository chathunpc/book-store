<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 9:11 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller{

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
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('category');
        $this->load->model('admin');
        $this->load->model('book');
        $this->load->model('bookImage');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    public function index()
    {
        $this->load->view('admin_login_view');
    }

    public function authenticate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user     = $this->auth_lib->login($username,$password);

        if ($user !== false) {
            $this->load->view('admin_main_view');
        }
        else {
            $data['errmsg'] = 'Unable to login - please try again';
            $this->load->view('admin_login_view',$data);
        }

    }

    public function dashboard(){
        $data['book_count'] = $this->book->getAllBooksCount();
        $data['in_stock']   = $this->book->getInStock();
        $data['total_sales']= $this->book->getTotalSales();
        $data['sold_books'] = $this->book->getSoldBooksCount();
        $data['top_books']  = $this->book->getTopViewedBooks(1);

        $this->load->view('admin_dashboard',$data);
    }

    public function addCategoryView(){
        $this->load->view('admin_add_category');
    }

    public function addBookView(){
        $data['category'] = $this->category->getBookCategories();
        $this->load->view('admin_add_book',$data);
    }

    public function viewBookList(){
        // Search text
        $title = $this->input->get('title');
        $author= $this->input->get('author');

        $config                 = array();
        $config["base_url"]     = base_url() . "index.php/AdminController/viewBookList";
        $config["total_rows"]   = $this->book->getAllBooksCount();
        $config["per_page"]     = 10;
        $config["uri_segment"]  = 3;
        $config['first_link']   = 'First Page';
        $config['last_link']    = 'Last Page';
        $config['cur_tag_open'] = '<a class="active">';
        $config['cur_tag_close'] = '</a>';

        $this->pagination->initialize($config);

        $page           = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data["links"]  = $this->pagination->create_links();

        $data['books']  = $this->data['books'] = $this->book->getAllBooks($title,$author,$config["per_page"], $page);

        $categories['category'] = $this->category->getBookCategories();
        $this->load->view('admin_book_list', $data); // load the view file , we are passing $data array to view file

    }

    public function viewBookDetail($id){
        $this->data['details'] = $this->book->getBookDetail($id);
        $this->load->view('admin_book_detail_view',$this->data);
    }

    public function addCategory(){

        $this->form_validation->set_rules('category', 'Category', 'required');

        if ($this->form_validation->run() == TRUE)
        {
            //Setting values for tabel columns
            $data = array(
                'name' => $this->input->post('category')
            );
            //Transfering data to Model
            $this->category->insert_category($data);
            $data['message'] = 'Data Inserted Successfully';
            //Loading View
            $this->load->view('admin_add_category', $data);
        }else{
            $this->load->view('admin_add_category');
        }


    }

    public function addBook(){

        $this->form_validation->set_rules('isbn', 'ISBN', 'required');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('author', 'Author', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');
        $this->form_validation->set_rules('stockQty', 'Stock Qty', 'required');
        $this->form_validation->set_rules('images', 'Image', 'required');

        if ($this->form_validation->run() == TRUE) {
            /*FORM DATA*/
            $data = array(
                'isbn_no'        => $this->input->post('isbn'),
                'code'           => $this->input->post('isbn'),
                'title'          => $this->input->post('title'),
                'author'         => $this->input->post('author'),
                'description'    => $this->input->post('description'),
                'publisher_name' => $this->input->post('publisher'),
                'year'           => $this->input->post('year'),
                'price'          => $this->input->post('price'),
                'category_id'    => $this->input->post('category'),
                'stock_quantity' => $this->input->post('stockQty'),
                'created_at'     => date("YmdHis")
            );


            $book = $this->book->insertBook($data);



            if (!empty($_FILES['images']['name'][0])) {

                if ($this->upload_files($this->input->post('title'),$_FILES['images']) === FALSE) {
                    //if Errors
                    $data['error'] = $this->upload->display_errors('<div class="alert alert-danger">', '</div>');

                }
                $filePath= $this->upload->data('file_path');
                $file_ext = $this->upload->data('file_ext');
                $file_name = $this->upload->data('file_name');
                /*IMAGE DATA*/
                $file = array(
                    'file_path' => $filePath.$file_name,
                    'file_ext'  => $file_ext,
                    'book_id'   => $book,
                    'created_at'=> date("YmdHis")
                );
                $this->bookImage->insertBookImage($file);
            }

            $data['message'] = 'Data Inserted Successfully';
            //Loading View
            redirect('AdminController/addBookView', 'refresh');
        }else{
            $data['category'] = $this->category->getBookCategories();
            $this->load->view('admin_add_book',$data);
        }


    }

   private function upload_files( $title, $files)
    {
        $config = array(
            'upload_path'   => './uploads/',
            'allowed_types' => 'jpg|gif|png',
            'overwrite'     => 1,
        );

        $this->load->library('upload', $config);

        $images = array();

        foreach ($files['name'] as $key => $image) {
            $_FILES['images[]']['name']= $files['name'][$key];
            $_FILES['images[]']['type']= $files['type'][$key];
            $_FILES['images[]']['tmp_name']= $files['tmp_name'][$key];
            $_FILES['images[]']['error']= $files['error'][$key];
            $_FILES['images[]']['size']= $files['size'][$key];

            $fileName = $title .'_'. $image;

            $images[] = $fileName;

            $config['file_name'] = $fileName;

            $this->upload->initialize($config);

            if ($this->upload->do_upload('images[]')) {
                $this->upload->data();
            } else {
                return false;
            }
        }
        return $images;
    }

    function logout()
    {
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
        $this->session->sess_destroy();
        redirect('AdminController/index','refresh');
    }
}

