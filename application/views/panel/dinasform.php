
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Tambah Data Izin,sakit/Dinas luar karyawan
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
                                    <h3 class="box-title">
                                      <span class="label label-success">Tambah Data Izin,sakit/Dinas luar karyawan </span>
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
                                <form role="form" action="javascript:simpanizin();" enctype="multipart/form-data" method="POST">
                                    <div class="box-body">
                                        <div class="form-inline">
                                            <label for="exampleInputEmail1">Tanggal</label>
                                            <input type="hidden" name="kode" value="" /> <!--<?=$kode ?>-->

                                            <input type="text" required="" class="form-control" style="width:240px; cursor: pointer;" name="tgldinasform"
                                            value="<?php echo date('d-m-Y');?>"  id="tgldinasform" readonly="true"
                                            placeholder="Tanggal" />&nbsp;<span><strong>s.d</strong></span>&nbsp;<input type="text"
                                            required="" class="form-control" style="width:240px;cursor:pointer;" name="tgldinasform2" id="tgldinasform2" value="<?php echo date('d-m-Y');?>" readonly="true"
                                            placeholder="Tanggal" />
                                        </div><br />
                                     <div class="form-group">
                                            <label for="exampleInputEmail1">Tipe Izin</label>
                                            <select name="tipeizin" id="tipeizin"  class="form-control">
                                            <option value="">-</option>
                                            <?php
                                            foreach ($sql as $row){
                                                echo '<option value="'.$row['LEAVEID'].'">'.$row['LEAVENAME'].'</option>';
                                            }
                                            ?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Department</label>
                                             <select name="depart" id="depart"  class="form-control" onchange="javascript:getpegcuti();">
                                            <option value="">-Pilih Department-</option>
                                            <?php 
                                            $sql=$this->db->get('DEPARTMENTS')->result_array(); 
                                            foreach($sql as $key){
                                                echo '<option value="'.$key['DEPTID'].'">'.$key['DEPTNAME'].'</option>'; 
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                             <select name="namapegdepart" id="namapegdepart"  class="form-control">
                                            <option value="">-</option>

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Alasan</label>
                                             <input type="text" value="" name="alasankarya" id="alasankarya" class="form-control"
                                             placeholder="Alasan" />
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
