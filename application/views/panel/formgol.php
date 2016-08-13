
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       
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
                                    <h3 class="box-title"> <span class="label label-success">Tambah Pangkat</span>
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
                                <form role="form" action="javascript:simpangolongan();" enctype="multipart/form-data" method="POST">
                                    <div class="box-body">
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Pangkat</label>
                                             <input type="text" value="" name="golbaru" id="golbaru" class="form-control"
                                             placeholder="Pangkat" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Status</label>
                                            <select class="form-control" id="selgolbaru" name="selgolbaru">
                                              <option value="1">-aktif-</option>
                                              <option value="0">-Tidk Aktif-</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                        <label for="exampleInputEmail1">Skor</label>
                                             <input type="text" value="" name="skorbaru" id="skorbaru" class="form-control"
                                             placeholder="Skor" />
                                        </div>
                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary" onClick="" id="simpangolbaru">
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
