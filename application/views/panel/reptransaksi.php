
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Data Transaksi Karyawan
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
                                    <h3 class="box-title"> <span class="label label-success">Laporan Transaksi Karyawan</span>
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

                                            <input type="text" required="" class="form-control" style="width:240px; cursor: pointer;" name="tglrepharidet" 
                                            value="<?php echo date('d-m-Y');?>"  id="tglrepharidet" readonly="true" 
                                            placeholder="Tanggal" />&nbsp;<span><strong>s.d</strong></span>&nbsp;<input type="text" 
                                            required="" class="form-control" style="width:240px;cursor:pointer;" name="tglrepharidet2" id="tglrepharidet2" value="<?php echo date('d-m-Y');?>" readonly="true" 
                                            placeholder="Tanggal" />
                                        </div><br />
                                     <div class="form-group">
                                            <label for="exampleInputEmail1">Departement</label>
                                            <select name="depreptransaksi" id="depreptransaksi"  class="form-control" 
                                            onchange="javascript:getreptransaksi();">
                                            <option value="">-</option>
                                            <?php 
                                            $sql=$this->db->get('DEPARTMENTS')->result_array(); 
                                            foreach($sql as $row){
                                                echo '<option value="'.$row['DEPTID'].'">'.$row['DEPTNAME'].'</option>'; 
                                            }
                                            ?>
                                            </select> 
                                        </div>        
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                             <select name="pegreptransaksi" id="pegreptransaksi"  class="form-control">
                                            <option value="">-</option>
          
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
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        