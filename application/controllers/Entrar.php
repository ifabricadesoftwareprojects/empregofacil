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
                            'token'  => $this->usuario_model->token,
                            'nome'   => $this->usuario_model->nome,
                            'perfil' => $this->usuario_model->perfil 
                        )
                    );
                //Pra onde redirecionar?
                if($this->input->post('redirect') == base_url()){
                    redirect(strtolower($this->usuario_model->perfil));
                }
                else{
                    redirect($this->input->post('redirect'));
                }
            }
            else{
                $this->session->set_flashdata('msg', 'Email e/ou senha incorretos');
                $this->session->set_flashdata('abrir', 'Entrar');
            }
        }
        redirect('');
    }
    public function sendEmail()
    {
        
        $this->load->model('usuario_model');
        $this->usuario_model->email = $this->input->post('email');
        $this->load->library('email');

        $this->email->from('your@example.com', 'Your Name');
        $this->email->to($this->usuario_model->email);
        $this->email->cc('another@another-example.com');
        $this->email->bcc('them@their-example.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        
        $this->email->send();
        redirect('');
    }
}
