<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('headerAdmin', $this->data);
?>
<div class="page-header">
  <h1>Tambah Artikel</h1>
</div>
<form class="form-horizontal" action="<?php echo current_url(); ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <?php if($this->session->flashdata('message')) : ?>
      <div class="col-sm-8 col-md-offset-2">
        <div class="form-group">
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?php echo $this->session->flashdata('message'); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
  <div class="form-group">
   <label class="col-sm-2 control-label">Judul :</label>
   <div class="col-sm-8">
    <input type="text" name="title" class="form-control" value="<?php echo set_value('title') ?>" placeholder="">
    <p class="help-block"><?php  echo form_error('title', '<small class="text-red">', '</small>'); ?></p>
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Foto :</label>
  <div class="col-sm-5">
   <input type="file" name="photo" class="form-control">
 </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Konten :</label>
  <div class="col-sm-8">
    <textarea name="content" class="form-control" rows="8"><?php echo set_value('content') ?></textarea>
    <p class="help-block"><?php echo form_error('description', '<small class="text-red">', '</small>'); ?></p>
  </div>
</div>


<div class="form-group" style="margin-bottom: 50px;">
  <div class="col-sm-6 col-md-offset-3">
    <button type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-save"></i> Tambahkan</button>
  </div>
</div>
</form>
<?php
$this->load->view('footerAdmin', $this->data);


/* End of file add-industri.php */
/* Location: ./application/views/add-industri.php */