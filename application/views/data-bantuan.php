<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('headerAdmin', $this->data);
?>
<div class="page-header">
	<h1>Data Bantuan</h1>
  <a href="<?php echo base_url() ?>admin/addBantuan" class="btn btn-info">Tambah Bantuan</a>
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
    <th class="text-center">Pertanyaan</th>
    <th class="text-center">Jawaban</th>


  </tr>
</thead>
<tbody>
  <?php foreach( $bantuan as $row) : ?>
    <tr style="text-align: center;">
     <td><?php echo ++$this->page ?>.</td>
     <td class="td-action">
      <?php echo $row->question ?>
      <div class="button-action">
        <a href="<?php echo base_url('admin/updatebantuan/'.$row->ID); ?>">Edit</a> |
        <a href="#" data-id="<?php echo $row->ID ?>" class="text-danger delete-bantuan">Hapus</a>
      </div>	
    </td>
    <td width="250"><small><?php echo word_limiter($row->answer, 15) ?></small></td>
    
  </tr>
<?php endforeach; ?>
</tbody>
</table>
<?php if(!$bantuan) : ?>
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