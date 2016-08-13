<?php if (! defined('BASEPATH')) exit ('no Direct Access Allowed'); 

class conn extends CI_Controller{


	function __construct(){
		parent::__construct(); 
		$this->load->library(array('form_validation')); 
		$this->load->helper(array('lokup')); 
		$this->load->model(array('m_att'));
		$this->load->database();
	}
	
	function updatemachine(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location'); 
		}else{
		$ip=$this->input->post('ip');
		$sql=''; 
		$no1=1; 
		include("zklib/zklib.php");
		/**$arr1='<table id="example3" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th><input type="checkbox" id="chkmesinkonall" class="chkmesinkonall" name="chkmesinkonall"></input></th>
                    <th>No.</th>
                    <th>AC NO</th>
                    <th>Nama</th>
                    <th>s time</th>
                    <th>machine</th>
                    <th>verify Mode</th>
                    </tr>
                    </thead>
                    <tbody>'; **/ 
		/**$arr2='<table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th><input type="checkbox" id="chkmesinstatusall" name="chkmesinstatusall" class="chkmesinstatusall"></input></th>
                <th>No.</th>
                <th>Id mesin</th>
                <th>Status</th>
                <th>Time</th>
                </tr>
                </thead>
                <tbody>'; 		**/ 	
			for($i=0;$i<count($ip);$i++){
			$ip2=explode(';',$ip[$i]); 
			$ip3=$ip2[0]; 
			$zk = new ZKLib($ip3, 4370);
			$ret = $zk->connect(); 
			if($ret){
			$user = $zk->getUser();
			$arr=array(
			'enabled'=>'1', 
			'sn'=>str_replace("="," ",strstr($zk->serialNumber(),"=")), 
			'producttype'=>str_replace('=','',strstr($zk->deviceName(),"=")), 
			'usercount'=>count($user)
			); 
			$sql.=$this->db->update('machines',$arr,array('ip'=>$ip3)); 
                //$zk->setUser(1, '1', 'Admin', '', LEVEL_ADMIN);
            sleep(1);
			$no=1; 
			$kon="Connected";
				//$attendance = $zk->getAttendance(); 
				
           /** while(list($idx, $attendancedata) = each($attendance)):
			if($attendancedata[1]!=0){
                if ( $attendancedata[2] == 15 ){
                    $status = 'Check Out';
               } else{
                    $status = 'Check In';
				}
				$id3=$attendancedata[1]; 
				$getpeg2=$this->db->query('select * from public."USERINFO" where cast("Badgenumber" as integer)='."'$id3'".'');  
				if($getpeg2->num_rows()>0){
					$userid=$getpeg2->row()->USERID; 
				}else{
					$userid=''; 
				}
				/**$arr1.='<tr>
				<td><input type="checkbox" name="chkmesinkon" id="chkmesinkon" class="chkmesinkon" 
				value='.$userid.'></input></td> 
				<td>'.$no++.'</td>
				<td>'.$attendancedata[1].'</td>
				<td>'; 
				$id=$attendancedata[1]; 
				$getpeg=$this->db->query('select * from public."USERINFO" where cast("Badgenumber" as integer)='."'$id'".'');  
				if($getpeg->num_rows()>0){
					$arr1.=$getpeg->row()->Name; 
				}else{
					$arr1.=''; 
					}
				$arr1.='</td> 
				<td>'.date( "d-m-Y", strtotime( $attendancedata[3] ) ).' '.date( "H:i:s", strtotime( $attendancedata[3] ) ).'</td>
				<td>'.$ip3.'</td>
				<td>'.$status.'</td> 
				</tr>'; 	 
				} **/
				//endwhile ;  
				 
		}else{
			$kon="Not Connected"; 
			$arr=array(
			'enabled'=>'0'
			);
			$sql.=$this->db->update('machines',$arr,array('ip'=>$ip3)); 		
		}	
			/**arr2.='<tr>
				<td><input type="checkbox" id="chkmesinstatus" class="chkmesinstatus"></input></td>
				<td>'.$no1++.'</td>
				<td>'.$ip3.'</td>
				<td>'; 
				if($kon=='Connected'){
					$arr2.='<span class="label label-success">Connected</span>'; 
				}else{
					$arr2.='<span class="label label-danger">Not Connected</span>'; 
				}
				$arr2.='</td>
				<td>'.date('d-m-Y H:i:s').'</td>'; 		**/ 
		}
		/**$arr1.='</tbody>
            </table>'; **/  
		/**$arr2.='</tr></tbody>
                    </table>';  //$arr1
		echo ''.'|'.$arr2; 		**/ 
		}
	}
		// putuskan koneksi mesin 
	function puskoneksimesin(){
		$id=$this->input->post('id');
		$sql='';  
		$no=1; 
		echo '<table id="example4" class="table table-bordered table-striped">
              <thead>
                <tr>
                <th><input type="checkbox" id="chkmesinstatus" name="chkmesinstatus" class="chkmesinstatus"></input></th>
                <th>No.</th>
                <th>Id mesin</th>
                <th>Status</th>
                <th>Time</th>
                </tr>
                </thead>
              <tbody>'; 
		for ($i=0; $i < count($id) ; $i++) { 
			$id2=explode(';',$id[$i]); 
			$id3=$id2[0];
			$arr=array(
			'enabled'=>'0'
			); 
			$sql.=$this->db->update('machines',$arr,array('ip'=>$id3));
			echo '<tr>
				<td><input type="checkbox" id="chkmesinstatus" class="chkmesinstatus"></input></td>
				<td>'.$no++.'</td>
				<td>'.$id3.'</td>
				<td><span class="label label-danger">Not Connected</span></td>
				<td>'.date('d-m-Y H:i:s').'</td>
			'; 
		}
		if($sql){
			echo '';  // '1'; // berhasil di update
		}else{
			echo '<tr colspan="4"><td>Please reload</td>';  //'0' ;// gagal melakukan update 
		}
		echo '</tr></tbody>
                </table>'; 
	}
	
	// koneksikan mesin 
		function koneksimesinstts(){
		$id=$this->input->post('id');
		$sql='';  
		$no=1; 
		echo '<table id="example4" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th><input type="checkbox" id="chkmesinstatus" name="chkmesinstatus" class="chkmesinstatus"></input></th>
                <th>No.</th>
                <th>Id mesin</th>
                <th>Status</th>
                <th>Time</th>
                </tr>
                </thead>
                <tbody>'; 
		for ($i=0; $i < count($id) ; $i++) { 
			$id2=explode(';',$id[$i]); 
			$id3=$id2[0];
			$arr=array(
			'enabled'=>'1'
			); 
			$sql.=$this->db->update('machines',$arr,array('ip'=>$id3));
			echo '<tr>
				<td><input type="checkbox" id="chkmesinstatus" class="chkmesinstatus"></input></td>
				<td>'.$no++.'</td>
				<td>'.$id3.'</td>
				<td><span class="label label-success">Connected</span></td>
				<td>'.date('d-m-Y H:i:s').'</td>'; 
		}
		if($sql){
			echo '';  // '1'; // berhasil di update
		}else{
			echo '<tr colspan="4"><td>Please reload</td>';  //'0' ;// gagal melakukan update 
		}
		echo '</tr></tbody>
                </table>'; 
	}
	
	
	
	function konmesin(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
		
		redirect('index.php/login/logout','location'); 
		}else{
		//$ip=trim($this->input->post('ip'));
		include("zklib/zklib.php");
		$zk = new ZKLib("192.168.10.14", 4370);
    	$ret = $zk->connect();
    	if($ret){
    	$zk->disableDevice();
        sleep(1);
		$machine = $this->m_att->selectdata(" machines order by id"); 
         echo '<table id="example1" class="table table-bordered table-striped">
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
           <th>Nama Produk</th>
           <th>Jumlah Karyawan</th>
           <th>Jumlah Admin</th>
           <th>Nomor Seri</th>
           <th></th>
           </tr>
           </thead>
           <tbody>'; 
           $no=1;
          foreach($machine->result() as $mach){
			echo '<tr>
                <td><input type="checkbox" id="chkmesin1" class="chkmesin1"  name="chkmesin1" 
                value='.$mach->id.'|'.$mach->ip.'></input></td>
                <td>'.$no++.'</td>
                <td>'.$mach->machinealias.'</td>
                <td>'; 
                if($mach->enabled=="1"){
                echo '<span class="label label-success">Connected</span>';
                }else{
                echo '<span class="label label-danger">Not Connected</span>';
                }
                echo '</td>
                <td>'.$mach->machinenumber.'</td>
                <td>'; 
                if($mach->connecttype=='1'){
                echo '<span class="label label-success">Jaringan</Span>';
                }else{
                echo '<span class="label-label-success">USB</span>';
                }
				echo '</td>
                <td><span class="label-label-success">'.$mach->ip.'</span></td>
                <td>'.$mach->port.'</td>
                <td>'.str_replace('=','',strstr($zk->deviceName(),"=")).'</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>'.str_replace("="," ",strstr($zk->serialNumber(),"=")).'</td>
                <td><button type="button" class="btn btn-success" id="buteditmesin" 
                value='.$mach->id.'
                >Edit</button></td>'; 

        }
		echo '</tr>
                </tbody>
                </table>'; 
		}else{
			echo 'Not Connected'; 
		}
    	}
	}

	function konmesin1(){
		echo '1'; 
	}
	// cek koneksi mesin 
	function cekkoneksi(){
		$ip=trim($this->input->post('ip')); 
		$sql=$this->db->get_where('machines',array('ip'=>$ip)); 
		if($sql->row()->enabled=='0'){
			echo '1'; // tidak terkoneksi 
		}else{
			echo '0'; // terkoneksi 
		}
	}

	
	// refresh page mesin status 
	function pagemesinstts(){
		$arr='<table id="example3" class="table table-bordered table-striped">
                <thead>
                 <tr>
                 <th><input type="checkbox" id="chkmesinkon" name="chkmesinkon" class="chkmesinkon"></input></th>
                 <th>No.</th>
                 <th>AC NO</th>
                 <th>Nama</th>
                 <th>s time</th>
                 <th>machine</th>
                 <th>verify Mode</th>
                 </tr>
                 </thead>
                 <tbody>'; 
		$arr.='<tr></tr>'; 
		$arr.='</tbody></table>'; 		 
		echo $arr; 
	}

	
	// download data 	
	function downloaddt(){
		$akses=isLogin(); 
		if(empty($akses['nik'])){
			redirect('index.php/login/logout','location');
		}else{
		$ip=trim($this->input->post('ip'));  
		include("zklib/zklib.php");
		$no=1; 
		$zk = new ZKLib($ip, 4370);
		$ret = $zk->connect(); 
		$arr='<table id="example3" class="table table-bordered table-striped">
                <thead>
                 <tr>
                 <th><input type="checkbox" id="chkmesinkon" name="chkmesinkon" class="chkmesinkon"></input></th>
                 <th>No.</th>
                 <th>AC NO</th>
                 <th>Nama</th>
                 <th>s time</th>
                 <th>machine</th>
                 <th>verify Mode</th>
                 </tr>
                 </thead>
                 <tbody>'; 
		if($ret){
			$attendance = $zk->getAttendance(); 
			while(list($idx, $attendancedata) = each($attendance)):
			if($attendancedata[1]!=0){
			    if ( $attendancedata[2] == 15 ){
                    $status = 'Check Out';
               } else{
                    $status = 'Check In';
				}
			$arr.='<tr>
				<td><input type="checkbox" name="chkmesinkon" id="chkmesinkon" class="chkmesinkon" 
				value=""></input></td> 
				<td>'.$no++.'</td>
				<td>'.$attendancedata[1].'</td>
				<td>'; 
				$id=$attendancedata[1]; 
				$getpeg=$this->db->query('select * from public."USERINFO" where cast("Badgenumber" as integer)='."'$id'".'');  
				if($getpeg->num_rows()>0){
					$arr.=$getpeg->row()->Name; 
				}else{
					$arr.=''; 
					}
				$arr.='</td> 
				<td>'.date( "d-m-Y", strtotime( $attendancedata[3] ) ).' '.date( "H:i:s", strtotime( $attendancedata[3] ) ).'</td>
				<td>'.$ip.'</td>
				<td>'.$status.'</td> 
				</tr>'; 
				}
			endwhile; 	
		}else{
			$arr.='<tr colspan="7">--No Data--</tr>'; 
		}
		
		$arr.='</tbody></table>'; 
		echo $arr; 
		}
	}
		// simpan ke database all 
	function simpankedb2(){
		$userid=$this->input->post('userid'); 
		$checktime=$this->input->post('checktime'); 
		$chktype=$this->input->post('chktype'); 
		$verycode=$this->input->post('vcode'); 
		$sensorid=$this->input->post('sensorid'); 
		$wrokcode=$this->input->post('wkcode'); 
		$sn=$this->input->post('sn');
	}	
	
	
	// simpan download ke database 
	function simpankedb(){
	$iduser= $this->input->post('id');
	$sql=''; 	
	for($i=0; $i<count($iduser); $i++){
		$iduser1=explode(';',$iduser[$i]); 
		$tgljam=date('Y-m-d H:i:s'); 
		$id1=$iduser1[0]; 
		$arr=array(
			'USERID'=>$id1, 
			'CHECKTIME'=>$tgljam, 
			'CHECKTYPE'=>'I', 
			'VERIFYCODE'=>0, 
			'SENSORID'=>'2', 
			'WorkCode'=>0, 
			'sn'=>'', 
			'UserExtFmt'=>1
			);
		$sql.=$this->db->insert('CHECKINOUT',$arr);
		//echo json_encode($id1); 
		//9query('INSERT INTO public."CHECKINOUT" values ('."'$id1'".','."'$tgljam'".','."'I'".','."0".','."'2'".','."0".','."''".','."1".')'); 
		//insert('CHECKINOUT',$arr); 
	}
	
	
	}


}