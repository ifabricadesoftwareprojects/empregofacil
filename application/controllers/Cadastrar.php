<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Candidato
 *
 * @author Rafael W. Pinheiro
 */
class Cadastrar extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function candidato()
    {
        if($this->input->post()){
            $this->load->model('usuario_model');
            $this->usuario_model->post_to($this->input->post(), $this->usuario_model);
            
            try{
                $this->usuario_model->insert_candidato();
                echo 'salvou';
            } catch (Exception $ex) {
                echo 'nao salvou<br />';
                echo $ex->getMessage();
            }
        }
    }
}
