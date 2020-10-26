<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/3/2018
 * Time: 4:14 PM
 */

class Category extends CI_Model {


    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function insert_category($data){
        // Inserting in Table(students) of Database(college)
        $this->db->insert('category', $data);
    }
    public function getBookCategories(){
        $result = $this->db->select('id, name')->get('category')->result_array();

        $category = array();
        $category[''] = '--Select Category--';
        foreach ($result as $r) {
            $category[$r['id']] = $r['name'];
        }

        return $category;
    }

    public function getBookCategoriesFilter(){
        $result = $this->db->select('id, name')->get('category')->result_array();

        $category = array();
        $category[''] = '--Filters--';
        foreach ($result as $r) {
            $category[$r['id']] = $r['name'];
        }

        return $category;
    }

    public function getAllBookCategories(){
        $this->db->select('id,name')->from('category');
        $query = $this->db->get();
        return $query->result();
    }

    public function getAllBooksByCategory($category_id,$limit,$start){


        $this->db->select('*')
             ->from('book')
             ->join('category', 'category.id= book.category_id')
             ->join('book_image', 'book_image.book_id= book.id');
        $this->db->where('category_id', $category_id);
        $this->db->limit($limit,$start);
        $query = $this->db->get();
        return $query->result();

    }

    public function getAllBooksCategoryCount($category_id){
        $this->db->select('*')
            ->from('book')
            ->join('category', 'category.id= book.category_id');
        $this->db->where('category_id', $category_id);
        return $this->db->count_all_results();;
    }

    // Count all record in database.
    public function record_count() {
        return $this->db->count_all("book");
    }
}