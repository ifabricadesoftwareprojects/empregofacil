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
    
    public function pdf()
    {
        $this->load->model('candidato_model');
        $candidato = $this->candidato_model->get_candidato_by_token($this->session->token);
        $this->load->library('fpdf');
        $this->fpdf->AddPage();
        $this->fpdf->SetFont('Arial','B',18);
        $this->fpdf->Cell(40,16,$candidato->nome);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',16);
        $this->fpdf->Cell(40,10,"Dados Pessoais ");
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(40,10,"E-mail: " . $candidato->email);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(40,10,"Data de nascimento: " . $candidato->data_nascimento);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(40,10,"Sexo: " . $candidato->sexo);
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(40,10,"Genero: " . $candidato->genero);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(40,10,"Deficiencia: " . $candidato->descricao_deficiencia);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(40,10,"Tipo Habilitacao: " . $candidato->tipo_habilitacao);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(40,10,"Veiculo Proprio: " . $candidato->veiculo_proprio);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(40,10,"Disponibilidade Viajar: " . $candidato->disponibilidade_viajar);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(40,10,"Disponibilidade Mudar Residencia: " . $candidato->disponibilidade_mudar_residencia);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(40,10,"Disponibilidade Mudar Residencia: " . $candidato->disponibilidade_mudar_residencia);
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',16);
        $this->fpdf->Cell(40,10,"Experiencias Profissionais");
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',16);
        $this->fpdf->Cell(40,10,"Formacao Academica");
        $this->fpdf->Ln();
        $this->fpdf->SetFont('Arial','B',16);
        $this->fpdf->Cell(40,10,"Idiomas");
        $this->fpdf->Output();
    }
}
