
            <aside class="right-side">                
                <section class="content-header">
                    <h1>
                        Daftar Karyawan
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content" style="padding-bottom: 90px;">
                <div style="float:left;padding-left:9px;" class="form-inline">
                <button type="button" class="btn btn-danger" title="Hapus" id="btnhpsnilai">Hapus</button>
                <button type="button" class="btn btn-success" title="refresh" id="btnrefreshnilai">Refresh</button>
                </div>
                <div style="float:right;padding-left:9px;" class="form-inline">
              <button type="button" class="btn btn-primary" id="btnnilai">Beri Skor</button>
              </div>
                  <div style="float:right;" class="form-inline">
                      <!--<input type="text" class="form-control" id="tglfilgaji" readOnly="true" />-->
                      <select class="form-control" id="thnnilai">
                        <option value="">-Pilih Tahun-</option>
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
                <div style="float:right;padding-left:9px;padding-right:9px;" class="form-inline">
                    <select class="form-control" id="blnnilai">
                      <option value="">-Pilih Bulan-</option>
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
					<div class="row" style="padding-bottom: 9px;">
                        <div class="col-xs-12" style="padding-bottom: 90px;">
                            <div class="box">
                                <div class="box-header">
                                                                     
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive" style="padding-bottom: 90px;" id="bodytbnilai">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        
                                            <tr>
                                                <td><input type="checkbox" id="chkpenall" name="chkpenall"></input></td>
                                                <td>No.</td>
                                                <td>NIP/ NIK</td>
                                                <td>Nama</td>
                                                <th>Pendidikan</td>
                                                <td>TJ</td>
                                                <td>SP</td>
                                                <td>KP</td>
                                                <td>PR</td>
                                                <td>MI</th>
                                                <td>Jlh Skor Dinamis</td>
                                                <td>Aksi</td>
                                            </tr>

                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1; 
                                        foreach($sql as $row){
                                        ?>
                                        <tr>
                                          <td><input type="checkbox" id="chkpen" name="chkpen" class="chkpen"></input></td>
                                          <td><?php echo $no++; ?></td>
                                          <td><?php echo $row['nip'] ?></td>
                                          <td><?php echo $row['Name'] ?></td>
                                          <td><?php echo $row['NAMAPEND'] ?></td>
                                          <td style="padding:0 0 0 0px;padding-bottom: 0px; text-align: center;
                                          padding-right: 0px;">
                                          <input type="number" id="tjpen" name="tjpen" 
                                          maxlength="3" style="width: 40px;margin-top: 0px;"></td>
                                          <td style="padding:0 0 0 0px;padding-bottom: 0px; text-align: center;
                                          padding-right: 0px;">
                                          <input type="number" id="sppen" name="sppen" maxlength="3" style="width: 40px;margin-top: 0px;">
                                          </td>
                                          <td style="padding:0 0 0 0px;padding-bottom: 0px; text-align: center;
                                          padding-right: 0px;">
                                          <input type="number" id="spkp"  name="spkp" maxlength="3" style="width: 40px;margin-top: 0px;">
                                          </td>
                                          <td style="padding:0 0 0 0px;padding-bottom: 0px; text-align: center;
                                          padding-right: 0px;">
                                          <input type="number" id="spkr"  name="spkr" maxlength="3" style="width: 40px;margin-top: 0px;">
                                          </td>
                                          <td style="padding:0 0 0 0px;padding-bottom: 0px; text-align: center;
                                          padding-right: 0px;"> 
                                          <input type="number" id="mipen"  name="mipen" maxlength="3" style="width: 40px;margin-top: 0px;"></td>
                                          <td>&nbsp;</td>
                                          <td><button type="button" class="btn btn-primary" id="buteditnilai" value=<?php echo $row['USERID']?> >Edit</button></td>
                                          </tr>
                                          <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                    <div style="padding-top: 90px;"></div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
