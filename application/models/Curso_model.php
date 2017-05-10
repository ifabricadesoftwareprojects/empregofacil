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
    protected $model = 'Curso_model';
    
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
}
