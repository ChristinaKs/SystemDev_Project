<?php

    class productModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getProducts(){
            $this->db->query("SELECT * FROM products");
            return $this->db->getResultSet();
        }

        public function getProduct($product_id){
            $this->db->query("SELECT * FROM products WHERE upc = :product_id");
            $this->db->bind(':product_id',$product_id);
            return $this->db->getSingle();
        }

        public function addToCart($item){
            $this->db->query("INSERT INTO cart (upc, total_price) 
            values (:upc, :total_price)");
            $this->db->bind(':upc', $item['upc']);
            $this->db->bind(':total_price', $item['price']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function getCart(){
            $this->db->query("SELECT * FROM cart");
            return $this->db->getResultSet();
        }
    }
?>