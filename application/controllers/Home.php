<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Home
 *
 * @author Rafael W. Pinheiro
 */
class Home extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->helper('theme');
        $dados['msg'] = $this->session->flashdata('resposta_msg');
        $dados['erros'] = $this->session->flashdata('erros');
        $dados['candidato'] = $this->session->flashdata('dadoscandidato');
        $dados['abrir_cadastrar'] = $this->session->flashdata('abrircadastrar');
        $this->view('home', $dados);
    }
}
