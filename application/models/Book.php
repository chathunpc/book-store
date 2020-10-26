<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/7/2018
 * Time: 10:20 AM
 */

class Book extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insertBook($data){
        // Inserting in Table(students) of Database(college)
        $this->db->insert('book', $data);
        $insertId = $this->db->insert_id();
        return  $insertId;
    }

    public function getAllBooksCount(){
        return $this->db->count_all('book');
    }

    public function getInStock(){
        $this->db->select_sum('stock_quantity');
        $result = $this->db->get('book')->row();
        return $result->stock_quantity;
    }

    public function getTotalSales(){
        $this->db->select_sum('total');
        $result = $this->db->get('shopping_cart')->row();
        return $result->total;
    }

    public function getSoldBooksCount(){
        $this->db->select_sum('quantity');
        $result = $this->db->get('shopping_cart')->row();
        return $result->quantity;
    }

    public function getAllBooks($title,$author, $limit, $start){


        $this->db->select("book.id,
                            book.isbn_no,
                            book.code,
                            book.title,
                            book.author,
                            book.description,
                            book.publisher_name,
                            book.year,book.price,
                            book.stock_quantity,
                            cat.name");
        $this->db->from('book');
//        if($search != ''){
//            $this->db->like('title', $search);
//            $this->db->or_like('author', $search);
//        }
        $this->db->join('category as cat', 'cat.id = book.category_id');
        if($title != '') {
            $this->db->like('book.title', $title);

           // $this->db->where("(title LIKE '$searchTitle' OR author LIKE '$searchAuthor')");
        }
        if($author != '') {
            $this->db->like('book.author', $author);

            // $this->db->where("(title LIKE '$searchTitle' OR author LIKE '$searchAuthor')");
        }
        $this->db->order_by("created_at", "DESC");
        $this->db->limit($limit, $start);

        $query = $this->db->get();

        return $query->result();
    }
    public function getBookDetail($id){
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

    public function getBooks($search, $field, $limit, $start){
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
                            book.category_id,
                            cat.name,
                            image.file_path");
        $this->db->from('book');
        $this->db->join('category as cat', 'cat.id = book.category_id','left');
        $this->db->join('book_image as image', 'book.id = image.book_id','left');

        if($search != '') {
            $this->db->like('book.title', $search);
            $this->db->or_like('book.author',$search);
        }
        if($field != '') {
            $this->db->like('book.category_id', $field);
        }

        $this->db->limit($limit,$start);
        $query = $this->db->get();
        return $query->result();
    }

    public function getBooksFilters($field=''){
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
        $this->db->like($field);
        $this->db->orderBy('cat.id');

        $query = $this->db->get();
        return $query->result();
    }

    public function bookDetail($id){
        $this->db->select("book.id,
                            book.isbn_no,
                            book.code,
                            book.title,
                            book.author,
                            book.description,
                            book.publisher_name,
                            book.year,book.price,
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

    public function insertToUser($user){
        $this->db->insert('user', $user);
        $insertId = $this->db->insert_id();
       // return  $insertId;
    }

    public function getTopViewedBooks($id){

        $this->db->select("*");
        $this->db->from('user as u');
        $this->db->join('book as b', 'b.id = u.book_id','inner');
        $this->db->join('category as c', 'c.id = b.category_id','inner');
        $this->db->join('book_image as bi', 'b.id = bi.book_id','inner');
        $this->db->where_not_in('b.id', $id);
        $this->db->group_by('b.id ');
        $this->db->order_by('u.timestamp', 'desc');
        $this->db->limit(5);

        $query = $this->db->get();
        return $query->result();
    }

}