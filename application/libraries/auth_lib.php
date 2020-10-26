<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 11/6/2018
 * Time: 9:56 AM
 */

class Auth_lib {

    function __construct()
    {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();

        $this->ci->load->model('admin');

    }

//    public function register($name,$user,$pwd,$conf_pwd)
//    {
//        if ($name == '' || $user == '' || $pwd == '' || $conf_pwd == '') {
//            return 'Missing field';
//        }
//        if ($pwd != $conf_pwd) {
//            return "Passwords do not match";
//        }
//        return $this->ci->Admin->register($name,$user,$pwd);
//    }

    public function login($user,$pwd)
    {
        if ($user == '' || $pwd == '') {
            return false;
        }
        return $this->ci->admin->login($user,$pwd);
    }

}
