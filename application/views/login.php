<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/normalize.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/template.css?v='.md5(date('YmdHis'))) ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/hover-min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/bootstrap-checkbox/awesome-bootstrap-checkbox.min.css') ?>" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url('public/js/jquery-3.2.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('public/js/jquery.sticky.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>

</head>
<body style="margin-top: 150px;">
	
	<center>
		<h1>Login</h1>
		<div class="container container-table">
			<div class="row vertical-center-row">
				<div class="text-center col-md-4 col-md-offset-4"  style="background-color: white; border: 1px solid #ccc;
				border-radius: 15px;  ">
				<form action="<?php echo base_url('user/auth') ?>" method="POST" role="form">

					<div class="form-group">
						<label for="">Username / E-Mail :</label>
						<input type="text" class="form-control" name="identity" required>
					</div>
					<div class="form-group">
						<label for="">Password :</label>
						<input type="password" class="form-control" name="password" required>
					</div>
					Industri anda belum terdaftar  ?<a href='<?php echo base_url() ?>login/register' class="hvr-rotate" title="Register">daftar disini</a><br>

					<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
					<button type="submit" class="btn btn-primary btn-block">Login</button>
				</form>

			</div>
		</div>
	</div>
	
	<div class="modal fade" id="modal-alert">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><i class="fa fa-warning"></i> Perhatian!</h4>
					<p><?php echo $this->session->flashdata('message') ?></p>
				</div>
			</div>
		</div>
	</div>




</center>
<script>
	
	$(document).ready(function() {
		<?php if($this->session->flashdata('message')) : ?>
			$('div#modal-alert').modal('show');
		<?php endif; ?>
	});

	function setMapToForm(latitude, longitude) 
	{
		$('input[name="latitude"]').val(latitude);
		$('input[name="longitude"]').val(longitude);
		// $('input[name="longitude"]').val(longitude);
	}

</script>

</body>
</html>