<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vaga_model
 *
 * @author Aluno
 */
class Vaga_model extends MY_Model{
    //put your code here
    protected $table = 'vaga';
    protected $pk = 'idvaga';
    
    public $idvaga;
    public $titulo;
    public $descricao;
    public $faixa_salarial_inicio;
    public $faixa_salarial_fim;
    public $pre_requisitos;
    public $tipo_contrato;
    public $beneficios;
    public $status_vaga;
    public $data_publicacao;
    public $visualizacoes;
    public $empresa_usuario_idusuario;

    public function __construct() {
        parent::__construct();
    }
    public function insert() {
        try {
            $this->validar_dados();
            parent::insert();
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }
     public function update($field, $value){
        try {
            $this->validar_dados();
            parent::update($field, $value);
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    public function validar_dados()
    {
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        
        
        $validate->set('titulo', $this->titulo)->is_required()
                ->set('descricao', $this->descricao)->is_required()
                ->set('faixa_salarial_inicio', $this->faixa_salarial_inicio)->is_positive()->is_required()
                ->set('faixa_salarial_fim', $this->faixa_salarial_fim)->is_positive()->min_value($this->faixa_salarial_inicio-1)->is_required()
                ->set('pre_requisitos', $this->pre_requisitos)->is_required()
                ->set('tipo_contrato', $this->tipo_contrato)->is_required()
                ->set('beneficios', $this->beneficios)->is_required()
                ->set('status_vaga', $this->status_vaga)->is_required();
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
    
    public function get_vagas($q)
    {
        return $this->db
                ->select('v.idvaga, u.nome, v.titulo, v.descricao, v.faixa_salarial_inicio, v.faixa_salarial_fim, v.tipo_contrato, v.status_vaga')
                ->from('vaga v')
                ->join('usuario u', 'v.empresa_usuario_idusuario = u.idusuario')
                ->group_start()
                    ->where('v.status_vaga', 'Ativa')
                ->group_end()
                ->group_start()
                    ->like('v.titulo', $q)
                    ->or_like('v.descricao', $q)
                ->group_end()
                ->get()
                ->result();
    }
    
    public function get_vaga_detalhes($idvaga, $status = 'Ativa', $token = null)
    {
        $query =  $this->db
                ->select('v.idvaga, u.nome, u.email, v.titulo, v.descricao, v.faixa_salarial_inicio, v.faixa_salarial_fim, v.tipo_contrato, v.beneficios, v.data_publicacao, v.pre_requisitos, e.descricao as descricao_empresa')
                ->from('vaga v')
                ->join('empresa e', 'v.empresa_usuario_idusuario = e.usuario_idusuario')
                ->join('usuario u', 'v.empresa_usuario_idusuario = u.idusuario')
                ->where('v.idvaga', $idvaga);
        if($status == 'Ativa' || $status == 'Inativa'){
            $query->where('v.status_vaga', $status);
        }
        if(!is_null($token)){
            $query->where('u.token', $token);
        }
        return $query->get()->row(0);
    }
    
    public function get_candidatos_by_vaga($idvaga)
    {
        return $this->db
                ->select('u.nome, c.mensagem')
                ->from('candidatar c')
                ->join('usuario u', 'c.candidato_usuario_idusuario = u.idusuario')
                ->where('c.vaga_idvaga', $idvaga)
                ->get()
                ->result();
    }
}
