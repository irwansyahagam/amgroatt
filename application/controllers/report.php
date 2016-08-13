<?php if(!defined('BASEPATH')) exit ('No Direct Access Allowed'); 

class report extends CI_Controller{


  function __construct(){
    parent::__construct(); 
    $this->load->library(array('form_validation','session'));
    $this->load->helper(array('lokup'));  
    $this->load->model(array('m_att')); 
    $this->load->database(); 
  }

  function index(){
    $sql=$this->db->query('select * from public."DEPARTMENTS" order by "DEPTID" ')->result_array();
    $arr=array(
      'sql'=>$sql
      );  
    $this->load->view('panel/head',$arr); 
    $this->load->view('panel/repharian'); 
    $this->load->view('panel/footer'); 
  }

  // laporan per departement 
  function repperdepart(){
    $this->load->view('panel/head'); 
    $this->load->view('panel/repperdepart'); 
    $this->load->view('panel/footer'); 
  }
  // laporan detail harian 
  function repdetharian(){
    $this->load->view('panel/head'); 
    $this->load->view('panel/repdetharian'); 
    $this->load->view('panel/footer'); 
  }

  // laporan lembur karyawan 
  function lemburkarya(){
    $this->load->view('panel/head'); 
    $this->load->view('panel/lembur'); 
    $this->load->view('panel/footer'); 
  }
  // laporan transaksi karyawan 
  function laptransaksi(){
    $this->load->view('panel/head'); 
    $this->load->view('panel/reptransaksi'); 
    $this->load->view('panel/footer'); 
  }
  // report perhitungan presensi 
  function lapperhpresensi(){
    $sql=$this->m_att->getdepartment()->result_array(); 
    $arr=array(
      'sql'=>$sql
      ); 
    $this->load->view('panel/head',$arr); 
    $this->load->view('panel/lapperhpresensi'); 
    $this->load->view('panel/footer'); 
  }

