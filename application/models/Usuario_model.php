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
    public $telefone; 
    public $celular;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insert()
    {
        //Gera um token
        $this->token = md5(date('YmdHis'));
        $this->status = "Ativo";
        
        //Inicia-se uma transação. Ou insere nas 2 tabelas (usuario e candidato OU usuario e empresa) ou não insere em nenhuma!
        $this->db->trans_begin();
        try{
            //Valida os dados
            $this->validar_dados();
            //Criptografa a senha
            $this->senha = md5($this->senha);   
            //Insere o usuario
            parent::insert();
            //Insere o candidato
            $CI =& get_instance();
            //A partir do perfil será carregado: candidato_model ou empresa_model
            $rel_model_name = strtolower($this->perfil) . '_model';
            $CI->load->model($rel_model_name);
            $rel_model = $CI->$rel_model_name;
            $rel_model->usuario_idusuario = $this->db->insert_id(); //insert_id() pega o ultimo id AUTO INC inserido no banco de dados MySQL
            $rel_model->insert();
            $this->db->trans_commit();
        } catch (Exception $ex) {
            $this->db->trans_rollback();//Desfaz as querys no banco!!!
            throw new Exception();
        }
    }
    
    public function insert_admin()
    {
        //Gera um token
        $this->token = md5(date('YmdHis'));
        $this->status = "Ativo";
        
        try{
            $this->validar_dados();
            //Criptografa a senha
            $this->senha = md5($this->senha);
            //Insere o usuario
            parent::insert();
        } catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
    }
    
    public function validar_dados()
    {
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        $validate->set_message('not_contains', 'Já existe uma conta utilizando o email <strong>'. $this->email .'</strong>.');
        
        $validate->set('nome', $this->nome)->is_required()->min_length(5)->max_length(75)->is_alpha_num()
                ->set('email', $this->email)->is_required()->is_email()->not_contains($this->get_attr_array('email'))
                ->set('senha', $this->senha)->min_length(7);
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
    
    public function autenticar()
    {
        if(empty($this->email) || empty($this->senha)){
            return false;
        }
        //Criptografa a senha
        $this->senha = md5($this->senha);
        $usuario =  $this->db
                ->select('nome, token, perfil')
                ->from('usuario u')
                ->where('email', $this->email)
                ->where('senha', $this->senha)
                ->get()
                ->row(0, $this->model);
        if(!is_object($usuario)){
            return false;
        }
        
        $this->nome = $usuario->nome;
        $this->token = $usuario->token;
        $this->perfil = $usuario->perfil;
        return true;
    }
    
    public function get_id_by_token($token)
    {
        $usuario = $this->findBy('token', $token, 'idusuario');
        if(count($usuario) == 0){
            return false;
        }
        return $usuario[0]->idusuario;
    }
    
    public function get_attr_array($attr)
    {
        $res =  $this->db
                ->select($attr)
                ->from('usuario u')
                ->get()
                ->result_array();
        
        $retorno = array();
        foreach ($res as $reg){
            $retorno[] = $reg['email'];
        }            
        return $retorno;
    }
}
