<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Candidatar_model
 *
 * @author Aluno
 */
class Candidatar_model extends MY_Model{
    //put your code here
    protected $table = 'candidatar';
    protected $pk = '';
    
    public $candidato_usuario_idusuario;
    public $vaga_idvaga;
    public $mensagem;
    
    public function __construct() {
        parent::__construct();
    }
}
