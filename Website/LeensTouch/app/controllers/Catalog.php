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

    public function viewCart()
    {
        $products = array();
        $cart = $this->productModel->getCart();
        $data = [
            "cart" => $cart
        ];

        foreach ($data['cart'] as $item) {
            $products[] = $this->productModel->getProduct($item->upc);   
        }

        $images = array();
        $names = array();
        foreach ($products as $p) {
            $images[] = $p->image;
            $names[] = $p->product_name;
        } 
        $array = json_decode(json_encode($data), true);

        $newarray = array();
        $count = 0;
        foreach ($array['cart'] as $item) {
            $item['image'] = $images[$count];
            $item['name'] = $names[$count];
            $newarray[] = $item;
            $count++;
        }
        $this->view('Catalog/viewCart',$newarray);
    }

    public function addToCart(){
        $product = $this->productModel->getProduct($_GET['product_id']);
        $data=[
            'price' => $product->price,
            'upc' => $product->upc
        ]; 
        if($this->productModel->addToCart($data)){
            echo '<meta http-equiv="Refresh" content="0.1; url=/LeensTouch/Catalog/viewCart">';
        }      
    }
}
?>