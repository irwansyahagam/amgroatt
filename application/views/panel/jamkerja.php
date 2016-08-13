
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Pengaturan Jam Kerja Karyawan
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <button type="button" id="hpsjamkerja" name="hpsjamkerja" class="btn btn-danger hpsjamkerja">Hapus</button>
                <button type="button" id="burefjamkerja" name="burefjamkerja" class="btn btn-success">Refresh</button>
                <!--<a href="<?php echo base_url(); ?>panel/artikel/add" class="btn btn-danger">Hapus</a>--> 
                <!--<a href="<?php echo base_url(); ?>index.php/panel/jamkerjaform" class="btn btn-success">Tambah</a> --> 
                <br />
                <br />
					             <div class="row">
                        <div class="col-xs-6" style="width: 60%;">
                            <div class="box">
                                <div class="box-header">

                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tbjamkerja">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td><input type="checkbox" name="chkjamkerjaall" id="chkjamkerjaall"></input></td>
                                                <td>No.</td>
                                                <td>Nama Jam Kerja </td>
                                                <td>Jam Masuk</td>
                                                <td>Jam Pulang</td>
                                                <td>Mulai C/In</td>
                                                <td>Akhir C/in</td>
                                                <td>Mulai C/Out</td>
                                                <td>Akhir C/Out</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody id="bodytemp">
                                        <?php
                                        $no=1;
                                        foreach($sql as $row){
                                        ?>
                                        <tr>
                                          <td><input type="checkbox" name="chkjamkerja" id="chkjamkerja" class="chkjamkerja"
                                          value=<?php echo $row['SCHCLASSID'] ?> ></input></td>
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $row['SCHNAME'] ?></td>
                                          <td><?php echo $row['jammasuk'] ?></td>
                                          <td><?php echo $row['jampulang'] ?></td>
                                          <td><?php echo $row['mulaicin'] ?></td>
                                          <td><?php echo $row['akhircin'] ?></td>
                                          <td><?php echo $row['mulaicout'] ?></td>
                                          <td><?php echo $row['akhitcout'] ?></td>
                                          
                                          <td><button class="btn btn-primary" id="butjamkerjaedit1"
                                            value="<?php echo $row['SCHCLASSID'].'|'.$row['SCHNAME'].'|'.$row['jammasuk'].'|'.
                                            $row['jampulang'].'|'.$row['LATEMINUTES'].'|'.$row['EARLYMINUTES'].'|'.$row['mulaicin'] 
                                            .'|'.$row['akhircin'].'|'.$row['mulaicout'].'|'.$row['akhitcout'].'|'.$row['CHECKIN']
                                            .'|'.$row['CHECKOUT']
                                             ?>">Edit</button></td>
                                          </tr>
                                          <?php }
                                          ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <div class="col-xs-6" style="width: 40%;">
                        <div class="box">
                           <div class="box-header">

                           </div><!-- /.box-header -->
                                    <div class="box-body">
                                    <form role="form" action="javascript:simpankerjabaru();" enctype="multipart/form-data" method="POST">
                                         <div class="form-inline" >
                                         <input type="hidden" id="kdedit"></input>
                                            <label for="exampleInputEmail1" style="width: 50%;">Nama Jam Kerja</label>
                                             <input type="text" value="" name="nmjamkerja" style="width: 40%;" id="nmjamkerja" class="form-control" 
                                             placeholder="Nama Jam Kerja" />
                                        </div> 
                                          <div class="form-inline">
                                            <label for="exampleInputEmail1" style="width: 50%;">Jam Masuk</label>
                                            <input type="time" value="" name="jammasukkerja12" id="jammasukkerja12" class="form-control" 
                                             placeholder="Jam Masuk Kerja" style=" width: 40%;"/>
                                        </div> 
                                        <div class="form-inline">
                                            <label for="exampleInputEmail1" style="width: 50%;">Jam Pulang</label>
                                            <input type="time" value="" name="jamplgkerja1" style="width: 40%;" id="jamplgkerja1" 
                                            class="form-control" 
                                             placeholder="Jam Pulang Kerja" style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-inline">
                                            <label for="exampleInputEmail1" style="width: 50%;">Toleransi Terlambat (Menit)</label>
                                            <input type="number" value="" name="tolterlambat" id="tolterlambat" class="form-control" 
                                             placeholder="Toleransi terlambat"  style="cursor: pointer; width: 40%;" />
                                        </div> 
                                        <div class="form-inline">
                                            <label for="exampleInputEmail1" style="width: 50%;">Toleransi Pulang Cepat(Menit)</label>
                                            <input type="number" value="" name="tolplgcpt" id="tolplgcpt" class="form-control" 
                                             placeholder="Toleransi Pulang Cepat"  style="cursor: pointer; width: 40%;" />
                                        </div> 
                                            <div class="form-inline">
                                            <label for="exampleInputEmail1" style="width: 50%;">Jam Mulai scan masuk</label>
                                            <input type="time" value="" name="jammulaimsk" id="jammulaimsk" class="form-control" 
                                             placeholder="Jam Mulai Scan masuk"  style="cursor: pointer; width: 40%;" />
                                        </div> 
                                        <div class="form-inline">
                                            <label for="exampleInputEmail1" style="width: 50%;">Jam Akhir scan masuk</label>
                                            <input type="time" value="" name="jammulaiakhirmsk" id="jammulaiakhirmsk" class="form-control" 
                                             placeholder="Jam Akhir scan pulang"  style="cursor: pointer; width: 40%;" />
                                        </div> 
                                         
                                            <div class="form-inline">
                                            <label for="exampleInputEmail1" style="width: 50%;">Jam Mulai scan pulang</label>
                                            <input type="time" value="" name="jammulaiscan" id="jammulaiscan" class="form-control" 
                                             placeholder="Jam Mulai Scan pulang"  style="cursor: pointer; width: 40%;"/>
                                        </div> 
                                        <div class="form-inline">
                                            <label for="exampleInputEmail1" style="width: 50%;">Jam Akhir scan pulang</label>
                                            <input type="time" value="" name="jamakhirscan" id="jamakhirscan" class="form-control" 
                                             placeholder="Jam Akhir Scan Pulang"  style="width: 40%;" />
                                        </div> 
                                         <div class="form-inline">
                                            <label for="exampleInputEmail1" style="float: left;">Harus C/In</label>
                                            &nbsp;
                                            <input type="checkbox"  id="chkin" name="chkin" class="chkin" value="1"></input> &nbsp;&nbsp;&nbsp;
                                            <span>Harus C/Out</span>
                                            &nbsp;<input type="checkbox" id="chkout12" name="chkout12" class="chkout12" value="1"></input>
                                        </div> 
                                        <div class="form-inline" style="padding-left: 50%;">
                                          <input type="button" value="Tambah" id="editbtnkerja" class="btn btn-primary" 
                                          onclick="simpankerjabaru();"></input>
                                            <button type="button" class="btn btn-danger" id="btncancel" style="display: none">Cancel</button>
                                          
                                        </div>

                                        </form>
                                    </div>
                                    
                        </div>
                          
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
