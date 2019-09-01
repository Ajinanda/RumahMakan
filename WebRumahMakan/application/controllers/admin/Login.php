<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['title'] = "Login Manager Rumah Makan";

		$this->load->view('login_template/header', $data);
		$this->load->view('login_template/view/login');
		$this->load->view('login_template/footer');
	}

	function register()
	{
		$data['title'] = "Daftar Manager Rumah Makan";

		$this->load->view('login_template/header', $data);
		$this->load->view('login_template/view/register');
		$this->load->view('login_template/footer');
	}

	function forgot_password()
	{
		$data['title'] = "Lupa Password Rumah Makan";

		$this->load->view('login_template/header', $data);
		$this->load->view('login_template/view/forgot');
		$this->load->view('login_template/footer');
	}

	function login_process()
	{
		echo "Login Success";
	}
}