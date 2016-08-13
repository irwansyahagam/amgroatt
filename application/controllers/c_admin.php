<?php if(!defined('BASEPATH')) exit ('No Direct Access Allowed');

class c_admin extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('lokup'));
		$this->load->model(array('m_att'));
		$this->load->database();
	}

	function index(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			$this->session->set_flashdata('message','Anda Harus Login Dahulu');
			redirect('index.php/login','location'); 
		}else{
		$temp='';
		$tempizin='<div class="box-body table-responsive">
		<table id="example4" class="table table-bordered table-striped">
		<thead>
		<tr>
		<td>No.</td>
		<td width:10%;>ID Pegawai</td>
		<td width:20%;>Nama</td>
		<td>Department</td>
		<td>Check In</t>
		<td>Check Out</td>
		</tr>
		</thead>
		<tbody>
		</tbody>
		</table>
		</div>';
		$alpha='<div class="box-body table-responsive">
		<table id="example6" class="table table-bordered table-striped">
		<thead>
		<tr>
		<td>No.</td>
		<td width:10%;>ID Pegawai</td>
		<td width:20%;>Nama</td>
		<td>Department</td>
		<td>Check In</t>
		<td>Check Out</td>
		</tr>
		</thead>
		<tbody>
		</tbody>
		</table>
		</div>';
		$sakit='<div class="box-body table-responsive">
				<table id="example5" class="table table-bordered table-striped">
				<thead>
				<tr>
				<td>No.</td>
				<td width:10%;>ID Pegawai</td>
				<td width:20%;>Nama</td>
				<td>Department</td>
				<td>Check In</t>
				<td>Check Out</td>
				</tr>
				</thead>
				<tbody>
				</tbody>
				</table>
				</div>';
		$arr=array(
			'temp'=>$temp,
			'izin'=>$tempizin,
			'alpha'=>$alpha,
			'sakit'=>$sakit
		);
		$data=array(); 
		$thn=date('Y'); 
		//$sakit=array(); 
		$sql=$this->m_att->get(); 
		
		foreach ($sql->result_array() as $row)
		//if($row->num_rows()>0){
		$data[]=(int) $row['hasil']; 
		$sakit=$this->m_att->getsakit($thn); 
		if($sakit->num_rows()>0){
		foreach ($sakit->result() as $key){
			$bln1=($key->bln=='1') ? $key->jlh : 0; 
			$bln2=($key->bln=='2') ? $key->jlh : 0; 
			$bln3=($key->bln=='3') ? $key->jlh : 0; 
			$bln4=($key->bln=='4') ? $key->jlh : 0; 
			$bln5=($key->bln=='5') ? $key->jlh : 0; 
			$bln6=($key->bln=='6') ? $key->jlh : 0; 
			$bln7=($key->bln=='7') ? $key->jlh : 0; 
			$bln8=($key->bln=='8') ? $key->jlh : 0; 
			$bln9=($key->bln=='9') ? $key->jlh : 0; 
			$bln10=($key->bln=='10') ? $key->jlh : 0; 
			$bln11=($key->bln=='11') ? $key->jlh : 0; 
			$bln12=($key->bln=='12') ? $key->jlh : 0; 
 		}
 	}else{
 			$bln1=0; 
 			$bln2=0; 
 			$bln3=0; 
 			$bln4=0; 
 			$bln5=0; 
 			$bln6=0; 
 			$bln7=0; 
 			$bln8=0; 
 			$bln9=0; 
 			$bln10=0; 
 			$bln11=0; 
 			$bln12=0; 
	}

 		// izin 
 		$getizin=$this->m_att->getizin($thn); 
 		//$arizin=array(); 
 		if($getizin->num_rows()>0){
 		foreach ($getizin->result() as $row2){
 			$bln1i=($row2->bln=='1' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln2i=($row2->bln=='2' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln3i=($row2->bln=='3' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln4i=($row2->bln=='4' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln5i=($row2->bln=='5' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln6i=($row2->bln=='6' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln7i=($row2->bln=='7' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln8i=($row2->bln=='8' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln9i=($row2->bln=='9' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln10i=($row2->bln=='10' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln11i=($row2->bln=='11' || $row2->bln=='NULL') ? $row2->jlh : 0; 
			$bln12i=($row2->bln=='12' || $row2->bln=='NULL') ? $row2->jlh : 0; 
 		}
 	}else{
 		$bln1i=0; 
		$bln2i=0; 
		$bln3i=0; 
		$bln4i=0; 
		$bln5i=0; 
		$bln6i=0; 
		$bln7i=0; 
		$bln8i=0; 
		$bln9i=0; 
		$bln10i=0; 
		$bln11i=0; 
		$bln12i=0; 
 	}
 	$sqlhadir=$this->m_att->gethadir($thn); 
 	if($sqlhadir->num_rows()>0){
 		foreach ($sqlhadir->result() as $row9){
 			$bln1h=($row9->bln=='1') ? $row9->jlh : 0; 
			$bln2h=($row9->bln=='2') ? $row9->jlh : 0; 
			$bln3h=($row9->bln=='3') ? $row9->jlh : 0; 
			$bln4h=($row9->bln=='4') ? $row9->jlh : 0; 
			$bln5h=($row9->bln=='5' ) ? $row9->jlh : 0; 
			$bln6h=($row9->bln=='6' ) ? $row9->jlh : 0; 
			$bln7h=($row9->bln=='7' ) ? $row9->jlh : 0; 
			$bln8h=($row9->bln=='8' ) ? $row9->jlh : 0; 
			$bln9h=($row9->bln=='9' ) ? $row9->jlh : 0; 
			$bln10h=($row9->bln=='10' ) ? $row9->jlh : 0; 
			$bln11h=($row9->bln=='11' ) ? $row9->jlh : 0; 
			$bln12h=($row9->bln=='12' ) ? $row9->jlh : 0; 
 		}
 	}else{
 		$bln1h=0; 
		$bln2h=0; 
		$bln3h=0; 
		$bln4h=0; 
		$bln5h=0; 
		$bln6h=0; 
		$bln7h=0; 
		$bln8h=0; 
		$bln9h=0; 
		$bln10h=0; 
		$bln11h=0; 
		$bln12h=0; 
 	}
 	$tglhsl=date('Y-m-d');
    $jlhsakit=$this->m_att->getsakitpertgl1($tglhsl,'1');  
    $jlhsak2=$jlhsakit->row()->jlh; // jumlah sakit per tanggal 
    //tampilkan izin 
    $jlhizin=$this->m_att->getsakitpertgl1($tglhsl,'3');
    $jlhizin=$jlhizin->row()->jlh; 
    // get alpha 
    $jlhalpha=$this->m_att->getalphapertgl($tglhsl); 
   // if($jlhalpha->num_rows()>0){
    $jlhalpha2=$jlhalpha->row()->jlh;
    //}else{
    //	$jlhalpha2='0'; 
    //} 
    //get hadir pegawai 
    $getpeg=$this->m_att->gethdrpertanggal($tglhsl); 
    $getpeghdr=$getpeg->row()->jlh; 


	$this->load->view('panel/modalcari',$arr);
	$this->load->view('panel/modalcariizin',$arr);
	$this->load->view('panel/modalcarisakit');
	$this->load->view('panel/modalcarialpha',$arr);
	$this->load->view('panel/head');
	$this->load->view('panel/home',array('thn'=>$thn,'bln1'=>$bln1,'bln5'=>$bln5,'bln2'=>$bln2, 
			'bln3'=>$bln3,'bln4'=>$bln4,'bln6'=>$bln6,'bln7'=>$bln7,'bln8'=>$bln8,'bln9'=>$bln9, 
			'bln10'=>$bln10,'bln11'=>$bln11,'bln12'=>$bln12,
			'bln1i'=>$bln1i,'bln5i'=>$bln5i,'bln2i'=>$bln2i, 
			'bln3i'=>$bln3i,'bln4i'=>$bln4i,'bln6i'=>$bln6i,'bln7i'=>$bln7i,'bln8i'=>$bln8i,'bln9i'=>$bln9i, 
			'bln10i'=>$bln10i,'bln11i'=>$bln11i,'bln12i'=>$bln12i,
			'bln1h'=>$bln1h,'bln5h'=>$bln5h,'bln2h'=>$bln2h, 
			'bln3h'=>$bln3h,'bln4h'=>$bln4h,'bln6h'=>$bln6h,'bln7h'=>$bln7h,'bln8h'=>$bln8h,'bln9h'=>$bln9h, 
			'bln10h'=>$bln10h,'bln11h'=>$bln11h,'bln12h'=>$bln12h,'jlhsak2'=>$jlhsak2,'jlhizin'=>$jlhizin,'jlhalpha2'=>$jlhalpha2,'getpeghdr'=>$getpeghdr));
	$this->load->view('panel/footer');
	}
}
// get pencarian pegawai 
function getpencarianpeg(){
$akses=isLogin(); 
if(empty($akses['nik'])){
	redirect('index.php/login/logout','location'); 
}else{
date_default_timezone_set('Asia/Jakarta'); 
$nama1=$this->session->userdata('nama'); 
$tgl=date('Y-m-d H:i:s'); 	
$arr=array(
	'ID'=>getidsystemlog(), 
	'Operator'=>$nama1, 
	'Logtime'=>$tgl, 
	'MachineAlias'=>'', 
	'LogTag'=>0, 
	'LogDescr'=>'Pencarian Pegawai'
	); 
$this->m_att->simpanlog($arr); 


$nama=$this->input->post('nama'); 
$sql=$this->m_att->getpencarian($nama); 
$tgl=date('Y-m-d'); 
echo '<div class="col-xs-12" style="padding-top:20px;">
	<div class="box">
	<div class="box-header">
	<h3 class="box-title" style="margin-bottom:0px;">Hasil pencarian :'.$nama.'</h3>
	</div><!-- /.box-header -->
	<hr style="padding-top:3px; display:block; border-width:2px;margin-top:0px;margin-bottom:0px;"/>
	<div class="box-body table-responsive">
	<table id="example7" class="table table-bordered table-striped" style="margin-top:0px;padding-top:0px;">
	<thead>
	<tr>
	<td style="width:10%;text-align:center;">No.</td>
	<td width=180px style="text-align:center;">NIP/NIK</td>
	<td width="300px" style="text-align:center;">Nama</td>
	<td style="width:10%;text-align:center;">Department</td>
	<td style="width:10%;text-align:center;">Status Hadir</td>
	<td style="width:10%;text-align:center;">Check in</td>
	<td style="width:10%;text-align:center;">Check Out</td>
	<td style="width:10%;text-align:center;">Mesin Check</td>
	</tr>
	</thead>
	<tbody>';
	$no=1; 
	foreach($sql->result() as $row){
		echo '<tr>
		<td>'.$no++.'</td>
		<td>'.$row->SSN.'</td>
		<td>'.$row->Name.'</td>
		<td>
		'; 
		$sql2=$this->m_att->getalldept($row->DEFAULTDEPTID); 
		if($sql2->num_rows()>0){
		echo $sql2->row()->DEPTNAME;
		}else{
			echo ''; 
		} 
		echo '</td><td>';
		$sql3=$this->m_att->getsakitpertanggal($row->USERID,$tgl); 
		if($sql3->num_rows()>0){
			echo 'Sakit'; 
		}else{
			echo ''; 
		}
		echo '</td>
		<td></td>
		<td></td>
		<td></td>
		';  
	}
	echo '</tr></tbody>
	</table>
	</div>
	</div>'; 
}

}


// get pegawai alpha 
function getpegalpha(){
	$bln=$this->input->post('bln'); 
	$thn=$this->input->post('thn'); 
	//$sql=$this->m_att->getalphapeg($bln,$thn); 
	echo '<div class="box-body table-responsive">
		<table id="example2" class="table table-bordered table-striped">
			<thead>
			<tr>
		<td>No.</td>
		<td width:10%;>ID Pegawai</td>
		<td width:20%;>Nama</td>
		<td width:20%;>NIP/NIk</td>
		<td>Department</td>
		<td>Tanggal</td>
		</tr>
		</thead>
		<tbody></tbody>
		</table>
		</div>'; 
	
}

// pencarian global 
function pencglobal(){
	$nama=trim($this->input->post('nama')); 
	$sql=$this->db->query('select  a."USERID",a."SSN",a."Name",b."DEPTNAME" from public."USERINFO" a inner join "DEPARTMENTS" b 
on a."DEFAULTDEPTID"=b."DEPTID" where a."Name" like '."'%$nama%'".''); 
	$no=1; 
	echo '	<div class="col-xs-12" style="padding-top:20px;">
	<div class="box">
	<div class="box-header">
	<h3 class="box-title" style="margin-bottom:0px;">Hasil pencarian</h3>
	</div><!-- /.box-header -->
	<hr style="padding-top:3px; display:block; border-width:2px;margin-top:0px;margin-bottom:0px;"/>
	<div class="box-body table-responsive">
	<table id="example7" class="table table-bordered table-striped" style="margin-top:0px;padding-top:0px;">
	<thead>
	<tr>
	<td style="width:10%;text-align:center;">No.</td>
	<td width=180px style="text-align:center;">ID</td>
	<td width="300px" style="text-align:center;">Nama</td>
	<td style="width:10%;text-align:center;">Department</td>
	<td style="width:10%;text-align:center;">Status Hadir</td>
	<td style="width:10%;text-align:center;">Check in</td>
	<td style="width:10%;text-align:center;">Check Out</td>
	<td style="width:10%;text-align:center;">Mesin Check</td>
	</tr></thead>
	<tbody>'; 
	foreach($sql->result() as $row){
		echo '<tr>
			<td>'.$no++.'</td>
			<td>'.$row->SSN.'</td>
			<td>'.$row->Name.'</td>
			<td>'.$row->DEPTNAME.'</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td> 
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		'; 
	}
	echo '</tr></tbody>
	</table></div></div>';
	
}

function formhadirpeg(){
	$bln=$this->input->post('bln'); 
	$thn=$this->input->post('thn'); 
	$sql=$this->m_att->gethadir2($bln,$thn); 
echo '<div class="box-body table-responsive">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
			<tr>
		<td>No.</td>
		<td width:10%;>ID Pegawai</td>
		<td width:20%;>Nama</td>
		<td width:20%;>NIP/NIk</td>
		<td>Department</td>
		<td>Tanggal</td>
		<td>Check In</t>
		<td>Check Out</td>
		</tr>
		</thead>
		<tbody>'; 
		$no=1;
		foreach($sql->result() as $key){
			echo '<tr>
			<td>'.$no++.'</td>
			<td>'.$key->USERID.'</td>
			<td>'.$key->Name.'</td>
			<td>'.$key->SSN.'</td>
			<td>'; 
			$dept=$this->db->query('
				select b."DEPTID",b."DEPTNAME" from public."USERINFO" a inner join public."DEPARTMENTS" b
				on a."DEFAULTDEPTID"=b."DEPTID" where a."USERID"='."'$key->USERID'".'  group by b."DEPTID",b."DEPTNAME" 
				'); 
			if($dept->num_rows()>0){
				echo $dept->row()->DEPTNAME; 
			}else{
				echo ''; 
			}
			echo '</td>
			<td>'.viewtglweb($key->checktime).'</td>
			<td>';
			echo '</td> 
			<td></td>
			'; 
		} 
		echo '</tbody>
		</table>
		</div>'; 
}
// form izin pegawai 
function formizinpeg(){
	$bln=$this->input->post('bln'); 
	$thn=$this->input->post('thn'); 
	$sql=$this->m_att->getizinpeg($bln,$thn); 
echo '<div class="box-body table-responsive">
		<table id="example4" class="table table-bordered table-striped">
			<thead>
			<tr>
		<td>No.</td>
		<td width:10%;>ID Pegawai</td>
		<td width:20%;>Nama</td>
		<td width:20%;>NIP/NIk</td>
		<td>Department</td>
		<td>Tanggal Mulai</td>
		<td>Tanggal Akhir</td>
		<td>Alasan</td>
		</tr>
		</thead>
		<tbody>'; 
		$no=1; 
		foreach ($sql->result() as $row){
			echo '<tr>
			<td>'.$no++.'</td>
			<td>'.$row->USERID.'</td>
			<td>'.$row->Name.'</td>
			<td>'.$row->SSN.'</td>
			<td>'.$row->DEPTNAME.'</td>
			<td>'.viewtglweb($row->startspecday).'</td>
			<td>'.viewtglweb($row->endspecday).'</td>
			<td>'.$row->alasan.'</td>
			'; 
		}
		echo '</tr></tbody>
		</table>
		</div>'; 
}
// form sakit pegawai 
function formsakitpeg(){
	$bln=$this->input->post('bln'); 
	$thn=$this->input->post('thn'); 
	$sql=$this->m_att->getsakitpegawai($bln,$thn); 
echo '<div class="box-body table-responsive">
		<table id="example5" class="table table-bordered table-striped">
			<thead>
			<tr>
		<td>No.</td>
		<td width:10%;>ID Pegawai</td>
		<td width:20%;>Nama</td>
		<td width:20%;>NIP/NIk</td>
		<td>Department</td>
		<td>Tanggal Mulai</td>
		<td>Tanggal Akhir</td>
		<td>Alasan</td>
		</tr>
		</thead>
		<tbody>'; 
		$no=1; 
		foreach ($sql->result() as $row){
			echo '<tr>
			<td>'.$no++.'</td>
			<td>'.$row->USERID.'</td>
			<td>'.$row->Name.'</td>
			<td>'.$row->SSN.'</td>
			<td>'.$row->DEPTNAME.'</td>
			<td>'.viewtglweb($row->startspecday).'</td>
			<td>'.viewtglweb($row->endspecday).'</td>
			<td>'.$row->alasan.'</td>
			'; 
		}
		echo '</tr></tbody>
		</table>
		</div>'; 
}

function getalphapeg(){
	$bln=$this->input->post('bln'); 
	$thn=$this->input->post('thn'); 
	$sql=$this->m_att->getalphapeg($bln,$thn);
	$no=1; 
	echo '<div class="box-body table-responsive">
		<table id="example6" class="table table-bordered table-striped">
		<thead>
		<tr>
		<td>No.</td>
		<td width:10%;>NIP/NIK</td>
		<td width:20%;>Nama</td>
		<td>Department</td>
		</tr>
		</thead>
		<tbody>'; 
		foreach($sql->result() as $row){
			echo '<tr>
			<td>'.$no++.'</td> 
			<td>'.$row->SSN.'</td>
			<td>'.$row->fusername.'</td>
			<td>'; 
			$sql2=$this->m_att->getalldept($row->DEFAULTDEPTID); 
			if($sql2->num_rows()>0){
				echo $sql2->row()->DEPTNAME; 
			}else{
				echo ''; 
			}
			echo '</td>
			'; 	
		}
		echo '</tr></tbody>
		</table>
		</div>'; 
}


	function getsakit(){
		$arr=array(); 
		$sql=$this->m_att->getsakit('2016'); 
		foreach ($sql->result() as $row){
			$arr[]=$row; 
		}
		echo json_encode($arr); 
	}

	function getmachine(){
		$arr=array();
		$sql=$this->m_att->getmachine();
		foreach ($sql->result() as $row){
			$arr[]=$row;
		}
		echo json_encode($arr);
	}


	//  function mesin
	function mesin(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		$machine = $this->m_att->selectdata(" machines order by id")->result_array();
		$data = array(
				'machine'=>$machine
		);
		$this->load->view('panel/modaleditmesin'); 
		$this->load->view('panel/head',$data);
		$this->load->view('panel/mesin');
		$this->load->view('panel/footer');
		}
	}

	// hapus mesin 
	function hapusmesin(){
		$id=$this->input->post('id'); 
		$nama=$this->session->userdata('nama'); 
		$tgl=date('Y-m-d H:i:s'); 
		$sql=''; 	
		for($i=0;$i<count($id);$i++){
			$id2=explode(';',$id[$i]); 
			$id3=$id2[0]; 
			$sql.=$this->db->delete('machines', array('id'=>$id3)); 
		}
		$arr=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'', 
			'LogTag'=>1, 
			'LogDescr'=>'hapus Mesin'
			);
		if($sql){
			echo '1'; // sukses berhasil dihapus
			$this->m_att->simpanlog($arr); 
		}else{
			echo '0'; // penghapusan gagal 
		}
	}

	function test(){
		$arr=array();
		$sql=$this->db->query('select * from viewpeg');
		foreach($sql->result() as $row){
			$arr[]=$row;
		}
		echo json_encode($arr);
	}
	// form update mesin 
	function formupdmesin(){
		$id=$this->input->post('id'); 
		$sql=$this->db->get_where('machines',array('id'=>$id)); 
		echo '<section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> <span class="label label-success">Update Mesin</span>
                                    </h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="" enctype="multipart/form-data" method="POST">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Mesin</label>
                                            <input type="hidden" name="kode" id="kode" value="'.$sql->row()->id.'" /> <!--<?=$kode ?>-->
                                             <input type="hidden" name="stat" value="" />
                                            <input type="text" required class="form-control" name="nmmesinup" value="'.trim($sql->row()->machinealias).'"
                                            placeholder="Nama Mesin" id="nmmesinup" />
                                        </div>
                                     <div class="form-group">
                                            <label for="exampleInputEmail1">Mode Komunikasi</label>
                                            <select name="komunikasiup" id="komunikasiup"  class="form-control">'; 
                                            if($sql->row()->connecttype=='1'){
                                            	echo '<option value="'.$sql->row()->connecttype.'">Jaringan</option>
                                            	<option value="0">USB</option>
                                            	'; 
                                            }else if($sql->row()->connecttype=='0'){
                                            	echo '<option value="'.$sql->row()->connecttype.'">USB</option>
                                            	<option value="1">Jaringan</option>
                                            	'; 
                                            }
                                            echo '</select>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">IP Address
                                            <span style="font-size: 10px;">(Ex : xxx.xxx.xxx.xxx)</span></label>
                                            <input type="text" required class="form-control" id="ipupd" name="ipupd" value="'.$sql->row()->ip.'"
                                            placeholder="IP Address" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Password Komunikasi</label>
                                            <input type="password" required class="form-control" id="passkomupd" name="passkomupd" 
                                            value="'.$sql->row()->commpassword.'"
                                            placeholder="Password Komunikasi" />
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Nomor Mesin</label>
                                            <input type="number"  class="form-control" name="nomesinupd" id="nomesinupd"
                                             placeholder="No Mesin" value="'.$sql->row()->machinenumber.'" />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Port</label>
                                            <input type="number" required class="form-control" name="noportupd" id="noportupd"
                                            value="'.$sql->row()->port.'" placeholder="Port" />
                                        </div>


                                    </div>

                                    <div class="box-footer">
                                        <button type="button" id="butsimpmesinupd" class="btn btn-primary">
                                           Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->'; 
	}
	function formeditdept(){
		$kd=$this->input->post('kd'); 
		$sql=$this->db->get_where('DEPARTMENTS',array('DEPTID'=>$kd)); 	
		$kdanak=$sql->row()->SUPDEPTID; 
		$sql3=$this->db->get_where('DEPARTMENTS',array('DEPTID'=>$kdanak)); 
		if($sql3->num_rows()>0){
			$kdpa=$sql3->row()->DEPTID; 
			$nmpa=$sql3->row()->DEPTNAME; 
		}else{
			$kdpa='0'; 
			$nmpa='--No parent--'; 
		}
		echo '<section class="content">
    <div class="row">
    <!-- left column -->
    <div class="col-md-12">
    <!-- general form elements --> 
    <div class="box box-primary"> 
    <div class="box-header">
    <h3 class="box-title"> <span class="label label-success">Update Department</span>
    </h3>
    </div><!-- /.box-header --> 
    <!-- form start -->
    <form role="form" action="javascript:upddepartment();" enctype="multipart/form-data" method="POST">
    <div class="box-body"> 
    <div class="form-group">
    <input type="hidden" value="'.$kd.'"  id="kdupddep" name="kdupddep" />
    <label for="exampleInputEmail1">Department</label>
    <input type="text" value="'.$sql->row()->DEPTNAME.'"  maxlength=40 name="depedit" id="depedit" class="form-control"
    placeholder="Department" />
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">parent</label>
    <select class="form-control" id="parent" name="parent" >
    <option value="'.$kdpa.'">'.$nmpa.'</option>
    <option value=0>--No parent--</option>
    '; 
    $sql2=$this->db->get('DEPARTMENTS'); 
    if($sql2->num_rows()>0){
    	foreach($sql2->result() as $row){
    		echo '<option value="'.$row->DEPTID.'">'.$row->DEPTNAME.'</option>'; 
    	}
    }	
    echo '</select>    </div>
	</div><div class="box-footer">
     <button type="submit" class="btn btn-primary" onClick="" id="upddept">
     Simpan</button>
    </div></form> 
    </div></div>
    </div>   <!-- /.row -->
     </section><!-- /.content -->'; 
	}

	// proses update mesin 
	function updtmesin(){
		$id=$this->input->post('id'); 
		$nama=trim($this->input->post('nama')); 
		$port=$this->input->post('port'); 
		$kom=$this->input->post('kom'); // komunikasi jaringan 
		$ip=$this->input->post('ip'); 
		$pass=$this->input->post('pass'); 
		$nomesin=$this->input->post('nomesin');
		$arr=array(
			'machinealias'=>$nama, 
			'ip'=>$ip, 
			'connecttype'=>$kom, 
			'port'=>$port, 
			'machinenumber'=>$nomesin, 
			'commpassword'=>$pass
			);  

		$sql=$this->db->update('machines',$arr,array('id'=>$id)); 
		if($sql){
			echo '1'; // jika berhasil melakukan update 
		}else{
			echo '0'; // Gagal melakukan update
		}
	}

	// proses koneksikan ke alat finger print 
	function koneksikealat(){
		$ip=trim($this->input->post('ip'));
		$key=$this->input->post('key'); 
		for($i=1;$i<count($ip);$i++){
			$ip1=explode(';',$ip[$i]); 
			$ip2=$ip1[0]; 
		} 
	}

	// karyawan
	function karyawan(){
		$sql=$this->db->query('select * from viewpeg')->result_array();
		$arr=array(
				'sql'=>$sql
		);
		$this->load->view('panel/modalshowpoto'); // show photo 
		$this->load->view('panel/modaltbhuppeg');  // form update pegawai
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/karyawan');
		$this->load->view('panel/footer');
	}
	// get photo pegawai / karyawan 
	function getphoto(){
		$id=$this->input->post('id'); 
		$sql=$this->db->get_where('USERINFO',array('USERID'=>$id)); 
		if(!empty($sql->row()->PHOTO)){
			echo '<img src="'.base_url().'file/foto/'.$sql->row()->PHOTO.'" alt="'.$sql->row()->PHOTO.'" class="img-circle" width="390px" height="390px">'; 
		}else{
			echo '<img src="'.base_url().'file/no_photo.jpg" alt="no photo" class="img-circle" width="390px" height="390px">';
		}
	}

	// proses update data pegawai 
	function upddtpeg(){
			$akses=isLogin(); 
			if(empty($akses['nik'])){
				redirect('index.php/login/logout','location'); 
			}else{
			date_default_timezone_set('Asia/Jakarta'); 
			$tgllog=date('Y-m-d H:i:s'); 
			$namalog=$this->session->userdata('nama'); 

			$arr12=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$namalog, 
			'Logtime'=>$tgllog, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Update data pegawai'
			); 

			$iduser=$this->input->post('iduser'); 
			$badge=$this->input->post('noidupd'); // badge number 

			$nip=trim($this->input->post('nikupd')); 
			$nama=trim($this->input->post('namaupdpeg')); 
			$pangkat=$this->input->post('pangupdpeg'); 
			$jabatan=$this->input->post('jabupdpeg'); 
			$jk=$this->input->post('jkbaru'); 
			$tglahir=tglinsertdata($this->input->post('tglahirupd')); 
			$pendbaru=$this->input->post('pendbaruupd'); 
			$tglmskpeg=tglinsertdata($this->input->post('tglmskpegupd')); 
			$nopepeg=$this->input->post('nopepegupd'); 
			$npwp=$this->input->post('npwpupd'); 
			$stspeg=$this->input->post('stspeg'); 
			$stspegdb=$this->input->post('stspegupd'); 
			$alamat=$this->input->post('alamatupd'); 
			$dept=$this->input->post('deptupd'); 
			//$foto=$this->input->post('fotopegupd'); 

			if(!empty($_FILES['fotopegupd234']['name'])){
            $acak=rand(00000000000,99999999999);
            $bersih=$_FILES['fotopegupd234']['name'];
            $nm=str_replace(" ","_","$bersih");
            $pisah=explode(".",$nm);
            $nama_murni_lama = preg_replace("/^(.+?);.*$/", "\\1",$pisah[0]);
            $nama_murni=date('Ymd-His');
            $ekstensi_kotor = $pisah[1];

            $file_type = preg_replace("/^(.+?);.*$/", "\\1", $ekstensi_kotor);
            $file_type_baru = strtolower($file_type);

            $ubah=$acak.'-'.$nama_murni; //tanpa ekstensi
            $n_baru = $ubah.'.'.$file_type_baru;

            $path="./file/foto/";
            //chmod($path, 777); 
            $config['upload_path']  = $path;
            $config['allowed_types']= 'gif|jpg|png|jpeg|bmp';
            $config['file_name'] = $n_baru;
            $config['remove_spaces']= true;
            $config['max_size']     = '50000';
            $config['max_width']    = '10000';
            $config['max_height']   = '10000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 

            if($this->upload->do_upload('fotopegupd234')){
                $data = $this->upload->data();
                $source             = './file/foto/'.$data['file_name'] ;
                $destination_thumb  = './file/foto/' ;
                $destination_medium = './file/foto/' ;
                chmod($source, 0777) ;

                $poto=$data['file_name']; 

                $arr=array(
                    'SSN'=>$nip, 
                    'Name'=>$nama, 
                    'DEFAULTDEPTID'=>$dept, 
                    'PHOTO'=>$poto, 
                    'BIRTHDAY'=>$tglahir, 
                    'Gender'=>$jk, 
                    'HIREDDAY'=>$tglmskpeg, 
                    'OPHONE'=>$nopepeg, 
                    'INLATE'=>'0', 
                    'OUTEARLY'=>'0',
                    'ATT'=>'1', 
                    'street'=>$alamat, 
                    'OVERTIME'=>'1', 
                    'SEP'=>'1', 
                    'HOLIDAY'=>'1', 
                    'LUNCHDURATION'=>'1', 
                    'privilege'=>$stspeg, 
                    'JABATAN'=>$jabatan, 
                    'IDPANGKAT'=>$pangkat, 
                    'STTSKEPE'=>$stspegdb, 
                    'IDPENDIDIKAN'=>$pendbaru, 
                    'npwp'=>$npwp
                	); 
                	$sql=$this->db->update('USERINFO',$arr,array('USERID'=>$iduser,'Badgenumber'=>$badge)); 
                	if($sql){
                		 echo '<script type="text/javascript"> showalert(); </script>';
                		redirect('index.php/panel/karyawan','Location'); 
                		$this->m_att->simpanlog($arr12); 
                	}
            }

        }else{
        	    $arr=array(
                    'SSN'=>$nip, 
                    'Name'=>$nama, 
                    'DEFAULTDEPTID'=>$dept, 
                   // 'PHOTO'=>$poto, 
                    'BIRTHDAY'=>$tglahir, 
                    'Gender'=>$jk, 
                    'HIREDDAY'=>$tglmskpeg, 
                    'OPHONE'=>$nopepeg, 
                    'INLATE'=>'0', 
                    'OUTEARLY'=>'0',
                    'ATT'=>'1', 
                    'street'=>$alamat, 
                    'OVERTIME'=>'1', 
                    'SEP'=>'1', 
                    'HOLIDAY'=>'1', 
                    'LUNCHDURATION'=>'1', 
                    'privilege'=>$stspeg, 
                    'JABATAN'=>$jabatan, 
                    'IDPANGKAT'=>$pangkat, 
                    'STTSKEPE'=>$stspegdb, 
                    'IDPENDIDIKAN'=>$pendbaru,
                    'npwp'=>$npwp
                	); 
                	$sql=$this->db->update('USERINFO',$arr,array('USERID'=>$iduser,'Badgenumber'=>$badge));
                	if($sql){
                		 echo '<script type="text/javascript"> showalert(); </script>';
                		redirect('index.php/panel/karyawan','location'); 
                		$this->m_att->simpanlog($arr12); 
                	}
        		}
        	}
	}

	// form update pegawai karyawan 
	function formupdatepeg(){
		$iduser=trim($this->input->post('iduser')); 
		$sql=$this->db->get_where("USERINFO",array("USERID"=>$iduser)); 
		foreach($sql->result() as $row){
		if(empty($row->PHOTO)){
			$photo1=base_url()."file/no_photo.jpg"; 
		}else{
			$photo1=base_url()."file/foto/".$row->PHOTO; 
		}
		if(empty($row->BIRTHDAY)){
			$BIRTHDAY1=date('Y-m-d'); 
		}else{
			$BIRTHDAY1=$row->BIRTHDAY; 
		}
		if(empty($row->HIREDDAY)){
			$HIREDDAY=date('Y-m-d'); 
		}else{
			$HIREDDAY=$row->HIREDDAY; 
		}
			echo '
			<input type="hidden" id="iduser" name="iduser" value="'.$iduser.'"></input>
			<div class="form-group" style="margin-bottom: 0px; display: none;">
        	<label for="exampleinputemail">No ID</label>
        	<input type="number" value="'.$row->Badgenumber.'" name="noidupd" id="noidupd" class="form-control">
        	</input>
        	</div>

        	<div class="box box-primary" >
        			<div  style="float: left; width: 46%;">
        		<div class="form-group" style="margin-bottom: 0px;">
        		<label for="exampleInputEmail">Nama</label>
        		<input type="text" class="form-control" placeholder="Nama" value="'.$row->Name.'" id="namaupdpeg" name="namaupdpeg">
        		</input>
        		</div>

                <div class="form-group" style="margin-bottom: 0px;">
        		<label for="exampleInputEmail1">NIP/NIK</label>
        		<input type="text" value="'.$row->SSN.'" name="nikupd" required id="nikupd" class="form-control" 
        		placeholder="NIK" />
        		</div>
        		<div class="form-group" style="margin-bottom: 0px;">
        		<label for="exampleInputEmail1">NPWP</label>
        		<input type="text" value="'.$row->npwp.'" name="npwpupd" id="npwpupd" class="form-control" 
        		placeholder="NPWP" />
        		</div>

        		<div class="form-group" style="margin-bottom: 0px;">
        		<label for="exampleInputEmail1">Departments</label>
        		<select name="deptupd" id="deptupd" class="form-control" required>';
                   $sql3=$this->db->get('DEPARTMENTS'); 
                   foreach($sql3->result_array() as $row9){
                   echo '<option value='.$row9['DEPTID'].'>'.$row9['DEPTNAME'].'</option>'; 
                   }
                                         
        		echo '</select>
        		</div>

                	<div class="form-group" style="margin-bottom: 0px;">
        			<label for="exampleInputEmail1">Pangkat/Golongan</label>
        			<select class="form-control" name="pangupdpeg" id="pangupdpeg" >';
        			$sqlgol=$this->db->get_where('golonganmaster',array('aktif'=>1,'kd_golongan'=>$row->IDPANGKAT)); 
        			if($sqlgol->num_rows()>0){
        				echo '<option value="'.$sqlgol->row()->kd_golongan.'">'.$sqlgol->row()->golongan.'</option>'; 
        			}else{
        				echo '<option value="">--Pilih--</option>'; 
        			}	

                    $sql4=$this->db->get_where('golonganmaster',array('aktif'=>1))->result_array(); 
                     foreach($sql4 as $key){
                     echo '<option value='.$key['kd_golongan'].'>'.$key['golongan'].'</option>'; 
                 	}
                                        
                    echo '</select>
        			</div>
        			<div class="form-group" style="margin-bottom: 0px;">
        		<label for="exampleInputEmail1">Jabatan</label>
        		<select required class="form-control" name="jabupdpeg" id="jabupdpeg">
                                        <option value="'.$row->JABATAN.'" >'.$row->JABATAN.'</option>
                                        <option value="E.I/a">E.I/a</option>
                                        <option value="E.I/b">E.I/b</option>
                                        <option value="E.II/a">E.II/a</option>
                                        <option value="E.II/b">E.II/b</option>
                                        <option value="E.III/a">E.III/a</option>
                                        <option value="E.III/b">E.III/b</option>
                                        <option value="E.IV/a">E.IV/a</option>
                                        <option value="E.IV/b">E.IV/b</option>
                                        <option value="E.V/a">E.V/a</option>
                                        <option value="Staff">Staff</option>
                                    </select>
        			<!--<input type="text" value="'.$row->JABATAN.'" name="jabupdpeg" id="jabupdpeg" class="form-control" 
        		placeholder="Jabatan" />-->
        </div>
            <div class="form-group" style="margin-bottom: 0px;">
            <label for="exampleinputemail">Jenis Kelamin</label>
            <select name="jkbaru" id="jkbaru" class="form-control" required>
            <option value="'.$row->Gender.'">'.$row->Gender.'</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
            </select>
            </div>

           <div class="form-group" style="margin-bottom: 0px; cursor:pointer; ">
           <label for="exampleInputEmail">Tgl Lahir (dd-mm-yyyy) </label>
           <input type="text" class="form-control" style="cursor:pointer;" value="'.viewtglweb($BIRTHDAY1).'" id="tglahirupd"  name="tglahirupd"></input>
           </div>
           <!-- department 
           <div class="form-group" style="margin-bottom: 0px; ">
           <label for="exampleInputEmail">Departments </label>
           <select name="departupd" id="departupd" class="form-control" required>'; 
           $dep1=$this->db->get_where("DEPARTMENTS",array('DEPTID'=>$row->DEFAULTDEPTID)); 
           if($dep1->num_rows()>0){
           echo '<option value="'.$dep1->row()->DEPTID.'">'.$dep1->row()->DEPTNAME.'</option>'; 
   			}else{
   				echo '<option value="">--Pilih--</option>'; 
   			}
           	$dep=$this->db->get_where("DEPARTMENTS"); 
           	foreach($dep->result() as $dep1){
           		echo '<option value="'.$dep1->DEPTID.'">'.$dep1->DEPTNAME.'</option>'; 
           	}
           echo '</select>
           </div>-->

                <div class="form-group" style="margin-bottom: 0px;">
        		<label for="exampleInputEmail">Pendidikan</label>
        <select class="form-control" id="pendbaruupd" name="pendbaruupd" required>'; 
        $sqk=$this->db->get_where('PENDIDIKAN',array('IDPENDIDIKAN'=>$row->IDPENDIDIKAN)); 
        if($sqk->num_rows()>0){
        	echo '<option value="'.$sqk->row()->IDPENDIDIKAN.'">'.$sqk->row()->NAMAPEND.'</option>'; 
        }else{
        	echo '<option value="">--Pilih--</option>'; 
        }
      		$sqlp=$this->db->get("PENDIDIKAN"); 
      		foreach($sqlp->result() as $key){
      			echo '<option value="'.$key->IDPENDIDIKAN.'">'.$key->NAMAPEND.'</option>'; 
      		}
       echo '</select>
       </div>

           </div>                     

		<!--float right--> 
        <div  style="float:right; width: 46%;">

       <div class="form-group" style="margin-bottom: 0px;">
        <label for="exampleinputEmail">Foto</label>
        <input type="hidden" id="fotopegupd1" name="fotopegupd1" value="'.$row->PHOTO.'" />
        <input type="file" class="form-control" id="fotopegupd234" value="" name="fotopegupd234" accept="image/*"></input>
        <img src="'.$photo1.'" style="width:64%;height:20%;"  />
        </div>
        <div class="form-group" style="margin-bottom: 0px;">
        <label for="exampleinputemail">Tgl Masuk (dd-mm-yyyy) </label>
        <input type="text" value="'.viewtglweb($HIREDDAY).'" id="tglmskpegupd" class="form-control" name="tglmskpegupd"></input>
        </div>
        <div class="form-group" style="margin-bottom: 0px;">
        <label for="exampleinputemail">No Telp/Hp</label>
        <input type="number" class="form-control" id="nopepegupd" value="'.$row->OPHONE.'" name="nopepegupd" maxlength="16"></input>
        </div>
        <div class="form-group" style="margin-bottom: 0px">
        <label for="exampleinputemail">Status</label>
        <select class="form-control" id="stspeg" name="stspeg">
            <option value="0">User</option>
            <option value="-1">Invalid</option>
            <option value="1">Enroller</option>
            <option value="2">Manager</option>
            <option value="3">Supervisor</option>
        </select>
          </div>
           <div class="form-group" style="margin-bottom: 0px">
           <label for="exampleinputemail">Status Pegawai</label>
           <select name="stspegupd" id="stspegupd" class="form-control" required>'; 
           $sts=$this->db->get_where('STTS_PEGAWAI',array('ID'=>$row->STTSKEPE)); 
        	if($sts->num_rows()>0){
        		echo '<option value="'.$sts->row()->ID.'">'.$sts->row()->NAMA_STTS.'</option>'; 
        	}else{
        		echo '<option value="">--Pilih--</option>'; 
        	}
           $sql5=$this->db->get('STTS_PEGAWAI')->result_array();
            foreach($sql5 as $row2){ 
             	echo '<option value='.$row2['ID'].'>'.$row2['NAMA_STTS'].'</option>'; 
            }
           echo '
           </select>
           </div>

          <div class="form-group" style="margin-bottom: 0px;">
          <label for="exampleInputEmail">Alamat</label>
          <input type="text" class="form-control" name="alamatupd" value="'.$row->street.'" 
          id="alamatupd" placeholder="Alamat"></input>
          </div>                                    

        </div>
        </div>

        
			'; 
		}
	}



	// pengaturan
	function jamkerja(){
		$sql=$this->db->query('SELECT "A"."SCHCLASSID","A"."SCHNAME","time" ("A"."STARTTIME") as jammasuk,
			"time"("A"."ENDTIME") as jampulang, "time"("A"."CHECKINTIME1") as mulaicin,
			"time"("A"."CHECKINTIME2") as akhircin, "time"("A"."CHECKOUTTIME1") as mulaicout,
			"time"("A"."CHECKOUTTIME2") as akhitcout, "A"."WorkDay" as hrkerja,
			"A"."LATEMINUTES",
		"A"."EARLYMINUTES","A"."CHECKIN","A"."CHECKOUT", 
			"A"."COLOR" as warna
			FROM public."SCHCLASS" "A"')->result_array();
		$arr=array(
				'sql'=>$sql
		);
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/jamkerja');
		$this->load->view('panel/footer');
	}
	// refresh jam kerja 
	function jamkerjaref(){
		$sql=$this->db->query('SELECT "A"."SCHCLASSID","A"."SCHNAME","time" ("A"."STARTTIME") as jammasuk,
			"time"("A"."ENDTIME") as jampulang, "time"("A"."CHECKINTIME1") as mulaicin,
			"time"("A"."CHECKINTIME2") as akhircin, "time"("A"."CHECKOUTTIME1") as mulaicout,
			"time"("A"."CHECKOUTTIME2") as akhitcout, "A"."WorkDay" as hrkerja,
			"A"."LATEMINUTES",
		"A"."EARLYMINUTES","A"."CHECKIN","A"."CHECKOUT", 
			"A"."COLOR" as warna
		FROM public."SCHCLASS" "A"'); 
		if($sql->num_rows()>0){
			echo '<tr>'; 
			$no=1; 
		foreach($sql->result() as $row){
			echo '
			<td><input type="checkbox" name="chkjamkerja" id="chkjamkerja" class="chkjamkerja"
            value='.$row->SCHCLASSID.' ></input>
            </td><td>'.$no++.'</td>
			<td>'.$row->SCHNAME.'</td>
			<td>'.$row->jammasuk.'</td>
			<td>'.$row->jampulang.'</td>
			<td>'.$row->mulaicin.'</td>
			<td>'.$row->akhircin.'</td>
			<td>'.$row->mulaicout.'</td>
			<td>'.$row->akhitcout.'</td>
			<td>
				<button class="btn btn-primary" id="butjamkerjaedit1"
             value='.$row->SCHCLASSID.'|'.$row->SCHNAME.'|'.$row->jammasuk.'|'.
                $row->jampulang.'|'.$row->LATEMINUTES.'|'.$row->EARLYMINUTES.'|'.$row->mulaicin 
                .'|'.$row->akhircin.'|'.$row->mulaicout.'|'.$row->akhitcout.'|'.$row->CHECKIN
                .'|'.$row->CHECKOUT.'>Edit</button>
			</td>
			</tr>
			'; 
		}
	}else{
		echo '<td colspan="7">--Data Kosong--</td>'; 
	}
	}

	function jamkerja1(){
		$sql=$this->db->query('SELECT "A"."SCHCLASSID","A"."SCHNAME","time" ("A"."STARTTIME") as jammasuk,
		"time"("A"."ENDTIME") as jampulang, "time"("A"."CHECKINTIME1") as mulaicin,
		"time"("A"."CHECKINTIME2") as akhircin, "time"("A"."CHECKOUTTIME1") as mulaicout,
		"time"("A"."CHECKOUTTIME2") as akhitcout, "A"."WorkDay" as hrkerja,"A"."LATEMINUTES",
		"A"."EARLYMINUTES","A"."CHECKIN","A"."CHECKOUT", 
		"A"."COLOR" as warna
		FROM public."SCHCLASS" "A"');
		echo ''; 
            foreach ($sql->result() as $arr){
            $no=1; 
            echo '<tr>
            <td><input type="checkbox" name="chkjamkerja" id="chkjamkerja"
            value="'.$arr->SCHCLASSID.'"></input></td>
            <td>'.$no++.'</td>
            <td>'.$arr->SCHNAME.'</td>
            <td>'.$arr->jammasuk.'</td>
            <td>'.$arr->jampulang.'</td>
            <td>'.$arr->mulaicin.'</td>
            <td>'.$arr->akhircin.'</td>
            <td>'.$arr->mulaicout.'</td>
            <td>'.$arr->akhitcout.'</td>
            <td><button class="btn btn-primary" id="butjamkerjaedit"
            value="'.$arr->SCHCLASSID.'">Edit</button></td>'; 
            }
            echo '</tr>
            '; 
	}
	// pengaturan shift
	function shift(){
		$sql=$this->db->query('select * from public."NUM_RUN" ORDER by "NAME" asc ')->result_array();
	//	$tgl=viewtglweb();
		$arr=array(
				'sql'=>$sql
		);
		$this->load->view('panel/modalplusshift'); 
		$this->load->view('panel/modaltbhuptshift'); 
		$this->load->view('panel/modaltbhdftshift'); 
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/shift');
		$this->load->view('panel/footer');
	}
	// hapus shift 
	function hpsshift(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		$arr=array(); 
		$sql=''; 
		$kd=$this->input->post('kd');
		//$kd1=explode('|',$kd); 
		//$sql2=$this->db->get_where('USER_OF_RUN',array('NUM_OF_RUN_ID'=>$kd1)); 
		for($i=0;$i<count($kd);$i++){
			$kd2=explode('|', $kd[$i]); 
			$kd3=$kd2[0]; 
			$sql.=$this->db->query('delete from public."NUM_RUN" A where A."NUM_RUNID"='."'$kd3'".''); 
			}	
		if($sql){
			echo '1'; // berhasil dihapus
		}else{
			echo '0'; // penghapusan gagal
		}
		}
	}
	// load refresh grid shift
	function loadgridshift(){
		$sql=$this->db->get('NUM_RUN'); 
		$no=1;
		foreach($sql->result() as $row){ 
			echo '<tr>
                  <td class="idshift" id="idshift"><input type="checkbox" id="chkshift" class="chkshift" name="chkshift"  
                  value="'.$row->NUM_RUNID.'|'.$row->UNITS.'"></input></td>
                  <td>'.$no++.'</td>
                  <td>'.$row->NAME.'</td>
                  <td>'.viewtglweb($row->STARTDATE).'</td>
                  <td>'.$row->CYLE.'</td>
                  <td>'; 
                  if($row->UNITS=='2'){
                  	echo 'Bulan'; 
                  }else if($row->UNITS=='1'){
                  	echo 'Minggu'; 
                  } else if($row->UNITS=='0'){
                  	echo 'Hari'; 
                  }
                  echo '</td>
                   <td><button type="button"  class="btn btn-primary" 
                   value="'.$row->NUM_RUNID.'|'.$row->NAME.'|'.$row->UNITS.'" id="editbutshift21">Edit</button></td>
                  '; 
		}
		echo '</tr>'; 
	}
	// cek penghapusan jam kerja 
	function cekjamkerja(){
		$scclass=$this->input->post('schclass');
		$sql=''; 
		for($i=1; $i<count($scclass);$i++){
			$kd1=explode(';',$scclass[$i]); 
			$kd2=$kd1[0];
			$sql.=$this->db->get_where("USER_TEMP_SCH",array('SCHCLASSID'=>$scclass));  
		} 
		if($sql->num_rows()>0) {
			echo '1'; // jika ada data 
		}else{
			echo '0'; // jika tidak ada data 
		}
	}

	// hapus jam kerja 
	function hapusjamkerja(){
		$idrun=$this->input->post('idrun'); 
		$sql1=$this->db->get_where("NUM_RUN",array("NUM_RUNID"=>$idrun)); 
		$kd=$this->input->post('kd'); 
		$sql=''; 
		for($i=1;$i<count($kd);$i++){
			$kd1=explode(';',$kd[$i]); 
			$kd2=$kd1[0]; 
			$sql.=$this->db->delete("SCHCLASS",array('SCHCLASSID'=>$kd2)); 
		}
		if($sql){
			echo '1'; // berhasil menghapus
		}else{
			echo '0'; // gagal melakukan penghapusan 
		}
	}
	// hapus jadwal pegawai 
	function hpsjdwal(){
		$kd=$this->input->post('kd'); 
		for($i=1;$i<count($kd);$i++){
			$kd1=explode(';',$kd[$i]); 
			$kd2=$kd1[0]; 
			$sql=$this->db->delete(); 
		}
		if($sql){
			echo '1'; 
		}else{
			echo '0'; 
		}
	}

	//get array for table shift  
	function getarrayshift(){
		$kd=$this->input->post("kd");
		$arr=array(); 
		$arrb=array();
		$kd2=explode('|', $kd); 
		foreach($kd2 as $row){
			$arrb[]=$row; 
		} 
		if($arrb[1]=='1'){
		//$i=1; 
		for($i=1;$i<=7;$i++){
			$arr[]=$i.' Hari'; 
		}
		echo '<table id="example1" class="table table-bordered table-striped" style="font-size: 10px;">
                       <thead>
                         <tr>
                           <td style="width: 10%;">&nbsp;</td>
                           <td>&nbsp;</td>
                         </tr>
                       </thead>
                       <tbody id="tbodyjamkerja12">
                       <tr>
                       <td><input type="checkbox" id="chkjamkerjaall" name="chkjamkerjaall" class="chkjamkerjaall" />
                       </td>
                       <td>&nbsp;</td></tr>'; 
		foreach ($arr as $row){
			//echo json_encode($row); 
			echo '<tr>
                    <td><input type="checkbox" id="chkjamkerja12" class="chkjamkerja12" name="chkjamkerja12" checked
                    value="'.$row[0].$row[1].'" ></input>
                    </td>
                    <td>'; 
                    if($row[0]=='1'){
                    	echo 'Senin'; 
                    }else if($row[0]=='2'){
                    	echo 'Selasa'; 
                    }else if($row[0]=='3'){
                    	echo 'Rabu'; 
                    }else if($row[0]=='4'){
                    	echo 'Kamis'; 
                    }else if($row[0]=='5'){
                    	echo 'Jumat'; 
                    }else if($row[0]=='6'){
                    	echo 'Sabtu'; 
                    }else if($row[0]=='7'){
                    	echo 'Minggu'; 
                    }
                    echo '</td>'; 
		}
		echo '</tr></tbody>
        </table>'; 
		}else if($arrb[1]=='2'){
			for($i=1;$i<=31;$i++){
			$arr[]=$i.' Hari'; 
			}
					echo '<table id="example1" class="table table-bordered table-striped" style="font-size: 10px;">
                       <thead>
                         <tr>
                           <td style="width: 10%;">&nbsp;</td>
                           <td>&nbsp;</td>
                         </tr>
                       </thead>
                       <tbody id="tbodyjamkerja12">
                       <tr>
                       <td><input type="checkbox" id="chkjamkerjaall" name="chkjamkerjaall" class="chkjamkerjaall" />
                       </td>
                       <td>&nbsp;</td></tr>'; 
		foreach ($arr as $row){
			//echo json_encode($row); 
			echo '<tr>
                    <td><input type="checkbox" id="chkjamkerja12" class="chkjamkerja12" name="chkjamkerja12" checked
                    value="'.$row[0].$row[1].'" ></input>
                    </td>
                    <td>'.$row.'</td>'; 
		}
		echo '</tr></tbody>
        </table>'; 
		}
	}
	// Simpan periode shift 
	function simpanshift(){
		$arr=array(); 
		$id=$this->input->post('id'); 
		$tgl=$this->input->post('tgl'); 
		$idjam=$this->input->post('idjam'); 
		$kdshift1=$this->input->post('kdshift1'); 
		$kdshift2=$this->input->post('kdshift2'); 
		$sql=''; 
		for($p=0;$p<count($tgl);$p++){
			$tgl1=explode(',', $tgl[$p]); 
			$tgl2=$tgl1[0]; 
		}
		$sqlt=$this->db->get_where('NUM_RUN_DEIL',array('NUM_RUNID'=>$tgl)); 
		if($sqlt->num_rows()>0){
			$this->db->delete('NUM_RUN_DEIL',array('NUM_RUNID'=>$tgl)); 
		}else{

		$sql1=$this->db->query('select a."SCHCLASSID",a."SCHNAME", (extract(hour from a."STARTTIME"
        ) || '."':'".' || extract(minute from a."STARTTIME"
        )) as STARTTIME,(extract(hour from a."ENDTIME"
        ) || '."':'".' || extract(minute from a."ENDTIME"
        )) as ENDTIME FROM public."SCHCLASS" a where a."SCHCLASSID"='."'1'".''); 
        $sch=$sql1->row()->SCHCLASSID; 
        $str='1900-01-01'.' '.$sql1->row()->starttime; 
        $etime='1900-01-01'.' '.$sql1->row()->endtime; 
		for($i=0;$i<count($id);$i++){
			$id1=explode(',', $id[$i]); 
			$id2=$id1[0]; 
			$abc=array(
				'NUM_RUNID'=>$tgl, 
				'STARTTIME'=>$kdshift1, 
				'ENDTIME'=>$kdshift2, 
				'SDAYS'=>$id2, 
				'edays'=>$id2, 
				'schclassid'=>'1', 
				'overtime'=>'0'	
				); 
			$sql.=$this->db->insert('NUM_RUN_DEIL',$abc); 
		}
	}
		if($sql){
			echo '1'; // jika berhasil melakukan penyimpanan 
		}else{
			echo '0'; // Jika gagal melakukan penyimpanan 
		}
	}

	function simpansingleshift(){
		$tgl=$this->input->post('tgl'); 
		$kdshift1=$this->input->post('kdshift1'); 
		$kdshift2=$this->input->post('kdshift2'); 
		$id2=$this->input->post('id'); 
		$abc=array(
				'NUM_RUNID'=>$tgl, 
				'STARTTIME'=>$kdshift1, 
				'ENDTIME'=>$kdshift2, 
				'SDAYS'=>$id2, 
				'edays'=>$id2, 
				'schclassid'=>'1', 
				'overtime'=>'0'	
				); 
		$sql=$this->db->insert('NUM_RUN_DEIL',$abc); 
	}

	function getjson(){
		$arr1=['senin','Selasa'];
		$arr=array(
			'1'=>'Senin', 
			'2'=>'Selasa', 
			'3'=>'Rabu', 
			'4'=>'Kamis', 
			'5'=>'Jumat', 
			'6'=>'Sabtu', 
			'7'=>'Minggu'
			); 
		echo json_encode($arr); 
	}
	// set graf jam 
	function getgrafshift(){

	}

	// get jaga shift to array 
	function getarrayjaga(){
		//$arr=[{"Senin","Selasa"); 
		$kd=trim($this->input->post('kd')); 
		$units=$this->input->post('units'); 
		// note 1=minggu, 2=bulan 
		$sql=$this->db->query('select * from public."NUM_RUN_DEIL" a where a."NUM_RUNID"='."'$kd'".' order by a."SDAYS"');// a."NUM_RUNID"='."'$kd2'".''); 
		$arr1=['senin','Selasa'];
		$arr=array(
			'senin'=>'1Senin', 
			'selasa'=>'2Selasa', 
			'rabu'=>'3Rabu', 
			'kami'=>'4Kamis', 
			'jumat'=>'5Jumat', 
			'sabtu'=>'6Sabtu', 
			'minggu'=>'7Minggu'
			); 
		echo '<tr style="border-style:none;border-width:0px;">'; 
		if($units=='1'){

		if($sql->num_rows()>0){
		foreach($sql->result() as $row){
			$jam1=substr(getjamweb($row->STARTTIME),0,2); 
			$jam2=substr(getjamweb($row->ENDTIME),0,2);

		echo '<td style="border:none;"><input type="checkbox" id="chkshiftjd" class="chkshiftjd" 
		name="chkshiftjd" value="'.$row->NUM_RUNID.'|'.$row->SDAYS.'"></input></td>
              <td>'; 
              if($row->SDAYS=='1'){
              	echo 'Senin'; 
              }elseif($row->SDAYS=='2'){
              	echo 'Selasa'; 
              }elseif($row->SDAYS=='3'){
              	echo 'Rabu'; 
              }elseif($row->SDAYS=='4'){
              	echo 'Kamis'; 
              }elseif($row->SDAYS=='5'){
              	echo 'Jumat'; 
              }elseif($row->SDAYS=='6'){
              	echo 'Sabtu'; 
              }elseif($row->SDAYS=='7'){
              	echo 'Minggu'; 
              }
              echo '</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td '.$this->tesjam($jam1,$jam2,8). '></td>
              <td '.$this->tesjam($jam1,$jam2,9).'></td>
             <td '.$this->tesjam($jam1,$jam2,10).'></td>
              <td '.$this->tesjam($jam1,$jam2,11).'></td>
              <td '.$this->tesjam($jam1,$jam2,12).'></td>
              <td '.$this->tesjam($jam1,$jam2,13).'></td>
              <td '.$this->tesjam($jam1,$jam2,14).'></td>
              <td '.$this->tesjam($jam1,$jam2,15).'></td>
              <td '.$this->tesjam($jam1,$jam2,16).'></td>
              <td></td>
              <td></td>
              <td></td>
			  <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              </tr>'; 
            }
        }else{
        	echo '<td colspan="28"><h5><span class="lbl lbl-danger">Jadwal Kosong</span><h5></td></tr>'; 
            //echo '</tr>'; 
        }
    }else if($units=='2'){
    			if($sql->num_rows()>0){
		foreach($sql->result() as $row){
		echo '<td style="border:none;"><input type="checkbox" id="chkshiftjd" class="chkshiftjd" name="chkshiftjd"></input></td>
              <td>'; 
              echo $row->SDAYS.' Hari'; 
              echo '</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
             <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
			  <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td></tr>';  

            }
        }else{
        	echo '<td colspan="28"><h5><span class="lbl lbl-danger">Jadwal Kosong</span><h5></td></tr>'; 
            //echo '</tr>'; 
        }
    }

	}
// simpan shift master 
	function simpanshiftmaster(){
		$nm=$this->input->post('nama'); 
		$tgl1=$this->input->post('tgl1'); 
		$tgl2=$this->input->post('tgl2'); 
		$per=$this->input->post('per'); 

		$no=getnumshift(); 
		$arr=array(
			'NUM_RUNID'=>$no, 
			'OLDID'=>'-1', 
			'NAME'=>$nm, 
			'STARTDATE'=>$tgl1, 
			'ENDDATE'=>$tgl2, 
			'CYLE'=>1, 
			'UNITS'=>$per
			); 
		$sql=$this->db->insert('NUM_RUN',$arr); 
		if($sql){
			echo '1'; // sukses di simpan 
		}else{
			echo '0'; // penyimpanan gagal 
		}		
	}


	// get aray jaga2 
		function getarrayjaga2(){
		//$arr=[{"Senin","Selasa"); 
		$kd=trim($this->input->post('kd')); 
		$units=$this->input->post('units'); 
		// note 1=minggu, 2=bulan 
		$sql=$this->db->query('select a."NUM_RUNID",(extract(hour from a."STARTTIME"
			) || '."':'".'|| extract(minute from a."STARTTIME"
			)) as STARTTIME,(extract(hour from a."ENDTIME"
			) || '."':'".' || extract(minute from a."ENDTIME"
			)) as ENDTIME,a."SDAYS",a."edays",a."schclassid",a."overtime"  
			from public."NUM_RUN_DEIL" a where a."NUM_RUNID"='."'$kd'".' order by a."SDAYS"');// a."NUM_RUNID"='."'$kd2'".''); 
		$arr1=['senin','Selasa'];
		$arr=array(
			'senin'=>'1Senin', 
			'selasa'=>'2Selasa', 
			'rabu'=>'3Rabu', 
			'kami'=>'4Kamis', 
			'jumat'=>'5Jumat', 
			'sabtu'=>'6Sabtu', 
			'minggu'=>'7Minggu'
			); 
		echo '
		    <table id="example7" class="table table-bordered table-striped" style="padding-left: 0px;padding-right: 10px;font-size: 10px;">
                <thead>
                <tr>
                <td>&nbsp; </td>
                <td style="width:4px;">0</td>
                <td>1</td>
                <td>2</td>
                <td>3</th>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</th>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</th>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td>20</td>
                <td>21</th>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                </tr>
                </thead>
                <tbody id="tbodyshift" class="tbodyshift">
		<tr style="border-style:none;border-width:0px;">'; 
		if($units=='1'){

		if($sql->num_rows()>0){
		foreach($sql->result() as $row){
		echo '
              <td style="width:4px;">'; 
              if($row->SDAYS=='1'){
              	echo 'Senin'; 
              }elseif($row->SDAYS=='2'){
              	echo 'Selasa'; 
              }elseif($row->SDAYS=='3'){
              	echo 'Rabu'; 
              }elseif($row->SDAYS=='4'){
              	echo 'Kamis'; 
              }elseif($row->SDAYS=='5'){
              	echo 'Jumat'; 
              }elseif($row->SDAYS=='6'){
              	echo 'Sabtu'; 
              }elseif($row->SDAYS=='7'){
              	echo 'Minggu'; 
              }
             echo '</td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
            <td></td> 
             </tr>';  

            }
        }else{
        	echo '<td colspan="28"><h5><span class="lbl lbl-danger">Jadwal Kosong</span><h5></td></tr>'; 
            //echo '</tr>'; 
        }
    }else if($units=='2'){
    			if($sql->num_rows()>0){
		foreach($sql->result() as $row){
		echo '
              <td style="width:4px;">'; 
              echo $row->SDAYS.' Hari'; 
              echo '</td>'; 
              echo '<td></td>
              <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
             <td></td>
                </tr>'; 

            }
        }else{
        	echo '<td colspan="28"><h5><span class="lbl lbl-danger">Jadwal Kosong</span><h5></td></tr></tbody></table>'; 
            //echo '</tr>'; 
        }
    }

	}
	// function hapus jam kerja 

	function hpsjamkerja(){
		$id=$this->input->post('id'); 
		//$id2=explode("|", $id); 
		//$id3=$id2[0]; 
		//$id4=$id2[1]; 
		$sql=''; 
		for($i=0;$i<count($id);$i++){
			$hr1=explode('|', $id[$i]); 
			$hr2=$hr1[1]; 
			$id0=$hr1[0]; 
			$sql.=$this->db->delete("NUM_RUN_DEIL",array("NUM_RUNID"=>$id0,"SDAYS"=>$hr2)); 
		}
		if($sql){
			echo '1'; // Berhasil dihapus 
		}else{
			echo '0'; // Penghapusan Gagal 
		}
	}


	// get time interval 
	function gettime(){
		$jam=mktime(date('H')); 
		echo $jam; 
	}

	// pengaturan izin cuti
	function izincuti(){
		$sql=$this->db->query('select A."USERID",U."Name",A."startspecday",A."endspecday",
						A."yuanying" as alasan,A."date", A."dateid",d."DEPTNAME",
						c."LEAVENAME" as namaizin from public."USER_SPEDAY" A
						INNER JOIN public."USERINFO" U
						ON A."USERID"=U."USERID" inner join public."LEAVECLASS" c
						on A."dateid"=c."LEAVEID" inner join public."DEPARTMENTS" d
						on U."DEFAULTDEPTID"=d."DEPTID" order by A."startspecday" desc ')->result_array();
						$arr=array(
				'sql'=>$sql
		);
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/izincuti');
		$this->load->view('panel/footer');
	}
	// table refresh izin cuti 
	function tablerefizin(){
				$sql=$this->db->query('select A."USERID",U."Name",A."startspecday",A."endspecday",
						A."yuanying" as alasan,A."date", A."dateid",d."DEPTNAME",
						c."LEAVENAME" as namaizin from public."USER_SPEDAY" A
						INNER JOIN public."USERINFO" U
						ON A."USERID"=U."USERID" inner join public."LEAVECLASS" c
						on A."dateid"=c."LEAVEID" inner join public."DEPARTMENTS" d
						on U."DEFAULTDEPTID"=d."DEPTID" order by A."startspecday" desc '); 
				echo '<table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <td><input type="checkbox" name="chkcutiall" id="chkcutiall"></input></td>
                                                <td>No.</td>
                                                <td>Nama</td>
                                                <td>No ID</td>
                                                <td>Departments</td>
                                                <td>Waktu Mulai</td>
                                                <td>Waktu Izin</td>
                                                <td>Kelompok Izin</td>
                                                <td>Alasan</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody><tr>'; 
				if($sql->num_rows() >0){
					$no=1; 
					foreach($sql->result() as $row){
						echo '<td><input type="checkbox" id="chkcuti" name="chkcuti" class="chkcuti" 
						value="'.$row->USERID.'|'.$row->startspecday.'"/></input></td>
						<td>'.$no++.'</td>
						<td>'.$row->Name.'</td>	
						<td>'.$row->USERID.'</td>
						<td>'.$row->DEPTNAME.'</td>
						<td>'.viewtglweb($row->startspecday).'</td>
						<td>'.viewtglweb($row->endspecday).'</td>
						<td>'.$row->namaizin.'</td>
						<td>'.$row->alasan.'</td>
						<td><button class="btn btn-primary" id="buteditizin" >Edit</button></td>
						'; 
					}
					echo '</tbody></table>'; 
				}
	}

	// hapus cuti 
	function hapuscuti(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$nama=$this->session->userdata('nama'); 
		$tgl1=date('Y-m-d H:i:s'); 

		$arr=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl1, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Hapus Cuti/izin/sakit'
		);

		$id=$this->input->post('iduser'); 
		//$id2=explode("|",$id); 
		$sql=''; 	
		for($i=0;$i<count($id);$i++){
			$id1=explode('|',$id[$i]);
			$iduser=$id1[0]; 
			$tgl=tglinsertdata($id1[1]);  
			$sql.=$this->db->delete("USER_SPEDAY",array("USERID"=>$iduser,"startspecday"=>$tgl)); 
		}
		if($sql){
			echo '1'; // Berhasil dihapus
			$this->m_att->simpanlog($arr);
		}else{
			echo '0'; // penghapusan gagal 
		}
		}
	}
	
	function changedepartizin(){
		$id=$this->input->post('id'); 
		$sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$id)); 
		foreach($sql->result() as $row){
			echo '<option value="'.$row->USERID.'">'.$row->Name.'</option>'; 
		}
	}
	
	
	// form update izin cuti
	function formupdate(){
		$id=trim($this->input->post('id')); 
		$id1=explode('|',$id); 
		$iduser=$id1[0]; 
		$tgl1=$id1[1]; 
		$sql=$this->m_att->getcutiupd($iduser,$tgl1); 
		$leaveid=$sql->row()->dateid; 
		$deptid=$sql->row()->DEPTID;
		echo '<div class="row">
		      <!-- left column -->
		      <div class="col-md-12">
		      <!-- general form elements -->
		      <div class="box box-primary">
		      <div class="box-header">
		      <h3 class="box-title">
		      <span class="label label-success">Update Data Izin,sakit/Dinas luar karyawan </span>
		      <!--<?php
		      if($stat == ""){
		      echo "Add Content Website";
		      }
		      else {
		      echo "Edit Content Website";
		      }
		      ?>-->
		      </h3>
		      </div><!-- /.box-header -->
		         <!-- form start -->
		         <form role="form" action="javascript:updatecuti();" enctype="multipart/form-data" method="POST">
		         <div class="box-body">
		         <div class="form-inline">
		         <label for="exampleInputEmail1">Tanggal</label>
		         <input type="hidden" name="kodeupduser" id="kodeupduser" value='.$iduser.' /> 
				 <input type="hidden" name="tgl11" id="tgl11" value='.$tgl1.' /> 	
		         <input type="text" required="" class="form-control" style="width:240px; cursor: pointer;" name="tgldinasform"
					value='.viewtglweb($tgl1).'  id="tgldinasform" readonly="true"
		            placeholder="Tanggal" />&nbsp;<span><strong>s.d</strong></span>&nbsp;<input type="text"
		            required class="form-control" style="width:240px;cursor:pointer;"
					name="tgldinasform2" id="tgldinasform2" value='.viewtglweb($sql->row()->endspecday).' readonly="true"
		            placeholder="Tanggal" />
		            </div><br />
		            <div class="form-group">
		            <label for="exampleInputEmail1">Tipe Izin</label>
		            <select name="tipeizin" id="tipeizin"  class="form-control">
		            <option value='.$sql->row()->dateid.'>'.$sql->row()->namaizin.'</option>'; 
					$sql2=$this->db->query('select * from public."LEAVECLASS" where "LEAVEID" not in ('."'$leaveid'".')'); 
					foreach($sql2->result() as $key){
						echo '<option value='.$key->LEAVEID.'>'.$key->LEAVENAME.'</option>'; 
					}
					echo '</select>
		            </div>
		            <div class="form-group">
		            <label for="exampleInputEmail1">Department</label>
		            <select name="departupd" id="departupd"  class="form-control" onchange="javascript:changedepart12();">
		             <option value='.$sql->row()->DEPTID.'>'.$sql->row()->DEPTNAME.'</option>'; 
					 $sqlper=$this->db->get('DEPARTMENTS')->result_array(); 
					 foreach($sqlper as $for){
						echo '<option value="'.$for['DEPTID'].'">'.$for['DEPTNAME'].'</option>'; 
					 }
					 echo '</select>
		             </div>
		             <div class="form-group">
		             <label for="exampleInputEmail1">Nama</label>
		             <select name="namapegdepart" id="namapegdepart"  class="form-control">
		             <option value='.$sql->row()->USERID.'>'.$sql->row()->Name.'</option>'; 
					$sqluser=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$deptid)); 
					foreach($sqluser->result() as $keyuser){
						echo '<option value="'.$keyuser->USERID.'">'.$keyuser->Name.'</option>'; 
					}
					echo '</select>
		            </div>
		            <div class="form-group">
		            <label for="exampleInputEmail1">Alasan</label>
		            <input type="text" name="alasankarya" id="alasankarya" class="form-control"
		            placeholder="Alasan" value='.$sql->row()->alasan.' />
		            </div>
					</div>

		            <div class="box-footer">
		               <button type="submit" class="btn btn-primary">
		            Update
		            </button>
		            </div>
		            </form>
		            </div>
		            </div>
		            </div>';

	}
	// update izin 
	function updizin(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$nama1=$this->session->userdata('nama'); 
		$tglsystem=date('Y-m-d H:i:s'); 
		$userid=$this->input->post('userid');
		$userupd=$this->input->post('userupd'); 		
		$tgl1=tglinsertdata($this->input->post('tgl1')); 
		$tgl11=$this->input->post('tgl11'); 
		$tgl2=tglinsertdata($this->input->post('tgl2')); 
		$tpizin=$this->input->post('izin'); 
		$alasan=$this->input->post('alasan'); 
		$arr1=array(
			'ID'=>getidsystemlog(),
			'Operator'=>$nama1, 
			'Logtime'=>$tglsystem, 
			'MachineAlias'=>'', 
			'LogTag'=>0, 
			'LogDescr'=>'Update Izin,cuti,sakit'
		); 

		$arr=array(
			'USERID'=>$userupd, 
			'startspecday'=>$tgl1, 
			'endspecday'=>$tgl2, 
			'dateid'=>$tpizin, 
			'yuanying'=>$alasan
		); 
		$sql=$this->db->update('USER_SPEDAY',$arr,array('USERID'=>$userid,'startspecday'=>$tgl11)); 
		if($sql){
			echo '1'; 
			$this->m_att->simpanlog($arr1); 
		}else{
			echo '0'; 
		}
	}
	}
	

	// pengaturan hari libur umum
	function liburumum(){
		$sql=$this->db->query('select * from public."HOLIDAYS" order by "STARTTIME" DESC ')->result_array();
		$arr=array(
			'sql'=>$sql
		);
		$this->load->view('panel/modaleditlibur'); 
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/liburumum');
		$this->load->view('panel/footer');

	}
	// pencarian status karyawan
	function statuskary(){
		$this->load->view('panel/head');
		$this->load->view('panel/statuskary');
		$this->load->view('panel/footer');
	}
	// riwayat operasional
	function operasional(){
		$sql=$this->m_att->getsystemlog()->result_array();
		$arr=array(
			'sql'=>$sql
		); 	
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/operasional');
		$this->load->view('panel/footer');
	}
	//insert into system Log 
	function inserintosystemlog(){
		$operator=trim($this->input->post('operator')); 
		$dtlog=date('Y-m-d H:i:s'); 
		$malias=''; 
		$logtag='0'; 
		$logdes=trim($this->input->post('log')); 
		$arr=array(
			'Operator'=>$operator, 
			'LogTime'=>$dtlog, 
			'MachineAlias'=>$malias, 
			'LogTag'=>$logtag, 
			'LogDescr'=>$logdes
		); 
		$sql=$this->m_att->simpanlog($arr); 
	}
	
	
	// presensi datang terlambat
	function terlambat(){
		$this->load->view('panel/head');
		$this->load->view('panel/terlambat');
		$this->load->view('panel/footer');
	}
	// presensi lupa in
	function lupain(){
		$sql=$this->m_att->getdepartment()->result_array(); 
		$arr=array(
			'sql'=>$sql
			); 
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/lupain');
		$this->load->view('panel/footer');
	}
	// tb refresh lupain 
	function reflupain(){
		echo '<table id="example7" class="table table-bordered table-striped">
              <thead>
              <tr>
              <td style="width: 20%;text-align: center;">NIK</td>
              <td style="width: 30px; text-align: center;">NAMA</td>
              </tr>
              </thead>
              <tbody>
              <tr>
              <td style="width:20%;text-align: center;">&nbsp;</td>
              <td style="width: 30px;">&nbsp;</td>
              </tr>
              </tbody>
              </table>'; 

	}


	// tambah mesin baru
	function mesin_form(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		$this->load->view('panel/head');
		$this->load->view('panel/mesinform');
		$this->load->view('panel/footer');
		}
	}
	// pengaturan mesin
	function peng_mesin(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		$this->load->view('panel/head');
		$this->load->view('panel/mesindaftar');
		$this->load->view('panel/footer');
		}
	}

	//master cuti 
	function mastercuti(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		$sql=$this->db->query('SELECT * FROM public."LEAVECLASS" ')->result_array();
		$arr=array(
			'sql'=>$sql
		);
		$this->load->view('panel/modaleditcuti'); 
		$this->load->view('panel/modaltbhcuti'); 
		$this->load->view('panel/head',$arr); 
		$this->load->view('panel/mastercuti'); 
		$this->load->view('panel/footer'); 
		}
	}

	// form update master izin/cuti 
	function editmsterizin(){
		$id=$this->input->post('id'); 
		$sql=$this->db->get_where('LEAVECLASS',array('LEAVEID'=>$id)); 
		echo '<div class="box box-primary" >
              <div  style="float: left; width: 46%;">
            <div class="form-group" style="margin-bottom: 0px;">
            <label for="exampleInputEmail">Nama Izin/Cuti</label>
            <input type="hidden" value="'.$id.'" name="kdupd" id="kdupd" />
            <input type="text" class="form-control" placeholder="Nama Izin" value="'.$sql->row()->LEAVENAME.'" id="namaizinupd" name="namaizinupd">
            </input>
            </div>

                <div class="form-group" style="margin-bottom: 0px;">
            <label for="exampleInputEmail1">Symbol Di Laporan</label>
            <input type="text" value="'.$sql->row()->REPORTSYMBOL.'" name="simbolrepupd" id="simbolrepupd" class="form-control" 
            placeholder="Simbol Di Laporan" maxlength="2" />
            </div>
            <div class="form-inline" style="margin-bottom: 0px;">
            <label for="exampleInputEmail1">Minimal Unit</label>
            <input type="number" value="'.$sql->row()->MINUNIT.'" name="minunitpd" id="minunitpd" class="form-control" 
            placeholder="minimal unit" maxlength="2" /><br />
            <select name="minhrupd" id="minhrupd" class="form-control">
              <option value="3">Hari</option>
              <option value="2">Menit</option>
              <option value="1">Jam</option>

            </select>
            </div>
            </div></div>'; 
	}