  // report tpk 
  function reporttpk(){
    $bln=$this->uri->segment(3); 
    $thn=$this->uri->segment(4); 
    $arr['thn']=$this->uri->segment(4);
    $dept=$this->uri->segment(5);  
    $jnspeg=$this->uri->segment(6); 
    $idpeg=$this->uri->segment(7); 
    $arr['depname']=$this->m_att->getdepartment3($dept); 
    $arr['bln']=getbulanindo($bln); 
    $sql2=''; 
    if(!empty($dept) && $jnspeg=='all'){
      $sql2.='  where "DEFAULTDEPTID"='."'$dept'".''; 
    }else if(!empty($dept) && $jnspeg=='0'){
      $sql2.=' where "DEFAULTDEPTID"='."'$dept'".' and "STTSKEPE"='."'0'".''; 
    }else if(!empty($dept) && $jnspeg=='1'){
      $sql2.=' where "DEFAULTDEPTID"='."'$dept'".' and "STTSKEPE"='."'1'".''; 
    }else if(!empty($dept) && !empty($idpeg)){
      $sql2.='  where "DEFAULTDEPTID"='."'$dept'".' and "USERID"='."'$idpeg'".''; 
    }
    $sql=$this->db->query('select * from public."USERINFO"'.$sql2); 
    $arr['html']='<table align="center"  
    style="width: 100%; font-size: 7pt;padding-left:2px; margin:1px;border: solid 1px #000000;border-collapse: collapse"">
  <tr>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">No</td>
    <td style="width:10%; text-align:center;border: solid 1px #000000;">Nama</td>
    <td style="width:10%; text-align:center;border: solid 1px #000000;">Nip</td>
    <td style="width:10%; text-align:center;border: solid 1px #000000;">NPWP</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Gol</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Jabatan</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">TPK</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Jml Jam Efektif/Bulan</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Jml Jam Hadir Sesuai Absensi</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Jml Tambahan Jam Hadir Sakit/Izin/Dinas</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Total jam Hadir</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Kekurangan Jam Kerja</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Potongan TPK/Jam</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Jml Potongan TPK</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Jml TPK Setelah pemotongan</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">PPh 21</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Jumlah TPK Setelah Pemotongan PPh 21</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Zakat</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Jml Bersih Diterima</td>
    <td style="width:4%; text-align:center;border: solid 1px #000000;">Tanda Tangan</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">1</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">2</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">3</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">4</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">5</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">6</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">7</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">8</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">9</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">10</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">11(9+10)</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">12(8-11)</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">13(7/8)</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">14(12*13)</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">15(7-14)</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">16</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">17(15-16)</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">18</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">19(17-18)</td>
    <td align="center" valign="middle" bgcolor="#999999" style="width:2%; text-align:center;border: solid 1px #000000;">20</td>
  </tr>
  <tr>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
  </tr>'; 
  $no=1; 
foreach($sql->result() as $row){
  $arr['html'].='<tr>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">'.$no++.'</td>
    <td style="width:2%; text-align:left;border: solid 1px #000000;">'.$row->Name.'</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">'.$row->SSN.'</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">'.$row->npwp.'</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">'.$this->m_att->getgolonganmaster($row->IDPANGKAT).'</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:2%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
  </tr>'; 
}
$arr['html'].='</table>';
  $this->load->view('panel/report/reptpk',$arr); 
  }

// report cetak keuangan 
  function reportcetkkeuangan(){
    $bln=$this->uri->segment(3); 
    $thn=$this->uri->segment(4); 
    $arr['thn']=$this->uri->segment(4);
    $dept=$this->uri->segment(5);  
    $jnspeg=$this->uri->segment(6); 
    $idpeg=$this->uri->segment(7); 
    $arr['depname']=$this->m_att->getdepartment3($dept); 
    $arr['bln']=getbulanindo($bln); 

    $sql2=''; 
    if(!empty($dept) && $jnspeg=='all'){
      $sql2.=' where "DEFAULTDEPTID"='."'$dept'".''; 
    } else if(!empty($dept) && $jnspeg=='1'){
      $sql2.=' where "DEFAULTDEPTID"='."'$dept'".' and "STTSKEPE"='."'1'".''; 
    }else if(!empty($dept) && $jnspeg=='0'){
      $sql2.=' where "DEFAULTDEPTID"='."'$dept'".' and "STTSKEPE"='."'0'".''; 
    }else if(!empty($dept) && $idpeg!="-"){
      $sql2.=' where "DEFAULTDEPTID"='."'$dept'".' and "USERID"='."'$idpeg'".''; 
    }
    $sql=$this->db->query('select * from public."USERINFO"'.$sql2); 
    $arr['html']='<table align="center"  
    style="width: 100%; font-size: 7pt;padding-left:2px; margin:1px;border: solid 1px #000000;border-collapse: collapse"">
    <thead>
      <tr>
    <td rowspan="3" style="width:2%; text-align:center;border: solid 1px #000000;">NO</td>
    <td rowspan="3" style="width:12%; text-align:center;border: solid 1px #000000;">Nama</td>
    <td colspan="7" style="width:5%; text-align:center;border: solid 1px #000000;">Faktor Statis Bobot</td>
    <td colspan="9" style="width:5%; text-align:center;border: solid 1px #000000;" valign="middle"> Faktor Dinamis Bobot 90%</td>
    <td rowspan="3" style="width:3%; text-align:center;border: solid 1px #000000;">Faktor Kehadiran</td>
    <td rowspan="3" style="width:5%; text-align:center;border: solid 1px #000000;">Total Skor</td>
    <td rowspan="3" style="width:5%; text-align:center;border: solid 1px #000000;">Jumlah</td>
    <td rowspan="3" style="width:5%; text-align:center;border: solid 1px #000000;">PPh 21</td>
    <td rowspan="3" style="width:5%; text-align:center;border: solid 1px #000000;">ZIS</td>
    <td rowspan="3" style="width:5%; text-align:center;border: solid 1px #000000;">Jumlah Diterima</td>
    <td rowspan="3" style="width:5%; text-align:center;border: solid 1px #000000;">Tanda Tangan</td>
  </tr>
  <tr>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Pendi<br/>dikan</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Skor</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Gol.</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Skor</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Masa Kerja</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Skor</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Skor Faktor Statis</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Tanggung Jawab</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Skor</td>
    <td colspan="4" style="width:3%; text-align:center;border: solid 1px #000000;">Skor Prestasi Kerja</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Skor Resiko Kerja</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Skor Beban Kerja</td>
    <td rowspan="2" style="width:3%; text-align:center;border: solid 1px #000000;">Skor Faktor Dinamis</td>
  </tr>
  <tr>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">SP</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">KP</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">PR</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">MI</td>
  </tr>
  </thead>
  <tr>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">1</td>
    <td style="width:12%; text-align:center;border: solid 1px #000000;">2</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">3</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">4</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">5</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">6</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">7</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">8</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">9(4+6+8)</td>
    <td style="width:5%; text-align:center;border: solid 1px #000000;">10</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">11</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">12</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">13</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">14</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">15</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">16</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">17</td>
    <td style="width:5%; text-align:center;border: solid 1px #000000;">18(11+12+13<br/>+14+15+16<br/>+17)</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">19</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">20 <br/>(((9*10%)+<br/>(18*90%))*19)</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">21</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">22</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">23</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">24 (21-22-23)</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">25</td>
  </tr>'; 
  $no=1; 
  foreach($sql->result() as $row){
  $arr['html'].='<tr>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">'.$no++.'</td>
    <td style="width:12%; text-align:center;border: solid 1px #000000;">'.$row->Name.'</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">'.$this->m_att->getpendidikan($row->IDPENDIDIKAN).'</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">'.$this->m_att->getskorpendidikan($row->IDPENDIDIKAN).'</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">'.$this->m_att->getgolonganmaster($row->IDPANGKAT).'</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">'.$this->m_att->getskorgolomas($row->IDPANGKAT).'</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:5%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:5%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
    <td style="width:3%; text-align:center;border: solid 1px #000000;">&nbsp;</td>
  </tr>'; 
}
$arr['html'].='</table>'; 
    $this->load->view('panel/report/repkeuangan',$arr); 
  }

