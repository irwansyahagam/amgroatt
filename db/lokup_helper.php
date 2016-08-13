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

function tglinsertdata($tgl) {
    $tglex = explode("-", $tgl);
    $tgl = $tglex[2] . "-" . $tglex[1] . "-" . $tglex[0];
    return $tgl;
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
