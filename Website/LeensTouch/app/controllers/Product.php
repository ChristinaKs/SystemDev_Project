<?php
class Product extends Controller
{
    public function __construct()
    {  
        $this->productModel = $this->model('productModel');
    }  
          
    public function index(){
        if(!isset($_POST['add'])){
            $product_ID = $_GET['product_id'];
            $data = $this->productModel->getProduct($product_ID);
            $this->view('Product/product',$data);
        }else{
            if(isLoggedIn()){
                $product = $this->productModel->getProduct($_GET['product_id']);
                // echo "<pre>";
                // var_dump($product);
                // echo "</pre>";
                // echo $product->upc;
                $data=[
                    'price' => $product->price,
                    'upc' => $product->upc
                ];
                if(isset($_POST['message']) && isset($_FILES['picture'])){
                    $picture = $this->imageUpload();
                    if($this->productModel->addCustomization($_POST['message'], $picture)){
                        // var_dump($this->productModel->getCustomId($_POST['message'], $picture));
                    }
                    if($this->productModel->addToCart($data, $this->productModel->getCustomId($_POST['message'], $picture))){
                        echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Catalog/viewCart">';
                    }     
                }elseif(isset($_POST['message'])){
                    if($this->productModel->addCustomization($_POST['message'], " ")){
                    }
                    if($this->productModel->addToCart($data)){
                        echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Catalog/viewCart">';
                    }
                }elseif(isset($_FILES['picture'])){
                    if($this->productModel->addCustomization(" ", $this->imageUpload())){
                    }
                    if($this->productModel->addToCart($data)){
                        echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Catalog/viewCart">';
                    }
                }else{
                    if($this->productModel->addCustomization(" ", " ")){
                    }
                    if($this->productModel->addToCart($data)){
                        echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Catalog/viewCart">';
                    }
                }
            }else{
                $this->view('Login/index');
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
}
