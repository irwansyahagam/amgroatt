<div class="modal fade" id="modaltbhdftshift" role="dialog" style="padding-top:16%;">
  <div class="modal-dialog" style="width:50%;" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#3C8DBC;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Tambah Daftar Shift</h4>
      </div>
      <div class="modal-body">
      <div class="row">
          <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
            </div>
            <div class="box-body">
              <form role="form" action="javascript:simpanshiftbaru();" enctype="multipart/form-data" method="POST">
              <div class="form-group">
                <input type="hidden" id="kode" name="kode"></input>
                <label for="exampleInputEmail1" style="width: 50%;">Nama Shift</label>
                <input type="text" id="namashiftbaru" name="namashiftbaru" placeholder="Nama Shift" class="form-control"></input>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1" style="width: 50%;">Tgl Mulai</label>
                <input type="text" name="tglmulaishift112" id="tglmulaishift112" value="<?php echo date('Y-m-d');?>" class="form-control"></input>
                <label for="exampleInputEmail1" style="width: 50%;">Tgl Berakhir</label>
                <input type="text" name="tglakhirshift" id="tglakhirshift" value="<?php echo date('Y-m-d');?>" class="form-control"></input>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1" style="width: 50%;">Unit Periode</label>
                  <select class="form-control" id="selunitper123" name="selunitper123">
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
        <button type="submit" class="btn btn-success" id="simpandftshiftbr">Simpan</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
      </div>
       </form>
    </div>
  </div>
</div>

