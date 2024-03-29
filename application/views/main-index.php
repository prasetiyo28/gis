<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $title; ?></title>
	<link href="<?php echo base_url('public/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/normalize.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/template.css?v='.md5(date('YmdHis'))) ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/css/hover-min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('public/bootstrap-checkbox/awesome-bootstrap-checkbox.min.css') ?>" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url('public/js/jquery-3.2.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('public/js/jquery.sticky.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('public/bootstrap/js/bootstrap.min.js') ?>"></script>
	<?php echo $map['js'] ?>
	<?php if(isset($peta['js'])) echo $peta['js']; ?>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a class="navbar-brand" href="<?php echo base_url() ?>">GIS Industri Meubel Kab. Tegal</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-button navbar-nav navbar-right">
					<!-- <li>
						<?php if($this->session->has_userdata('admin_login') == FALSE) : ?>
							<a data-toggle="modal" href='#modalLogin' class="hvr-rotate" title="Lgoin">
								<i class="fa fa-sign-in"></i> Login
							</a>
							<?php else : ?>
								<a href="<?php echo base_url('admin') ?>" class="hvr-rotate" title="Lgoin">
									<i class="fa fa-sign-in"></i> Kembali ke Administrator
								</a>
							<?php endif; ?>
						</li> -->
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url() ?>" class="hvr-underline-reveal">Home</a></li>
						<li><a href="<?php echo base_url() ?>Frontend/grafik" class="hvr-underline-reveal">Grafik</a></li>
						<li><a href="<?php echo base_url() ?>Frontend/berita" class="hvr-underline-reveal">Berita</a></li>
						<li><a href="<?php echo base_url() ?>Frontend/bantuan" class="hvr-underline-reveal">Bantuan</a></li>

					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid top20px">
			<div class="row">
				<div class="col-md-2" style="margin-top: 70px;">
					<form action="" method="get">
						<div class="form-group">
							<label for="">Kata Kunci :</label>
							<input type="text" name="q" value="<?php echo $this->input->get('q') ?>" class="form-control" id="place-input">
						</div>
						<?php if($this->db->get('categories')->num_rows()) : ?>
						<div class="form-group">
							<label>Kategori :</label>
							<?php foreach($this->db->get('categories')->result() as $key => $row) : ?>
							<div class="checkbox checkbox-info">
								<input type="checkbox" value="<?php echo $row->category_id; ?>" name="categories[<?php echo $key ?>]" <?php if((int)@in_array($row->category_id, $this->input->get('categories')) AND @is_array($this->input->get('categories'))) echo 'checked'; ?>>
								<label> <?php echo $row->name; ?></label>
							</div>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
				<div class="form-group">
		    	<!-- <label for="">Rentan Tarif :</label>
		    	<select name="price" id="input" class="form-control">
		    		<option value="">~ SEMUA ~</option>
		    		<option value="<100K" <?php if($this->input->get('price') == '<100K') echo 'selected'; ?>>< 100K</option>
		    		<option value="100K-300K" <?php if($this->input->get('price') == '100K-300K') echo 'selected'; ?>>100K s/d 300K</option>
		    		<option value="300K-500K" <?php if($this->input->get('price') == '300K-500K') echo 'selected'; ?>>300K s/d 500K</option>
		    		<option value="500K" <?php if($this->input->get('price') == '500K') echo 'selected'; ?>> >500K</option>
		    	</select> -->
		    </div>
		    <div class="form-group">
		    	<button class="btn btn-warning btn-block"><i class="fa fa-search"></i> Cari Lokasi Meubel</button>
		    </div>
		    <div id="directionsDiv"></div>
		</form>
	</div>
	<div class="col-md-10">
		<div class="map-view"><?php echo $map['html'] ?></div>
		<div id="directionsDiv"></div>
	</div>
</div>
</div>
<footer class="page-break-top">
	<div class="footer-divider"></div>
	<div class="container">
		<div class="row">
			<div class="clearfix page-break-top"></div>
			<div class="hr5"></div>
			<div class="col-md-12">
				<p class="text-center"><small>GIS Industri Mebel 2019 - DIV Politeknik Harapan Bersama</small> 		<?php if($this->session->has_userdata('admin_login') == FALSE) : ?>
				<!-- <a data-toggle="modal" href='#modalLogin' class="hvr-rotate" style="float: right;" title="Lgoin">
					<i class="fa fa-sign-in"></i> Login
				</a> -->
				<?php else : ?>
					<a href="<?php echo base_url('admin') ?>" class="hvr-rotate" title="Lgoin">
						<i class="fa fa-sign-in"></i> Kembali ke Administrator
					</a>
					<?php endif; ?></p>
				</div>
			</div>
		</div>
	</footer>
	<div class="modal fade" id="modalLogin">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Login</h4>
				</div>
				<form action="<?php echo base_url('user/auth') ?>" method="POST" role="form">
					<div class="modal-body">
						<div class="form-group">
							<label for="">Username / E-Mail :</label>
							<input type="text" class="form-control" name="identity" required>
						</div>
						<div class="form-group">
							<label for="">Password :</label>
							<input type="password" class="form-control" name="password" required>
						</div>
						Industri anda belum terdaftar  ?<a data-dismiss="modal" data-toggle="modal" href='#modalRegister' class="hvr-rotate" title="Register">daftar disini</a>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="modal fade" id="modalRegister" style="overflow-y:auto;">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Register</h4>
				</div>
				<form action="<?php echo base_url('user/register') ?>" method="POST" role="form" enctype="multipart/form-data">
					<div class="modal-body">
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
						<input type="text" class="form-control" pattern="[A-Za-z]" name="owner" required>
					</div>

					<div class="form-group">
						<label for="">Ktp Pemilik</label>
						<input type="file" class="form-control" accept="image/*" name="ktp" required>
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
						<input type="file" class="form-control" accept="image/*" name="photo" required>
					</div>



				</div>


				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Register</button>
				</div>
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


<script>
	function detail_hotel(param) 
	{
		$('div#modal-id').modal('show');
	}
	$(document).ready(function() {
		<?php if($this->session->flashdata('message')) : ?>
			$('div#modal-alert').modal('show');
		<?php endif; ?>
	});

	function setMapToForm(latitude, longitude) 
	{
		$('input[name="latitude"]').val(latitude);
		$('input[name="longitude"]').val(longitude);
	}

</script>
</body>
</html>