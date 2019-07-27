<?php 


class Mfrontend extends CI_Model 
{

	public function getIndustri($param = 0)
	{
		return $this->db->get_where('industri', array('ID' => $param) )->row();
	}

	public function getArtikel($param = 0)
	{
		return $this->db->get('artikel')->result();
	}
	public function getBantuan($param = 0)
	{
		return $this->db->get('bantuan')->result();
	}

	public function getProductIndustri($param = 0)
	{
		return $this->db->get_where('product', array('id_industri' => $param) )->result();
	}

	public function getHitung($param = 0)
	{
		return $this->db->get_where('industricategories', array('category_id' => $param) )->num_rows();
	}

}