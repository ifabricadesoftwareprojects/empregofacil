<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Candidato_model
 *
 * @author Aluno
 */
class Candidato_model extends MY_Model {

    //put your code here
    protected $table = 'candidato';
    protected $pk = 'usuario_idusuario';
    public $usuario_idusuario;
    public $nome_social;
    public $data_nascimento;
    public $sexo;
    public $genero;
    public $estado_civil;
    public $cpf;
    public $portador_deficiencia;
    public $descricao_deficiencia;
    public $foto;
    public $tipo_habilitacao;
    public $veiculo_proprio;
    public $disponibilidade_viajar;
    public $disponibilidade_mudar_residencia;
    public $outras_informacoes;

    public function __construct() {
        parent::__construct();
    }

    public function get_candidato_by_token($token) {
        return $this->db
                        ->from('usuario u')
                        ->join('candidato c', 'u.idusuario = c.usuario_idusuario')
                        ->where('u.token', $token)
                        ->get()
                        ->row(0, $this->model);
    }
    public function get_candidato_by_id($id) {
        return $this->db
                        ->from('usuario u')
                        ->join('candidato c', 'u.idusuario = c.usuario_idusuario')
                        ->where('u.idusuario', $id)
                        ->get()
                        ->row(0, $this->model);
    }
    public function validar_dados() {
        $CI = & get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;

        $validate->set('nome', $this->nome)->is_required()->min_length(5)->max_length(75)->is_alpha_num()
                ->set('email', $this->email)->is_required()->is_email()
                ->set('data_nascimento', $this->data_nascimento)->is_date()
                ->set('cpf', $this->cpf)->is_cpf();
                
        if($this->portador_deficiencia == 'Sim'){
            $validate->set('descricao_deficiencia', $this->descricao_deficiencia)->is_required()->min_length(3);
        }

        if ($validate->validate() === false) {
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
    
    public function get_candidatos()
    {
        return $this->db
                        ->from('usuario u')
                        ->join('candidato c', 'u.idusuario = c.usuario_idusuario')
                        ->get()
                        ->result();
    }
}
