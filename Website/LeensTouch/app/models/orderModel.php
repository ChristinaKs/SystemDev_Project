<?php
    Class orderModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getOrders(){
            $this->db->query("SELECT * FROM orders");
            return $this->db->getResultSet();
        }

        public function getOrderById($order_id){
            $this->db->query("SELECT * FROM orders WHERE order_id = :order_id");
            $this->db->bind(':order_id', $order_id);
            return $this->db->getSingle();
        }

        public function getSingleOrder($order_id){
            $this->db->query("SELECT * FROM order_details WHERE order_id =:order_id");
            $this->db->bind(':order_id', $order_id);
            return $this->db->getResultSet();
        }

        public function createOrder($data){
            $this->db->query("INSERT INTO orders (user_id, status, total_price) values (:user_id, :status, :total_price)");
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':status',$data['status']);
            $this->db->bind(':total_price',$data['total_price']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateOrderStatus($data){
            $this->db->query("UPDATE orders SET status=:status WHERE order_id=:order_id");
            $this->db->bind(':status', $data['status']);
            $this->db->bind(':order_id', $data['order_id']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function delete($data){
            $this->db->query("DELETE FROM orders WHERE order_id=:order_id");
            $this->db->bind('order_id',$data['order_id']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }


        }


        public function getOrderDetails(){
            $this->db->query("SELECT * FROM order_details");
            return $this->db->getResultSet();
        }

        public function getOrderDetailByItemId($OrderDetailId){
            $this->db->query("SELECT * FROM order_details WHERE order_item_id = :order_item_id");
            $this->db->bind(':order_item_id',$OrderDetailId);
            return $this->db->getSingle();
        }

        public function getOrdersByOrderId($OrderId){
            $this->db->query("SELECT * FROM order_details WHERE OrderId = :OrderId");
            $this->db->bind(':OrderId',$OrderId);
            return $this->db->getResultSet();
        }
        
        // Unsure if needed 
        // public function CreateOrderDetails($data){
        //     $this->db->query("INSERT INTO order_details (order_id, upc, product_name, quantity, unit_price, custom_text, custom_image) values (:order_id, :upc, :product_name, :quantity, :unit_price, :custom_text, :custom_image)");
        //     $this->db->bind(':order_id', $data['order_id']);
        //     $this->db->bind(':upc', $data['upc']);
        //     $this->db->bind(':product_name', $data['product_name']);
        //     $this->db->bind(':quantity', $data['quantity']);
        //     $this->db->bind(':unit_price', $data['unit_price']);
        //     $this->db->bind(':custom_text', $data['custom_text']);
        //     $this->db->bind(':custom_image', $data['custom_image']);

        //     if($this->db->execute()){
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }
        // }
    }

?>