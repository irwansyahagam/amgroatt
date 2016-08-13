<div class="modal fade" id="modaladministrator" role="dialog" style="padding-top:9%;">
  <div class="modal-dialog" style="width:50%;" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#3C8DBC;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Tambah Administrator</h4>
      </div>
      <div class="modal-body" id="bodytbhadmin">
        <span class="msg"></span>
        <div class="col-xs-6" style="width: 100%;">
           <table id="example7" class="table table-bordered table-striped">
               <thead>
                 <tr>
                  <td><input type="checkbox" id="chkadmbaruall" name="chkadmbaruall" class="chkadmbaruall"></td>
                  <td style="width: 10px; text-align: center;">NO</td>
                   <td style="width: 10px; text-align: center;">NIK/NIP</td>
                    <td style="width: 30px; text-align: center;">NAMA</td>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no=1; 
                    //$sql6=$this->db->get('USERINFO')->result_array();
                    foreach ($sql6 as $sql){
                     ?>
                    <tr>
                      <td><input type="checkbox" id="chkadmbaru" name="chkadmbaru" class="chkadmbaru" value=<?php echo $sql['USERID']; ?>></td>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $sql['SSN'];?></td>
                      <td><?php echo $sql['Name'];?></td>
                    </tr>
                    <?php 
                      }
                    ?>
                  </tbody>
           </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-success" id="simpanadm" name="simpanadm"  onclick="simpanadmin();">Simpan</button>
      </div>
    </div>

  </div>
</div>
