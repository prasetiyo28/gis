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

			$('a.delete-product').on('click', function() 
			{
				var ID = $(this).data('id');

				$('#modal-delete').modal('show');
				$('a#btn-yes').attr('href', base_url + 'Industri/deleteproduk/' + ID);
			});
		});
	</script>
</body>
</html>