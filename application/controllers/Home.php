<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['data'] = $this->model->get_all_record('image','id limit 16');
		$data['video'] = $this->model->get_all_record('project','id limit 12');
		$this->load->view("website/header");
		$this->load->view('website/index',$data);
		$this->load->view("website/footer");
	}
	public function youtube()
	{
		$this->load->view('website/youtube');
	}

   
}
