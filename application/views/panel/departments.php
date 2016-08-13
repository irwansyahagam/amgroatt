
            <aside class="right-side">                
                <section class="content-header">
                    <h1>
                        Pengaturan Departments
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <button type="button" class="btn btn-danger" id="hpsdepart" name="hpsdepart" class="hpsdepart">Hapus</button>
                <button type="button" id="butadddepart" name="butadddepart" class="btn btn-primary">Tambah</button>
                <button type="button" id="butrefdept" name="butrefdept" class="btn btn-success" onclick="javascript:refdepartment();">Refresh</button>
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="lapakdepart">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <td></input></td> <!-- <input type="checkbox" name="chkdeptll" id="chkdeptll"> --> 
                                                <td>No.</td>
                                                <td>Departments</td>
                                                <td>Jumlah Pegawai</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodydepartmen">
                                        <?php 
                                        $no=1; 
                                        foreach ($sql as $row){
                                        ?>
                                        <tr>
                                         <td><input type="checkbox" id="chkdept" name="chkdept" class="chkdept" 
                                         value=<?php echo $row['DEPTID'] ?> />
                                         </input></td>   
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $row['DEPTNAME'] ?></td>
                                          <td><?php 
                                          $sql=$this->db->get_where('USERINFO',array('DEFAULTDEPTID'=>$row['DEPTID']));
                                          $jlh=$sql->num_rows();  
                                          echo $jlh; 
                                          ?></td>
                                          <td><button type="button" name="buteditdepart" id="buteditdepart" value=<?php 
                                          echo $row['DEPTID'].'|'.$row['DEPTNAME'] ?> class="btn btn-primary" />
                                          Edit</button></td>
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

