<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Experiencia_model
 *
 * @author Aluno
 */
class Experiencia_model extends MY_Model{
    //put your code here
    protected $table = 'experiencia';
    protected $pk = 'idexperiencia';
    
    public $idexperiencia;
    public $cargo;
    public $atividade_desempenhada;
    public $nivel_herarquico;
    public $area;
    public $mes_ano_inicio;
    public $mes_ano_termino;
    public $emprego_atual;
    public $candidato_usuario_idusuario;
    
    public function __construct() {
        parent::__construct();
    }
}