// proses update master cuti 
	function updtcuti(){
		$id=(int) $this->input->post('id'); 
		$nama=$this->input->post('nama'); 
		$simbol=$this->input->post('simbol'); 
		$minunit=(int) $this->input->post('minunit'); 
		$unit=(int) $this->input->post('unit'); 

		$arr=array(
			'LEAVENAME'=>$nama, 
			'MINUNIT'=>$minunit, 
			'REPORTSYMBOL'=>$simbol, 
			'UNIT'=>$unit
			); 
		$sql=$this->db->update('LEAVECLASS',$arr,array('LEAVEID'=>$id)); 
		if($sql){
			echo '1'; // Sukses melakukan update
		}else{
			echo '0'; // Gagal melakukan update 
		}
	}

	// hapus master cuti 
	function hpsmaster(){
		$id=$this->input->post('id'); 
		$sql=''; 
		for ($i=0; $i <count($id) ; $i++) { 
			$id2=explode(';',$id[$i]); 
			$id3=(int) $id2[0]; 
			$sql.=$this->db->delete('LEAVECLASS',array('LEAVEID'=>$id3)); 
		}
		if($sql){
			echo '1';// jika berhasil dihapus
		}else{
			echo '0'; 
		}
	}
	// simpan izin 
	function simpanizin(){
		$sql=$this->db->query('select max("LEAVEID") id from public."LEAVECLASS"'); 
		$nama=$this->input->post('nama'); 
		$sym=$this->input->post('simbol'); 
		$minunit=(int) $this->input->post('minunit'); 
		$unit=(int) $this->input->post('unit'); 
		if($sql->num_rows()>0){
			$id2=$sql->row()->id+1; 
		}else{
			$id2=0; 
		}
		$code='Leave_'.$id2; 
		$arr=array(
			'LEAVEID'=>$id2, 
			'LEAVENAME'=>$nama, 
			'REPORTSYMBOL'=>$sym, 
			'MINUNIT'=>$minunit, 
			'UNIT'=>$unit, 
			'REMAINDCOUNT'=>0, 
			'REMAINDPROC'=>1, 
			'DEDUCT'=>0, 
			'COLOR'=>1, 
			'CLASSIFY'=>0
			); 
		$sql=$this->db->insert('LEAVECLASS',$arr); 
		if($sql){
			echo '1'; // berhasil disimpan
		}else{
			echo '0'; // penyimpanan Gagal 
		}
	}

	// grid master cuti 
	function gridmaster(){
		echo '<table id="example7" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <td><input type="checkbox" name="chkcutiallmas" id="chkcutiallmas"></input></td>
                                                <td>No.</td>
                                                <td>Nama Jenis Cuti/ Izin</td>
                                                <td>Symbol Report</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>';
       $sql=$this->db->query('SELECT * FROM public."LEAVECLASS" '); 
       $no=1; 
       if($sql->num_rows()>0){
       	foreach($sql->result() as $row){
       		echo '<tr>
       		<td><input type="checkbox" id="chkcutimas" name="chkcutimas" class="chkcutimas" 
       		value='.$row->LEAVEID.'/>
            </input></td>
       		<td>'.$no++.'</td>
       		<td>'.$row->LEAVENAME.'</td>
       		<td>'.$row->REPORTSYMBOL.'</td>
       		 <td><button type="button" class="btn btn-success" value='.$row->LEAVEID.' id="buteditmas">Edit</button></td>
       		'; 
       	}
       }
       echo '</tr></tbody></table>';                                  
	}

	// form tambah izin, dinas atau cuti karyawan
	function cutiadd(){
		$sql=$this->db->query('SELECT * FROM public."LEAVECLASS" ')->result_array();
		$arr=array(
			'sql'=>$sql
		);
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/dinasform');
		$this->load->view('panel/footer');
	}
	// simpan form cuti baru

	function simpancutibaru(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$nama=$this->session->userdata('nama'); 
		$tgl1=date('Y-m-d H:i:s'); 
		$userid=$this->input->post('userid');
		$stime=tglinsertdata($this->input->post('startspecday'));
		$edate=tglinsertdata($this->input->post('especday'));
		$iddate=$this->input->post('idate');
		$yuan=$this->input->post('yuan');
		$arr1=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl1, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Simpan Cuti,izin,sakit baru'
			); 
		$datestamp=date('Y-m-d H:i:s');
		$arr=array(
			'USERID'=>$userid,
			'startspecday'=>$stime,
			'endspecday'=>$edate,
			'dateid'=>$iddate,
			'yuanying'=>$yuan,
			'date'=>$datestamp
		);
		$sql3=$this->db->get_where('USER_SPEDAY',array('USERID'=>$userid,'startspecday'=>$stime)); 
		if($sql3->num_rows()>0){
			echo '3'; // jika ada 
		}else {

		$sql=$this->db->insert("USER_SPEDAY",$arr);
		if($sql){
			echo '1';
			$this->m_att->simpanlog($arr1);
		}else{
			echo '0';
		}
		}
	}
	}
	// hapus shift jaga 
	function delshiftjaga(){
		$numid=$this->input->post('numid'); 
		$start=$this->input->post('start'); 
		$etime=$this->input->post('etime'); 
	}

	// form tambah data jam kerja
	function jamkerjaform(){
		$this->load->view('panel/head');
		$this->load->view('panel/jamkerjaform');
		$this->load->view('panel/footer');
	}
	// get master deparments 


	// update profil
	function profil(){
		$akses=isLogin();
		if(empty($akses['nik'])){
			redirect('index.php/login'); 
		}else{
		$this->load->view('panel/head');
		$this->load->view('panel/profil');
		$this->load->view('panel/footer');
		}
	}
	// form add shift kerja karyawan
	function shiftadd(){
		$this->load->view('panel/head');
		$this->load->view('panel/shiftform');
		$this->load->view('panel/footer');
	}
	// form add hari libur umum
	function liburumumadd(){
		$this->load->view('panel/head');
		$this->load->view('panel/liburumumform');
		$this->load->view('panel/footer');
	}
	// function form hari libur umum update 
	// update hari libur umum 
	function hrliburupdate(){
		$kd=$this->input->post('kd'); 
		$sql=$this->db->get_where('HOLIDAYS',array('HOLIDAYID'=>$kd)); 
		echo '
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> <span class="label label-success">Update Hari Libur Umum</span>
                                    </h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="" enctype="multipart/form-data" method="POST">
                                    <div class="box-body">
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Hari Libur</label>
                                            <input type="hidden" id="idedit" value="'.$kd.'"  name="idedit" />
                                             <input type="text" name="nmhrliburedit" id="nmhrliburedit" 
                                             value="'.$sql->row()->HOLIDAYNAME.'"
                                             class="form-control" 
                                             placeholder="Nama Hari Libur" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tgl Mulai</label>
                                            <input type="text" value="'.viewtglweb($sql->row()->STARTTIME).'" 
                                            name="tglmulaihrliburedit" id="tglmulaihrliburedit" class="form-control" 
                                             placeholder="Tanggal Mulai" readonly="true" style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tgl Akhir</label>
                                            <input type="text" value="'.viewtglweb($sql->row()->STARTTIME).'" name="tglakhirliburedit2" 
                                            id="tglakhirliburedit2" class="form-control" 
                                             placeholder="Tanggal Akhir Libur" readonly="true" style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jumlah Hari</label>
                                            <input type="number" value="'.$sql->row()->DURATION.'" name="jmlhhariedit" id="jmlhhariedit" class="form-control" 
                                             placeholder="" readonly="true" style="cursor: pointer;" />
                                        </div> 

                                    </div>

                                    <div class="box-footer">
                                        <button type="button" class="btn btn-primary" id="buteditlib">
                                           Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
        '; 
	}
	// function update hari libur umum 
	function updhrliburumum(){
		$id=$this->input->post('id'); 
		$nama=$this->input->post('nama'); 
		$starttime=tglinsertdata($this->input->post('starttime')); 
		$durasi=$this->input->post('durasi');
		$arr=array(
			'HOLIDAYNAME'=>$nama, 
			'STARTTIME'=>$starttime, 
			'DURATION'=>$durasi
			);  
		$sql=$this->db->update('HOLIDAYS',$arr,array('HOLIDAYID'=>$id)); 
		if($sql){
			echo '1'; // berhasil diupdate 
		}else{
			echo '0'; // gagal melakukan update 
		}
	}

	// pengurangan tanggal 
	function pengtanggal(){
		$date1=tglinsertdata($this->input->post('tgl1')); 
		$date2=tglinsertdata($this->input->post('tgl2')); 
		//$time1=strtotime($date1);
		//$time2=strtotime($date2);
		$selisih= (((strtotime ($date2) - strtotime ($date1)))/(60*60*24));
		echo $selisih; 
	}
	//	// pengurangan tanggal 
	function pengtanggal2($tgl1,$tgl2){
		$date1=tglinsertdata($tgl1); 
		$date2=tglinsertdata($tgl2); 
		//$time1=strtotime($date1);
		//$time2=strtotime($date2);
		$selisih= (((strtotime ($date2) - strtotime ($date1)))/(60*60*24));
		return $selisih; 
	}
	// update hari libur umum 
	function prosesupdhrlibur(){
		$kd=$this->input->post('kd'); 
		$nam=$this->input->post('nama'); 
		$tgl1=$this->input->post('tgl1'); 
		$tgl2=$this->input->post('tgl2'); 
	}

	// function simpan to holidays hari libur umum 
	function simpanhrlibur(){
		$name=$this->input->post('holidayname'); 
		$starttime=tglinsertdata($this->input->post('starttime')); 
		$durasi=$this->input->post('durasi'); 
		$sql=$this->db->query('select  max("HOLIDAYID")+1 as id from public."HOLIDAYS"'); 
		$deptid=(int) '0'; 
		$id=$sql->row()->id;
		if(strlen($id)>0){
			$id2=$id; 
		}else{
			$id2='0'; 
		} 
		$arr=array(
			'HOLIDAYID'=>$id2, 
			'HOLIDAYNAME'=>$name, 
			//'HOLIDAYYEAR'=>'', 
			//'HOLIDAYMONTH'=>'', 
			'STARTTIME'=>$starttime,
			'DURATION'=>$durasi 
			//'HOLIDAYTYPE'=>
			//'DeptID'=>$deptid
			); 
		$sql2=$this->db->insert('HOLIDAYS',$arr); 
		if($sql2){
			echo '1'; // jika berhasil disimpan 
		}else{
			echo '0'; // jika gagal melakukan penyimpanan 
		}

	}
	// refresh grid table libur umum 
	function fretblumum(){
		echo '<table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox" id="chkliburumumall" name="chkliburumumall"></input></td>
                                                <td>No.</td>
                                                <td>Nama Hari Libur</td>
                                                <td>Tanggal Mulai</td>
                                                <td>Jumlah Hari</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>'; 
        $sql=$this->db->query('select * from public."HOLIDAYS" order by "HOLIDAYID" desc'); 
        $no=1; 
        foreach($sql->result() as $row){
        	echo '<tr>
        	<td><input type="checkbox" id="chkliburumum" name="chkliburumum" class="chkliburumum" 
        	value="'.$row->HOLIDAYID.'"></td>
        	<td>'.$no++.'</td>
        	<td>'.$row->HOLIDAYNAME.'</td>
        	<td>'; 
        	if(!empty($row->STARTTIME)){
        		echo viewtglweb($row->STARTTIME); 
        	}else{
        		echo ''; 
        	}
        	echo '</td>
        	<td>'.$row->DURATION.'</td>
        	<td><button type="button" class="btn btn-primary"  id="btneditlibur" value="'.$row->HOLIDAYID.'">EDIT</button></td>
        	'; 
        }                                
        echo '</tr></tbody></table>';                                 	
	}

	// payroll sistem
	function payroll(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login','location'); 
		}else{
		$this->load->view('panel/modalcetakpayrol');
		$this->load->view('panel/head');
		$this->load->view('panel/payroll');
		$this->load->view('panel/footer');
	}
	}
	// function payroll setting
	function payrollsetting(){
		$sql=$this->db->query("select * from payrollsetting order by kode desc ")->result_array();
		$arr=array(
				'sql'=>$sql
		);
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/payset');
		$this->load->view('panel/footer');
	}
	// simpan baru payroll setting
	function simpanpayrollset(){
	$id=getkdpayrollsetting();
	$nominal=$this->input->post('nominal');
	$uraian=$this->input->post('uraian');
	$kdgol=$this->input->post('kdgol');
	$kduser=$this->session->userdata('kduser');
	$ket=$this->input->post('ket');
	$arr=array(
		'kode'=>$id,
		'nominal'=>$nominal,
		'uraian'=>$uraian,
		'kd_golongan'=>$kdgol,
		'ket'=>$ket,
		'kduser'=>$kduser
	);
	$sql=$this->db->insert('payrollsetting',$arr);
	if($sql){
		echo '1';
	}else{
		echo '0';
	}
	}

