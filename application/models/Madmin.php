<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->library(array('upload','session'));
	}
	
	public function createIndustri()
	{
		$config['upload_path'] = './public/image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
		
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('photo'))
		{
			$photo = ""; 
			$this->session->set_flashdata('message', $this->upload->display_errors());
		} else{
			$photo = $this->upload->file_name;
		}

		$object = array(
			'name' => $this->input->post('name'),
			'telp' => $this->input->post('telp'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'address' => $this->input->post('alamat'),
			'photo' => $photo,
			// 'amenities' => @implode(", ", @$this->input->post('amenities')),
			'description' => $this->input->post('description'),
			'email' => $this->input->post('email'),
			'password' => md5('industri12345')
		);

		$this->db->insert('industri', $object);

		$IDIndustri = $this->db->insert_id();

		if( is_array($this->input->post('categories')) )
		{
			$this->db->where('industri_id', $IDIndustri)
			->where_not_in('category_id', $this->input->post('categories'))
			->delete('industricategories');
			foreach ($this->input->post('categories') as $key => $value) 
			{
				$this->db->insert('industricategories', array(
					'industri_id' => $IDIndustri,
					'category_id' => $value
				));
			}
		}

		$this->session->set_flashdata('message', "Data Industri berhasil ditambahkan");
	}

	public function createProduk()
	{
		$config['upload_path'] = './public/image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
		
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('photo'))
		{
			$photo = ""; 
			$this->session->set_flashdata('message', $this->upload->display_errors());
		} else{
			$photo = $this->upload->file_name;
		}

		$object = array(
			'id_industri' => $this->session->userdata('ID'),
			'name' => $this->input->post('name'),
			'froms' => $this->input->post('mulai'),
			'untils' => $this->input->post('sampai'),
			'photo' => $photo,
			'description' => $this->input->post('description')
		);

		$this->db->insert('product', $object);

		

		$this->session->set_flashdata('message', "Data Product berhasil ditambahkan");
	}

	public function getIndustri($param = 0)
	{
		return $this->db->get_where('industri', array('ID' => $param) )->row();
	}

	public function getProduk($param = 0)
	{
		return $this->db->get_where('product', array('id_product' => $param) )->row();
	}

	public function categoryIndustri($industri = 0, $category = 0)
	{
		return $this->db->get_where('industricategories', array('industri_id' => $industri, 'category_id' => $category) )->row();
	}

	public function updateIndustri($param = 0)
	{
		$industri = $this->getIndustri($param);

		$config['upload_path'] = './public/image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
		
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('photo'))
		{
			$photo = $industri->photo; 
			$this->session->set_flashdata('message', $this->upload->display_errors());
		} else{
			$photo = $this->upload->file_name;
		}

		$object = array(
			'name' => $this->input->post('name'),
			'telp' => $this->input->post('telp'),
			'latitude' => $this->input->post('latitude'),
			'longitude' => $this->input->post('longitude'),
			'address' => $this->input->post('alamat'),
			'photo' => $photo,
			'description' => $this->input->post('description')
		);

		$this->db->update('industri', $object, array('ID' => $param));

		if( is_array($this->input->post('categories')) )
		{
			$this->db->where('industri_id', $param)
			->where_not_in('category_id', $this->input->post('categories'))
			->delete('industricategories');
			foreach ($this->input->post('categories') as $key => $value) 
			{
				$this->db->insert('industricategories', array(
					'industri_id' => $param,
					'category_id' => $value
				));
			}
		} else {
			$this->db->where('industri_id', $param)
			->where_not_in('category_id', $this->input->post('categories'))
			->delete('industricategories');
		}

		$this->session->set_flashdata('message', "Perubahan berhasil disimpan");
	}

	public function updateProduk($param = 0)
	{
		$product = $this->getProduk($param);

		$config['upload_path'] = './public/image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width']  = 1024*3;
		$config['max_height']  = 768*3;
		
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('photo'))
		{
			$photo = $product->photo; 
			$this->session->set_flashdata('message', $this->upload->display_errors());
		} else{
			$photo = $this->upload->file_name;
		}

		$object = array(
			'name' => $this->input->post('name'),
			'froms' => $this->input->post('mulai'),
			'untils' => $this->input->post('sampai'),
			'photo' => $photo,
			'description' => $this->input->post('description')
		);

		$this->db->update('product', $object, array('id_product' => $param));
		$this->session->set_flashdata('message', "Perubahan berhasil disimpan");
	}

	public function getAllIndustri($limit = 10, $offset = 0, $type = 'result')
	{
		if( $this->input->get('q') != '')
			$this->db->like('name', $this->input->get('q'));

		$this->db->order_by('ID', 'desc');

		if($type == 'num')
		{
			return $this->db->get('industri')->num_rows();
		} else {
			return $this->db->get('industri', $limit, $offset)->result();
		}
	}

	public function getAllProduk($limit = 10, $offset = 0, $type = 'result')
	{
		if( $this->input->get('q') != '')
			$this->db->like('name', $this->input->get('q'));

		$this->db->order_by('id_product', 'desc');

		if($type == 'num')
		{
			$this->db->where('id_industri',$this->session->userdata('ID'));
			return $this->db->get('product')->num_rows();
		} else {
			$this->db->where('id_industri',$this->session->userdata('ID'));
			return $this->db->get('product', $limit, $offset)->result();
		}
	}

	public function deleteIndustri($param = 0)
	{
		$industri = $this->getIndustri($param);

		if( $industri->photo != '')
			@unlink(".pulbic/image/{$industri->photo}");

		$this->db->delete('industri', array('ID' => $param));
		$this->db->delete('industricategories', array('industri_id' => $param));

		$this->session->set_flashdata('message', "Data Industri berhasil dihapus");
	}

	public function setAccount()
	{
		$user = $this->getAccount();

		$object = array(
			'fullname' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email')
		);

		if( $this->input->post('new_pass') != '')
			$object['password'] = password_hash($this->input->post('new_pass'), PASSWORD_DEFAULT);
		
		$this->db->update('users', $object, array('ID' => $user->ID));

		$this->session->set_flashdata('message', "Perubahan berhasil disimpan.");
	}

	public function setAccountIndustri()
	{
		$user = $this->getAccountIndustri();

		$object = array(
			'name' => $this->input->post('name'),
			'karyawan' => $this->input->post('karyawan'),
			'email' => $this->input->post('email')
		);

		if( $this->input->post('new_pass') != ''){
			$object['password'] = md5($this->input->post('new_pass'));
		}
		
		$this->db->update('industri', $object, array('ID' => $user->ID));

		$this->session->set_flashdata('message', "Perubahan berhasil disimpan.");
	}

	public function getAccount()
	{
		return $this->db->get_where('users', array('ID' => $this->session->userdata('user')->ID) )->row();
	}

	public function getAccountIndustri()
	{
		return $this->db->get_where('industri', array('ID' => $this->session->userdata('ID')) )->row();
	}
}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */