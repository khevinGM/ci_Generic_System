<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba extends CI_Controller{


    function __construct(){
        parent::__construct();
        $this->load->helper(array('getmenu'));
        $this->load->model('Productos');
        $this->load->library(array('form_validation'));
    }
    function index(){
            $data['menu'] = main_menu();
            $this->load->view('prueba_view',$data);
    }

    function devolverProducto(){
        $producto = $this->input->post('producto');
        $precio = $this->input->post('precio');
        $cantidad = $this->input->post('cantidad');
        
        $config = array(
            array(
                    'field' => 'producto',
                    'label' => 'Producto',
                    'rules' => 'required|alpha_numeric',
                    'errors' => array(
                        'required' => 'Se necesita un %s valido',
                        'alpha_numeric' => 'El %s solo puede tener letras y numeros'
                    ),
            ),
            array(
                    'field' => 'precio',
                    'label' => 'Precio',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'Se necesita un %s valido',
                    ),
            ),
            array(
                    'field' => 'cantidad',
                    'label' => 'Cantidad',
                    'rules' => 'required',
                    'errors' => array(
                        'required' => 'Se necesita una %s valida',
                    ),
            ),
    );
    
    $this->form_validation->set_rules($config);

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('prueba_view');
    }else{
        $datos = array(
            'producto' => $producto,
            'precio' => $precio,
            'cantidad' => $cantidad,
        );
        if (!$this->Productos->create($datos)) {
            $data['msg'] = 'Ocurrio un error al ingresa los datos intentelo mas tarde';
            $this->load->view('prueba_view',$data);
        }
        $data['msg'] = 'registrado correctamente';
        $this->load->view('prueba_view',$data);
    }
    }

}