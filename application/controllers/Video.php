<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	
	public function index()
	{
	    $data['data'] = $this->model->get_all_record('project');
	    $data['catt']=$this->model->result_getall();
		$data['cat'] = $this->model->get_all_record('category');
		$this->load->view('website/video',$data);
	}
	public function films_details($id){
		$idd=decode_id($id,'id');
		$data['data']=$this->model->get_all_record('project',array('category_id'=>$idd),'id','desc');
		
		$data['catt']=$this->model->result_getall();
		$data['cat']=$this->model->get_all_record('category');
		$this->load->view('website/video',$data);
	}
}