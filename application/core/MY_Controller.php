<?php
Class MY_Controller extends CI_Controller
{
	protected function create_captcha()
		{
	  	$this->load->helper('captcha');
		  $vals = array(
	       
	        'img_path'      => './captcha/',
	        'img_url'       => base_url('captcha'),
	        'font_path'     => './path/to/fonts/texb.ttf',
	        'img_width'     => '97',
	        'word_length'   => 5,
	        'font_size'     => 16,
	        'img_id'        => 'Imageid',
	        'pool'          => 'ABCDEFGHIJKLMNPQRSTUVWXYZ1234567891',

	        'colors'  => array(
	                'background' => array(0, 164, 254),
	                'border' => array(0, 164, 254),
	                'text' => array(255, 255, 255),
	                'grid' => array(0, 0, 26)
			        )
			);

			$cap = create_captcha($vals);
		
			$image = $cap['image'];
			$this->session->unset_userdata('capta_world');
			$this->session->set_userdata('capta_world', $cap['word']);
			return $image;
	}
	
	public  function alpha_dash_space($str) {
		return ( ! preg_match("/^[a-z A-Z]+$/i", $str)) ? FALSE : TRUE;
	}

   function  validate_phone_num($input){

        return ( ! preg_match("/^[0-9*#+]+$/", $input)) ? FALSE : TRUE;

}
 public function file_check($str){
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['file']['name']);
        if(isset($_FILES['file']['name']) && $_FILES['file']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only pdf/gif/jpg/png file.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }
     public function image_check($str){
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/pjpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['image']['name']);
        if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                $this->form_validation->set_message('file_check', 'Please select only pdf/gif/jpg/png file.');
                return false;
            }
        }else{
            $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
            return false;
        }
    }
    function checkDateFormat($date) {
	if (preg_match("/[0-31]{2}/[0-12]{2}/[0-9]{4}/", $date)) {
	if(checkdate(substr($date, 3, 2), substr($date, 0, 2), substr($date, 6, 4)))
	return true;
	else
	return false;
	} else {
	return false;
	}
	}
	public function uploadimage( $filename='' , $upload_path=''){

//print_r($filename); exit;
//$newname = rename_image($_FILES[$filename]['name']);
$newname = time().$_FILES[$filename]['name'];

$config['file_name'] = $newname;
$config['upload_path'] = $upload_path;
$config['allowed_types'] = 'gif|jpg|png|jpeg';
$config['max_size'] = 1000;
$config['max_width'] = 10240;
$config['max_height'] = 7680;

$this->upload->initialize($config);

if ( ! $this->upload->do_upload($filename))
{
$data = array('error' => $this->upload->display_errors());

}
else
{
$data = $this->upload->data();
}

return $data ;
}
}