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
		$this->load->view('Frontend/default');

	}

	public function berita()
	{
		$data['artikel'] = $this->Mfrontend->getArtikel();
		$this->load->view('Frontend/berita',$data);

	}

	public function bantuan()
	{
		$data['bantuan'] = $this->Mfrontend->getBantuan();
		$this->load->view('Frontend/bantuan',$data);

	}

	public function xyzplkghjytrtasetsg_reset($email)
	{
		$data['reset'] = $email;
		$this->load->view('Frontend/reset',$data);

	}

	public function reset_password(){
		$email = $this->input->post('email');
		$data['password'] = md5($this->input->post('password'));
		$this->Mfrontend->reset_pass($email,$data);
		// redirect('Frontend')
	}

	public function reset()
	{

		$this->load->view('Frontend/kirim_reset');

	}

	public function grafik()
	{
		$data['a'] = $this->Mfrontend->getHitung('1');
		$data['b'] = $this->Mfrontend->getHitung('2');	
		$data['bantuan'] = $this->Mfrontend->getBantuan();
		$this->load->view('Frontend/grafik',$data);

	}

	public function detail($id){
		$data['industri'] = $this->Mfrontend->getIndustri($id);
		$data['product'] = $this->Mfrontend->getProductIndustri($id);
		$this->load->view('Frontend/default',$data);	
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */