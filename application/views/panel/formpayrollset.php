
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Welcome
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
                                    <h3 class="box-title"> <span class="label label-success">Tambah Mesin Baru</span>
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
                                            <label for="exampleInputEmail1">Nama Mesin</label>
                                            <input type="hidden" name="kode" value="" /> <!--<?=$kode ?>-->
                                             <input type="hidden" name="stat" value="" />
                                            <input type="text" required="" class="form-control" name="judul" value=""
                                            placeholder="Nama Mesin" id="nmmesin" />
                                        </div>
                                     <div class="form-group">
                                            <label for="exampleInputEmail1">Mode Komunikasi</label>
                                            <select name="komunikasi" id="komunikasi"  class="form-control">
                                            <option value="">-</option>
                                                <option value="1">Jaringan</option>
                                                <option value="0">USB</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">IP Address
                                            <span style="font-size: 10px;">(Ex : xxx.xxx.xxx.xxx)</span></label>
                                            <input type="text" required="" class="form-control" id="ipadd" name="ipadd" value=""
                                            placeholder="IP Address" />
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Password Komunikasi</label>
                                            <input type="password" required="" class="form-control" id="passkom" name="passkom" value=""
                                            placeholder="Password Komunikasi" />
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Nomor Mesin</label>
                                            <input type="number" required="" class="form-control" name="nomesin" id="nomesin"
                                            value="" placeholder="" />
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Port</label>
                                            <input type="number" required="" class="form-control" name="noport" id="noport"
                                            value="4370" placeholder="Port" />
                                        </div>


                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" id="buttonsimpanmesin" class="btn btn-primary">
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
