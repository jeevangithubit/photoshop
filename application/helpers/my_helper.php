<?php
function upload_file($input_file_name, $upload_path ='./uploads/university/', $file_type ='gif|jpg|png'){
    
    $config['upload_path']          = $upload_path;
    $config['allowed_types']        = $file_type;
    $config['max_size']             = 0;
    $config['max_width']            = 0;
    $config['max_height']           = 0;

    $CI = &get_instance();

    $CI->upload->initialize($config);
    
    if ( ! $CI->upload->do_upload($input_file_name))
    {
            $error = array('error' => $CI->upload->display_errors());
            return $error;
    }
    else
    {
            $data = array('file' => $CI->upload->data());
            return $data;
    }
}


 function captcha(){
  $vals = array(
        'word'          => '',
        'img_path'      => 'uploads/',
        'img_url'       => 'http://192.168.0.154/Adminpanel/uploads/',
        'font_path'     => './path/to/fonts/texb.ttf',
        'img_width'     => '150',
        'img_height'    => 30,
        'expiration'    => 7200,
        'word_length'   => 8,
        'font_size'     => 16,
        'img_id'        => 'Imageid',
        'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
                'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 255, 255),
                'text' => array(0, 0, 0),
                'grid' => array(255, 40, 40)
        )
);
$cap = create_captcha($vals);
return $cap;

}
?>