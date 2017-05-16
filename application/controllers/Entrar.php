<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Login
 *
 * @author Rafael W. Pinheiro
 */
class Entrar extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        if($this->input->post()){
            $this->load->model('usuario_model');
            $this->usuario_model->email = $this->input->post('email');
            $this->usuario_model->senha = $this->input->post('senha');
            
            if($this->usuario_model->autenticar() !== false){
                $this->session->set_userdata(
                        array(
                            'token' => $this->usuario_model->token,
                            'nome'  => $this->usuario_model->nome
                        )
                    );
                    redirect('candidato');
            }
            else{
                $this->session->set_flashdata('msg', 'Email e/ou senha incorretos');
            }
        }
        redirect('');
    }
}
