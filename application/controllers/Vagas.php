<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Home
 *
 * @author Rafael W. Pinheiro
 */
class Vagas extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('theme');
    }
    
    public function index()
    {
        $this->view('vagas');
    }
    
    
        
}
