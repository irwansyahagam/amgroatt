
            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Data Presensi 
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                <br />
                <br />
					<div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Data Presensi</h3>
                                </div><!-- /.box-header -->
                                <div style="width: 60%;margin-top: 9px;" class="form-inline">
                                 <span>Dept</span>
                                 <select name="dptpresensi" id="dptpresensi" class="form-control" onchange="javascript:dtpresensi();">
                                   <option value="">--Pilih Department--</option>
                                   <?php 
                                   $sql=$this->db->get('DEPARTMENTS'); 
                                   foreach($sql->result() as $row){
                                   ?>
                                   <option value=<?php echo $row->DEPTID; ?>><?php echo $row->DEPTNAME; ?></option>
                                   <?php } ?>
                                 </select>

                                 <span>Name</span>
                                 <select name="dtpegawai" id="dtpegawai" class="form-control">
                                   <option value="">--Pilih---</option>

                                 </select> 
                                 </div>
                                 <div style="width: 60%;margin-top: 9px;" class="form-inline">
                                 <span>Tgl</span>                              
                                <input type="text" style="width: 20%; cursor: pointer;" class="form-control" 
								placeholder="Tgl" name="tgl1presen" 
                                id="tgl1presen" value=<?php echo date('d-m-Y') ;?> readonly="true"></input>
                                <span>S.d</span>
                                <input type="text" class="form-control" style="width: 20%; cursor: pointer;" placeholder="Tgl" 
                                name="tgl2presen" id="tgl2presen" value="<?php echo date('d-m-Y'); ?>" readonly="true"></input>
                                &nbsp;<button type="button" id="tampilkanpresensi" class="btn btn-success">Tampilkan</button>
                                &nbsp;<button type="button" id="butcetak" class="btn btn-primary" onclick="javascript:cetakpresensi();">Cetak</button>
                                &nbsp;<input type="hidden" id="idjadwal"></input>
                                 </div>
                                <div class="box-body table-responsive" id="tblpresensi">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td style="text-align:center; width:5%;"><input type="checkbox" id="chkgolong" name="chkgolong"></input></td>
                                                <td  style="text-align:center; width:5%;">No.</td>
                                                <td  style="text-align:center; width:15%;">Department</td>
                                                <td   style="text-align:center;">Name</td>
                                                <td   style="text-align:center;">NO ID</td>
                                                <td style="text-align: center;">Date/time</td>
                                                <td style="text-align:center;">Status</td>
                                                <td style="text-align: center;">Location ID </td>
                                                <td style="text-align: center;">ID Number</td>
                                                <td style="text-align: center;">VerifyCode</td>
                                                <td style="text-align: center;">Card NO</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                           <td  style="text-align:center; width:5%;"><input type="checkbox" id="chkgolong" name="chkgolong"></input></td>
                                          <td  style="text-align:center; width:5%;">&nbsp;</td>
                                          <td   style="text-align:left; width:15%;">&nbsp;</td>
                                          <td>&nbsp;</td>
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
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
