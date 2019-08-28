<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$data["title"]="Menu di Website Rumah Makan -\"Bakso Anugrah\"-";
		$data["page"]="3";
		$this->load->view('fe_templates/header', $data);
		$this->load->view('fe_menu');
		$this->load->view('fe_templates/footer');
		
	}

	public function about()
	{
		$data["title"]="Selamat Datang di Website Rumah Makan -\"Bakso Anugrah\"-";
		$data["page"]="2";
		$this->load->view('fe_templates/header', $data);
		$this->load->view('fe_about');
		$this->load->view('fe_templates/footer');
	}
}
