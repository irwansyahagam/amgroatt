<div class="modal fade" id="modaltbhjdwal" role="dialog" style="padding-top:0%;">
  <div class="modal-dialog" style="width:50%;" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#3C8DBC;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Jadwal Kerja Pegawai</h4>
      </div>
      <div class="modal-body">
      <div class="row">
      <fieldset class="group"> 
<div class="col-xs-4">
<legend>Masuk Kerja</legend> 
<ul class="checkbox"> 
  <li><input type="checkbox" id="cb1" value="pepperoni" checked /><label for="cb1">Ikut Jam Kerja</label></li> 
  <li><input type="checkbox" id="cb2" value="sausage" /><label for="cb2">Harus Scan Masuk</label></li> 
  <li><input type="checkbox" id="cb3" value="mushrooms" /><label for="cb3">Ijinkan Tdk scan</label></li> 
</ul> 
</div>
<div class="col-xs-4" style="padding-left: 90px;">
<legend>Jam Pulang</legend> 
<ul class="checkbox"> 
  <li><input type="checkbox" id="cb1" value="pepperoni" checked /><label for="cb1">Ikut Jam Kerja</label></li> 
  <li><input type="checkbox" id="cb2" value="sausage" /><label for="cb2">Harus Scan Masuk</label></li> 
  <li><input type="checkbox" id="cb3" value="mushrooms" /><label for="cb3">Ijinkan Tdk scan</label></li> 
</ul> 
</div>
</fieldset> 
<hr style="border-width: 1px;" />
        <div class="col-xs-12">
          <button type="button" class="btn btn-success" id="jdwalkerjapegtbh">Tambah</button>&nbsp; 
          <button type="button" class="btn btn-primary" onclick="hpsjdwal();">Hapus</button>
		  <button type="button" class="btn btn-primary" onclick="refbutjadwal();">Refresh</button>
		  	
                            <div class="box">
                                <div class="box-header">
                                <span class="label label-success">Daftar Jadwal Kerja yg aktif</span>                                       
                                </div><!-- /.box-header -->
                                <input type="hidden" id="kduserjdwal" name="kduserjdwal"></input>
                                <div class="box-body table-responsive" id="tbjdwalgrid">
                                <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <td style="width: 4%;text-align: center;">
                                    </td>
                                    <td style="width: 10%;text-align: center;">Tgl Mulai</td>
                                    <td style="width: 10%;text-align: center;">Tgl akhir</td>
                                    <td style="width: 20%; text-align: center;">Jadwal Kerja</td>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $sql=$this->db->get('NUM_RUN'); 
                                $no=1; 
                                foreach($sql->result_array() as $row){ 
                                  if(!empty($row['ENDDATE'])){
                                    $tgl1=viewtglweb($row['ENDDATE']); 
                                  }else{
                                    $tgl1=''; 
                                  }
                                ?>
                                  <tr>
                                  <td style="text-align: center;"><input type="checkbox" id="chjdwalpeg"
                                   value=<?php echo $row['NUM_RUNID'].'|'.viewtglweb($row['STARTDATE']) ?> 
								   name="chjdwalpeg" class="chjdwalpeg"></input></td>
                                  <td><?php echo viewtglweb($row['STARTDATE']) ?></td>
                                  <td><?php echo $tgl1; ?></td>
                                  <td><?php echo $row['NAME'] ?></td>
                                  </tr>
                                  <?php 
                                  }
                                  ?>
                                </tbody>
                                </table>
                                </div>
                                </div>
                                <div class="col-xs-12">
                            <div class="box">
                            <span>Tgl ("Format: dd-mm-yyyy")</span> 
                           <input type="text" style="width: 20%; cursor: pointer;" class="form-control" placeholder="Tgl" 
                          name="idjadwal56" id="idjadwal56" value=<?php echo date('d-m-Y') ;?> readOnly></input>
                          <span>S.d</span>
                          <input type="text" style="width: 20%; cursor: pointer;" class="form-control" placeholder="Tgl" 
                          name="idjadwal67" id="idjadwal67" value=<?php echo date('d-m-Y') ;?> readOnly></input>
                            </div>
                            </div>


                                </div>

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="butsimpanjdwal6">Simpan</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>
<style type="text/css">
  fieldset.group  { 
  margin: 0; 
  padding: 0; 
  margin-bottom: 1.25em; 
  padding: .125em; 
  width: 70px; 
} 

fieldset.group legend { 
  margin: 0; 
  padding: 0; 
  font-weight: bold; 
  margin-left: 20px; 
  font-size: 100%; 
  color: black; 
  width: 110px;
} 


ul.checkbox  { 
  margin: 0; 
  padding: 0; 
  margin-left: 20px; 
  list-style: none; 
} 

ul.checkbox li input { 
  margin-right: .25em; 
} 

ul.checkbox li { 
  border: 1px transparent solid; 
  display:inline-block;
  width:12em;
} 

ul.checkbox li label { 
  margin-left: ; 
} 
ul.checkbox li:hover, 
ul.checkbox li.focus  { 
  background-color: lightyellow; 
  border: 1px gray solid; 
  width: 12em; 
} 

</style>

<script type="text/javascript">
  $(document).ready(function(){
    var tgl1=$('#idjadwal56').val(); 
    var hr=30; 
    var request=$.ajax({
      type:'POST',timeout:360000, async:false, 
      url:base_url+'index.php/c_admin/convtgl/'+tgl1+'/'+hr, 
      data:{

      },beforeSend:function(jqXHR,setting){
        $('#idjadwal67').val('09-09-2016');
      },success:function(callback){
        $('#idjadwal67').val(callback);
      }
    }); 
    request.fail(function(jqXHR,textStatus){
      $('#idjadwal67').val('09-09-2016');
    })
    // 
  }); 

</script>