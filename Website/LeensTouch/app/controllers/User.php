<?php

    class User extends Controller{
        public function __construct(){
            $this->userModel = $this->model('userModel');
            if(!isLoggedIn()){
                header('Location: /LeensTouch/Login');
            }
        }

        public function index(){
            if(!isset($_POST['add'])){
                $user_ID = $_SESSION['user_id'];
                $data = $this->userModel->getUser($user_ID);
                $this->view('User/editProfile',$data);
            }else{
                $user = $this->userModel->getUser($_SESSION['user_id']);
                // echo "<pre>";
                // var_dump($product);
                // echo "</pre>";
                // echo $product->upc;
                $data=[
                    'fname' => $user->fname,
                    'lname' => $user->lname
                ]; 
                // if($this->userModel->addToCart($data)){
                //     echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Catalog/viewCart">';
                // }      
            }

            //$this->view('User/editProfile');
        }

        public function getUsers(){
            $users = $this->userModel->getUsers();
            $data = [
                "users" => $users
            ];
            $this->view('User/getUsers',$data);
        }

        public function createUser(){
            if(!isset($_POST['register'])){
                $this->view('User/createUser');
            }
            else{
                $filename= $this->imageUpload();
                $data=[
                    'name' => trim($_POST['name']),
                    'city' => trim($_POST['city']),
                    'phone' => trim($_POST['phone']),
                    'picture' => $filename
                ];
               
                if($this->userModel->createUser($data)){
                    echo 'Please wait we are creating the user for you!';
                    header('Location: /LeensTouch/User/getUsers');
                    //echo '<meta http-equiv="Refresh" content="2; url=/LeensTouch/User/getUsers">';
                }

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

        public function details($user_id){
            $user = $this->userModel->getUser($user_id);

           
                $this->view('User/details',$user);
            
        }

        
        public function update($user_id){
            // var_dump($_POST['fname'], $_POST['lname'], $user_id);
            // $user = $this->userModel->getUser($user_id);

            if(!isset($_POST['update'])){
                $this->view('User/updateUser',$user_id);
            }
            else{
                // $filename= $this->imageUpload();
                $data=[
                    'fname' => trim($_POST['fname']),
                    'lname' => trim($_POST['lname'])
                    
                ];

                if($this->userModel->updateUser($data, $user_id)){
                    // echo 'Please wait we are upating the user for you!';
                    // //header('Location: /MVC/LeensTouch/getUsers');
                    header('location:/LeensTouch/User/editProfile?status=success');
                    echo '<meta http-equiv="Refresh" content="0; url=/LeensTouch/User/editProfile">';
                    // var_dump($data);
                  //  console.log( $data);
                }
            }
        }


        public function delete($user_id){
            $data=[
                'ID' => $user_id
            ];
            if($this->userModel->delete($data)){
                echo 'Please wait we are deleting the user for you!';
                //header('Location: /MVC/LeensTouch/getUsers');
                echo '<meta http-equiv="Refresh" content=".2; url=/LeensTouch/User/getUsers">';
            }

        }

    }

?>