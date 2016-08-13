
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Jadwal Kerja karyawan
                    </h1>
                </section>
                <!-- Main content -->
                <section class="content">

					<div class="row">

                        <!--div class column 6 -->
                        <div class="col-xs-6" style="width: 40%;">
                            <div class="box" style="width: 100%;">
                                <div class="box-header">
                                    <h3 class="box-title">Department</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                
                                    <table id="example5" class="table table-bordered table-striped"> <!--example3--> 
                                        <thead>
                                            <tr>
                                                <td style="width: 10px; text-align: center;">ID Department</td>
                                                <td style="width: 30px; text-align: center;">Department</td>
                                                <td style="width: 20px; text-align: center;">Jumlah Pegawai</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <?php 
                                            $no=1; 
                                            foreach ($sql  as $row){
                                            ?>
                                            <td style="width: 10px; text-align: center;"><?php echo $row['DEFAULTDEPTID'] ?></td>
                                            <td style="width: 30px;"><?php echo $row['DEPTNAME'] ?></td>
                                            <td style="width: 20px; text-align: center;"><?php echo $row['jmlh'] ?></td>
                                        </tr>
                                        <?php 
                                    }
                                        ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div> <!-- end div class column 6 -->
                        <!-- div class column 6 for koneksi -->
                        <div class="col-xs-6" style="width: 60%; padding-left: 0px;">
                            <div class="box">
                            <div style="padding-left: 4px;padding-top: 4px;">
                                <button class="btn btn-danger" id="hpsjdwal">Hapus</button>&nbsp; 
                                <button class="btn btn-primary" id="tbhjadwalkerja34" data-toggle="modal">Tambah</button>
                                <button class="btn btn-success" id="ctkjadwal" name="ctkjadwal" onClick="cetakjdwal();">Cetak Jadwal</button>
                                <input type="hidden" id="kdunit" name="kdunit"></input>
                                <!--data-target="#modaltbhjdwal" --> 
                                <input type="hidden" id="useridjd" name="useridjd"  />
                            </div>
                                <div class="box-header" style="padding-bottom: 0px;">

                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" style="padding-top: 1px;" id="tbodyjdwal">

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                        <!-- end div class column 6 for koneksi -->
                       <div class="col-xs-12">
                            <div class="box">
                            <div style="padding-right:2%;margin-bottom: 9px;padding-top: 4px; float: right;">
                                <button class="btn btn-danger" id="hpsjdwaltdktetap">Hapus</button>&nbsp; 
                                <!--<button class="btn btn-primary" id="tbhjadwalkerja34" data-toggle="modal" data-target="#modaltbhjdwal">Tambah</button> -->
                                <button class="btn btn-primary" id="jdwaltidktetap" name="jdwaltidktetap" class="jdwaltidktetap">
                                    Jadwal Tidak Tetap
                                </button>
                            </div>
                            <div style="width: 60%;margin-top: 9px;" class="form-inline">
                                <span>Tgl</span>                              
                                <input type="text" style="width: 20%; cursor: pointer;" class="form-control" placeholder="Tgl" 
                                name="tgl1jdwal" id="tgl1jdwal" value=<?php echo date('d-m-Y') ;?> readonly="true"></input>
                                <span>S.d</span>
                                <input type="text" class="form-control" style="width: 20%; cursor: pointer;" placeholder="Tgl" 
                                name="tgl2jdwal" id="tgl2jdwal" value=<?php echo date('d-m-Y'); ?> readonly="true"></input>
                                &nbsp;<button type="button" id="buttampilkan" class="btn btn-success">Tampilkan</button>
                                &nbsp;<input type="hidden" id="idjadwal"></input>

                            </div>

                                <div class="box-header" style="padding-bottom: 0px;">
                                    <h6 class="box-title" style=""><span class="label label-success"></span></h6>
                                </div><!-- /.box-header -->
                                <input type="hidden" id="jdkduser" name="jdkduser" class="jdkduser">
                                <div class="box-body table-responsive" style="padding-top: 1px;" id="tbjdwalkerja">
                                    <table id="example7" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="jdwalkerjapegall" name="jdwalkerjapegall" 
                                                class="jdwalkerjapegall"></input></th>
                                                <th>&nbsp;</th>
                                                <th>0</th>
                                                <th>1</th>
                                                <th>2</th>
                                                <th>3</th>
                                                <th>4</th>
                                                <th>5</th>
                                                <th>6</th>
                                                <th>7</th>
                                                <th>8</th>
                                                <th>9</th>
                                                <th>10</th>
                                                <th>11</th>
                                                <th>12</th>
                                                <th>13</th>
                                                <th>14</th>
                                                <th>15</th>
                                                <th>16</th>
                                                <th>17</th>
                                                <th>18</th>
                                                <th>19</th>
                                                <th>20</th>
                                                <th>21</th>
                                                <th>22</th>
                                                <th>23</th>
                                                <th>24</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div>
                             <?php /**include_once 'grant.php'; **/ ?>
                        <!--</div>-->
                        <!--    <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Shift</h3>
                                </div><!-- /.box-header -->
                                <!--<div class="box-body table-responsive">-->
                            
                                   
                               
                                
                                
                                <!--</div><!-- /.box-body -->
                            
                                <!--<div class="box-footer">
                                        <button type="submit" class="btn btn-primary" onClick="" id="simpanjdwalkerja">
                                           Simpan
                                        </button>
                                    </div>
                            </div><!-- /.box -->

                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
		<style>
			#example5 tr {
					cursor: pointer;
				}
			#example7 tr{
				cursor: pointer;
			}	
		</style>
