<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('industri/header', $this->data);
?>
<div class="page-header">
	<h1>Data Produk</h1>
	<form action="" method="get">
   <div class="col-md-4 pull-right">
     <div class="input-group" style="margin-top: -30px;">
       <input id="input-calendar" type="text" name="q" class="form-control" value="<?php echo $this->input->get('q') ?>" placeholder="Pencarian..">
       <span class="input-group-addon"><i class="fa fa-search"></i></span>
     </div>
   </div>
 </form>
</div>
<table class="table table-striped">
 <thead>
  <tr>
   <th>No.</th>
   <th class="text-center">Nama</th>
   <th class="text-center">Mulai</th>
   <th class="text-center">Sampai</th>

   <th class="text-center">Deskripsi</th>
 </tr>
</thead>
<tbody>
  <?php foreach( $produk as $row) : ?>
    <tr>
     <td><?php echo ++$this->page ?>.</td>
     <td class="td-action" width="250">
      <?php echo $row->name ?>
      <div class="button-action">
        <a href="<?php echo base_url('industri/updateproduk/'.$row->id_product); ?>">Edit</a> |
        <a href="#" data-id="<?php echo $row->id_product ?>" class="text-danger delete-product">Hapus</a>
      </div>	
    </td>
    <td><?php echo $row->froms ?></td>
    <td><?php echo $row->untils ?></td>


    <td width="200"><small><?php echo word_limiter($row->description, 15) ?></small></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php if(!$produk) : ?>
  <div class="col-md-5 col-md-offset-3">
   <div class="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Maaf!</strong> Data yang anda cari tidak ditemukan.
  </div>
</div>
<?php endif; ?>
<div class="text-center" style="margin-bottom: 50px;">
	<?php echo $this->pagination->create_links(); ?>
</div>
<?php
$this->load->view('industri/footer', $this->data);


/* End of file data-hotel.php */
/* Location: ./application/views/data-hotel.php */