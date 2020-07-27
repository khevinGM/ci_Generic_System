<?php
    defined('BASEPATH') OR exit ('No direct script access allowed');
    class Productos extends CI_Model{
        function __construct(){
            $this->load->database();

        }

        public function create($datos){
            if(!$this->db->insert('Examen',$datos)){
                return false;
            }
            return true;
        }
    }