$(document).on("click","#printlpain", function(){
	var theprint = window.print(base_url+'index.php/report',"Print lupa check in anda lupa check out", "menubar=0, location=0, height=700, width=900");
	$('#popup-content').clone().appendTo(theprint.document.body);
	theprint.print();
});

$(document).ready(function(){
 $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
}); 


$(document).on("click","#btncariglobal", function(){
	$('#contentcari').html('Loading....');
	var nama=$('#namakry').val(); 
	//$('#contentcari').html('');
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/getpencarianpeg', 
		data:{
			nama:nama
		},beforeSend:function(jqXHR,setting){
			$('#contentcari').html('Loading....');
			fadeexample1();
			dttable();
		},success:function(callback){
			$('#contentcari').html(callback);
			$('#example7').dataTable(); 
			fadeexample1();
			dttable();
		}
	});
	request.fail(function(jqXHR,textStatus){
		$('#contentcari').html('Request failed: '+textStatus);
	});  
});
// button hide hasil pencarian 
$(document).on("click","#tutppencarianhome", function(e){
	$('#contentcari').html(''); 
}); 
function dttable() {
$("#example1").dataTable();
$('#example2').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": false,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false
});
}
// function fade in js
function fadeexample1(){
	$('#example1').fadeIn("slow");
}
// check all  daftar mesin
$(document).on("click","#chkmesin", function(){
	$('.chkmesin1').attr('checked', this.checked);
});
	// koneksikan ke mesin 
$(document).on("click","#conmesin",function(){


}); 	

// click button cari hadir dashboard
$(document).on("click","#btncrhadir", function(e){
	//	waitingDialog.show(); 
		$('#modalcari').modal('show');
		var tgl=$('#tglhadirdash').val(); 
		var bln=tgl.split("-"); 
		var bln1=bln[0]; 
		var thn=bln[1]; 
		var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, url:base_url+'index.php/c_admin/formhadirpeg', 
			data:{
				bln:bln1,thn:thn
			},beforeSend:function(jqXHR,setting){
				$('#modalcari').modal('show');
				$('#bodyhadirpeg').html('loading...'); 
			},success:function(callback){
				$('#modalcari').modal('show');
				$('#bodyhadirpeg').html(callback); 
				$('.modal-title').html('View Data Hadir Pegawai [Bulan '+bln1+' '+thn+']'); 
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			$('#bodyhadirpeg').html('Request failed: '+textStatus); 
		}); 
		$('#example1').dataTable(); 
});

$(function(){
    $(document).on( 'click', "input#tglmulaishift112",function(){
        $(this).datepicker({
            dateFormat:"yy-mm-dd",
            showOn:'focus',
            changeMonth:true,
            changeYear:true,
            defaultDate:'-40y+0d',
            yearRange: "-100:+0"
        }).focus();
        
    });
});


$(function(){
    $(document).on( 'click', "input#tglmulaishift1edit",function(){
        $(this).datepicker({
            dateFormat:"yy-mm-dd",
            showOn:'focus',
            changeMonth:true,
            changeYear:true,
            defaultDate:'-40y+0d',
            yearRange: "-100:+0"
            
        }).focus();
        
    });
});

$(function(){
    $(document).on( 'click', "input#tglahirupd",function(){
        $(this).datepicker({
            dateFormat:"dd-mm-yy",
            showOn:'focus',
            changeMonth:true,
            changeYear:true,
            defaultDate:'-40y+0d',
            yearRange: "-100:+0"
            
        }).focus();
        
    });
});
// tgl masuk update 
$(function(){
    $(document).on( 'click', "input#tglmskpegupd",function(){
        $(this).datepicker({
            dateFormat:"dd-mm-yy",
            showOn:'focus',
            changeMonth:true,
            changeYear:true,
            defaultDate:'-40y+0d',
            yearRange: "-100:+0"
        }).focus();
        
    });
});

$(function(){
    $(document).on( 'click', "input#tglmulaihrliburedit",function(){
        $(this).datepicker({
            dateFormat:"dd-mm-yy",
            showOn:'focus',
            changeMonth:true,
            changeYear:true,
            defaultDate:'-40y+0d',
            yearRange: "-100:+0"
        }).focus();
        
    });
});


$(function(){
    $(document).on( 'click', "input#tglakhirliburedit2",function(){
        $(this).datepicker({
            dateFormat:"dd-mm-yy",
            showOn:'focus',
            changeMonth:true,
            changeYear:true,
            defaultDate:'-40y+0d',
            yearRange: "-100:+0"
        }).focus();
        
    });
});

$(function(){
    $(document).on( 'click', "input#idjadwal56",function(){
        $(this).datepicker({
            dateFormat:"dd-mm-yy",
            showOn:'focus',
            changeMonth:true,
            changeYear:true,
            defaultDate:'-40y+0d',
            yearRange: "-100:+0"
        }).focus();
        
    });
}); 
$(function(){
    $(document).on( 'click', "input#idjadwal67",function(){
        $(this).datepicker({
            dateFormat:"dd-mm-yy",
            showOn:'focus',
            changeMonth:true,
            changeYear:true,
            defaultDate:'-40y+0d',
            yearRange: "-100:+0"
        }).focus();
        
    });
}); 


// terlambat
// checked all terlambat
$(document).on("click","chkterlambat", function(e){
	$('#chkterlambat1').attr('checked', this.checked);
});
// button print terlambat
$(document).on("click","#printterlambat", function(e){
	var html='';
	var open=window.open('cetakterlambat');
	open.print();
});

// button cari izin
$(document).on("click","#btncariizin", function(e){
	$('#modalcariizin').modal('show');
	var tgl=$('#tglhadirdashizin').val(); 
	var bln=tgl.split("-"); 
	var bln1=bln[0]; 
	var thn=bln[1]; 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/formizinpeg', 
		data:{
			bln:bln1,thn:thn
		},beforeSend:function(jqXHR,setting){
			$('#modalcariizin').modal('show');
			$('#bodyizinpeg').html('loading...'); 
		},success:function(callback){
			$('#modalcariizin').modal('show');
			$('#bodyizinpeg').html(callback); 
			$('#example4').dataTable(); 
			$('.modal-title').html('View Data Izin Pegawai [Bulan '+bln1+' '+thn+']'); 			
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#bodyizinpeg').html('Request failed: '+textStatus); 
	}); 
});
// button cari sakit
$(document).on("click","#btncarisakit", function(e){
	$('#modalcarisakit').modal('show');
	var tgl=$('#tglhadirdashsakit').val(); 
	var bln=tgl.split("-"); 
	var bln1=bln[0]; 
	var thn=bln[1]; 
	var request=$.ajax({
		type:'POST',timeout:36000, async:false, 
		url:base_url+'index.php/c_admin/formsakitpeg', 
		data:{
			bln:bln1,thn:thn
		},beforeSend:function(jqXHR,setting){
			$('#modalcarisakit').modal('show');
			$('#bodysakitpeg').html('Loading...'); 
		},success:function(callback){
			$('#modalcarisakit').modal('show');
			$('#bodysakitpeg').html(callback); 
			$('#example5').dataTable(); 
			$('.modal-title').html('View Data Sakit Pegawai [Bulan '+bln1+' '+thn+']'); 		
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#bodysakitpeg').html('Request Failed: '+textStatus); 
	}); 
});
// button cari alpha
$(document).on("click","#btncarialpha", function(e){
		$('#modalcarialpha').modal('show');
		var tgl=$('#tglhadirdashalpha').val(); 
		var bln=tgl.split("-"); 
		var bln1=bln[0]; 
		var thn=bln[1]; 
		var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, url:base_url+'index.php/c_admin/getalphapeg', 
			data:{
				bln:bln1,thn:thn
			},beforeSend:function(jqXHR,setting){
				$('#modalcarialpha').modal('show');
				$('#bodyalphapeg').html('Loading...');
			},success:function(callback){
				$('#modalcarialpha').modal('show');
				$('#bodyalphapeg').html(callback);
				$('#example6').dataTable(); 
				$('.modal-title').html('View Data Alpha Pegawai [Bulan '+bln1+' '+thn+']');
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			$('#bodyalphapeg').html('Request failed: '+textStatus); 
		}); 
});
// click tombol mesin simpan baru
$(document).on("click","#buttonsimpanmesin", function(e){
	var namamesin=$('#nmmesin').val();
	var kom=$('#komunikasi').val();
	var ipadd=$('#ipadd').val();
	var passkom=$('#passkom').val();
	var nomesin=$('#nomesin').val();
	var noport=$('#noport').val();
	if(namamesin==""){
		dhtmlx.alert({
				type:'alert-error', title:'Konfirmasi..',
				text:'Nama Mesin harus anda isi'
		});
	}else if(kom==""){
		dhtmlx.alert({
				type:'alert-error',title:'Konfirmasi',
				text:'Jenis komunikasi harus anda isi'
		});
	}else if(ipadd==""){
		dhtmlx.alert({
			type:'alert-error',title:'Konfirmasi',
			text:'Ip Harus di isi'
		});
	}else if(passkom==""){
		dhtmlx.alert({
			type:'alert-error',title:'Konfirmasi',
			text:'Password Harus diisi'
		});
	}else if(nomesin==""){
		dhtmlx.alert({
		type:'alert-error',title:'Konfirmasi',
		text:'No Mesin Harus di Isi'
	});
}else if(noport==""){
	dhtmlx.alert({
	type:'alert-error',title:'Konfirmasi',
	text:'No Port Harus di Isi'
});

	}else{
	var request=$.ajax({
		async:false, timeout:360000,
		type:'POST',
		data:{
			machinealias:namamesin,connecttype:kom,ip:ipadd,  
			serialport:'1', port:noport,baudrate:'115200',machinenumber:nomesin, 
			ishost:'0',enabled:'0', commpassword:'',uilanguage:'-1',
			dateformat:'-1',inoutrecordwarn:'-1',idle:'-1',voice:'-1', 
			managercount:'-1', usercount:'-1', fingercount:'-1', 
			secretaccount:'-1', firmwareversion:'-1', producttype:'-1', 
			lockcontrol:'0', purpose:'0', producekind:'0',sn:'0', 
			photostamp:'0',isifconfigserver2:'0', pusher:'0',isAndroid:'0'
		}, url:base_url+'index.php/panel/simpan_mesin',
		beforeSend:function(jqXHR,setting){

		}, success:function(callback){
			var msg=callback[0];
			if(msg=='1'){
				dhtmlx.alert({
					type:'confirm-alert', title:'Sukses', text:'Berhasil disimpan'
				});
			}else if(msg=='0'){
				dhtmlx.alert({
						type:'alert-error', title:'Gagal', text:'Penyimpnan Gagal'
				});
			}
		}
	});
	request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
					type:'alert-error', title:'Error', text:'Error '+textStatus
			});
	});
}
});
// function simpan payroll setting
function simpanpaysett(){
	var uraian=$('#uraian').val();
	var nominalpay=$('#nominalpay').val();
	var selgol=$('#selgol').val(); // jenis golongan
	var kete=$('#kete').val();
	if(uraian==""){
		dhtmlx.alert({
				type:'alert-error', title:'Konfirmasi',
				text:'uraian harap anda isi'
		});
	}else{
	var request=$.ajax({
		type:'POST', timeout:360000,
		async:false,
		url:base_url+'index.php/panel/save_pays',
		data:{
			nominal:nominalpay,uraian:uraian,
			kdgol:selgol, ket:kete
		}, beforeSend:function(jqXHR,setting){

		}, success:function(callback){
				var msg=callback[0];
				if(msg=="1"){
					dhtmlx.alert({
							type:'confirm-alert', title:'Sukes',
							text:'Berhasil disimpan'
					});
				}else if(msg=="0"){
					dhtmlx.alert({
							type:'alert-error', title:'Gagal',
							text:'penyimpanan Gagal'
					});
				}
		}
	});
	request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				type:'alert-error', title:'Error', text:'request failed: '+textStatus
			});
	});
}
}
// function simpan golongan baru master
function simpangolongan(){
	var namagol=$('#golbaru').val();
	var stts=$('#selgolbaru').val();
	var skor=$('#skorbaru').val(); // skor baru 
	if(namagol==""){
		dhtmlx.alert({
				type:'alert-error', title:'Konfirmasi',
				text:'Golongan harap anda isi'
		});
			$('#golbaru').focus();
	}else if(stts==""){
	dhtmlx.alert({
			type:'alert-error', title:'Konfirmasi',
			text:'Status harap anda isi'
	});
}else if(skor==''){
	dhtmlx.alert({
		type:'confirm-alert', text:'Skor harap anda isi', 
		title:'Konfirmasi'
	}); 
	skor.focus(); 
}else{
	var request=$.ajax({
			type:'POST', timeout:360000,
			async:false,
			url:base_url+'index.php/panel/save_gol',
			data:{
				golongan:namagol, status:stts,skor:skor
			}, beforeSend:function(jqXHR,setting){

			}, success:function(callback){
				var msg=callback[0];
				if(msg=='1'){
					dhtmlx.alert({
							type:'confirm-alert', title:'Sukses',
							text:'Berhasil disimpan'
					});
				}else if (msg=='0'){
					dhtmlx.alert({
							type:'confirm-alert', title:'Gagal',
							text:'Penyimpnan Gagal'
					});
				}
			}
	});
	request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
					type:'alert-error', title:'Error',
					text:'request failed :'+textStatus
			});
	});
}
}

// function update master golongan
$(document).on("click","#btneditgolongan", function(e){
	var kd=$(this).val();
	var request=$.ajax({
		type:'POST', timeout:360000,
		async:false,
		data:{

		}, url:base_url+'index.php/panel/formgolbaru',
		beforeSend:function(jqXHR,setting){

		}, success:function(callback){
		}
	});
	request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
					title:'Error', type:'alert-error',
					text:'request failed: '+textStatus
			});
	});
});
// function simpan uraian baru
function simpanuraian(){
	var nama=$('#uraibaru').val();
	var stts=$('#seluraibaru').val();
	if(nama==""){
		dhtmlx.alert({
				type:'confirm-alert', title:'Konfirmasi',
				text:'Nama Uraian harap anda isi'
		});
		$('#uraibaru').focus();
	}else{
		var request=$.ajax({
			type:'POST', timeout:360000,
			async:false,
			url:base_url+'index.php/panel/save_uraian',
			data:{
			nama:nama,stts:stts
		},
		beforeSend:function(jqXHR,setting){

		}, success:function(callback){
			var msg=callback[0];
			if(msg=='1'){
				dhtmlx.alert({
						type:'confirm-alert', title:'Sukses', text:'Berhasil disimpan'
				});
			}else if(msg=='0'){
				dhtmlx.alert({
						type:'alert-error', title:'Gagal',
						text:'Gagal disimpan'
				});
			}
		}
		});
		request.fail(function(jqXHR,textStatus){
				dhtmlx.alert({
						type:'alert-error', text:'request failed :'+textStatus,
						title:'Error'
				});
		});
	}
}

