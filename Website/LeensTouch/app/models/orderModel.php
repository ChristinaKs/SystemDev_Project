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

        public function createOrder($data){
            $this->db->query("INSERT INTO orders (status, total_price, user_id) values (:OrderId, :status,  :upc, :total_price, :user_id)");
            $this->db->bind(':user_id',$data['user_id']);
            $this->db->bind(':status' , $data['status' ]);
            $this->db->bind(':total_price',$data['total_price']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateOrderStatus($data){
            $this->db->query("UPDATE orders SET status= :status  WHERE order_id=:order_id");
            $this->db->bind(':status' , $data['status' ]);
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
    }

?>