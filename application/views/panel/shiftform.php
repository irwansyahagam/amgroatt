
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Tambah Shift Kerja Karyawan
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> <span class="label label-success">Tambah Shift Kerja Karyawan</span>
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
                                            <label for="exampleInputEmail1">Nama Shift Kerja</label>
                                             <input type="text" value="" name="nmshiftkerja" id="nmshiftkerja" class="form-control" 
                                             placeholder="Nama Shift Kerja" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tgl Mulai</label>
                                            <input type="text" value="" name="jammasukkerja" id="jammasukkerja" class="form-control" 
                                             placeholder="Jam Masuk Kerja" readonly="true" style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tgl Akhir</label>
                                            <input type="text" value="" name="tglakhirshift" id="tglakhirshift" class="form-control" 
                                             placeholder="Tgl Akhir" readonly="true" style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Periode</label>
                                            <input type="number" value="" name="periodeshift" id="periodeshift" class="form-control" 
                                             placeholder="Periode" readonly="false" style="cursor: pointer;" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Unit Periode</label>
                                            <input type="text" value="" name="unitperiode" id="unitperiode" class="form-control" 
                                             placeholder="unit periode" readonly="false" style="cursor: pointer;" />
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
        