<?php
/**
 * Description of Candidato
 *
 * @author Rafael W. Pinheiro
 */
class Candidato extends MY_Controller{
    protected $_template_folder = 'candidato';
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->view('home');
    }
}
