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

	<?php if(isset($peta['js'])) echo $peta['js']; ?>
</head>	
<body style="margin-top: 50px; padding-bottom: 50px">
	
	<center>
		<h1>Register</h1>
		<div class="container container-table">
			<div class="row vertical-center-row">
				<div class="text-center col-md-8 col-md-offset-2"  style="background-color: white; border: 1px solid #ccc;
				border-radius: 15px;  ">
				
				<form action="<?php echo base_url('user/register') ?>" method="POST" role="form" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Nama Industri</label>
						<input type="text" class="form-control" name="name" required>
					</div>
					<div class="form-group">
						<label for="">Kategori Industri</label>
						<?php foreach($this->db->get('categories')->result() as $key => $row) : ?>
						<div class="checkbox checkbox-info checkbox-inline">
							<input type="checkbox" value="<?php echo $row->category_id; ?>" name="categories[<?php echo $key ?>]">
							<label> <?php echo $row->name; ?></label>
						</div>
					<?php endforeach ?>
				</div>
				<div class="form-group">
					<label for="">Nama Pemilik</label>
					<input type="text" class="form-control" pattern="[A-Za-z]+" name="owner" required>
				</div>

				<div class="form-group">
					<label for="">Ktp Pemilik</label>
					<input type="file" class="form-control" pattern="[0-9]" name="ktp" required>
				</div>

				<div class="form-group">
					<label for="">Surat Izin Usaha (*Jika Ada)</label>
					<input type="file" class="form-control" accept="image/*" name="siup">
				</div>

				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" name="email" required>
				</div>

				<div class="form-group">
					<label for="">Password :</label>
					<input type="password" class="form-control" name="password" required>
				</div>

				<div class="form-group">
					<label for="">Telp</label>
					<input type="telp" class="form-control" name="telp" required>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Koordinat :</label>
					<div class="col-sm-4">
						<div class="input-group">
							<input id="input-calendar" type="text" name="latitude" class="form-control"  placeholder="latitude">
							<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
						</div>

					</div>
					<div class="col-sm-4">
						<div class="input-group">
							<input id="input-calendar" type="text" name="longitude" class="form-control" placeholder="longitude">
							<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
						</div>

					</div>
					<div class="col-md-offset-2">
						<?php echo $peta['html'] ?><br>
					</div>
				</div>
				<div class="form-group">
					<label for="">Alamat</label>
					<textarea type="text" class="form-control" name="alamat" required></textarea>
				</div>
				<div class="form-group">
					<label for="">Deskripsi</label>
					<input type="text" class="form-control" name="deskripsi" required>
				</div>
				<div class="form-group">
					<label for="">Foto</label>
					<input type="file" class="form-control" name="photo" required>
				</div>




				<!-- <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button> -->
				<button type="submit" class="btn btn-primary btn-block">Register</button>

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