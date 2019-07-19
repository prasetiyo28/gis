<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Dinas extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('googlemaps','session','form_validation','pagination'));

		$this->load->helper(array('menus','text','url'));


		
		$this->load->model('madmin');

		$this->page = $this->input->get('page');
	}

	public function index()
	{
		$this->data = array(
			'title' => "Dinas | Home"
		);	

		$this->load->view('dinas/main', $this->data);

	}

	public function addproduk()
	{	
		$this->data['title'] = "Tambah Product Mebel";



		$this->form_validation->set_rules('name', 'Nama', 'trim|required');

		$this->form_validation->set_rules('mulai', 'mulai', 'trim|required');
		$this->form_validation->set_rules('sampai', 'sampai', 'trim|required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'trim|required');
		if ($this->form_validation->run() == TRUE)
		{

			$this->madmin->createProduk();

			redirect(current_url());
		}


		
		$this->load->view('dinas/add-product', $this->data);
	}

	public function produk()
	{
		$config['base_url'] = site_url("dinas/produk?per_page={$this->input->get('per_page')}&query={$this->input->get('q')}");

		$config['per_page'] = 10;
		$config['total_rows'] = $this->madmin->getAllProduk(null, null, 'num');
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = "&larr; Pertama";
		$config['first_tag_open'] = '<li class="">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = "Terakhir &raquo";
		$config['last_tag_open'] = '<li class="">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = "Selanjutnya &rarr;";
		$config['next_tag_open'] = '<li class="">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = "&larr; Sebelumnya"; 
		$config['prev_tag_open'] = '<li class="">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="">';
		$config['num_tag_close'] = '</li>'; 
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';
		
		$this->pagination->initialize($config);
		
		
		$this->data = array(
			'title' => "dinas | Data Produk",
			'produk' => $this->madmin->getAllProduk($config['per_page'], $this->input->get('page'), 'result')
		);

		$this->load->view('dinas/data-product', $this->data);
		// echo json_encode($this->data);
		// echo json_encode($config);
	}

	public function industri()
	{
		$config['base_url'] = site_url("Dinas/industri?per_page={$this->input->get('per_page')}&query={$this->input->get('q')}");

		$config['per_page'] = 10;
		$config['total_rows'] = $this->madmin->getAllIndustri(null, null, 'num');
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = "&larr; Pertama";
		$config['first_tag_open'] = '<li class="">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = "Terakhir &raquo";
		$config['last_tag_open'] = '<li class="">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = "Selanjutnya &rarr;";
		$config['next_tag_open'] = '<li class="">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = "&larr; Sebelumnya"; 
		$config['prev_tag_open'] = '<li class="">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="">';
		$config['num_tag_close'] = '</li>'; 
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';
		
		$this->pagination->initialize($config);
		
		
		$this->data = array(
			'title' => "Data Industri",
			'industri' => $this->madmin->getAllIndustri($config['per_page'], $this->input->get('page'), 'result')
		);

		$this->load->view('dinas/data-industri', $this->data);
		// echo json_encode($this->data);
		// echo json_encode($config);
	}

	public function cetak()
	{
		$data['industri'] = $this->madmin->getAllIndustri_laporan();
		$this->load->view('dinas/cetaklaporan',$data);
		
	}

	public function updateproduk($param = 0)
	{
		$this->data['title'] = "Update Produk";

		$this->form_validation->set_rules('name', 'Nama', 'trim|required');
		$this->form_validation->set_rules('mulai', 'Mulai', 'trim|required');
		$this->form_validation->set_rules('sampai', 'Sampai', 'trim|required');
		$this->form_validation->set_rules('description', 'Deskripsi', 'trim|required');
		if ($this->form_validation->run() == TRUE)
		{
			$this->madmin->updateProduk($param);

			redirect(current_url());
		}

		$this->data['produk'] = $this->madmin->getProduk($param);
		$this->load->view('dinas/update-product', $this->data);
	}

	public function account()
	{
		$this->data = array(
			'title' => "Pengaturan Akun",
			'user' => $this->madmin->getAccountdinas($this->session->userdata('ID'))
		);	
		$this->form_validation->set_rules('name', 'Nama Lengkap', 'trim|required');
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|valid_email|required');
		// $this->form_validation->set_rules('new_pass', 'Password Baru', 'trim|min_length[6]|max_length[12]');
		// $this->form_validation->set_rules('old_pass', 'Password Lama', 'trim|required|callback_validate_password');
		if ($this->form_validation->run() == TRUE) 
		{
			$this->madmin->setAccountdinas();
			
			redirect(current_url());
		}
		$this->load->view('dinas/account', $this->data);
	}
}

/* End of file dinas.php */
/* Location: ./application/controllers/dinas.php */