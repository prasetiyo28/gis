<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('headerAdmin', $this->data);
?>
<div class="page-header">
	<h1>Data Industri</h1>
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
   <th class="text-center">Nama Pemilik</th>
   <th class="text-center">KTP</th>
   <th class="text-center">SIUP</th>
   <th class="text-center">Telp</th>
   <th class="text-center">Latitude</th>
   <th class="text-center">Longitude</th>
   <th class="text-center">Alamat</th>

   <th class="text-center">Deskripsi</th>
 </tr>
</thead>
<tbody>
  <?php foreach( $industri as $row) : ?>
    <tr>
     <td><?php echo ++$this->page ?>.</td>
     <td class="td-action" width="250">
      <?php echo $row->name ?>
      <div class="button-action">
        <?php if ($row->verifikasi == 0){ ?>
          <a class="verif-industri" href="#" data-id="<?php echo $row->ID; ?>">Verifikasi</a> |

        <?php } ?>
        <!-- <a href="<?php echo base_url('admin/updateindustri/'.$row->ID); ?>">Edit</a> | -->
        <a href="#" data-id="<?php echo $row->ID ?>" class="text-danger delete-hotel">Hapus</a> |
        <a href="#" data-id="<?php echo $row->ID ?>" class="text-danger reset-industri">Reset</a>
      </div>	
    </td>
    <td><?php echo $row->owner ?></td>
    <td width="100"><a href="<?php echo base_url() ?>/public/image/<?php echo $row->ktp ?>" target="_blank"><img width="100%" src="<?php echo base_url() ?>/public/image/<?php echo $row->ktp ?>"></a></td>
    <td width="100">
      <?php if ($row->siup=='Belum Ada' || $row->siup == ''): ?>
        Belum Ada
        <?php else: ?>
          <a href="<?php echo base_url() ?>/public/image/<?php echo $row->ktp ?>" target="_blank"><img width="100%" src="<?php echo base_url() ?>/public/image/<?php echo $row->siup ?>"></a>
        <?php endif ?>
      </td>
      <td><?php echo number_format($row->telp) ?></td>
      <td><?php echo $row->latitude ?></td>
      <td><?php echo $row->longitude ?></td>
      <td width="200"><small><?php echo word_limiter($row->address, 15) ?></small></td>

      <td width="200"><small><?php echo word_limiter($row->description, 15) ?></small></td>
    </tr>
  <?php endforeach; ?>
</tbody>
</table>
<?php if(!$industri) : ?>
  <div class="col-md-5 col-md-offset-3">
   <div class="alert">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Maa!</strong> Data yang anda cari tidak ditemukan.
  </div>
</div>
<?php endif; ?>
<div class="text-center" style="margin-bottom: 50px;">
	<?php echo $this->pagination->create_links(); ?>
</div>
<?php
$this->load->view('footerAdmin', $this->data);


/* End of file data-hotel.php */
/* Location: ./application/views/data-hotel.php */