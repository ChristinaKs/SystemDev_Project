<?php
class Product extends Controller
{
     public function __construct()
    {
            
            $this->productModel = $this->model('productModel');
     }
        
          
        public function index(){
            $product_ID = $_GET['product_id'];
            $data = $this->productModel->getProduct($product_ID);
            $this->view('Product/product',$data);
        }
}
