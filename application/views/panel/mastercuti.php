
            <aside class="right-side">                
                <section class="content-header">
                    <h1>
                        Pengaturan Dinas Luar/ Izin Cuti
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <!--<a href="<?php echo base_url(); ?>panel/artikel/add" class="btn btn-danger">Hapus</a> --> 
                <button type="button" id="buthapusmas" name="buthapusmas" class="btn btn-danger" onclick="javascript:hapusmstercuti();">Hapus</button>
                <a href="#" class="btn btn-primary" onclick="javascript:tambahmastercuti();">Tambah</a>
                <!--<button type="button" id="butrefmastercut" name="butrefmastercut" class="btn btn-success" 
                onclick="javascript:refgridmascuti();">Refresh</button>-->
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tableizincutimas">
                                    <table id="example7" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <td><input type="checkbox" name="chkcutiallmas" id="chkcutiallmas"></input></td>
                                                <td>No.</td>
                                                <td>Nama Jenis Cuti/ Izin</td>
                                                <td>Symbol Report</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1; 
                                        foreach ($sql as $row){
                                        ?>
                                        <tr>
                                         <td><input type="checkbox" id="chkcutimas" name="chkcutimas" class="chkcutimas" value=<?php echo $row['LEAVEID'] ?> />
                                         </input></td> 
                                         <td><?php echo $no++?></td>
                                         <td><?php echo $row['LEAVENAME']?></td>
                                          <td><?php echo $row['REPORTSYMBOL']?></td>
                                          <td><button type="button" class="btn btn-success" value=<?php echo $row['LEAVEID']?>  
                                          id="buteditmas" >Edit</button></td>
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
