
            <aside class="right-side">                
                <section class="content-header">
                    <h1>
                        Daftar Administrator
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <button class="btn btn-danger" id="hpsadmin" class="hpsadmin" onclick="hapusadmin();">Hapus</button>
                <button class="btn btn-success" id="tbhadmin" name="tbhadmin" class="tbhadmin" onclick="tbhadmin();">Tambah</button>
                <button class="btn btn-primary" id="refadmin" name="refadmin" class="refadmin" onclick="refreshadmin();">Refresh</button>
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tbadmin">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox" id="chkadminall" name="chkadminall" class="chkadminall"></input></td>
                                                <td>No.</td>
                                                <td>NIP/NIK</td>
                                                <td>NAMA</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1; 
                                        foreach($sql as $row){
                                        ?>
                                        <tr>
                                          <td><input type="checkbox" id="chkadmin" name="chkadmin" class="chkadmin" value=<?php echo $row['USERID']?> ></input></td>
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $row['SSN']?></td>
                                          <td><?php echo $row['Name']?></td>
                                          <td><button type="button" id="buteditadm" name="buteditadm" class="btn btn-success" value=<?php echo $row['USERID']?>>Edit Hak Akses</button></td>
                                          
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
