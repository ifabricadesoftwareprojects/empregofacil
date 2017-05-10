<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Candidato_Idioma_model
 *
 * @author Aluno
 */
class Candidato_Idioma_model extends MY_Model{
    //put your code here
    protected $table = 'candidato_idioma';
    protected $pk = '';
    protected $model = 'Candidato_Idioma_model';
    
    public $idioma_ididioma;
    public $candidato_usuario_idusuario;
    public $le;
    public $escreve;
    public $fala;
    public $entende;
    
    public function __construct() {
        parent::__construct();
    }
}
