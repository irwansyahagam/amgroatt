
            <aside class="right-side">                
                <section class="content-header">
                    <h1>
                        Riwayat Operasional 
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <button class="btn btn-danger" id="hpsoperasional" name="hpsoperasional">Hapus</button>
                <a href="javascript:cetakriwoperasional();" class="btn btn-success">Print</a>
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td style="width: 4%;text-align: center;">
												<input type="checkbox" id="chkoperasio" name="chkoperasio"></input></td>
                                                <td style="width: 10%;text-align: center;">No.</td>
                                                <td style="width: 10px; text-align: center;">Operator</td>
                                                <td style="width: 10px; text-align: center;">Tgl, Jam</td>
                                                <td style="width: 10px; text-align: center;">Mesin</td>
                                                <td style="width: 10px; text-align: center;">Deskripsi</td>
                                            </tr>

                                        </thead>
                                        <tbody>
										<?php 
										$no=1; 
											foreach($sql as $row){
										?>
										<tr>
                                        <td style="width: 4%;text-align: center;">
										<input type="checkbox" id="chkoperasio" name="chkoperasio" class="chkoperasio" value=<?php echo $row['ID']; ?> ></input></td>
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $row['Operator']; ?></td>
                                          <td><?php echo (viewtglweb($row['Logtime'])).', '. (getjamweb($row['Logtime'])); ?></td>
                                          <td><?php echo $row['MachineAlias']; ?></td>
                                          <td><?php echo $row['LogDescr']; ?></td>
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
