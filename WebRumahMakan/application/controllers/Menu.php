<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$data["title"]="Menu di Website Rumah Makan";
		$data["page"]="3";
		$this->load->view('fe_templates/header', $data);
		$this->load->view('fe_menu');
		$this->load->view('fe_templates/footer');
		
	}

}