// click button proses report detail harian
$(document).on("click","#prosesreportdetharian", function(e){
	var request=$.ajax({
		type:'POST', timeout:360000,
		async:false,
		url:base_url+'index.php/report/formdetailharian',
		data:{

		}, beforeSend:function(jqXHR,setting){

		}, success:function(callback){
			$('#contentrep').html(callback);
			$("#example4").dataTable();
		}
	});
	request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
					type:'alert-error', title:'Error',
					text:'Request failed: '+textStatus
			});
	});
});
// button cetak payroll
$(document).on("click","#cetakpayroll", function(e){
	//$('#modalcetakpayrol').modal('show'); 
	var dept=$('#dptpresensi').val(); // department 
	var bulan=$('#bulan').val(); //
	var thn=$('#thnpayroll').val(); 
	if(dept==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Pilih department dahulu', 
			type:'confirm-alert'
		}); 
	}else if(bulan==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Pilih Bulan dengan benar', 
			type:'confirm-alert'
		}); 
	}else if(thn==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Pilih Tahun dengan benar'
		}); 
	}else{

	var win=window.open(base_url+'index.php/report/repgajipeg/'+dept+'/'+bulan+'/'+thn); 
	win.focus(); 
	win.print(); 
	}
});
// proses penyimpanan 
function simpanizin(){
	var tgl1=$('#tgldinasform').val(); 
	var tgl2=$('#tgldinasform2').val(); 
	var tipeizin=$('#tipeizin').val(); 
	var depart=$('#depart').val(); 
	var user=$('#namapegdepart').val(); 	
	var yuan=$('#alasankarya').val(); // alasan 

	if(tipeizin==""){
		dhtmlx.alert({
			title:'Konfirmasi', type:'confirm-alert', 
			text:'izin harap anda isi'
		})
	}else if(depart==''){
		dhtmlx.alert({
			title:'Konfirmasi', type:'confirm-alert', 
			text:'Department tentukan'
		}); 
	} else if(user==""){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Harap Nama Pegawai yg melakukan izin/cuti anda isi', 
			type:'confirm-alert'
		}); 
	}else if(tgl1==tgl2){
		dhtmlx.alert({
			title:'Konfirmasi', type:'confirm-alert', 
			text:'Tanggal Sama Tidak Boleh Sama'
		}); 
	}else{
		var request=$.ajax({
			type:'POST', timeout:360000, 
			async:false, 
			url:base_url+'index.php/panel/save_izin', 
			data:{
				userid:user, startspecday:tgl1, especday:tgl2, 
				idate:tipeizin,yuan:yuan
			}, beforeSend:function(jqXHR,setting){

			}, success:function(callback){
				var msg=callback[0]; 
				if(msg=='3'){
					dhtmlx.alert({
						title:'Konfirmasi', text:'Pegawai Sudah Melakukan izin/cuti/sakit pada  tgl yg sama', 
						type:'confirm-alert'
					}); 
				}else if(msg=='1'){
					dhtmlx.alert({
						type:'confirm-alert', title:'Sukses', 
						text:'Berhasil disimpan'
					})
				}else if(msg=="0"){
					dhtmlx.alert({
						type:'confirm-alert', title:'Gagal', 
						text:'Penyimpanan Gagal'
					}); 
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				title:'Error', type:'alert-error', 
				text:'Request failed: '+textStatus
			}); 
		}); 
	}

}
// click row table department 
   $('#example5 tbody').on('click', 'tr', function () { 
        var a=$(this).text(); 
        var b=a.split(""); 
        var c=b[0]; 
		var d=b[1]; 
		var e=c+d; 
        var tgl1=$('#tgl1jdwal').val(); 
        var tgl2=$('#tgl2jdwal').val(); 
        $('#kdunit').val(e); 
        var request=$.ajax({
        	type:'POST',timeout:360000, 
        	async:true, 
        	url:base_url+'index.php/c_admin/getjdwalshift', 
        	data:{
        		kdunit:e,tgl1:tgl1,tgl2:tgl2
        	}, beforeSend:function(jqXHR,setting){
        		$('#tbodyjdwal').html('Loading...'); 
        	},success:function(callback){
        		//refrtable(); 
        		$('#tbodyjdwal').html(callback); 
        		refjadwaldetail(); 
        		$('#example4').dataTable();

        	}
        }); 
        request.fail(function(jqXHR,textStatus){
        	dhtmlx.alert({
        		title:'Error', text:'Request failed: '+textStatus
        	}); 
        })
    });
   // refresh form jadwal detail 
   function refjadwaldetail(){
   	$('#tbjdwalkerja').html('Loading...');
   	var request=$.ajax({
   		type:'POST',timeout:360000, 
   		async:false, 
   		url:base_url+'index.php/c_admin/getjadwalpeg2', 
   		data:{
   			//iduser:'',kdunit:'',tgl1:'2016-01-01',tgl2:'2016-12-31'
   		},beforeSend:function(jqXHR,setting){
   			$('#tbjdwalkerja').html('Loading...');
   		},success:function(callback){	
   			$('#tbjdwalkerja').html(callback);
   			$('#example7').dataTable(); 
   		}
   	});
   	request.fail(function(jqXHR,textStatus){
   		$('#tbjdwalkerja').html('Error :'+textStatus);
   	}); 
   }


   // click table jadwal pegawai 
   $(document).on("click","#example4 tbody tr#trjdwalpeg",function(){
   		$('#tbjdwalkerja').html('Loading...'); 
   	    var table=$('#example4').dataTable(); 
    	var position = table.fnGetPosition(this); 
    	var id = table.fnGetData(position)[2];
    	var id2 = table.fnGetData(position)[4];
    	var val=$('.chkpegjdwal1').val(); 
    	var tgl1=$('#tgl1jdwal').val(); 
    	var tgl2=$('#tgl2jdwal').val(); 
    	$('#jdkduser').val(id); 
    	//var id3=split.id2("-"); 
    	//var id4=id3[0]; 
    	//alert(id4);  
    	//var id3=$('#idjadwal').val(id2); 
    	var request1=$.ajax({
    		type:'POST',timeout:360000, async:false, 
    		url:base_url+'index.php/c_admin/cekjadwal', 
    		data:{
    			iduser:id,tgl1:tgl1
    		},beforeSend:function(jqXHR,setting){
    			$('#tbjdwalkerja').html('Loading...'); 
    		},success:function(callback){
    			var msg=callback[0]; 
    			if(msg=='0'){
    				var request=$.ajax({
    					type:'POST',timeout:360000, 
    					async:false, url:base_url+'index.php/c_admin/getarraytempshcedule', 
    					data:{
    						userid:id,tgl1:tgl1
    					},beforeSend:function(jqXHR,setting){
    						$('#tbjdwalkerja').html('Loading...');
    					},success:function(callback){
    						$('#tbjdwalkerja').html(callback); 
    						$('#example7').dataTable();
    					}
    				});
    				request.fail(function(jqXHR,textStatus){
    				$('#tbjdwalkerja').html('Belum Ada Jadwal'); 			
    				});  
    			}else if(msg=='1'){
    				var request=$.ajax({
    		type:'POST',timeout:360000, 
    		async:false, url:base_url+'index.php/c_admin/getjadwalpeg', 
    		data:{
    			iduser:id,idjadwal:id2,tgl1:tgl1,tgl2:tgl2
    		},beforeSend:function(jqXHR,setting){
    			$('#tbjdwalkerja').html('Loading...'); 
    		},success:function(callback){
    			$('#tbjdwalkerja').html(callback); 
    			$('#example7').dataTable(); 
    		}
    	}); 
    	request.fail(function(jqXHR,textStatus){
    		$('#tbjdwalkerja').html('Belum Ada Jadwal'); 	
    	});
    			}
    		}
    	}); 
    	request1.fail(function(jqXHR,textStatus){
    		$('#tbjdwalkerja').html('Belum Ada Jadwal'); 
    	}); 

    	/** **/  

   })

   function refrtable(){
   $('#example7').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": false,
    "scrollX":true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": false,
    "scrollX":true
		});
   }
/**$(document).on("click","#example3", function(){
	alert('ok'); 
}); **/ 

// checkbox all cuti 

// form update izin/ cuti 
$(document).on("click","#buteditizin", function(e){
	var id=$(this).val(); 
	$.ajax({
		type:'POST', timeout:360000, 
		async:false, 
		url:base_url+'index.php/panel/updatecuti', 
		data:{
			id:id
		}, 
		beforeSend:function(callback){

		}, success:function(callback){
			$('.content').html(callback); 
		}
	}); 
}); 

// proses update cuti 
function updatecuti(){
	var iduser=$('#kodeupduser').val(); 
	var tgl1=$('#tgldinasform').val(); 
	var tgl11=$('#tgl11').val(); 
	var tgl2=$('#tgldinasform2').val(); 
	var tipeizin=$('#tipeizin').val(); 
	var iddep=$('#departupd').val(); 
	var idusernm=$('#namapegdepart').val();
	var alasan=$('#alasankarya').val(); // alasan	
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/updizin', 
		data:{
			userid:iduser,userupd:idusernm, 
			tgl1:tgl1,tgl11:tgl11,tgl2:tgl2,
			izin:tipeizin,alasan:alasan
		},beforeSend:function(jqXHR,setting){
		
		},success:function(callback){
			var msg=callback[0]; 
			if(msg=='1'){
				dhtmlx.alert({
					type:'confirm-alert', title:'Sukses', 
					text:'Berhasil disimpan'
				});  
			}else{
				dhtmlx.alert({
					type:'confirm-alert', title:'Gagal', 
					text:'Penghapusan Gagal'
				}); 
			}
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			type:'alert-error', title:'Error', 
			text:'Request failed: '+textStatus
		}); 
	}); 
}

// function onchange department edit izin 
function changedepart12(){
	var iddept=$('#departupd').val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/changedepartizin', 
		data:{
			id:iddept
		}, beforeSend:function(jqXHR,setting){
			$('#namapegdepart').html('<option value="">--Loading--</option>'); 
		},success:function(callback){
			$('#namapegdepart').html(callback); 
		}
	}); 
}

// button edit jam kerja 
$(document).on("click","#butjamkerjaedit", function(e){
	var idclass=$(this).val(); 
	$.ajax({
		type:'POST', timeout:360000, 
		async:false, 
		url:base_url+'index.php/panel/updjamkerja', 
		data:{

		}, beforeSend:function(callback){

		}, success:function(callback){
			$('.content').html(callback); 
			//alert(idclass); 
		}
	}); 
}); 
// function update jam kerja 
function updjamkerja(){
	var id=$('#idupdjamkerja').val(); 
	var nmjamkerjaupd=$('#nmjamkerjaupd').val(); 
	if(id==""){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Harap ID yang akan anda update di tentukan', 
			type:'alert-error'
		}); 
	}else if(nmjamkerjaupd==""){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Harap Nama Jam kerja anda isi', 
			type:'alert-error'
		}); 
	}else{
		var request=$.ajax({

		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				type:'alert-error', title:'Error', 
				text:'Error Status: '+textStatus
			}); 
		}); 
	}
}
$(document).on("click","#tbhpendbaru", function(){
$('#contentpend').html('Loading.....');
                var request=$.ajax({
                  type:'POST', timeout:360000, 
                  async:false, data:{

                  },url:base_url+'index.php/panel/addpend', 
                  beforeSend:function(jqXHR,setting){
                    $('#contentpend').html('Loading.....');
                  },success:function(callback){
                    var msg=callback[0]; 
                    $('#contentpend').html(callback); 
                  }
                });   
}); 

// function button penyimpanan pendidikan 
function simpanpend(){
	var namapendi=$('#namapendidikan').val(); // pendidikan 
	var skor=$('#skorpend').val(); // skor pendidikan 
	if(namapendi==""){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'pendidikan Harus anda isi'
		}); 
		namapendi.focus(); 
	}else if(skor==''){
		dhtmlx.alert({
			type:'confirm-alert', text:'Skor harus anda isi', 
			title:'Konfirmasi'
		}); 
		skor.focus(); 
	}else{
	var request=$.ajax({
		type:'POST', timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/simpanpendidikan', 
		data:{
			pend:namapendi,skor:skor
		}, 
		beforeSend:function(jqXHR,setting){

		}, success:function(callback){
			var msg=callback[0]; 
			if(msg=="1"){
				dhtmlx.alert({
					title:'Sukses', text:'Berhasil melakukan penyimpanan'
				}); 
				namapendi.val(''); 
			}else if(msg=="0"){
				dhtmlx.alert({
					title:'Gagal', text:'Gagal Melakukan penyimpanan', 
					type:'confirm-alert'
				}); 
			}
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			type:'alert-error', title:'Error', 
			text:'Error'+textStatus
		}); 
	}); 
}
}
// button edit pendidikan 
$(document).on("click","#btneditpend", function(){
	var id=$(this).val(); 
	var id1=id.split("|"); 
	var id2=id1[0]; 
	var nm=id1[1]; 
	var skor=id[2]; // skor 
	var request=$.ajax({
		type:'POST', timeout:360000, 
		async:false, 
		data:{
			kd:id2,nm:nm,skor:skor
		}, url:base_url+'index.php/panel/fomrupdpend', 
		beforeSend:function(jqXHR,setting){
			$('#contentpend').html('Loading.....');
		}, success:function(callback){
			$('#contentpend').html(callback);
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			title:'Error', text:'Request failed :'+textStatus, 
			type:'alert-error'
		}); 
	}); 
})

// function proses update pendidikan 
function upsimpend(){
	var nm=$('#namapendupd').val(); 
	var  id=$('#idpendupd').val(); 
	var skor=$('#skopupdpend').val(); // skor pendidikan 
	if(nm==""){
		dhtmlx.alert({
			title:'Konfirmasi', 
			type:'confirm-alert', title:'pendidikan harus anda isi'
		}); 
		nm.focus(); 
	}else{
		var request=$.ajax({
			type:'POST', timeout:360000, 
			async:false,
			url:base_url+'index.php/panel/updpendidikan',  
			data:{
				id:id,nm:nm,skor:skor
			}, beforeSend:function(jqXHR,setting){

			}, success:function(callback){
				var msg=callback[0]; 
				if(msg=="1"){
					dhtmlx.alert({
						type:'confirm-alert', title:'Sukses', 
						text:'Berhasil melakukan update'
					}); 
				}else if(msg=="0"){
					dhtmlx.alert({
						title:'Gagal', type:'confirm-alert', 
						text:'Gagal Melakukan update'
					}); 
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				title:'Error', text:'Request fail: '+textStatus, 
				type:'alert-error'
			}); 
		}); 
	}
}

	/** **/ 
// button add departments 
$(document).on("click","#butadddepart", function(e){
	//$('.content').html('Loading....'); 
	var arr=[]; 
	var id=[]; 
	$('#chkdept:checked').each(function(){
		arr.push($(this).attr('chkdept')); 
	}); 
	if(arr.length>1){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Checklist tidak boleh lebih dari satu', 
			type:'confirm-alert'
		}); 
	}else{
		$('#chkdept:checked').each(function(){
		id.push($(this).val()); 
	});
	var request=$.ajax({
		type:'POST', timeout:360000, 
		async:false, 
		url:base_url+'index.php/panel/formdepartments', 
		data:{
			id:id
		}, beforeSend:function(jqXHR,setting){
			$('.content').html('Loading....'); 
		}, success:function(callback){
			$('.content').html(callback); 
		}
	});


	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			type:'alert-error', title:'Error', 
			text:'Request failed: '+textStatus
		}); 
	});
	} 
}); 
// function simpan departments 
function simpandepart(){
	var nama=$('#namadepart').val(); 
	var sup=$('#idatasdept').val(); 
	if(nama==""){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Department Harus anda isi', 
			type:'confirm-alert'
		}); 
		nama.focus(); 
	}else{
		var request=$.ajax({
			type:'POST', timeout:360000, 
			async:false, 
			url:base_url+'index.php/panel/simpandepart', 
			data:{
				nama:nama,sup:sup
			}, beforeSend:function(jqXHR,setting){

			}, success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					dhtmlx.alert({
						title:'Sukses', text:'Berhasil melakukan penyimpanan', 
						type:'confirm-alert'
					}); 
				}else if(msg=='0'){
					dhtmlx.alert({
						title:'Gagal', text:'Gagal melakukan penyimpanan', 
						type:'confirm-alert'
					}); 
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				title:'request failed: '+textStatus, 
				title:'Error', type:'alert-error'
			}); 
		}); 
	}

}
// button edit uraian 
$(document).on("click","#btnediturai", function(e){
	var id=$(this).val(); 
	var id2=id.split("|"); 
	var kduraian=id2[0]; 
	var nama=id2[1]; 
	var stts=id2[2]; 
	$('.content').html('Loading....'); 
	var request=$.ajax({
		type:'POST', timeout:360000, 
		async:false, 
		data:{
			kd:kduraian, nama:nama, 
			stts:stts
		},
		url:base_url+'index.php/panel/formupduraian', 
		beforeSend:function(jqXHR,setting){
			$('.content').html('Loading....'); 
		},success:function(callback){
			$('.content').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('.content').html('Error'); 
	}); 
}); 
/**$(document).on("click","#chkout12",function(){
	if ($('input.chkout12').is(':checked')) {
		alert('OK'); 
	}else{
		alert('siap un'); 
	}
});  **/ 
// proses penyimpanan jam kerja 
function simpankerjabaru(){
	var kd=$('#kdedit').val(); 
	var name=$('#nmjamkerja').val(); 
	var timein=$('#jammasukkerja12').val(); 
	var jmpulang=$('#jamplgkerja1').val(); 
	var tolterlambat=$('#tolterlambat').val(); 
	var tolplgcpt=$('#tolplgcpt').val(); 
	var jammulaimsk=$('#jammulaimsk').val(); 
	var jammulaiakhir=$('#jammulaiakhir').val(); 
	var jammulaiscan=$('#jammulaiscan').val(); 
	var jammulaiakhirmsk=$('#jammulaiakhirmsk').val(); 
	var jamakhirscan=$('#jamakhirscan').val(); 
	//var chkin=$('#chkin').val(); 
	if($('input.chkin').is(':checked')){
	var chkin1='1'; 
	}else{
		var chkin1='0'; 
	}
	if($('input.chkout12').is(':checked')){
	var chkout1='1';  //$('#chkout12').val();
	}else{
		var chkout1='0';
	}
	
	if(name==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Nama kerja harus anda isi'
		}); 
	}else{
		var request=$.ajax({
			type:'POST', timeout:360000, 
			async:false, 
			url:base_url+'index.php/panel/simpankerjabaru', 
			data:{
				name:name, stime:timein, entime:jmpulang,
				lateminute:tolterlambat,early:tolplgcpt,
				checkin:jammulaimsk,checkout:jammulaiakhir,
				checkintime1:jammulaiscan,checkintime2:jammulaiakhirmsk, 
				checkouttime1:jammulaiscan,checkouttime2:jamakhirscan,workday:chkin1,
				workmins:chkout1, 
				kd:kd
			}, beforeSend:function(jqXHR,setting){

			},success:function(callback){
				var msg=callback[0]; 
				if(msg=="1"){
					dhtmlx.alert({
						type:'confirm-alert', title:'Sukses', 
						text:'Berhasil disimpan'
					}); 
					tbrefjamkerja(); 
					kosongkanform(); 
				}else if(msg=='0'){
					dhtmlx.alert({
						type:'confirm-alert', title:'Gagal', 
						text:'gagal melakukan penyimpanan'
					}); 
				} else if(msg=="3"){
					dhtmlx.alert({
						title:'Sukses Melakukan update', 
						text:'Update Berhasil dilakukan', type:'confirm-alert'
					}); 
				}else if(msg=="4"){
					dhtmlx.alert({
						title:'Gagal', type:'confirm-alert', 
						text:'Gagal Melakukan update'
					}); 
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				type:'alert-error', title:'Error', 
				text:'Error request: '+textStatus
			}); 
		}); 
	}
}

// function refresh 
function tbrefjamkerja(){
	$('#bodytemp').html('Loading.......'); 
	var request=$.ajax({
		type:'POST', timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/jamkerja1',
		beforeSend:function(jqXHR,setting){
			$('#bodytemp').html('Loading.......'); 	
		} , success:function(callback){
				$('#bodytemp').html(callback); 
		}

	}); 
	request.fail(function(jqXHR,textStatus){
		$('#bodytemp').html('Erorr :'+textStatus); 
	}); 
}

