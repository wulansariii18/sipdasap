<?php
defined('BASEPATH') OR exit('No direct access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/home');
		$this->load->view('template/footer');
	}
}
