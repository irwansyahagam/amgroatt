<div class="modal fade" id="modalctkjdwal" role="dialog" style="padding-top:4%;">
  <div class="modal-dialog" style="width:30%;" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#3C8DBC;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Cetak Jadwal</h4>
      </div>
      <div class="modal-body" id="bodyhadirpeg">
        <table border="0" class="table" style="width: 100%;" align="left">
              <tr><td>Periode</td>         
              <td>
              <input type="text" id="awal" readonly name="awal" value=<?php echo date('d-m-Y');?>></td>
              <td align="left">s.d</td> <td><input type="text" id="awal2" name="awal2" value=<?php echo date('d-m-Y'); ?>>
              </td></tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="ctkjdwal" name="ctkjdwal">Cetak</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
      </div>
    </div>

  </div>
</div>
