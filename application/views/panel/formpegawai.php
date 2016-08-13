
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                       Tambah Data Pegawai
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> <span class="label label-success">Unit</span>
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
                                    <div class="box-body table-responsive" style="padding-bottom: 90px;">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>

                                            <tr>
                                                <td>No.</td>
                                                <td>ID</td>
                                                <td>Nama Unit</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no=1; 
                                        foreach($dep as $row){

                                        ?>
                                            <tr id="trpegawai" class="selected">
                                            <td><?php echo $no++; ?></td>
                                            <td id="tdpegawai"><?php echo $row['DEPTID']?></td>
                                            <td><?php echo $row['DEPTNAME']?></td>
                                          </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div>
                        </div>
                            <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title"> <span class="label label-success">Data Pegawai</span>
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
                                    <div class="box-body table-responsive" style="padding-bottom: 90px;" id="divtbpegawai">
                                    <table id="example7" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td>No.</td>
                                                <td>NIK</td>
                                                <td>Nama /Pegawai</td>
                                               <!-- <td>Aksi</td>-->
                                            </tr>
                                        </thead>
                                        <tbody id="tbodypegawai">
                                        <?php 
                                        $no1=1; 
                                        foreach($kary as $key)
                                        {
                                        ?>
                                            <tr>
                                            <td><?php echo $no1++; ?></td>
                                            <td><?php echo $key['SSN'] ?></td>
                                            <td><?php echo $key['Name'] ?></td>
                                            <!--<td><button type="button" class="btn btn-primary" id="buteditpeg2" value=<?php echo $key['USERID'] ?> title="Edit Pegawai">Edit</button></td>-->
                                          </tr>
                                          <?php 
                                                }
                                          ?>
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div>
                        </div>
                    </div>   <!-- /.row -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="box box-primary" >
                            <form role="form" action="<?php echo base_url();?>index.php/c_admin/savepeg1" enctype="multipart/form-data" method="POST">
                                <div class="box-header" style="padding-top: 9px;">
                                <button class="btn btn-success" type="button" id="tbhpegbut">Tambah</button>&nbsp;
                                <button class="btn btn-primary" type="button" id="butsimppeg" onsubmit="return true;" name="butsimppeg">Simpan</button>
                                </div>
                                <!--<?php echo base_url();?>index.php/panel/simpanpegbaru-->
                                <div  style="float: left; width: 46%;">
                                <div class="form-group" style="margin-bottom: 0px; display: none;">
                                    <label for="exampleinputemail">No ID</label>
                                    <input type="number" value="" name="noidbaru" id="noidbaru" class="form-control">
                                        
                                    </input>
                                </div>
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleInputEmail">Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama" id="namabarupeg" name="namabarupeg" 
                                    required>
                                </input>
                                </div>
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleInputEmail1">NIP/NIK</label>
                                    <input type="text"  name="nikbaru" id="nikbaru" class="form-control" 
                                    placeholder="NIK" required />
                                </div>
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleInputEmail1">NPWP</label>
                                    <input type="text" value="" name="npwpbaru" id="npwpbaru" class="form-control" 
                                    placeholder="NPWP"  />
                                </div>
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleInputEmail1">Department</label>
                                    <select class="form-control" id="deptbaru" name="deptbaru" required>
                                    <option value="">--Pilih Department--</option>
                                        <?php 
                                        $sql=$this->db->get('DEPARTMENTS'); 
                                        foreach($sql->result_array() as $row){
                                        ?>
                                        <option value=<?php echo $row['DEPTID']?>><?php echo $row['DEPTNAME']?></option>
                                        <?php 
                                        }
                                         ?>
                                    </select>
                                </div>
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleInputEmail1">Pangkat/Golongan</label>
                                    <!--<input type="text" value="" name="pangbaru" id="pangbaru" class="form-control" 
                                placeholder="Pangkat/Golongan" /> -->
                                <select class="form-control" name="pangbaru" id="pangbaru" >
                                        <option value="">--Pilih--</option>
                                        <?php 
                                        $sql=$this->db->get_where('golonganmaster',array('aktif'=>1))->result_array(); 
                                        foreach($sql as $key){
                                        ?>
                                        <option value=<?php $key['kd_golongan']?>><?php echo $key['golongan']?></option>
                                        <?php } ?>
                                </select>
                                </div>
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleInputEmail1">Jabatan</label>
                                    <select required class="form-control" name="jabbaru" id="jabbaru">
                                        <option value="">--Pilih Jabatan--</option>
                                        <option value="E.I/a">E.I/a</option>
                                        <option value="E.I/b">E.I/b</option>
                                        <option value="E.II/a">E.II/a</option>
                                        <option value="E.II/b">E.II/b</option>
                                        <option value="E.III/a">E.III/a</option>
                                        <option value="E.III/b">E.III/b</option>
                                        <option value="E.IV/a">E.IV/a</option>
                                        <option value="E.IV/b">E.IV/b</option>
                                        <option value="E.V/a">E.V/a</option>
                                        <option value="Staff">Staff</option>
                                    </select>
                                    <!--<input type="text" value="" name="jabbaru" id="jabbaru" class="form-control" 
                                    placeholder="Jabatan" /> --> 
                                </div>
                                <div class="form-group" style="margin-bottom: 0px;">
                                <label for="exampleinputemail">Struktural</label>
                                <select name="strukbaru" id="strukbaru" class="form-control" required>
                                    <option value="">--Pilih--</option>
                                    <option value="0">Kepala</option>
                                    <option value="1">Wakil Kepala</option>
                                    <option value="2">Staff</option>
                                </select>
                                </div>
                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleinputemail">Jenis Kelamin</label>
                                    <select name="jkbaru" id="jkbaru" class="form-control" required>
                                        <option value="">--Pilih--</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>

                                </div>
                                    <!--float right--> 
                                    <div  style="float:right; width: 46%;">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label for="exampleInputEmail">Pendidikan</label>
                                        <select class="form-control" id="pendbaru" name="pendbaru" required>
                                            <option value="">--Pilih--</option>
                                            <?php 
                                            $sql=$this->db->get('PENDIDIKAN')->result_array(); 
                                            foreach($sql as $row){
                                            ?>
                                            <option value=<?php echo $row['IDPENDIDIKAN']?>><?php echo $row['NAMAPEND'] ?></option>
                                            <?php  } ?>
                                        </select>
                                        <!--<input type="text" id="pendpeg" name="pendpeg" class="form-control" 
                                        placeholder="Pendidikan Pegawai"></input> --> 
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label for="exampleinputEmail">Foto (Max. 50 Mb)</label>
                                        <input type="file" class="form-control" id="fotopeg" name="fotopeg" accept="image/*"></input>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px; ">
                                    <label for="exampleInputEmail">Tgl Lahir </label>
                                    <input type="text" class="form-control" id="tglahirbaru" 
                                    name="tglahirbaru" value=<?php echo date('d-m-Y');?>></input>
                                </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label for="exampleinputemail">Tgl Masuk</label>
                                        <input type="text"  id="tglmskpeg" class="form-control" name="tglmskpeg" 
                                        value=<?php echo date('d-m-Y'); ?> style="cursor: pointer;"></input>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleinputemail">No Telp/Hp</label>
                                    <input type="number" class="form-control" id="nopepeg" name="nopepeg" maxlength="16"></input>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px">
                                    <label for="exampleinputemail">Status User Di Mesin</label>
                                    <select class="form-control" id="stspeg" name="stspeg">
                                        <option value="0">User</option>
                                        <option value="-1">Invalid</option>
                                        <option value="1">Enroller</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Supervisor</option>
                                    </select>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px">
                                    <label for="exampleinputemail">Status Kepegawian</label>
                                    <select class="form-control" id="stspegdb" name="stspegdb" required>
                                    <option value="">--Pilih--</option>
                                    <?php 
                                    $sql=$this->db->get('STTS_PEGAWAI')->result_array();
                                    foreach($sql as $row){ 
                                    ?>
                                    <option value=<?php echo $row['ID']?>><?php echo $row['NAMA_STTS'] ?></option>
                                    <?php } ?>
                                    </select>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="exampleInputEmail">Alamat</label>
                                    <input type="text" class="form-control" name="alamatbaru" id="alamatbaru" placeholder="Alamat"></input>
                                </div>
                                </form>
                            </div>
                        </div>    
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

<script type="text/javascript">
var tgl="<?php echo date('d-m-Y');?>"
    $(document).on("click","#tbhpegbut", function(){
        $('#noidbaru').val('');  // nik/ nip 
        $('#noidbaru').focus(); 
        $('#jkbaru').val(''); 
        $('#tglahirbaru').val(tgl); 
        $('#alamatbaru').val(''); 
        $('#pendpeg').val(''); 
        $('#fotopeg').val(''); 
        $('#tglmskpeg').val(tgl); 
        $('#namabarupeg').val(''); 
        $('#nopepeg').val(''); 
        $('#stspeg').val(''); 
    }); 
</script>