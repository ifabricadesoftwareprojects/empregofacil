<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Curso_model
 *
 * @author Aluno
 */
class Curso_model extends MY_Model{
    //put your code here
    protected $table = 'curso';
    protected $pk = 'idcurso';
    
    public $idcurso;
    public $descricao_curso;
    public $instituicao;
    public $nivel;
    public $mes_ano_inicio;
    public $mes_ano_fim;
    public $status_curso;
    public $candidato_usuario_idusuario;
    
    public function __construct() {
        parent::__construct();
    }
     public function insert() {
        try {
            $this->validar_dados();
            parent::insert();
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    public function validar_dados()
    {
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        
        
        $validate->set('descricao_curso', $this->descricao_curso)->is_required()
                ->set('instituicao', $this->instituicao)->is_required()
                ->set('nivel', $this->nivel)->is_required()
                ->set('mes_ano_inicio', $this->mes_ano_inicio)->is_required();
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
}
