// hapus disposisi untuk 
public function hpsuntukdispo(){
    $arr=array(); 
    $nomk=$this->input->post('nomk'); 
    $kdunit=$this->session->userdata('kdunit'); 
    for($i=0;$i<count($nomk);$i++){
        $nomk1=explode(',',$nomk[$i]); 
        $nomk2=$nomk1[0]; 
        //$sql=$this->db->query("delete from detail_disposisi where noagenda='$nomk2' and kdunitpenerima='$kdunit'"); 
        $sql=$this->db->query("update detail_disposisi set hps='1' where noagenda='$nomk2' and kdunitpenerima='$kdunit'"); 
    }
}


$(document).on("click","#hpsdispuntuk", function(e){
	var arrid= [];
	var kdmk= []; 
	var value_check = "";
	$('.chekuntuk:checked').each(function(){
		arrid.push($(this).attr('chekuntuk')); 
	}); 
	if(arrid.length>1){
		//alert('Silahkan checklist data yg akan dihapus'); 
		dhtmlx.alert({
			title:'Informasi', 
			text:'Silahkan Checklist data yg akan dihapus'
		}); 
	}else{
		//var kon=confirm('Hapus data terchecklist ?'); 
		//if(kon){
		dhtmlx.message({
			type:'confirm', 
			text:'Hapus data terchecklist', 
			callback:function(result){
				if(result){
				$('.chekuntuk:checked').each(function(){
				kdmk.push($(this).val()); 
			}); 
			var request=$.ajax({
				type:'POST', timeout:360000, 
				async:false,
				url:BASE_URL+'disposisi/hpsuntukdispo', 
				data:{
					nomk:kdmk
				}, beforeSend:function(jqXHR,setting){

				}, success:function(callback){
					//alert('Berhasil dihapus'); 
					dhtmlx.alert({
						title:'Sukses', 
						text:'Berhasil dihapus'
					}); 
					document.location.href=BASE_URL+'disposisi/untuk'; 
				}
			}); 
			request.fail(function(jqXHR,textStatus){
				//alert('request failed: '+textStatus); 
				dhtmlx.alert({
					title:'Error',
					text:'Request failed: '+textStatus 
				}); 
			}); 
		}else{
			return true; 
			}
		}
		})

		//}
	}
}); 