// function simpan mesin oke
	function simpanmesin(){
		$sql=$this->db->query("select max(id)+1 as id from machines");
		$id=$sql->row()->id;
		$machinealias=$this->input->post('machinealias');
		$connecttype=$this->input->post('connecttype');
		$ip=$this->input->post('ip');
		$serialport=$this->input->post('serialport');
		$port=$this->input->post('port');
		$baudrate=$this->input->post('baudrate');
		$machinenumber=$this->input->post('machinenumber');
		$ishost=$this->input->post('ishost');
		$enabled=$this->input->post('enabled');
		$commpassword=$this->input->post('commpassword');
		$uilanguage=$this->input->post('uilanguage');
		$dateformat=$this->input->post('dateformat');
		$inoutrecordwarn=$this->input->post('inoutrecordwarn');
		$idle=$this->input->post('idle');
		$voice=$this->input->post('voice');
		$managercount=$this->input->post('managercount');
		$usercount=$this->input->post('usercount');
		$fingercount=$this->input->post('fingercount');
		$secretaccount=$this->input->post('secretaccount');
		$firmwareversion=$this->input->post('firmwareversion');
		$producttype=$this->input->post('producttype');
		$lockcontrol=$this->input->post('lockcontrol');
		$purpose=$this->input->post('purpose');
		$producekind=$this->input->post('producekind');
		$sn=$this->input->post('sn');
		$photostamp=$this->input->post('photostamp');
		$isifconfigserver2=$this->input->post('isifconfigserver2');
		$pusher=$this->input->post('pusher');
		$isandroid=$this->input->post('isAndroid');
		$arr= array(
			'id'=>$id,
			'machinealias'=>$machinealias,
			'connecttype'=>$connecttype,
			'ip'=>	$ip,
			'serialport'=> $serialport,
			'port'=>$port,
			'baudrate'=>$baudrate,
			'machinenumber'=>$machinenumber,
			'ishost'=>$ishost,
			'enabled'=>$enabled,
			'commpassword'=>$commpassword,
			'uilanguage'=>$uilanguage,
			'dateformat'=>$dateformat,
			'inoutrecordwarn'=>$inoutrecordwarn,
			'idle'=>$idle,
			'voice'=>$voice,
			'managercount'=>$managercount,
			'usercount'=>$usercount,
			'fingercount'=>$fingercount,
			'secretaccount'=>$secretaccount,
			'firmwareversion'=>	$firmwareversion,
			'producttype' => $producttype,
			'lockcontrol' => $lockcontrol,
			'purpose' => $purpose,
			'producekind' =>$producekind,
			'sn'=> $sn,
			'photostamp' =>$photostamp,
			'isifconfigserver2' =>$isifconfigserver2,
			'pusher' => $pusher,
			'isAndroid' => $isandroid
		);
		$sql=$this->m_att->insertdata('machines',$arr);
		if($sql){
			echo '1';
		}else{
			echo '0';
		}
	}
	// form tambah payroll setting
	function formpayset(){
		$query=$this->db->query("select * from masteruraian where status='1'")->result_array();
		$arr=array(
				'query'=>$query
		);
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/formpayset');
		$this->load->view('panel/footer');
	}
	// form master golongan
	function golongan(){
		$sql=$this->db->query("select * from golonganmaster order by golongan asc")->result_array();
		$arr=array(
				'golongan'=>$sql
		);
		$this->load->view('panel/modaleditgol'); 
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/mastergol');
		$this->load->view('panel/footer');
	}
	// hapus golongan 
	function hpsgolongan(){
		$id=$this->input->post('id');
		$sql='';  
		for($i=0;$i<count($id);$i++){
			$id2=explode(';', $id[$i]); 
			$id3=$id2[0]; 
			$sql.=$this->db->delete('golonganmaster',array('kd_golongan'=>$id3)); 
		}
		if($sql){
			echo '1'; // jika berhasil dihapus 
		}else{
			echo '0'; // jika gagal menghapus 
		}
	}
	// function refresh tabel master golongan 
	function refmastertbgol(){
		echo ' <table id="example12" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td style="text-align:center; width:5%;"><input type="checkbox" id="chkgolongall" name="chkgolongall" class="chkgolongall"></input></td>
                                                <td  style="text-align:center; width:5%;">No.</td>
                                                <td  style="text-align:center; width:15%;">Kode Golongan</td>
                                                <td   style="text-align:center;">Golongan</td>
                                                <td   style="text-align:center;">Status</td>
                                                <td style="text-align:center;">Skor</td>
                                                <td style="text-align:center;">Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>'; 
        $no=1; 
		$sql=$this->db->get('golonganmaster'); 
		foreach($sql->result_array() as $gol){
			echo '<tr>
			 <td  style="text-align:center; width:5%;"><input type="checkbox" id="chkgolong" class="chkgolong" name="chkgolong" 
			 value='.$gol['kd_golongan'].'></input></td>
             <td  style="text-align:center; width:5%;">'.$no++.'</td>
             <td   style="text-align:left; width:15%;">'.$gol['kd_golongan'].'</td>
              <td>'.$gol['golongan'].'</td>
             <td>
			'; 
			if($gol['aktif']=='1'){
				echo '<span class="label label-success">Aktif</span>';
			}else{
				echo '<span class="label label-danger">Tidak Aktif</span>';
			}
			echo '
			<td style="text-align:center;">'.$gol['skor'].'</td>
			</td>
			<td><button class="btn btn-primary" id="btneditgol" value='.$gol['kd_golongan'].'>Edit</button></td>
			'; 
		} 
		echo '</tr></tbody></table>'; 
	}


	// function form tambah baru golongan baru
	function golonganbaru(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		$this->load->view('panel/head');
		$this->load->view('panel/formgol');
		$this->load->view('panel/footer');
		}
	}
	// simpan golongan baru
	function simpangolbaru(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$nama=$this->session->userdata('nama'); 
		$tgl=date('Y-m-d H:i:s'); 
		$kd=getkdgolongan();
		$namagol=trim($this->input->post('golongan'));
		$status=$this->input->post('status');
		$skor=$this->input->post('skor');  // skor 
		$arr=array(
			'golongan'=>$namagol,
			'aktif'=>$status,
			'kd_golongan'=>$kd, 
			'skor'=>$skor
		);
		$arr1=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Simpan Golongan baru'
			);
		$sql=$this->m_att->insertdata('golonganmaster',$arr);
		if($sql){
			echo '1';
			$this->m_att->simpanlog($arr1); 
		}else{
			echo '0';
		}
		}
	}
	// form update master golongan 
	function formgolongan(){
		$kd=$this->input->post('kd'); 
		$sql=$this->db->get_where('golonganmaster',array('kd_golongan'=>$kd)); 
		echo '<section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> <span class="label label-success">Update Golongan</span>

                                    </h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="" enctype="multipart/form-data" method="POST">
                                    <div class="box-body">
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Golongan</label>
                                            <input type="hidden" value="'.$sql->row()->kd_golongan.'" id="kodeupd" name="kodeupd" />
                                             <input type="text"  name="golbaruedit" id="golbaruedit" class="form-control"
                                             placeholder="golongan" value="'.$sql->row()->golongan.'" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <select class="form-control" id="selgolbaruedit" name="selgolbaruedit">
                                              <option value="1">-aktif-</option>
                                              <option value="0">-Tidk Aktif-</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        	 <label for="exampleInputEmail1">Status</label>
                                        	 <input type="text" name="skorupdgol" id="skorupdgol" 
                                        	 class="form-control" placeholder="Skor" value="'.$sql->row()->skor.'"></input>
                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <button type="button" id="updgolo" class="btn btn-primary" >
                                           Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->';
	}
	// proses update master golongan 
	function updmastergol(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		$nama=$this->session->userdata('nama'); 
		date_default_timezone_set('Asia/Jakarta'); 
		$tgl=date('Y-m-d H:i:s'); 
		$kd=$this->input->post('kd'); 
		$gol=$this->input->post('gol'); 
		$stts=$this->input->post('stts'); 
		$skor=$this->input->post('skor'); 
		$arr=array(
			'golongan'=>$gol, 
			'aktif'=>$stts, 
			'skor'=>$skor
			); 
		$arr1=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Update Master Golongan'
			);
		$sql=$this->db->update('golonganmaster',$arr,array('kd_golongan'=>$kd)); 
		if($sql){
			echo '1'; // berhasil diupdate
			$this->m_att->simpanlog($arr1);
		}else{
			echo '0'; // gagal melakukan update 
		}
		}
	}

	// download data presensi
	function downloaddtpresensi(){
		$machine = $this->m_att->selectdata(" machines order by id")->result_array();
		$data = array(
				'machine'=>$machine
		);
		$this->load->view('panel/modalflash'); 
		$this->load->view('panel/head',$data);
		$this->load->view('panel/downloaddata');
		$this->load->view('panel/footer');
	}
	// upload data dan sidik jari pegawai
	function uploadpeg(){
	$sql=$this->db->get('DEPARTMENTS')->result_array(); 
	$arr=array(
		'sql'=>$sql
		); 
	$this->load->view('panel/head',$arr);
	$this->load->view('uploaddata');
	$this->load->view('panel/footer');
	}

	// function download data pegawai 
	function downloaddt(){
		$sql=$this->db->get('machines')->result_array(); 
		$arr=array(
			'sql'=>$sql
			); 
		$this->load->view('panel/head',$arr); 
		$this->load->view('panel/downloaddt'); 
		$this->load->view('panel/footer'); 
	}

	// selisih tanggal 
	// hapus jadwal user terpilih 
	function hpsjdwalterpilih(){
		//$iduser=trim($this->input->post('iduser'));
		$idtgl=$this->input->post('idtgl'); 
		$tgl1=viewtglweb($this->input->post('tgl1')); 
		$tgl2=viewtglweb($this->input->post('tgl2')); 
		$sql=''; 
		for($i=0;$i<count($idtgl);$i++){
				$kd=explode(';',$idtgl[$i]); 
				$kd1=$kd[0]; 
				$sql.=$this->db->delete("NUM_RUN_DEIL",array('NUM_RUNID'=>$kd1)); 
		}
		if($sql){
			echo '1'; // jika berhasil dihapus 
		}else{
			echo '0'; // jika penghapusan gagal 
		}		
	}
	// refresh tabel jadwal per pegawai 
	function reftbjdwalpeg(){
		$sql=$this->db->get('NUM_RUN'); 
		echo '<table id="example1" class="table table-bordered table-striped">
              <thead>
                 <tr>
                 <td style="width: 4%;text-align: center;">
                 </td>
                 <td style="width: 10%;text-align: center;">Tgl Mulai</td>
                 <td style="width: 10%;text-align: center;">Tgl akhir</td>
                 <td style="width: 20%; text-align: center;">Jadwal Kerja</td>
                 </tr>
                 </thead>
              <tbody>'; 
		foreach($sql->result() as $row){
			echo '<tr>
			<td><input type="checkbox" name="chjdwalpeg" id="chjdwalpeg"
			 class="chjdwalpeg" value="'.$row->NUM_RUNID.'|'.viewtglweb($row->STARTDATE).'"/></td>
			 <td>'; 
			 if(empty($row->STARTDATE)){
			 	echo ''; 
			 }else{
			 	echo viewtglweb($row->STARTDATE); 
			 }
			 echo '</td>
				<td>'; 
				if(empty($row->ENDDATE)){
					echo ''; 
				}else{
					echo viewtglweb($row->ENDDATE); 
				}
				echo '</td>	
				<td>'.$row->NAME.'</td>
				'; 
		}	  
		echo '</tr></tbody></table>'; 	  
		
	}
	// tabel for upload from flash disk 
	function uploadfromflash(){
		$file=base_url()."assets/1_attlog.dat";  
		$lines = file($file);
		$rows = array();
		//$row_pivot = -1;
		foreach ($lines as $line) {
    	echo $line[0].$line[1].$line[2]; 
    	}
		echo '<table id="example7" class="table table-bordered table-striped">
               <thead>
                 <tr>
                  <td><input type="checkbox" id="chkaksesall" name="chkaksesall" class="chkaksesall"></td>
                   <td style="width: 10px; text-align: center;">BagdeNumber</td>
                   <td>Tanggal,Jam</td>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  </tr>
                  '; 
        echo '</tbody></table>';           
	}



	// form jadwal karyawan
	function jdwalkaryawa(){
	$akses=isLogin(); 
	if(empty($akses['nik'])){
		redirect('index.php/login','location');
	}else{
	$grant=''; //$this->load->view('panel/grant');
	$sql=$this->m_att->getdepart()->result_array();
		$arr=array(
				'grant'=>$grant,
				'sql'=>$sql
		);
		//$this->load->view('panel/modaltbhjdwal');
		$this->load->view('panel/modalctkjdwal'); 
		$this->load->view('panel/head');
		$this->load->view('panel/jdwltdktetap'); 
		$this->load->view('panel/modaltbhjdwal');
		$this->load->view('panel/modalplusshift2'); 
		$this->load->view('panel/jdwalkerja',$arr);
		$this->load->view('panel/footer');
		}
	}

	// data master uraian
	function datauraian(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login','location'); 
		}else{
		$sql=$this->db->query("SELECT * from masteruraian order by namauraian asc")->result_array();
		$arr=array(
				'sql'=>$sql
		);
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/datauraian');
		$this->load->view('panel/footer');
		}
	}
	// form tambah data uraian
	function formuraian(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login','location'); 
		}else{
		$this->load->view('panel/head');
		$this->load->view('panel/formuraian');
		$this->load->view('panel/footer');
		}
	}

	// form update uraian
	function formupduraian(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login','location'); 
		}else{
		$kd=$this->input->post('kd');
		$nama=$this->input->post('nama');
		$stts=$this->input->post('stts');
		echo '<div class="row">
          <!-- left column -->
          <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
          <div class="box-header">
          <h3 class="box-title"> <span class="label label-success">Update Uraian</span>
					</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="javascript:simpanuraian();" enctype="multipart/form-data" method="POST">
          <div class="box-body">
          <div class="form-group">
          <label for="exampleInputEmail1">Nama Uraian</label>
					<input type="hidden" value="'.$kd.'" id="kdupd" name="kdupd" />
          <input type="text" value="'.$nama.'" name="uraiupd" id="uraiupd" class="form-control"
          placeholder="Uraian" />
          </div>
          <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <select class="form-control" id="seluraibaru" name="seluraibaru">
          <option value="1">-aktif-</option>
          <option value="0">-Tidk Aktif-</option>
          </select>
          </div>
          </div>
					<div class="box-footer">
          <button type="submit" class="btn btn-primary" onClick="" id>
          Update
          </button> &nbsp;
					<button type="button" class="btn btn-success"><< Kembali</button>
          </div>
          </form>
          </div>
          </div>
          </div>   <!-- /.row -->';
		}
		}

	function simpanuraian(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login','location'); 
		}else{
		$kd=getkduraian();
		$namauraian=$this->input->post('nama');
		$status=$this->input->post('stts');
		$arr=array(
			'namauraian'=>$namauraian,
			'status'=>$status,
			'iduraian'=>$kd
		);
		$sql=$this->db->insert('masteruraian',$arr);
		if($sql){
			echo '1';
		}else{
			echo '0';
		}
		}
	}

	function formcetakdetail(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login','location'); 
		}else{
		echo '<div class="col-xs-12">
				<div class="box">
						<div class="box-header">
								<h3 class="box-title">Hasil Kalkulasi</h3>
						</div><!-- /.box-header -->
						<div class="box-body table-responsive">
								<table id="example4" class="table table-bordered table-striped">
										<thead>
												<tr>
														<td style="text-align:center; width:5%;">
															<input type="checkbox" id="chkgolong" name="chkgolong"></input></td>
														<td  style="text-align:center; width:5%;">No.</td>
														<td  style="text-align:center; width:15%;">Tanggal</td>
														<td   style="text-align:center;">Scan Masuk</td>
														<td   style="text-align:center;">Scan Pulang</td>
														<td style="text-align:center;">Terlambat</td>
														<td style="text-align:center;">Plg Cepat</td>
														<td style="text-align:center;">Lembur</td>
														<td style="text-align:center;">Jam Kerja</td>
														<td style="text-align:center;">Jmlh Hadir</td>
														<td style="text-align:center;">Keterangan</td>
												</tr>
										</thead>
										<tbody>
										</tbody>
									</table>

						</div><!-- /.box-body -->
						<div class="box-footer">
								<button type="button" class="btn btn-primary" id="printcetakdet">
									 Print
								</button>
						</div>
				</div><!-- /.box -->

		</div>';
		}
	}

	function xml(){
		$this->load->view('panel/grant');
	}

	function tambahpegawai()
	{
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login','location'); 
		}else{
		$sql=$this->db->query('select * from public."PENDIDIKAN"')->result_array();
		$dep=$this->db->query('select * from public."DEPARTMENTS" order by "DEPTID" asc ')->result_array(); 
		$kdunit=$this->input->post('kdunit'); 
		if(empty($kdunit)){
			$kdunit1='1'; 
		}else{
			$kdunit1=$kdunit; 
		}

		$kary=$this->db->get_where("USERINFO",array('DEFAULTDEPTID'=>$kdunit1))->result_array(); 
		$arr=array(
				'sql'=>$sql, 
				'dep'=>$dep, 
				'kary'=>$kary
		);
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/formpegawai');
		$this->load->view('panel/footer');
		}
	}
	// refresh form pegawai 
	function reftablepegawai(){
		$kdunit=trim($this->input->post('kd')); 
		$sql=$this->db->get_where("USERINFO",array("DEFAULTDEPTID"=>$kdunit)); 
		echo '<table id="example7" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td>No.</td>
                                                <td>NIK</td>
                                                <td>Nama /Pegawai</td>
                                                <!--<td>Aksi</td>-->
                                            </tr>
                                        </thead>
                                        <tbody id="tbodypegawai">'; 
		if($sql->num_rows()>0){
			$no=1; 
			foreach($sql->result() as $row){
				echo '<tr>
				<td>'.$no++.'</td>
				<td>'.$row->SSN.'</td>
				<td>'.$row->Name.'</td>
				<!--<td><button type="button" class="btn btn-primary" 
				id="buteditpeg2" value='.$row->USERID.' title="Edit Pegawai">Edit</button></td>-->
				'; 
			}
			echo '</tr></tbody></table>'; 
		}
	}
	// hapus pegawai 
	function hapuspegawai(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$tgl=date('Y-m-d H:i:s'); 
		$nama=$this->session->userdata('nama'); 
		$id=$this->input->post('id'); 
		$arr1=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
		'LogDescr'=>'Hapus Data pegawai'
		); 
		$sql=''; 
		for($i=0;$i<count($id);$i++){
			$kd=explode(';',$id[$i]); 
			$kd1=$kd[0]; 
			$sql.=$this->db->delete("USERINFO",array("USERID"=>$kd1)); 
		}
		if($sql){
			echo '1'; // berhasil dihapus
			$this->m_att->simpanlog($arr1);
		}else{
			echo '0'; // Penghapusan gagal
		}
		}
	}
	// refresh form pegawai 
	function butrefpegawai(){
		echo '<table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox" id="chkkaryaall" name="chkkaryaall"></input></td>
                                                <td>No.</td>
                                                <td>NIP/ NIK</td>
                                                <td>Nama</td>
                                                <th>Jenis Kelamin</td>
                                                <td>Jabatan</td>
                                                <td>Telp/ Hp</td>
                                                <td>Tanggal Lahir</td>
                                                <td>Tgl Masuk</td>
                                                <td>Alamat</th>
                                                <td>Pendidikan</td>
                                                <td>Departemen</td>
                                                <td>Pagkat/Gol</td>
                                                <td>Status</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>'; 
        $sql=$this->db->query('select * from viewpeg')->result_array();  
        $no=1; 
        foreach($sql as $row){
        	echo'<tr><td><input type="checkbox" id="chkkarya" class="chkkarya" name="chkkarya" 
                                          value='.$row['USERID'].'></input></td>
                                          <td>'.$no++.'</td>
                                          <td>'.$row['SSN'].'</td>
                                          <td>'.$row['Name'].'</td>
                                          <td>'.$row['Gender'].'</td>
                                          <td>'.$row['TITLE'].'</td>
                                          <td>'.$row['OPHONE'].'</td>
                                          <td>';
                                          
                                          if(!empty($row['BIRTHDAY'])){
                                            echo viewtglweb($row['BIRTHDAY']); 
                                          }else{
                                            echo ''; 
                                          }
                                          

                                          echo '</td>
                                          <td>';
                                          if(!empty($row['HIREDDAY'])){
                                            echo viewtglweb($row['HIREDDAY']); 
                                          }else{
                                            echo ''; 
                                          }
                                          echo '</td>
                                          <td>'.$row['street'].'</td>
                                          <td>'.$row['NAMAPEND'].'</td>
                                          <td>'.$row['DEPTNAME'].'</td>
                                          <td>'.$row['golongan'].'</td>
                                          <td>'.$row['NAMA_STTS'].'</td>
                                          <td>';
                                          echo '<button class="btn btn-primary" TITLE="Edit" id="buteditpeg" 
                                          value='.$row['USERID'].'
                                          class="buteditpeg">Edit</button>&nbsp;|&nbsp;<button type="button" id="showpoto" class="btn btn-success" value='.$row['USERID'].' style="background-color:rgba(166, 0, 38, 0.43);"><span class="glyphicon glyphicon-eye-open" style="cursor:pointer;" title="Show Photo" > </span></button>'; 
                                          echo '</td>';
        }
        echo '</tr></tbody></table>'; 
	}

	// save pegawai
	function savepegawai(){
		if($_POST){
				$kd=$this->input->post('noidbaru');	// no id baru
				$nama=strtoupper($this->input->post('namabarupeg')); // nama pegawai
				$nik=trim($this->input->post('nikbaru'));
				$pangkat=trim($this->input->post('pangbaru')); // pangkat golongan
				$jab=trim($this->input->post('jabbaru')); // jabatan
				$jk=$this->input->post('jkbaru'); // jenis kelamin
				$tglahir=$this->input->post('tglahirbaru'); // tgl lahir
				$pend=$this->input->post('pendbaru'); // pendidikan baru
				$foto=$this->input->post('fotopeg');
				$nope=$this->input->post('nopepeg'); // nope pegawai
				$alamat=$this->input->post('alamatbaru'); // alamat pegawai
				$stts=$this->input->post('stspeg'); // status pegawai

				if($_FILES['fotopeg']['name'] !=""){
				$config['upload_path'] = 'file/foto/';
				$config['allowed_types'] = 'jpg|png|jpeg|bmp';
				$config['max_size'] = '160000';
				$config['remove_spaces'] = true;
				$config['overwrite'] = true;
				$config['encrypt_name'] = true;
				$config['max_width']  = '';
				$config['max_height']  = '';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if ($this->upload->do_upload("fotopeg")) {
				$data	 	= $this->upload->data();

				/* PATH */
				$source             = "file/foto/".$data['file_name'] ;
				$destination_thumb	= "file/foto/" ;
				$destination_medium	= "file/foto/" ;

				// Permission Configuration
				chmod($source, 0777) ;

				/* Resizing Processing */
				// Configuration Of Image Manipulation :: Static
				$this->load->library('image_lib') ;
				$img['image_library'] = 'GD2';
				$img['create_thumb']  = TRUE;
				$img['maintain_ratio']= TRUE;

				/// Limit Width Resize
				$limit_medium   = 425 ;
				$limit_thumb    = 220 ;

				// Size Image Limit was using (LIMIT TOP)
				$limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;

				// Percentase Resize
				if ($limit_use > $limit_medium || $limit_use > $limit_thumb) {
				$percent_medium = $limit_medium/$limit_use ;
				$percent_thumb  = $limit_thumb/$limit_use ;
				}

				//// Making THUMBNAIL ///////
				$img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
				$img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;

				// Configuration Of Image Manipulation :: Dynamic
				$img['thumb_marker'] = '';
				$img['quality']      = '100%' ;
				$img['source_image'] = $source ;
				$img['new_image']    = $destination_thumb ;

				$this->image_lib->initialize($img);
				$this->image_lib->resize();
				$this->image_lib->clear() ;

				////// Making MEDIUM /////////////
				$img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
				$img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;

				// Configuration Of Image Manipulation :: Dynamic
				$img['thumb_marker'] = '';
				$img['quality']      = '100%' ;
				$img['source_image'] = $source ;
				$img['new_image']    = $destination_medium ;

				//$picture = $data['file_name'];

				// Do Resizing
				$this->image_lib->initialize($img);
				$this->image_lib->resize();
				$this->image_lib->clear() ;
				$picture= $data['file_name'];

				$fotopeg=$picture;
				$noid=$this->m_att->getmaxid();
				$data=array(
					'USERID'=>$noid,
					'SSN'=>$nik,
					'Name'=>$nama, 
					'PHOTO'=>$fotopeg
				);
				$sql4=$this->db->insert('USERINFO',$data);
				if($sql4){
					echo  '1'; // sukses melakukan penyimpanan
				}else{
					echo '0'; // Gagal melakukan penyimpanan
				}

			}


				}
				
		}
	}

	function savepeg1(){
			$akses=isLogin(); 
			if(empty($akses['nik'])){
				redirect('index.php/login/logout','location'); 
			}else{
			date_default_timezone_set('Asia/Jakarta'); 
			$tgllog=date('Y-m-d H:i:s'); 	
			$namalog=$this->session->userdata('nama'); 
			$arr12=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$namalog, 
			'Logtime'=>$tgllog, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Simpan Pegawai'
			); 
			$nip=trim($this->input->post('nikbaru')); 
			$nama=trim($this->input->post('namabarupeg')); 
			$pangkat=$this->input->post('pangbaru'); 
			$jabatan=$this->input->post('jabbaru'); 
			$jk=$this->input->post('jkbaru'); 
			$tglahir=tglinsertdata($this->input->post('tglahirbaru')); 
			$pendbaru=$this->input->post('pendbaru'); 
			$tglmskpeg=tglinsertdata($this->input->post('tglmskpeg')); 
			$nopepeg=$this->input->post('nopepeg'); 
			$stspeg=$this->input->post('stspeg'); 
			$alamat=$this->input->post('alamat'); 
			$dept=$this->input->post('deptbaru'); 
			$npwp=$this->input->post('npwpbaru'); 
			$sttskepe=$this->input->post('stspegdb'); 
			if(!empty($_FILES['fotopeg']['name'])){
			$acak=rand(00000000000,99999999999);
			$bersih=$_FILES['fotopeg']['name'];
			$nm=str_replace(" ","_","$bersih");
			$pisah=explode(".",$nm);
			$nama_murni_lama = preg_replace("/^(.+?);.*$/", "\\1",$pisah[0]);
			$nama_murni=date('Ymd-His');
			$ekstensi_kotor = $pisah[1];

			$file_type = preg_replace("/^(.+?);.*$/", "\\1", $ekstensi_kotor);
			$file_type_baru = strtolower($file_type);

			// proses sql 
			$sql=$this->db->query('select max("USERID")+1 as userid,cast(max("Badgenumber") as integer)+1 as badge  from public."USERINFO"'); 
			$userid=$sql->row()->userid; 
			//$badge=$sql->row()->bagde; 

			$ubah=$acak.'-'.$nama_murni; //tanpa ekstensi
			$n_baru = $ubah.'.'.$file_type_baru;

			$path="./file/foto/";
			//chmod($path, 777); 
			$config['upload_path']	= $path;
			$config['allowed_types']= 'gif|jpg|png|jpeg|bmp';
			$config['file_name'] = $n_baru;
			$config['remove_spaces']= true;
			$config['max_size']     = '50000';
			$config['max_width']  	= '10000';
			$config['max_height']  	= '10000';
			$this->load->library('upload', $config);
			$this->upload->initialize($config); 

			if($this->upload->do_upload('fotopeg')){
				$data = $this->upload->data();
				$source             = './file/foto/'.$data['file_name'] ;
				$destination_thumb	= './file/foto/' ;
				$destination_medium	= './file/foto/' ;
				chmod($source, 0777) ;

				$poto=$data['file_name']; 
				$arr=array(
					'USERID'=>$userid, 
					'Badgenumber'=>'1000', 
					'SSN'=>$nip, 
					'Name'=>$nama, 
					'DEFAULTDEPTID'=>$dept, 
					'PHOTO'=>$poto, 
					'BIRTHDAY'=>$tglahir, 
					'Gender'=>$jk, 
					'HIREDDAY'=>$tglmskpeg, 
					'OPHONE'=>$nopepeg, 
					'INLATE'=>'0', 
					'OUTEARLY'=>'0',
					'ATT'=>'1', 
					'street'=>$alamat, 
					'OVERTIME'=>'1', 
					'SEP'=>'1', 
					'HOLIDAY'=>'1', 
					'LUNCHDURATION'=>'1', 
					'privilege'=>$stspeg, 
					'JABATAN'=>$jabatan, 
					'IDPANGKAT'=>$pangkat, 
					'STTSKEPE'=>$sttskepe,
					'IDPENDIDIKAN'=>$pendbaru, 
					'npwp'=>$npwp
					); 
				$sql=$this->db->insert('USERINFO',$arr); 
				if($sql){
					echo "<script>alert('Berhasil disimpan');</script>";
					redirect('index.php/panel/tambahpegawai','Location'); 
					$this->m_att->simpanlog($arr12); 
				}

			}else{
				$error = array('error' => $this->upload->display_errors());
				//print_r($error);
				//exit();
				if($error){
					echo "<script>alert('Error...');</script>"; 
					exit(); 
				}
			}

			}
		}
	}
	// simpan administrator 
	function simpanadminbaru(){
		$kduser=$this->input->post('kduser'); 
		$sql=''; 
		for($i=0;$i<count($kduser);$i++){
			$id=explode(';',$kduser[$i]);
			$id2=$id[0];  
			$sql.=$this->db->update('USERINFO',array('SECURITYFLAGS'=>'15'),array('USERID'=>$id2)); 
		}
		if($sql){
			echo '1'; // berhasil melakukan update
		}else{
			echo '0'; // Gagal melakukan update
		}
	}

	function savepeg2(){
				$uploads_dir = './file/foto';
		        $name = $_FILES["fotopeg"]["name"];
		        $tmp_name = $_FILES["fotopeg"]["tmp_name"];
        		move_uploaded_file($tmp_name, "$uploads_dir/$name");
	}

	// data administrator
	function administrator(){
		$sql=$this->db->query('SELECT "USERID","Badgenumber","SSN", 
			"Name","SECURITYFLAGS", "DEFAULTDEPTID", "PASSWORD" FROM public."USERINFO" where "SECURITYFLAGS">0
			')->result_array();
		$sql6=$this->db->get('USERINFO')->result_array(); 
			$arr=array(
			'sql'=>$sql,
			'sql6'=>$sql6
			);
			$arr1=array(
			'id'=>'1', 	
			'name'=>'Mesin'
			); 
			$arr2=array(
				'array'=>$arr1
				); 
			$this->load->view('panel/modalaaksesadmin',$arr2); 
			$this->load->view('panel/modaladministrator',$arr); 
			$this->load->view('panel/head',$arr);
			$this->load->view('panel/administartor');
			$this->load->view('panel/footer');
			}
	//array hak akses 
	function arrayakses(){

	}		

	// refresh admin 
	function refadmin(){
		$sql=$this->db->query('SELECT "USERID","Badgenumber","SSN", 
			"Name","SECURITYFLAGS", "DEFAULTDEPTID", "PASSWORD" FROM public."USERINFO" where "SECURITYFLAGS">0
			');
		echo '<table id="example1" class="table table-bordered table-striped">
                       <thead>
                       <tr>
                       <td><input type="checkbox" id="chkadminall" name="chkadminall" class="chkadminall"></input></td>
                       <td>No.</td>
                       <td>NIP/NIK</td>
                       <td>NAMA</td>
                       <td>Aksi</td>
                    </tr>
                    </thead>
                <tbody>'; 
           $no=1;      
		foreach($sql->result() as $row){
			echo '<tr>
			<td><input type="checkbox" id="chkadmin" name="chkadmin" class="chkadmin" value="'.$row->USERID.'" /></td>
			<td>'.$no++.'</td>
			<td>'.$row->SSN.'</td>
			<td>'.$row->Name.'</td>
			<td><button name="buteditadm" id="buteditadm" class="btn btn-success" value="'.$row->Badgenumber.'">Edit Hak Akses</button></td>
			'; 
		}
		echo '</tr></tbody>
		</table>'; 
	}		
	// hapus administrator 
	function hapusadministrator(){
		$kduser=$this->input->post('kduser'); 
		$sql=''; 
		for($i=0;$i<count($kduser);$i++){
			$id=explode(';',$kduser[$i]); 
			$id2=$id[0]; 
			$sql.=$this->db->update('USERINFO',array('SECURITYFLAGS'=>'0'),array('USERID'=>$id2)); //'UPDATE public."USERINFO" set "SECURITYFLAGS"='."'0'".' where "USERID"='."'$id2'".''; 
		}
		//$query=$this->db->query($sql); 
		if($sql){
			echo '1'; // jika sudah berhasil di update
		}else{
			echo '0'; // jika gagal melakukan update
		}	

	}


	// function update jam kerja
	function formupdatejamkerja(){
		$id=$this->input->post('id');
		$sql=$this->db->query('SELECT "A"."SCHCLASSID","A"."SCHNAME","time" ("A"."STARTTIME") as jammasuk,
				"time"("A"."ENDTIME") as jampulang, "time"("A"."CHECKINTIME1") as mulaicin,
				"time"("A"."CHECKINTIME2") as akhircin, "time"("A"."CHECKOUTTIME1") as mulaicout,
				"time"("A"."CHECKOUTTIME2") as akhitcout, "A"."WorkDay" as hrkerja,
				"A"."COLOR" as warna
				FROM public."SCHCLASS" "A"');
		$r=$sql->row();
		echo '<div class="row">
		      <!-- left column -->
		      <div class="col-md-12">
		      <!-- general form elements -->
		      <div class="box box-primary">
		      <div class="box-header">
		      <h3 class="box-title"> <span class="label label-success">
			Update Data Pengaturan Jam Kerja </span>
					</h3>
		      </div><!-- /.box-header -->
		      <!-- form start -->
		      <form role="form" action="javascript:updjamkerja();" enctype="multipart/form-data" method="POST">
		      <div class="box-body">
		      <div class="form-group">
					<input type="hidden" value="'.$r->SCHCLASSID.'" id="idupdjamkerja" name="idupdjamkerja" />
		      <label for="exampleInputEmail1">Nama Jam Kerja</label>
		      <input type="text" value="'.$r->SCHNAME.'" name="nmjamkerjaupd" id="nmjamkerjaupd" class="form-control"
		      placeholder="Nama Jam Kerja" />
		      </div>
		      <div class="form-group">
		      <label for="exampleInputEmail1">Jam Masuk</label>
		      <input type="text" value="'.$r->jammasuk.'" name="jammasukkerjaupd" id="jammasukkerjaupd" class="form-control"
		      placeholder="Jam Masuk Kerja" readonly="true" style="cursor: pointer;" />
		      </div>
		      <div class="form-group">
		      <label for="exampleInputEmail1">Jam Pulang</label>
		      <input type="text" value="" name="jamplgkerjaupd" id="jamplgkerjaupd" class="form-control"
		      placeholder="Jam Pulang Kerja" readonly="true" style="cursor: pointer;" />
		      </div>
		      <div class="form-group">
		      <label for="exampleInputEmail1">Toleransi Terlambat (Menit)</label>
		      <input type="number" value="" name="tolterlambat" id="tolterlambat" class="form-control"
		      placeholder="Toleransi terlambat" readonly="false" style="cursor: pointer;" />
		      </div>
		      <div class="form-group">
		      <label for="exampleInputEmail1">Toleransi Pulang Cepat(Menit)</label>
		      <input type="number" value="" name="tolplgcpt" id="tolplgcpt" class="form-control"
		      placeholder="Toleransi Pulang Cepat" readonly="false" style="cursor: pointer;" />
		      </div>
					</div>
						<div class="box-footer">
		        <button type="submit" class="btn btn-primary">
		        Update
		        </button>
		        </div>
		        </form>
		        </div>
		        </div>
		  </div>';
	}
	// function departments
	function departments(){
		$sql=$this->db->query('select * from public."DEPARTMENTS" order by "DEPTID","SUPDEPTID" asc ')->result_array();
		$arr=array(
				'sql'=>$sql
		);
		$this->load->view('panel/modaleditdepart'); 
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/departments');
		$this->load->view('panel/footer');
	}
	// function refresh departments 
	function refreshdept(){
		echo '<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                <td></input></td> <!-- <input type="checkbox" name="chkdeptll" id="chkdeptll"> --> 
                <td>No.</td>
                <td>Departments</td>
                <td>Jumlah Pegawai</td>
                <td>Aksi</td>
                </tr>
                </thead>
                <tbody id="tbodydepartmen">'; 
        $sql=$this->db->query('select * from public."DEPARTMENTS" order by "DEPTID" asc ')->result_array();
        $no=1; 
        foreach($sql as $row){
        	echo '<tr>
        		<td><input type="checkbox" id="chkdept" name="chkdept" class="chkdept" 
             	value='.$row['DEPTID'].'/>
             	</input></td>   
                <td>'.$no++.'</td>
                <td>'.$row['DEPTNAME'].'</td>
                <td>'; 
        	 $sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$row['DEPTID']));
             $jlh=$sql->num_rows();  
             echo $jlh; 
             echo '</td>
             <td><button type="button" name="buteditdepart" id="buteditdepart" 
             value='.$row['DEPTID'].'|'.$row['DEPTNAME'].' class="btn btn-primary">
             Edit</button></td>
             '; 
        }        	

        echo '</tr></tbody></table>';         
	}

	// load grid departments 
	function loadgrid(){
	$sql=$this->db->query('select * from public."DEPARTMENTS" order by "DEPTID" asc '); 
	$no=1; 
	if($sql->num_rows()>0){
		echo '<tr>'; 
		foreach($sql->result() as $row){
		echo  '
               <td><input type="checkbox" id="chkdept" name="chkdept" class="chkdept" 
               value="'.$row->DEPTID.'" />
               </input></td>   
               <td>'.$no++.'</td>
               <td>'.$row->DEPTNAME.'</td>
               <td>'; 
               $sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$row->DEPTID));
               $jlh=$sql->num_rows();  
                echo $jlh; 
                echo '</td>
                <td><button type="button" name="buteditdepart" id="buteditdepart" value='.$row->DEPTID.'|'.$row->DEPTNAME.'
                class="btn btn-primary">
                Edit</button></td>
                </tr>'; 
		}
	}else{
		echo '<tr>----Data Kosong----</tr>'; 
	}
	}


	// hapus departments  1091871 081360169259 ishak ahmad  
	function hpsdepartments(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$nama=$this->session->userdata('nama'); 
		$tgl=date('Y-m-d H:i:s'); 	
		$kd=$this->input->post('kd'); 
		for($i=0;$i<count($kd);$i++){
			$kd1=explode(';',$kd[$i]); 
			$kd2=$kd1[0]; 
			$sql=$this->db->delete('DEPARTMENTS',array('DEPTID'=>$kd2)); 
		}
		$arr=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Hapus Departments'
			); 
		if($sql){
			echo '1'; // berhasil dihapus
			$this->m_att->simpanlog($arr); 
		}else{
			echo '0'; // gagal melakukan penghapusan 
		}
		}
	}
	// update departments 
	function upddepartment(){
		$kd=$this->input->post('kd'); 
		$unit=$this->input->post('unit'); 
		$par=$this->input->post('paren'); 
		$arr=array(
			'DEPTNAME'=>$unit, 
			'SUPDEPTID'=>$par
			); 
		$sql=$this->db->update('DEPARTMENTS',$arr,array('DEPTID'=>$kd)); 
		if($sql){
			echo '1'; // jika berhasil di update
		}else{
			echo '0'; // gagal melakukan update
		}

	}
	// hapus libur umum 
	function delhrliburumum(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		$nama1=$this->session->userdata('nama'); 
		date_default_timezone_set('Asia/Jakarta'); 
		$tgl=date('Y-m-d H:i:s'); 
		$kd=$this->input->post('kd'); 
		$sql=''; 
		for($i=0;$i<count($kd);$i++){
			$kd1=explode(';',$kd[$i]); 
			$kd2=$kd1[0]; 
			$sql=$this->db->delete('HOLIDAYS',array('HOLIDAYID'=>$kd2)); 
		}
		$arr=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama1, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'', 
			'LogTag'=>0, 
			'LogDescr'=>'Hapus Hari Libur Umum'
			); 
		if($sql){
			echo '1'; // berhasil di simpan 
			$this->m_att->simpanlog($arr); 
		}else{
			echo '0'; //  penyimpanan Gagal 
		}
		}
	}

	// data grafik
	function dtgrafik(){
		$label=array("JAN","FEB","MARET","APRIL");
		$data=array(100,2000,3000,4000);
		$dt_json=array('label'=>$label,'data'=>$data);
		echo json_encode($dt_json);
	}
	// penilaian
	function pagepenilaian(){
		$sql=$this->db->query('SELECT "a"."USERID", "a"."Badgenumber",
"a"."SSN" as nip, "a"."Name","c"."NAMAPEND" from public."USERINFO" "a" left join
public."USERDETAIL" "b" on "a"."USERID"="b"."USERID"
left join public."PENDIDIKAN" "c" on "b"."IDPENDIDIKAN"="c"."IDPENDIDIKAN"')->result_array();
$arr=array(
	'sql'=>$sql
);
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/penilaian');
		$this->load->view('panel/footer');
	}
	// page pendidikan
	function pagependidikan(){
		$sql=$this->db->query('SELECT * FROM public."PENDIDIKAN" order by "PENDIDIKAN"."IDPENDIDIKAN"')->result_array();
		$arr=array(
				'sql'=>$sql
		);
		$this->load->view('panel/head',$arr);
		$this->load->view('panel/pendidikan');
		$this->load->view('panel/footer');
	}
	// function master pendidikan
	function formpendidikan(){
		echo '<div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> <span class="label label-success">Tambah Master pendidikan</span>
                                    </h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="" enctype="multipart/form-data" method="POST">
                                    <div class="box-body">
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Pendidikan</label>
                                             <input type="text" value="" name="namapendidikan" id="namapendidikan" class="form-control"
                                             placeholder="Pendidikan" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Skor</label>
                                             <input type="text" value="" name="skorpend" id="skorpend" class="form-control"
                                             placeholder="Skor" />
                                        </div>
                                        </div>
    <div class="box-footer">
    <button type="button" class="btn btn-primary" onClick="simpanpend();">
    Simpan
    </button>
    </div>
    </form>
    </div>
    </div>
    </div>';
	}
// hapus pendidikan 
	function hpspend(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		$idpend=$this->input->post('idpend'); 
		$sql=''; 	
		for($i=0;$i<count($idpend);$i++){
			$id1=explode(';',$idpend[$i]); 
			$id2=$id1[0]; 
			$sql.=$this->db->delete('PENDIDIKAN',array('IDPENDIDIKAN'=>$id2)); 
		}
		date_default_timezone_set('Asia/Jakarta'); 
		$nama=$this->session->userdata('nama'); 
		$tgl=date('Y-m-d H:i:s'); 
			$arr=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Hapus Data Pendidikan'
			);

		if($sql){
			echo '1'; // berhasil dihapus
			$this->m_att->simpanlog($arr);
		}else{
			echo '0'; // penghapusan gagal
		}
		}
	}

