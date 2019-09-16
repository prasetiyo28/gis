<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		
	}
	public function auth()
	{
		$userLogin = $this->getUserLogin($this->input->post('identity'));

		if( $userLogin ) 
		{
			if ( password_verify($this->input->post('password'), $userLogin->password) ) 
			{
				$user_session = array(
					'admin_login' => TRUE,
					'ID' => $userLogin->ID,
					'user' => $userLogin
				);	

				$this->session->set_userdata( $user_session );

				redirect(base_url('Admin'));
			}

			else {
				$this->session->set_flashdata('message', 'Kombinasi Username/E-Mail dan Password tidak cocok.');
				redirect('Login');
			}
		} else {

			$industri = $this->db->get_where('industri',array(
				'email' => $this->input->post('identity'),
				'password'=>md5($this->input->post('password')),
				'verifikasi'=>'1'
			))->row();

			if ($industri != '') {
				$user_session = array(

					'ID' => $industri->ID,
					'name' => $industri->name,
					'telp' => $industri->telp,
					'email' => $industri->email,
					'password' => $industri->password,
					'alamat' => $industri->address,
				);	

				$this->session->set_userdata($user_session);
				// echo json_encode($industri);
				redirect('Industri');

			}else{
				$dinas = $this->db->get_where('dinas',array('email' => $this->input->post('identity'), 'password'=>md5($this->input->post('password'))))->row();

				if ($dinas != '') {
					$user_session = array(
						'ID' => $dinas->ID,
						'name' => $dinas->name,
						'email' => $dinas->email,
						'password' => $dinas->password,

					);	

					$this->session->set_userdata($user_session);
				// echo json_encode($industri);
					redirect('Dinas');

				}else{

					$this->session->set_flashdata('message', 'Mohon Masukkan Username/E-Mail dan Password.');
					redirect('Login');
				}
			}
		}
	}

	public function getUserLogin($identity = '')
	{
		if (filter_var($identity, FILTER_VALIDATE_EMAIL)) 
		{
			return $this->db->get_where('users', array('email' => $identity))->row();
		} else {
			return $this->db->get_where('users', array('username' => $identity))->row();
		}
	}




	public function Register(){
		$this->load->model('madmin');
		$this->madmin->registerIndustri();

		redirect('/');
	}


	public function signout()
	{
		$this->session->set_flashdata('message', 'Anda berhasil keluar.');
		$this->session->sess_destroy();

		redirect(base_url());
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */