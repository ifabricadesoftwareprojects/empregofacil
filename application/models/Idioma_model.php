<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Idioma_model
 *
 * @author Aluno
 */
class Idioma_model extends MY_Model{
    //put your code here
    protected $table = 'idioma';
    protected $pk = 'ididioma';
    
    public $ididioma;
    public $descricao_idioma;
    public $le;
    public $escreve;
    public $fala;
    public $entende;
    public $candidato_usuario_idusuario;
    
    public function __construct() {
        parent::__construct();
    }
}