// form update pendidikan
function formupdpendi(){
	$kodependi=$this->input->post('kd');
	$nm=$this->input->post('nm');
	$skor=$this->input->post('skor'); 
	echo '<div class="row">
		<!-- left column -->
		<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
		<div class="box-header">
		<h3 class="box-title"> <span class="label label-success">Update Master pendidikan</span>
		</h3>
		</div><!-- /.box-header -->
		<!-- form start -->
		<form role="form" action="javascript:upsimpend(); " enctype="multipart/form-data" method="POST">
		<div class="box-body">
		<div class="form-group">
		<input type="hidden" id="idpendupd" name="idpendupd" value="'.$kodependi.'" />
		<label for="exampleInputEmail1">Pendidikan</label>
		<input type="text"  name="namapendupd" id="namapendupd" value="'.$nm.'" class="form-control"
		placeholder="Pendidikan" />
		</div>
		<div class="form-group">
		<label for="exampleInputEmail1">Skor</label>
		<input type="text"  name="skopupdpend" id="skopupdpend" value="'.$skor.'" class="form-control"
		placeholder="Skor" />
		</div>
		</div>
	<div class="box-footer">
	<button type="submit" class="btn btn-primary">
	Update
	</button>
	</div>
	</form>
	</div>
	</div>
	</div>';
}

