<div class="modal fade" id="modalaaksesadmin" role="dialog" style="padding-top:9%;">
  <div class="modal-dialog" style="width:50%;" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#3C8DBC;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:white;">Edit Akses Admin</h4>
      </div>
      <div class="modal-body" id="bodytbhadmin">
        <span class="msg"></span>
        <div class="col-xs-6" style="width: 100%;">
        <input type="hidden" name="iduserakses" id="iduserakses"></input>
           <table id="example7" class="table table-bordered table-striped">
               <thead>
                 <tr>
                  <td><input type="checkbox" id="chkaksesall" name="chkaksesall" class="chkaksesall"></td>
                   <td style="width: 10px; text-align: center;">Menu</td>
                   <td>Menu Parent</td>
                   <td>Url</td>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                  foreach($sql78 as $row){
                  ?>
                  <tr>
                    <td><input type="checkbox" id="chkakses" name="chkakses" class="chkakses"
                   value=<?php echo $row['id']?> ></input></td>
                    <td><?php echo $row['menu']?></td>
                    <td><?php echo $row['menuparent']?></td>
                    <td><?php echo $row['url']?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
           </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-success" id="simpanadmaks" name="simpanadmaks" >Simpan</button>
      </div>
    </div>

  </div>
</div>
