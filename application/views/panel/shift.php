
            <aside class="right-side">                
                <section class="content-header">
                    <h1>
                        Pengaturan Shift
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <button class="btn btn-danger" id="hapusshift">Hapus Shift</button>
                <button class="btn btn-success" id="tbhshiftbaru" class="tbhshiftbaru">Tambah Shift</button>
                <!--<a href="<?php echo base_url(); ?>index.php/panel/shift-add" class="btn btn-success">Tambah Shift</a>-->
                <div style="float: right;"> 
                    <button class="btn btn-danger" id="btnhpsperiode">Hapus Waktu</button>
                    <button class="btn btn-success" id="btntbhperiodejamkerja">Tambah Waktu</button>    
                </div>
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-6" style="width: 40%;">
                            <div class="box">
                                <div class="box-header">
                            <input type="hidden" id="kdjamdel12" class="kdjamdel12" name="kdjamdel12"></input> 
                            <input type="hidden" id="kdunitdel" name="kdunitdel"></input>   
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example7" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <td>&nbsp;</td>
                                                <td>No.</td>
                                                <td>Nama Shift</td>
                                                <td>Tgl Mulai</td>
                                                <td>Periode</th>
                                                <td>Unit Periode</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodybrshift">
                                        <?php
                                        $no=1;  
                                        foreach ($sql as $row) {
                                        ?>
                                        <tr>
                                        <td class="idshift" id="idshift">
                                        <input type="checkbox" id="chkshift" class="chkshift" name="chkshift" 
                                        value=<?php echo $row['NUM_RUNID'].'|'.$row['UNITS'] ?> /><span style=" text-align: left;
                                        display: none; ">
                                        <?php echo $row['NUM_RUNID'].'|'.$row['UNITS']  ?></span></td>
                                          <td><?php echo $no++;?></td>
                                          <td><?php echo $row['NAME'] ?></td>
                                          <td><?php echo viewtglweb($row['STARTDATE']) ?></td>
                                          <td><?php echo $row['CYLE'] ?></td>
                                          <td><?php 
                                          if($row['UNITS']=="2"){
                                            echo 'Bulan'; 
                                          }else if($row['UNITS']=="1"){
                                            echo 'Minggu'; 
                                          }else if($row['UNITS']=="0"){
                                            echo 'Hari'; 
                                          }
                                          ?></td>
                                          <td><button type="button"  class="btn btn-primary" 
                                          value=<?php echo $row['NUM_RUNID'].'|'.$row['NAME'].'|'.$row['UNITS'] ?> id="editbutshift21">Edit</button></td>
                                          </tr>
                                          <?php
                                           }
                                          ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>

                        <div class="col-xs-6" style="width: 60%;padding-left: 0px;padding-right: 0px;">
                            <div class="box">
                                <div class="box-header">                              
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" style="width: 60%;">
                                    <table id="example1" class="table table-bordered table-striped" style="padding-left: 0px;padding-right: 10px;font-size: 10px;">
                                        <thead>
                                            <tr>
                                            <td><input type="checkbox" id="chkshiftall1" name="chkshiftall1" class="chkshiftall1"> 
                                            </input></td>
                                                <td>&nbsp; </td>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</th>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>6</td>
                                                <td>7</td>
                                                <td>8</th>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>12</td>
                                                <td>13</td>
                                                <td>14</td>
                                                <td>15</th>
                                                <td>16</td>
                                                <td>17</td>
                                                <td>18</td>
                                                <td>19</td>
                                                <td>20</td>
                                                <td>21</th>
                                                <td>22</td>
                                                <td>23</td>
                                                <td>24</td>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyshift" class="tbodyshift">
                                        </tbody>
                                     </table>   
                             </div>
                        </div>   

                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
