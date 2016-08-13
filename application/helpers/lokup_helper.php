<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function getkdpayrollsetting(){
  $CI= & get_instance();
  $CI->load->database();
  $sql="select COALESCE(max(cast(kode as integer)),0)+1 as kd from payrollsetting";
  $query=$CI->db->query($sql);
  if(!empty($query)){
    if($query->num_rows){
      $row=$query->row();
      $kd1=$row->kd;
      if(strlen($kd1)==1){
        return '0000'.$kd1;
      }else if(strlen($kd1)==2){
        return '000'.$kd1;
      }else if(strlen($kd1)==3){
        return '00'.$kd1;
      }else if(strlen($kd1)==4){
        return '0'.$kd1;
      }else if(strlen($kd1)==5){
        return $kd1;
      }
    }
  }else{
    return 0;
  }
}
function viewtglweb($tgl) {
    $tgl=  substr($tgl, 0,10);
    $tglex = explode("-", $tgl);
    $tgl = $tglex[2] . "-" . $tglex[1] . "-" . $tglex[0];
    return $tgl;
}
// function get jam web 
function getjamweb($jam){
  $jam=substr($jam,11,19); 
  return $jam; 
}


function tglinsertdata($tgl) {
    $tglex = explode("-", $tgl);
    $tgl = $tglex[2] . "-" . $tglex[1] . "-" . $tglex[0];
    return $tgl;
}

// get id system log 
function getidsystemlog(){
  $CI= & get_instance(); 
  $CI->load->database(); 
  $sql='select count("ID")+1 as "id" from public."SystemLog"'; 
  $query=$CI->db->query($sql); 
  return $query->row()->id; 
}

// get value all per bulan tahun 
function getvaluenilai($userid,$bln,$thn){
  $CI= & get_instance(); 
  $CI->load->database(); 
  $sql=$CI->db->get_where('pagenilai',array('USERID'=>$userid,'bln'=>$bln,'thn'=>$thn)); 
  if($sql->num_rows()>0){
    return $sql->row()->TJ.'|'.$sql->row()->sp.'|'.$sql->row()->kp.'|'.$sql->row()->pr.'|'.$sql->row()->mi.'|'.$sql->row()->jlhskor; 
  }else{  
    return '0'; 
  }
}

// get value penilaian 
function cekpenilaiain($kduser,$bln,$thn){
  $CI= & get_instance(); 
  $CI->load->database(); 
  $sql='select * from public."pagenilai" where "IDUSER"='."'$kduser'".' and "bln"='."'$bln'".' and "thn"='."'$thn'".'';
  $query=$CI->db->query($sql);  
}

function getkdgolongan(){
  $CI= & get_instance();
  $CI->load->database();
  $sql="select COALESCE(max(cast(kd_golongan as integer)),0)+1 as kd from golonganmaster";
  $query=$CI->db->query($sql);
  if(!empty($query)){
    if($query->num_rows){
      $row=$query->row();
      $kd1=$row->kd;
      if(strlen($kd1)==1){
        return "0000".$kd1;
      }else if(strlen($kd1)==2){
        return "000".$kd1;
      }else if(strlen($kd1)==3){
        return "00".$kd1;
      }else if(strlen($kd1)==4){
        return "0".$kd1;
      }else if(strlen($kd1)==5){
        return $kd1;
      }
    }
  }else {
    return 0;
  }
}

function isLogin()
 {
  $CI = & get_instance();
  $CI->load->library('session');
  $dt=array(
      'nik' => $CI->session->userdata("nik"),
      'nama' => $CI->session->userdata("nama"),
      'pass'=>$CI->session->userdata('pass'), 
    );
  return $dt;
 }

 // enkrip 
 function encryptPassword($dt){
  $hsl="";
  $key=chr(166).chr(183).chr(176);
  $lkey=strlen($key);
  $_Vb_t_i4_0=strlen($dt);
  $k=0;
  for($i=0;$i<$_Vb_t_i4_0;$i++){
    if($k==($lkey)){
      $k=0;
    }
    $hsl.=chr(ord(substr($dt,$i,1)) ^ ord(substr($key,$k,1)));
    $k++;
  }
  return $hsl;
}

// get tanggal indonesia 
function gettglindo($tgl){
  $day=date('D',strtotime($tanggal)); 
  $daylist=array(
    'Sun' => 'Minggu', 
    'Mon' => 'Senin', 
    'Tue' => 'Selasa', 
    'Wed' => 'Rabu', 
    'Thu' => 'Kamis', 
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
    ); 
  echo($daylist[$day]); 
}

// get number id shift master 
function getnumshift(){
  $CI= & get_instance(); 
  $CI->load->database(); 
  $sql='select MAX("NUM_RUNID")+1 as "NOM" from public."NUM_RUN"'; 
  $query=$CI->db->query($sql); 
  if(!empty($query)){
    if($query->num_rows()>0){
      return $query->row()->NOM; 
    }else{
      return '0'; 
    }
  }else{
    return '0'; 
  }
}
// get id akses user menu 
function getidusermenu(){
  $CI= & get_instance(); 
  $CI->load->database(); 
  $sql='select count("id")+1 as id from public."aksesuserdet"'; 
  $query=$CI->db->query($sql); 
  if($query->num_rows()>0){
    return $query->row()->id; 
  }else{
    return '0'; 
  }

}

