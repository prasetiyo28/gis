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

	public function getHitung($param)
	{
		$this->db->group_by('industri.ID');
		$this->db->where('industricategories.category_id',$param);
		$this->db->join('industricategories','industri.ID = industricategories.industri_id');
		return $this->db->get('industri')->num_rows();
	}

	public function getHitung_pendapatan()
	{
		$this->db->join('industricategories','industri.ID = industricategories.industri_id');
		return $this->db->get('industri')->result();
	}

	public function reset_pass($email,$data)
	{
		$this->db->set($data);
		$this->db->where('email',$email);
		$this->db->update('industri');
	}

}