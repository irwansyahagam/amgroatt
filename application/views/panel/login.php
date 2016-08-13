<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title><?php echo  $title; ?></title>
        <meta name="author" content="irwansyah">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="<?php echo base_url();?>index.php/login/proseslogin" method="POST">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="nik" class="form-control" placeholder="NIP/NIK Pegawai" autofocus required/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password" required />
                    </div> 
                </div>


                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Login</button>  
                </div>
            </form>
			
			<br />
			<br />
			
		<center>
			<div class="alert alert-error">
           <button type="button" class="close" data-dismiss="alert">&times;</button>
           <?php echo $this->session->flashdata('message'); ?>
           </div>
		</center>
        </div>

        <script src="<?php echo base_url();?>assets/admin/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>