// check all  daftar mesin
$(document).on("click","#chkmesin", function(){
		$('#chkmesin1').attr('checked', this.checked);
});

	// proses update pendidikan
	function updpendidikan(){
		$id=$this->input->post('id');
		$nm=strtoupper($this->input->post('nm'));
		$arr=array(
			'NAMAPEND'=>$nm
		);
		$sql=$this->db->update('PENDIDIKAN',$arr,array('IDPENDIDIKAN'=>$id));
		if($sql){
			echo '1'; // berhasil melakukan update
		}else{
			echo '0'; // gagal melakukan update
		}
	}


	       <input type="hidden" id="iduser" name="iduser"></input>
                            <!-- general form elements -->
        <div class="box box-primary" >
        <div  style="float: left; width: 46%;">
        <div class="form-group" style="margin-bottom: 0px; display: none;">
        <label for="exampleinputemail">No ID</label>
        <input type="number" value="" name="noidbaru" id="noidbaru" class="form-control">
        </input>
        </div>
        <div class="form-group" style="margin-bottom: 0px;">
        <label for="exampleInputEmail">Nama</label>
        <input type="text" class="form-control" placeholder="Nama" id="namabarupeg" name="namabarupeg">
        </input>
        </div>
        <div class="form-group" style="margin-bottom: 0px;">
        <label for="exampleInputEmail1">NIP/NIK</label>
        <input type="text" value="" name="nikbaru" id="nikbaru" class="form-control" 
        placeholder="NIK" />
        </div>
        <div class="form-group" style="margin-bottom: 0px;">
        <label for="exampleInputEmail1">Pangkat/Golongan</label>
        <input type="text" value="" name="pangbaru" id="pangbaru" class="form-control" 
        placeholder="Pangkat/Golongan" />
        </div>
        <div class="form-group" style="margin-bottom: 0px;">
        <label for="exampleInputEmail1">Jabatan</label>
        <input type="text" value="" name="jabbaru" id="jabbaru" class="form-control" 
        placeholder="Jabatan" />
        </div>
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleinputemail">Jenis Kelamin</label>
                                    <select name="jkbaru" id="jkbaru" class="form-control">
                                        <option value="">--Pilih--</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                                <div class="form-group" style="margin-bottom: 0px; ">
                                    <label for="exampleInputEmail">Tgl Lahir </label>
                                    <input type="text" readonly="true" class="form-control" id="tglahirbaru" 
                                    name="tglahirbaru"></input>
                                </div>
                                </div>
                                    <!--float right--> 
                                    <div  style="float:right; width: 46%;">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label for="exampleInputEmail">Pendidikan</label>
                                        <select class="form-control" id="pendbaru" name="pendbaru">
                                            <option value="">--Pilih--</option>
                                            <?php 
                                            foreach($sql as $row){
                                                echo '<option value="'.$row['IDPENDIDIKAN'].'">'.$row['NAMAPEND'].'</option>'; 
                                            }
                                            ?>
                                        </select>
                                        <!--<input type="text" id="pendpeg" name="pendpeg" class="form-control" 
                                        placeholder="Pendidikan Pegawai"></input> --> 
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label for="exampleinputEmail">Foto</label>
                                        <input type="file" class="form-control" id="fotopeg" name="fotopeg" accept="image/*"></input>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label for="exampleinputemail">Tgl Masuk</label>
                                        <input type="text" readonly="true" id="tglmskpeg" class="form-control" name="tglmskpeg"></input>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleinputemail">No Telp/Hp</label>
                                    <input type="number" class="form-control" id="nopepeg" name="nopepeg" maxlength="16"></input>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px">
                                    <label for="exampleinputemail">Status</label>
                                    <select class="form-control" id="stspeg" name="stspeg">
                                        <option value="">--Pilih--</option>
                                        <option value="0">Invalid</option>
                                        <option value="1">User</option>
                                        <option value="2">Enroller</option>
                                        <option value="3">Manager</option>
                                        <option value="4">Supervisor</option>
                                    </select>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleInputEmail">Alamat</label>
                                    <input type="text" class="form-control" name="alamatbaru" id="alamatbaru" placeholder="Alamat"></input>
                                </div>
                                
                                </div>


    $('#example3 tbody').on('click', 'tr', function () { 
        var a=$(this).text(); 
        var b=a.split(""); 
        var c=b[0]; 
        var tgl1=$('#tgl1jdwal').val(); 
        var tgl2=$('#tgl2jdwal').val(); 
        var request=$.ajax({
        	type:'POST',timeout:360000, 
        	async:true, 
        	url:base_url+'index.php/c_admin/getjdwalshift', 
        	data:{
        		kdunit:c,tgl1:tgl1,tgl2:tgl2
        	}, beforeSend:function(jqXHR,setting){
        		$('#tbodyjdwal').html('Loading...'); 
        	},success:function(callback){
        		//refrtable(); 
        		$('#tbodyjdwal').html(callback); 
        		$('#example4').dataTable();

        	}
        }); 
        request.fail(function(jqXHR,textStatus){
        	dhtmlx.alert({
        		title:'Error', text:'Request failed: '+textStatus
        	}); 
        })
    } );


    $(document).on("click","#example7 tbody tr td#idshift",function(){
	var table=$('#example1').dataTable(); 
	var data=Array(); 
    var texto= $(this).text();  
    var kdjam=texto.split("|"); 
    var kdjam1=kdjam[0]; 
    var units=kdjam[1]; 
    var unitarr=Array();
    var unitarr1='';  
    $('.kdjamdel12').val(kdjam1); 
    $('#kdunitdel').val(units); 
    //var i=''; 
	//alert(texto); 
	$('#tbodyshift').html('Loading....'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/getarrayjaga', 
		data:{
			kd:kdjam1,units:units
		},beforeSend:function(jqXHR,setting){
			$('#tbodyshift').html('Loading....');
		},success:function(callback){
			$('#tbodyshift').html(callback);
		}
	}); 	
	request.fail(function(jqXHR,textStatus){
		$('#tbodyshift').html('request failed: '+textStatus); 
	}); 
}); 


    $(document).on("click","#example7 tbody tr td#idshift",function(){
	var table=$('#example1').dataTable(); 
	var data=Array(); 
    var texto= $(this).text();  
    var kdjam=texto.split("|"); 
    var kdjam1=kdjam[0]; 
    var units=kdjam[1]; 
    var unitarr=Array();
    var unitarr1='';  
    $('.kdjamdel12').val(kdjam1); 
    $('#kdunitdel').val(units); 
    //var i=''; 
	//alert(texto); 
	$('#tbodyshift').html('Loading....'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/getarrayjaga', 
		data:{
			kd:kdjam1,units:units
		},beforeSend:function(jqXHR,setting){
			$('#tbodyshift').html('Loading....');
		},success:function(callback){
			$('#tbodyshift').html(callback);
		}
	}); 	
	request.fail(function(jqXHR,textStatus){
		$('#tbodyshift').html('request failed: '+textStatus); 
	}); 
}); 