  // function report gaji pegawai 
  function repgajipeg(){
    $deptid=$this->uri->segment(3); 
    $bulan=(int) $this->uri->segment(4); 
    $thn=$this->uri->segment(5);

    $bln='Bulan '.getbulanindo($bulan).' Tahun '.$thn; 
    $sql='select a."USERID",a."Name",a."SSN" as "NIP", 
      '."''".' as NPWP,'."''".' AS GOL, a."JABATAN",b."tpk", b."jlhjam", 
      b."jlhjamsesuaiabsen", b."jlhtambhnjam", b."totaljam", 
      b."kekurngnjamkrj",b."pottpkperjam",b."jmlhpottpk",b."sisatpk",b."pph", 
      b."sisatpkkurpph",b."zakat",b."trimabersih",b."tgl" from public."USERINFO" a left join public."payrollpeg" b
      on a."USERID"=cast(b."kduser" as integer)  where a."DEFAULTDEPTID"='."'$deptid'".'';
      //and  extract(MONTH from b."tgl")  ='."'$bulan'".' and  extract(MONTH from b."tgl") ='."'$thn'".'';  
    //$namaunit = $this->session->userdata('namaunit');
        define('FPDF_FONTPATH',APPPATH .'libraries/font/');
          require(APPPATH .'libraries/fpdf.php');
          require(APPPATH .'libraries/mc_table.php');
          $pdf = new Mc_table('l','mm','A3');
                $pdf->AliasNbPages();
          $pdf -> AddPage();
          $pdf->SetMargins(4,8,3,2);
          $pdf -> setFont ('Courier','B','12');
          $pdf -> cell(420,10,'Daftar: Tambahan Penghasilan PNS Berdasarkan Prestasi Kerja (TPK)',0,0,'C');
          $pdf->ln();
          $pdf -> cell(370,0,$bln,0,0,'C');
    //$pdf->Line(108,25, 210-20,25);
          $pdf ->Ln();
          $pdf -> setFont ('Times','B','8');
          //$pdf->Cell(35,10,'Klasifikasi Pasien',0,0,'L',0);
          //$pdf->Cell(3,10,':',0,0,'L',0);
          //$pdf->Cell(30,10,'Semua Pasien',0,1,'L',0);

          //$pdf->Cell(35,0,'Periode',0,0,'L',0);
          //$pdf->Cell(3,0,':',0,0,'L',0);
        //$pdf->Cell(30,0,$this->uri->segment(3).'/'.$this->uri->segment(4),0,1,'L',0);//<td>'.date('d-m-Y').'/'.date('d-m-Y').'</td>
        //$pdf->Cell(35,10,'Poli',0,0,'L',0);
        //$pdf->Cell(3,10,':',0,0,'L',0);
       $pdf->Cell(30,10,'',0,0,'L',0);
        $pdf ->Ln();
      
        $header = array('No','Nama','NIP','NPWP','GOL','JABATAN','TPK','Jlh JAM EFEKTIF/BULAN','JML JAM HADIR SESUAI ABSENSI','JML TAMBAHAN JAM HADIR Sakit/Izin/Dinas','Total Jam Hadir','Kekurangan Jam Kerja','Potongan TPK/Jam','Jumlah Potongan TPK',
          'Jlh TPK Setelah Pemotongan','PPH','JLH TPK SETELAHPEMOTONGAN PPH','Zakat','Terima Bersih','Tanda Tangan');
        $pdf->SetHeader($header);
      $no=1;
    set_time_limit(1800); 

    $pdf->SetWidths(array(10,40,17,17,17,17,18,20,20,17,15,10,14,16,18,19,22,18,20,20));
        $pdf->buatHeader(); 
        $pdf->output(); 
  }
    //  // pengurangan tanggal 
  function pengtanggal2($tgl1,$tgl2){
    $date1=tglinsertdata($tgl1); 
    $date2=tglinsertdata($tgl2); 
    //$time1=strtotime($date1);
    //$time2=strtotime($date2);
    $selisih= (((strtotime ($date2) - strtotime ($date1)))/(60*60*24));
    return $selisih; 
  }
  // report bkpp 
  function reportbkpp(){
    $iddeprt=$this->uri->segment(3); 
    $iduser=$this->uri->segment(4); 
    $tgl1=tglinsertdata($this->uri->segment(5)); 
    $tgl2=tglinsertdata($this->uri->segment(6)); 
    $param['tgl1']=viewtglweb($tgl1); 
    $param['tgl2']=viewtglweb($tgl2); 
    if($iddeprt=="all"){
    $sql=$this->db->query('select * from public."USERINFO" a left join public."golonganmaster" b on 
          a."IDPANGKAT"=b."kd_golongan" order by b."golongan" desc');
    }else if($iddeprt!="all" && $iduser=="-"){
    $sql=$this->db->query('select * from public."USERINFO" a left join public."golonganmaster" b on 
          a."IDPANGKAT"=b."kd_golongan" where a."DEFAULTDEPTID"='."'$iddeprt'".'  order by b."golongan" desc');
    }else if($iduser!="-"){
    $sql=$this->db->query('select * from public."USERINFO" a left join public."golonganmaster" b on 
    a."IDPANGKAT"=b."kd_golongan" where a."DEFAULTDEPTID"='."'$iddeprt'".'  and a."USERID"='."'$iduser'".' 
    order by b."golongan" desc');
    }
    $param['html']='<br /><table align="center" 
    style="width: 100%; font-size: 9pt;padding:0px;margin:1px;border: solid 1px #000000;border-collapse: collapse"">
    <thead>
                <tr>
          <td  rowspan="2" style="width:6%;border: solid 1px #000000;text-align:center;">NO</td>
          <td rowspan="2" style="width:33%;text-align:center;border: solid 1px #000000;">NAMA</td>
          <td rowspan="2" style="text-align:center;width:17%;border: solid 1px #000000;">NIP</td>
          <td rowspan="2" style="text-align:center;width:10%;border: solid 1px #000000;">PGKT/GOL</td>
          <td colspan="4" style="text-align:center; width:15%;border: solid 1px #000000;">Ketidakhadiran</td>
          <td width="52" rowspan="2" style="text-align:center;border: width:15%; solid 1px #000000;">KET</td>
          </tr>
          <tr>
          <td  style="width:5%; text-align:center;border: solid 1px #000000;">Sakit</td>
          <td style="width:5%; text-align:center;border: solid 1px #000000;">Izin</td>
          <td style="width:5%; text-align:center;border: solid 1px #000000;">Cuti</td>
          <td style="width:5%; text-align:center;border: solid 1px #000000;">Alpha</td>
          </tr>
          </thead>
              <tbody>'; 
        $no=1; 
        foreach($sql->result() as $row){
          $param['html'].='<tr>
          <td style="width:6%;border: solid 1px #000000;text-align:center;">'.$no++.'</td>
          <td style="width:33%;text-align:left;border: solid 1px #000000;">'.$row->Name.'</td>
          <td style="text-align:left;width:17%;border: solid 1px #000000;">'.$row->SSN.'</td>
          <td style="text-align:left;width:10%;border: solid 1px #000000;">'.$row->golongan.'</td>
          <td style="text-align:center;border: solid 1px #000000;">'; 
          $sql1=$this->m_att->repbkpp($row->USERID,$tgl1,$tgl2,'1');  // sakit 
          if($sql1->num_rows()<=0){
            $param['html'].='0'; 
          }else{
             $st=viewtglweb($sql1->row()->startspecday);
             $st1=viewtglweb($sql1->row()->endspecday); 
             $param['html'].=$this->pengtanggal2(tglinsertdata($st),tglinsertdata($st1)); 
            //echo  ''; 
          }
          $param['html'].='</td>
          <td style="text-align:center;border: solid 1px #000000;">'; 
          $sql2=$this->m_att->repbkpp($row->USERID,$tgl1,$tgl2,'3'); // izin 
          if($sql2->num_rows()<=0){
            $param['html'].='0'; 
          }else{
             $st=viewtglweb($sql2->row()->startspecday);
             $st1=viewtglweb($sql2->row()->endspecday); 
             $param['html'].=$this->pengtanggal2(tglinsertdata($st),tglinsertdata($st1)); 
          }
          $param['html'].='</td>
          <td style="text-align:center;border: solid 1px #000000;">'; 
          $sql3=$this->m_att->repbkpp($row->USERID,$tgl1,$tgl2,'2'); // cuti 2
          if($sql3->num_rows()<=0){
            $param['html'].= '0'; 
          }else{
             $st=viewtglweb($sql3->row()->startspecday);
             $st1=viewtglweb($sql3->row()->endspecday); 
             $param['html'].= $this->pengtanggal2(tglinsertdata($st),tglinsertdata($st1)); 
          }
          $param['html'].= '</td>
          <td style="text-align:center;border: solid 1px #000000;">&nbsp;</td>
          <td style="text-align:center;border: solid 1px #000000; width:15%;">&nbsp;</td></tr>
          '; 
      }       
           $param['html'].='</tbody>
              </table>'; 
              $this->load->view('panel/report/bkpp',$param);
  }
  // report presensi 
  function reppresensi(){
    $param['tgl1']=$this->uri->segment(3); 
    $param['tgl2']=$this->uri->segment(4); 
    $param['iddept']=$this->uri->segment(5); 
    $param['idpeg']=$this->uri->segment(6); 
    date_default_timezone_set('Asia/Jakarta'); 
    $sqlp=$this->db->query('select count("ID")+1 as jlh from public."SystemLog"'); 
    $logtime=date('Y-m-d H:i:s'); 
    $arr=array(
      'ID'=>$sqlp->row()->jlh, 
      'Operator'=>$this->session->userdata('nama'), 
      'Logtime'=>$logtime, 
      'MachineAlias'=>'', 
      'LogTag'=>'0', 
      'LogDescr'=>'Cetak Data presensi'
      ); 
    $this->m_att->simpanlog($arr); 
    $sql2=$this->db->get_where('DEPARTMENTS',array('DEPTID'=>$param['iddept'])); 
    if($sql2->num_rows()>0){
      $param['nmdept']=$sql2->row()->DEPTNAME; 
    }else{
      $param['nmdept']=''; 
    }
    $sql=$this->db->get_where('USERINFO',array('USERID'=>$param['idpeg'])); 
    if($sql->num_rows()>0){
      $param['nip']=$sql->row()->SSN; 
      $param['nmpeg']=$sql->row()->Name; 
    }else{
      $param['nip']=''; 
      $param['nmpeg']=''; 
    }
    $param['html']='<table align="left"  
    style="width: 100%; font-size: 9pt;padding-left:50px; margin:1px;border: solid 1px #000000;border-collapse: collapse"">
    <tr>
    <td  style="width:6%;border: solid 1px #000000;text-align:center;">No</td>
    <td  style="width:20%;border: solid 1px #000000;text-align:center;">Date, Time</td>
    <td style="width:20%;border: solid 1px #000000;text-align:center;">Status</td>

  </tr>'; 
  $no=1; 
  $sql=$this->m_att->getdatapresensi(tglinsertdata($param['tgl1']),tglinsertdata($param['tgl2']),$param['idpeg']);
  foreach ($sql->result() as $row){
  $param['html'].='<tr>
    <td style="width:6%;border: solid 1px #000000;text-align:center;">'.$no++.'</td>
    <td style="width:6%;border: solid 1px #000000;text-align:center;">'.$row->CHECKTIME.'</td>
    <td style="width:6%;border: solid 1px #000000;text-align:center;">'.$row->checktype1.'</td>
  </tr>'; 
  }
    $param['html'].='</table>'; 
    $this->load->view('panel/report/presensi',$param); 
  }

  function reportharian(){
  $iddeprt=$this->uri->segment(3); 
  $iduser=$this->uri->segment(4); 
  $tgl1=tglinsertdata($this->uri->segment(5)); 
  $tgl2=tglinsertdata($this->uri->segment(6)); 
  $param['tgl1']=viewtglweb($tgl1); 
  $param['tgl2']=viewtglweb($tgl2);   
  $sql=$this->db->get_where('DEPARTMENTS',array('DEPTID'=>$iddeprt)); 
  $param['ruang']=$sql->row()->DEPTNAME;
  $param['nama']=$this->session->userdata('nama'); 
  $param['html']='<table align="center" style="width: 100%; font-size: 7pt;padding:0px;margin:1px;border: solid 1px #000000;border-collapse: collapse"">
  <tr>
    <td rowspan="2" style="width:10%;border: solid 1px #000000;text-align:center;">Nama  NIP/NIK</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">1</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">2</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">3</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">4</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">5</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">6</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">7</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">8</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">9</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">10</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">11</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">12</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">13</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">14</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">15</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">16</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">17</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">18</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">19</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">20</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">21</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">22</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">23</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">24</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">25</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">26</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">27</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">28</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">29</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">30</td>
    <td rowspan="2" style="width:2%;border: solid 1px #000000;text-align:center;">31</td>
    <td style="width:3%;border: solid 1px #000000;text-align:center;">Normal</td>
    <td style="width:3%;border: solid 1px #000000;text-align:center;">Riil </td>
    <td style="width:3%;border: solid 1px #000000;text-align:center;">Absen</td>
    <td style="width:3%;border: solid 1px #000000;text-align:center;">Terlambat</td>
    <td style="width:3%;border: solid 1px #000000;text-align:center;">Plg.Cepat</td>
    <td style="width:3%;border: solid 1px #000000;text-align:center;">Jml.Cuti</td>
    <td style="width:3%;border: solid 1px #000000;text-align:center;">Jml.Izin</td>
    <td style="width:3%;border: solid 1px #000000;text-align:center;">D.luar</td>
  </tr>
  <tr>
    <td style="border: solid 1px #000000;text-align:center;">Kali</td>
    <td style="border: solid 1px #000000;text-align:center;">Kali</td>
    <td style="border: solid 1px #000000;text-align:center;">Hari</td>
    <td style="border: solid 1px #000000;text-align:center;">Menit</td>
    <td style="border: solid 1px #000000;text-align:center;">Menit</td>
    <td style="border: solid 1px #000000;text-align:center;">Hari</td>
    <td style="border: solid 1px #000000;text-align:center;">Hari</td>
    <td style="border: solid 1px #000000;text-align:center;">Hari</td>
  </tr>
  <tr>
    <td colspan="40" bgcolor="#999999" style="border: solid 1px #000000;text-align:left;">&nbsp;</td>
  </tr>

</table>'; 
  $this->load->view('panel/report/repharian',$param);
  }

  // selisih jam 


function selsih(){
  $tanggal =SelisihWaktu("14:50:10","12:10:10");
  echo $tanggal;
}

// cetak riwayat operasional 
function cetakriwoperasional(){
  $param['nama']=$this->session->userdata('nama'); 
  $sql=$this->m_att->getsystemlog(); 
  $param['html']='<table align="center" style="width: 100%; font-size: 7pt;padding:0px;margin:1px;border: solid 1px #000000;border-collapse: collapse"">
  <tr>
    <td style="width:6%;border: solid 1px #000000;text-align:center;">No</td>
    <td style="width:20%;border: solid 1px #000000;text-align:center;">Operator</td>
    <td style="width:18%;border: solid 1px #000000;text-align:center;">Tgl,Jam Transaksi</td>
    <td style="width:12%;border: solid 1px #000000;text-align:center;">Mesin</td>
    <td style="width:28%;border: solid 1px #000000;text-align:center;">Deskripsi</td>
  </tr>'; 
  foreach ($sql->result() as $row){
   $no=1;  
  $param['html'].='<tr>
    <td style="width:6%;border: solid 1px #000000;text-align:center;">'.$no++.'</td>
    <td style="width:20%;border: solid 1px #000000;text-align:center;">'.$row->Operator.'</td>
    <td style="width:18%;border: solid 1px #000000;text-align:center;">'.viewtglweb($row->Logtime).','.getjamweb($row->Logtime).'</td>
    <td style="width:12%;border: solid 1px #000000;text-align:center;">'.$row->MachineAlias.'</td>
    <td style="width:28%;border: solid 1px #000000;text-align:center;">'.$row->LogDescr.'</td></tr>'; 
  }
  $param['html'].='
</table>
'; 
  $this->load->view('panel/report/repoperasional',$param); 
}


// cetak jadwal 
function cetakjadwal(){
  $param['tgl1']=$this->uri->segment(3); 
  $param['tgl2']=$this->uri->segment(4); 
  $unit=$this->uri->segment(5); 
  $tgl1=tglinsertdata($param['tgl1']); 
  $tgl2=tglinsertdata($param['tgl2']); 

  $sql=$this->db->get_where('DEPARTMENTS',array('DEPTID'=>$unit)); 
  if($sql->num_rows()>0){
    $param['ruang']=$sql->row()->DEPTNAME; 
  }else{
    $param['ruang']=''; 
  }


  $sql2=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$unit)); 

  $param['nama']=$this->session->userdata('nama'); 
  $no=1; 
  $param['html']='<table align="center" style="width: 100%; font-size: 7pt;
                 padding:0px;margin:1px;border: solid 1px #000000;border-collapse: collapse"">
                  <tr>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">NO</td>
                  <td style="width:18%;border: solid 1px #000000;text-align:center;">Nama</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">1</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">2</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">3</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">4</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">5</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">6</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">7</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">8</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">9</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">10</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">11</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">12</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">13</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">14</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">15</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">16</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">17</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">18</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">19</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">20</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">21</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">22</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">23</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">24</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">25</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">26</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">27</td>
                    <td style="width:2%;border: solid 1px #000000;text-align:center;">28</td>
                    <td style="width:2%;border: solid 1px #000000;text-align:center;">29</td>
                    <td style="width:2%;border: solid 1px #000000;text-align:center;">30</td>
                    <td style="width:2%;border: solid 1px #000000;text-align:center;">31</td>
                   </tr>'; 
      foreach($sql2->result() as $row){
                  $userid=$row->USERID; 
                  $sqldb=$this->db->query('select * from public."USER_OF_RUN" where "USERID"='."'$userid'".' and  
                  "STARTDATE">='."'$tgl1'".' or "ENDDATE"<='."'$tgl2'".''); 
                  $param['html'].='<tr>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">'.$no++.'</td>
                  <td style="width:18%;border: solid 1px #000000;text-align:left;">'.$row->Name.' ('.$row->SSN.')'.'</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;background-color:#3C8DBC;border-width:0px;
                  color:white;">P</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                   <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                  <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                    <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                    <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                    <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                    <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                    <td style="width:2%;border: solid 1px #000000;text-align:center;">&nbsp;</td>
                  </tr>'; 
      }             
      $param['html'].='</table>'; 
  $this->load->view('panel/report/jadwal',$param); 
}

}