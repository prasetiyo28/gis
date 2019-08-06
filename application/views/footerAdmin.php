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
					<p class="text-center"><small>GIS Industri Mebel - DIV Teknik Informatika</small></p>
				</div>
			</div>
		</div>
	</footer>

	<div class="modal fade" id="modal-alert">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<p><?php echo $this->session->flashdata('message') ?></p>
				</div>
			</div>
		</div>
	</div>


	<div class="modal" id="modal-delete">
		<div class="modal-dialog modal-sm modal-danger">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><i class="fa fa-info-circle"></i> Hapus!</h4>
					<span>Hapus data ini dari database?</span>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
					<a href="#" id="btn-yes" class="btn btn-danger">Hapus</a>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modal-reset">
		<div class="modal-dialog modal-sm modal-danger">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><i class="fa fa-info-circle"></i> Reset Password!</h4>
					<span>Apakah anda yakin untu reset password?</span>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
					<a href="#" id="btn-yes" class="btn btn-danger">reset</a>
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modal-verif">
		<div class="modal-dialog modal-sm modal-danger">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title"><i class="fa fa-info-circle"></i> Verifikasi</h4>
					<span>Verifikasi Industri ini?</span>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
					<a href="#" id="btn-yes" class="btn btn-success">verifikasi</a>
				</div>
			</div>
		</div>
	</div>
	<script>
		function detail_hotel(param) 
		{
			$('div#modal-id').modal('show');
		}
		function setMapToForm(latitude, longitude) 
		{
			$('input[name="latitude"]').val(latitude);
			$('input[name="longitude"]').val(longitude);
		}
		$(document).ready(function() {
			var base_url = '<?php echo base_url() ?>';
			$("#sidebar-sticker").sticky({topSpacing:70});
			<?php if($this->session->flashdata('message')) : ?>
				$('div#modal-alert').modal('show');
			<?php endif; ?>

			$('a.delete-hotel').on('click', function() 
			{
				var ID = $(this).data('id');

				$('#modal-delete').modal('show');
				$('a#btn-yes').attr('href', base_url + 'admin/deleteindustri/' + ID);
			});

			$('a.reset-industri').on('click', function() 
			{
				var ID = $(this).data('id');

				$('#modal-reset').modal('show');
				$('a#btn-yes').attr('href', base_url + 'admin/reset_password/' + ID);
			});

			$('a.delete-artikel').on('click', function() 
			{
				var ID = $(this).data('id');

				$('#modal-delete').modal('show');
				$('a#btn-yes').attr('href', base_url + 'admin/deleteArtikel/' + ID);
			});

			$('a.delete-bantuan').on('click', function() 
			{
				var ID = $(this).data('id');

				$('#modal-delete').modal('show');
				$('a#btn-yes').attr('href', base_url + 'admin/deletebantuan/' + ID);
			});


			$('a.verif-industri').on('click', function() 
			{
				var ID = $(this).data('id');

				$('#modal-verif').modal('show');
				$('a#btn-yes').attr('href', base_url + 'admin/verifiindustri/' + ID);
			});
		});
	</script>
</body>
</html>