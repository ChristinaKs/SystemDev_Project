<?php
class Catalog extends Controller
{
    public function __construct()
    {
            $this->productModel = $this->model('productModel');
            }
        

        public function index(){
            $products = $this->productModel->getProducts();
            $data = [
                "products" => $products
            ];
            $this->view('Catalog/catalog',$data);
        }

     
  
}
?>