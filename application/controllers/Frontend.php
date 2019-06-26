<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Mfrontend');
	}

	public function index()
	{
		$this->load->view('frontend/default');

	}

	public function detail($id){
		$data['industri'] = $this->Mfrontend->getIndustri($id);
		$data['product'] = $this->Mfrontend->getProductIndustri($id);
		$this->load->view('frontend/default',$data);	
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */