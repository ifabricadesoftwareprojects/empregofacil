<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author rafael
 */
class Administrador extends MY_Controller {
    
    protected $_template_folder = 'admin';
    
    public function __construct() {
        parent::__construct();
        
        //Verifica "porcamente" se o usuário está autenticado!!!=)
        if (!isset($this->session->token) || $this->session->perfil != 'Administrador' ) {
            redirect();
        }
        
        $this->load->helper('theme');

        $this->load->model('usuario_model');
        $this->load->model('candidato_model');
        $this->load->model('empresa_model');
    }
    
    public function index()
    {
        //Configura o load dinamico das abas
        $dados['template_folder'] = $this->_template_folder;
        $dados['prefixo'] = 'aba_';
        $dados['sufixo'] = '_view';
        $dados['abas'] = array('inicio', 'meus_dados', 'candidatos', 'empresas');
        
        $dados['usuario'] = $this->usuario_model->get_id_by_token($this->session->token);
        $dados['empresas'] = $this->empresa_model->get_empresas();
        $dados['candidatos'] = $this->candidato_model->findAll();
        
        $dados['erros'] = $this->session->flashdata('erros');
        $dados['dados'] = $this->session->flashdata('dados');
        $dados['abrir'] = $this->session->flashdata('abrir');
        
        //Define qual a aba deve vir exibida
        $dados['active'] = $this->session->flashdata('active');
        
        if(!is_null($dados['abrir'])){
            $dados['dados_' . strtolower($dados['abrir'])] = $this->session->flashdata('dados');
        }
        else{
            $dados['dados'] = $this->session->flashdata('dados');
        }   
        
        //Alerta de mensagem
        $dados['msg'] = get_alert_code($this->session->flashdata('msg'), $this->session->flashdata('msg_status'));
        
        $this->view('home', $dados);
    }
    
    public function atualizar_dados()
    {
        
    }
}
