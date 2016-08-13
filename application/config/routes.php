<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller']		 	= "c_panel";
$route['404_override'] 					= '';
$route['panel']							= 'c_panel';
$route['home']							= 'c_admin';
$route['panel/mesin']					= 'c_admin/mesin';
$route['panel/karyawan']				= 'c_admin/karyawan';
$route['panel/jamkerja']				= 'c_admin/jamkerja';
$route['panel/mastercuti']				= 'c_admin/mastercuti'; 

// form update jam kerja pegawai
$route['panel/updjamkerja'] ='c_admin/formupdatejamkerja';
// pengaturan shift
$route['panel/shift']					= 'c_admin/shift';
$route['panel/cuti']					= 'c_admin/izincuti';
$route['panel/liburumum']				= 'c_admin/liburumum';  // pengaturan hari libur umum

// tambah izin cuti
$route['panel/cuti-add']				= 'c_admin/cutiadd';
$route['panel/jamkerjaform']			= 'c_admin/jamkerjaform';
$route['panel/updatecuti']     			 = 'c_admin/formupdate';

// pencarian status karyawan

$route['panel/carikry']					='c_admin/statuskary';
// riwayat operasional
$route['panel/riwoper']					= 'c_admin/operasional';
// presensi datang terlambat
$route['panel/terlambat']				= 'c_admin/terlambat';
// presensi lupa c/in and x/out
$route['panel/lupa-in']					= 'c_admin/lupain';
// form tambah mesin baru
$route['panel/mesinbaru']				= 'c_admin/mesin_form' ;
$route['panel/pengmesin']				= 'c_admin/peng_mesin';

// Laporan
$route['report/repharian']				= 'report';
$route['report/perdepart']				= 'report/repperdepart';
$route['report/detailharian']			= 'report/repdetharian';
$route['report/lembur']					= 'report/lemburkarya';
$route['report/transaksi']				= 'report/laptransaksi';
$route['report/perhpresensi']			= 'report/lapperhpresensi';

//profil
$route['panel/profil']					='c_admin/profil';
// logout
$route['panel/logout']					='c_panel/logout';
// shift add
$route['panel/shift-add']				='c_admin/shiftadd';
// tambah hari libur umum
$route['panel/libur-form']				='c_admin/liburumumadd';
// payroll
$route['panel/payroll']					= 'c_admin/payroll';
// payroll setting
$route['panel/paysetting']      = 'c_admin/payrollsetting';
// cetak keterlambatan
$route['panel/cetakterlambat'] ='cetakall/cetakterlambat';
// function simpanmesin
$route['panel/simpan_mesin']  ='c_admin/simpanmesin';
// form tambah payroll setting
$route['panel/formpay_setting'] ='c_admin/formpayset';
// master golongan pegawai
$route['panel/mastergolongan']  = 'c_admin/golongan';
// form tambah golongan
$route['panel/formgolbaru']     = 'c_admin/golonganbaru';
// proses penyimpanan golongan baru
$route['panel/save_gol']        = 'c_admin/simpangolbaru';
// proses simpan payroll setting
$route['panel/save_pays']     = 'c_admin/simpanpayrollset';
// download data presensi
$route['panel/download']      = 'c_admin/downloaddtpresensi';
// upload data pegawai
$route['panel/upload_pegawai']  = 'c_admin/uploadpeg';
// data uraian
$route['panel/data_uraian']      = 'c_admin/datauraian';
$route['panel/formadduraian']    = 'c_admin/formuraian';
//simpan uraian
$route['panel/save_uraian']      = 'c_admin/simpanuraian';
// form report detail harian
$route['report/formdetailharian']  = 'c_admin/formcetakdetail';
// function simpan
$route['panel/save_izin']         = 'c_admin/simpancutibaru';
// jadwal karyawan
$route['panel/jdwalkerja']        = 'c_admin/jdwalkaryawa';
// form tambah pegawai
$route['panel/tambahpegawai']     = 'c_admin/tambahpegawai';
// data administrator
$route['panel/administrator']     = 'c_admin/administrator';
// data departments
$route['panel/departments']       = 'c_admin/departments'; // departments
// data penilaian
$route['panel/penilaian']         = 'c_admin/pagepenilaian';
// route pendidikan
$route['panel/pendidikan']        = 'c_admin/pagependidikan';
// form add pendidikan
$route['panel/addpend']            = 'c_admin/formpendidikan';
// proses penyimpanan pendidikan
$route['panel/spendidikan']          = 'c_admin/simpanpendidikan';
// form update pendidikan
$route['panel/fomrupdpend']  = 'c_admin/formupdpendi';
// form update pendidikan
$route['panel/updpendidikan']  ='c_admin/updpendidikan';
//  proses simpan pegawai
$route['panel/simpanpegbaru']   = 'c_admin/savepegawai';
// form departments
$route['panel/formdepartments'] ='c_admin/formdepartments';
// simpan departments
$route['panel/simpandepart']    = 'c_admin/simpandepart';
// form update uraian
$route['panel/formupduraian']   = 'c_admin/formupduraian';
// presenis
$route['panel/presensi']        = 'c_admin/datapresensi'; 
// pennyimpanan simpan kerja baru 
$route['panel/simpankerjabaru']	 = 'c_admin/simpankerja'; 
// simpan shiftkerjabaru 
$route['panel/simpanshiftbaru']   = 'c_admin/simpanshiftbaru'; 