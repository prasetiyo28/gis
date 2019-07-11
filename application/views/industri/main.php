<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('industri/header', $this->data);
?>
<div class="page-header">
	<h1>Home</h1>
</div>
<h1>Selamat Datang <?php echo $this->session->userdata('name'); ?> !	</h1>

<?php
$this->load->view('industri/footer', $this->data);

/* End of file main-admin.php */
/* Location: ./application/views/main-admin.php */