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

}
?>