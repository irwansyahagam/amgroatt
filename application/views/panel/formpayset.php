
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Tambah Payroll Setting
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
                                    <h3 class="box-title"> <span class="label label-success">Tambah Payroll Setting</span>
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
                                <form role="form" action="javascript:simpanpaysett();" enctype="multipart/form-data" method="POST">
                                    <div class="box-body">
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Uraian</label>
                                            <select class="form-control">
                                              <option value="">-Pilih-</option>;
                                              <?php
                                              foreach($query as $row){
                                                echo '<option value="'.$row['id'].'">'.$row['namauraian'].'</option>';
                                              }
                                              ?>
                                            </select>
                                             <!--<input type="text" value="" name="uraian" id="uraian" class="form-control"
                                             placeholder="Uraian" /> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nominal</label>
                                            <input type="number" value="" name="nominalpay"
                                            id="nominalpay" class="form-control"
                                             placeholder="Nominal" style="cursor: pointer;" />
                                        </div>
                                        <!--<div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Golongan</label>
                                            <select class="form-control" id="selgol" name="selgol">
                                              <option value="">-Pilih Golongan-</option>

                                            </select>
                                        </div>-->
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Keterangan</label>
                                            <input type="text" value="" name="kete" id="kete" class="form-control"
                                             placeholder="Keterangan" style="cursor: pointer;" />
                                        </div>

                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary" id="simpanpayrollsetting">
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