// function kosongkan form 
function kosongkanform(){
	$('#nmjamkerja').val('');
	$('#jammasukkerja12').val(''); 
	$('#jamplgkerja1').val('');  
	$('#tolterlambat').val(''); 
	$('#tolplgcpt').val(''); 
	$('#jammulaimsk').val(''); 
	$('#jammulaiakhirmsk').val(''); 
	$('#jammulaiscan').val(''); 
	$('#jamakhirscan').val(''); 
}
// button edit jam kerja 
$(document).on('click','#butjamkerjaedit1', function(){
	var a=$(this).val(); 
	var id=a.split("|"); 
	var kd=id[0]; 
	var name=id[1]; 
	var jammasuk=id[2]; 
	var jampulang=id[3]; 
	var lat=id[4]; 
	var plgc=id[5];
	var mcin=id[6]; 
	var akcin=id[7];
	var mcout=id[8];  
	var akcout=id[9]; 
	var chkin=id[10]; 
	var chkout=id[11]; 
	$('#kdedit').val(kd); 
	$('#nmjamkerja').val(name); 
	$('#jammasukkerja12').val(jammasuk); 
	$('#jamplgkerja1').val(jampulang); 
	$('#tolterlambat').val(lat); 
	$('#tolplgcpt').val(plgc); 
	$('#jammulaimsk').val(mcin); 
	$('#jammulaiscan').val(mcout); 
	$('#jammulaiakhirmsk').val(akcin); 
	$('#jamakhirscan').val(akcout); 
	if(chkin=='1'){
	$('#chkin').prop('checked',true); 
	}else{
		$('#chkin').prop('checked',false); 
	}
	if(chkout=='1'){
	$('#chkout').prop('checked',true); 
	}else{
		$('#chkout').prop('checked',false); 
	}
	$('#chkout').val(chkout); 
	$('#btncancel').removeAttr("style");
	$('#editbtnkerja').val('Update');  
}); 
// button cancel jam kerja 
$(document).on("click","#btncancel", function(){
	$(this).css("display","none"); 
	$('#editbtnkerja').val('Tambah'); 
	$('#kdedit').val(''); 
	kosongkanform(); 
	$('#nmjamkerja').focus(); 
}); 

// button update  jam kerja 

// button add periode shift kerja 
$(document).on("click","#btntbhperiodejamkerja", function(e){
	var id=[]; 
	var nid=$('.chkshift:checked').val(); 
	$('.chkshift:checked').each(function(){
		id.push($(this).attr('chkshift')); 
	}); 
	if(id.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', text:'Pilih Shift yg akan ditambahkan', 
			title:'Konfirmasi'
		}); 
	}else if(id.length>1){
		dhtmlx.alert({
			type:'confirm-alert', text:'Check Shift hanya satu saja', 
			title:'Konfirmasi'
		}); 
	}else{
	var request=$.ajax({
		type:'POST', timeout:360000, 
		async:false, 
		data:{
			kd:nid
		}, url:base_url+'index.php/c_admin/getarrayshift', 
		beforeSend:function(callback){

		}, success:function(callback){
			var nid2=nid.split("|"); 
			var nid3=nid2[0]; 
			$('#tglshift').val(nid3); 
			var msg=callback[0]; 
			$('#modalplusshift').modal('show'); 
			$('#tbjamkerjagrid').html(callback); 
		}
	}); 	
}
}); 
// check all shift 
$(document).on("click","#chkshiftall", function(e){
	$('#chkshift').attr('checked',this.checked); 
}); 

// button tambah shift baru / shift kerja baru 
$(document).on("click","#tbhshiftbaru",function(){
	$('#modaltbhdftshift').modal('show'); 
}); 
//  hapus shift 
$(document).on("click","#hapusshift",function(e){
	var id=[]; 
	var kd=[]; 
	var valu_check=""; 
	$('.chkshift:checked').each(function(){
		id.push($(this).attr('chkshift')); 
	}); 
	if(id.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Check list data yg akan dihapus'
		}); 
	}else{
		dhtmlx.message({
			type:'confirm', 
			text:'Hapus data terchecklist', 
			callback:function(result){
				if(result){
					$('.chkshift:checked').each(function(){
						kd.push($(this).val()); 
					}); 
					var request=$.ajax({
						type:'POST', timeout:360000, 
						async:false, 
						data:{
							kd:kd
						}, url:base_url+'index.php/c_admin/hpsshift', 
						beforeSend:function(callback){
							$('#tbodybrshift').html('Loading...'); 
						},success:function(callback){
							var msg=callback[0]; 
							if(msg=='2'){
								dhtmlx.alert({
									title:'Konfirmasi', text:'Tidak dapat dihapus <br /> masih ada pegawai yang menggunakan <br /> Jadwal Berikut', 
									type:'confirm-alert'
								}); 
							}else if(msg=='1'){
								dhtmlx.alert({
									title:'Sukses', type:'confirm-alert', 
									text:'Berhasil dihapus'
								}); 
								loadgridshift();
							}else if(msg=='0'){
								dhtmlx.alert({
									title:'Gagal', text:'Penghapusan Gagal', 
									type:'alert-error'
								}); 
							}	 
						}
					}); 
					request.fail(function(jqXHR,textStatus){
						dhtmlx.alert({
							type:'alert-error', title:'Error', 
							text:'Request failed: '+textStatus
						}); 
					}); 
				}
			}
		}); 
	}
}); 


// button edit shift 
function editbtnshift(){
	var kode=kd.val(); 
}

$(document).on("click","#editbutshift21",function(){
	var kd=$(this).val(); 
	var kd1=kd.split("|"); 
	var kd2=kd1[0]; 
	var nm=kd1[1]; 
	var units=kd1[2]; 
	$('#nmshiftupd').val(nm); 
	$('#kode1').val(kd2); 
	$('#selunitperedit').val(units); 
	$('#modaltbhuptshift').modal('show');  
}); 

// check all periode shift 
$(document).on("click","#chkjamkerjaall",function(e){
	$('.chkjamkerja12').attr('checked', this.checked); 
}); 
// on click shift 
$(document).on("click","#example7 tbody tr td#idshift",function(){
	var table=$('#example1').dataTable(); 
	var data=Array(); 
    var texto= $(this).text();  
    var kdjam=texto.split("|"); 
    var kdjam1=kdjam[0]; 
    var units=kdjam[1]; 
    var unitarr=Array();
    var unitarr1='';  
    $('.kdjamdel12').val(kdjam1); 
    $('#kdunitdel').val(units); 
    //var i=''; 
	//alert(texto); 
	$('#tbodyshift').html('Loading....'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/getarrayjaga', 
		data:{
			kd:kdjam1,units:units
		},beforeSend:function(jqXHR,setting){
			$('#tbodyshift').html('Loading....');
		},success:function(callback){
			$('#tbodyshift').html(callback);
		}
	}); 	
	request.fail(function(jqXHR,textStatus){
		$('#tbodyshift').html('Belum ada jadwal'); 
	}); 
}); 

// checkall shift jaga pegawai 
$(document).on("click",".chkshiftall1",function(){
	$('.chkshiftjd').attr('checked',this.checked); 
}); 
// checkall  hasil jadwal 
$(document).on("click",".jdwalkerjapegall",function(){
	$('.jdwalkerjapeg').attr('checked',this.checked); 
}); 


// hapus periode kerja 
$(document).on("click","#btnhpsperiode",function(e){
	var id=[]; 
	var kd=[]; 
	$('.chkshiftjd:checked').each(function(){
		id.push($(this).attr('chkshiftjd')); 
	}); 
	if(id.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', text:'Checklist data yg akan dihapus', 
			title:'Konfirmasi'
		}); 
	}else{
		dhtmlx.message({
			type:'confirm', text:'Hapus data terchecklist ?', 
			callback:function(result){
				if(result){
					$('.chkshiftjd:checked').each(function(){
						kd.push($(this).val()); 
					});  
					var request=$.ajax({
						type:'POST', timeout:360000, 
						async:false, 
						url:base_url+'index.php/c_admin/hpsjamkerja', 
						data:{
							id:kd
						}, 
						beforeSend:function(jqXHR,setting){
							
						},success:function(callback){
							var msg=callback[0]; 
							if(msg=='1'){
								dhtmlx.alert({
									type:'confirm-alert', text:'Berhasil dihapus', 
									title:'Konfirmasi'
								}); 
								refjdwalshift(); 
							}else if(msg=='0'){
								dhtmlx.alert({
									type:'confirm-alert', text:'Penghapusan Gagal', 
									title:'Gagal'
								}); 
							}
						}
					});
					request.fail(function(jqXHR,textStatus){
						$('#tbodyshift').html('Request failed: '+textStatus); 
					}); 

				}
			}
		}); 
	}

}); 
// check all jam kerja 
$(document).on("click","#chkjamkerjaall",function(){
	$('.chkjamkerja').attr('checked',this.checked); 
}); 
// hapus jam kerja 

$(document).on("click","#hpsjamkerja",function(){
	var id=[]; 
	var kd=[]; 
	$('.chkjamkerja:checked').each(function(){
		id.push($(this).attr('chkjamkerja')); 
	}); 
	if(id.length<=0){
		dhtmlx.alert({
			title:'Konfirmasi',text:'Checklist Data yg akan dihapus', 
			type:'confirm-alert'
		}); 
	}else{
		dhtmlx.message({
			type:'confirm', 
			title:'', 
			text:'Hapus Data terchecklist ?', 
			callback:function(result){
			if(result){
				$('.chkjamkerja:checked').each(function(){
					kd.push($(this).val()); 
				}); 
			var request1=$.ajax({
				type:'post',timeout:360000, 
				async:false, 
				url:base_url+'index.php/c_admin/cekjamkerja', 
				data:{
					schclass:kd
				},beforeSend:function(jqXHR,setting){

				},success:function(callback){
					var msg1=callback[0]; 
					if(msg1=='1'){
						dhtmlx.alert({
							type:'confirm-alert', text:'Data sudah Terpakai, tidak dapat dihapus', 
							title:'Konfirmasi'
						}); 
					}else{
						var request=$.ajax({
						type:'POST',timeout:360000, 
						async:false, 
						url:base_url+'index.php/c_admin/hapusjamkerja', 
						data:{
							kd:kd
						},beforeSend:function(jqXHR,setting){

						},success:function(callback){
							var msg=callback[0]; 
					if(msg=='1'){
						dhtmlx.alert({
							type:'confirm-alert', title:'Sukses', 
							text:'Berhasil Melakukan Penghapusan'
						}); 
						refjamkerja(); 
					}else if(msg=='0'){
						dhtmlx.alert({
							type:'confirm-alert',title:'Gagal', 
							text:'Gagal Melakukan Penghapusan'
						}); 
					}
				}
			}); 
					}
				}
			}); 	
			}
		}
		})
	}
}); 
// refresh table jadwal shift 
function refjdwalshift(){
	$('#tbodyshift').html('Loading....');
	var kdjam1=$('#kdjamdel12').val(); 
	var units=$('#kdunitdel').val();
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/getarrayjaga', 
		data:{
			kd:kdjam1,units:units
		},beforeSend:function(jqXHR,setting){
			$('#tbodyshift').html('Loading....');
		},success:function(callback){
			$('#tbodyshift').html(callback);
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tbodyshift').html('Schedule Time Kosong'); 
	}); 
}

//function refresh jam kerja 
function refjamkerja(){
	$('#bodytemp').html('Loading...');
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/jamkerjaref', 
		beforeSend:function(jqXHR,setting){
			$('#bodytemp').html('Loading...');
		},success:function(callback){
			$('#bodytemp').html(callback);
		}
	}) ; 	
	request.fail(function(jqXHR,textStatus){
		$('#bodytemp').html('Error :'+textStatus);
	});
}

// button refresh jam kerja 
$(document).on("click","#burefjamkerja",function(){
	$('#bodytemp').html('Loading...');
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/jamkerjaref', 
		beforeSend:function(jqXHR,setting){
			$('#bodytemp').html('Loading...');
		},success:function(callback){
			$('#bodytemp').html(callback);
		}
	}) ; 	
	request.fail(function(jqXHR,textStatus){
		$('#bodytemp').html('Error :'+textStatus);
	}); 
}); 

//check all checkbox departments 
$(document).on("click","#chkdeptll",function(e){
	$('.chkdept').attr('checked',this.checked); 
}); 

// hapus departments 
$(document).on("click","#hpsdepart",function(){
	var id=[]; 
	var kd=[]; 

	$('.chkdept:checked').each(function(){
		id.push($(this).attr('chkdept')); 
	}); 
	if(id.length<=0){
		dhtmlx.alert({
			type:'confirm-alert',title:'Konfirmasi', 
			text:'Checklist data yg akan dihapus'
		}); 
	}else{
		$('.chkdept:checked').each(function(){
			kd.push($(this).val()); 
		}); 
		dhtmlx.message({
			type:'confirm',title:'Konfirmasi', 
			text:'Hapus Unit terchecklist ?', 
			callback:function(result){
				if(result){
					var request=$.ajax({
						type:'POST',timeout:360000, 
						async:false, 
						url:base_url+'index.php/c_admin/hpsdepartments', 
						data:{
							kd:kd
						}, 
						beforeSend:function(jqXHR,setting){

						},success:function(callback){
							var msg=callback[0]; 
							if(msg=='1'){
								dhtmlx.alert({
									title:'Sukses',text:'Berhasil dihapus', 
									type:'confirm-alert'
								}); 
							}else if(msg=='0'){
								dhtmlx.alert({
									title:'Gagal',text:'Gagal Melakukan Penghapusan', 
									type:'confirm-alert'
								}); 
							}
						}
					}); 
					request.fail(function(jqXHR,textStatus){
						dhtmlx.alert({
							title:'Error',text:'Request failed: '+textStatus 
						}); 
					}); 
				}
			}
		}); 
	}
}); 

// button edit department 

$(document).on("click","#buteditdepart",function(e){
	var a=$(this).val(); 
	var b=a.split("|"); 
	var kd=b[0]; 
	var dep=b[1]; 
	var html=''; 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/formeditdept', 
		data:{
			kd:kd
		},beforeSend:function(jqXHR,setting){
			$('#bdyeditdepart').html('Loading...'); 
		},success:function(callback){
			$('#modaleditdepart').modal('show');
			$('#bdyeditdepart').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#bdyeditdepart').html('Request failed: '+textStatus); 
	});
	
     //$('#bdyeditdepart').html(html); 
	 
}); 
// function simpan update departments 
function upddepartment(){
	var kd=$('#kdupddep').val(); 
	var nm=$('#depedit').val(); 
	var paren=$('#parent').val(); 
	if(kd==''){
		dhtmlx.alert({
			title:'Konfirmasi',text:'Tentukan data yang akan di update', 
			type:'confirm-alert'
		}); 
	}else if(nm==''){
		dhtmlx.alert({
			title:'Nama Unit harus anda isi', type:'confirm-alert', 
			title:'Konfirmasi'
		}); 
	}else{
		var request=$.ajax({
			type:'POST',timeout:360000,async:false, 
			url:base_url+'index.php/c_admin/upddepartment', 
			data:{
				kd:kd,unit:nm,paren:paren
			},beforeSend:function(jqXHR,setting){
				$('#loadtxt').html('Loading....'); 
			},success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					$('#loadtxt').html(''); 
					dhtmlx.alert({
						title:'Sukses',text:'Berhasil melakukan update', 
						type:'confirm-alert'
					}); 
					loaddepart(); 
				}else if(msg=='0'){
					$('#loadtxt').html(''); 
					dhtmlx.alert({
						title:'Gagal',text:'Gagal melakukan update', 
						type:'confirm-alert'
					});
					loaddepart(); 				
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				title:'Error',text:'Request failed: '+textStatus, 
				type:'alert-error'
			}); 
		}); 
	}
}
// function load grid departments 
function loaddepart(){
	$('#tbodydepartmen').html('Loading....'); 
	var request=$.ajax({
		type:'POST', timeout:360000, 
		async:false, 
		data:{

		},url:base_url+'index.php/c_admin/loadgrid', 
		beforeSend:function(jqXHR,setting){
		$('#tbodydepartmen').html('Loading....'); 
		},success:function(callback){
		$('#tbodydepartmen').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			title:'Error', text:'Request failed: '+textStatus, 
			type:'alert-error'
		}); 
	}); 
}


// check all hari libur umum 
$(document).on("click","#chkliburumumall",function(){
	$('.chkliburumum').attr('checked',this.checked); 
}); 

// hapus libur umum 
$(document).on("click","#delliburumum",function(e){
	var id=[]; 
	var kd=[]; 
	$('.chkliburumum:checked').each(function(){
		id.push($(this).attr('chkliburumum')); 
	}); 
	if(id.length<=0){
		dhtmlx.alert({
			title:'Konfirmasi',text:'Checklist Data yg akan dihapus', 
			type:'confirm-alert'
		}); 
	}else {
		$('.chkliburumum:checked').each(function(){
			kd.push($(this).val()); 
		});
		dhtmlx.message({
			type:'confirm', title:'Konfirmasi', 
			text:'Benar data ini akan dihapus ?', 
			callback:function(result){
				if(result){
					var request=$.ajax({
						type:'POST',timeout:360000,
						url:base_url+'index.php/c_admin/delhrliburumum', 
						data:{
							kd:kd
						},beforeSend:function(jqXHR,setting){

						},success:function(callback){
							var msg=callback[0]; 
							if(msg=='1'){
								dhtmlx.alert({
									title:'Sukses',text:'Berhasil dihapus', 
									type:'confirm-alert'
								}); 
							}else if(msg=='0'){
								dhtmlx.alert({
									type:'confirm-alert',text:'Gagal Melakukan Penghapusan', 
									title:'gagal'
								})
							}
						}
					}); 
					request.fail(function(jqXHR,textStatus){
						dhtmlx.alert({
							title:'Error',text:'Request failed: '+textStatus,type:'alert-error'
						}); 
					}); 
				}
			}
		}) ; 
	}
}); 
// modal window button edit libur umum 
$(document).on("click","#btneditlibur",function(e){
	var id=$(this).val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/hrliburupdate', 
		data:{
			kd:id
		},beforeSend:function(jqXHR,setting){
			$('#bdyeditlibur').html('Loading...'); 
		},success:function(callback){
			$('#modaleditlibur').modal('show');
			$('#bdyeditlibur').html(callback); 
		}
	});  
}); 
// function update hari libur umum
function updatehrlibutumum(){
	var id=$('#idedit').val(); 
	var nma=$('#nmhrliburedit').val(); // nama hari lbur umum 
	var tgl1=$('#tglmulaihrliburedit').val(); 
	var tgl2=$('#tglakhirliburedit').val(); 
	var jmlhhariedit=$('#jmlhhariedit').val(); 

	if(id==''){
		dhtmlx.alert({
			title:'Konfirmasi',text:'Tentukan data hari libur yg akan di update', 
			type:'confirm-alert'
		}); 
	}else if(nma==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Nama hari libur sebaiknya di isi', 
			type:'confirm-alert'
		}); 
	}else if(tgl1=='' && tgl2==''){
		dhtmlx.alert({
			title:'Konfirmasi',text:'Tgl Periode seharus nya di isi', 
			type:'confirm-alert'
		}); 	
	}else{
		var request=$.ajax({
			type:'POST', timeout:360000, 
			async:false, 
			url:base_url+'index.php/c_admin/prosesupdhrlibur', 
			data:{
				kd:id, nama:nma,tgl1:tgl1,tgl2:tgl2 
			}, beforeSend:function(jqXHR,setting){

			},success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					dhtmlx.alert({
						title:'Sukses', text:'Berhasil disimpan', 
						type:'confirm-alert'
					}); 
				}else if(msg=='0'){
					dhtmlx.alert({
						title:'Gagal',text:'Penyimpanan Gagal', 
						type:'confirm-alert'
					});
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				title:'Error',text:'Request failed : '+textStatus, 
				type:'alert-error'
			}); 
		}); 
	}
}
  $(document).on("click","#chkmodplusshhift:checked",function(){
    var a=$(this).val()
    var a1=a.split("|"); 
    var a2=a1[1]
    $('#kdshift1').val(a2); 
  }); 

    function simpanshiftbaru(){
    var nama=$('#namashiftbaru').val(); 
    var tgl=$('#tglmulaishift112').val(); 
    var sele=$('#selunitper123').val(); 
    var kode=$('#kode').val(); 
    var iduser=$('#kdpega').val(); 
    var come=$('.chkmodplusshhift:checked').val(); 
    var clid=come.split("|"); 
    var schclass=clid[0]; 
    var arr=[]; 
    var id=[]; 
    var chkjd=[]; 
    var chkjd2=[]; 
    $('.chkmodplusshhift:checked').each(function(){
	arr.push($(this).val()); 
	});
	$('.chktglr:checked').each(function(){
		id.push($(this).val()); 
	}); 
    if(arr.length>1){
    	dhtmlx.alert({
    		title:'Konfirmasi', text:'Jenis Shift Tidak Boleh Lebih dari satu', 
    		type:'confirm-alert'
    	}); 
    }else if(arr.length=0){
    	dhtmlx.alert({
    		title:'Konfirmasi', text:'Jenis Shift Harus anda tentukan', 
    		type:'confirm-alert'
    	});
    }else if(nama==""){
      dhtmlx.alert({
        title:'Konfirmasi', text:'Nama shift harus anda isi', 
        type:'confirm-alert'
      }); 
      nama.focus(); 
    }else if(sele==""){
      dhtmlx.alert({
        type:'confirm-alert', title:'Konfirmasi', 
        text:'Unit Periode harus anda isi'
      }); 
    }else{
    	$('.chktglr:checked').each(function(){
   		 chkjd.push($(this).attr('chktglr')); 
 		 }); 
		if(chkjd.length<1){
			dhtmlx.alert({
			title:'Sukses', text:'Checklist Jenis jam jadwal sementara', 
              type:'confirm-alert'
			}); 
		}else{		
		 $('.chktglr:checked').each(function(){
   		 chkjd2.push($(this).val()); 
 		 });	
      var request=$.ajax({
        type:'POST', async:false, 
        timeout:360000, 
        data:{
          iduser:iduser,cometime:chkjd2,schclass:schclass, 
          jam:come
        }, 
        url:base_url+'index.php/c_admin/simpansementara',  //simpanshiftbaru
        beforeSend:function(jqXHR,setting){
          $('#tbodybrshift').html('Loading...'); 
        },success:function(callback){
          var msg1=callback.split("|"); 
          var msg=callback[0]; 
          //var load1=msg[1]; 
          if(msg=='1'){
            dhtmlx.alert({
              title:'Sukses', text:'Berhasil melakukan penyimpanan', 
              type:'confirm-alert'
            }); 
            $('#modaltbhdftshift').modal('hide'); 
            loadgridshift(); 
            //load(); 
          }else if(msg=='0'){
            dhtmlx.alert({
              title:'Gagal', text:'Gagal melakukan penyimpanan', 
              type:'confirm-alert'
            }); 
          }
        }
      }); 
      request.fail(function(jqXHR,textStatus){
        dhtmlx.alert({
          title:'Error', text:'request failed: '+textStatus, 
          type:'alert-error'
        }); 
      }); 
    }
}
  }


// update shift pegawai / shift karyawan 
function updateshift(){
	var kode=$('#kode1').val(); 
	var nama=$('#nmshiftupd').val(); 
	var tgl=$('#tglmulaishift1edit').val(); 
	var units=$('#selunitperedit').val(); 
	if(kode==''){
		dhtmlx.alert({
			title:'Konfirmasi',text:'Pilih data yg akan di edit', 
			type:'confirm-alert'
		}); 
	}else if(nama==''){
		dhtmlx.alert({
			title:'Konfirmasi',text:'Nama shift harus anda isi', 
			type:'confirm-alert'
		}); 
	}else if(tgl==''){
		dhtmlx.alert({
			title:'Konfirmasi',text:'Tgl periode harus anda isi', 
			type:'confirm-alert'
		}); 
	}else if(units==''){
		dhtmlx.alert({
			title:'Konfirmasi',text:'Unit Periode harus anda isi', 
			type:'confirm-alert'
		}); 
	}else{
		var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, 
			url:base_url+'index.php/c_admin/updateshift', 
			data:{
				kd:kode,nama:nama, tgl:tgl,unit:units
			}, 
			beforeSend:function(jqXHR,setting){

			},success:function(callback){
				var msg=callback[0]; 
					dhtmlx.alert({
						title:'Sukses', text:'Berhasil melakukan Update', 
						type:'confirm-alert'
					}); 
					$('#modaltbhuptshift').modal('hide');
					loadgridshift();  
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				title:'Error', text:'Error Request: '+textStatus, 
				type:'alert-error'
			}); 
		}); 	
	}
}
  // load grid shift 
  function loadgridshift(){
  	var request=$.ajax({
  		type:'POST',timeout:360000, async:false, 
  		url:base_url+'index.php/c_admin/loadgridshift', 
  		beforeSend:function(jqXHR,setting){
  			$('#tbodybrshift').html('Loading...'); 
  		},success:function(callback){
  			$('#tbodybrshift').html(callback); 
  		}
  	});
  	request.fail(function(jqXHR,textStatus){
  		$('#tbodybrshift').html('Error :'+textStatus); 
  	}) 	; 
  }

  //if($('input.chkin').is(':checked')){

  $(document).on("click",".chkjamkerja12",function(){
  	if($(this).is(':checked')){
  		
  	}else{
  		var tgl=$('#tglshift').val(); 
  		var kdshift11='1900-01-01 00:00:00'; 
  		var kdshift22='1900-01-01 00:00:00'; 
  		var id=$(this).val(); 
  		var request=$.ajax({
  			type:'POST',timeout:360000, 
  			async:false, 
  			url:base_url+'index.php/c_admin/simpansingleshift', 
  			data:{
  				tgl:tgl,kdshift1:kdshift11,kdshift2:kdshift22,id:id
  			}
  		}); 
  	}
  }); 

// check all jadwal pegawai 
$(document).on("click",".chkpegjdwalall",function(){
	$('.chkpegjdwal1').attr('checked', this.checked);
}); 

// hapus check pegawai all 
$(document).on("click","#hpsjdwal",function(e){
	var arrid=[]; 
	var kd=[]; 
	$('.chkpegjdwal1:checked').each(function(){
		arrid.push($(this).attr('chkpegjdwal1')); 
	}); 
	if(arrid.length<=0){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Silahkan checklist data yg akan dihapus'
		}); 
	}else{
			dhtmlx.message({
				type:'confirm', 
				text:'Hapus data terchecklist ?', 
				callback:function(result){
					if(result){
						$('.chkpegjdwal1:checked').each(function(){
						arrid.push($(this).val()); 
						});
						var request=$.ajax({
							type:'POST',timeout:360000, 
							async:false, 
							url:base_url+'index.php/c_admin/hpsjdwalper', 
							beforeSend:function(jqXHR,setting){

							},success:function(callback){
								dhtmlx.alert({
									title:'Sukses',text:'Berhasil dihapus'
								}); 
							}
						}); 
						request.fail(function(jqXHR,textStatus){
							dhtmlx.alert({
								title:'Error',text:'Request failed: '+textStatus
							}); 
						}); 
					}
				}
			}); 
	}
}); 

// jadwal tidak tetap 
$(document).on("click","#jdwaltidktetap",function(){
	var tgl1=$('#tgl1jdwal').val(); 
	var tgl2=$('#tgl2jdwal').val(); 
	var arrid=[]; 
	var kd=[]; 
	$('.chkpegjdwal1:checked').each(function(){
		arrid.push($(this).attr('chkpegjdwal1')); 
	}); 
	if(arrid.length<=0){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Silahkan checklist data yg akan di jadikan jadwal tidak tetap'
		}); 
	}else{
		dhtmlx.message({
			type:'confirm', 
			text:'Susun  jadwal tidak tetap untuk pegawai terchecklist ?', 
			callback:function(result){
				if(result){
					$('.chkpegjdwal1:checked').each(function(){
						kd.push($(this).val()); 
					});
					 $('#jdwltdktetap').modal('show');
					 var request=$.ajax({
					 	type:'POST',timeout:360000, 
					 	async:false, url:base_url+'index.php/c_admin/gettbjdwltdkttp', 
					 	data:{
					 		tgl1:tgl1,tgl2:tgl2
					 	}, 
					 	beforeSend:function(jqXHR,setting){
					 	$('#jdwltdktetap').modal('show');
					 	$('#tbjdtdkttp').html('Loading...'); 	
					 	},success:function(callback){
					 	$('#jdwltdktetap').modal('show');		
					 	$('#tbjdtdkttp').html(callback); 
					 	$('#example3').dataTable(); 
					 	$('#kdpega').val(kd); 
					}
				}); 
					 request.fail(function(jqXHR,textStatus){
					 	$('#tbjdtdkttp').html('Request failed: '+textStatus); 
					 }); 
				}
			}
		}); 
	}
}); 
// check all range jadwal tidak tetap 
$(document).on("click","#chktglrange",function(){
	$('.chktglr').attr('checked',this.checked); 
}); 


// function tambah jadwal kerja 
$(document).on("click","#tbhjadwalkerja34",function(){
	var arr=[]; 
	var kd=[];
	$('.chkpegjdwal1:checked').each(function(){
		arr.push($(this).attr('chkpegjdwal1')); 
	}); 
	if(arr.length<=0){
		dhtmlx.alert({
			type:'confirm-alert',title:'Konfirmasi', 
			text:'Silahkan Checklist Pegawai Yg Akan ditambahkan jadwal nya'
		}); 	
	}else{
		$('.chkpegjdwal1:checked').each(function(){
			kd.push($(this).val()); 
		}); 
		$('#kduserjdwal').val(kd); 
		$('#modaltbhjdwal').modal('show'); 
	}

}); 
// hapus jadwal per pegawai 
function hpsjdwal(){
	var arr=[];
	var id=[]; 	
	var iduser=$('#kduserjdwal').val(); 
	$('.chjdwalpeg:checked').each(function(){
		arr.push($(this).attr('chjdwalpeg')); 
	});
	if(arr.length<=0){
			dhtmlx.alert({
			type:'confirm-alert',title:'Konfirmasi', 
			text:'Silahkan Checklist Jadwal yg akan dihapus'
		});
	}else{

		dhtmlx.message({
			type:'confirm', title:'Konfirmasi', 
			text:'Benar Data terchecklist akan dihapus?', 
			callback:function(result){
			if(result){
				var request=$.ajax({
					type:'POST',timeout:360000, 
					async:false, 
					url:base_url+'index.php/c_admin/hpsjdwalterpilih', 
					data:{
					
					},beforeSend:function(jqXHR,setting){
					
					},success:function(callback){
						
					}
				}); 
				request.fail(function(jqXHR,textStatus){
				
				
				}); 
			}
			
			}
		}); 
	}
}
// refresh  tombol jadwal per pegawai 
function refbutjadwal(){
	var request=$.ajax({
		type:'POST', timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/reftbjdwalpeg', 
		beforeSend:function(jqXHR,setting){
			$('#tbjdwalgrid').html('Loading....'); 
		},success:function(callback){
			$('#tbjdwalgrid').html(callback);  
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tbjdwalgrid').html('Error :'+textStatus); 
	}); 
}

// click tabel pegawai 
$(document).on("click","#example1 tbody tr#trpegawai", function(){
	var table=$('#example1').dataTable(); 
	var position = table.fnGetPosition(this); 
	var id = table.fnGetData(position)[1]; 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/reftablepegawai', 
		data:{
			kd:id
		}, beforeSend:function(jqXHR,setting){
			$('#divtbpegawai').html('Loading...'); 
		},success:function(callback){ 
			$('#divtbpegawai').html(callback); 
			$('#example7').dataTable();
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tbodypegawai').html('Request failed: '+textStatus); 
	});  
	});  

// function check all karyawan 
$(document).on("click","#chkkaryaall", function(){
	$('.chkkarya').attr('checked',this.checked); 
}); 

// hapus karyawan 
$(document).on("click","#hpskaryawan",function(){
	var arr=[]; 
	var id=[]; 

	$('.chkkarya:checked').each(function(){
		arr.push($(this).attr('chkkarya')); 
	}); 
	if(arr.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Checklist data yg akan anda hapus'
		}); 
	}else{
		dhtmlx.message({
			type:'confirm', 
			title:'Konfirmasi',text:'Benar data terchecklist akan anda hapus ? \n di mesin juga akan dihapus', 
			callback:function(result){
				if(result){
					$('.chkkarya:checked').each(function(){
						id.push($(this).val()); 
					}); 
				var request=$.ajax({
					type:'POST',timeout:360000, 
					async:false, 
					url:base_url+'index.php/c_admin/hapuspegawai', 
					data:{
						id:id
					},beforeSend:function(jqXHR,setting){

					},success:function(callback){
						var msg=callback[0]; 
						if(msg=='1'){
							dhtmlx.alert({
								title:'Berhasil',text:'Berhasil dihapus', 
								type:'confirm-alert'
							}); 
						}else if(msg=='0'){
							dhtmlx.alert({
								title:'gagal', text:'Penghapusan Gagal', 
								type:'confirm-alert'
							}); 
						}
					}
				}); 
				request.fail(function(jqXHR,textStatus){
					dhtmlx.alert({
						title:'Error', type:'alert-error', 
						text:'Request failed: '+textStatus
					}); 
				}); 	
				}
			}
		}); 
	}
}); 

