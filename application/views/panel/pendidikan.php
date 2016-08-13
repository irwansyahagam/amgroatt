
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Master Pendidikan
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content" id="contentpend">
                <button type="button" class="btn btn-danger" id="hpspendi">Hapus</button>
                <button type="button" class="btn btn-success" id="tbhpendbaru" name="tbhpendbaru">Tambah</button>
                <button type="button" class="btn btn-primary" id="butrefpend" name="butrefpend" onclick="javascript:refbutpend();">Refresh</button>
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Master Pendidikan</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tbrefpendi">
                                    <table id="example12" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td style="text-align:center; width:5%;"><input type="checkbox" id="chkpendall" 
                                                name="chkpendall"></input></td>
                                                <td  style="text-align:center; width:5%;">No.</td>
                                                <td  style="text-align:center; width:15%;">Kode Pendidikan</td>
                                                <td   style="text-align:center;">Pendidikan</td>
                                                <td style="text-align: center;">Skor</td>
                                                <td style="text-align:center;">Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1; 
                                        foreach($sql as $row){
                                        ?>
                                          <tr>
                                           <td  style="text-align:center; width:5%;"><input type="checkbox" 
                                           id="chkpend" class="chkpend" name="chkpend" value=<?php echo  $row['IDPENDIDIKAN']?> ></input></td>
                                          <td  style="text-align:center; width:5%;"><?php echo $no++; ?></td>
                                          <td   style="text-align:left; width:15%;"><?php echo $row['IDPENDIDIKAN'] ?></td>
                                          <td><?php echo $row['NAMAPEND'] ?></td>
                                          <td style="text-align:center; width:5%;"><?php echo $row['skor']?></td>
                                          <td><?php echo '<button type="button" class="btn btn-primary" title="Edit"
                                          value="'.$row['IDPENDIDIKAN'].'|'.$row['NAMAPEND'].'|'.$row['skor'].'" id="btneditpend">Edit</button>'; ?></td>
                                        </tr>
                                        <?php 
                                         }
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!--<script type="text/javascript">
            $(document).on("click","#tbhpendbaru", function(){
                $('#contentpend').html('Loading.....');
                var request=$.ajax({
                  type:'POST', timeout:360000, 
                  async:false, data:{

                  },url:base_url+'index.php/panel/addpend', 
                  beforeSend:function(jqXHR,setting){
                    $('#contentpend').html('Loading.....');
                  },success:function(callback){
                    var msg=callback[0]; 
                    $('#contentpend').html(callback); 
                  }
                });   
            }); 

        </script>-->
