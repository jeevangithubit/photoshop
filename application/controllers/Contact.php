<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	public function index()
	{
		$this->load->view('website/header');
		$this->load->view('website/contact');
		$this->load->view('website/footer');
	}
	public function addContact(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('fname','FIRST NAME','required');
		$this->form_validation->set_rules('lname','LAST NAME','required');
		$this->form_validation->set_rules('email','EMAIL','required');
		$this->form_validation->set_rules('phone','PHONE','required');
		$this->form_validation->set_rules('date','YOUR WEDDING DATES','required');
		$this->form_validation->set_rules('dec','EVENT DETAILS','required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		
        $data = array('success' => false, 'messages' => array());
		if($this->form_validation->run()==TRUE)
		{
			
			$sbsr=array(
						'name'=>$this->input->post('fname').' '.$this->input->post('lname'),
						'email'=>$this->input->post('email'),
						'phone'=>$this->input->post('phone'),
						'date'=>$this->input->post('date'),
						'details'=>$this->input->post('dec'),
					   );
			
			$str=$this->model->insert('contact',$sbsr);
			
			if($str){
					 $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');
	                       redirect(site_url('Contact'));
						
		            }else{
		            	$data['success'] = 'error';
		            }
		}
		echo json_encode($data);
	}

}
