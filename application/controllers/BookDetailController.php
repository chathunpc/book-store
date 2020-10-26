<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/28/2018
 * Time: 10:15 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class BookDetailController extends CI_Controller {

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
        $this->load->view('book_detail_view');
    }

    public function viewBookDetail($id){

        $session_id = $this->session->userdata('session_id');
        $this->data['details'] = $this->book->bookDetail($id);
        if(!isset($_SESSION['id'])){
            $_SESSION['id']=uniqid();
        }
        $user = array(
            'unique_user_id' => $_SESSION['id'],
            'book_id'        => $id,
            'timestamp'      => date('Y-m-d H:i:s')
        );
        $this->book->insertToUser($user);
        $this->getViewedBooks($id);
        $this->load->view('book_detail_view',$this->data);
    }

    public function getViewedBooks($id){

        $this->data['top_books'] = $this->book->getTopViewedBooks($id);

        return $this->data;
    }


}




