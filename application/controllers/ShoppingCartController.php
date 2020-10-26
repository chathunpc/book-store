<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/10/2018
 * Time: 9:26 AM
 */

class ShoppingCartController extends CI_Controller {

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
        $this->load->library('cart');

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array('form', 'url'));
        $this->load->helper('array');

        $this->load->model('category');
        $this->load->model('admin');
        $this->load->model('book');
        $this->load->model('bookImage');
        $this->load->model('shoppingCart');

    }


    public function viewShoppingCart(){
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = session_id();
        }

        $sess = session_id();

        $this->data['cart']  = $this->shoppingCart->getShoppingCartDetails($sess);

        $this->load->view('shopping_cart', $this->data);
    }

    public function addToCart(){
        $qty    = $this->input->post('quantity');
        $id     = $this->input->post('bookid');
        $price  = $this->input->post('price');
        $title  = $this->input->post('title');

        $cart_data=$this->shoppingCart->getCartProduct($id);

        $data = array(
            'id'      => $id,
            'qty'     => $qty,
            'price'   => $price,
            'name'    => $title
        );

        $this->cart->insert($data);



        foreach ($this->cart->contents() as $items){
           print_r( json_encode($items));
            $cid = $items['id'];

            $data = array(
                'book_id'    => $cid,
                'quantity'   => $items['qty'],
                'session_id' => $items['rowid'],
                'total'      => $items['subtotal'],
                'timestamp'  => date('Y-m-d H:i:s'),
                'user_id'    => session_id()
            );
            $this->shoppingCart->insertToShoppingCart($data);

        }
    }


    public function emptyCart(){
        $this->cart->destroy();
        redirect('HomeController/index');
    }

    function removeCartItem($rowid) {

        $user_id = session_id();
        $item = $this->shoppingCart->getRemoveItem($user_id,$rowid);

        $data = array(
            'rowid'   => $rowid,
            'qty'     => 0
        );

        $this->cart->update($data);
        $this->shoppingCart->remove($rowid);

       redirect('ShoppingCartController/viewShoppingCart',$rowid);
    }




}