<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Model{
    
    function __construct(){
        $this->load->database();
    }

    public function login($usuario, $password){
        $data = $this->db->get_where('users',array('usuario' => $usuario, 'password' => $password),1);
        if(!$data->result()){
            return false;    
        }
        return $data->row();
    }
}