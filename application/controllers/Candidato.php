<?php
/**
 * Description of Candidato
 *
 * @author Rafael W. Pinheiro
 */
class Candidato extends MY_Controller{
    protected $_template_folder = 'candidato';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->view('home');
    }
    
    public function cadastrar_curso()
    {
        if($this->input->post()){
            $this->load->model('curso_model');
            $this->curso_model->post_to($this->input->post(), $this->curso_model);
            try{
                $this->curso_model->insert();
                $this->session->set_flashdata('msg', 'Curso adicionado com sucesso');
            } catch (Exception $ex) {
                $this->session->set_flashdata('msg', 'Erro ao adicionar curso: ' + $ex->getMessage());
            }
        }
        redirect('candidato');
    }
}
