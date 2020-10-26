<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/6/2018
 * Time: 9:23 AM
 */

class Admin extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

//    function register($name,$username,$pwd)
//    {
//        // is username unique?
//        $res = $this->db->get_where('users',array('username' => $username));
//        if ($res->num_rows() > 0) {
//            return 'Username already exists';
//        }
//        // username is unique
//        $hashpwd = sha1($pwd);
//        $data = array('name' => $name,'username' => $username,
//            'password' => $hashpwd);
//        $this->db->insert('users',$data);
//        return null; // no error message because all is ok
//    }

    function login($username,$pwd)
    {
        $this->db->where(array('username' => $username,'password' => md5($pwd)));
        $res = $this->db->get('admin',array('user'));

       // $data = $res->result_array();
        if ($res->num_rows() != 1) { // should be only ONE matching row!!
            return false;
        }

        $session_id = $this->session->userdata('session_id');

        $this->session->set_userdata('logged', $res);

        //return $session_id;
        $session = $this->db->insert('logins',array('name' => $username, 'session_id' => session_id()));
       // $this->db->insert('admin',array('logins_id'=>$session->id));

        return $res->row_array();

    }

}