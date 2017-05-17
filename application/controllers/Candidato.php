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
        
        $this->load->model('usuario_model');
        $this->load->model('curso_model');
        $this->load->model('experiencia_model');
    }
    
    public function index()
    {
        //Configura o load dinamico das abas
        $dados['template_folder'] = $this->_template_folder;
        $dados['prefixo'] = 'aba_';
        $dados['sufixo'] = '_view';
        $dados['abas'] = array('inicio', 'meus_dados', 'experiencias', 'cursos', 'idiomas', 'ver_curriculo');
        
        //Lista de cursos do candidato_usuario
        $dados['cursos'] = $this->curso_model->findBy('candidato_usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));
        $dados['experiencias'] = $this->experiencia_model->findBy('candidato_usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));
        
        //Define qual a aba deve vir exibida
        $dados['active'] = $this->session->flashdata('active');
        
        //Alerta de mensagem
        $this->load->helper('theme');
        $dados['msg'] = get_alert_code($this->session->flashdata('msg'), $this->session->flashdata('msg_status'));
        
        $this->view('home', $dados);
    }
    
    public function cadastrar_curso()
    {
        if($this->input->post()){
            if($this->input->post('acao') == 'editar'){
                //Atualiza
                $this->curso_model = $this->curso_model->find($this->input->post('id'));
                $this->curso_model->post_to($this->input->post(), $this->curso_model);
                
                try{
                    $this->curso_model->update('idcurso', $this->curso_model->idcurso);
                    $this->session->set_flashdata(array('msg' => 'Curso atualizado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata(array('msg' => 'Erro ao atualizar curso: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
            else{
                //Salva novo
                $this->curso_model->post_to($this->input->post(), $this->curso_model);
                $this->curso_model->candidato_usuario_idusuario = $this->usuario_model->get_id_by_token($this->session->token);
                try{
                    $this->curso_model->insert();
                    $this->session->set_flashdata(array('msg' => 'Curso adicionado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata(array('msg' => 'Erro ao adicionar curso: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
        }
        $this->session->set_flashdata('active', 'cursos');
        redirect('candidato');
    }
    public function cadastrar_experiencia()
    {
        if($this->input->post()){
            if($this->input->post('acao') == 'editar'){
                //Atualiza
                $this->experiencia_model = $this->experiencia_model->find($this->input->post('id'));
                $this->experiencia_model->post_to($this->input->post(), $this->experiencia_model);
                
                try{
                    $this->experiencia_model->update('idexperiencia', $this->experiencia_model->idexperiencia);
                    $this->session->set_flashdata(array('msg' => 'Experiencia atualizado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata(array('msg' => 'Erro ao atualizar Experiencia: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
            else{
                //Salva novo
                $this->experiencia_model->post_to($this->input->post(), $this->experiencia_model);
                $this->experiencia_model->candidato_usuario_idusuario = $this->usuario_model->get_id_by_token($this->session->token);
                try{
                    $this->experiencia_model->insert();
                    $this->session->set_flashdata(array('msg' => 'Experiencia adicionado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata(array('msg' => 'Erro ao adicionar experiencia: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
        }
        $this->session->set_flashdata('active', 'experiencias');
        redirect('candidato');
    }
}

