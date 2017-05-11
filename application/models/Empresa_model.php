<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Empresa_model
 *
 * @author Aluno
 */
class Empresa_model extends MY_Model{
    //put your code here
    protected $table = 'empresa';
    protected $pk = 'usuario_idusuario';
    
    public $usuario_idusuario;
    public $razao_social;
    public $ramo_atividade;
    public $cnpj;
    public $site;
    public $descricao;
    
    public function __construct() {
        parent::__construct();
    }
}
