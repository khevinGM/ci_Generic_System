<?php
// defined('BASEPATH') OR exit ('No direct script access allowed');

class User_reg extends CI_Model{

    function __construct(){
        // parent::__construct();
        $this->load->database();
    }

    public function registrar($datos){
        // $data = array (
        //     'usuario' => $user_r['usuario'],
        //     'password' => $pass_r['password']
        // );
        if(!$this->db->insert('users',$datos)){
            return false;
        }
        return true;
    }
}