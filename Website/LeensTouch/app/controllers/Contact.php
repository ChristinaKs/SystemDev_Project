<?php
class Contact extends Controller
{
    public function __construct()
    {
        $this->contactModel = $this->model('contactModel');
    }

    public function index() {
        if(!isset($_POST['push'])){
            $this->view('Contact/contact');
        }else{
            $filename = $this->imageUpload();
            $extension =  "https://localhost/LeensTouch/public/img/";
            $extension .= $filename;
            $data=[
                'image' => $extension
            ];
            $this->view('Contact/contact',$data);
        }
    }


    public function imageUpload(){
        //default value for the picture
        $filename=false;
        
        //save the file that gets sent as a picture
        $file = $_FILES['picture'];
        
        $acceptedTypes = ['image/jpeg'=>'jpg',
            'image/gif'=>'gif',
            'image/png'=>'png'];
        //validate the file
        
        if(empty($file['tmp_name']))
            return false;

        $fileData = getimagesize($file['tmp_name']);

        if($fileData!=false && 
            in_array($fileData['mime'],array_keys($acceptedTypes))){

            //save the file to its permanent location
                
            $folder = dirname(APPROOT).'/public/img';
            $filename = uniqid() . '.' . $acceptedTypes[$fileData['mime']];
            move_uploaded_file($file['tmp_name'], "$folder/$filename");
        }
        return $filename;
    }
}
