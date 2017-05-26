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

    public function validar_dados() {
        $CI = & get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;

        $validate->set('nome', $this->nome)->is_required()->min_length(5)->max_length(75)->is_alpha_num()
                ->set('email', $this->email)->is_required()->is_email()
                ->set('data_nascimento', $this->data_nascimento)->is_date()
                ->set('sexo', $this->sexo)->max_length(20)
                ->set('genero', $this->genero)->max_length(20)
                ->set('estado_civil', $this->estado_civil)->max_length(20)
                ->set('cpf', $this->cpf)->is_cpf()
                ->set('portador_deficiencia', $this->portador_deficiencia)->max_length(3)
                ->set('descricao_deficiencia', $this->descricao_deficiencia)->max_length(75)
                ->set('foto', $this->foto)->max_length(150)
                ->set('tipo_habilatacao', $this->tipo_habilitacao)->max_length(1)
                ->set('veiculo_proprio', $this->veiculo_proprio)->max_length(75)
                ->set('disponibilidade_viajar', $this->disponibilidade_viajar)->max_length(3)
                ->set('disponibilidade_mudar_residencia', $this->disponibilidade_mudar_residencia)->max_length(3);

        if ($validate->validate() === false) {
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }

}
