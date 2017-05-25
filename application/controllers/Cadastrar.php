<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Candidato
 *
 * @author Rafael W. Pinheiro
 */
class Cadastrar extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function candidato()
    {
        if($this->input->post()){
            $this->load->model('usuario_model');
            $this->usuario_model->post_to($this->input->post(), $this->usuario_model);
            
            try{
                $this->usuario_model->insert_candidato();
                $this->session->set_flashdata('resposta_titulo', 'Cadastro Efetuado!');
                $this->session->set_flashdata('resposta_msg', 'Prezado(a) <strong>' . $this->usuario_model->nome . '</strong>. '
                        . 'Seu cadastro foi efetuado com sucesso. Faça o login agora mesmo e preencha seu currículo.');
                redirect('cadastrar/resposta');
            } catch (Exception $ex) {
                $this->session->set_flashdata('abrircadastrar', true);
                $this->session->set_flashdata('erros', $this->usuario_model->get_erro());
                $this->session->set_flashdata('dadoscandidato', $this->input->post());
                redirect('home');
            }
        }
    }
    
    public function resposta()
    {
        $dados['resposta_titulo'] = $this->session->flashdata('resposta_titulo');
        if($dados['resposta_titulo'] == null){
            redirect('');
        }
        $dados['resposta_msg'] = $this->session->flashdata('resposta_msg');
        $dados['link_login'] = true;
        $this->view('resposta', $dados);
    }
}