// function edit pegawai 
$(document).on("click","#buteditpeg",function(){
	var id=$(this).val(); 
	$('#modupduser').html('Loading...'); 
	$('#modaltbhuppeg').modal('show'); 
	//$('#iduser').val(id); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/formupdatepeg', 
		data:{
			iduser:id
		},beforeSend:function(jqXHR,setting){
			$('#modupduser').html('Loading...'); 
		},success:function(callback){
			$('#modupduser').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			title:'Error', type:'confirm-alert', 
			text:'request failed: '+textStatus
		}); 
	}); 
}); 
// button simpan edit pegawai 
$(document).on("click","#updatepeg",function(){
	var nama=$('#namaupdpeg').val(); 
	var nik=$('#nikupd').val(); 
	// where 
	var iduser=$('#iduser').val(); 	// id user 
	var badge=$('#noidupd').val(); // badge number 

	// 
	var npwp=$('#npwpupd').val(); 
	var dept=$('#deptupd').val(); // departement 
	var pangkat=$('#angupdpeg').val(); // pangkat 
	var jabatan=$('#jabupdpeg').val(); 
	var struk=$('#strukupd').val(); 
	var jk=$('#jkbaru').val(); // jenis kelamin 
	var tgllahir=$('#tglahirupd').val(); // tgl lahir 
	var pend=$('#pendbaruupd').val(); // pendidikan 
	var poto=$('#fotopegupd234').val(); 
	var tglmasuk=$('#tglmskpegupd').val(); // tgl masuk 
	var nope=$('#nopepegupd').val(); // no telp 
	var stts=$('#stspeg').val(); // status 
	var sttsdb=$('#stspegupd').val(); // status pegawai db 
	var alamat=$('#alamatupd').val(); 


	if(nama==''){
		dhtmlx.alert({
			type:'confirm-alert', text:'Nama pegawai harap anda isi', 
			title:'Konfirmasi'
		}); 
		nama.focus(); 
	}else if(nik==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'NIP/NIK harap anda isi'
		}); 	
		nik.focus(); 
	}else if(pangkat==''){
		dhtmlx.alert({
			type:'confirm-alert', text:'Pangkat harus anda isi', 
			title:'Konfirmasi'
		}); 
		pangkat.focus(); 
	}else if(jabatan==''){
		dhtmlx.alert({
			type:'confirm-alert', text:'Jabatan harus anda isi', 
			title:'Konfirmasi'
		}); 
		jabatan.focus(); 
	}else if(struk==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Jabatan Struktural harus anda isi'
		}); 
		struk.focus(); 
	}else if(poto==''){
		var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, url:base_url+'index.php/c_admin/updatepegawai', 
			data:{
				iduser:iduser,noidupd:badge,nikupd:nik, 
				namaupdpeg:nama,pangupdpeg:pangkat, jabupdpeg:jabatan, 
				jkbaru:jk, tglahirupd:tgllahir, pendbaruupd:pend,
				tglmskpegupd:tglmasuk, nopepegupd:nope, npwpupd:npwp, 
				stspeg:stts, stspegupd:sttsdb,alamatupd:alamat, 
				deptupd:dept
			},beforeSend:function(jqXHR,setting){

			},success:function(callback){
				var msg=callback[0];
				if(msg=='1'){
					dhtmlx.alert({
						type:'confirm-alert', text:'Berhasil melakukan update', 
						title:'Sukses'
					}); 
					$('#modaltbhuppeg').modal('hide');
				}else if(msg=='0'){
					dhtmlx.alert({
						type:'alert-error', text:'Gagal Melakukan update', 
						title:'Gagal'
					}); 
				}
			}
			}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				type:'confirm-alert', text:'Request failed: '+textStatus, 
				title:'Error'
			}); 
		}); 
	}
}); 

// check all for delete penilaian 
$(document).on("click","#chkpenall",function(){
	$('.chkpen').attr('checked', this.checked); 
}); 
// penghapusan button nilai 

$(document).on("click","#btnhpsnilai",function(){
	var id=[]; 
	var arr=[]; 
	var thn=$('#thnnilai').val(); // tahun 	
	var bln=$('#blnnilai').val(); // bulan 


	$('.chkpen:checked').each(function(){
		arr.push($(this).attr('chkpen')); 
	}); 
	if(arr.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Checklist data yg akan anda hapus'
		});
	}else if(arr.length>0){
		$('chkpen:checked').each(function(){
			id.push($(this).val()); 
		}); 
		dhtmlx.message({
			type:'confirm', title:'Konfirmasi Penghapusan', 
			text:'Benar data terchecklist akan anda hapus?', 
			callback:function(result){
				var request=$.ajax({
					type:'POST',timeout:36000, 
					async:false, url:base_url+'index.php/c_admin/deletnilai', 
					data:{
						userid:id,bln:bln,thn:thn
					},beforeSend:function(jqXHR,setting){

					},success:function(callback){
						var msg=callback[0]; 
					}
				}); 
				request.fail(function(jqXHR,textStatus){
					alert('Request failed: '+textStatus)
				}); 
			}
		}); 
	}
}); 

// function button refresh form penilaian 
$(document).on("click","#btnrefreshnilai",function(){
	$('#bodytbnilai').html('Loading...'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/formrefnilai', 
		data:{

		},beforeSend:function(jqXHR,setting){
			$('#bodytbnilai').html('Loading...'); 
		},success:function(callback){
			$('#bodytbnilai').html(callback); 
			$('#example1').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#bodytbnilai').html('Netwrok Error, <br /> Please Try Again'); 
	}); 
});

// show modal nilai 
$(document).on("click","#buteditnilai",function(){
	var thn=$('#thnnilai').val(); // thn 
	var bln=$('#blnnilai').val();  // bulan 
	var iduser=$(this).val(); 
	if(thn=='' || bln==''){
		dhtmlx.alert({
			type:'confirm-alert', text:'Bulan/ Tahun Harus anda tentukan', 
			title:'Konfirmasi'
		}); 
	}else{
	$('#modaleditnilai').modal('show'); 
	var request=$.ajax({
		type:'post',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/formupdatenilai', 
		data:{
			iduser:iduser,bln:bln,thn:thn
		},beforeSend:function(jqXHR,setting){
			$('#bodypagnilai').html('Loading...'); 
		},success:function(callback){
			$('#thnupd').val(thn); 
			$('#blnupd').val(bln); 
			$('#bodypagnilai').html(callback); 
			$('#example1').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			type:'confirm-alert', text:'Error', 
			title:'Request failed: '+textStatus
		}); 
	}); 
	}
}); 

// proses penyimpanan page penilaian skor 

$(document).on("click","#btnnilai",function(){
	var thn=$('#thnnilai').val(); // thn 
	var bln=$('#blnnilai').val();  // bulan 
	var id=[]; 
	var arr=[]; 

	if(thn=='' || bln==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Tahun/ Bulan harus anda tentukan', 
			type:'confirm-alert' 
		}); 
	}else{
		var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, url:base_url+'index.php/c_admin/svpenilaian', 
			data:{

			},beforeSend:function(jqXHR,setting){

			},success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					dhtmlx.alert({
						type:'confirm-alert', text:'Sukses', 
						text:'Penyimpan Berhasil'
					}); 
				}else if(msg=='0'){
					dhtmlx.alert({
						type:'confirm-alert', title:'Gagal', 
						text:'Penyimpanan Gagal'
					}); 
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				title:'Error', text:'Request failed: '+textStatus, 
				type:'confirm-alert'
			}); 
		}); 	
	}
}); 


// show alert for update pegawai 
function showalert(){
	dhtmlx.alert({
		type:'confirm-alert', text:'Berhasil melakukan update', 
		title:'confirm-alert'
	}); 
}

// simpan pegawai baru 
function simpanpegbaru(){
	var nama=$('#namabarupeg').val(); 
	var nik=$('#nikbaru').val(); 
	var pang=$('#pangbaru').val(); // pangkat 
	var jab=$('#jabbaru').val(); // Jabatan 
	var jk=$('#jkbaru').val(); // jenis kelamin 
	var tgllahir=$('#tglahirbaru').val(); 
	var pend=$('#pendbaru').val(); 
	var tglmasuk=$('#tglmskpeg').val(); // tgl masuk pegawai 
	var nope=$('#nopepeg').val(); // nomor telp pegawai /hp pegawai 
	var stts=$('#stspeg').val(); // status di mesin / status pegawai 
	var alamat=$('#alamatbaru').val(); // alamat 
	var foto=$('#fotopeg').val(); // foto pegawai 

	if(nama==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Nama Harus anda isi'
		}); 
	}else{
		var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, 
			url:base_url+'index.php/c_admin/savepegawai', 
			data:{
				namabarupeg:nama,nikbaru:nik, 
				pangbaru:pang, jabbaru:jab, 
				jkbaru:jk, tglahirbaru:tgllahir,pendbaru:pend, 
				fotopeg:foto, 
				nopepeg:nope, alamatbaru:alamat,stspeg:stts

			},beforeSend:function(jqXHR,setting){

			},success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					dhtmlx.alert({
						type:'confirm-alert',title:'Sukses', text:'Berhasil disimpan'
					}); 
				}else if(msg=='0'){
					dhtmlx.alert({
						type:'confirm-alert', title:'Gagal', 
						text:'Penyimpanan Gagal'
					}); 
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				type:'alert-error', title:'Error', 
			text:'Request failed: '+textStatus
		}); 
		}); 
	}
}
// check all hapus cuti 
$(document).on("click","#chkcutiall",function(){
	$('.chkcuti').attr('checked',  this.checked); 
}); 

// button hapus cuti 
$(document).on("click","#buthapuscuti",function(){
	var arr=[]; 
	var id=[]; 
	$('.chkcuti:checked').each(function(){
		arr.push($(this).attr('chkcuti')); 
	}); 
	if(arr.length<=0){
		dhtmlx.alert({
			type:'confirm-alert',title:'Konfirmasi', 
			text:'Checklist data yg akan dihapus'
		}); 
	}else{
		dhtmlx.message({
			type:'confirm', title:'Konfirmasi', 
			text:'Benar data ini akan dihapus ?', 
			callback:function(result){
				if(result){
					$('.chkcuti:checked').each(function(){
						id.push($(this).val()); 
					}); 

					var request=$.ajax({
						type:'POST',timeout:360000, 
						async:false, 
						url:base_url+'index.php/c_admin/hapuscuti', 
						data:{
							iduser:id
						},beforeSend:function(jqXHR,setting){

						},success:function(callback){
							var msg=callback[0]; 
							if(msg=='1'){
								dhtmlx.alert({
									type:'confirm-alert', title:'Sukses', 
									text:'Berhasil dihapus'
								}); 
								reftableizin(); 
							}else if(msg=='0'){
								dhtmlx.alert({
									type:'confirm-alert', title:'Gagal', 
									text:'Penghapusan Gagal'
								}); 
							}
						}
					}); 
					request.fail(function(jqXHR,textStatus){
						dhtmlx.alert({
							title:'Error', text:'Request failed: '+textStatus, 
							type:'alert-error'
						}); 
					}); 
				}
			}
		}); 
	}
}); 
// function refresh table izin 
function reftableizin(){
		$('#tableizincuti').html('Loading....'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		data:{

		},url:base_url+'index.php/c_admin/tablerefizin', 
		beforeSend:function(jqXHR,setting){
			$('#tableizincuti').html('Loading....');
		}, success:function(callback){
			$('#tableizincuti').html(callback);
			$('#example7').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
			$('#tableizincuti').html('Request failed: '+textStatus); 
	}); 
}

// button refresh izin cuti 
$(document).on("click","#butrefizin",function(){
	$('#tableizincuti').html('Loading....'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		data:{

		},url:base_url+'index.php/c_admin/tablerefizin', 
		beforeSend:function(jqXHR,setting){
			$('#tableizincuti').html('Loading....');
		}, success:function(callback){
			$('#tableizincuti').html(callback);
			$('#example7').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
			$('#tableizincuti').html('Request failed: '+textStatus); 
	}); 
}); 
// modal window 
$(document).on("click","#jdwalkerjapegtbh",function(){
	$('#modalplusshift2').modal('show'); 
}); 

$('#example1 tbody').on('click','tr',function(){
	var a=$(this).text(); 
	//alert(a); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/tablereg', 
		beforeSend:function(jqXHR,setting){
			$('#tableshift2').html('Loading...'); 
		},success:function(callback){	
			$('#tableshift2').html(callback); 
			$('#example7').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tableshift2').html('HTML Reqeuest: '+textStatus); 
	}); 
}); 
// function load refresh table 2 
function tableshift2(){

}

// checklist jadwal kerja all 
$(document).on("click","#chjdwalpegall",function(){
	$('.chjdwalpeg').attr('checked',this.checked); 
}); 

// click table  modul plus shift 
$(document).on("click","#example1 tbody td#tdshift2",function(){
	var table=$('#example1').dataTable(); 
	var data=Array(); 
    var texto= $(this).text();  
    var kdjam=texto.split("|"); 
    var kdjam1=kdjam[0]; 
    var units=kdjam[1]; 
    var unitarr=Array();
    var unitarr1='';  
   // $('.kdjamdel12').val(kdjam1); 
    //$('#kdunitdel').val(units); 
	var request=$.ajax({
		type:'POST',timeout:360000, async:false, 
		data:{
			kd:kdjam1,units:units
		},url:base_url+'index.php/c_admin/getarrayjaga2', 
		beforeSend:function(jqXHR,setting){
			$('#tableshift2').html('Loading...'); 
		},success:function(callback){
			$('#tableshift2').html(callback); 
			$('#example1').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tableshift2').html('Request error: '+textStatus); 
	}); 
}); 

// check all data uraian 
$(document).on("click","#chkgolongall",function(){
	$('.chkgolong').attr('checked',this.checked); 
}); 
// hapus data uraian 
$(document).on("click","#hpsdatauraian",function(){
	var arr=[]; 
	var id=[]; 
	$('.chkgolong:checked').each(function(){
		arr.push($(this).attr('chkgolong')); 
	}); 
	if(arr.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Checklist data yg akan dihapus'
		}); 
	}else{
		$('.chkgolong:checked').each(function(){
			id.push($(this).val()); 
		}); 
		dhtmlx.message({
			type:'confirm', title:'Konfirmasi Penghapusan', 
			text:'Hapus data terchecklist ?', 
			callback:function(result){
				if(result){
					var request=$.ajax({
						type:'POST', timeout:360000, 
						async:false, 
						url:base_url+'index.php/c_admin/hpsdatauraian', 
						data:{
							id:id
						},beforeSend:function(jqXHR,setting){

						},success:function(callback){
							var msg=callback[0]; 
							if(msg=='1'){
								dhtmlx.alert({
									title:'Sukses', text:'Berhasil dihapus', 
									type:'confirm-alert'
								}); 
							}else if(msg=='0'){
								dhtmlx.alert({
									title:'Gagal',text:'Penghapusan gagal', 
									type:'confirm-alert'
								}); 
							}
						}
					}); 
					request.fail(function(jqXHR,textStatus){
						dhtmlx.alert({
							title:'Error', text:'Request failed: '+textStatus, 
							type:'alert-error'
						}); 
					}); 
				}
			}
		}); 

	}
}); 
// check all jadwal kerja pegawai 
$(document).on("click","#jdwalkerjapegall",function(){
	$('#jdwalkerjapeg').attr('checked',$this.checked); 
}); 

// hapus jadwal kerja pegawai tidak tetap 
$(document).on('click',"#hpsjdwaltdktetap",function(){
	var arr=[]; 
	var id=[]; 
	var kduser=$('#jdkduser').val(); // kd user 
	$('#jdwalkerjapeg:checked').each(function(){
		arr.push($(this).attr('jdwalkerjapeg')); 
	}); 
	if(arr.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Checklist Data yg akan anda hapus'
		}); 
	}else{
		$('#jdwalkerjapeg').each(function(){
			id.push($(this).val()); 
		}); 
		dhtmlx.message({
			type:'confirm', text:'Hapus jadwal terchecklist ?', 
			title:'Konfirmasi', 
			callback:function(result){
				if(result){
					var request=$.ajax({
						type:'POST',timeout:360000, 
						async:false, 
						url:base_url+'index.php/c_admin/hpsjdwalpeg', 
						data:{
							sdays:id,kduser:kduser
						},beforeSend:function(jqXHR,setting){

						},success:function(callback){
						var msg=callback[0]; 
						if(msg=='1'){
							var kduser2=$('#jdkduser').val(); 
							var tgl2=$('#tgl1jdwal').val(); 
							var request1=$.ajax({
								type:'POST',timeout:360000, 
								async:false, url:base_url+'index.php/c_admin/getarraytempshcedule', 
								data:{
									userid:kduser2,tgl1:tgl2
								},beforeSend:function(jqXHR,setting){
									$('#tbjdwalkerja').html('Loading...');
								},success:function(callback){
									$('#tbjdwalkerja').html(callback);	
								}
							}); 
							request1.fail(function(jqXHR,textStatus){
								$('#tbjdwalkerja').html('Belum Ada Jadwal'); 
							}); 
						}else{
							$('#tbjdwalkerja').html('Gagal dihapus'); 
						}		
						}
					}); 
					request.fail(function(jqXHR,textStatus){
						dhtmlx.alert({
							type:'alert-error', title:'Error', 
							text:'Request failed: '+textStatus
						}); 
					}); 
				}
			}
		}); 
	}
}); 

// report department harian 
function repdeparthari(){
	var id=$('#departmentrep').val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		data:{
			deptid:id
		},
		url:base_url+'index.php/c_admin/getpegrephar', 
		beforeSend:function(jqXHR,setting){
			$('#namapeg').html('Loading....'); 
		},success:function(callback){
			$('#namapeg').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#namapeg').html('Request failed: '+textStatus); 
	}); 
}

// function getnama pegawai 
function getpegcuti(){
	var iddep=$('#depart').val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/getpegcuti', 
		data:{
				deptid:iddep
		},beforeSend:function(jqXHR,setting){
			$('#namapegdepart').html('Loading...'); 
		},success:function(callback){
			$('#namapegdepart').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#namapegdepart').html('Request failed: '+textStatus); 
	}); 
}
// check all upload system 
$(document).on("click","#chkmesindonwall",function(){
	$('.chkmesindonw').attr('checked',this.checked); 
}); 

// function lembur 
function lemburdep(){
	var deptid=$('#deptlembur').val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/getpeglembur', 
		data:{
			deptid:deptid
		},beforeSend:function(jqXHR,setting){
			$('#lemburpeg').html('Loading..'); 
		},success:function(callback){	
			$('#lemburpeg').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#lemburpeg').html('Error: '+textStatus); 
	}); 
}

