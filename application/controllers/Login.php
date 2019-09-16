<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('googlemaps','session'));
		$this->load->helper(array('menus','text','url'));
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function register()
	{
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
		$data['peta'] = $this->googlemaps->create_map();

		$this->load->view('register',$data);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
