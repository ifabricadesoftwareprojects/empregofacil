<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario_model
 *
 * @author Aluno
 */
class Usuario_model extends MY_Model{
    //put your code here
    protected $table = 'usuario';
    protected $pk = 'idusuario';
    
    public $idusuario;
    public $nome;
    public $email;
    public $senha;
    public $token;
    public $status;
    public $perfil;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insert_candidato()
    {
        //Criptografa a senha
        $this->senha = md5($this->senha);
        //Gera um token
        $this->token = md5(date('YmdHis'));
        $this->status = "Ativo";
        $this->perfil = "Candidato";
        
        //Inicia-se uma transação. Ou insere nas 2 tabelas (usuario e candidato) ou não insere em nenhuma!
        $this->db->trans_begin();
        try{
            //Insere o usuario
            $this->insert();
            //Insere o candidato
            $CI =& get_instance();
            $CI->load->model('candidato_model');
            $candidato_model = $CI->candidato_model;
            $candidato_model->usuario_idusuario = $this->db->insert_id(); //insert_id() pega o ultimo id AUTO INC inserido no banco de dados MySQL
            $candidato_model->insert();
            $this->db->trans_commit();
        } catch (Exception $ex) {
            $this->db->trans_rollback();//Desfaz as querys no banco!!!
            echo $ex->getMessage();
        }
    }
}
