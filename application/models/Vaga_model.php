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
    public function validar_dados()
    {
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        
        
        $validate->set('titulo', $this->titulo)->is_required()
                ->set('descricao', $this->descricao)->is_required()
                ->set('faixa_salarial_inicio', $this->faixa_salarial_inicio)->is_required()
                ->set('faixa_salarial_fim', $this->faixa_salarial_fim)->is_required()
                ->set('pre_requisitos', $this->pre_requisitos)->is_required()
                ->set('tipo_contrato', $this->tipo_contrato)->is_required()
                ->set('beneficios', $this->beneficios)->is_required()
                ->set('status_vaga', $this->status_vaga)->is_required();
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
}
