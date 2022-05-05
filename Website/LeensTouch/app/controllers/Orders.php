<?php
    class Orders extends Controller{
        public function __construct(){
            $this->orderModel = $this->model('orderModel');
            if(!isAdminLoggedIn()){
                header('Location: /LeensTouch/Login');
            }
        }

        public function index(){
            $this->view('Orders/getOrders');
        }

        public function getOrders(){
            $orders = $this->orderModel->getOrders();
            $data = [
                "orders" => $orders
            ];
            $this->view('Orders/getOrders',$data);
        }

        public function getOrder($order_id){
            $order_detail = $this->orderModel->getSingleOrder($order_id);
            $data = [
                "order_detail" => $order_detail,
                "order_id" => $order_id
            ];
            // echo "<pre>";
            // var_dump($data);
            $this->view('Orders/getOrder', $data);
        }

        public function updateOrderStatus($order_id){
            $order = $this->orderModel->getOrderById($order_id);
            if(!isset($_POST['OrderStatusCB'])){
                $data=[
                    'status'=> '',
                    'order_id' => $order_id
                ];
                if($this->orderModel->updateOrderStatus($data)){
                    header('Location: /LeensTouch/Orders/getOrders');
                }    
            }
            else {
                $data=[
                    'status'=> "Shipped",
                    'order_id' => $order_id
                ];
                if($this->orderModel->updateOrderStatus($data)){
                    header('Location: /LeensTouch/Orders/getOrders');
                }      
            }
        }
    }

?>