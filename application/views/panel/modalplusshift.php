<div class="modal fade" id="modalplusshift" role="dialog" style="padding-top:6%;">
  <div class="modal-dialog" style="width:80%;" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#3C8DBC;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Modal Tambah Periode Shift</h4>
      </div>
      <div class="modal-body">
      <input type="hidden" name="tglshift" id="tglshift"></input>
      <input type="hidden" name="kdshift1" id="kdshift1"></input>
        <div class="row">
          <div class="col-xs-6" style="width: 50%;padding-left: 0px;padding-right: 0px;">
          <div class="box">
          <div class="box-header">                              
          </div><!-- /.box-header -->
          <div class="box-body table-responsive">
             <table id="example1" class="table table-bordered table-striped" style="font-size: 10px;">
             <thead>
               <tr>
                 <td>&nbsp;</td>
                 <td>&nbsp;</td>
               </tr>
             </thead>
             <tbody id="tbodymodshift">
                 <?php 
                       $sql=$this->db->query('select a."SCHCLASSID",a."SCHNAME", (extract(hour from a."STARTTIME"
                ) || '."':'".' || extract(minute from a."STARTTIME"
              )) as STARTTIME,(extract(hour from a."ENDTIME"
              ) || '."':'".' || extract(minute from a."ENDTIME"
              )) as ENDTIME,a."STARTTIME",a."ENDTIME" FROM public."SCHCLASS" a'); 
                       foreach ($sql->result() as $key){
                        echo '<tr>
                        <td style="width:10%;"><input type="checkbox" id="chkmodplusshhift" class="chkmodplusshhift"
                        name="chkmodplusshhift" value="'.$key->SCHCLASSID.'|'.$key->STARTTIME.'|'.$key->ENDTIME.'"></input></td>
                           <td>'.$key->SCHNAME.'['.$key->starttime.'-'.$key->endtime.']'.'</td>
                           '; 
                       }
                       ?>
               </tr>
             </tbody>
            </table>
          </div>
          </div>
          </div>
          <div class="col-xs-6" style="width: 50%;padding-left: 0px;padding-right: 0px;">
          <div class="box">
          <div class="box-header">                              
          </div><!-- /.box-header -->
          <div class="box-body table-responsive" id="tbjamkerjagrid">
                       
          </div>
          </div>
          </div>
      </div>

      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-success" id="simpanshhiftadd" onclick="javascript:simpanshiftadd();">OK</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
  function simpanshiftadd(){
    var arrid=[]; 
    var kdjam=[]; 
    var kdshift=[]; 
    var kdshiftme=$('.chkmodplusshhift:checked').val(); 
    var kd1s=kdshiftme.split("|"); 
    var start=kd1s[1]; 
    var etime=kd1s[2]; 
    var tgl=$('#tglshift').val(); 
    $('.chkjamkerja12:checked').each(function(){
      arrid.push($(this).attr('chkjamkerja12')); 
    }); 
    $('.chkmodplusshhift:checked').each(function(){
      kdshift.push($(this).attr('chkmodplusshhift')); 
    }); 
    if(arrid.length<=0){
      dhtmlx.alert({
      title:'Informasi', 
      text:'Silahkan Checklist data yg akan disimpan'
    }); 
    }else if(kdshift.length<=0){
      dhtmlx.alert({
        title:'Informasi', text:'Silhkan checklist salah satu Jam kerja yg ditentukan', 
        type:'confirm-alert'
      }); 
    }else if(kdshift.length>1){
      dhtmlx.alert({
        title:'Konfirmasi',text:'Checklist Periode shift hanya diberlakukan satu saja', 
        type:'confirm-alert'
      }); 
    }else{
      dhtmlx.message({
        type:'confirm', 
        text:'Simpan data terchecklist', 
        callback:function(result){
          if(result){
            $('.chkjamkerja12:checked').each(function(){
              kdjam.push($(this).val()); 
            }); 
            /**$('.chkmodplusshhift:checked').each(function(){
            tgl.push($(this).val()); 
            }); **/ 
            var request=$.ajax({
              type:'POST',timeout:360000, async:false, 
              data:{
                id:kdjam,tgl:tgl,kdshift1:start,kdshift2:etime
              },url:base_url+'index.php/c_admin/simpanshift', 
              beforSend:function(jqXHR,setting){

              },success:function(callback){
                var msg=callback[0]; 
                if(msg=='1'){
                  dhtmlx.alert({
                  title:'Sukses', text:'Berhasil disimpan'
                }); 
                }else if(msg=='0'){
                  dhtmlx.alert({
                  title:'Gagal', text:'Gagal Melakukan penyimpanan'
                }); 
                }
              }
            }); 
            request.fail(function(jqXHR,textStatus){
              dhtmlx.alert({
                text:'request failed: '+textStatus, 
                title:'Error', type:'alert-error'
              }); 
            }); 
          }
        }
      }); 
    }
  }
</script>
