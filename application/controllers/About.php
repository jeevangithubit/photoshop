<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	
	public function index()
	{
		$this->load->view("website/header");
		$this->load->view('website/about');
		$this->load->view("website/footer");
	}
	// public function registration()
	// {
	// 	$this->load->view('website/registrationDetails');
	// }
	// public function charter()
	// {
	// 	$this->load->view('website/charter');
	// }
}
