        
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Data Penggajian Karyawan
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
               <!--   <div style="float:left;position:absolute;">
                <button type="button" class="btn btn-primary" id="cetakpayroll">Cetak</button> <!--cetakpayroll --> 
             <!-- </div>
              <!--  <div style="float:right;width:10%;position:absolute;"> -->
              <div style="float:right;padding-left:9px;" class="form-inline">
              <button type="button" class="btn btn-primary">Filter</button>
              </div>
                  <div style="float:right;" class="form-inline">
                      <!--<input type="text" class="form-control" id="tglfilgaji" readOnly="true" />-->
                      <select class="form-control" id="thnpayroll" name="thnpayroll">
                        <option value=<?php echo date('Y');?>><?php echo date('Y');?></option>
                          <?php
                          $tgl=date('Y');
                          $i="2015";
                          for($i;$i<=$tgl;$i++){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                          }
                          ?>
                    </select>
                  <!--</div>-->
                </div>
                <div style="float:right;padding-right:9px;" class="form-inline">
                    <span>Tahun</span>
                <!--</div>-->
              </div>
              <?php 
              $tgl=date('Y-m-d');
              function getmonth1($tgl){
              $sql=date('d-m',strtotime($tgl)); 
              return  $sql; 
                }
              ?> 
                <div style="float:right;padding-left:9px;padding-right:9px;" class="form-inline">
                    <select class="form-control" id="bulan" name="bulan">
                      <option value=<?php echo date('m');?>><?php echo date('M');?></option>
                      <option value="1">Januari</option>
                      <option value="2">Februari</option>
                      <option value="3">Maret</option>
                      <option value="4">April</option>
                      <option value="5">Mei</option>
                      <option value="6">Juni</option>
                      <option value="7">Juli</option>
                      <option value="8">Agustus</option>
                      <option value="9">September</option>
                      <option value="10">Oktober</option>
                      <option value="11">November</option>
                      <option value="12">Desember</option>
                    </select>
                <!--</div>-->
              </div>
              <div style="float:right;" class="form-inline">
              <label for="exampleInputEmail1">Bulan</label>
              </div>
                <br />
                <br />
                               <div class="row">
                <!-- Main content -->

                        <!-- left column -->

                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> <span class="label label-success">Laporan Keuangan</span>
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
                                         <div class="form-inline" style="display: none;">
                                            <label for="exampleInputEmail1">Tanggal</label>
                                            <input type="hidden" name="kode1" value="" /> <!--<?=$kode ?>-->
                                            <input type="text" required class="form-control" style="width:240px; cursor: pointer;" 
                                            name="tglrepkeu" 
                                            value="<?php echo date('d-m-Y');?>"  id="tglrepkeu" readonly="true" 
                                            placeholder="Tanggal" />&nbsp;<span><strong>s.d</strong></span>&nbsp;<input type="text" 
                                            required="" class="form-control" style="width:240px;cursor:pointer;" name="tglrepkeu2" id="tglrepkeu2" value="<?php echo date('d-m-Y');?>" readonly="true" 
                                            placeholder="Tanggal" />
                                        </div> <br />
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Department</label>
                                            <select class="form-control" id="rephtungkeu" onchange="javascript:deptkeuangan();" 
                                            name="rephtungkeu">
                                                <option value="">--Pilih Department--</option>
                                                <option value="all">--All--</option>
                                                <?php 
                                                $sql=$this->db->get_where('DEPARTMENTS')->result_array(); 
                                                foreach($sql as $row){
                                                ?>
                                                <option value=<?php echo $row['DEPTID']?>><?php echo $row['DEPTNAME']?></option>
                                                <?php } ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Pegawai</label>
                                            <select class="form-control" id="jnspegkeu" name="jnspegkeu" onchange="javascript:deptkeuangan();">
                                            <option value="">--Pilih Jenis Pegawai--</option>
                                                <option value="all">--All--</option>
                                                <?php 
                                                $sql=$this->db->get('STTS_PEGAWAI')->result_array(); 
                                                foreach($sql as $row){
                                                ?>
                                                <option value=<?php echo $row['ID']?>><?php echo $row['NAMA_STTS']?></option>
                                                <?php } 
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <select class="form-control" id="nmrephtungkeu" name="nmrephtungkeu">
                                                <option value="">--Pilih Nama--</option>
                                            </select>
                                        </div> 

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Laporan</label>
                                            <select class="form-control" id="jnslapformkeu" name="jnslapformkeu" onchange="">
                                            <option value="">--Pilih Jenis Laporan--</option>
                                            <option value="11">Jasa Medis</option>
                                            <option value="12">TPK</option>
                                            <!--<option value="6">Data Transaksi Karyawan</option>
                                            <option value="5">Laporan Lembur Harian</option>-->
                                           <!-- <option value="7">Laporan TPK Pegawai</option>
                                            <option value="8">Laporan Jasa Medis</option>-->
                                            </select>   
                                        </div> 


                                    </div>

                                    <div class="box-footer">
                                        <button type="button" class="btn btn-primary" onclick="javascript:reportkeu();"> <!--javascript:repperhitungan(); -->
                                           Proses 
                                        </button>
                                    <button type="button" id="displaybutkeu" style="display: none;" class="btn btn-primary" onclick="">
                                           Cetak
                                    </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- proses laporan --> 
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" id="tblaporankeu">

                                </div><!--end Laporan --> 
                            </div>
                        </div>       


                </div>   <!-- /.row -->
					<!--<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">

                                </div><!-- /.box-header -->
                                <!--<div style="width: 60%;margin-top: 9px;padding-left: 9px;" class="form-inline">
                                 <span>Dept</span>
                                 <select name="dptpresensi" id="dptpresensi" class="form-control" onchange="javascript:tbpayroll();">
                                   <option value="">--Pilih Department--</option>
                                   <?php 
                                   $sql=$this->db->get('DEPARTMENTS'); 
                                   foreach($sql->result() as $row){
                                   ?>
                                   <option value=<?php echo $row->DEPTID; ?>><?php echo $row->DEPTNAME; ?></option>
                                   <?php } ?>
                                 </select>
                                 </div>
                                <div class="box-body table-responsive" id="tbpayroll">
                                    <table id="example7" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <td style="width:4%;text-align:center;"><input type="checkbox"></input></td>
                                                <td style="width:4%;text-align:center;">No.</td>
                                                <td style="width:10%;">NIP</td>
                                                <td style="width:15%;">Nama</td>
                                                <td>Jabatan</td>
                                                <td>TPK (Rp)</td>
                                                <td>Remunerasi (Rp)</td>
                                                <td>PPH (Rp)</td>
                                                <td>Infaq (Rp)</td>
                                                <td>Gaji Bersih (Rp)</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                          <td style="width:4%;text-align:center;"><input type="checkbox" id="chkpayroll" name="chkpayroll"></input></td>
                                          <td style="width:4%;text-align:center;">&nbsp;</td>
                                          <td style="width:10%;">&nbsp;</td>
                                          <td style="width:15%;">&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            <!--</div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
