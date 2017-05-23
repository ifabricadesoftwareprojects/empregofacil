<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Candidato_model
 *
 * @author Aluno
 */
class Candidato_model extends MY_Model{
    //put your code here
    protected $table = 'candidato';
    protected $pk = 'usuario_idusuario';
    
    public $usuario_idusuario;
    public $nome_social;
    public $data_nascimento;
    public $sexo;
    public $genero;
    public $estado_civil;
    public $cpf;
    public $portador_deficiencia;
    public $descricao_deficiencia;
    public $foto;
    public $tipo_habilitacao;
    public $veiculo_proprio;
    public $disponibilidade_viajar;
    public $disponibilidade_mudar_residencia;
    public $outras_informacoes;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function get_candidato_by_token($token)
    {
        return  $this->db
                ->from('usuario u')
                ->join('candidato c', 'u.idusuario = c.usuario_idusuario')
                ->where('u.token', $token)
                ->get()
                ->row(0, $this->model);
    }
}