$(document).on("click","#example1 tbody tr#trpegawai", function(){
    var table=$('#example1').dataTable(); 
    var position = table.fnGetPosition(this); 
    var id = table.fnGetData(position)[1]; 
    var request=$.ajax({
        type:'POST',timeout:360000, 
        async:false, 
        url:base_url+'index.php/c_admin/reftablepegawai', 
        data:{
            kd:id
        }, beforeSend:function(jqXHR,setting){
            $('#tbodypegawai').html('Loading...'); 
        },success:function(callback){
            $('#example1').dataTable(); 
            $('#tbodypegawai').html(callback); 
        }
    }); 
    request.fail(function(jqXHR,textStatus){
        $('#tbodypegawai').html('Request failed: '+textStatus); 
    });  
    });  


<table id="example7" class="table table-bordered table-striped">
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


    function getarrayjaga(){
        //$arr=[{"Senin","Selasa"); 
        $kd=trim($this->input->post('kd')); 
        $units=$this->input->post('units'); 
        // note 1=minggu, 2=bulan 
        $sql=$this->db->query('select a."NUM_RUNID",(extract(hour from a."STARTTIME"
                        ) || '."':'".'|| extract(minute from a."STARTTIME"
                        )) as STARTTIME,(extract(hour from a."ENDTIME"
                        ) || '."':'".' || extract(minute from a."ENDTIME"
                        )) as ENDTIME,a."SDAYS",a."edays",a."schclassid",a."overtime"  
                        from public."NUM_RUN_DEIL" a where a."NUM_RUNID"='."'$kd'".' 
                        order by a."SDAYS"');// a."NUM_RUNID"='."'$kd2'".''); 
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
              echo '</td>'; 
              echo '<td '; 
              $att1= (float) str_replace(':', '.',$row->starttime);
              $att2= (float) str_replace(':','.',$row->endtime); 
              $hatt=round($att2)-round($att1);
              $tt=substr($row->starttime,0,1); 
              $tt11=substr($row->starttime,0,2); 
              if($tt=='0'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
              <td '; 
              $att2= (float) str_replace(':', '.',$row->starttime);
              $att3= (float) str_replace(':','.',$row->endtime); 
              $hatt2=round($att3)-round($att2);
              $tt1=substr($row->starttime,0,1); 
              if($tt1=='1'){
                $hatt3=$hatt2+1; 
                echo 'colspan="'.$hatt3.'" style="background-color:#3C8DBC;border-width:0px;"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
              <td ';
              $att1= (float) str_replace(':', '.',$row->starttime);
              $att2= (float) str_replace(':','.',$row->endtime); 
              $hatt=round($att2)-round($att1);
              $att=substr($row->starttime,0,1); 
              $att1=substr($row->starttime,0,1); 
              if($att=='2'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"
                '; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
              <td '; 
              $att1= (float) str_replace(':', '.',$row->starttime);
              $att2= (float) str_replace(':','.',$row->endtime); 
              $hatt=round($att2)-round($att1);
              $att=substr($row->starttime,0,1); 
              if($att=='3'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
              <td ';
              $att1= (float) str_replace(':', '.',$row->starttime);
              $att2= (float) str_replace(':','.',$row->endtime); 
              $hatt=round($att2)-round($att1);
              if($att=='4'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($att=='5'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
              }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($att=='6'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($att=='7'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($att=='8'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($att=='9'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($tt11=='10'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
               if($tt11=='11'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='12'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='13'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='14'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='15'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='16'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='17'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='17'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='18'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='19'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='20'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='21'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='22'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='23'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt11=='24'){
                $hatt1=$hatt+1; 
                echo '<span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span>colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '></td>
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
              echo '</td>'; 
              echo '<td '; 
              $att1= (float) str_replace(':', '.',$row->starttime);
              $att2= (float) str_replace(':','.',$row->endtime); 
              $hatt=round($att2)-round($att1);
              $tt=substr($row->starttime,0,1);
              $tt12=substr($row->starttime,0,2); 
              if($tt=='0'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
              <td '; 
              $att2= (float) str_replace(':', '.',$row->starttime);
              $att3= (float) str_replace(':','.',$row->endtime); 
              $hatt2=round($att3)-round($att2);
              $tt1=substr($row->starttime,0,1); 
              if($tt1=='1'){
                $hatt3=$hatt2+1; 
                echo 'colspan="'.$hatt3.'" style="background-color:#3C8DBC;border-width:0px;"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
              <td ';
              $att1= (float) str_replace(':', '.',$row->starttime);
              $att2= (float) str_replace(':','.',$row->endtime); 
              $hatt=round($att2)-round($att1);
              $att=substr($row->starttime,0,1); 
              if($att=='2'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"
                '; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
              <td '; 
              $att1= (float) str_replace(':', '.',$row->starttime);
              $att2= (float) str_replace(':','.',$row->endtime); 
              $hatt=round($att2)-round($att1);
              $att=substr($row->starttime,0,1); 
              if($att=='3'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
              <td ';
              $att1= (float) str_replace(':', '.',$row->starttime);
              $att2= (float) str_replace(':','.',$row->endtime); 
              $hatt=round($att2)-round($att1);
              if($att=='4'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
              }
              echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($att=='5'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
              }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($att=='6'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($att=='7'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($att=='8'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($att=='9'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
                if($tt12=='10'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td '; 
               if($tt12=='11'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='12'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='13'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='14'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='15'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='16'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='17'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='17'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='18'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='19'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='21'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='22'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='23'){
                $hatt1=$hatt+1; 
                echo 'colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '><div><span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span></div></td>
                <td ';
                if($tt12=='24'){
                $hatt1=$hatt+1; 
                echo '<span style="color:rgba(249, 249, 249, 0);float:left">'.$row->starttime.'</span>
              <span style="color:rgba(249, 249, 249, 0);float:right;">'.$row->endtime.'</span>colspan="'.$hatt1.'" style="background-color:#3C8DBC;"'; 
                }
                echo '></td>
                </tr>'; 

            }
        }else{
            echo '<td colspan="28"><h5><span class="lbl lbl-danger">Jadwal Kosong</span><h5></td></tr>'; 
            //echo '</tr>'; 
        }
    }

    }  

//getjdwalshift
//getjadwalpeg 
//$('#tbjdwalkerja').html('Loading...');
//simpanjadwalpeg

$tanggal = '2015-06-02';
$day = date('l', strtotime($tanggal));
echo "Tanggal {$tanggal} adalah hari : " . $day;


$tanggal = '2015-06-03';
$day = date('D', strtotime($tanggal));
$dayList = array(
    'Sun' => 'Minggu',
    'Mon' => 'Senin',
    'Tue' => 'Selasa',
    'Wed' => 'Rabu',
    'Thu' => 'Kamis',
    'Fri' => 'Jumat',
    'Sat' => 'Sabtu'
);
echo "Tanggal {$tanggal} adalah hari : " . $dayList[$day];

; 
              if($row['SDAYS']=='1'){
                echo 'Senin'; 
              }else if($row['SDAYS']=='2'){
                echo 'Selasa'; 
              }else if($row['SDAYS']=='3'){
                echo 'Rabu'; 
              }else if($row['SDAYS']=='4'){
                echo 'Kamis'; 
              }else if($row['SDAYS']=='5'){
                echo 'Jumat'; 
              }else if($row['SDAYS']=='6'){
                echo 'Sabtu'; 
              }else if($row['SDAYS']=='7'){
                echo 'Minggu'; 
              }
              echo ''; 

    function convtgl(){
        $tgl=date('d-m-Y', strtotime('-20 days', strtotime('2016-09-08'))); 
        $tgl1=(int) strtotime('2016-09-20'); 
        echo $tgl.'-'.$tgl1.'<br />'; 
        echo $tgl-$tgl1.'<br />'; 
        echo $tgl ; 
    }              


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
            $config['upload_path']  = $path;
            $config['allowed_types']= 'gif|jpg|png|jpeg|bmp';
            $config['file_name'] = $n_baru;
            $config['remove_spaces']= true;
            $config['max_size']     = '50000';
            $config['max_width']    = '10000';
            $config['max_height']   = '10000';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 

            if($this->upload->do_upload('fotopeg')){
                $data = $this->upload->data();
                $source             = './file/foto/'.$data['file_name'] ;
                $destination_thumb  = './file/foto/' ;
                $destination_medium = './file/foto/' ;
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
                    'CITY'=>$alamat, 
                    'OVERTIME'=>'1', 
                    'SEP'=>'1', 
                    'HOLIDAY'=>'1', 
                    'LUNCHDURATION'=>'1', 
                    'privilege'=>$stspeg, 
                    'IDPANGKAT'=>$pangkat, 
                    'STTSKEPE'=>$sttskepe
                    ); 
                $sql=$this->db->insert('USERINFO',$arr); 

            }else{
                $error = array('error' => $this->upload->display_errors());
                print_r($error);
                exit();
            }

        }

