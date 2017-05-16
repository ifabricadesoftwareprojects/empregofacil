<?php
/**
 * Description of Testes
 *
 * @author IFSP
 */
class Testes extends MY_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->load->model('usuario_model');
        var_dump($this->usuario_model->get_id_by_token('8c44001db94bd54cfaefe10bdf4226cc'));
    }
}