// get pegawai report transaksi 
function getreptransaksi(){
	var deptid=$('#depreptransaksi').val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/getreptransaksi', 
		data:{
			deptid:deptid
		},beforeSend:function(jqXHR,setting){
			$('#pegreptransaksi').html('Loading..'); 
		},success:function(callback){	
			$('#pegreptransaksi').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#pegreptransaksi').html('Error: '+textStatus); 
	}); 
}
// get pegawai rep detail harian 
function getreptransaksidet(){
	var deptid=$('#repdepdetharian').val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/getreptransaksidet', 
		data:{
			deptid:deptid
		},beforeSend:function(jqXHR,setting){
			$('#repdetharpeg').html('Loading..'); 
		},success:function(callback){	
			$('#repdetharpeg').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#repdetharpeg').html('Error: '+textStatus); 
	}); 
}
// get selisih tanggal 
function getseltanggal(){
	var tgl1=$('#tglmulaihrlibur').val(); // tgl1 
	var tgl2=$('#tglakhirlibur').val(); // tgl2 
	var request=$.ajax({
		type:'POST',timeout:360000, async:false, 
		url:base_url+'index.php/c_admin/pengtanggal', 
		data:{
			tgl1:tgl1,tgl2:tgl2
		},beforeSend:function(jqXHR,setting){

		},success:function(callback){
			$('#jmlhhari').val(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#jmlhhari').html('error'); 
	}); 
}

// function simpan hari libur 
$(document).on("click","#butsimpanlibur",function(){
	getseltanggal(); 
	var nama=$('#nmhrlibur').val(); 
	var start=$('#tglmulaihrlibur').val(); 
	var durasi=$('#jmlhhari').val(); 
	if(nama==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Nama hari harus anda isi'
		}); 
		nama.focus(); 
	}else{
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false,
		url:base_url+'index.php/c_admin/simpanhrlibur', 
		data:{
			holidayname:nama,starttime:start,durasi:durasi
		},
		beforeSend:function(jqXHR,setting){

		},success:function(callback){
			var msg=callback[0]; 
			if(msg=='1'){
				dhtmlx.alert({
					type:'confirm-alert', title:'Sukses', text:'Berhasil disimpan'
				}); 
				kosongkanformhrlibur(); 
			}else if(msg=='0'){
				dhtmlx.alert({
					type:'confirm-alert', title:'Gagal', text:'gagal melakukan penyimpanan'
				}); 
			}
		}
	}); 
}
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			type:'alert-error', title:'Error', 
			text:'Request failed: '+textStatus
		}); 
	}); 
}); 

function kosongkanformhrlibur(){
	$('#nmhrlibur').val(''); 
	$('#jmlhhari').val('0'); 
}
// button refresh umum 
$(document).on("click","#refbutumum",function(){
	$('#divliburumum').html('Loading....'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/fretblumum', 
		beforeSend:function(jqXHR,setting){
			$('#divliburumum').html('Loading....'); 
			$('#example1').dataTable(); 
		},success:function(callback){
			$('#divliburumum').html(callback); 
			$('#example1').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#divliburumum').html('Request failed: '+textStatus); 
	}); 
}); 
// button update hari libur umum 
$(document).on("click","#buteditlib",function(){
	var id=$('#idedit').val(); 
	var nama=$('#nmhrliburedit').val(); 
	var start=$('#tglmulaihrliburedit').val(); 
	var jmlhhariedit=$('#jmlhhariedit').val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/updhrliburumum', 
		data:{
			id:id,nama:nama,starttime:start,durasi:jmlhhariedit
		},beforeSend:function(jqXHR,setting){

		},success:function(callback){
			var msg=callback[0]; 
			if(msg=='1'){
				dhtmlx.alert({
					title:'Sukses', type:'confirm-alert', 
					text:'Berhasil disimpan'
				}); 
				$('#modaleditlibur').modal('hide'); 
			}else if(msg=='0'){
				dhtmlx.alert({
					title:'Gagal', text:'Gagal Melakukan Update', 
					type:'confirm-alert'
				}); 
			}
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			type:'alert-error', title:'Error', 
			text:'Request failed: '+textStatus
		}); 
	}); 
}); 

// click data upload data 
$(document).on("click",".tbuploaddata tbody tr#truploaddata",function(){
	var table=$('#example7').dataTable(); 
    var position = table.fnGetPosition(this); 
    var id = table.fnGetData(position)[0]; 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/refuploaddata',
		data:{
			deptid:id
		},  
		beforeSend:function(jqXHR,setting){
			$('#tbluploadpeg').html('Loading...'); 
		},success:function(callback){
			$('#tbluploadpeg').html(callback); 
			$('#example4').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tbluploadpeg').html('Request failed: '+textStatus); 
	}); 
}); 
// check all upload data pegawai 
$(document).on("click","#chkuplodpegall",function(){
	$('.chkuplodpeg').attr('checked',this.checked); 
}); 
// pendidikan 
// click all checkbox pendidikan 

$(document).on('click',"#chkpendall",function(){
	$('.chkpend').attr('checked',this.checked); 
}); 
// button hapus pendidikan 
$(document).on("click","#hpspendi",function(){
	var arr=[]; 
	var id=[]; 
	$('.chkpend:checked').each(function(){
		arr.push($(this).attr('chkpend')); 
	}); 
	if(arr.length<=0) {
		dhtmlx.alert({
			title:'Konfirmasi', text:'Checklist data yg akan anda hapus', 
			type:'confirm-alert'
		}); 
	}else{
		$('.chkpend:checked').each(function(){
			id.push($(this).val()); 
		}); 
		dhtmlx.message({
			type:'confirm', title:'Hapus', 
			text:'Hapus data terchecklist ?', 
			callback:function(result){
				if(result){
			var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, 
			data:{
				idpend:id
			},url:base_url+'index.php/c_admin/hpspend', 
			beforeSend:function(jqXHR,setting){
				idpend:id
			},success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					dhtmlx.alert({
						type:'confirm-alert', title:'Sukses', 
						text:'Berhasil dihapus'
					}); 
					refbutpend(); 
				}else if(msg=='0'){
					dhtmlx.alert({
						type:'confirm-alert', title:'gagal', text:'Penghapusan Gagal'
					}); 
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				type:'alert-error', title:'Error', text:'Request failed: '+textStatus
			}); 
		}); 
				}
			}
		}); 
	}

}); 
// button edit mesin 
$(document).on("click","#buteditmesin",function(){
	$('#modaleditmesin').modal('show');
	var id=$(this).val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/formupdmesin', 
		data:{
			id:id
		},beforeSend:function(jqXHR,setting){
			$('#bodyeditmesin').html('Loading...'); 
		},success:function(callback){
			$('#bodyeditmesin').html(callback); 
			refmesin(); 
		}
	});  
	request.fail(function(jqXHR,textStatus){
		$('#bodyeditmesin').html('Request failed: '+textStatus); 
	}); 
}); 
// button update mesin 
$(document).on("click","#butsimpmesinupd",function(){
	var id=$('#kode').val(); 
	var nama=$('#nmmesinup').val(); 
	var kom=$('#komunikasiup').val(); 
	var ip=$('#ipupd').val(); 
	var pass=$('#passkomupd').val(); 
	var nomesin=$('#nomesinupd').val(); 
	var port=$('#noportupd').val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		data:{
			id:id,nama:nama,port:port,kom:kom, 
			ip:ip,pass:pass,nomesin:nomesin
		},url:base_url+'index.php/c_admin/updtmesin', 
		beforeSend:function(jqXHR,setting){

		},success:function(callback){
			var msg=callback[0]; 
			if(msg=='1'){
				dhtmlx.alert({
					title:'Sukses', type:'confirm-alert', 
					text:'Berhasil melakukan update'
				}); 
				refmesin(); 
				$('#modaleditmesin').modal('hide'); 
			}else if(msg=='0'){
				dhtmlx.alert({
					title:'Gagal', text:'Gagal Melakukan update', 
					type:'confirm-alert'
				}); 
			}
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			type:'alert-error', title:'Error', 
			text:'Request failed: '+textStatus
		}); 
	}); 
}); 

// button refresh mesin 
$(document).on("click","#butrefreshmes",function(){
	$('#tbodymesin').html('Loading....'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/refmesin', 
		data:{

		},beforeSend:function(jqXHR,setting){
			$('#tbodymesin').html('Loading....'); 
		},success:function(callback){
		$('#tbodymesin').html(callback); 
		$('#example1').dataTable(); 		
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tbodymesin').html('Request failed: '+textStatus); 
	}); 
}); 
// checkbox master golongan 
$(document).on("click","#chkgolongall",function(){
	$('.chkgolong').attr('checked',this.checked); 
}); 

// button hapus golongan 
$(document).on("click","#hapusgolo",function(){
	var arr=[]; 
	var id=[]; 
	$('.chkgolong:checked').each(function(){
		arr.push($(this).attr('chkgolong')); 
	}); 
	if(arr.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', text:'Checklist data yg akan anda hapus', 
			title:'Konfirmasi'
		}); 
	}else{
		$('.chkgolong:checked').each(function(){
			id.push($(this).val()); 
		}); 
		dhtmlx.message({
			type:'confirm', title:'Konfirmasi', 
			text:'Hapus data golongan terchecklist ?', 
			callback:function(result){
				if(result){
					var request=$.ajax({
						type:'POST',timeout:360000, async:false, 
						url:base_url+'index.php/c_admin/hpsgolongan', 
						data:{
							id:id
						},beforeSend:function(jqXHR,setting){

						},success:function(callback){
							var msg=callback[0]; 
							if(msg=='1'){
								dhtmlx.alert({
									title:'Sukses', type:'confirm-alert', 
									text:'Berhasil dihapus'
								}); 
							}else if(msg=='0'){
								dhtmlx.alert({
									title:'Gagal', text:'Penghapusan Gagal', 
									type:'confirm-alert'
								}); 
							}
						}
					}); 
					request.fail(function(jqXHR,textStatus){
						dhtmlx.alert({
							type:'alert-error', title:'Error', 
							text:'Request failed: '+textStatus
						}); 
					}); 
				}
			}
		}); 
	}
}); 
// button refresh golongan 
$(document).on("click","#butrefgol",function(){
	$('#tbmastergol').html('Loading...'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/refmastertbgol', 
		data:{

		},beforeSend:function(jqXHR,setting){
			$('#tbmastergol').html('Loading...');
		},success:function(callback){
			$('#tbmastergol').html(callback);
			$('#example1').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tbmastergol').html('Request failed: '+textStatus); 
	}); 
}); 
// button edit golongan 
$(document).on("click","#btneditgol",function(){
	var kd=$(this).val(); 
	$('#modaleditgol').modal('show'); 
	var request=$.ajax({
		type:'POST',timeout:360000, async:false, 
		url:base_url+'index.php/c_admin/formgolongan', 
		data:{
			kd:kd
		},beforeSend:function(jqXHR,setting){
			$('#bodyeditgolo').html('Loading...'); 
		},success:function(callback){
			$('#bodyeditgolo').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#bodyeditgolo').html('Error:'+textStatus); 
	}); 
}); 
// proses update master golongan 
$(document).on("click","#updgolo",function(){
		var kd=$('#kodeupd').val(); 
		var gol=$('#golbaruedit').val(); 
		var stts=$('#selgolbaruedit').val(); 
		var skor=$('#skorupdgol').val(); // skor

		var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/updmastergol', 
		data:{
			kd:kd,gol:gol,stts:stts,skor:skor
		},beforeSend:function(jqXHR,setting){

		},success:function(callback){
			var msg=callback[0]; 
			if(msg=='1'){
				dhtmlx.alert({
					title:'Sukses', text:'Berhasil diupdate', 
					type:'confirm-alert'
				}); 
				$('#modaleditgol').modal('hide');
			}else if(msg=='0'){
				dhtmlx.alert({
					type:'confirm-alert', title:'Gagal', 
					text:'Gagal Melakukan Update'
				}); 
			}
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			title:'Error', text:'request failed:'+textStatus, 
			type:'alert-error'
		}); 
	}); 
}); 
// show photo modal pegawai / karyawan 
$(document).on("click","#showpoto",function(){
	var a=$(this).val(); 
	$('#modalshowpoto').modal('show'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/getphoto', 
		data:{
			id:a
		},beforeSend:function(jqXHR,setting){
			$('#bodyshowpoto').html('Loading..'); 
		},success:function(callback){
			$('#bodyshowpoto').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#bodyshowpoto').html('Request failed: '+textStatus); 
	}); 
}); 

// button simpan jadwal pegawai 
$(document).on("click","#butsimpanjdwal6",function(){
	var arr=[]; 
	var id=[]; 
	var id2=$('.chjdwalpeg:checked').val(); 
	var kd=$('#kduserjdwal').val(); 
	var kd1=kd.split(","); 
	//var kd2=kd1.split("|"); 
	var kd3=kd1;  
	var tgl1=$('#idjadwal56').val(); 
	var tgl2=$('#idjadwal67').val(); 
	$('.chjdwalpeg:checked').each(function(){
		arr.push($(this).attr('chjdwalpeg')); 
	}); 
	if(arr.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Silahkan Checklist  data jadwal pegawai'
		}); 
	}else if(arr.length>1){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Checklist Jadwal tidak di benarkan lebih dari 1 jadwal'
		}); 
	}else{
		$('.chjdwalpeg:checked').each(function(){
		id.push($(this).val()); 
		}); 
		dhtmlx.message({
			type:'confirm',
			title:'Konfirmasi', text:'Simpan data terjadwal untuk pegawai ini ?', 
			callback:function(result){
				if(result){
					var request=$.ajax({
						type:'POST',timeout:360000, 
						async:false, 
						url:base_url+'index.php/c_admin/simpanjadwalpeg', 
						data:{
							kduser:kd3,runid:id2, tgl1:tgl1,tgl2:tgl2
						},beforeSend:function(jqXHR,setting){

						},success:function(callback){
							var msg=callback[0]; 
							if(msg=='1'){
								dhtmlx.alert({
									title:'Sukses', text:'Berhasil disimpan', 
									type:'confirm-alerts'
								}); 
								$('#modaltbhjdwal').modal('hide'); 
							}else if(msg=='0'){
								dhtmlx.alert({
									title:'Gagal', text:'Penyimpanan Gagal', 
									type:'confirm-alert'
								}); 
							}
							
						}
					}); 
					request.fail(function(jqXHR,textStatus){
						dhtmlx.alert({
							title:'Error', type:'alert-error', 
							text:'Error: '+textStatus
						}); 
					}); 
				}
			}
		}); 
	}
}); 
// onchange function for datapresensi / data presensi 
function dtpresensi(){
	var dtpres=$('#dptpresensi').val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		data:{
			deptid:dtpres
		},
		url:base_url+'index.php/c_admin/getpegrephar', 
		beforeSend:function(jqXHR,setting){
			$('#dtpegawai').html('Loading....'); 
		},success:function(callback){
			$('#dtpegawai').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#dtpegawai').html('Request failed: '+textStatus); 
	});
}

// button tampilkan presensi 
$(document).on("click","#tampilkanpresensi",function(e){
	//$('#tblpresensi').html('Loading...'); 
	var tgl1=$('#tgl1presen').val();  // tgl1 
	var tgl2=$('#tgl2presen').val();
	var iduser=$('#dtpegawai').val();   // iduser
	if(iduser==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Pegawai harap anda tentukan'
		}); 
	}else{
		var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/datapresensi1', 
		data:{
			iduser:iduser,tgl1:tgl1,tgl2:tgl2
		},beforeSend:function(jqXHR,setting){
		$('#tblpresensi').html('Loading...'); 
		},success:function(callback){
			$('#tblpresensi').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			type:'alert-error', text:'Request failed:'+textStatus, 
			title:'Error'
		}); 
	}); 
	}
}); 

// button refresh pendidikan 
function refbutpend(){
	$('#tbrefpendi').html('Loading...'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/refpendidikan', 
		data:{

		},beforeSend:function(jqXHR,setting){
			$('#tbrefpendi').html('Loading...'); 
		},success:function(callback){
			$('#tbrefpendi').html(callback); 
			$('#example1').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tbrefpendi').html('Error: '+textStatus); 
	}); 
}

