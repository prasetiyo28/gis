<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('headerAdmin', $this->data);

// $amenities = @explode(', ', $artikel->amenities);
?>
<div class="page-header">
  <h1>Update Bantuan</h1>
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
    <label class="col-sm-2 control-label">Pertanyaan :</label>
    <div class="col-sm-8">
      <input type="text" name="question" class="form-control" value="<?php echo $bantuan->question ?>" placeholder="">
      <p class="help-block"><?php  echo form_error('question', '<small class="text-red">', '</small>'); ?></p>
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-2 control-label">Jawaban :</label>
    <div class="col-sm-8">
      <textarea name="answer" class="form-control" rows="8"><?php echo $bantuan->answer ?></textarea>
      <p class="help-block"><?php echo form_error('answer', '<small class="text-red">', '</small>'); ?></p>
    </div>
  </div>
  <div class="form-group" style="margin-bottom: 50px;">
    <div class="col-sm-6 col-md-offset-3">
      <button type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-save"></i> Simpan Perubahan</button>
    </div>
  </div>
</form>
<?php
$this->load->view('footerAdmin', $this->data);


/* End of file update-artikel.php */
/* Location: ./application/views/update-artikel.php */