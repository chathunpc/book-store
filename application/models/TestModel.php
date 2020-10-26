<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/10/2018
 * Time: 7:46 AM
 */

class TestModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

    //login method in Model
    function login($username,$pwd)
    {
        //query to check username and password
        $this->db->where(array('username' => $username,'password' => md5($pwd)));
        $res = $this->db->get('admin',array('user'));

        // $data = $res->result_array();
        if ($res->num_rows() != 1) { // should be only ONE matching row!!
            return false;
        }

        $session_id = $this->session->userdata('session_id');

        $this->session->set_userdata('logged', $res);

        //insert data to my Table related to store sessions
        $session = $this->db->insert('logins',array('name' => $username, 'session_id' => session_id()));


        return $res->row_array();

    }

    //insert data to table in model code
    public function insertBook($data){
        // Inserting in Table(table name) data passed from controller
        $this->db->insert('book', $data);
        $insertId = $this->db->insert_id();
        return  $insertId;
    }

    //get data from table to a dropdown list
    public function getBookCategories(){
        $result = $this->db->select('id, name')->get('category')->result_array();

        $category = array();
        $category[''] = '--Select Category--';
        foreach ($result as $r) {
            $category[$r['id']] = $r['name'];
        }

        return $category;
    }

    //get all data from table
    public function getAllDataFromTable(){
        $this->db->select('id,name')->from('category');
        $query = $this->db->get();
        return $query->result();
    }

}