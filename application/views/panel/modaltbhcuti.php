<div class="modal fade" id="modaltbhcuti" role="dialog" style="padding-top:3%;">
  <div class="modal-dialog" style="width:50%;height: 99%;" >

    <!-- Modal content-->
    <form role="form" action="" onsubmit="return true" enctype="mulipart/form-data" method="POST">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#3C8DBC;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Tambah Pengaturan Izin/Cuti</h4>
      </div>
      <div class="modal-body">
      <div class="col-md-12" id="modtbhmesin">
                  <div class="box box-primary" >
              <div  style="float: left; width: 46%;">
            <div class="form-group" style="margin-bottom: 0px;">
            <label for="exampleInputEmail">Nama Izin/Cuti</label>
            <input type="text" class="form-control" placeholder="Nama Izin" value="" id="namaizin" name="namaizin">
            </input>
            </div>

                <div class="form-group" style="margin-bottom: 0px;">
            <label for="exampleInputEmail1">Symbol Di Laporan</label>
            <input type="text" value="" name="simbolrep" id="simbolrep" class="form-control" 
            placeholder="Simbol Di Laporan" maxlength="2" />
            </div>
            <div class="form-inline" style="margin-bottom: 0px;">
            <label for="exampleInputEmail1">Minimal Unit</label>
            <input type="number" value="1" name="minunit" id="minunit" class="form-control" 
            placeholder="minimal unit" maxlength="2" /><br />
            <select name="minhr" id="minhr" class="form-control">
              <option value="3">Hari</option>
              <option value="2">Menit</option>
              <option value="1">Jam</option>

            </select>
            </div>

            

            </div></div>

     
      </div> <!-- end column 12 --> 
      </div>

      
      <div class="modal-footer" style="padding-top: 19px;">
        <button type="button" class="btn btn-success" onclick="javascript:simpanmascuti();">Simpan</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
      </div>

    </div>
    </form>
  </div>
</div>
