<?php
    class Orders extends Controller{
        public function __construct(){
            $this->orderModel = $this->model('orderModel');
            if(!isAdminLoggedIn()){
                header('Location: /TermProject/adminLogin');
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

        public function updateOrderStatus($order_id){
            $order = $this->orderModel->getOrderById($order_id);
            if(!isset($_POST['OrderStatusCB'])){
                $data=[
                    'status'=> "",
                    'order_id' => $order_id
                ];
                if($this->orderModel->updateOrderStatus($data)){
                    header('Location: /TermProject/Orders/getOrders');
                }    
            }
            else{
                $data=[

                    'status'=> "Shipped",
                    'order_id' => $order_id
                ];
                if($this->orderModel->updateOrderStatus($data)){
                    header('Location: /TermProject/Orders/getOrders');
                }      
            }
        }
    }

?>