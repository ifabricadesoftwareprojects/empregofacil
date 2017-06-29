<?php

/**
 * Description of Candidato
 *
 * @author Rafael W. Pinheiro
 */
class Candidato extends MY_Controller {

    protected $_template_folder = 'candidato';

    public function __construct() {
        parent::__construct();

        //Verifica "porcamente" se o usuário está autenticado!!!=)
        if (!isset($this->session->token) || $this->session->perfil != 'Candidato') {
            redirect();
        }

        $this->load->helper('theme');

        $this->load->model('usuario_model');
        $this->load->model('candidato_model');
        $this->load->model('curso_model');
        $this->load->model('experiencia_model');
        $this->load->model('idioma_model');
        $this->load->model('endereco_model');
        //$this->load->model('candidato_idioma_model');
    }

    public function index() {
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
        $dados['enderecos'] = $this->endereco_model->findBy('usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));
        //Define qual a aba deve vir exibida
        $dados['active'] = $this->session->flashdata('active');

        $dados['erros'] = $this->session->flashdata('erros');
        $dados['abrir'] = $this->session->flashdata('abrir');
        //var_dump($dados['abrir']);
        if (!is_null($dados['abrir'])) {
            $dados['dados_' . strtolower($dados['abrir'])] = $this->session->flashdata('dados');
        } else {
            $dados['dados'] = $this->session->flashdata('dados');
        }
        //Alerta de mensagem
        $dados['msg'] = get_alert_code($this->session->flashdata('msg'), $this->session->flashdata('msg_status'));

        $this->view('home', $dados);
    }

    public function atualizar_dados() {
        if ($this->input->post()) {
            $this->usuario_model =  $this->usuario_model->find($this->usuario_model->get_id_by_token($this->session->token));
            $this->candidato_model = $this->candidato_model->find($this->usuario_model->get_id_by_token($this->session->token));
            
            $this->usuario_model->post_to($this->input->post(), $this->usuario_model);
            $this->candidato_model->post_to($this->input->post(), $this->candidato_model);

            try {
                $this->usuario_model->update('idusuario', $this->usuario_model->idusuario);
                $this->candidato_model->update('usuario_idusuario', $this->candidato_model->usuario_idusuario);
                $this->session->set_flashdata(array('msg' => 'Dados atualizados com sucesso', 'msg_status' => 'success'));
            } catch (Exception $ex) {
                $this->session->set_flashdata(array('msg' => 'Erro ao atualizar dados: ' + $ex->getMessage(), 'msg_status' => 'danger'));
            }
        }
        $this->session->set_flashdata('active', 'meus_dados');
        redirect('candidato');
    }

    public function cadastrar_endereco() {
        if ($this->input->post()) {
            if ($this->input->post('acao') == 'editar') {
                //Atualiza
                $this->endereco_model = $this->endereco_model->find($this->input->post('id'));
                $this->endereco_model->post_to($this->input->post(), $this->endereco_model);
                try {
                    $this->endereco_model->update('idendereco', $this->endereco_model->idendereco);
                    $this->session->set_flashdata(array('msg' => 'Endereço atualizado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata('abrir', 'Endereco');
                    $this->session->set_flashdata('erros', $this->endereco_model->get_erro());
                    $this->session->set_flashdata('dados', $this->input->post());
                    $this->session->set_flashdata(array('msg' => 'Erro ao atualizar endereco: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            } else {
                //Salva novo
                $this->endereco_model->post_to($this->input->post(), $this->endereco_model);
                $this->endereco_model->usuario_idusuario = $this->usuario_model->get_id_by_token($this->session->token);
                try {
                    $this->endereco_model->insert();
                    $this->session->set_flashdata(array('msg' => 'Endereço adicionado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata('abrir', 'Endereco');
                    $this->session->set_flashdata('erros', $this->endereco_model->get_erro());
                    $this->session->set_flashdata('dados', $this->input->post());
                    $this->session->set_flashdata(array('msg' => 'Erro ao adicionar endereco: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
        }
        $this->session->set_flashdata('active', 'meus_dados');
        redirect('candidato');
    }

    public function cadastrar_curso() {
        if ($this->input->post()) {
            if ($this->input->post('acao') == 'editar') {
                //Atualiza
                $this->curso_model = $this->curso_model->find($this->input->post('id'));
                $this->curso_model->post_to($this->input->post(), $this->curso_model);
                $this->curso_model->nivel = ($this->curso_model->nivel == 'Outro' ? $this->input->post('outro') : $this->curso_model->nivel);
                try {
                    $this->curso_model->update('idcurso', $this->curso_model->idcurso);
                    $this->session->set_flashdata(array('msg' => 'Curso atualizado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata('abrir', 'Curso');
                    $this->session->set_flashdata('erros', $this->curso_model->get_erro());
                    $this->session->set_flashdata('dados', $this->input->post());
                    $this->session->set_flashdata(array('msg' => 'Erro ao atualizar curso: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            } else {
                //Salva novo
                $this->curso_model->post_to($this->input->post(), $this->curso_model);
                $this->curso_model->candidato_usuario_idusuario = $this->usuario_model->get_id_by_token($this->session->token);
                $this->curso_model->nivel = ($this->curso_model->nivel == 'Outro' ? $this->input->post('outro') : $this->curso_model->nivel);
                try {
                    $this->curso_model->insert();
                    $this->session->set_flashdata(array('msg' => 'Curso adicionado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata('abrir', 'Curso');
                    $this->session->set_flashdata('erros', $this->curso_model->get_erro());
                    $this->session->set_flashdata('dados', $this->input->post());
                    //die(print_r($this->input->post()));
                    $this->session->set_flashdata(array('msg' => 'Erro ao adicionar curso: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
        }
        $this->session->set_flashdata('active', 'cursos');
        redirect('candidato');
    }

    public function cadastrar_experiencia() {
        if ($this->input->post()) {
            if ($this->input->post('acao') == 'editar') {
                //Atualiza
                $this->experiencia_model = $this->experiencia_model->find($this->input->post('id'));
                $this->experiencia_model->post_to($this->input->post(), $this->experiencia_model);
                $this->experiencia_model->nivel_hierarquico = ($this->experiencia_model->nivel_hierarquico == 'Outro' ? $this->input->post('outro_nivel') : $this->experiencia_model->nivel_hierarquico);

                try {
                    $this->experiencia_model->update('idexperiencia', $this->experiencia_model->idexperiencia);
                    $this->session->set_flashdata(array('msg' => 'Experiencia atualizado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata('abrir', 'Experiencia');
                    $this->session->set_flashdata('erros', $this->experiencia_model->get_erro());
                    $this->session->set_flashdata('dados', $this->input->post());
                    $this->session->set_flashdata(array('msg' => 'Erro ao atualizar Experiencia: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            } else {
                //Salva novo
                $this->experiencia_model->post_to($this->input->post(), $this->experiencia_model);
                $this->experiencia_model->nivel_hierarquico = ($this->experiencia_model->nivel_hierarquico == 'Outro' ? $this->input->post('outro_nivel') : $this->experiencia_model->nivel_hierarquico);
                $this->experiencia_model->candidato_usuario_idusuario = $this->usuario_model->get_id_by_token($this->session->token);
                try {
                    $this->experiencia_model->insert();
                    $this->session->set_flashdata(array('msg' => 'Experiencia adicionado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata('abrir', 'Experiencia');
                    $this->session->set_flashdata('erros', $this->experiencia_model->get_erro());
                    $this->session->set_flashdata('dados', $this->input->post());
                    $this->session->set_flashdata(array('msg' => 'Erro ao adicionar experiencia: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
        }
        $this->session->set_flashdata('active', 'experiencias');
        redirect('candidato');
    }

    public function cadastrar_idioma() {
        if ($this->input->post()) {
            if ($this->input->post('acao') == 'editar') {
                //Atualiza
                $this->idioma_model = $this->idioma_model->find($this->input->post('id'));
                $this->idioma_model->post_to($this->input->post(), $this->idioma_model);
                $this->idioma_model->descricao_idioma = ($this->idioma_model->descricao_idioma == 'Outro' ? $this->input->post('outro_idioma') : $this->idioma_model->descricao_idioma);
                try {
                    $this->idioma_model->update('ididioma', $this->idioma_model->ididioma);
                    $this->session->set_flashdata(array('msg' => 'Idioma atualizado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {

                    $this->session->set_flashdata(array('msg' => 'Erro ao atualizar Experiencia: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            } else {
                //Salva novo
                $this->idioma_model->post_to($this->input->post(), $this->idioma_model);
                $this->idioma_model->descricao_idioma = ($this->idioma_model->descricao_idioma == 'Outro' ? $this->input->post('outro_idioma') : $this->idioma_model->descricao_idioma);
                $this->idioma_model->candidato_usuario_idusuario = $this->usuario_model->get_id_by_token($this->session->token);
                try {
                    $this->idioma_model->insert();
                    $this->session->set_flashdata(array('msg' => 'Idioma adicionado com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata('abrir', 'Idioma');
                    $this->session->set_flashdata('erros', $this->idioma_model->get_erro());
                    $this->session->set_flashdata('dados', $this->input->post());
                    $this->session->set_flashdata(array('msg' => 'Erro ao adicionar idioma: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            }
        }
        $this->session->set_flashdata('active', 'idiomas');
        redirect('candidato');
    }

    public function foto() {
        if ($this->input->post()) {
            $config["upload_path"] = "assets/fotos/";
            $config["allowed_types"] = "gif|jpg|png";
            $config["overwrite"] = TRUE;
            $this->load->library("upload", $config);
            //em caso de sucesso no upload
            if ($this->upload->do_upload('foto')) {
                //renomeia a foto
                $nomeorig = $config["upload_path"] . "/" . $this->upload->file_name;
                $nomedestino = $config["upload_path"] . "/" . $this->session->token . $this->upload->file_ext;
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
                $this->candidato_model->foto = $this->session->token . $this->upload->file_ext;

                try {
                    $this->candidato_model->update('usuario_idusuario', $this->candidato_model->usuario_idusuario);
                    $this->session->set_flashdata(array('msg' => 'Foto atualizada com sucesso', 'msg_status' => 'success'));
                } catch (Exception $ex) {
                    $this->session->set_flashdata(array('msg' => 'Erro ao atualizar dados: ' + $ex->getMessage(), 'msg_status' => 'danger'));
                }
            } else {
                $this->session->set_flashdata(array('msg' => $this->upload->display_errors(), 'msg_status' => 'danger'));
            }
        }
        $this->session->set_flashdata('active', 'meus_dados');
        redirect('candidato');
    }

    public function pdf() {
        $candidato = $this->candidato_model->get_candidato_by_token($this->session->token);
        $cursos = $this->curso_model->findBy('candidato_usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));
        $experiencias = $this->experiencia_model->findBy('candidato_usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));
        $idiomas = $this->idioma_model->findBy('candidato_usuario_idusuario', $this->usuario_model->get_id_by_token($this->session->token));

        $this->load->library('fpdf');
        $this->fpdf->AddPage();

        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->SetMargins(20, 3);
        $this->fpdf->Ln();
        //adicionando foto
        $this->fpdf->Image(get_src_foto_candidato($candidato->foto));
        $this->fpdf->Cell(40, 16, $candidato->nome);
        //adicionando linha
        $this->fpdf->Line(20, 39, 210 - 20, 39);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->SetMargins(20, 3);
        $this->fpdf->Cell(40, 10, "Dados Pessoais ");
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "E-mail: " . $candidato->email);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "CPF: " . $candidato->cpf);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "Estado Civil: " . $candidato->estado_civil);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "Data de nascimento: " . converte_data($candidato->data_nascimento));
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "Sexo: " . $candidato->sexo);

        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "Gênero: " . $candidato->genero);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "Possui deficiência: " . $candidato->portador_deficiencia);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "Tipo Habilitação: " . $candidato->tipo_habilitacao);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "Veículo Próprio: " . $candidato->veiculo_proprio);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "Disponibilidade Viajar: " . $candidato->disponibilidade_viajar);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "Disponibilidade para Mudar de Residência: " . $candidato->disponibilidade_mudar_residencia);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, "Disponibilidade para Mudar de Residência: " . $candidato->disponibilidade_mudar_residencia);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->Cell(40, 10, "Experiências Profissionais");

        if (count($experiencias) > 0) {
            foreach ($experiencias as $experiencia) {
                $this->fpdf->Ln();
                $this->fpdf->SetFont('Arial', '', 12);
                $this->fpdf->Cell(40, 10, "Empresa: " . $experiencia->empresa);
                $this->fpdf->Ln();
                $this->fpdf->SetFont('Arial', '', 12);
                $this->fpdf->Cell(40, 10, "Cargo: " . $experiencia->cargo);
                $this->fpdf->Ln();
                $this->fpdf->SetFont('Arial', '', 12);
                $this->fpdf->Cell(40, 10, "De " . $experiencia->mes_ano_inicio . " à " . ($experiencia->mes_ano_termino == '' ? '-' : $experiencia->mes_ano_termino) . ($experiencia->emprego_atual == 'sim' ? ' (Emprego Atual)' : ''));
                $this->fpdf->Ln();
                $this->fpdf->SetFont('Arial', '', 12);
                $this->fpdf->Cell(40, 10, "Atividades Desempenhadas: " . $experiencia->atividade_desempenhada);
            }
        }
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->Cell(40, 10, "Formação Academica");
        if (count($cursos) > 0) {
            foreach ($cursos as $curso) {
                $this->fpdf->Ln();
                $this->fpdf->SetFont('Arial', '', 12);
                $this->fpdf->Cell(40, 10, $curso->nivel . " em " . $curso->descricao_curso . ", " . $curso->instituicao);
                $this->fpdf->Ln();
                $this->fpdf->SetFont('Arial', '', 12);
                $this->fpdf->Cell(40, 10, "De " . $curso->mes_ano_inicio . " à " . $curso->mes_ano_fim . " (" . $curso->status_curso . ")");
            }
        }
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->Cell(40, 10, "Idiomas");
        if (count($idiomas) > 0) {
            foreach ($idiomas as $idioma) {
                $this->fpdf->Ln();
                $this->fpdf->SetFont('Arial', '', 12);
                $this->fpdf->Cell(40, 10, $idioma->descricao_idioma);
                $this->fpdf->Ln();
                $this->fpdf->SetFont('Arial', '', 10);
                $this->fpdf->Cell(40, 10, "Lê: " . $idioma->le);
                $this->fpdf->SetFont('Arial', '', 10);
                $this->fpdf->Cell(40, 10, "Fala: " . $idioma->fala);
                $this->fpdf->SetFont('Arial', '', 10);
                $this->fpdf->Ln();
                $this->fpdf->Cell(40, 10, "Entende: " . $idioma->entende);
                $this->fpdf->SetFont('Arial', '', 10);
                $this->fpdf->Cell(40, 10, "Escreve: " . $idioma->escreve);
            }
        }
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->Cell(40, 10, "Informações Adicionais");
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial', '', 12);
        $this->fpdf->Cell(40, 10, $candidato->outras_informacoes);
        $this->fpdf->Output();
    }

}
