<div class="modal fade" id="jdwltdktetap" role="dialog" style="padding-top:10%;">
  <div class="modal-dialog" style="width:80%;" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#3C8DBC;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Tambah Daftar Shift</h4>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              
            </div>
            <div class="box-body">
              <form role="form" action="javascript:simpanshiftbaru();" enctype="multipart/form-data" method="POST">
                <input type="hidden" id="kdpega" name="kdpega">
          <div class="box-body table-responsive">
             <table id="example1" class="table table-bordered table-striped" style="font-size: 12px;">
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
                    ))as ENDTIME,a."STARTTIME",a."ENDTIME" FROM public."SCHCLASS" a'); 
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
          </div><!--end div col 6 --> 
          <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              
            </div>
             <div class="box-body table-responsive" id="tbjdtdkttp">

             </div>
            </div>
            </div>


      </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="simpandftshiftbr">Simpan</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
      </div>
       </form>
    </div>
  </div>
</div>

