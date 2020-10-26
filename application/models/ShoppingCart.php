<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/10/2018
 * Time: 9:25 AM
 */

class ShoppingCart extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function getCartProduct($id = ""){

        $data = array();
        $this->db->select("book.id,
                            book.isbn_no,
                            book.code,
                            book.title,
                            book.author,
                            book.description,
                            book.publisher_name,
                            book.year,
                            book.price,
                            book.stock_quantity,
                            cat.name,
                            image.file_path");
        $this->db->from('book');
        $this->db->join('category as cat', 'cat.id = book.category_id','left');
        $this->db->join('book_image as image', 'book.id = image.book_id','left');
        $this->db->where('book.id', $id);

        $query = $this->db->get();
        return $query->result();

    }

    public function insertToShoppingCart($data){
        // Inserting in Table(students) of Database(college)
        $this->db->insert('shopping_cart', $data);
    }
    public function getShoppingCartDetails($ss){
        //echo $ss;
        $this->db->select("book.id,
                            book.isbn_no,
                            book.code,
                            book.title,
                            book.author,
                            book.description,
                            book.publisher_name,
                            book.year,
                            book.price,
                            book.stock_quantity,
                            cat.name,
                            cart.total,
                            cart.book_id,
                            cart.quantity,
                            cart.session_id,
                            image.file_path,
                            ");
        $this->db->from('book');
        $this->db->join('category as cat', 'cat.id = book.category_id','left');
        $this->db->join('book_image as image', 'book.id = image.book_id','left');
        $this->db->join('shopping_cart as cart', 'book.id = cart.book_id','left');
        $this->db->where('cart.user_id', $ss);
        $this->db->group_by('book.id');
        $this->db->group_by('cart.user_id');

//->select_sum('cart.total')->from('shopping_cart as tot');
        $query = $this->db->get();
     // echo json_encode($query->result());
        return $query->result();
    }

    public function getcart($id){
        $this->db->select("book.id,
                            book.isbn_no,
                            book.code,
                            book.title,
                            book.author,
                            book.description,
                            book.publisher_name,
                            book.year,
                            book.price,
                            book.stock_quantity,
                            cat.name,
                            image.file_path,
                            ");
        $this->db->from('book');
        $this->db->join('category as cat', 'cat.id = book.category_id','left');
        $this->db->join('book_image as image', 'book.id = image.book_id','left');
        $this->db->where('book.id', $id);
    }

    public function getRemoveItem($rowId,$user_id){
        return $this->db->select("session_id")->from('shopping_cart')->where('user_id',$user_id)->where('session_id',$rowId)->get()->result();
    }

    public function remove($rowId){
        return $this->db->where('session_id', $rowId)->delete('shopping_cart');
    }


}