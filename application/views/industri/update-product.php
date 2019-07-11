<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('industri/header', $this->data);
?>
<div class="page-header">
    <h1>Tambah Produk</h1>
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
            <input type="text" name="name" class="form-control" value="<?php echo $produk->name ?>" placeholder="">
            <p class="help-block"><?php  echo form_error('name', '<small class="text-red">', '</small>'); ?></p>
        </div>
    </div>

    
    <div class="form-group">
        <label class="col-sm-2 control-label">Harga :</label>
        <div class="col-sm-4">
            <div class="input-group">
                <input id="input-calendar" type="text" name="mulai" class="form-control" placeholder="mulai dar Rp..." value="<?php echo $produk->froms ?>">
                <span class="input-group-addon"><i class="fa fa-money   "></i></span>
            </div>
            <p class="help-block"><?php echo form_error('mulai', '<small class="text-red">', '</small>'); ?></p>
        </div>
        <div class="col-sm-4">
            <div class="input-group">
                <input id="input-calendar" type="text" name="sampai" class="form-control" placeholder="sampai Rp..." value="<?php echo $produk->untils ?>">
                <span class="input-group-addon"><i class="fa fa-money"></i></span>
            </div>
            <p class="help-block"><?php echo form_error('sampai', '<small class="text-red">', '</small>'); ?></p>
        </div>

    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Foto :</label>
        <div class="col-sm-5">
           <input type="file" name="photo" class="form-control">
       </div>
       <div class="col-md-4">
        <?php if($produk->photo != '') : ?>
            <img src="<?php echo base_url("public/image/{$produk->photo}") ?>" height="150">
        <?php endif; ?>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2 control-label">Deskripsi :</label>
    <div class="col-sm-8">
        <textarea name="description" class="form-control" rows="8"><?php echo $produk->description ?></textarea>
        <p class="help-block"><?php echo form_error('description', '<small class="text-red">', '</small>'); ?></p>
    </div>
</div>
<div class="form-group" style="margin-bottom: 50px;">
    <div class="col-sm-6 col-md-offset-3">
        <button type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-save"></i> Update</button>
    </div>
</div>
</form>
<?php
$this->load->view('industri/footer', $this->data);


/* End of file add-industri.php */
/* Location: ./application/views/add-industri.php */