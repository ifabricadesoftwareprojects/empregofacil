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
        $this->load->model('candidato_model');
        $this->load->model('curso_model');
        $this->load->model('experiencia_model');
        $this->load->model('idioma_model');
        //$this->load->model('candidato_idioma_model');
    }
    
    public function index()
    {
        //Configura o load dinamico das abas
        $dados['template_folder'] = $this->_template_folder;
        $dados['prefixo'] = 'aba_';
        $dados['sufixo'] = '_view';
        $dados['abas'] = array('inicio', 'meus_dados', 'experiencias', 'cursos', 'idiomas', 'ver_curriculo');
        
        $dados['candidato'] = $this->candidato_model->get_candidato_by_token($this->session->token);
        //Lista de cursos do candidato_usuario
        $dados['cursos'] = $this->curso_model->findBy('candidato_usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));
        $dados['experiencias'] = $this->experiencia_model->findBy('candidato_usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));
        $dados['idiomas'] = $this->idioma_model->findBy('candidato_usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));
        //$dados['candidato_idiomas'] = $this->candidato_idioma_model->findBy('candidato_usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));
        
        //Define qual a aba deve vir exibida
        $dados['active'] = $this->session->flashdata('active');
        
        //Alerta de mensagem
        $this->load->helper('theme');
        $dados['msg'] = get_alert_code($this->session->flashdata('msg'), $this->session->flashdata('msg_status'));
        
        $this->view('home', $dados);
    }
    
    public function atualizar_dados()
    {
        if($this->input->post()){
            $this->candidato_model = $this->candidato_model->find($this->usuario_model->get_id_by_token($this->session->token));
            $this->candidato_model->post_to($this->input->post(), $this->candidato_model);
            
            try{
                $this->candidato_model->update('usuario_idusuario', $this->candidato_model->usuario_idusuario);
                $this->session->set_flashdata(array('msg' => 'Dados atualizado com sucesso', 'msg_status' => 'success'));
            } catch (Exception $ex) {
                $this->session->set_flashdata(array('msg' => 'Erro ao atualizar dados: ' + $ex->getMessage(), 'msg_status' => 'danger'));
            }
        }
        $this->session->set_flashdata('active', 'meus_dados');
        redirect('candidato');
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
    
    public function cadastrar_idioma()
    {
        if($this->input->post()){
            if($this->input->post('acao') == 'editar'){
                //Atualiza
                $this->idioma_model = $this->idioma_model->find($this->input->post('id'));
                $this->idioma_model->post_to($this->input->post(), $this->idioma_model);
                
                try{
                    $this->idioma_model->update('ididioma', $this->idioma_model->ididioma);
                    $this->session->set_flashdata(array('msg' => 'Idioma atualizado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata(array('msg' => 'Erro ao atualizar Idioma: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
            else{
                //Salva novo
                $this->idioma_model->post_to($this->input->post(), $this->idioma_model);
                $this->idioma_model->candidato_usuario_idusuario = $this->usuario_model->get_id_by_token($this->session->token);
                try{
                    $this->idioma_model->insert();
                    $this->session->set_flashdata(array('msg' => 'Idioma adicionado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata(array('msg' => 'Erro ao adicionar idioma: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
        }
        $this->session->set_flashdata('active', 'idiomas');
        redirect('candidato');
    }
    
    public function foto()
    {
        if($this->input->post()){
            $config["upload_path"] = "assets/fotos/";
            $config["allowed_types"] = "gif|jpg|png";
            $config["overwrite"] = TRUE;
            $this->load->library("upload", $config);
            //em caso de sucesso no upload
            if ($this->upload->do_upload('foto')) {
                //renomeia a foto
                $nomeorig = $config["upload_path"] . "/" . $this->upload->file_name;
                $nomedestino = $config["upload_path"] . "/" . $this->session->token .  $this->upload->file_ext;
                rename($nomeorig, $nomedestino);

                //define opções de crop
                $config["image_library"] = "gd2";
                $config["source_image"] = $nomedestino;
                $config["width"] = 140;
                $config["height"] = 140;
                $this->load->library("image_lib", $config); 
                $this->image_lib->resize();
                
                //Atualizar no model
                $this->candidato_model = $this->candidato_model->find($this->usuario_model->get_id_by_token($this->session->token));
                $this->candidato_model->foto = $this->session->token .  $this->upload->file_ext;
                
                try{
                $this->candidato_model->update('usuario_idusuario', $this->candidato_model->usuario_idusuario);
                    $this->session->set_flashdata(array('msg' => 'Foto atualizada com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata(array('msg' => 'Erro ao atualizar dados: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
            else{
                $this->session->set_flashdata(array('msg' => $this->upload->display_errors(), 'msg_status' => 'danger'));
            }
        }
        $this->session->set_flashdata('active', 'meus_dados');
        redirect('candidato');
    }
}

