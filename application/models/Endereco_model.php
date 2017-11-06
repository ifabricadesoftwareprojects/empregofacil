<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Endereco_model
 *
 * @author Aluno
 */
class Endereco_model extends MY_Model{
    //put your code here
    protected $table = 'endereco';
    protected $pk = 'idendereco';
    
    public $idendereco;
    public $rua;
    public $numero;
    public $complemento;
    public $bairro;
    public $cep;
    public $cidade;
    public $estado;
    public $usuario_idusuario;
    public $zona_moradia;
    
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
    
    public function update($field, $value){
        try {
            $this->validar_dados();
            parent::update($field,$value);
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    
    public function validar_dados() {
        $CI = & get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;


        $validate->set('zona_moradia', $this->zona_moradia)->is_required()
                ->set('rua', $this->rua)->is_required()
                ->set('numero', $this->numero)->is_required()
                ->set('bairro', $this->bairro)->is_required()
                ->set('cep', $this->cep)->is_required()
                ->set('cidade', $this->cidade)->is_required()
                ->set('estado', $this->estado)->is_required();

        if ($validate->validate() === false) {
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
}