function getkduraian(){
  $CI= & get_instance();
  $CI->load->database();
  $sql="select COALESCE(max(cast(iduraian as integer)),0)+1 as kd from masteruraian";
  $query=$CI->db->query($sql);
  if(!empty($query)){
    if($query->num_rows){
      $row=$query->row();
      $kd1=$row->kd;
      if(strlen($kd1)==1){
        return '00'.$kd1;
      }else if(strlen($kd1)==2){
        return '0'.$kd1;
      }else if(strlen($kd1)==3){
        return $kd1;
      }
    }
  }else{
    return 0;
  }
}

// get id system log 
function getidLog(){
	$CI= & get_instance(); 
	$CI->load->database(); 
	$sql='select COALESCE(max(cast("ID" as integer)),0)+1 as kd from public."SystemLog"'; 
	return $sql->row()->kd; 	
}

// getfunction siang/pagi/malam

function readtime(){
  date_default_timezone_set('Asia/Jakarta'); 
  $b = time();
  $hour = date("G",$b);
  echo $hour; 
    if ($hour>=0 && $hour<=11)
    {
    return "Pagi";
    }
    elseif ($hour >=12 && $hour<=14)
    {
    return "Siang";
    }
    elseif ($hour >=15 && $hour<=17)
    {
    return "Sore";
    }
    elseif ($hour >=17 && $hour<=18)
    {
    return "Malam";
    }
    elseif ($hour >=19 && $hour<=23)
    {
      return "Malam";
      }
}

// function readjam for time schedule
// ket jaml= jam leave  
function readjam($jam,$jaml){
  $arr=array(); 
  for($i=$jam;$i<=$jaml;$i++){
    $arr[]=$i;  
  }
  return json_encode($arr); 
}
// return get no iduser 
function getidnouser(){
    $CI= & get_instance(); 
  $CI->load->database(); 
  $sql=$CI->db->query('select MAX("USERID")+1 as noid from public."USERINFO"'); 
  if($sql->num_rows()>0){
     return $sql->row()->noid;  
  }else{
      return '0'; 
  }
}

// function badgenumber 
function getidbudgenumber(){
    $CI= & get_instance(); 
  $CI->load->database(); 
  $sql=$CI->db->query('select MAX(cast("Badgenumber" as int))+1 as noid from public."USERINFO"'); 
  if($sql->num_rows()>0){
    return $sql->row()->noid; 
  }else{
    return '0'; 
  }
}



function getbulanindo($bln){
  switch($bln){
    case 1: $bulan='Januari'; break; 
    case 2: $bulan='Februari';break; 
    case 3: $bulan='Maret'; break; 
    case 4: $bulan='April';break; 
    case 5: $bulan='Mei'; break; 
    case 6: $bulan='Juni'; break; 
    case 7: $bulan='Juli'; break; 
    case 8: $bulan='Agustus'; break; 
    case 9: $bulan='September'; break; 
    case 10: $bulan='Oktober'; break; 
    case 11: $bulan='November'; break; 
    case 12: $bulan='Desember'; break; 
  }
  return $bulan;
}

  function SelisihWaktu($awal, $akhir)
{
$seconds = 0;
$detik =0;
$selisih = 0;
if(strtotime($awal)>strtotime($akhir)){
$mulai = $akhir;
$selesai = $awal;
}else{
$mulai = $awal;
$selesai = $akhir;
}
list( $g, $i, $s ) = explode( ":", $mulai );
$seconds += $g * 3600;
$seconds += $i * 60;
$seconds += $s;
$newSeconds = $seconds;

list( $g, $i, $s ) = explode( ":", $selesai );
$detik += $g * 3600;
$detik += $i * 60;
$detik += $s;
$detikbaru = $detik;

$selisih = (int) ($detikbaru-$newSeconds);

$jam = floor( $selisih / 3600 );
$selisih -= $jam * 3600;
$menit = floor( $selisih / 60 );
$selisih -= $menit * 60;

if($jam<10){ $jam="0".$jam;}
if($menit<10){ $menit="0".$menit;}
if($selisih<10){ $selisih="0".$selisih;}

return $jam.':'.$menit.':'.$selisih;
}

function getkdpendi(){
  $CI= & get_instance();
  $CI->load->database();
  $sql='select COALESCE(max(cast("IDPENDIDIKAN" as integer)),0)+1 as kd from public."PENDIDIKAN"';
  $query=$CI->db->query($sql);
  if(!empty($query)){
    if($query->num_rows){
      $row=$query->row();
      $kd1=$row->kd;
      if(strlen($kd1)==1){
        return "000".$kd1;
      }else if(strlen($kd1)==2){
        return "00".$kd1;
      }else if(strlen($kd1)==3){
        return "0".$kd1;
      }else if(strlen($kd1)==4){
        return $kd1;
      }
    }
  }else {
    return 0;
  }
}
