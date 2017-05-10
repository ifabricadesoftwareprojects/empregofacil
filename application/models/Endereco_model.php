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
    protected $model = 'Endereco_model';
    
    public $idendereco;
    public $rua;
    public $numero;
    public $complemento;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;
    public $usuario_idusuario;
    
    public function __construct() {
        parent::__construct();
    }
}
