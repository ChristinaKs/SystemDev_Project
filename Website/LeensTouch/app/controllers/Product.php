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
            $product = $this->productModel->getProduct($_GET['product_id']);
            // echo "<pre>";
            // var_dump($product);
            // echo "</pre>";
            // echo $product->upc;
            $data=[
                'price' => $product->price,
                'upc' => $product->upc
            ]; 
            if($this->productModel->addToCart($data)){
                echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Catalog/viewCart">';
            }      
        }
    }
}