// function refresh department 
function refdepartment(){
	$('#lapakdepart').html('Loading...'); 
	var request=$.ajax({	
		type:'POST',timeout:360000, async:false, 
		url:base_url+'index.php/c_admin/refreshdept',
		data:{

		},beforeSend:function(jqXHR,setting){
			$('#lapakdepart').html('Loading...'); 
		},success:function(callback){
			$('#lapakdepart').html(callback); 
			$('#example1').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#lapakdepart').html('Error :'+textStatus); 
	}); 
}

// function refresh pegawai 
function butrefpeg(){
	$('#tabrefpeg').html('Loading...'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, 
		url:base_url+'index.php/c_admin/butrefpegawai', 
		data:{

		},beforeSend:function(jqXHR,setting){
			$('#tabrefpeg').html('Loading...'); 
		},success:function(callback){
			$('#tabrefpeg').html(callback); 
			$('#example1').dataTable(); 	
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tabrefpeg').html('Error :'+textStatus); 
	}); 
}



// function update password 
function updpass(){
	var pass=$('#password').val(); 
	$.ajax({
		type:'POST',timeout:360000, async:false, 
		data:{
			pass:pass
		},url:base_url+'index.php/login/changepass', 
		beforeSend:function(jqXHR,setting){

		},success:function(callback){
			var msg=callback[0]; 
			if(msg=='1'){
				var pass1=$('#passbaru').val(); 
				$.ajax({
					type:'POST',timeout:360000, async:false, 
					url:base_url+'index.php/login/changepass2', 
					data:{
						pass:pass1
					},beforeSend:function(jqXHR,setting){

					},success:function(callback){
						var msg1=callback[0]; 
						if(msg1=='2'){
							alert('Password berhasil dirubah, Sistem Akan logout'); 
							location.href=base_url+'index.php/login/logout'; 
						}else if(msg1=='3'){
							dhtmlx.alert({
								type:'confirm-alert', title:'Gagal', 
								text:'Password Gagal diganti'
							}); 
						}
					}
				}); 
			}else if(msg=='0'){
				dhtmlx.alert({
					type:'confirm-alert', text:'Password Lama anda tidak sama', 
					title:'Konfirmasi'
				}); 
			}
		}
	}); 
}

// function change payroll 
function tbpayroll(){
	$('#tbpayroll').html('Loading...'); 
	var deptid=$('#dptpresensi').val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/payrollchange', 
		data:{
			deptid:deptid
		},beforeSend:function(jqXHR,setting){
			$('#tbpayroll').html('Loading...'); 
		},success:function(callback){
			$('#tbpayroll').html(callback); 
			$('#example1').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tbpayroll').html('Error: '+textStatus);
	}); 
}
// hapus mesin 
function hapusmesin1(){
	var arr=[]; 
	var id=[]; 

	$('.chkmesin1:checked').each(function(){
		arr.push($(this).attr('chkmesin1')); 
	}); 
	if(arr.length<=0){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Checklist Mesin yg akan anda hapus', 
			type:'confirm-alert'
		}); 
	}else{
		$('.chkmesin1:checked').each(function(){
			id.push($(this).val()); 
		}); 
		dhtmlx.message({
			type:'confirm', text:'Hapus Mesin terchecklist ?', 
			title:'Konfirmasi', 
			callback:function(result){
				if(result){
					var request=$.ajax({
						type:'POST',timeout:360000, 
						async:false, 
						url:base_url+'index.php/c_admin/hapusmesin', 
						data:{
							id:id
						}, 
						beforeSend:function(jqXHR,setting){

						},success:function(callback){
							var msg=callback[0]; 
							if(msg=='1'){
								dhtmlx.alert({
									title:'Sukses', text:'Penghapusan Berhasil', 
									type:'confirm-alert'
								}); 
								refmesin(); 
							}else if(msg=='0'){
								dhtmlx.alert({
									type:'confirm-alert', text:'Penghapusan Gagal', 
									title:'Konfirmasi'
								}); 
							}
						}
					}); 
					request.fail(function(jqXHR,textStatus){
						dhtmlx.alert({
							title:'Error', text:'Request failed: '+textStatus, 
							type:'alert-error'
						}); 
					}); 
				}
			}
		})
	}
}



// change department for nama pegawai 
function changedepart(){
	var deptid=$('#rephtungdepart').val(); 
	var html='<option value="">--Pilih Jenis Laporan--</option>'; 
       html+='<option value="1">Laporan Harian</option>'; 
       html+='<option value="2">Laporan Per Department</option>'; 
       html+='<option value="3">Laporan BKPP</option>'; 
       html+='<option value="4">Laporan Detail Harian</option>'; 
	if(deptid=='all'){
		$('#jnslapform').html('<option value="3">Laporan BKPP</option>');
	}else{
		$('#jnslapform').html(html); 
	}
	var request=$.ajax({
		type:'POST',timeout:360000, 
		url:base_url+'index.php/c_admin/getpegrephar', 
		async:false, 
		data:{
			deptid:deptid
		},beforeSend:function(jqXHR,setting){
			$('#nmrephtung').html('Loading...'); 
		}, 
		success:function(callback){
			$('#nmrephtung').html(callback); 
			$('#displaybut').css('display','none'); 
		}
	}); 
}

function changereport(){
	var jns=$('#jnslapform').val(); 
	if(jns=='2'){
		$('#nmrephtung').html('<option value="">--Pilih--</option>'); 
	}
}

// function show report 
function showrepperhtu(){
	var jns=$('#jnslapform').val(); 
	var deptid=$('#rephtungdepart').val(); 
	var nama=$('#nmrephtung').val(); 
	// laporan BKPP
	if(jns=='3'){
		var request=$.ajax({

		}); 
	}
}


// checkall 
$(document).on('click',"#chkcutiallmas",function(){
	$('.chkcutimas').attr('checked',this.checked); 
})
// function hapus data master 
function hapusmstercuti(){
	var arr=[]; 
	var id=[]; 

	$('.chkcutimas:checked').each(function(){
		arr.push($(this).attr('chkcutimas')); 
	}); 

	if(arr.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Checklist Data Yg Akan anda hapus'
		}); 
	}else{
		$('.chkcutimas:checked').each(function(){
		id.push($(this).val()); 
	}); 
		dhtmlx.message({
			type:'confirm', 
			title:'Konfirmasi', text:'Yakin Hapus data master ?', 
			callback:function(result){
				if(result){
					var request=$.ajax({
						type:'POST',timeout:360000, 
						async:false, url:base_url+'index.php/c_admin/hpsmaster', 
						data:{
							id:id
						},beforeSend:function(jqXHR,setting){

						},success:function(callback){
							var msg=callback[0]; 
							if(msg=='1'){
								dhtmlx.alert({
									type:'confirm-alert', title:'Sukses', 
									text:'Berhasil Melakukan Penghapusan'
								}); 
								refgridmascuti();
							}else if(msg=='0'){
								dhtmlx.alert({
									title:'Gagal', 
									text:'Penghapusan Gagal', type:'confirm-alert'
								}); 
							}
						}
					}); 
				}
			}
		}); 
	}

}
// refresh grid master 
function refgridmascuti(){
	$('#tableizincutimas').html('Loading...'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/gridmaster', 
		data:{

		},beforeSend:function(jqXHR,setting){
			$('#tableizincutimas').html('Loading...'); 
		},success:function(callback){
			$('#tableizincutimas').html(callback); 
			$('#example7').dataTable();
		}
	}); 
	request.fail(function(jqXHR,textStatus){
			$('#tableizincutimas').html('Request failed: '+textStatus); 
	}); 

}

// function tambah 
function tambahmastercuti(){
	$('#modaltbhcuti').modal('show'); 
}

function simpanmascuti(){
	var nama=$('#namaizin').val(); 
	var simbol=$('#simbolrep').val(); 
	var minunit=$('#minunit').val(); 
	var unit=$('#minhr').val(); 
	if(nama==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Nama Cuti harus anda isi', 
			type:'confirm-alert'
		}); 
	}else{
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/simpanizin', 
		data:{
			nama:nama,simbol:simbol,minunit:minunit,unit:unit
		},beforeSend:function(jqXHR,setting){

		},success:function(callback){
			var msg=callback[0]; 
			if(msg=='1'){
				dhtmlx.alert({
					title:'Sukses', type:'confirm-alert', 
					text:'Berhasil disimpan'
				}); 
				refgridmascuti(); 
				$('#modaltbhcuti').modal('hide'); 
			}else if(msg=='0'){
				dhtmlx.alert({
					title:'Gagal', text:'Penyimpanan gagal', 
					type:'confirm-alert'
				}); 
			}
		}
	}); 
		request.fail(function(jqXHR,textStatus){
		dhtmlx.alert({
			title:'Error', text:'Request failed: '+textStatus, 
			type:'alert-error'
		}); 
	}); 
}
}

// function modal update master cuti 
$(document).on("click","#buteditmas",function(){
	var id=$(this).val(); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false,url:base_url+'index.php/c_admin/editmsterizin', 
		data:{
			id:id
		},beforeSend:function(jqXHR,setting){
			$('#modaleditcuti').modal('show'); 
			$('#modupdizin').html('Loading...'); 
		},success:function(callback){
			$('#modaleditcuti').modal('show'); 
			$('#modupdizin').html(callback); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#modupdizin').html('Request failed: '+textStatus); 
	}); 
	//$('#modaleditcuti').modal('show'); 
}); 

// function update master izin/ cuti 
function updmastercuti(){
	var id=$('#kdupd').val(); 
	var nama=$('#namaizinupd').val(); 
	var simbol=$('#simbolrepupd').val(); 
	var minunit=$('#minunitpd').val(); 
	var unit=$('#minhrupd').val(); 
	if(nama==''){
		dhtmlx.alert({
			title:'Informasi', text:'Nama harus anda isi', 
			type:'confirm-alert'
		}); 
	}else{
		var request=$.ajax({
			type:'POST',timeout:360000, async:false, url:base_url+'index.php/c_admin/updtcuti', 
			data:{
				id:id,nama:nama,simbol:simbol,minunit:minunit,unit:unit
			},beforeSend:function(jqXHR,setting){

			},success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					dhtmlx.alert({
						title:'Sukses', text:'Berhasil Melakukan Update', 
						type:'confirm-alert'
					}); 
					$('#modaleditcuti').modal('hide'); 
					refgridmascuti(); 
				}else if(msg=='0'){
					dhtmlx.alert({
						title:'Gagal', text:'Gagal Melakukan Update', 
						type:'confirm-alert'
					}); 
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				type:'alert-error', title:'Error', 
				text:'Request failed: '+textStatus
			});
		}); 
	}
}

// function laporan 

function repperhitungan(){
	var jns=$('#jnslapform').val(); 
	var dept=$('#rephtungdepart').val(); // department 
	var nama=$('#nmrephtung').val(); // Nama 
	var tgl1=$('#tglrepharidet').val(); 
	var tgl2=$('#tglrepharidet2').val(); 
	if(dept==''){
		dhtmlx.alert({
			type:'confirm-alert', text:'Department Harus anda isi', 
			title:'Konfirmasi'
		}); 
	}else if(jns=='1'){
		var request=$.ajax({
			type:'POST',timeout:360000, async:false, 
			url:base_url+'index.php/c_admin/getreportperh', 
			data:{
				jns:jns,iddept:dept,iduser:nama, tgl1:tgl1,tgl2:tgl2
			},beforeSend:function(jqXHR,setting){
				$('#tblaporan12').html('Loading...'); 
			},success:function(callback){
				$('#tblaporan12').html(callback); 
				$('#example7').dataTable(); 
				$('#displaybut').removeAttr('style'); 
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			$('#tblaporan12').html('Request failed: '+textStatus); 
		}); 
	}else if(jns=='3'){
		var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, 
			url:base_url+'index.php/c_admin/getrepbkpp', 
			data:{
				jns:jns,iddept:dept,userid:nama, tgl1:tgl1,tgl2:tgl2
			}, 
			beforeSend:function(jqXHR,setting){
				$('#tblaporan12').html('Loading...'); 
			},success:function(callback){
				$('#tblaporan12').html(callback); 
				$('#example7').dataTable(); 
				$('#displaybut').removeAttr('style'); 
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			$('#tblaporan12').html('Request failed: '+textStatus);
		}); 
	}	
}

// report keuangan 
function reportkeu(){
	var jns=$('#jnslapformkeu').val(); 
	var dept=$('#rephtungkeu').val(); // department 
	var jnspeg=$('#jnspegkeu').val(); 
	var nama=$('#nmrephtungkeu').val(); // Nama 
	var tgl1=$('#tglrepkeu').val(); 
	var tgl2=$('#tglrepkeu2').val();
	var bln=$('#bulan').val(); 
	var thn=$('#thnpayroll').val(); //tahun 
	if(dept==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Department harus anda pilih', 
			type:'confirm-alert'
		}); 
	}else if(jnspeg==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Jenis Pegawai Yg ingin ditampilkan harap anda isi'
		}); 
		jnspeg.focus(); 	
	}else if(jns==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Jenis Laporan harap anda pilih'
		}); 
	}else if(jns=='11'){
		//waitingDialog.show('Dialog with callback on hidden',{onHide: function () {alert('Callback!');}});
		$('#tblaporankeu').html('Loading.....'); 
		var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, url:base_url+'index.php/c_admin/getrepkeuangan', 
			data:{
				jns:jns,dept:dept,jnspeg:jnspeg,nama:nama,
				tgl1:tgl1,tgl2:tgl2, bln:bln,thn:thn
			},beforeSend:function(jqXHR,setting){
				$('#tblaporankeu').html('Loading.....'); 
			},success:function(callback){
				$('#tblaporankeu').html(callback); 
				$('#example7').dataTable(); 
				$('#displaybutkeu').removeAttr('style'); 
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			$('#tblaporankeu').html('Request failed: '+textStatus); 
		}); 
	}else if(jns=='12'){
		$('#tblaporankeu').html('Loading..'); 
		var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, url:base_url+'index.php/c_admin/reportgettpk', 
			data:{
				iddept:dept,idpeg:nama,bln:bln,thn:thn, 
				jnspeg:jnspeg
			},beforeSend:function(jqXHR,setting){

			},success:function(callback){
				$('#tblaporankeu').html(callback); 
				$('#example7').dataTable(); 
				$('#displaybutkeu').removeAttr('style'); 
			}
		}); 
		request.fail(function(jqXHR,textStatus){

		}); 
	}
}

// display report keuangan 
$(document).on("click","#displaybutkeu",function(e){
	var bln=$('#bulan').val(); 
	var thn=$('#thnpayroll').val(); 
	var dept=$('#rephtungkeu').val(); 
	var jns=$('#jnspegkeu').val(); // jenis pegawai 
	var idpeg=$('#nmrephtungkeu').val(); 
	// bentuk report yang ingin ditampilkan 
	var rep1=$('#jnslapformkeu').val(); 
	if(idpeg==''){
		var id='-'; 
	}else{
		var id=idpeg; 
	}
	if(rep1=='11'){
	var wind=window.open(base_url+'index.php/report/reportcetkkeuangan/'+bln+'/'+thn+'/'+dept+'/'+jns+'/'+id); 
	wind.print(); 
	wind.focus(); 
	}else if(rep1=='12'){
		var wind=window.open(base_url+'index.php/report/reporttpk/'+bln+'/'+thn+'/'+dept+'/'+jns+'/'+id); 
		wind.print(); 
		wind.focus(); 
	}else{
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Jenis report harus anda isi'
		}); 
		rep1.focus(); 
	}	
}); 


// onchange departments 
function deptkeuangan(){
	var iddept=$('#rephtungkeu').val(); // iddepart
	var idpeg=$('#jnspegkeu').val(); // idpeg 
	$('#nmrephtungkeu').html('<option value="">Loading</option>');
	var html=''; 
	html+='<option value="">--Pilih Jenis Laporan</option>'; 
	html+='<option value="11">Jasa Medis</option>';
	html+='<option value="12">TPK</option>';  
	var request=$.ajax({
		type:'POST',timeout:360000, async:false, 
		url:base_url+'index.php/c_admin/getpegawaikeu', 
		data:{
			iddept:iddept,idpeg:idpeg
		},beforeSend:function(jqXHR,setting){
		$('#nmrephtungkeu').html('<option value="">Loading</option>'); 
		},success:function(callback){
		$('#nmrephtungkeu').html(callback);
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#nmrephtungkeu').html('<option value="">Request Failed</option>'); 
	}); 
	if(idpeg=='1'){
		$('#jnslapformkeu').html('<option value="11">Jasa Medis</option>'); 	
	}else{
		$('#jnslapformkeu').html(html); 
	}
}

function refmesin(){
		$('#tbodymesin').html('Loading....'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/refmesin', 
		data:{

		},beforeSend:function(jqXHR,setting){
			$('#tbodymesin').html('Loading....'); 
		},success:function(callback){
			$('#tbodymesin').html(callback); 
			$('#example1').dataTable(); 		
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tbodymesin').html('Request failed: '+textStatus); 
	}); 
}
// cetak report perhitungan presensi 
function cetakreport(){
	var jns=$('#jnslapform').val(); 
	var iduser=$('#nmrephtung').val(); // id user 
	if(iduser==''){
		var iduser1='-'; 
	}else{
		var iduser1=iduser; 
	}
	var deptid=$('#rephtungdepart').val(); // department 
	var tgl1=$('#tglrepharidet').val(); 
	var tgl2=$('#tglrepharidet2').val(); // tgl2 
	if(jns=='3'){

	var wind=window.open(base_url+'index.php/report/reportbkpp/'+deptid+'/'+iduser1+'/'+tgl1+'/'+tgl2); 
	wind.focus(); 
	wind.print();
	} else if(jns=='1'){ // cetak report harian 
		var wind=window.open(base_url+'index.php/report/reportharian/'+deptid+'/'+iduser1+'/'+tgl1+'/'+tgl2); 
		wind.focus(); 
		wind.print(); 
	}

}

// edit langsung ke server 

// function koneksi mesin 
function konmesin(){
	var arr=[]; 
	var id=[]; 
	$('.chkmesin1:checked').each(function(){
		arr.push($(this).attr('chkmesin1')); 
	}); 
	if(arr.length<=0 ){
		dhtmlx.alert({
			title:'Koneksi', text:'Checklist alat yg akan di koneksikan', 
			type:'confirm-alert'
		}); 
	}else{
		$('.chkmesin1:checked').each(function(){
			id.push($(this).val()); 
		}); 
				//waitingDialog.show();
				//$('#mesinmasuk').html('Loading...Pelase Wait...'); 
				var request=$.ajax({
					type:'POST',timeout:360000, 
					async:true, 
					url:base_url+'index.php/conn/updatemachine', 
					data:{
						ip:id
					},beforeSend:function(jqXHR,setting){
						//$('#mesinmasuk').html('Loading,Please Wait...');  
						//$('#mesinstatus').html('Loading, Please Wait...');
					},success:function(callback){
						var msg=callback.split("|"); 
						$('#example3').dataTable(); 
						//$('#example4').dataTable(); 
						refmesin();
						//$('#mesinmasuk').html(msg[0]); 
						//$('#mesinstatus').html('Loading...');
						//koneksimesinstts(); 
					var request1=$.ajax({
					type:'POST', timeout:360000, 
					async:false, url:base_url+'index.php/conn/koneksimesinstts', 
					data:{
						id:id
					},beforeSend:function(jqXHR,setting){
						$('#mesinstatus').html('Loading, Please Wait...');
					},success:function(callback){
						$('#mesinstatus').html(callback);
						$('#example4').dataTable(); 
				//var msg=callback[0]; 
				//if(msg=='1'){
					//alert('Koneksi Mesin berhasil di putuskan'); 
					//refmesin(); 
				//}
			}
		}); 
		request1.fail(function(jqXHR,textStatus){
			$('#tbodymesin').html('Netwrok Error'); 
		});
		}
		}); 
	request.fail(function(jqXHR,textStatus){
	$('#mesinmasuk').html('Request Timeout/ Not Connected To Machine, Please re connect machine'); 
	}); 				
	}
}
// download mesin berdasarkan IP 
$(document).on("click","#butdownload",function(){
	var ip=$(this).val(); 
	var request1=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/conn/cekkoneksi', 
		data:{
			ip:ip
		}, beforeSend:function(jqXHR,setting){
		
		},success:function(callback){
			var msg=callback[0]; 
			if(msg=='1'){
				dhtmlx.alert({
					type:'confirm-alert', title:'Konfirmasi', 
					text:'Mesin Tidak Terkoneksi <br /> Silahkan Koneksikan dahulu'
				}); 
			}else if(msg=='0'){
				$('#mesinmasuk').html('Loading...Pelase Wait...');  
				var request=$.ajax({
				type:'POST',timeout:360000, 
				async:false, url:base_url+'index.php/conn/downloaddt', 
				data:{
						ip:ip
				}, beforeSend:function(jqXHR,setting){
					$('#mesinmasuk').html('Loading...Pelase Wait...');  
				},success:function(callback){
					//$('#msg12').html('<span class="label label-success">Proses Penyimpanan Ke Database,Please Wait...</span>'); 
					$('#mesinmasuk').html(callback); 
					$('#example3').dataTable(); 
				}
			}); 
			request.fail(function(jqXHR,textStatus){
				$('#mesinmasuk').html('Time Out...Pelase Try Again...');
			}); 
			
			}
		}
	}); 
}); 




