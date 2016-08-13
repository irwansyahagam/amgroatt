
            <aside class="right-side">                
                <section class="content-header">
                    <h1>
                        Lupa Check In/ Check Out karyawan 
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-6">
                            <div class="box">
                                <div class="box-header">
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td style="width: 20%;text-align: center;">ID</td>
                                                <td style="width: 30px; text-align: center;">Department</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 

                                        foreach($sql as $row){
                                        ?>
                                        <tr>
                                        <td style="width:20%;text-align: center;"><?php echo $row['DEPTID'] ?></td>
                                          <td style="width: 30px;"><?php echo $row['DEPTNAME'] ?></td>
                                          </tr>
                                          <?php } 

                                          ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- col --> 

                        <div class="col-xs-6">
                            <div class="box">
                                <div class="box-header">
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tblupain">
                                    <table id="example7" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td style="width: 20%;text-align: center;">NIK</td>
                                                <td style="width: 30px; text-align: center;">NAMA</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <td style="width:20%;text-align: center;">&nbsp;</td>
                                          <td style="width: 30px;">&nbsp;</td>
                                          </tr>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>

                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
