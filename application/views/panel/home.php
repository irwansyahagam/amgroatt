
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Welcome Administrator
                        <small>Dashboard</small>
                    </h1>
                </section>
                <script type="text/javascript">

                var tanggallengkap = new String();
                var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
                namahari = namahari.split(" ");
                var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
                namabulan = namabulan.split(" ");
                var tgl = new Date();
                var hari = tgl.getDay();
                var tanggal = tgl.getDate();
                var bulan = tgl.getMonth();
                var tahun = tgl.getFullYear();
                tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
                </script>
<?php include_once 'hightchart.php'; ?>
                <!-- Main content -->
                <section class="content">
                <div class="form-inline">
                    <label for="exampleInputEmail1" style="margin-top:1px;padding-top:1px;"><strong>Tanggal/ Jam :</strong></label>
                    <div class="Tanggal" style="padding-top:0px;"><h4 style="margin-top:0px; margin-bottom:0px;">
                      <script Type="text/javaScript">document.write(tanggallengkap);</script></h4>
                      <div id="output" class="jam" ></div>
                    </div>
                <hr style="border-color:#00c0ef; border-width:4px;margin-top:0px;margin-bottom:8px;">
                <label for="exampleInputEmail1">Pencarian</label>
                    <input type="text" placeholder="Nama Karyawan" class="form-control" onkeypress="javascript:pencglobal();"
                    style="width: 50%;" id="namakry" name="namakry" ></input>&nbsp;
                    <button type="button" class="btn btn-success" id="btncariglobal">Cari</button>
                    &nbsp; 
                    <button type="button" class="btn btn-primary" id="tutppencarianhome">Tutup</button>
                </div><p/>
					<div class="row">
            <div id="contentcari">

            </div>
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>

                                    </h3>
                                    <p>
                                      Hadir-Jumlah: <?php echo $getpeghdr; ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion-ios7-person"></i>
                                </div>
                                <a href="" class="small-box-footer">
                                    View <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <div class="form-inline">
                            <input type="text" placeholder="Bulan Tampilkan" id="tglhadirdash"
                             name="tglhadirdash" class="form-control" value="<?php echo date('m-Y');?>"
                            style="width: 78%;cursor: pointer;" readonly="true"></input>&nbsp;
                            <button type="button" class="btn btn-success" id="btncrhadir">Cari</button>
                            </div>
                            <div class="small-box bg-aqua" style="margin-top:9px;">
                                <div class="inner">
                                    <h3>

                                    </h3>

                                </div>
                            </div>
                        </div>

                      

                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>

                                    </h3>
                                    <p>
                                        Izin-Jumlah: <?php echo $jlhizin; ?>

                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion-paper-airplane"></i>
                                </div>
                                <a href="" class="small-box-footer">
                                    View <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <div class="form-inline">
                            <input type="text" placeholder="Bulan Tampilkan" id="tglhadirdashizin"
                             name="tglhadirdashizin" class="form-control" value="<?=date('m-Y');?>"
                            style="width: 78%;cursor: pointer;" readonly="true"></input>&nbsp;
                            <button type="button" class="btn btn-success" id="btncariizin">Cari</button>
                            </div>
                            <div class="small-box bg-green" style="margin-top:9px;">
                                <div class="inner">
                                    <h3>

                                    </h3>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>

                                    </h3>
                                    <p>
                                      
                                      Sakit-Jumlah: <?php echo $jlhsak2; ?>
                                    </p>
                                </div>
                                <div class="icon">
                                  <i class="ion-medkit"></i>
                                </div>
                                <a href="" class="small-box-footer">
                                    View <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <div class="form-inline">
                            <input type="text" placeholder="Bulan Tampilkan" id="tglhadirdashsakit"
                             name="tglhadirdashsakit" class="form-control" value="<?=date('m-Y');?>"
                            style="width: 78%;cursor: pointer;" readonly="true"></input>&nbsp;
                            <button type="button" class="btn btn-success" id="btncarisakit">Cari</button>
                            </div>
                            <div class="small-box bg-yellow" style="margin-top:9px;">
                                <div class="inner">
                                    <h3>

                                    </h3>

                                </div>
                            </div>
                        </div>

						<div class="col-lg-3 col-xs-6">
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>

                                    </h3>
                                    <p>
                                      Alpha-Jumlah: <?php echo $jlhalpha2; ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion-close-round"></i>
                                </div>
                                <a href="" class="small-box-footer">
                                    View <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                            <div class="form-inline">
                            <input type="text" placeholder="Bulan Tampilkan" id="tglhadirdashalpha"
                             name="tglhadirdashalpha" value="<?=date('m-Y');?>" class="form-control"
                            style="width: 78%; cursor: pointer;" readonly="true"></input>&nbsp;
                            <button type="button" class="btn btn-success" id="btncarialpha">Cari</button>
                            </div>
                            <div class="small-box bg-red" style="margin-top:9px;">
                                <div class="inner">
                                    <h3>

                                    </h3>

                                </div>
                            </div>
                        </div>
                       <div id="container">

    <div id="body">
        <div id="chart"></div>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
              new Highcharts.Chart({

        chart: {
            renderTo: 'chart',
            type: 'line',
        },
        title: {
            text: 'Graph Absensi Meuraxa Banda Aceh <br/> Tahun :'+<?php echo $thn; ?>,
            x: -3
        },
        subtitle: {
            text: '<br/>',
            x: -4
        },
        xAxis: {
            categories: ['Januari', 'Februari', 'Maret', 'April', 'May', 'Juni',
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
        },
        yAxis: {
            title: {
                text: 'Jumlah'
            }
        },
        series: [{
            name: 'Izin',
            data: [<?php echo $bln1i; ?>,<?php echo $bln2i; ?>,<?php echo $bln3i; ?>,<?php echo $bln4i; ?>,<?php echo $bln5i; ?>, 
            <?php echo $bln6i; ?>,<?php echo $bln7i; ?>,<?php echo $bln8i; ?>,
            <?php echo $bln9i; ?>,<?php echo $bln10i; ?>,<?php echo $bln11i; ?>,<?php echo $bln12i; ?>], 
            color: '#00a65a'
        },{
            name: 'Hadir',
            color: '#00c0ef', 
            data: [<?php echo $bln1h; ?>,<?php echo $bln2h; ?>,<?php echo $bln3h; ?>,<?php echo $bln4h; ?>,<?php echo $bln5h; ?>, 
            <?php echo $bln6h; ?>,<?php echo $bln7h; ?>,<?php echo $bln8h; ?>,
            <?php echo $bln9h; ?>,<?php echo $bln10h; ?>,<?php echo $bln11h; ?>,<?php echo $bln12h; ?>] 
        },{
            name :'Sakit', 
            color:'#f39c12', 
            data: [<?php echo $bln1; ?>,<?php echo $bln2; ?>,<?php echo $bln3; ?>,<?php echo $bln4; ?>,<?php echo $bln5; ?>, 
            <?php echo $bln6; ?>,<?php echo $bln7; ?>,<?php echo $bln8; ?>,
            <?php echo $bln9; ?>,<?php echo $bln10; ?>,<?php echo $bln11; ?>,<?php echo $bln12; ?>]
        },{
            name:'Alpha', 
            color:'#f56954', 
            data:[6,10,11,12,14,16,12,13,12,12,12,12]
        }]
    }); 
        }); 
    </script>

</div>

                    </div><!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
