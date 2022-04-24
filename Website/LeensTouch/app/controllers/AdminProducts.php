<?php

    class Products extends Controller{
        public function __construct(){
            $this->productsModel = $this->model('productsModel');
            if(!isAdminLoggedIn()){
                header('Location: /LeensTouch/adminLogin');
            }
        }

        public function index(){
            //$this->view('Products/index');
            //if(isset($_POST['viewProduct'])){
            //    $this->view('Products/viewProduct');
            //}
            $this->view('Products/getProducts');
        }

        public function getProducts(){
            $products = $this->productsModel->getProducts();
            $data = [
                "products" => $products
            ];
            $this->view('Products/getProducts',$data);
        }

        public function createProduct(){
            if(!isset($_POST['register'])){
                $this->view('Products/createProduct');
            }
            else{
                $filename= $this->imageUpload();
                $data=[
                    'product_name' => trim($_POST['product_name']),
                    'description' => trim($_POST['description']),
                    'price' => trim($_POST['price']),
                    'colour' => trim($_POST['colour']),
                    'quantity' => trim($_POST['quantity']),
                    'image' => $filename
                ];
               
                if($this->productsModel->createProduct($data)){
                    echo 'Please wait we are creating the product for you!';
                    header('Location: /LeensTouch/Products/getProducts');
                }
            }
        }

        public function imageUpload(){
            //default value for the picture
            $filename=false;
            
            //save the file that gets sent as a picture
            $file = $_FILES['image'];
            
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

        public function details($UPC){
            $UPC = $this->productsModel->getProduct($UPC);
                $this->view('Products/details',$UPC);
        }

        public function update($UPC){
            $product = $this->productsModel->getProduct($UPC);
            if(!isset($_POST['update'])){
                $this->view('Products/updateProduct',$product);
            }
            else{
                $filename= $this->imageUpload();
                $data=[
                    'product_name' => trim($_POST['product_name']),
                    'description' => trim($_POST['description']),
                    'price' => trim($_POST['price']),
                    'colour' => trim($_POST['colour']),
                    'quantity' => trim($_POST['quantity']),
                    'image' => $filename,
                    'UPC' => $UPC
                ];
                if($this->productsModel->updateProduct($data)){
                    echo '<meta http-equiv="Refresh" content="2; url=/LeensTouch/Products/getProducts">';
                }      
            }
        }

        public function delete($UPC){
            $data=[
                'UPC' => $UPC
            ];
            if($this->productsModel->delete($data)){
                echo '<meta http-equiv="Refresh" content=".2; url=/LeensTouch/Products/getProducts">';
            }
        }     
    }

?>