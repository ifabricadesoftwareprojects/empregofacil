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
    public $nivel_hierarquico;
    public $area;
    public $empresa;
    public $mes_ano_inicio;
    public $mes_ano_termino;
    public $emprego_atual;
    public $candidato_usuario_idusuario;
    
    public function __construct() {
        parent::__construct();
    }
    
    public function insert() {
        try {
            $this->validar_dados();
            parent::insert();
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    
   public function update($field, $value){
        try {
            $this->validar_dados();
            parent::update($field,$value);
        } catch (Exception $ex) {
            throw new Exception();
        }
    }
    
    public function validar_dados()
    {
        $mes_ano_inicio = explode("/", $this->mes_ano_inicio);
        $mes = $mes_ano_inicio[0];
        $ano = $mes_ano_inicio[1];
        $CI =& get_instance();
        $CI->load->library('data_validator');
        $validate = $CI->data_validator;
        
        $validate->set_message('between_values','O campo %s deve ter o mês entre %s e %s');
        $validate->set_message('max_value','O campo %s deve ter o ano menor que %s');
        $validate->set('cargo', $this->cargo)->is_required()
                ->set('atividade_desempenhada', $this->atividade_desempenhada)->is_required()
                ->set('nivel_hierarquico', $this->nivel_hierarquico)->is_required()
                ->set('area', $this->area)->is_required()
                ->set('empresa', $this->empresa)->is_required()
                ->set('mes_ano_inicio', $this->mes_ano_inicio)->is_required()
                ->set('mes_ano_inicio', $mes)->between_values(1, 12)
                ->set('mes_ano_inicio', $ano)->max_value(date("Y"))
                ->set('emprego_atual', $this->emprego_atual)->is_required();
        
        if($validate->validate() === false){
            $this->erro = $validate->get_errors();
            throw new Exception('Erro ao validar os dados');
        }
    }
}
