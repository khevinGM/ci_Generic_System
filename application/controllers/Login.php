<?php
defined('BASEPATH') OR exit ('No direct script access allowed ');


class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->model('User_reg');
        $this->load->model('Auth');
        
    }
    
    function index(){
        $this->load->view('login_view'); 
    }


    function register_view(){
        $this->load->view('register_view');
    }


    function register(){
        $user_r = $this->input->post('usuario_r');
        $pass_r = $this->input->post('password_r');
        $data = array (
            'usuario' => $user_r,
            'password' => $pass_r
        );
        if(!$this->User_reg->registrar($data)){
            echo "datos incorrectos";
        }
        echo "registro exitoso";
    }


    function confirm(){
        $user = $this->input->post('usuario');
        $pass = $this->input->post('password');
        $data = array (
            'user' => $user,
            'pass' => $pass
        );
        if (!$this->auth->verificar($data)) {
            echo 'No se encontraron datos';
        }else{
            var_dump($data);
        }
    }

    function validate(){
        $user = $this->input->post('usuario');
        $password = $this->input->post('password');

        if(!$res = $this->Auth->login($user, $password)){
            echo json_encode(array('msg' => 'Usuario o contraseña incorrectos'));
            $this->output->set_status_header(401);
            exit;
        }

        $data = array(
            'id' => $res->id,
            'user' => $res->usuario,
            'pass' => $res->password,
            'is_logged' => TRUE,
        );

        $this->session->set_userdata($data);
        $this->session->set_flashdata('msg','Bienvenido al sistema '.$data['user']);
        echo json_encode(array('url' => base_url('dashboard')));
            // $this->output->set_status_header(200);
        
            // var_dump($res->usuario);
            // echo json_encode(array('url' => 'Bienvenido'));
            
        
            
    }

    public function logout(){
        $vars = array('id','user','pass','is_logged');
        $this->session->unset_userdata($vars);
        $this->session->sess_destroy();
        redirect(base_url());
    } 
}