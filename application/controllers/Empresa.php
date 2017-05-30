<?php
/**
 * Description of Empresa
 *
 * @author Rafael W. Pinheiro
 */
class Empresa extends MY_Controller {
    
    protected $_template_folder = 'empresa';
    
    public function __construct() {
        parent::__construct();
        
        //Verifica "porcamente" se o usuário está autenticado!!!=)
        if (!isset($this->session->token) || $this->session->perfil != 'Empresa' ) {
            redirect();
        }
        
        $this->load->helper('theme');

        $this->load->model('usuario_model');
        $this->load->model('empresa_model');
        $this->load->model('vaga_model');
    }
    
    public function index()
    {
        //Configura o load dinamico das abas
        $dados['template_folder'] = $this->_template_folder;
        $dados['prefixo'] = 'aba_';
        $dados['sufixo'] = '_view';
        $dados['abas'] = array('inicio', 'meus_dados', 'vagas');
        
        $dados['empresa'] = $this->empresa_model->get_empresa_by_token($this->session->token);
        $dados['vagas'] = $this->vaga_model->findBy('empresa_usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));
        
        $dados['erros'] = $this->session->flashdata('erros');
        $dados['dados'] = $this->session->flashdata('dados');
        $dados['abrir'] = $this->session->flashdata('abrir');
        
        //Define qual a aba deve vir exibida
        $dados['active'] = $this->session->flashdata('active');
        
        //Alerta de mensagem
        $dados['msg'] = get_alert_code($this->session->flashdata('msg'), $this->session->flashdata('msg_status'));
        
        $this->view('home', $dados);
    }
    
    public function atualizar_dados()
    {
        if ($this->input->post()) {
            $this->empresa_model = $this->empresa_model->find($this->usuario_model->get_id_by_token($this->session->token));
            $this->empresa_model->post_to($this->input->post(), $this->empresa_model);

            try {
                $this->empresa_model->update('usuario_idusuario', $this->empresa_model->usuario_idusuario);
                $this->session->set_flashdata(array('msg' => 'Dados atualizados com sucesso', 'msg_status' => 'success'));
            } catch (Exception $ex) {
                $this->session->set_flashdata(array('msg' => 'Erro ao atualizar dados: ' + $ex->getMessage(), 'msg_status' => 'danger'));
            }
        }
        $this->session->set_flashdata('active', 'meus_dados');
        redirect('empresa');
    }
    
    public function cadastrar_vaga() {
        if ($this->input->post()) {
            if ($this->input->post('acao') == 'editar') {
                //Atualiza
                $this->vaga_model = $this->vaga_model->find($this->input->post('id'));
                $this->vaga_model->post_to($this->input->post(), $this->vaga_model);
                
                try {
                    $this->vaga_model->update('idvaga', $this->vaga_model->idvaga);
                    $this->session->set_flashdata(array('msg' => 'Vaga atualizada com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata(array('msg' => 'Erro ao atualizar vaga: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            } else {
                //Salva novo
                $this->vaga_model->post_to($this->input->post(), $this->vaga_model);
                $this->vaga_model->empresa_usuario_idusuario = $this->usuario_model->get_id_by_token($this->session->token);
                
                try {
                    $this->vaga_model->insert();
                    $this->session->set_flashdata(array('msg' => 'Vaga adicionado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata('abrir', 'Vaga');
                    $this->session->set_flashdata('erros', $this->vaga_model->get_erro());
                    $this->session->set_flashdata('dados', $this->input->post());
                    $this->session->set_flashdata(array('msg' => 'Erro ao adicionar vaga: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                    die(print_r($this->vaga_model->get_erro()));
                }
            }
        }
        $this->session->set_flashdata('active', 'vagas');
        redirect('empresa');
    }
}