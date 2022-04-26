<?php
class About extends Controller
{
    public function __construct()
    {
        $this->aboutModel = $this->model("aboutModel");
    }

    public function index()
    {
        $about = $this->aboutModel->displayAbout();
        $data = [
            "about" => $about
        ];
        $this->view('About/aboutus',$data);
    }

    public function displayAbout(){
        $about = $this->aboutModel->displayAbout();
        $data = [
            "about" => $about
        ];
        $this->view('About/aboutus',$data);
    }

    public function editAbout(){
        $about = $this->aboutModel->displayAbout(1);
        //var_dump($about);
            if(!isset($_POST['update'])){
                $this->view('About/editAbout',$about);
            }
            else{
                $data=[
                    'first_paragraph' => trim($_POST['first_paragraph']),
                    'second_paragraph' => trim($_POST['second_paragraph']),
                    'third_paragraph' => trim($_POST['third_paragraph']),
                    'about_id' => 1
                ];
                if($this->aboutModel->updateAbout($data)){
                    echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/About/displayAbout">';
                }      
            }
    }

    // public function cancelEdit(){
    //     $about = $this->aboutModel->displayAbout(1);
    //     if(isset($_POST['cancel'])){
    //         $this->view('About/displayAbout',$about);
    //     }
    // }
}
