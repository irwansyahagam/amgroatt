
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Tambah Data Hari Libur Umum
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
                                    <h3 class="box-title"> <span class="label label-success">Tambah Data Hari Libur Umum</span>
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
                                <form role="form" action="" enctype="multipart/form-data" method="POST">
                                    <div class="box-body">
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Hari Libur</label>
                                             <input type="text" value="" name="nmhrlibur" id="nmhrlibur" class="form-control" 
                                             placeholder="Nama Hari Libur" />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tgl Mulai</label>
                                            <input type="text"  name="tglmulaihrlibur" id="tglmulaihrlibur" class="form-control" 
                                             placeholder="Tanggal Mulai" readonly="true" style="cursor: pointer;" required  
                                             onClick="javascript:getseltanggal();" onChange="javascript:getseltanggal();" 
                                             onblur="javascript:getseltanggal();"
                                             value=<?php echo date('d-m-Y'); ?> />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tgl Akhir</label>
                                            <input type="text" name="tglakhirlibur" id="tglakhirlibur" class="form-control" 
                                             placeholder="Tanggal Akhir Libur" readonly="true" style="cursor: pointer;" required
                                             onClick="javascript:getseltanggal();" onChange="javascript:getseltanggal();"
                                             onblur="javascript:getseltanggal();"
                                             value=<?php echo date('d-m-Y'); ?>  />
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jumlah Hari</label>
                                            <input type="number" value="0" name="jmlhhari" id="jmlhhari" class="form-control" 
                                             placeholder="" readonly="true" style="cursor: pointer;" />
                                        </div> 

                                    </div>

                                    <div class="box-footer">
                                        <button type="button" class="btn btn-primary" id="butsimpanlibur">
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
        