// refresh pendidikan 
function refpendidikan(){
	$sql=$this->db->get('PENDIDIKAN')->result_array(); 
	echo '<table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td style="text-align:center; width:5%;"><input type="checkbox" id="chkpendall" 
                                                name="chkpendall"></input></td>
                                                <td  style="text-align:center; width:5%;">No.</td>
                                                <td  style="text-align:center; width:15%;">Kode Pendidikan</td>
                                                <td   style="text-align:center;">Pendidikan</td>
                                                <td style="text-align:center;">Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>'; 
   $no=1; 
   foreach($sql as $row){
   	echo '<tr>
          <td  style="text-align:center; width:5%;"><input type="checkbox" 
          id="chkpend" class="chkpend" name="chkpend" value='.$row['IDPENDIDIKAN'].'></input></td>
          <td  style="text-align:center; width:5%;">'.$no++.'</td>
          <td   style="text-align:left; width:15%;">'.$row['IDPENDIDIKAN'].'</td>
          <td>'.$row['NAMAPEND'].'</td>
          <td><button type="button" class="btn btn-primary" title="Edit"
          value='.$row['IDPENDIDIKAN'].'|'.$row['NAMAPEND'].' id="btneditpend">Edit</button></td>'; 
   }
   echo '</tr></tbody>
                                    </table>';                                      
}

	// function penyimpanan pendidikan
	function simpanpendidikan(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$nama=$this->session->userdata('nama');
		$tgl=date('Y-m-d H:i:s');  
		$idpend=getkdpendi();
		$pend=strtoupper($this->input->post('pend'));
		$skor=$this->input->post('skor'); 
		$arr=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Simpan Pendidikan'
			); 

		$sql=array(
			'IDPENDIDIKAN'=>$idpend,
			'NAMAPEND'=>$pend, 
			'skor'=>$skor
		);
		$sql1=$this->db->insert("PENDIDIKAN",$sql);
		if($sql1){
			echo '1'; // sukes melakukan penyimpanan
			$this->m_att->simpanlog($arr); 
		}else{
			echo '0'; // Gagal melakukan penyimpanan
		}
		}
	}
	// proses update pendidikan
	function updpendidikan(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$tgl=date('Y-m-d H:i:s'); 
		$nama=$this->session->userdata('nama'); 
		$arr1=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Update pendidikan'
			); 

		$id=$this->input->post('id');
		$nm=strtoupper($this->input->post('nm'));
		$skor=$this->input->post('skor'); 
		$arr=array(
			'NAMAPEND'=>$nm, 
			'skor'=>$skor
		);
		$sql=$this->db->update('PENDIDIKAN',$arr,array('IDPENDIDIKAN'=>$id));
		if($sql){
			echo '1'; // berhasil melakukan update
			$this->m_att->simpanlog($arr1);
		}else{
			echo '0'; // gagal melakukan update
		}
		}
	}

	// form master departments
	// function master pendidikan
	function formdepartments(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$nama=$this->session->userdata('nama'); 
		$iddept=$this->input->post('id');
		$tgl=date('Y-m-d H:i:s'); 
		$arr=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'', 
			'LogTag'=>0, 
			'LogDescr'=>'Form Tambah Departments'
			); 
		$this->m_att->simpanlog($arr); 
		for($i=0;$i<count($iddept);$i++){
			$id2=explode(';',$iddept[$i]); 
			$id3=$id2[0]; 
		}
		if(empty($id3)){
			$id4=0; 
		}else{
			$id4=$id3; 
		}
		echo '<div class="row">
			<!-- left column -->
			<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-primary">
			<div class="box-header">
			<h3 class="box-title"> <span class="label label-success">Tambah Departments</span>
			</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			<form role="form" action="javascript:simpandepart(); " enctype="multipart/form-data" method="POST">
			<div class="box-body">
			<div class="form-group">
			<label for="exampleInputEmail1">Nama Departments</label>
			<input type="text" value="" name="namadepart" id="namadepart" class="form-control"
			placeholder="Departments" />
			</div>
			<div class="form-group">
			<input type="hidden" value="'.$id4.'" name="idatasdept" id="idatasdept" class="form-control"
			placeholder="Departments" />
			</div>

			</div>
		<div class="box-footer">
		<button type="submit" class="btn btn-primary">
		Simpan
		</button>
		</div>
		</form>
		</div>
		</div>
		</div>';
		}
	}

	// function simpan departments
	function simpandepart(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$nama1=$this->session->userdata('nama'); 
		$tgl=date('Y-m-d H:i:s'); 	
		$arr1=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama1, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'', 
			'LogTag'=>0, 
			'LogDescr'=>'Simpan Departments'
			); 
		$sql=$this->db->query('select max(a."DEPTID")+1 as id from public."DEPARTMENTS" a');
		$namadepart=trim($this->input->post('nama'));
		$sup=(int) $this->input->post('sup'); 
		$r=$sql->row();
		if($r->id=="" || $r->id=="NULL"){
			$id2='1';
			$arr=array(
				'DEPTID'=>$id2,
				'DEPTNAME'=>$namadepart, 
				'SUPDEPTID'=>$sup
			);
			$sql=$this->db->insert("DEPARTMENTS",$arr);
			if($sql){
				echo '1'; // jika berhasila melakukan penyimpanan
			}else{
				echo '0';  // jika gagal melakukan penyimpanan
			}
		}else{
			$arr=array(
				'DEPTID'=>$r->id,
				'DEPTNAME'=>$namadepart,
				'SUPDEPTID'=>$sup
			);
			$sql=$this->db->insert('DEPARTMENTS',$arr);
			$this->m_att->simpanlog($arr1); 
			if($sql){
				echo '1'; // jika berhasil melakukan penyimpanan
			}else{
				echo '0'; // jika gagal melakukan penyimpanan
			}
		}
		}
	}
	function datapresensi(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login','location'); 
		}else{
		$this->load->view('panel/head');
		$this->load->view('panel/datapresensi');
		$this->load->view('panel/footer');
		}		
	}
	// view highchart 
	function chart(){
		$data=array();
		foreach($this->m_att->get()->result_array() as $row)
			$data[] = (int) $row['hasil'];
		$this->load->view('panel/hightchart',array('data'=>$data)); 
	}

