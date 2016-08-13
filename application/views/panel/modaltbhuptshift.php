<div class="modal fade" id="modaltbhuptshift" role="dialog" style="padding-top:16%;">
  <div class="modal-dialog" style="width:50%;" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#3C8DBC;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Update Daftar Shift</h4>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
            </div>
            <div class="box-body">
              <form role="form" action="javascript:updateshift();" enctype="multipart/form-data" method="POST">
              <div class="form-group">
                <input type="hidden" id="kode1" name="kode1"></input>
                <label for="exampleInputEmail1" style="width: 50%;">Nama Shift</label>
                <input type="text" id="nmshiftupd" name="nmshiftupd" placeholder="Nama Shift" class="form-control" required></input>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" style="width: 50%;">Tgl Mulai</label>
                <input type="text" name="tglmulaishift1edit" id="tglmulaishift1edit" value="<?php echo date('Y-m-d');?>" class="form-control"></input>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1" style="width: 50%;">Unit Periode</label>
                  <select class="form-control" id="selunitperedit" name="selunitperedit">
                  <option value=''>--Pilih--</option>
                    <!--<option value='0'>Hari</option>-->
                    <option value='1'>Minggu</option>
                    <option value='2'>Bulan</option>
                  </select>
              </div>
             
            </div>
          </div>
          </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="updateshift">Update</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
      </div>
       </form>
    </div>
  </div>
</div>

