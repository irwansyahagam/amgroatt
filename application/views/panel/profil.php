
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Welcome Administrator
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Setting User Account</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action="javascript:updpass();" enctype="multipart/form-data" method="POST">
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" readonly="true" value=<?php echo $this->session->userdata('nama'); ?> class="form-control" name="username" value="" />
                                        </div>

                                        <div class="form-group">
                                            <label>Password Lama</label>
                                            <input type="password" required class="form-control" name="password" id="password" placeholder="Isikan Password Lama" />
                                        </div>

                                        <div class="form-group">
                                            <label>Password Baru</label>
                                            <input type="password" required class="form-control" name="passbaru" id="passbaru" value="" placeholder="Isikan Password Baru" />
                                        </div>

                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary" id="updatepassbaru">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->