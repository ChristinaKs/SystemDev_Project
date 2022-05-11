<?php
    class Checkout extends Controller{

        public function __construct(){

            $this->loginModel = $this->model('loginModel');
            $this->productModel = $this->model('productModel');
            $this->orderModel = $this->model('orderModel');
            // $this->cartModel = $this->model('cartModel');
        }

        public function index($data){

        $ids = $this->orderModel->getOrderId();
        
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

        $result = array_merge($newarray, $ids);
        
        $counter = 0;
        $newnewnew = array();
        foreach($newarray as $array){
            $array['order_id'] = $ids[$counter];
            $newnewnew[] = $array;
            $counter++;
        }

        foreach($newarray as $item){
            $isSucc = $this->orderModel->createOrder($_SESSION['user_id'], $item['total_price'] +15);
        }

        foreach($newnewnew as $order){
            $isSucc = $this->orderModel->createOrderDetails($order['order_id']->order_id , $order['upc'], $order['name'], $order['quantity'], ($order['total_price'] * $order['quantity']),
                $order['custom']['0']['text'], $order['custom']['0']['image']);
        }
         $this->productModel->clearCart();  
            
            $this->view('Checkout/checkout',$data);
        }

        public function placeOrder(){
            header('location:/LeensTouch/Catalog/viewCart?status=success');
            echo '<meta http-equiv="Refresh" content="0; url=/LeensTouch/Catalog/viewCart">';
        }
    }
?>
