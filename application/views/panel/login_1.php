<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login-Management Sistem RS.Meuraxa Banda Aceh</title>
<!-- Custom Theme files -->
<link rel="icon" type="image/ico" href="#">
<link href="<?php echo base_url();?>assets/login/style-login.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
<meta name="keywords" content="Absensi,meuraxa">
<meta content="" name="description">

<script src="<?php echo base_url();?>assets/login/jquery.min.js"></script><style type="text/css"></style>
<script type="text/javascript">
	$(document).ready(function () {
    	$(document).on("click", "#tampil-pass", function(){
    		if($('#tampil-pass').is(':checked')){
    			$('.pass').attr('type', 'text');
    		}else{
    			$('.pass').attr('type', 'password');
    		}
    	});
    });
</script>
<script type="text/javascript" async="" src="#"></script></head>
<body style="background-color: #3d639c;align:center;vertical-align: center;font-face: calibri; border-width: 1px;">
	<div class="head" style="border-width: 1px;">
		<div class="logo" style="background-color: #11b3ea;">
			<div class="logo-top">
				<img src="<?php echo base_url();?>assets/admin/logo2.png" width="130">
			</div>
			<div class="logo-bottom">
				<section class="sky-form">	
				<p style="font-size: 28px;color: white;">Aplikasi Management</p>
				<p style="font-size: 24px;color: white;">RS.Meuraxa Banda Aceh</p>						
				</section>
			</div>
		</div>		
		<div class="login">
			<div class="sap_tabs">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Masuk ke Aplikasi</span></li>
					<div class="clearfix"></div>
				</ul>				  	 
				<div class="resp-tabs-container">
					<div class="tab-1" aria-labelledby="tab_item-0">
						<div class="login-top">
						<form action="<?php echo base_url();?>index.php/login/proseslogin" method="POST">
								<input type="text" name="nik" placeholder="NIP/NIK" value="" required>
								<input type="password" name="pass" class="pass" placeholder="Password" required>

								
								<input type="checkbox" id="tampil-pass">
								<label for="tampil-pass" class="show-pass">Tampilkan password</label>
								
								<div class="login-bottom col-btn-login">
									<div class="submit">
										<input type="submit" value="LOGIN">
									</div>
									<ul>
										<li><p style="color: red;"><strong><?php echo $this->session->flashdata('message'); ?></strong></p></li>
									</ul>
									<div class="clear">
									</div>
								</div>

							</form>
						</div>
					</div>						
				</div>
			</div>	

		</div>	
		<div class="clear"></div>
	</div>	
	<div class="account">
		<ul>
			<li><p style="font-size: 24px;">2016 © PT.Amgro</p></li>
			<div class="clear"></div>
		</ul>
	</div>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs1.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnh5zoOhIRXhI1Swq2ygxDnpVh94AkNNMy%2ba4WTWgKSmaITCN3DXC47lOCF9x1bSg2gCT8Kwxnd38UC643TT4uAjSH1TtAwiKuhsjUuSOg%2fRCvrjyeTOKCrJwnFMSdBpXWzfXluIKjiQwZi%2baFPHnhmNev%2fVR7yFS1cdasd2UuTJSwFo4IvzBxZFni7clHBRtLUsVIhHsssfwBDXjBdvJg%2bCbsjUwTXJYB5HWNyI4i3F%2ft1IjvfpSbRc7iQtI44okqVxdQYr2G2KTnPKOcChA9uyYXizShQStO3nuM2mIZyg069BylX07hAusARGZ28cpUhLxv%2fuINaqtX51ChEiiSeCTsLFSSxUvsiY6RV%2bor88VeMIqPcaxe2LZd2DDgjMi%2bjigRuCKgTrfXPa33otkMMSMQgnXcmdfun6MilxQo9KYBwHdjzmeS44sWb8eHtZG5omdYJK6yP8RBLPtTYomIES9QTVASAfiiVydqMAmWZKWxlBo6fF8Xwlx5HU75oqv1a%2fSqMtHIcHemKbhk83eKjl5gtI%2bMfPex8eRJinvou3YXV0Wj22reZJN%2frg2vBtbvXNg3Dsv%2frpI9CYxotKJn2myLAzy4Mc3eul3%2bu1DPCerqpAzQsq%2fi1Q%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
<div id="window-resizer-tooltip" style="display: none;"><a href="#" title="Edit settings"></a><span class="tooltipTitle">Window size: </span><span class="tooltipWidth" id="winWidth">1440</span> x <span class="tooltipHeight" id="winHeight">900</span><br><span class="tooltipTitle">Viewport size: </span><span class="tooltipWidth" id="vpWidth">1440</span> x <span class="tooltipHeight" id="vpHeight">784</span></div></body></html>