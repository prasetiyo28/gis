<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('googlemaps','session'));
		$this->load->helper(array('menus','text','url'));
	}

	public function pass_yuk (){
		echo password_hash("admin",PASSWORD_DEFAULT);
	}

	public function register(){
		$this->load->view('frontend/register');
	}

	public function index()
	{
		$this->data['title'] = "SISTEM INFORMASI GIS";
		$config['center'] = '-6.880029,109.124192';
		$config['zoom'] = 'auto';
		$config['styles'] = array(
			array(
				"name"=>"No Businesses", 
				"definition"=> array(
					array(
						"featureType"=>"poi", 
						"stylers"=> array(
							array(
								"visibility"=>"off"
							)
						)
					)
				)
			)
		);
		$this->googlemaps->initialize($config);
		foreach($this->searchQuery() as $key => $value) :
			$marker = array();
			$marker['position'] = "{$value->latitude}, {$value->longitude}";

			$marker['animation'] = 'DROP';
			$marker['infowindow_content'] = '<div class="media" style="width:400px;">';
			$marker['infowindow_content'] .= '<div class="media-left">';
			$marker['infowindow_content'] .= '<img src="'.base_url("public/image/{$value->photo}").'" class="media-object" style="width:150px">';
			$marker['infowindow_content'] .= '</div>';
			$marker['infowindow_content'] .= '<div class="media-body">';
			$marker['infowindow_content'] .= '<h5 class="media-heading">'.$value->name.'</h5>';
			// $marker['infowindow_content'] .= '<p>Harga : <strong>Rp. '.number_format($value->price).'</strong></p>';
			$marker['infowindow_content'] .= '<p>'.$value->address.'</p>';
			$marker['infowindow_content'] .= '<a class="btn btn-info" href='.base_url().'frontend/detail/'.$value->ID.'>Detail</a>';
			$marker['infowindow_content'] .= '</div>';
			$marker['infowindow_content'] .= '</div>';
			$marker['icon'] = base_url("public/icon/map-marker.png");
			$this->googlemaps->add_marker($marker);
		endforeach;

		$this->googlemaps->initialize($config);

		$this->data['map'] = $this->googlemaps->create_map();

		$config['map_div_id'] = "map-add";
		$config['map_width'] = "400px";
		$config['center'] = '-6.880029,109.124192';
		$config['zoom'] = '12';
		$config['map_height'] = '400px;';
		$this->googlemaps->initialize($config);

		$marker2 = array();
		$marker2['position'] = '-6.880029,109.124192';
		$marker2['draggable'] = true;
		$marker2['ondragend'] = 'setMapToForm(event.latLng.lat(), event.latLng.lng());';
		$this->googlemaps->add_marker($marker2);
		$this->data['peta'] = $this->googlemaps->create_map();

		$this->load->view('main-index', $this->data);
	}

	public function searchQuery()
	{
		$this->db->select('industri.*, categories.name as category');

		$this->db->join('industricategories', 'industri.ID = industricategories.category_id', 'left');

		$this->db->join('categories', 'industricategories.category_id = categories.category_id', 'left');


		if( is_array(@$this->input->get('categories')) )
			$this->db->where_in('industricategories.category_id', $this->input->get('categories'));

		$this->db->group_by('industri.ID');

		if($this->input->get('q') != '')
			$this->db->like('industri.name', $this->input->get('q'));

		$this->db->where('industri.latitude !=', NULL)
		->where('industri.longitude !=', NULL);

		return $this->db->get("industri")->result();
	}
}
