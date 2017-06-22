<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Home
 *
 * @author Rafael W. Pinheiro
 */
class Vagas extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('theme');
        $this->load->model('vaga_model');
        $this->load->model('candidatar_model');
        $this->load->model('usuario_model');
    }
    
    public function index()
    {
        $dados['vagas'] = $this->vaga_model->get_vagas($this->input->get('q'));
        $this->view('vagas', $dados);
    }
    
    public function detalhes($idvaga = null)
    {
        if(is_null($idvaga)){
            redirect();
        }
        $dados['logado'] = (isset($this->session->token) ? true : false);
        $dados['candidatado'] = $this->candidatar_model->is_candidatado($idvaga, $this->usuario_model->get_id_by_token($this->session->token));
        $dados['vaga'] = $this->vaga_model->get_vaga_detalhes($idvaga);
        $this->view('vagas_detalhes', $dados);
    }
    
    public function candidatar($idvaga = null)
    {
        if(is_null($idvaga)){
            redirect();
        }
        if (!isset($this->session->token) || $this->session->perfil != 'Candidato' ) {
            $this->session->set_flashdata('msg', 'Para se candidata-se a uma vaga, você precisa estar logado como Candidato');
            $this->session->set_flashdata('abrir', 'Entrar');
            redirect();
        }
        if($this->input->post()){            
            $this->candidatar_model->vaga_idvaga = $idvaga;
            $this->candidatar_model->candidato_usuario_idusuario = $this->usuario_model->get_id_by_token($this->session->token);
            $this->candidatar_model->mensagem = $this->input->post('mensagem');
            
            try {
                $this->candidatar_model->insert();
                $this->session->set_flashdata(array('msg' => 'Parabéns. Você se candidatou para a vaga!', 'msg_status' => 'success'));
                redirect('candidato');
            } catch (Exception $ex) {
                $this->session->set_flashdata(array('msg' => 'Erro ao se candidatar-se para vaga: ' + $ex->getMessage(), 'msg_status' => 'danger'));
            }
        }
        $dados['vaga'] = $this->vaga_model->get_vaga_detalhes($idvaga);
        $dados['msg'] = get_alert_code($this->session->flashdata('msg'), 'danger');
        $dados['candidatado'] = $this->candidatar_model->is_candidatado($idvaga, $this->usuario_model->get_id_by_token($this->session->token));
        $this->view('vagas_candidatar', $dados);
    }        
}