// simpan  jam kerja pegawai 
	function simpankerja(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$namalog=$this->session->userdata('nama'); 
		$tgllog=date('Y-m-d H:i:s'); 
		$arr3=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$namalog, 
			'Logtime'=>$tgllog, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Simpan master jam kerja'
		); 	

		$getid=$this->db->query('select max(a."SCHCLASSID")+1 as id from public."SCHCLASS" a limit 1');
		if($getid->row()->id=='NULL' || $getid->row()->id==''){
			$id2='1'; 
		}else{
			$id2=$getid->row()->id; 
		}
		$name=trim($this->input->post('name')); 
		$stime=date('Y-m-d').' '.$this->input->post('stime'); // start time 
		$entime=date('Y-m-d').' '.$this->input->post('entime'); // endtime 
		$lateminute=$this->input->post('lateminute'); // late minutes 
		$early=$this->input->post('early'); 
		$checkin=$this->input->post('checkin'); 
		$checkout=$this->input->post('checkout'); 
		$checktime=date('Y-m-d').' '.$this->input->post('checkintime1');
		$checktime2=date('Y-m-d').' '.$this->input->post('checkintime2'); // check in time2 
		$checkouttime1=date('Y-m-d').' '.$this->input->post('checkouttime1');  
		$checkouttime2=date('Y-m-d').' '.$this->input->post('checkouttime2'); 
		$checkin1=$this->input->post('workday'); //=='on' ? 1 :0; 
		$checkout1=$this->input->post('workmins');// =='on' ? 1 : 0; 
		$kd=$this->input->post('kd'); 
		if(empty($kd)){
		$arr=array(
			'SCHCLASSID'=>$id2, 
			'SCHNAME'=>$name, 
			'STARTTIME'=>$stime, 
			'ENDTIME'=>$entime, 
			'LATEMINUTES'=>$lateminute, 
			'EARLYMINUTES'=>$early, 
			'CHECKIN'=>$checkin1, 
			'CHECKOUT'=>$checkout1,
			'CHECKINTIME1'=>$checktime, 
			'CHECKINTIME2'=>$checktime2, 
			'CHECKOUTTIME1'=>$checkouttime1, 
			'CHECKOUTTIME2'=>$checkouttime2, 
			'WorkDay'=>'1', 
			'WorkMins'=>'1'
			); 
		$sql=$this->db->insert("SCHCLASS",$arr); 
		if($sql){
			echo '1'; // jika berhasil disimpan 
			$this->m_att->simpanlog($arr3); 
		}else{
			echo '0'; // jika penyimpanan Gagal 
		}
	}else{
		$sql=$this->db->query('update public."SCHCLASS" set "SCHNAME"='."'$name'".',
			"STARTTIME"='."'$stime'".',"ENDTIME"='."'$entime'".',"LATEMINUTES"='."'$lateminute'".', 
			 "EARLYMINUTES"='."'$early'".',"CHECKIN"='."'$checkin1'".', 
			  "CHECKOUT"='."'$checkout1'".',"CHECKINTIME1"='."'$checktime'".', 
			   "CHECKINTIME2"='."'$checktime2'".', 
			   "CHECKOUTTIME1"='."'$checkouttime1'".', "CHECKOUTTIME2"='."'$checkouttime2'".' where "SCHCLASSID"='."'$kd'".'');  //'."'$type'".'
		if($sql){
			echo '3'; 
			$this->m_att->simpanlog($arr3); 
		}else{
			echo '4'; 
		}
		}
	}
	}

	// function simpan 
	function simpanshiftbaru(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$namalog=$this->session->userdata('nama'); 
		$tgllog=date('Y-m-d H:i:s'); 
		$arr3=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$namalog, 
			'Logtime'=>$tgllog, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Simpan Shift Baru'
		); 


		$sql=$this->db->query('select max("NUM_RUNID")+1 as kode from public."NUM_RUN"'); 
		$id=$sql->row()->kode; 
		$nama=$this->input->post('nama'); 
		$tgmulai=$this->input->post('tgl').' 00:00:00'; 
		$enddate='2200-12-31 00:00:00'; 
		$cyle='1'; 
		$oldid='-1'; 
		$unit=$this->input->post('unit'); 
		$arr=array(
			'NUM_RUNID'=>$id, 
			'OLDID'=>$oldid, 
			'NAME'=>$nama, 
			'STARTDATE'=>$tgmulai, 
			'ENDDATE'=>$enddate, 
			'CYLE'=>$cyle, 
			'UNITS'=>$unit
			); 
		$sql=$this->db->insert('NUM_RUN',$arr); 
		if($sql){
			echo '1|'; // sukses melakukan penyimpanan 
			$this->m_att->simpanlog($arr3);
		}else{
			echo '0|'; // Gagal melakukan penyimpanan 
		}
		}
	}
	// simpan jadwal sementara 
	function simpansementara(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 
		$namalog=$this->session->userdata('nama'); 
		$tgllog=date('Y-m-d H:i:s'); 

		$iduser=$this->input->post('iduser'); 
		$iduser2=explode(',',$iduser); 
		$cometime=$this->input->post('cometime'); 
		$jam=$this->input->post('jam'); 
		$jam1=substr($jam,12,10); 
		$jam2=substr($jam,33,40); 
		$come1=$this->input->post('come1'); 
		$leavetime=$this->input->post('leavetime'); 
		$type=$this->input->post('type'); 
		//$flag=$this->input->post('flag'); 
		$schclass=(int) $this->input->post('schclass');
		//$overtime=$this->input->post('overtime'); 
		$arr3=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$namalog, 
			'Logtime'=>$tgllog, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Simpan Jadwal sementara'
			); 
		$this->m_att->simpanlog($arr3); 
		$sql=''; 
		for($i=0;$i<count($cometime);$i++){
			$id2=explode(';', $cometime[$i]); 
			$id3=$id2[0]; 
			$id4=tglinsertdata(substr($id3,0,10));
			for($j=0;$j<count($iduser2);$j++){
				$id8=explode(';',$iduser2[$j]); 
				$id9=$id8[0]; 
			$arr=array(
			'USERID'=>$id9, 
			'COMETIME'=>$id4.' '.$jam1, 
			'LEAVETIME'=>$id4.' '.$jam2 ,//$leavetime, 
			'TYPE'=>$type, 
			'FLAG'=>1, 
			'SCHCLASSID'=>$schclass, 	
			'OVERTIME'=>0
			);  
			$sql=$this->m_att->simpanjdwalsemntra($arr);
			}
			if($sql){
				echo '1';  // berhasil melakukan penyimpanan
			}else{
				echo '0'; // Gagal melakukan penyimpanan
			}

		}

		 
		//return $sql; 
		}
	}
	//function get array jadwal sementara 
	function getarraysementara(){
		$iduser=$this->input->post('iduser'); 
		$cometime=$this->input->post('cometime'); 
		$arr=array(

		); 
	}



	// update shift pegawai 
	function updateshift(){
		$id=$this->input->post('kd'); 
		$nama=$this->input->post('nama'); 
		$tgmulai=$this->input->post('tgl'); 
		$unit=$this->input->post('unit'); 
		$cyle='1'; 
		$oldid='-1'; 
		$arr=array( 
			'OLDID'=>$oldid, 
			'NAME'=>$nama, 
			'STARTDATE'=>$tgmulai, 
			'ENDDATE'=>$enddate, 
			'CYLE'=>$cyle, 
			'UNITS'=>$unit
			); 	
		$sql=$this->db->update('NUM_RUN',$arr,array('NUM_RUNID'=>$id)); 
		if($sql){
			echo '1'; // sukses melakukan update 
		}else{
			echo '0'; // Gagal melakukan udpate 
		}
	}

	// function get data pegawai jadwal shift 
	function getjdwalshift(){
		$kdunit=$this->input->post('kdunit'); 
		$arr=array(); 
		$tgl1=tglinsertdata($this->input->post('tgl1')); 
		$tgl2=tglinsertdata($this->input->post('tgl2')); 
		$sql=$this->m_att->getjdwalpeg($kdunit,$tgl1,$tgl2);
		echo '<table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th><input type="checkbox" id="chkpegjdwalall" name="chkpegjdwalall" class="chkpegjdwalall"></input></th>
                <th>No</th>
                <th>No.ID</th>
                <th>Nama</th>
                <th>Sch.Shift</th>
                <th>Tgl Mulai</th>
                <th>Tgl Berakhir</th>
                <th>Jadwal Tidak Tetap</th>
                <th>Unit Periode</th>
                </tr>
                </thead>
                <tbody id="jdwalbodychk" class="jdwalbodychk" name="jdwalbodychk">'; 
		if($sql->num_rows()>0){
			$no=1; 
		foreach($sql->result_array() as $row){
			echo '<tr id="trjdwalpeg">
			<td><input type="checkbox" id="chkpegjdwal1" name="chkpegjdwal1" class="chkpegjdwal1"
			value="'.$row['USERID'].'" /></td>
			<td>'.$no++.'</td>
			<td>'.$row['USERID'].'</td>
			<td>'.$row['fusername'].'</td>'; 
			$sqr=$this->m_att->getschpegawai($row['USERID']); 
			if($sqr->num_rows()>0){
				$idjd=$sqr->row()->SCHCLASSID; 
				$nmjd=$sqr->row()->SCHNAME; 
				$cm1=viewtglweb($sqr->row()->COMETIME);
				//$CM2=viewtglweb($SQR->ROW()->viewtglweb) 
			}else{
				$idjd='';  
				$nmjd=''; 
				$cm1=''; 
			}
			echo '<td>'.$row['NUM_RUNID'].'-'.$row['fshiftname'].'<br />'.$idjd.'-'.$nmjd.'</td>
			<td>'; 
			if(!empty($row['fstartdate'])){
				echo viewtglweb($row['fstartdate']); 
				echo '<br />'.$cm1; 
			}else{
				echo ''; 
				echo '<br />'.$cm1; 
			}	
			//.$row['fstartdate'].

			echo '</td>
			<td>&nbsp;</td>
			<td>'; 
			if(!empty($row['fenddate'])){
				echo viewtglweb($row['fenddate']); 
			}else{
				echo ''; 
			}
			//.$row['fenddate'].

			echo '</td>
			<td>';
			if($row['fshiftunit']=='1'){
				echo 'Minggu'; 
			}else if($row['fshiftunit']=='2'){
				echo 'Bulan'; 
			}else if($row['fshiftunit']=='0'){
				echo 'Hari'; 
			}
			echo '</td>'; 
		}
		echo '</tr>'; 
	}else{
		echo '<tr>
		<td colspan="9">--Data Kosong--</td></tr>'; 
	} 
	echo '</tbody>
                </table>';  
	}

	// function gettanggan indonesia 
	function gettglindo($tanggal){
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
    $sql=$daylist[$day];
    return $sql;  
	}

	//get jadwal tidak tetep 
	function gettbjdwltdkttp(){
		//$kduser=$this->input->post('kduser'); 
		$tgl1=tglinsertdata($this->input->post('tgl1'));
		$tgl2=tglinsertdata($this->input->post('tgl2'));  
		$tgl18=$this->getday($tgl1);  // tgl1 
        $tgl19=$this->getday($tgl2);
		echo '<table id="example3" class="table table-bordered table-striped" style="font-size: 10px;">
             <thead>
               <tr>
                 <td style="width: 10%;"><input type="hidden" id="chktglrange" name="chktglrange" 
                 class="chktglrange"></input></td>
                 <td>&nbsp;</td>
               </tr>
             </thead>
             <tbody>'; 
        for ($i=$tgl18-1;$i<=$tgl19-1;$i++){
        	$tgl20=$tgl1;
        	echo '<tr>
        	<td><input type="checkbox" id="chktglr" name="chktglr" class="chktglr" 
        	value="'.date('d-m-Y', strtotime('+'.$i.'days', $tgl18)).'-'.$this->gettglindo(date('d-m-Y', strtotime('+'.$i.'days', strtotime($tgl20)))).'"></input></td>
        	<td>'.date('d-m-Y', strtotime('+'.$i.'days', $tgl18)).'-'.$this->gettglindo(date('d-m-Y', strtotime('+'.$i.'days', strtotime($tgl20)))).
			'</td>
        	'; 
        }
         echo '</tr></tbody>
             </table>'; 

	}

	// get array Jaga Sementara 
	function getarrayjagasmentara(){
		$userid=$this->input->post('userid'); 
		$cometime=$this->input->post('cometime'); 
		$leavetime=$this->input->post('leavetime'); 

	}

  	
  	function getday($tgl){
  		$sql=date('d-m-Y',strtotime($tgl)); 
  		return  (int) $sql;
  	}


  	// getmonth 
  	function getmonth($tgl){
  		$sql=date('d-m',strtotime($tgl)); 
  		return  $sql; 
  	}

  	// test convert 
  	function convtgl($tgl,$hari){
  		$tgl=date('d-m-Y', strtotime('+'.$hari.'days', strtotime($tgl))); 
  		echo $tgl; 
  	}


  	// simpan jadwal pegawai 
  	function simpanjadwalpeg(){
  		$kduser= $this->input->post('kduser');
  		$runid=(int) $this->input->post('runid');  
  		$tgl1=tglinsertdata($this->input->post('tgl1')); 
  		$tgl2=tglinsertdata($this->input->post('tgl2')); 
  		$db=''; 
  		$sql=''; 
  		for($i=0;$i<count($kduser);$i++){
  			$kd1=explode(';',$kduser[$i]); 
  			$kd2=$kd1[0]; 
  			$arr=array(
  				'USERID'=>$kd2, 
  				'NUM_OF_RUN_ID'=>$runid, 
  				'STARTDATE'=>$tgl1, 
  				'ENDDATE'=>$tgl2, 
  				'ISNOTOF_RUN'=>0, 
  				'ORDER_RUN'=>0
  				); 
  			//$db.=$this->db->get_where('USER_OF_RUN',array('USERID'=>$kd2,'NUM_OF_RUN_ID'=>$runid)); 
  			//$this->db->insert('test1',array('test'=>$kd2)); 
  			//if($db->num_rows()>0){
  				$this->db->delete('USER_OF_RUN',array('USERID'=>$kd2,'NUM_OF_RUN_ID'=>$runid)); 
  				$sql.=$this->db->insert('USER_OF_RUN',$arr); 
  			//}else{
  				
  			//}
  		}
  		if($sql){
  			echo '1'; // Berhasil disimpan
  		}else{
  			echo '0'; // Penyimpanan gagal 
  		}
  		
  	}
  	// get data pegawai to data presensi 
  	function getdtpresensi(){
  		$id=$this->input->post('id'); 
  		$sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$id)); 
  		foreach($sql->result() as $row){
  			echo '<option="'.$row->USERID.'">'.$row->Name.'</option>'; 
  		}
  	}

  	function datapresensi1(){
  		$iduser=trim($this->input->post('iduser')); 
		$tgl1=tglinsertdata($this->input->post('tgl1')); 
		$tgl2=tglinsertdata($this->input->post('tgl2')); 
		date_default_timezone_set('Asia/Jakarta'); 
		$sqlp=$this->db->query('select count("ID")+1 as jlh from public."SystemLog"'); 
		$logtime=date('Y-m-d H:i:s'); 
		$arr=array(
			'ID'=>$sqlp->row()->jlh, 
			'Operator'=>$this->session->userdata('nama'), 
			'Logtime'=>$logtime, 
			'MachineAlias'=>'', 
			'LogTag'=>'0', 
			'LogDescr'=>'Tampilkan Data presensi'
			); 
		$this->m_att->simpanlog($arr); 
		$sql=$this->m_att->getdatapresensi($tgl1,$tgl2,$iduser); 
		echo '<table id="example1" class="table table-bordered table-striped">
                <thead>
                   <tr>
                   <td style="text-align:center; width:5%;"><input type="checkbox" id="chkgolong" name="chkgolong"></input></td>
                   <td  style="text-align:center; width:5%;">No.</td>
                   <td  style="text-align:center; width:15%;">Department</td>
                   <td   style="text-align:center;">Name</td>
                   <td   style="text-align:center;">NO ID</td>
                   <td style="text-align: center;">Date/time</td>
                   <td style="text-align:center;">Status</td>
                   <td style="text-align: center;">Location ID </td>
                   <td style="text-align: center;">ID Number</td>
                   <td style="text-align: center;">VerifyCode</td>
                   <td style="text-align: center;">Card NO</td>
                </tr>
                </thead>
                <tbody>'; 
		if($sql->num_rows()>0){
			$no=1; 
			foreach($sql->result() as $row){
				echo '<tr>
				<td  style="text-align:center; width:5%;"><input type="checkbox" id="chkgolong" name="chkgolong"></input></td>
                <td  style="text-align:center; width:5%;">'.$no++.'</td>
                <td   style="text-align:left; width:15%;">'.$row->DEPTNAME.'</td>
                <td>'.$row->Name.'</td>
                <td>'.$row->pin.'</td>
                <td>'.$row->CHECKTIME.'</td>
                <td>'.$row->checktype1.'</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
				'; 
			}
			echo '</tr>'; 
		}
		echo '</tbody></table>'; 
  	}

  	// cek apakah ada jadwal normal atau hanya sementraa 
  	function cekjadwal(){
  		$iduser=$this->input->post('iduser'); 
  		$tgl1=tglinsertdata($this->input->post('tgl1')); 
  		$sql=$this->m_att->getshcedulenormal($iduser,$tgl1); 
  		if($sql->num_rows()>0){
  			echo '1'; // jika record sudah ada 
  		}else{
  			echo '0'; // jika record kosong 
  		}
  	}
  	  	function tesjam($jam1,$jam2,$hsl0){
  		//$arr=array();
  		$hsl='';  
  		$hsl2='';  
  		$hsl3='';
  		$hsl4='';  
  		$hsl5=''; 
  		$hsl6=''; 
  		$hsl7=''; 
  		$hsl8=''; 
  		$hsl9=''; 
  		$arr=''; 
  		$jam11=(int) substr($jam1,0,2); 
  		if(!empty($jam2)){ //if(substr($jam2,0,2)=='16'){
  			$arr.=readjam($jam11,$jam2); 
  			$hsl.=$arr[1];   // 8
  			$hsl2.=$arr[3];   // 9
  			$hsl3.=$arr[5].$arr[6]; // 10 
  			$hsl4.=$arr[8].$arr[9];  //11
  			$hsl5.=$arr[11].$arr[12]; // 12    
  			$hsl6.=$arr[14].$arr[15]; // 13
  			$hsl7.=$arr[17].$arr[18];// 14 
  			$hsl8.=$arr[20].$arr[21]; // 15
  			$hsl9.=$arr[23].$arr[24]; // 16
  		}	
  		//echo $arr;
  		//echo $hsl9;  
  		if($hsl=$hsl0){
  			return 'style="background-color:#3C8DBC;color:white; border-width:0px;"'; 
  		}else if($hsl2=$hsl0){
  			return 'style="background-color:#3C8DBC;color:white; border-width:0px;"'; 
  		}else if($hsl3=$hsl0){
  			return 'style="background-color:#3C8DBC;color:white; border-width:0px;"'; 
  		}else if($hsl4=$hsl0){
  			return 'style="background-color:#3C8DBC;color:white; border-width:0px;"'; 
  		}else if($hsl5=$hsl0){
  			return 'style="background-color:#3C8DBC;color:white; border-width:0px;"'; 
  		}else if($hsl6=$hsl0){
  			return 'style="background-color:#3C8DBC;color:white; border-width:0px;"'; 
  		}else if($hsl7=$hsl0){
  			return 'style="background-color:#3C8DBC;color:white; border-width:0px;"';  
  		}else if($hsl8=$hsl0){
  			return 'style="background-color:#3C8DBC;color:white; border-width:0px;"'; 
  		}else if($hsl9=$hsl0){
  			return 'style="background-color:#3C8DBC;color:white; border-width:0px;"'; 
  		}
  	}

  	  	// test publish jam 
  	function jam($jam1,$jam2,$hsl10){
  		//$arr=array();
  		$hsl='';  
  		$hsl2='';  
  		$hsl3='';
  		$hsl4='';  
  		$hsl5=''; 
  		$jam11=(int) substr($jam1,0,2); 
  		if(substr($jam2,0,2)=='08'){
  			$arr=readjam($jam11,24); 
  			$hsl.=$arr[1].$arr[2];  
  			$hsl2.=$arr[4].$arr[5]; 
  			$hsl3.=$arr[7].$arr[8]; 
  			$hsl4.=$arr[10].$arr[11]; 
  			$hsl5.=$arr[13].$arr[14]; 
  			//echo $arr;    
  		}	
  		if($hsl==$hsl10){
  			return 'style="background-color:#3C8DBC; border-width:0px;"'; 
  		}else if($hsl2=$hsl10){
  			return 'style="background-color:#3C8DBC; border-width:0px;"'; 
  		}else if($hsl3=$hsl10){
  			return 'style="background-color:#3C8DBC; border-width:0px;"'; 
  		}else if($hsl4=$hsl10){
  			return 'style="background-color:#3C8DBC; border-width:0px;"'; 
  		}else if($hsl5=$hsl10){
  			return 'style="background-color:#3C8DBC; border-width:0px;"'; 
  		}else{
  			return 'style="background-color:white; border-width:0px;"'; ; 
  		}
  		//echo $arr; 

  	}

  	// get temp schedule 
  	function getarraytempshcedule(){
  		$user=$this->input->post('userid'); 
  		$tgl1=tglinsertdata($this->input->post('tgl1'));  //cometime
  		date_default_timezone_set('Asia/Jakarta'); 
  		$sql=$this->m_att->getschsementara($user,$tgl1); 
  		if($sql->num_rows()>0){
  			echo '<table id="example7" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><input type="checkbox" id="jdwalkerjapegall" name="jdwalkerjapegall" 
                    class="jdwalkerjapegall"></input></th>
                    <th>Tanggal</th>
                    <th>0</th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5</th>
                    <th>6</th>
                    <th>7</th>
                    <th>8</th>
                    <th>9</th>
                    <th>10</th>
                    <th>11</th>
                    <th>12</th>
                    <th>13</th>
                    <th>14</th>
                    <th>15</th>
                    <th>16</th>
                    <th>17</th>
                    <th>18</th>
                    <th>19</th>
                    <th>20</th>
                    <th>21</th>
                    <th>22</th>
                    <th>23</th>
                    <th>24</th>
                    </tr>
                    </thead>
                    <tbody>'; 
            foreach($sql->result() as $row){
            		$tglhsl=viewtglweb($row->COMETIME); 
            		$tglhsl2=viewtglweb($row->LEAVETIME); 
            		$jam1=substr(getjamweb($row->COMETIME),0,2); 
            		$jam2=substr(getjamweb($row->LEAVETIME),0,2); 
            		echo '<tr>
            		<td><input type="checkbox" id="jdwalkerjapeg" name="jdwalkerjapeg" class="jdwalkerjapeg" 
            		value="'.tglinsertdata(viewtglweb($row->COMETIME)).'"/></td>
            		<td>'.viewtglweb($row->COMETIME).'<br />('.getjamweb($row->COMETIME).'-'.getjamweb($row->LEAVETIME).')</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td'.$this->tesjam($jam1,$jam2,8).'></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td '.$this->jam($jam1,$jam2,20).'></td>
                    <td '.$this->jam($jam1,$jam2,21).'></td>
                    <td '.$this->jam($jam1,$jam2,22).'></td>
                    <td '.$this->jam($jam1,$jam2,23).'></td>
                    <td '.$this->jam($jam1,$jam2,24).'></td>
            		'; 
            }        

                echo '</tr></tbody>
                </table>'; 
  		}else{
  			echo 'Jadwal Kosong..'; 
  		} 

  	}


	// get array jadwal pegawai 
	function getjadwalpeg(){
		$iduser=$this->input->post('iduser'); 
		$idjwal=$this->input->post('idjadwal'); 
		$idjwal=explode('-',$idjwal); 
		$idjwal1=$idjwal[0]; 
		if(!empty($idjwal1)){
			$idjwal11=$idjwal1; 
		}else{
			$idjwal11=''; 
		}
		$kdunit=$this->input->post('kdunit'); 
		$tgl1=tglinsertdata($this->input->post('tgl1')); 
		$tgl2=tglinsertdata($this->input->post('tgl2')); 
		$units=$this->input->post('units'); // units periode 
		$sql=$this->db->query('select * from public."USER_OF_RUN" where "USERID"='."'$iduser'".' and  
			"STARTDATE">='."'$tgl1'".' or "ENDDATE"<='."'$tgl2'".''); 

		$sql2=$this->db->query('select a."NUM_RUNID",(extract(hour from a."STARTTIME"
            ) || '."':'".'|| extract(minute from a."STARTTIME"
            )) as STARTTIME,(extract(hour from a."ENDTIME"
            ) || '."':'".' || extract(minute from a."ENDTIME"
            )) as ENDTIME,a."SDAYS",a."edays",a."schclassid",a."overtime"  
            from public."NUM_RUN_DEIL" a where a."NUM_RUNID"='."'$idjwal11'".' 
            order by a."SDAYS"');
                        // a."NUM_RUNID"='."'$kd2'".''); 
		//get_where('USER_OF_RUN',array('USERID'=>$iduser,'NUM_OF_RUN_ID'=>$idjwal)); 
		echo '<table id="example7" class="table table-bordered table-striped" style="width:100%;">
              <thead>
              <tr>
              <td style="width:50px;"><input type="checkbox" id="jdwalkerjapegall" name="jdwalkerjapegall" 
              class="jdwalkerjapegall"></input></td>
              <td style="width:290px;">&nbsp;</td>
              <td style="width:50px;">0</td>
              <td style="width:50px;">1</td>
              <td style="width:50px;">2</td>
              <td style="width:50px;">3</td>
              <td style="width:50px;">4</td>
              <td style="width:50px;">5</td>
              <td style="width:50px;">6</td>
              <td style="width:50px;">7</td>
              <td style="width:50px;">8</td>
              <td style="width:50px;">9</td>
              <td style="width:50px;">10</td>
              <td style="width:50px;">11</td>
              <td style="width:50px;">12</td>
              <td style="width:50px;">13</td>
              <td style="width:50px;">14</td>
              <td style="width:50px;">15</td>
              <td style="width:50px;">16</td>
              <td style="width:50px;">17</td>
              <td style="width:50px;">18</td>
              <td style="width:50px;">19</td>
              <td style="width:50px;">20</td>
              <td style="width:50px;">21</td>
              <td style="width:50px;">22</td>
              <td style="width:50px;">23</td>
              <td style="width:50px;">24</td>
              </tr>
              </thead>
              <tbody>';
        $no=1; 
       	$tgl18=$this->getday($tgl1);  // tgl1 
        $tgl19=$this->getday($tgl2);  // tgl2 
        //echo $tgl18.'-'.$tgl19;
        if($sql2->num_rows()>0){
        if($sql->num_rows()>0){
        	//echo '<tr>
        	//foreach($sql2->result_array() as $row){
        for ($i=$tgl18-1;$i<=$tgl19-1;$i++){
        	$tgl20=$tgl1; 
        	echo '<tr>
        	<td style="width:50px;">
        		<input type="checkbox" id="jdwalkerjapeg" name="jdwalkerjapeg" 
              class="jdwalkerjapeg" ></input>&nbsp;</td>
              <td style="width:290px;">'.date('d-m-Y', strtotime('+'.$i.'days', strtotime($tgl20))).'-'.$this->gettglindo(date('d-m-Y', strtotime('+'.$i.'days', strtotime($tgl20)))).'</td>'; 
              echo '<td '; 
              $att1= (float) str_replace(':', '.',$sql2->row()->starttime);
              $att2= (float) str_replace(':','.',$sql2->row()->endtime); 
              $hatt=round($att2)-round($att1);
              $tt=substr($sql2->row()->starttime,0,1); 
              $tt11=substr($sql2->row()->starttime,0,2); 
              if($tt=='0'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
              <td '; 
              $att2= (float) str_replace(':', '.',$sql2->row()->starttime);
              $att3= (float) str_replace(':','.',$sql2->row()->endtime); 
              $hatt2=round($att3)-round($att2);
              $tt1=substr($sql2->row()->starttime,0,1); 
              if($tt1=='1'){
                $hatt3=$hatt2+1; 
                echo 'colspan="'.$hatt3.'" style="background-color:#3C8DBC;border-width:0px;width:50px;"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
              <td ';
              $att1= (float) str_replace(':', '.',$sql2->row()->starttime);
              $att2= (float) str_replace(':','.',$sql2->row()->endtime); 
              $hatt=round($att2)-round($att1);
              $att=substr($sql2->row()->starttime,0,1); 
              $att1=substr($sql2->row()->starttime,0,1); 
              if($att=='2'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC; width:50px;"
                '; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
              <td '; 
              $att1= (float) str_replace(':', '.',$sql2->row()->starttime);
              $att2= (float) str_replace(':','.',$sql2->row()->endtime); 
              $hatt=round($att2)-round($att1);
              $att=substr($sql2->row()->starttime,0,1); 
              if($att=='3'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
              <td ';
              $att1= (float) str_replace(':', '.',$sql2->row()->starttime);
              $att2= (float) str_replace(':','.',$sql2->row()->endtime); 
              $hatt=round($att2)-round($att1);
              if($att=='4'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td '; 
                if($att=='5'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
              }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td '; 
                if($att=='6'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td '; 
                if($att=='7'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td '; 
                if($att=='8'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td '; 
                if($att=='9'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td '; 
                if($tt11=='10'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td '; 
               if($tt11=='11'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='12'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='13'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='14'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='15'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='16'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='17'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='17'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='18'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='19'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='20'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='21'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='22'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='23'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;width:50px;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span></div></td>
                <td ';
                if($tt11=='24'){
                $hatt1=$hatt+1; 
                echo '<span style="color:rgba(249, 249, 249, 0);float:left">'.$sql2->row()->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$sql2->row()->endtime.'</span>colspan="'.$hatt1.'" style="background-color:#3C8DBC; width:50px;"'; 
                }
                echo '></td>
              ';
        		}
        	}
       echo '</tr></tbody>
       </table>'; 
   	}
	}
	// hapus jadwal pegawai 
	function hpsjdwalpeg(){
		$sdays=$this->input->post('sdays'); 
		$kduser=$this->input->post('kduser'); 
		//$s1=explode('|',$sdays); 
		$sql=''; 
		for($i=0;$i<count($sdays);$i++){
			$s1=explode(';',$sdays[$i]);
			$s2=$s1[0];  
			$sql.=$this->m_att->hapususertempsch($s2,$kduser); 	
		}
		if($sql){
			echo '1'; // jika berhasil dihapus
		}else{
			echo '0'; // jika penghapusan gagal
		}
	}

	// get report 
	function getreportperh(){
		$jns=$this->input->post('jns'); 
		$iddept=$this->input->post('iddept'); 
		$iduser=$this->input->post('iduser'); 
		$tgl1=tglinsertdata($this->input->post('tgl1')); 
		$tgl2=tglinsertdata($this->input->post('tgl2')); 
		if(!empty($iduser)){
		$get=$this->db->query('SELECT x."USERID",x."Name",x."CHECKTYPE",x."checktime",x."SSN",x."DEFAULTDEPTID" FROM (select  b."USERID",b."Name",
							a."CHECKTYPE",cast(a."CHECKTIME" as date) as CHECKTIME,
							b."SSN",b."DEFAULTDEPTID" from public."CHECKINOUT"  a left join public."USERINFO" b 
							on a."USERID"=b."USERID" where a."CHECKTIME" between '."'$tgl1'".' and '."'$tgl2'".'  
							and b."USERID"='."'$iduser'".' GROUP BY a."CHECKTYPE",b."Name",b."USERID",b."SSN",a."CHECKTIME",
							b."DEFAULTDEPTID"
							) x group by x."checktime",x."CHECKTYPE",x."Name",x."USERID" ,x."SSN",x."DEFAULTDEPTID"
							ORDER BY x."checktime"'); 
		}else{
		$get=$this->db->query('SELECT x."USERID",x."Name",x."CHECKTYPE",x."checktime",x."SSN",x."DEFAULTDEPTID" 
			FROM (select  b."USERID",b."Name",
							a."CHECKTYPE",cast(a."CHECKTIME" as date) as CHECKTIME,
							b."SSN",b."DEFAULTDEPTID" from public."CHECKINOUT"  a left join public."USERINFO" b 
							on a."USERID"=b."USERID" where a."CHECKTIME" between '."'$tgl1'".' and '."'$tgl2'".'  
							and b."DEFAULTDEPTID"='."'$iddept'".' GROUP BY a."CHECKTYPE",b."Name",b."USERID",b."SSN",a."CHECKTIME",
							b."DEFAULTDEPTID"
							) x group by x."checktime",x."CHECKTYPE",x."Name",x."USERID" ,x."SSN",x."DEFAULTDEPTID"
							ORDER BY x."checktime"'); 
		}

		echo '<table id="example7" class="table table-bordered table-striped">
              <thead>
              <td>No</td>
              <td>USERID</td>
              <td>NIP/NIK</td>
              <td>Nama</td>
              <td>Tanggal</td>
              <td>Jam Masuk</td>
              <td>Jam Pulang</td>
              <td>Scan Masuk</td>
              <td>Scan Pulang</td>
              <td>Terlambat</td>
              <td>Pulang Cepat</td>
              <td>Lembur</td>
              <td>Pengecualian</td>
              <td>Jumlah Jam Kerja</td>
              <td>Jumlah Hadir</td>
              <td>Department</td>
              </thead>
              <tbody>'; 
        $no=1; 
        foreach($get->result() as $key){
        	echo '<tr>
        	<td>'.$no++.'</td>
        	<td>'.$key->USERID.'</td>
        	<td>'.$key->SSN.'</td>
        	<td>'.$key->Name.'</td>
        	<td>'.viewtglweb($key->checktime).'</td>
        	<td>'; 
        	$tgl4=date('Y-m-d'); 
        	$sqljam=$this->m_att->getjamrepharian($key->USERID,tglinsertdata(viewtglweb($key->checktime)),$tgl4); 
        	if($sqljam->num_rows()>0){
        		//if($sqljam->row()->NUM_OF_RUN_ID=='2'){
        		$strsql= substr($sqljam->row()->STARTTIME,11,8); 
        		echo $strsql; 
        		//}
        	}else{
        		$strsql='';
        		echo $strsql;  
        	}
        	echo '</td>
        	<td>'; 
        	$tgl4=date('Y-m-d'); 
        	$sqljam1=$this->m_att->getjamrepharian($key->USERID,tglinsertdata(viewtglweb($key->checktime)),$tgl4); 
        	if($sqljam1->num_rows()>0){
        		//if($sqljam->row()->NUM_OF_RUN_ID=='2'){
        		$endsql=substr($sqljam1->row()->ENDTIME,11,8); 
        		echo $endsql; 
        		//}
        	}else{
        		$endsql=''; 
        		echo $endsql; 
        	}
        	echo  '</td>
        	<td>'; 
        	$sqlscan=$this->m_att->scanmaspul($key->USERID,tglinsertdata(viewtglweb($key->checktime))); 
        	if($sqlscan->num_rows()>0){
        		$chkin=substr($sqlscan->row()->CHECKTIME, 11,8); 
        		echo $chkin; 
        	}else{
        		$chkin=''; 
        		echo $chkin; 
        	}
        	echo '</td> 
        	<td>'; 
        	$sqlpul=$this->m_att->scanpulang($key->USERID,tglinsertdata(viewtglweb($key->checktime))); 
        	if($sqlpul->num_rows()>0){

        		$chkout=substr($sqlpul->row()->CHECKTIME, 11,8); 
        		echo $chkout; 
        	}else{
        		$chkout=''; 
        		echo ''; 
        	}
        	echo '</td>
        	<td>'; 
        	if(empty($strsql) || empty($chkin)){
        		echo '02:00:00'; 
        	}else{
        		$sqlter=SelisihWaktu($chkin,$strsql); 
        		if(empty($sqlter)){
        			echo '02:00:00'; 
        		}else{
        			echo $sqlter; 
        		}
        	}
        	echo '</td>
        	<td>'; 
        	if(empty($endsql)|| empty($chkout)){
        		echo '-'; 
        	}else if($chkout>$endsql){
        		echo '-'; 
        	}else{
        		$sqlcpt=SelisihWaktu($chkout,$endsql); 
        		if(empty($sqlcpt)){
        			echo '-'; 
        		}else{
        			echo $sqlcpt; 
        		}
        	}	
        	echo '</td>
        	<td>'; 
        	if(empty($endsql)|| empty($chkout)){
        		echo '-'; 
        	}else{
        		$sqllem=SelisihWaktu($endsql,$chkout); 
        		if(empty($sqllem)){
        			echo '-'; 
        		}else{
        			echo $sqllem; 
        		}
        	}
        	echo '</td>
        	<td>-</td>
        	<td>'; 
        	if(empty($chkout) || empty($chkin)){
        		echo '0'; 
        	}else{
        	$selw=SelisihWaktu($chkout,$chkin); 
        	if(!empty($selw)){
        		echo $selw; 
        	}else{
        		echo '0'; 
        	}
        }
        	echo '</td>
        	<td>'; 
        	if(empty($strsql)|| empty($endsql)){
        		echo '0'; 
        	}else{
        		$seljam=SelisihWaktu($endsql,$strsql); 
        		if(!empty($seljam)){
        			echo $seljam; 
        		}else{
        			echo '0';
        		}
        		
        	}
        	echo '</td>
        	<td>'; 
        	$sqldep=$this->db->get_where('DEPARTMENTS',array('DEPTID'=>$key->DEFAULTDEPTID)); 
        	if($sqldep->num_rows()>0){
        		echo $sqldep->row()->DEPTNAME; 
        	}else{
        		echo ''; 
        	}	
        	echo '</td>
        	'; 
        }      	
             echo  '</tr></tbody>
              </table>'; 

	}

	// get report bkpp 
	function getrepbkpp(){
		$jns=$this->input->post('jns'); 
		$iddeprt=$this->input->post('iddept'); 
		$iduser=$this->input->post('userid'); 
		$tgl1=tglinsertdata($this->input->post('tgl1')); 
		$tgl2=tglinsertdata($this->input->post('tgl2')); 
		if($iddeprt=="all"){
		$sql=$this->db->query('select * from public."USERINFO" a left join public."golonganmaster" b on 
					a."IDPANGKAT"=b."kd_golongan" order by b."golongan" desc');
		}else if($iddeprt!="all" && empty($iduser)){
		$sql=$this->db->query('select * from public."USERINFO" a left join public."golonganmaster" b on 
					a."IDPANGKAT"=b."kd_golongan" where a."DEFAULTDEPTID"='."'$iddeprt'".'  order by b."golongan" desc');
		}else if(!empty($iduser)){
		$sql=$this->db->query('select * from public."USERINFO" a left join public."golonganmaster" b on 
		a."IDPANGKAT"=b."kd_golongan" where a."DEFAULTDEPTID"='."'$iddeprt'".'  and a."USERID"='."'$iduser'".' 
		order by b."golongan" desc');
		}
		echo '<table id="example7" class="table table-bordered table-striped">
		<thead>
                <tr>
    			<td  rowspan="2" style="width:3%;">NO</td>
    			<td rowspan="2" style="width:20%;text-align:center;">NAMA</td>
    			<td rowspan="2" style="text-align:center;width:17%;">NIP</td>
    			<td rowspan="2" style="text-align:center;width:10%;">PGKT/GOL</td>
    			<td colspan="4" style="text-align:center; width:15%;">Ketidakhadiran</td>
    			<td width="52" rowspan="2" style="text-align:center;">KET</td>
  				</tr>
  				<tr>
    			<td  style="width:5%; text-align:center;">Sakit</td>
    			<td style="width:5%; text-align:center;">Izin</td>
    			<td style="width:5%; text-align:center;">Cuti</td>
    			<td style="width:5%; text-align:center;">Alpha</td>
  				</tr>
  				</thead>
              <tbody>'; 
        $no=1; 
        foreach($sql->result() as $row){
        	echo '<tr>
        	<td>'.$no++.'</td>
        	<td>'.$row->Name.'</td>
        	<td>'.$row->SSN.'</td>
        	<td>'.$row->golongan.'</td>
        	<td>'; 
        	$sql1=$this->m_att->repbkpp($row->USERID,$tgl1,$tgl2,'1');  // sakit 
        	if($sql1->num_rows()<=0){
        		echo '0'; 
        	}else{
        		 $st=viewtglweb($sql1->row()->startspecday);
        		 $st1=viewtglweb($sql1->row()->endspecday); 
        		 echo $this->pengtanggal2(tglinsertdata($st),tglinsertdata($st1)); 
        		//echo  ''; 
        	}
        	echo '</td>
        	<td>'; 
        	$sql2=$this->m_att->repbkpp($row->USERID,$tgl1,$tgl2,'3'); // izin 
        	if($sql2->num_rows()<=0){
        		echo '0'; 
        	}else{
        		 $st=viewtglweb($sql2->row()->startspecday);
        		 $st1=viewtglweb($sql2->row()->endspecday); 
        		 echo $this->pengtanggal2(tglinsertdata($st),tglinsertdata($st1)); 
        	}
        	echo '</td>
        	<td>'; 
        	$sql3=$this->m_att->repbkpp($row->USERID,$tgl1,$tgl2,'2'); // cuti 2
        	if($sql3->num_rows()<=0){
        		echo '0'; 
        	}else{
        		 $st=viewtglweb($sql3->row()->startspecday);
        		 $st1=viewtglweb($sql3->row()->endspecday); 
        		 echo $this->pengtanggal2(tglinsertdata($st),tglinsertdata($st1)); 
        	}
        	echo '</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	'; 
        }      	
              echo '</tr></tbody>
              </table>'; 
	}

	// get report keuangan 
	function getrepkeuangan(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		date_default_timezone_set('Asia/Jakarta'); 	
		$tgl=date('Y-m-d H:i:s'); 
		$nama=$this->session->userdata('nama'); 
		$arr=array(
			'ID'=>getidsystemlog(), 
			'Operator'=>$nama, 
			'Logtime'=>$tgl, 
			'MachineAlias'=>'',
			'LogTag'=>0, 
			'LogDescr'=>'Proses Keuangan'
		);
		$this->m_att->simpanlog($arr);

		$jns=trim($this->input->post('jns')); // jenis laporan tpk or jasa 
		$dept=trim($this->input->post('dept')); // department 
		$jnspeg=$this->input->post('jnspeg'); // pns or non pns 
		$nama=$this->input->post('nama'); // id pegawai 
		$tgl1=$this->input->post('tgl1'); 
		$tgl2=$this->input->post('tgl2'); 
		$bln=$this->input->post('bln'); 
		$thn=$this->input->post('thn'); 
		$sql2=''; 
			
		if(!empty($dept) && $jnspeg=='all'){
			$sql2.=' where "DEFAULTDEPTID"='."'$dept'".''; 
		}else if(!empty($dept) && $jnspeg=='1'){ // untuk non pns 
			$sql2.=' where "DEFAULTDEPTID"='."'$dept'".' and "STTSKEPE"='."'1'".''; 
		}else if(!empty($dept) && $jnspeg=='0'){ // untuk pns 
			$sql2.=' where "DEFAULTDEPTID"='."'$dept'".' and "STTSKEPE"='."'0'".''; 
		} else if(!empty($dept) && !empty($nama)){
			$sql2.=' where "DEFAULTDEPTID"='."'$dept'".' and USERID='."'$nama'".''; 
		}
		$sql=$this->db->query('select * from public."USERINFO"'.$sql2); 
		
		echo '<table id="example7" class="table table-bordered table-striped">
		<thead>
  		<tr>
    		<td rowspan="3" valign="middle">No</td>
    		<td rowspan="3" style="text-align:center; valign:middle;">Nama</td>
    		<td colspan="7" style="text-align:center; valign:middle;">Fakto Statis Bobot</td>
    		<td colspan="9" style="text-align:center;"> Faktor Dinamis Bobot 90%</td>
    		<td rowspan="3" style="text-align:center;">Faktor Kehadiran</td>
    		<td rowspan="3" style="text-align:center;">Total Skor</td>
    		<td rowspan="3" style="text-align:center;">Jumlah</td>
    		<td rowspan="3" style="text-align:center;">PPh 21</td>
    		<td rowspan="3" style="text-align:center;">ZIS</td>
    		<td rowspan="3" style="text-align:center;">Jumlah Diterima</td>
  			</tr><tr>
    <td rowspan="2" style="text-align:center;">Pendidikan</td>
    <td rowspan="2" style="text-align:center;">Skor</td>
    <td rowspan="2" style="text-align:center;">Gol</td>
    <td rowspan="2" style="text-align:center;">Skor</td>
    <td rowspan="2" style="text-align:center;">Masa Kerja</td>
    <td rowspan="2" style="text-align:center;">Skor</td>
    <td rowspan="2" style="text-align:center;">Skor Faktor Statis</td>
    <td rowspan="2" style="text-align:center;">Tanggung Jawab</td>
    <td rowspan="2" style="text-align:center;">Skor</td>
    <td colspan="4" style="text-align:center;">Skor Prestasi Kerja</td>
    <td rowspan="2" style="text-align:center;">Skor Resiko Kerja</td>
    <td rowspan="2" style="text-align:center;">Skor Beban Kerja</td>
    <td rowspan="2" style="text-align:center;">Skor Faktor Dinamis</td>
  </tr><tr>
    <td>SP</td>
    <td>KP</td>
    <td>PR</td>
    <td>MI</td>
  </tr>
  </thead>'; 
  $no=1; 
  foreach($sql->result() as $row){
  echo '<tr>
    <td >'.$no++.'</td>
    <td>'.$row->Name.'</td>
    <td style="text-align:center;">'.$this->m_att->getpendidikan($row->IDPENDIDIKAN).'</td>
    <td style="text-align:center;">'.$this->m_att->getskorpendidikan($row->IDPENDIDIKAN).'</td>
    <td style="text-align:center;">'.$this->m_att->getgolonganmaster($row->IDPANGKAT).'</td>
    <td style="text-align:center;">'.$this->m_att->getskorgolomas($row->IDPANGKAT).'</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>
    <td style="text-align:center;">&nbsp;</td>'; 
}
  echo '</tr>
</table>';
		} 
	}



// get report tpk 
function reportgettpk(){
$iddept=$this->input->post('iddept');  // id department 
$idpeg=$this->input->post('idpeg');  // id pegawai 
$bln=$this->input->post('bln');  // bulan yang ingin ditampilkan 
$thn=$this->input->post('thn');  // tahun yg ingin ditampilkan 
$jnspeg=$this->input->post('jnspeg'); // jenis pegawai 	


$sql2=''; 
if(!empty($iddept) && $jnspeg='all'){
	$sql2.=' where "DEFAULTDEPTID"='."'$iddept'".''; 
}else if(!empty($iddept) && $jnspeg=='0'){ // untuk pns 
	$sql2.=' where "DEFAULTDEPTID"='."'$iddept'".' and "STTSKEPE"='."'0'".''; 
}else if(!empty($iddept) && $jnspeg=='1'){ // untuk non pns 
	$sql2.=' where "DEFAULTDEPTID"='."'$iddept'".' and "STTSKEPE"='."'1'".''; 
} else if(!empty($iddept) && !empty($idpeg)){
	$sql2.=' where "DEFAULTDEPTID"='."'$iddept'".' and "USERID"='."'$idpeg'".''; 
}
$sql=$this->db->query('select * from public."USERINFO"'.$sql2); 
echo '<table id="example7" class="table table-bordered table-striped">
  <tr>
    <td>No</td>
    <td>Nama</td>
    <td>Nip</td>
    <td>NPWP</td>
    <td>Gol</td>
    <td>Jabatan</td>
    <td>TPK</td>
    <td>Jml Jam Efektif/Bulan</td>
    <td>Jml Jam Hadir Sesuai Absensi</td>
    <td>Jml Tambahan Jam Hadir Sakit/Izin/Dinas</td>
    <td>Total jam Hadir</td>
    <td>Kekurangan Jam Kerja</td>
    <td>Potongan TPK/Jam</td>
    <td>Jml Potongan TPK</td>
    <td>Jml TPK Setelah pemotongan</td>
    <td>PPh 21</td>
    <td>Jumlah TPK Setelah Pemotongan PPh 21</td>
    <td>Zakat</td>
    <td>Jml Bersih Diterima</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#999999">1</td>
    <td align="center" valign="middle" bgcolor="#999999">2</td>
    <td align="center" valign="middle" bgcolor="#999999">3</td>
    <td align="center" valign="middle" bgcolor="#999999">4</td>
    <td align="center" valign="middle" bgcolor="#999999">5</td>
    <td align="center" valign="middle" bgcolor="#999999">6</td>
    <td align="center" valign="middle" bgcolor="#999999">7</td>
    <td align="center" valign="middle" bgcolor="#999999">8</td>
    <td align="center" valign="middle" bgcolor="#999999">9</td>
    <td align="center" valign="middle" bgcolor="#999999">10</td>
    <td align="center" valign="middle" bgcolor="#999999">11(9+10)</td>
    <td align="center" valign="middle" bgcolor="#999999">12(8-11)</td>
    <td align="center" valign="middle" bgcolor="#999999">13(7/8)</td>
    <td align="center" valign="middle" bgcolor="#999999">14(12*13)</td>
    <td align="center" valign="middle" bgcolor="#999999">15(7-14)</td>
    <td align="center" valign="middle" bgcolor="#999999">16</td>
    <td align="center" valign="middle" bgcolor="#999999">17(15-16)</td>
    <td align="center" valign="middle" bgcolor="#999999">18</td>
    <td align="center" valign="middle" bgcolor="#999999">19(17-18)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>';
  $no=1; 
  foreach($sql->result() as $row){
  echo '<tr>
    <td>'.$no++.'</td>
    <td>'.$row->Name.'</td>
    <td>'.$row->SSN.'</td>
    <td>'.$row->npwp.'</td>
    <td>'.$this->m_att->getgolonganmaster($row->IDPANGKAT).'</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>'; 
}
echo '</table>';
	}
	// get pegawai keuangan 
	function getpegawaikeu(){
		$iddept=$this->input->post('iddept'); 
		$jnspeg=$this->input->post('idpeg'); 

		$sql='select * from public."USERINFO" a left join 
		"STTS_PEGAWAI" b on cast(a."STTSKEPE" as integer)=b."ID" 
		where a."DEFAULTDEPTID"='."'$iddept'".''; 

		if(!empty($jnspeg) && $jnspeg!='all'){
			$sql.=' and a."STTSKEPE"='."'$jnspeg'".''; 
		}else if($jnspeg=='all'){
			$sql.=''; 
		}
		$query=$this->db->query($sql); 
		if($query->num_rows()>0){
		echo '<option value="">--Pilih Jenis Pegawai--</option>'; 
		foreach($query->result() as $row){
			echo '<option value="'.$row->USERID.'">'.$row->Name.'</option>'; 
		}
	}else{
		echo '<option value="">--Record Kosong--</option>'; 
	}

	}


	// function getjadwalpeg2
	function getjadwalpeg2(){
		echo '<table id="example7" class="table table-bordered table-striped">
              <thead>
              <tr>
              <th><input type="checkbox" id="jdwalkerjapegall" name="jdwalkerjapegall" 
              class="jdwalkerjapegall"></input></th>
              <th>&nbsp;</th>
              <th>0</th>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
              <th>7</th>
              <th>8</th>
              <th>9</th>
              <th>10</th>
              <th>11</th>
              <th>12</th>
              <th>13</th>
              <th>14</th>
              <th>15</th>
              <th>16</th>
              <th>17</th>
              <th>18</th>
              <th>19</th>
              <th>20</th>
              <th>21</th>
              <th>22</th>
              <th>23</th>
              <th>24</th>
              </tr>
              </thead>
              <tbody>
              </tbody>
              </table>	
              '; 
	}

	// get array jadwal pegawai 
	function getarrayjdwalpeg(){

	}

	// function simpan jadwal kerja 
	function simpanjdwalkerja(){
		$iduser=$this->input->post('userid'); 
		$cometime=$this->input->post('cometime'); 
		$leavetime=$this->input->post('leavetime'); 
		$schclass=$this->input->post('schclass'); 
		$overtime=$this->input->post('overtime'); 

		if($sql){
			echo '1'; // sukses menyimpan 
		}else{
			echo '0'; // gagal melakukan penyimpanan 
		}
	}

	// load refresh table shift 2

	function tablereg(){
		echo '<table id="example7" class="table table-bordered table-striped" style="padding-left: 0px;padding-right: 10px;font-size: 10px;">
               <thead>
               <tr>
               <td><input type="checkbox" id="chkshiftall1" name="chkshiftall1" class="chkshiftall1"> 
               </input></td>
               <td>&nbsp; </td>
               <td>0</td>
               <td>1</td>
               <td>2</td>
               <td>3</th>
               <td>4</td>
               <td>5</td>
               <td>6</td>
               <td>7</td>
               <td>8</th>
               <td>9</td>
               <td>10</td>
               <td>11</td>
               <td>12</td>
               <td>13</td>
               <td>14</td>
               <td>15</th>
               <td>16</td>
               <td>17</td>
               <td>18</td>
               <td>19</td>
               <td>20</td>
               <td>21</th>
               <td>22</td>
               <td>23</td>
               <td>24</td>
               </tr>
               </thead>
               <tbody id="tbodyshift" class="tbodyshift">
               </tbody>
               </table> '; 
	}
	// function hapus data uraian 
	function hpsdatauraian(){
		$id=$this->input->post('id'); 
		$sql=''; 
		for($i=1;$i<count($id);$i++){
			$id2=explode(';', $id[$i]); 
			$id3=$id2[0]; 
			$sql.=$this->db->delete('masteruraian',array('iduraian'=>$id)); 
		}
		if($sql){
			echo '1'; // berhasil disimpan 
		}elsE{
			echo '0'; // penyimpanan Gagal 
		}
	}

	// get pegawai to report harian 
	function getpegrephar(){
		$deptid=(int) $this->input->post('deptid'); 
		//$sql=$this->db->query('select * from public."USERINFO" WHERE "DEFAULTDEPTID"='."'$deptid'".''); 
		$sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$deptid)); 
		echo '<option value="">--Pilih Pegawai--</option>'; 
		if($sql->num_rows()>0){
			foreach($sql->result() as $row){
				echo '<option value="'.$row->USERID.'">'.$row->Name.'</option>'; 
			}
		}
	}

	// get function pegawai cuti 
	function getpegcuti(){
		$deptid=(int) $this->input->post('deptid'); 
		//$sql=$this->db->query('select * from public."USERINFO" WHERE "DEFAULTDEPTID"='."'$deptid'".''); 
		$sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$deptid)); 
		echo '<option value="">--Pilih Pegawai--</option>'; 
		if($sql->num_rows()>0){
			foreach($sql->result() as $row){
				echo '<option value="'.$row->USERID.'">'.$row->Name.'</option>'; 
			}
		}
	}

		function getpeglembur(){
		$deptid=(int) $this->input->post('deptid'); 
		//$sql=$this->db->query('select * from public."USERINFO" WHERE "DEFAULTDEPTID"='."'$deptid'".''); 
		$sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$deptid)); 
		echo '<option value="">--Pilih Pegawai--</option>'; 
		if($sql->num_rows()>0){
			foreach($sql->result() as $row){
				echo '<option value="'.$row->USERID.'">'.$row->Name.'</option>'; 
			}
		}
	}
	


	// get pegawai report transaksi 
	function getreptransaksi(){
		$deptid=(int) $this->input->post('deptid'); 
		//$sql=$this->db->query('select * from public."USERINFO" WHERE "DEFAULTDEPTID"='."'$deptid'".''); 
		$sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$deptid)); 
		echo '<option value="">--Pilih Pegawai--</option>'; 
		if($sql->num_rows()>0){
			foreach($sql->result() as $row){
				echo '<option value="'.$row->USERID.'">'.$row->Name.'</option>'; 
			}
		}
		
	}
	// get pegawai function repdetail harian 
	function getreptransaksidet(){
		$deptid=(int) $this->input->post('deptid'); 
		//$sql=$this->db->query('select * from public."USERINFO" WHERE "DEFAULTDEPTID"='."'$deptid'".''); 
		$sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$deptid)); 
		echo '<option value="">--Pilih Pegawai--</option>'; 
		if($sql->num_rows()>0){
			foreach($sql->result() as $row){
				echo '<option value="'.$row->USERID.'">'.$row->Name.'</option>'; 
			}
		}
		
	}
	// refresh mesin 
	function refmesin(){
		$sql=$this->db->get('machines'); 
		echo '<table id="example12" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="chkmesin" name="chkmesin"></input></th>
                                                <th>No.</th>
                                                <th>Nama Mesin</th>
                                                <th>Status</th>
                                                <th>No Mesin</th>
                                                <th>Tipe Komunikasi</th>
                                                <th>Alamat IP</th>
                                                <th>Port</th>
                                                <th>Produk Type</th>
                                                <th>Jumlah Karyawan</th>
                                                <th>Jumlah Admin</th>
                                                <th>Nomor Seri</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>'; 
         $no=1; 
         foreach($sql->result() as $key){
         	echo '<tr>
         	<td><input type="checkbox" id="chkmesin1" class="chkmesin1" name="chkmesin1" 
         	value="'.$key->ip.'" ></input></td>
         	<td>'.$no++.'</td>
         	<td>'.$key->machinealias.'</td>
         	<td>
         	'; 
         	if($key->enabled=="1"){
            echo '<span class="label label-success">Connected</span>';
             }else{
           echo '<span class="label label-danger">Not Connected</span>';
           }
         	echo '</td>
         	<td>'.$key->machinenumber.'</td><td>
         	'; 
         	if($key->connecttype=='1'){
            echo '<span class="label label-success">Jaringan</Span>';
            }else{
            echo '<span class="label-label-success">USB</span>';
            }
         	echo '</td><td>'.$key->ip.'</td>
         	<td>'.$key->port.'</td>
         	<td>'.$key->producttype.'</td>
            <td>'.$key->usercount.'</td>
            <td>'.$key->managercount.'</td>
            <td>'.$key->sn.'</td>
            <td><button type="button" class="btn btn-success" value="'.$key->id.'" id="buteditmesin">Edit</button>|
			<button type="button" class="btn btn-primary" value="'.$key->ip.'" id="butdownload">Download</button></td>
         	'; 
         }                               

        echo '</tr></tbody></table>'; 

	}

	// refresh table pegawai upload data 
	function refuploaddata(){
		$deptid=$this->input->post('deptid'); 
		$sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$deptid)); 
		echo '<table id="example4" class="table table-bordered table-striped tbpegupload">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="chkuplodpegall" name="chkuplodpegall"></input></th>
                                                <th>ID</th>
                                                <th>Nama</th>
                                                <th>Department</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>'; 
         $no=1;                                
        foreach($sql->result() as $row){
        	echo '<tr>
        	<td><input type="checkbox" id="chkuplodpeg" class="chkuplodpeg" name="chkuplodpeg" value="'.$row->USERID.'">
        	</input></td>
        	<td>'.$no++.'</td>
        	<td>'.$row->Name.'</td>
        	<td>&nbsp;</td>
        	<td>&nbsp;</td>
        	'; 
        }                                	
            echo '</tr></tbody>
            </table>'; 
	}

	// payroll 
	function payrollchange(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login','location'); 
		}else{
		$deptid=$this->input->post('deptid'); 
		$bulan=$this->input->post('bln'); 
		$thn=$this->input->post('thn'); 

		$sql='select a."USERID",a."Name",a."SSN" as "NIP", 
			'."''".' as NPWP,'."''".' AS GOL, a."JABATAN",b."tpk", b."jlhjam", 
			b."jlhjamsesuaiabsen", b."jlhtambhnjam", b."totaljam", 
			b."kekurngnjamkrj",b."pottpkperjam",b."jmlhpottpk",b."sisatpk",b."pph", 
			b."sisatpkkurpph",b."zakat",b."trimabersih",b."tgl" from public."USERINFO" a left join public."payrollpeg" b
			on a."USERID"=cast(b."kduser" as integer)  where a."DEFAULTDEPTID"='."'$deptid'".'';
			//and  extract(MONTH from b."tgl")  ='."'$bulan'".' and  extract(MONTH from b."tgl") ='."'$thn'".' '; 
		$query=$this->db->query($sql); 
		echo '<table id="example7" class="table table-bordered table-striped">
              <thead>
              <tr>
              <td style="width:4%;text-align:center;">No.</td>
              <td style="width:10%;">NIP</td>
              <td style="width:15%;">Nama</td>
              <td>Jabatan</td>
              <td>TPK (Rp)</td>
              <td>Remunerasi (Rp)</td>
              <td>PPH (Rp)</td>
              <td>Infaq (Rp)</td>
              <td>Gaji Bersih (Rp)</td>
              <td>Aksi</td>
              </tr>
              </thead>
              <tbody>'; 
         $no=1;      
		if(!empty($query)){
			foreach($query->result() as $row){
				echo '<tr>
				<td>'.$no++.'</td>
				<td>'.$row->NIP.'</td>
				<td>'.$row->Name.'</td>
				<td>'.$row->JABATAN.'</td>
				<td>'.$row->tpk.'</td>
				<td></td>
				<td>'.$row->pph.'</td>
				<td>'.$row->zakat.'</td>
				<td>'.$row->trimabersih.'</td>
				<td>&nbsp;</td>
				'; 
			}
		}	
		echo '</tr></tbody></table>'; 
	}
}
// function hapus jadwal 
function hpsjdwalper(){
	$id=$this->input->post('id'); 
	$sql=$this->db->delete('NUM_RUN',array('NUM_RUNID'=>$id)); 
	if($sql){
		echo '1'; // berhasil dihapus 
	}else{
		echo '0'; // penghapusan gagal 
	}
}

// test baca jam 
function testbacajam(){
	$read=readtime(); 
	echo $read; 
}

}
