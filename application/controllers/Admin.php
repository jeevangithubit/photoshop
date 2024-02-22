<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model');
	}

	 public function index()
     {
     	$this->load->view('admin/login');
     }
	public function dashboard()
	{
     	$data['contact']=$this->model->get_all_record('contact','','id desc');
		$data['image']=$this->model->get_all_record('image','','id desc');
		$data['project']=$this->model->get_all_record('project','','id desc');
		$data['category']=$this->model->get_all_record('category','','id desc');
     	$this->load->view('admin/index',$data);
     	
	}
   
        /*##################..... Category file .....#######################.*/
      


     public function category()
     {
     	$data['cat'] = $this->model->get_all_record('category');
     	$this->load->view('admin/view_category',$data);

     }
     public function addCategory()
     {
     	$this->load->view('admin/addCategory');
     }

     public function view_category()
     {
     	$sbsr=array(
					'category'=>$this->input->post('category'),
					'date'=>date('Y-m-d'),
				   );

		$this->model->insert('category', $sbsr);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');
		 redirect(site_url('Admin/category'));
     }  



          /*##################..... Image file .....#######################.*/



	public function image()
	{
		$data['cat'] = $this->model->get_all_record('category');
		$data['data'] = $this->model->get_all_record('image');
		$this->load->view('admin/view_image', $data);
	}


	public function addImage()
	{
		$data['cat'] = $this->model->get_all_record('category');
		$this->load->view('admin/addImage',$data);
	}


	public function view_image()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('category','Category','required');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('name','Couple Name','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        $data = array('success' => false, 'messages' => array());
		$image = '';
		if($this->form_validation->run()==TRUE)
		{
			if(!empty($_FILES['image']['name']))
            {
                $config['upload_path'] = 'assets/uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                }
            }
			
			$sbsr=array(
				        'category_id'=>$this->input->post('category'),
						'location'=>$this->input->post('location'),
						'name'=>$this->input->post('name'),
						'date'=>$this->input->post('date'),
						'image'=>$image,
						
					   );
			
			$str=$this->model->insert('image',$sbsr);
			
			if($str){
					 $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');
	                       redirect(site_url('Admin/image'));
						
		            }else{
		            	$data['success'] = 'error';
		            }
		}
		echo json_encode($data);
	}


	public function editImage($id)
	{
		$data['data'] = $this->model->get_record('image', array('id'=>$id));
		$this->load->view('admin/editImage', $data);
	}

	public function updateImage()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('name','Couple Name','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        $data = array('success' => false, 'messages' => array());
		$image = '';
		if($this->form_validation->run()==TRUE)
		{
			if(!empty($_FILES['image']['name']))
            {
                $config['upload_path'] = 'assets/uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $image = $uploadData['file_name'];
                }
            }
			
			$sbsr=array(
						'location'=>$this->input->post('location'),
						'name'=>$this->input->post('name'),
						'image'=>$image,
						
					   );
			
			$str=$this->model->update('image',$sbsr,array('id'=>$this->input->post('id')));
			
			if($str){
					$this->session->set_flashdata('message', '<div class="alert alert-success">Record has been updated successfully.</div>');
	                 redirect(site_url('Admin/image'));
						
		            }else{
		            	$data['success'] = 'error';
		            }
		}
		echo json_encode($data);
		// $data['title'] = $this->input->post('title');
		// $data['description'] = $this->input->post('description');

		// $this->model->update('services', $data, $id);
		// $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been updated successfully.</div>');
		// redirect(site_url('admin/services'));
	}


           /*##################..... video file .....#######################.*/



	public function video()
	{
		$data['cat'] = $this->model->get_all_record('category');
		$data['data'] = $this->model->get_all_record('project');
		$this->load->view('admin/view_video',$data);
	}


	public function addVideo()
	{
		$data['cat'] = $this->model->get_all_record('category');
		$this->load->view('admin/addVideo',$data);
	}


	public function view_video()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('category','Category','required');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('name','Couple Name','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        $data = array('success' => false, 'messages' => array());
		$video = '';
		if($this->form_validation->run()==TRUE)
		{
			if(!empty($_FILES['video']['name']))
            {
                $config['upload_path'] = 'assets/video/';
                $config['allowed_types'] = 'flv|swf|avi|vma|mp3|mp4|mpg|vob';
                $config['file_name'] = $_FILES['video']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('video')){
                    $uploadData = $this->upload->data();
                    $video = $uploadData['file_name'];
                }
            }
			
			$sbsr=array(
				        'category_id'=>$this->input->post('category'),
						'location'=>$this->input->post('location'),
						'name'=>$this->input->post('name'),
						'date'=>$this->input->post('date'),
						'video'=>$video,
						
					   );
			
			$str=$this->model->insert('project',$sbsr);
			
			if($str){
					 $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been saved successfully.</div>');
	                       redirect(site_url('Admin/video'));
						
		            }else{
		            	$data['success'] = 'error';
		            }
		}
		echo json_encode($data);
	}

		public function editVideo($id)
	{
		$data['data'] = $this->model->get_record('project', array('id'=>$id));
		$this->load->view('admin/editVideo', $data);
	}

	public function updateVideo()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('location','Location','required');
		$this->form_validation->set_rules('name','Couple Name','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
        $data = array('success' => false, 'messages' => array());
		$video = '';
		if($this->form_validation->run()==TRUE)
		{
			if(!empty($_FILES['video']['name']))
            {
                $config['upload_path'] = 'assets/video/';
                $config['allowed_types'] = 'flv|swf|avi|vma|mp3|mp4|mpg|vob';
                $config['file_name'] = $_FILES['video']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('video')){
                    $uploadData = $this->upload->data();
                    $video = $uploadData['file_name'];
                }
            }
			
			$sbsr=array(
						'location'=>$this->input->post('location'),
						'name'=>$this->input->post('name'),
						'video'=>$video,
						
					   );
			
			$str=$this->model->update('project',$sbsr,array('id'=>$this->input->post('id')));
			
			if($str){
					 $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been updated successfully.</div>');
	                       redirect(site_url('Admin/video'));
						
		            }else{
		            	$data['success'] = 'error';
		            }
		}
		echo json_encode($data);
	}

	public function contact()
	{
		$data['data'] = $this->model->get_all_record('contact');
       $this->load->view('admin/contact',$data);
	}

	
	public function delete($id='',$redirect='',$table=''){

		 $delete=$this->model->delete($table,array('id'=>$id));
		 
		// print_r($delete); die;
          if($delete)
        {
        $this->session->set_flashdata('message', '<div class="alert alert-success">Record has been deleted successfully.</div>');
          redirect('Admin/'.$redirect);
        }
       else
        {
          redirect('Admin/'.$redirect);
        }
	}
	public function login(){
		$this->load->view('admin/login');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		//$this->form_validation->set_rules('captcha','Captcha','required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		
        $data = array('success' => false, 'messages' => array());
		if($this->form_validation->run()==TRUE)
		{
			// $captcha1=$this->input->post('captcha');
			// $captcha2=$this->session->userdata('capta_world');

			/*if($captcha1 == $captcha2)
			{*/
			$sbsr=array(
						'username'=>$this->input->post('username'),
						'password'=>($this->input->post('password'))
					   );
			
			$str=$this->model->get_record('login',$sbsr);
			if($str){
						$this->session->set_flashdata('message', '<div class="alert alert-success">Log in successfully.</div>');
	                       redirect(site_url('admin/dashboard'));
		            }else{
		            	$data['success'] = 'error';
		            }
		   /* }else{
		    	$data['success'] = 'notmatch';
		    }    
		*/
		}else{
			foreach ($_POST as $key => $value) {
				$data['messages'][$key] = form_error($key);
			}
		}
		echo json_encode($data);
	 }
}