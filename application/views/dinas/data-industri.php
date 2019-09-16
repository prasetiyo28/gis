<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('dinas/header', $this->data);
?>
<div class="page-header">
	<h1>Data Industri</h1>

  <div class="col-md-4">

    <form action="<?php echo base_url() ?>Dinas/cetak" method="post">
      <div class="form-group">
        <label for="">Kecamatan</label>
        <select name="kecamatan" class="form-control">
          <?php if (!empty($kecamatan)) { ?>

            <option value="<?php echo $kecamatan ?>">Kecamatan <?php echo $kecamatan ?></option>
          <?php } ?>
          <option value="">Tampilkan Semua</option>
          <option value="adiwerna">Kecamatan Adiwerna</option>
          <option value="balapulang">Kecamatan Balapulang</option>
          <option value="bojong">Kecamatan Bojong</option>
          <option value="bumijawa">Kecamatan Bumijawa</option>
          <option value="dukuhturi">Kecamatan Dukuhturi</option>
          <option value="dukuhwaru">Kecamatan Dukuhwaru</option>
          <option value="jatinegara">Kecamatan Jatinegara</option>
          <option value="kedung banteng">Kecamatan Kedung Banteng</option>
          <option value="kramat">Kecamatan Kramat</option>
          <option value="lebaksiu">Kecamatan Lebaksiu</option>
          <option value="margasari">Kecamatan Margasari</option>
          <option value="pagerbarang">Kecamatan Pagerbarang</option>
          <option value="pangkah">Kecamatan Pangkah</option>
          <option value="slawi">Kecamatan Slawi</option>
          <option value="surodadi">Kecamatan Surodadi</option>
          <option value="talang">Kecamatan Talang</option>
          <option value="tarub">Kecamatan Tarub</option>
          <option value="warurejo">Kecamatan Warurejo</option>

        </select>
      </div>
      <button class="btn btn-success btn-block">Cetak Laporan</button>
    </form>
  </div>

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

    </td>
    <td><?php echo $row->owner ?></td>
    <td width="100"><a href="<?php echo base_url() ?>/public/image/<?php echo $row->ktp ?>" target="_blank"><img width="100%" src="<?php echo base_url() ?>/public/image/<?php echo $row->ktp ?>"></a></td>
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