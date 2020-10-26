<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 10/21/2018
 * Time: 10:51 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

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
        $this->load->library('email');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
        $this->load->model('category');
        $this->load->model('admin');
        $this->load->model('book');
        $this->load->model('bookImage');
    }

    public function index(){

        $this->data['categories'] = $this->category->getAllBookCategories();
        if(!isset($_SESSION['id'])){
            $_SESSION['id']=uniqid();
        }

        $this->load->view('home_view',$this->data);
    }

    public function shoppingCart(){

        $this->load->view('shopping_cart');
    }

    public function viewAllByCategory($category_id){

        $config                 = array();
        $config["base_url"]     = base_url() . 'index.php/HomeController/viewAllByCategory/'.$category_id;
        $config["total_rows"]   = $this->category->getAllBooksCategoryCount($category_id);
        $config["per_page"]     = 10;
        $config["uri_segment"]  = 2;
        $config['first_link']   = 'First Page';
        $config['last_link']    = 'Last Page';
        $config['cur_tag_open'] = '<a class="active">';
        $config['cur_tag_close'] = '</a>';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

        // build paging links
        $data['details'] = $this->category->getAllBooksByCategory($category_id,$config["per_page"], $page);

        $data["links"] = $this->pagination->create_links();

        $this->load->view('all_books_category_view',$data);
    }

    public function contact(){
        $this->load->view('contact_us_view');
    }

    public function sendEmail(){

        /* ****** // Go to your gmail account -> go to security tab -> allow access to less secure apps // ******/

        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');

        $email_address = $this->input->post('email');
        $my_email      = "youemail@gmail.com";
        if ($this->form_validation->run() == TRUE) {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'YOUR EMAIL ADDRESS',
                'smtp_pass' => 'YOUR EMAIL ADDRESS PASSWORD', // Go to your gmail account -> go to security tab -> allow access to less secure apps
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );

            $this->email->initialize($config);


            $this->email->set_newline("\r\n");
            $this->email->from($my_email);
            $this->email->to($email_address);
            $this->email->subject('AshBooks');
            $this->email->message("Thanks for Contacting Us");
            if ($this->email->send()) {
                $this->session->set_flashdata("email_sent", "Email sent successfully.");
            } else {
                show_error($this->email->print_debugger());
            }
        }

       // $this->sendSMS(); // Uncomment This method after you config the sms gateway

        redirect('HomeController/contact','refresh');
    }

    public function sendSMS(){


        $username = 'username';//create a sms gateway, and use the credentials
        $password = 'password';
        $to = $this->input->post('phone');
        $from = 'AshCakes';
        $message = 'Thanks For Contacting Us';
        $url = base_url().$username."&password=".$password."&to=".$to."&from=".urlencode($from)."&message=".urlencode($message)."";

        //Curl Start
        $ch  =  curl_init();
        $timeout  =  30;
        curl_setopt ($ch,CURLOPT_URL, $url) ;
        curl_setopt ($ch,CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT, $timeout) ;
        $response = curl_exec($ch) ;
        curl_close($ch) ;
        //Write out the response
        echo $response ;
    }

}
