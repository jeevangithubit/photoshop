<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

	
	public function index()
	{
		$data['data'] = $this->model->get_all_record('image');
		$data['catt']=$this->model->result_getall();
		$data['cat'] = $this->model->get_all_record('category');
		$this->load->view('website/image',$data);
	}

		public function image_details($id){
		$idd=decode_id($id,'id');
		$data['data']=$this->model->get_all_record('image',array('category_id'=>$idd),'id','desc');
		
		$data['catt']=$this->model->result_getall();
		$data['cat']=$this->model->get_all_record('category');
		$this->load->view('website/image',$data);
	}
}