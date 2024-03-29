<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('headerAdmin', $this->data);

// $amenities = @explode(', ', $industri->amenities);
?>
<div class="page-header">
  <h1>Update Industri</h1>
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
    <label class="col-sm-2 control-label">Nama :</label>
    <div class="col-sm-8">
      <input type="text" name="name" class="form-control" value="<?php echo $industri->name ?>" placeholder="">
      <p class="help-block"><?php  echo form_error('name', '<small class="text-red">', '</small>'); ?></p>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Skala Industri :</label>
    <div class="col-sm-5">
      <?php foreach($this->db->get('categories')->result() as $key => $row) : ?>
      <div class="checkbox checkbox-info checkbox-inline">
        <input type="checkbox" value="<?php echo $row->category_id; ?>" name="categories[<?php echo $key ?>]" <?php if($this->madmin->categoryIndustri($industri->ID, $row->category_id)) echo 'checked' ?>>
        <label> <?php echo $row->name; ?></label>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Telp :</label>
  <div class="col-sm-5">
    <input type="text" name="telp" class="form-control" value="<?php echo $industri->telp ?>">
    <p class="help-block"><?php  echo form_error('telp', '<small class="text-red">', '</small>'); ?></p>
  </div>
</div>

<div class="form-group">
  <label class="col-sm-2 control-label">Koordinat :</label>
  <div class="col-sm-4">
    <div class="input-group">
      <input id="input-calendar" type="text" name="latitude" class="form-control" value="<?php echo $industri->latitude ?>" placeholder="latitude">
      <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
    </div>
    <p class="help-block"><?php echo form_error('latitude', '<small class="text-red">', '</small>'); ?></p>
  </div>
  <div class="col-sm-4">
    <div class="input-group">
      <input id="input-calendar" type="text" name="longitude" class="form-control" value="<?php echo $industri->longitude ?>" placeholder="longitude">
      <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
    </div>
    <p class="help-block"><?php echo form_error('longitude', '<small class="text-red">', '</small>'); ?></p>
  </div>
  <div class="col-sm-8 col-md-offset-2">
    <?php echo $map['html'] ?>
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Foto :</label>
  <div class="col-sm-4">
   <input type="file" name="photo" class="form-control">
 </div>
 <div class="col-md-4">
  <?php if($industri->photo != '') : ?>
    <img src="<?php echo base_url("public/image/{$industri->photo}") ?>" height="150">
  <?php endif; ?>
</div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Alamat :</label>
  <div class="col-sm-8">
    <textarea name="alamat" class="form-control" rows="3"><?php echo $industri->address ?></textarea>
    <p class="help-block"><?php echo form_error('alamat', '<small class="text-red">', '</small>'); ?></p>
  </div>
</div>
<div class="form-group">
  <label class="col-sm-2 control-label">Deskripsi :</label>
  <div class="col-sm-8">
    <textarea name="description" class="form-control" rows="8"><?php echo $industri->description ?></textarea>
    <p class="help-block"><?php echo form_error('description', '<small class="text-red">', '</small>'); ?></p>
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


/* End of file update-industri.php */
/* Location: ./application/views/update-industri.php */