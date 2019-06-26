<?php 


class Mfrontend extends CI_Model 
{

	public function getIndustri($param = 0)
	{
		return $this->db->get_where('industri', array('ID' => $param) )->row();
	}

	public function getProductIndustri($param = 0)
	{
		return $this->db->get_where('product', array('id_industri' => $param) )->result();
	}

}