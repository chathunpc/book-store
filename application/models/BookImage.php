<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/7/2018
 * Time: 1:28 PM
 */

class BookImage extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    public function insertBookImage($file){
        $this->db->where('id');
		$result = $this->db->get('book');//db name
		$id = $result->row_array();
		$result->free_result();//garbage collector

        $bId = array(
            'book_id'  => $id,
        );

        $this->db->insert('book_image', $file,$bId);
    }

}