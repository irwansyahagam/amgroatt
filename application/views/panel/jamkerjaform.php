
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Tambah Data Pengaturan Jam kerja 
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> <span class="label label-success">Tambah Data Pengaturan Jam Kerja </span>
                                        <!--<?php
                                            if($stat == 'new'){
                                                echo "Add Content Website";
                                            }
                                            else {
                                                echo "Edit Content Website";
                                            }
                                        ?>-->
                                    </h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="<?php echo site_url('panel/artikel/save');?>" enctype="multipart/form-data" method="POST">
                                    <div class="box-body">
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Jam Kerja</label>
                                             <input type="text" value="" name="nmjamkerja" id="nmjamkerja" class="form-control" 
                                             placeholder="Nama Jam Kerja" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jam Masuk</label>
                                            <input type="text" value="" name="jammasukkerja" id="jammasukkerja" class="form-control" 
                                             placeholder="Jam Masuk Kerja" style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jam Pulang</label>
                                            <input type="text" value="" name="jamplgkerja" id="jamplgkerja" class="form-control" 
                                             placeholder="Jam Pulang Kerja" style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Toleransi Terlambat (Menit)</label>
                                            <input type="number" value="" name="tolterlambat" id="tolterlambat" class="form-control" 
                                             placeholder="Toleransi terlambat"  style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Toleransi Pulang Cepat(Menit)</label>
                                            <input type="number" value="" name="tolplgcpt" id="tolplgcpt" class="form-control" 
                                             placeholder="Toleransi Pulang Cepat"  style="cursor: pointer;" />
                                        </div> 
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Jam Mulai scan masuk</label>
                                            <input type="number" value="" name="tolterlambat" id="tolterlambat" class="form-control" 
                                             placeholder="Toleransi terlambat"  style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jam Akhir scan masuk</label>
                                            <input type="number" value="" name="tolplgcpt" id="tolplgcpt" class="form-control" 
                                             placeholder="Toleransi Pulang Cepat"  style="cursor: pointer;" />
                                        </div> 
                                         </div> 
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Jam Mulai scan pulang</label>
                                            <input type="number" value="" name="tolterlambat" id="tolterlambat" class="form-control" 
                                             placeholder="Toleransi terlambat"  style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jam Akhir scan pulang</label>
                                            <input type="number" value="" name="tolplgcpt" id="tolplgcpt" class="form-control" 
                                             placeholder="Toleransi Pulang Cepat"  style="cursor: pointer;" />
                                        </div> 
                                         </div> 
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Hitungan Hari</label>
                                            <input type="number" value="" name="tolterlambat" id="tolterlambat" class="form-control" 
                                             placeholder="Toleransi terlambat"  style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hitungan Menit</label>
                                            <input type="number" value="" name="tolplgcpt" id="tolplgcpt" class="form-control" 
                                             placeholder="Toleransi Pulang Cepat"  style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-inline">
                                            <input type="checkbox" class="form-control">Harus C/In</input>
                                        </div> 
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">
                                           Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        