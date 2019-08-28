<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data["title"]="Selamat Datang di Website Rumah Makan -\"Bakso Anugrah\"-";
		$data["page"]="1";
		$this->load->view('fe_templates/header', $data);
		$this->load->view('fe_home');
		$this->load->view('fe_templates/footer');
		
	}

	public function about()
	{
		$data["title"]="Tentang Rumah Makan -\"Bakso Anugrah\"-";
		$data["page"]="2";
		$this->load->view('fe_templates/header', $data);
		$this->load->view('fe_about');
		$this->load->view('fe_templates/footer');
	}
}
