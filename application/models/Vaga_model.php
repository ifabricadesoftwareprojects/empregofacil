<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vaga_model
 *
 * @author Aluno
 */
class Vaga_model extends MY_Model{
    //put your code here
    protected $table = 'vaga';
    protected $pk = 'idvaga';
    
    public $idvaga;
    public $titulo;
    public $descricao;
    public $faixa_salarial_inicio;
    public $faixa_salarial_fim;
    public $pre_requisitos;
    public $tipo_contrato;
    public $beneficios;
    public $status_vaga;
    public $data_publicacao;
    public $vizualizacoes;
    public $empresa_usuario_idusuario;

    public function __construct() {
        parent::__construct();
    }
}
