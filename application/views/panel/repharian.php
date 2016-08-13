
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Laporan Harian
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
                                    <h3 class="box-title"> <span class="label label-success">Laporan Harian</span>
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
                                        <div class="form-inline">
                                            <label for="exampleInputEmail1">Tanggal</label>
                                            <input type="hidden" name="kode" value="" /> <!--<?=$kode ?>-->

                                            <input type="text" required="" class="form-control" style="width:240px; cursor: pointer;" name="tglrephari"
                                            value="<?php echo date('d-m-Y');?>"  id="tglrephari" readonly="true"
                                            placeholder="Tanggal" />&nbsp;<span><strong>s.d</strong></span>&nbsp;<input type="text"
                                            required="" class="form-control" style="width:240px;cursor:pointer;" name="tglrephari2" id="tglrephari2" value="<?php echo date('d-m-Y');?>" readonly="true"
                                            placeholder="Tanggal" />
                                        </div><br />
                                     <div class="form-group">
                                            <label for="exampleInputEmail1">Departement</label>
                                            <select name="departmentrep" id="departmentrep"  class="form-control" 
                                            onchange="javascript:repdeparthari();">
                                            <option value="">-</option>
                                             <?php 
                                             foreach($sql as $row){
                                             ?>
                                             <option value=<?php echo $row['DEPTID'] ?>><?php echo $row['DEPTNAME'] ?></option>
                                             <?php } ?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                             <select name="namapeg" id="namapeg"  class="form-control">
                                            
                                                
                                            </select>
                                        </div>


                                    </div>

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">
                                           Proses
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Hasil Kalkulasi</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td style="text-align:center; width:5%;"><input type="checkbox" id="chkgolong" name="chkgolong"></input></td>
                                                <td  style="text-align:center; width:5%;">No.</td>
                                                <td  style="text-align:center; width:15%;">Kode Uraian</td>
                                                <td   style="text-align:center;">Uraian</td>
                                                <td   style="text-align:center;">Status</td>
                                                <td style="text-align:center;">Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                      </table>

                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="button" class="btn btn-primary">
                                       Print
                                    </button>
                                </div>
                            </div><!-- /.box -->

                        </div>
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
