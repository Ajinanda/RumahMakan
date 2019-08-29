<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"]="Pesan Meja di Website Rumah Makan";
		$data["page"]="5";
		$this->load->view('fe_templates/header', $data);
		$this->load->view('fe_reservation');
		$this->load->view('fe_templates/footer');
	}

	public function send_reservation()
	{
		$name = $this->input->post('form_name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$no_of_person = $this->input->post('no_of_person');
		$datepicker = $this->input->post('datepicker');
		$timepicker = $this->input->post('timepicker');
		$preferred_food = $this->input->post('preferred_food');
		$occasion = $this->input->post('occasion');

		
	}
}
