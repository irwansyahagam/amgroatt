<?php if(!defined('BASEPATH')) exit ('No Direct Access Allowed');

class cetakall extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation'));
    $this->load->model(array('m_att'));
    $this->load->database();
  }

  function cetakterlambat(){
    //$kduser=$this->session->userdata('kodeuser');
    date_default_timezone_set('Asia/Jakarta');
  //$tgl1=$this->uri->segment(3);
  //$tgl2=$this->uri->segment(4);
  //$sql=$this->model_acc->repgetinjedatainv('3',$tgl1,$tgl2);
  define('FPDF_FONTPATH',APPPATH .'libraries/font/');
  require(APPPATH .'libraries/fpdf.php');
  require(APPPATH .'libraries/mc_table.php');
  $pdf = new Mc_table ('l','mm','A4');
  $arr = $pdf->AliasNbPages();
  $arr.=$pdf->AddPage();
  $arr.=$pdf->SetMargins(4,8,3,2);
  $arr.=$pdf->SetFont('Courier','B','12');
  $arr.=$pdf->cell(0,5,'Terlambat/ Pulang Cepat Kolektif',0,0,'C');
  $arr.=$pdf -> Ln();
    $arr.=$pdf -> cell(0,3,'  RSU. MEURAXA BANDA ACEH ',0,0,'C');
    $arr.=$pdf -> Ln();
  //  $arr.=$pdf -> cell(0,5,'Periode '.$tgl1.' s.d '.$tgl2,0,0,'C');
  //$pdf->Line(108,25, 210-20,25);
    $arr.=$pdf ->Ln();
      $header = array('No','ID','Nama','Tgl,Jam Masuk','Waktu Terlambat','Jam Pulang','Waktu Cepat Pulang','Lokasi');
    $arr.=$pdf->SetHeader($header);
    $arr.=$pdf ->Ln();
    $no=1;
    set_time_limit(1800);
    $arr.=$pdf->SetWidths(array(15,35,60,30,35,35,35,35));
    $arr.=$pdf->buatHeader();
  $arr.=$pdf -> output ();
}

function cetakdetharian(){
  //$kduser=$this->session->userdata('kodeuser');
  date_default_timezone_set('Asia/Jakarta');
//$tgl1=$this->uri->segment(3);
//$tgl2=$this->uri->segment(4);
//$sql=$this->model_acc->repgetinjedatainv('3',$tgl1,$tgl2);
define('FPDF_FONTPATH',APPPATH .'libraries/font/');
require(APPPATH .'libraries/fpdf.php');
require(APPPATH .'libraries/mc_table.php');
  $pdf = new Mc_table ('l','mm','A4');
  $arr = $pdf->AliasNbPages();
  $arr.=$pdf->AddPage();
  $arr.=$pdf->SetMargins(4,8,3,2);
  $arr.=$pdf->SetFont('Courier','B','12');
  $arr.=$pdf->cell(0,5,'Laporan Detail Harian',0,0,'C');
  $arr.=$pdf -> Ln();
  $arr.=$pdf -> cell(0,3,'',0,0,'C');
  $arr.=$pdf -> Ln();
//  $arr.=$pdf -> cell(0,5,'Periode '.$tgl1.' s.d '.$tgl2,0,0,'C');
//$pdf->Line(108,25, 210-20,25);
  $arr.=$pdf ->Ln();
    $header = array('No','Tanggal','Scan Masuk','Scan Pulang','Terlambat','Pulang Cepat','Lembur','Jam Kerja','Jmlh Hadir','Keterangan');
  $arr.=$pdf->SetHeader($header);
  $arr.=$pdf ->Ln();
  $no=1;
  set_time_limit(1800);
  $arr.=$pdf->SetWidths(array(15,35,60,30,35,35,35,35,35,35));
  $arr.=$pdf->buatHeader();
$arr.=$pdf -> output ();
}

}