// putuskan koneksi mesin 
function pukonmesin(){
	var arr=[]; 
	var id=[]; 
	$('.chkmesin1:checked').each(function(){
		arr.push($(this).attr('chkmesin1')); 
	}); 	
	if(arr.length<=0) {
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Checklist Mesin Yg akan diputus koneksi'
		}); 
	}else{
		$('.chkmesin1:checked').each(function(){
		id.push($(this).val()); 
		}); 
		var request=$.ajax({
			type:'POST', timeout:360000, 
			async:false, url:base_url+'index.php/conn/puskoneksimesin', 
			data:{
				id:id
			},beforeSend:function(jqXHR,setting){
				$('#mesinstatus').html('Loading, Please Wait...');
			},success:function(callback){
			$('#mesinstatus').html(callback);
			$('#example4').dataTable(); 
				//var msg=callback[0]; 
				//if(msg=='1'){
					//alert('Koneksi Mesin berhasil di putuskan'); 
					refmesin(); 
				//}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			$('#tbodymesin').html('Netwrok Error'); 
		}); 
	}
}

function koneksimesinstts(){

}
// refresh mesin 
function refmesin(){
	$('#tbodymesin').html('Loading....'); 
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/refmesin', 
		data:{

		},beforeSend:function(jqXHR,setting){
			$('#tbodymesin').html('Loading....'); 
		},success:function(callback){
		$('#tbodymesin').html(callback); 
		$('#example1').dataTable(); 		
		}
	}); 
}

// check all 
$(document).on('click','#chkmesinkonall',function(){
	$('.chkmesinkon').attr('checked', this.checked); 
}); 
// function download data 
function downloaddata(){
var id=[]; 
var arr=[]; 
	$('.chkmesinkon:checked').each(function(){
		id.push($(this).val()); 
	}); 

$('#msg').removeAttr('style'); 
var request=$.ajax({
	type:'POST',timeout:360000, 
	async:false, url:base_url+'index.php/conn/simpankedb', 
	data:{
		id:id
	},beforeSend:function(jqXHR,setting){
	
	},success:function(callback){
	$('#msg').css({ 'display': "none" });
	dhtmlx.alert({
		title:'Sukses', text:'Berhasil disimpan', 
		type:'confirm-alert' 
	}); 
	}
}); 
request.fail(function(jqXHR,textStatus){
	dhtmlx.alert({
		title:'Error', text:'Request failed: '+textStatus, 
		type:'alert-error' 
	}); 
}); 
}
// function cetak data presensi 
function cetakpresensi(){
	var dept=$('#dptpresensi').val(); 
	var idpeg=$('#dtpegawai').val(); 
	var tgl1=$('#tgl1presen').val(); 
	var tgl2=$('#tgl2presen').val(); 	
	if(dept==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'pilih department', 
			type:'confirm-alert' 
		}); 
	}else{
	var wind=window.open(base_url+'index.php/report/reppresensi/'+tgl1+'/'+tgl2+'/'+dept+'/'+idpeg); 
	wind.print(); 
	wind.focus(); 
	}
}

// function cetak riwayat operasional 
function cetakriwoperasional(){
	var windo=window.open(base_url+'index.php/report/cetakriwoperasional'); 
	windo.print(); 
	windo.focus(); 
}

// button hapus operasional 
$(document).on("click","#hpsoperasional",function(){
	var arr=[]; 
	var id=[]; 
	$('.chkoperasio:checked').each(function(){
		arr.push($(this).attr('chkoperasio')); 
	}); 
	if(arr.length<1){
		
	}
}); 

// check all admin 
$(document).on("click",".chkadminall",function(){
	$('.chkadmin').attr('checked',this.checked); 
}); 

// check all 
$(document).on("click",".chkadmbaruall",function(){
	$('.chkadmbaru').attr('checked',this.checked); 
}); 

// function hapus admin 

function hapusadmin(){
	var kduser=[]; 
	var id=[];  //chkadmin //chkadminall

	$('.chkadmin:checked').each(function(){
		id.push($(this).attr('chkadmin')); 
	}); 

	if(id.length<=0){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Checklist Data Yg Akan anda hapus'
		});
	}else{
		$('.chkadmin:checked').each(function(){
			kduser.push($(this).val()); 
		}); 
		dhtmlx.message({
			type:'confirm', 
			title:'Konfirmasi', 
			text:'Hapus user terchecklist ?', 
			callback:function(result){
			if(result){
			var request=$.ajax({
			type:'POST', async:false, 
			url:base_url+'index.php/c_admin/hapusadministrator', 
			data:{
				kduser:kduser
			},beforeSend:function(jqXHR,setting){
				
			},success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					dhtmlx.alert({
						type:'confirm-alert', title:'Sukses', 
						text:'Berhasil dihapus'
					}); 
					refreshadmin(); 
				}else{
					dhtmlx.alert({
						type:'confirm-alert', title:'Gagal', 
						text:'Gagal Menghapus Administrator'
					}); 
				}
			}
			}); 
			request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
			type:'confirm-alert', title:'Error', 
			text:'Request failed: '+textStatus
			});	
			}); 
		}
			}		
		}); 
	}
}

function  refreshadmin(){
	//waitingDialog.show('Custom message');
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/refadmin', 
		data:{

		},beforeSend:function(jqXHR,setting){
			$('#tbadmin').html('Loading....'); 
		},success:function(callback){
			$('#tbadmin').html(callback); 
			$('#example1').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#tbadmin').html('Request failed: '+textStatus); 
	}); 
}
// function tambah modal administrator 
function tbhadmin(){
	$('#modaladministrator').modal('show'); 
}
// checkall hak akses 
$(document).on("click","#chkaksesall",function(){
	$('.chkakses').attr('checked',  this.checked); 
}); 

// button simpan akses menu user 
$(document).on("click","#simpanadmaks",function(){
	var arr=[]; 
	var id=[]; 
	var iduser=$('#iduserakses').val(); 
	var chkall=$('#chkaksesall:checked').val(); 
	$('.chkakses:checked').each(function(){
		arr.push($(this).attr('chkakses')); 
	});

	if(arr.length<=0){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Menu Akses harus anda checklist', 
			type:'confirm-alert'
		}); 
	}else if(arr.length>0){
		$('.chkakses:checked').each(function(){
		id.push($(this).val()); 
		});
		var request=$.ajax({
			type:'POST',timeout:360000, async:false, 
			url:base_url+'index.php/c_admin/simpanaksesmenu', 
			data:{
				chkall:chkall,kduser:iduser,idmenu:id
			},beforeSend:function(jqXHR,setting){

			},success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					dhtmlx.alert({
						type:'confirm-alert', text:'Berhasil Melakukan Penyimpnan', 
						title:'Sukses'
					}); 
					$('#modalaaksesadmin').modal('toggle'); 
				}else if(msg=='0'){
					dhtmlx.alert({
						type:'confirm-alert', text:'Penyimpan Gagal', 
						title:'Gagal'
					}); 
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				type:'confirm-alert',title:'Error', 
				text:'Request failed: '+textStatus
			}); 
		}); 
	}

}); 

// function edit akses administrator
$(document).on("click","#buteditadm",function(){
	$('#modalaaksesadmin').modal('show'); 
	var iduser=$(this).val(); 
	$('#example7').dataTable(); 
	$('#iduserakses').val(iduser); 
}); 



function simpanadmin(){
	var iduser=[]; 
	var id=[]; 
	$('.chkadmbaru:checked').each(function(){
		iduser.push($(this).attr('chkadmbaru')); 
	}); 
	if(iduser.length<1){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Checklist data yg akan anda simpan'
		}); 
	}else{
		$('.chkadmbaru:checked').each(function(){
		id.push($(this).val());  
		}); 
		dhtmlx.message({
			type:'confirm', title:'Konfirmasi', 
			text:'Simpan user terchecklist untuk dijadikan Admin?', 
			callback:function(result){
				if(result){
					var request=$.ajax({
						type:'POST',timeout:360000, async:false, 
						url:base_url+'index.php/c_admin/simpanadminbaru', 
						data:{
							kduser:id
						},beforeSend:function(jqXHR,setting){
							$('.msg').html('Loading...'); 
						},success:function(callback){
							$('.msg').html(''); 
							var msg=callback[0]; 
							if(msg=='1'){
								dhtmlx.alert({
									title:'Sukses', text:'Berhasil disimpan'
								}); 
								refreshadmin(); 
								$('#modaladministrator').modal('hide'); 
							}else{
								dhtmlx.alert({
									title:'Gagal', text:'Penyimpnan Gagal'
								}); 
							}
						}
					}); 
					request.fail(function(jqXHR,textStatus){
						dhtmlx.alert({
							type:'confirm-alert', title:'Error', 
							text:'Request failed: '+textStatus
						}); 
					}); 
				}
			}
		}); 
	}
}

// 
$(document).on("click","#downfromflash",function(){
	$('#modalflash').modal('show'); 
}); 

function  buttonupfromflash(){
	var file=$('#upfile').val(); 
	if(file==''){
		dhtmlx.alert({
			title:'Konfirmasi',text:'Pilih data yg akan dimasukkan kedalam  sistem'
		}); 
	}else{
	var request=$.ajax({
		type:'POST',timeout:360000, 
		async:false, url:base_url+'index.php/c_admin/uploadfromflash', 
		data:{
			file:file
		},beforeSend:function(jqXHR,setting){
			$('#msg').html('Loading'); 
		},success:function(callback){
			$('#tbflash').html(callback); 
			$('#example7').dataTable(); 
		}
	}); 
	request.fail(function(jqXHR,textStatus){
		$('#msg').html('Request failed: '+textStatus);  	
	});
		} 
}

function cetakjdwal(){
	$('#modalctkjdwal').modal('show'); 
}

$(function(){
    $(document).on( 'click', "input#awal",function(){
        $(this).datepicker({
            dateFormat:"dd-mm-yy",
            showOn:'focus',
            changeMonth:true,
            changeYear:true,
            defaultDate:'-40y+0d',
            yearRange: "-100:+0"
        }).focus();
        
    });
});

$(function(){
	$(document).on('click',"input#awal2",function(){
		$(this).datepicker({
			dateFormat:"dd-mm-yy", 
			showOn:'focus', 
			changeMonth:true, 
			changeYear:true, 
			defaultDate:'-40y+0d', 
			yearRange:"-100:+0"
		}).focus(); 
	}); 
}); 

// function cetak jadwal 
$(document).on("click","#ctkjdwal",function(){
	var tgl1=$('#awal').val(); 
	var tgl2=$('#awal2').val(); 
	var kdunit=$('#kdunit').val(); 
	if(tgl1==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Periode Jadwal harus anda tentukan'
		}); 
	}else if(tgl2==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi' 
			,text:'Periode harus anda tentukan'
		}); 
	}else if(kdunit==''){
		dhtmlx.alert({
			type:'confirm-alert', title:'Konfirmasi', 
			text:'Unit harus anda tentukan'
		}); 
	}else{
	var doc=window.open(base_url+'index.php/report/cetakjadwal/'+tgl1+'/'+tgl2+'/'+kdunit); 
	doc.focus(); 
	doc.print(); 
		}
	});

// simpan shift baru 
$(document).on("click","#simpandftshiftbr",function(){
	var nm=$('#namashiftbaru').val(); 
	var tgl1=$('#tglmulaishift112').val(); 
	var tgl2=$('#tglakhirshift').val(); 
	var unitper=$('#selunitper123').val(); 
	if(nm==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Nama Shift harus anda isi', 
			type:'confirm-alert'
		}); 
	}else if(tgl1=='' && tgl2==''){
		dhtmlx.alert({
			type:'confirm-alert', text:'Tgl Berlaku harus anda isi', 
			title:'Konfirmasi'
		}); 
	}else if(unitper==''){
		dhtmlx.alert({
			type:'confirm-alert', text:'Unit Periode harus anda pilih', 
			title:'Konfirmasi'
		}); 
	} else{
		var request=$.ajax({
			type:'POST', timeut:360000, 
			async:false, url:base_url+'index.php/c_admin/simpanshiftmaster', 
			data:{
				nama:nm,tgl1:tgl1,tgl2:tgl2,per:unitper
			},beforeSend:function(jqXHR,setting){

			},success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					dhtmlx.alert({
						type:'confirm-alert', title:'Sukses', 
						text:'Berhasil disimpan'
					}); 
					loadgridshift();
				}else if(msg=='0'){
					dhtmlx.alert({
						type:'confirm-alert', text:'Penyimpanan Gagal', 
						title:'Gagal'
					}); 
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				type:'confirm-alert', text:'Request failed: '+textStatus, 
				title:'Konfirmasi'
			}); 
		}); 
	}
}); 


// button simpan pegawai baru 
$(document).on("click","#butsimppeg",function(e){
	var foto=$('#fotopeg').val(); 
	//
	var nama=$('#namabarupeg').val(); // nama pegawai 
	var nik=$('#nikbaru').val(); // nik 
	var npwp=$('#npwpbaru').val(); // npwp 
	var dept=$('#deptbaru').val(); // department 
	var pangkat=$('#pangbaru').val(); // pangkat 
	var jab=$('#jabbaru').val(); // jabatan 
	var struk=$('#strukbaru').val(); // struktural 
	var jk=$('#jkbaru').val(); // jenis kelamin 
	var pend=$('#pendbaru').val(); // pendidikan 
	var tglahir=$('#tglahirbaru').val(); 
	var stspeg=$('#stspeg').val(); // stts pegawai di mesin 
	var nope=$('#nopepeg').val(); // nope pegawai 
	var tglmasuk=$('#tglmskpeg').val(); // tgl masuk 
	var stspegdb=$('#stspegdb').val(); // status pegawai di database 
	var alamat=$('#alamatbaru').val(); // alamat 
	if(nik==''){
		dhtmlx.alert({
			type:'confirm-alert', text:'Nik/Nip wajib anda isi', 
			title:'Konfirmasi'
		}); 
		nik.focus(); 
	}else if(dept==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Departement harus anda isi', 
			type:'confirm-alert'
		}); 
		dept.focus();
	}else if(struk==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Struktural Harus anda isi', 
			type:'confirm-alert'
		})
		struk.focus(); 
	}else if(stspegdb==''){
		dhtmlx.alert({
			title:'Konfirmasi', text:'Jenis Pegawai harsu anda isi', 
			type:'confirm-alert'
		}); 
		stspegdb.focus(); 
	} else if(foto==''){
		var request=$.ajax({
			type:'POST',timeout:360000, 
			async:false, url:base_url+'index.php/c_admin/simpanpegawai1', 
			data:{
				nikbaru:nik, namabarupeg:nama,pangbaru:pangkat, 
				jabbaru:jab,jkbaru:jk,tglahirbaru:tglahir, 
				pendbaru:pend,tglmskpeg:tglmasuk,nopepeg:nope, 
				stspeg:stspeg, alamat:alamat,deptbaru:dept,
				npwpbaru:npwp,stspegdb:stspegdb,strukbaru:struk 
			},beforeSend:function(jqXHR,setting){

			},success:function(callback){
				var msg=callback[0]; 
				if(msg=='1'){
					dhtmlx.alert({
						type:'confirm-alert', title:'Sukses', 
						text:'Penyimpnan Sukses'
					}); 
				}else if(msg=='0'){
						dhtmlx.alert({
							type:'confirm-alert', title:'Gagal', 
							text:'Penyimpnan Gagal'
						}); 
				}else{
					dhtmlx.alert({
						type:'confirm-alert', title:'Gagal', 
						text:'Failed: '+textStatus
					}); 	
				}
			}
		}); 
		request.fail(function(jqXHR,textStatus){
			dhtmlx.alert({
				title:'Konfirmasi', text:'Request failed: '+textStatus, 
				type:'confirm-alert'
			}); 
		}); 
	}
}); 
