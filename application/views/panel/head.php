<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panel AmgroATT</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!--<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/LOGO1.ico">-->
        <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/admin/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- calender -->
        <link href="<?php echo base_url();?>assets/dhtmlx/dhtmlx.css" rel="stylesheet" type="text/css" />
        <!--dhtmlx --> 
               <link rel="stylesheet" href="<?php echo base_url()?>assets/dhtmlx/codebase/dhtmlxgantt.css" type="text/css"/>
    <script src="<?php echo base_url();?>assets/dhtmlx/codebase/dhtmlxgantt.js" type="text/javascript" charset="utf-8"></script>
    <style type="text/css">
    html, body { height: 100%; padding:0px; margin:0px; overflow: scroll; }

    .gantt_task_cell.week_end{
        background-color: #EFF5FD;
    }
    .gantt_task_row.gantt_selected .gantt_task_cell.week_end{
        background-color: #F8EC9C;
    }

</style>
    <div id="demo" class="collapse">
        Lorem ipsum dolor text....
    </div>
    </head>
    <body class="skin-blue" onload="" scroll="yes">
        <header class="header" style="position: fixed;">
            <a href="" class="logo">
				<b>AmgroATT</b>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <!--<a href="#myNavmenu" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" data-target="#myNavmenu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>-->
                <a href="#myNavmenu" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-right">
                    <ul class="nav navbar-nav">
					<li class="dropdown user user-menu">

					</li>
                        <li class="dropdown user user-menu">
                            <a href="<?php echo base_url();?>index.php/panel/administrator" 
                            class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $this->session->userdata('nama');?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">

                                    <p>

                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php echo base_url(); ?>index.php/panel/profil" 
                                        class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo base_url(); ?>index.php/login/logout" 
                                        class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left" role="navigation">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                         <a href="<?php echo base_url(); ?>panel/user" class="btn btn-default btn-flat">
                            <img src="<?php echo base_url();?>assets/admin/logo2.png" style="width: 175px;height: 160px;" alt="User Image" /></a>
                        </div>
                        <div class="pull-left info">
                            <p>WELCOME </p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?php echo base_url();?>index.php/home">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                         <li class="active">
                            <a href="<?php echo base_url();?>index.php/panel/mesin">
                                <i class="fa fa-crop"></i> <span>Daftar Mesin</span>
                            </a>
                        </li>
                        <!--<li class="active">
                            <a href="<?php echo base_url();?>index.php/panel/karyawan">
                                <i class="fa fa-crop"></i> <span>Karyawan</span>
                            </a>
                        </li>-->

                        <!--<li class="treeview">
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span>Jadwal Karyawan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
								<a href="<?php echo base_url();?>panel/artikel">
                                		<i class="fa fa-crop"></i> <span>Pengaturan Jam Kerja</span>
                           		</a>
                        		</li>
								<li>
								<a href="<?php echo base_url();?>panel/artikel/add">
                                		<i class="fa fa-crop"></i> <span>Pengaturan Shift</span>
                           		</a>
                        		</li>
                                <li>
                                <a href="<?php echo base_url();?>panel/artikel/add">
                                    <i class="fa fa-crop"></i> <span>Jadwal Karyawan</span>
                                </a>
                                </li>
                                <li>
                                <a href="<?php echo base_url();?>panel/artikel/add">
                                    <i class="fa fa-crop"></i> <span>Aturan Presensi</span>
                                </a>
                                </li>
                            </ul>
                        </li>-->

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span>Presensi</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <a href="<?php echo base_url();?>index.php/panel/cuti">
                                        <i class="fa fa-crop"></i> <span>Karyawan Dinas Luar/Izin</span>
                                </a>
                                </li>
                                <li>
                                <a href="<?php echo base_url();?>index.php/panel/lupa-in">
                                        <i class="fa fa-crop"></i> <span>Lupa Scan In/Out</span>
                                </a>
                                </li>
                                <!--<li>
                                <a href="<?php echo base_url();?>index.php/panel/terlambat">
                                        <i class="fa fa-crop"></i> <span>Terlambat/ Plg Cepat Kolektif</span>
                                </a>
                                </li>-->
                            </ul>
                        </li>

                        <!--payroll-->
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span>Payroll</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <a href="<?php echo base_url();?>index.php/panel/payroll">
                                        <i class="fa fa-crop"></i> <span>Data Gaji Karyawan</span>
                                </a>
                                </li>
                                <li>
                                <a href="<?php echo base_url();?>index.php/panel/paysetting">
                                        <i class="fa fa-crop"></i> <span>Payroll Setting</span>
                                </a>
                                </li>
                                <li>
                                <a href="<?php echo base_url();?>index.php/panel/cuti">
                                        <i class="fa fa-crop"></i> <span>Formula Payroll</span>
                                </a>
                                </li>
                            </ul>
                        </li>

                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span>Penilaian</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <a href="<?php echo base_url();?>index.php/panel/penilaian">
                                        <i class="fa fa-crop"></i> <span>Faktor Dinamis Bobot</span>
                                </a>
                                </li>
                                
                            </ul>
                        </li>

						<li class="treeview">
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span>Cari/Cetak Laporan </span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
								<a href="<?php echo base_url();?>index.php/panel/presensi">
                                		<i class="fa fa-crop"></i> <span>Data Presensi</span>
                           		</a>
                        		</li>
                                <!--<li>
                                <a href="<?php echo base_url();?>index.php/panel/carikry">
                                        <i class="fa fa-crop"></i> <span>Status Karyawan</span>
                                </a>
                                </li>-->
                                <li>
                                <a href="<?php echo base_url();?>index.php/report/perhpresensi" title="Laporan perhitungan">
                                   <i class="fa fa-crop"></i> <span>Lap. Pehitungan</span>
                                </a>
                                </li>
                                <li>
                                <a href="<?php echo base_url();?>index.php/panel/riwoper" title="Laporan perhitungan presensi">
                                   <i class="fa fa-crop"></i> <span>Riwayat Operasional</span>
                                </a>
                                </li>
                            </ul>
                        </li>

                        <!--<li class="treeview">
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span>Laporan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/report/repharian">
                                        <i class="fa fa-crop"></i>
                                        <span>Laporan harian</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/report/repperdepart">
                                        <i class="fa fa-crop"></i>
                                        <span>Laporan Per Departemen</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/report/detailharian">
                                        <i class="fa fa-crop"></i>
                                        <span>Laporan Detail Harian</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-crop"></i>
                                        <span>Laporan Detail Harian + Jam Kerja</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/report/lembur">
                                        <i class="fa fa-crop"></i>
                                        <span>Laporan Lembur Harian</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/report/transaksi">
                                        <i class="fa fa-crop"></i>
                                        <span>Data Transaksi Karyawan</span>
                                    </a>
                                </li>
                            </ul>
                        </li>-->

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-gear"></i>
                                <span>Pengaturan</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                <a href="<?php echo base_url();?>index.php/panel/departments" title="Laporan perhitungan presensi">
                                   <i class="fa fa-home"></i> <span>Departemen</span>
                                </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url();?>index.php/panel/karyawan">
                                        <i class="fa fa-crop"></i><span>Karyawan</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url();?>index.php/panel/administrator">
                                        <i class="fa fa-crop"></i>
                                        <span>Administrator</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/panel/jamkerja">
                                        <i class="fa fa-gear"></i>
                                        <span>Pengaturan Jam Kerja</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/panel/shift">
                                    <i class="fa fa-crop"></i>
                                    <span>Pengaturan Shift</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/panel/jdwalkerja">
                                        <i class="fa fa-crop"></i>
                                        <span>Jadwal Karyawan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/panel/liburumum">
                                        <i class="fa fa-crop"></i>
                                        <span>Hari Libur Umum</span>
                                    </a>
                                </li>
                                <!--<li>
                                    <a href="#">
                                        <i class="fa fa-crop"></i>
                                        <span>Aturan Presensi</span>
                                    </a>
                                </li>-->
                                <li>
                                    <a href="<?php echo base_url();?>index.php/panel/mastercuti">
                                        <i class="fa fa-crop"></i>
                                            <span>Izin/Cuti</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/panel/mastergolongan">
                                        <i class="fa fa-crop"></i>
                                            <span>Master Pangkat</span>
                                    </a>
                                </li>
                                <!--<li>
                                    <a href="<?php echo base_url();?>index.php/panel/data_uraian">
                                        <i class="fa fa-crop"></i>
                                            <span>Master Uraian</span>
                                    </a>
                                </li> -->
                                <!--<li>
                                    <a href="<?php echo base_url();?>index.php/panel/data_uraian">
                                        <i class="fa fa-crop"></i>
                                            <span>Master Pangkat</span>
                                    </a>
                                </li>-->
                                <li>
                                    <a href="<?php echo base_url();?>index.php/panel/pendidikan">
                                        <i class="fa fa-crop"></i>
                                        <span>Master Pendidikan</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-gear"></i>
                                <span>Pengaturan Mesin</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                              <!-- <li>
                                     <a href="<?php echo base_url();?>index.php/panel/pengmesin">
                                        <i class="fa fa-crop"></i>
                                        <span>Daftar Data Mesin</span>
                                    </a>
                                </li> -->

                                <li>
                                     <a href="<?php echo base_url()?>index.php/panel/download">
                                        <i class="fa fa-crop"></i>
                                        <span>Download Data Presensi</span>
                                    </a>
                                </li>
                                <li>

                                <li>
                                    <a href="<?php echo base_url();?>index.php/panel/upload_pegawai">
                                        <i class="fa fa-crop"></i>
                                        <span>Upload Data dan Sidik Jari karyawan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/c_admin/downloaddt">
                                        <i class="fa fa-crop"></i>
                                        <span>Download Data dan Sidik Jari karyawan</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

						<!--<li class="active">
                            <a href="<?php echo base_url();?>panel/masterunit">
                                <i class="fa fa-tags"></i><span>Master Ruang</span>
                            </a>
                        </li>-->


						<!--<li class="active">
                            <a href="<?php echo base_url();?>panel/setting">
                                <i class="fa fa-gear"></i> <span>Setting</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="<?php echo base_url();?>panel/contact">
                                <i class="fa fa-envelope-o"></i> <span>Contact</span>
                            </a>
                        </li>-->

                    </ul>
                    </nav>
                </section>
            </aside>
