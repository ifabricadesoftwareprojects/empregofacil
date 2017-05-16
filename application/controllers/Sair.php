<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Description of Login
 *
 * @author Rafael W. Pinheiro
 */
class Sair extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $userdata = array('token', 'nome');
        $this->session->unset_userdata($userdata);
        redirect('');
    }
}
