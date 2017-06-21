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
        $dados['vaga'] = $this->vaga_model->get_vaga_detalhes($idvaga);
        $this->view('vagas_detalhes', $dados);
    }
        
}
