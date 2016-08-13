
            <aside class="right-side">                
                <section class="content-header">
                    <h1>
                        Daftar Karyawan
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content" style="padding-bottom: 90px;">
                <button type="button" class="btn btn-danger" id="hpskaryawan" class="hpskaryawan">Hapus</button>
                <a href="<?php echo base_url(); ?>index.php/panel/tambahpegawai" class="btn btn-success">Tambah</a>
                <button type="button" class="btn btn-primary" id="refbutpeg" name="refbutpeg" title="Refresh" onclick="javascript:butrefpeg();">Refresh</button>
                <br />
                <br />
					<div class="row" style="padding-bottom: 9px;">
                        <div class="col-xs-12" style="padding-bottom: 90px;">
                            <div class="box">
                                <div class="box-header">
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" style="padding-bottom: 90px;" id="tabrefpeg">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox" id="chkkaryaall" name="chkkaryaall"></input></td>
                                                <td>No.</td>
                                                <td>NIP/ NIK</td>
                                                <td>Nama</td>
                                                <th>Jenis Kelamin</td>
                                                <td>Jabatan</td>
                                                <td>Telp/ Hp</td>
                                                <td>Tanggal Lahir</td>
                                                <td>Tgl Masuk</td>
                                                <td>Alamat</th>
                                                <td>Pendidikan</td>
                                                <td>Departemen</td>
                                                <td>Pagkat/Gol</td>
                                                <td>Status</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1; 
                                        foreach($sql as $row)
                                        {
                                        ?>
                                        <tr>
                                          <td><input type="checkbox" id="chkkarya" class="chkkarya" name="chkkarya" 
                                          value=<?php echo $row['USERID']?>></input></td>
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $row['SSN']; ?></td>
                                          <td><?php echo $row['Name'] ?></td>
                                          <td><?php echo $row['Gender'] ?></td>
                                          <td><?php echo $row['JABATAN'] ?></td>
                                          <td><?php echo $row['OPHONE'] ?></td>
                                          <td>
                                          <?php 
                                          if(!empty($row['BIRTHDAY'])){
                                            echo viewtglweb($row['BIRTHDAY']); 
                                          }else{
                                            echo ''; 
                                          }
                                          ?>

                                          </td>
                                          <td><?php 
                                          if(!empty($row['HIREDDAY'])){
                                            echo viewtglweb($row['HIREDDAY']); 
                                          }else{
                                            echo ''; 
                                          }
                                          ?></td>
                                          <td><?php echo $row['street']?></td>
                                          <td><?php echo $row['NAMAPEND']?></td>
                                          <td><?php echo $row['DEPTNAME'] ?></td>
                                          <td><?php echo $row['golongan']?> </td>
                                          <td><?php echo $row['NAMA_STTS']?></td>
                                          <td><?php 
                                          echo '<button class="btn btn-primary" TITLE="Edit" id="buteditpeg" 
                                          value="'.$row['USERID'].'"
                                          class="buteditpeg">Edit</button>&nbsp;|&nbsp;<button type="button" id="showpoto" class="btn btn-success" value="'.$row['USERID'].'" style="background-color:rgba(166, 0, 38, 0.43);"><span class="glyphicon glyphicon-eye-open" style="cursor:pointer;" title="Show Photo" > </span></button>'; 
                                          ?></td>
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
                    <div style="padding-top: 90px;"></div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
