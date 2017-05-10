<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contato_model
 *
 * @author Aluno
 */
class Contato_model extends MY_Model{
    //put your code here
    protected $table = 'contato';
    protected $pk = 'idcontato';
    protected $model = 'Contato_model';
    
    public $idcontato;
    public $tipo;
    public $valor;
    public $usuario_idUsuario;
    
    public function __construct() {
        parent::__construct();
    }
}
