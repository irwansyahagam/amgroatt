
       
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                

                <section class="content-header">

                    <h1>
                       Laporan Perhitungan Presensi 
                    </h1>
                </section>

                <!-- Nav tabs -->
<!--<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Presensi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Keuangan</a>
  </li>
</ul>-->

<!-- Tab panes -->
<div class="tab-content">
<!--  <div class="tab-pane active" id="home" role="tabpanel">-->
  

               <section class="content">
               <div class="row">
                <!-- Main content -->

                        <!-- left column -->

                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> <span class="label label-success">Laporan Perhitungan Presensi</span>
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
                                         <div class="form-inline">
                                            <label for="exampleInputEmail1">Tanggal</label>
                                            <input type="hidden" name="kode" value="" /> <!--<?=$kode ?>-->
                                            <input type="text" required="" class="form-control" style="width:240px; cursor: pointer;" name="tglrepharidet" 
                                            value="<?php echo date('d-m-Y');?>"  id="tglrepharidet" readonly="true" 
                                            placeholder="Tanggal" />&nbsp;<span><strong>s.d</strong></span>&nbsp;<input type="text" 
                                            required="" class="form-control" style="width:240px;cursor:pointer;" name="tglrepharidet2" id="tglrepharidet2" value="<?php echo date('d-m-Y');?>" readonly="true" 
                                            placeholder="Tanggal" />
                                        </div> <br />
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Department</label>
                                            <select class="form-control" id="rephtungdepart" onchange="javascript:changedepart();" 
                                            name="rephtungdepart">
                                                <option value="">--Pilih Department--</option>
                                                <option value="all">--All--</option>
                                                <?php 
                                                foreach($sql as $row){
                                                ?>
                                                <option value=<?php echo $row['DEPTID']?>><?php echo $row['DEPTNAME']?></option>
                                                <?php } ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Pegawai</label>
                                            <select class="form-control" id="jnspeg" name="jnspeg">
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
                                            <select class="form-control" id="nmrephtung" name="nmrephtung">
                                                <option value="">--Pilih Nama--</option>
                                            </select>
                                        </div> 

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Laporan</label>
                                            <select class="form-control" id="jnslapform" name="jnslapform" onchange="">
                                            <option value="">--Pilih Jenis Laporan--</option>
                                            <option value="1">Laporan Harian</option>
                                            <option value="2">Laporan Per Department</option>
                                            <option value="3">Laporan BKPP</option>
                                            <option value="4">Laporan Detail Harian</option>
                                            <!--<option value="6">Data Transaksi Karyawan</option>
                                            <option value="5">Laporan Lembur Harian</option>-->
                                           <!-- <option value="7">Laporan TPK Pegawai</option>
                                            <option value="8">Laporan Jasa Medis</option>-->
                                            </select>   
                                        </div> 


                                    </div>

                                    <div class="box-footer">
                                        <button type="button" class="btn btn-primary" onclick="javascript:repperhitungan();">
                                           Proses 
                                        </button>
                                    <button type="button" id="displaybut" style="display: none;" class="btn btn-primary" onclick="javascript:cetakreport();">
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
                                <div class="box-body table-responsive" id="tblaporan12">

                                </div><!--end Laporan --> 
                            </div>
                        </div>       


                </div>   <!-- /.row -->
                </section><!-- /.content -->
            <!--    </div>


                <!-- Laporan Keuangan -->
 
                </div>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        