<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/10/2018
 * Time: 7:18 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller{

    //constructor  use ' __ '
    public function __construct(){
        parent::__construct();
        $this->load->library('auth_lib');//library file foe auth login inside the libraries folder
        //codeignitor libraries
        $this->load->library('session');//session library (this is not there in the libraries dont worry about it)
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
        //your models 'simple letters'
        $this->load->model('category');
        $this->load->model('admin');
        $this->load->model('book');
        $this->load->model('bookImage');

    }

    //how to display a view
    public function index()
    {
        $this->load->view('admin_login_view');
    }

    //login function
    public function authenticate()
    {
        //how to get the values from input fields
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //pass them to the method inside auth_lib
        $user = $this->auth_lib->login($username,$password);//returns true or false

        //if user is not false loads the view
        if ($user !== false) {
            $this->load->view('admin_main_view');
        }
        //else display error msgs and load login view with the error msgs
        else {
            $data['errmsg'] = 'Unable to login - please try again';
            $this->load->view('admin_login_view',$data);
        }

    }

    //get data to the view (example : data to a drop downlist) to select categories to add a book
    public function getData(){
        $data['category'] = $this->category->getBookCategories();
        $this->load->view('admin_add_book',$data);
    }

    //view a list
    public function viewBookList(){
        // FILTERS
        $title = $this->input->post('author');
        $author= $this->input->post('title');

        //get data from model
        $book = $this->data['books'] = $this->book->getAllBooks($title,$author);
        $data=array($book);
        // print_r(json_encode($this->data));
        $this->load->view('admin_book_list', $this->data); // load the view file , we are passing $data array to view file
    }

    //to add data to DB - in controller you have to write these
    public function addCategory(){
        //Setting values for tabel columns
        $data = array(
        //table field => get data from input ('input name')
            'name' => $this->input->post('category')
        );
        //Transfering data to Model bycalling the method
        $this->category->insert_category($data);
        $data['message'] = 'Data Inserted Successfully';
        //Loading View
        $this->load->view('admin_add_category', $data);
    }
    //TO add an image try this on  https://stackoverflow.com/questions/20113832/multiple-files-upload-in-codeigniter

}