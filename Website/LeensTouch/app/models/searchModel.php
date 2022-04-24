<?php
    class searchModel{
        public function __construct(){
            $this->db = new Model;
        }
        public function getResultByName($product_name){
            $this->db->query("SELECT * FROM products
                                WHERE product_name = :product_name");
            $this->db->bind(':product_name', $product_name);
            return $this->db->getResulSet();
        }

        public function sortByPriceHighest(){
            $this->db->query("SELECT * FROM products
                                ORDER BY product_price");
            return $this->db->getResultSet();
        }

        public function sortByPriceLowest(){
            $this->db->query("SELECT * FROM products
                                ORDER BY product_price");
            return $this->db->getResultSet();
        }

        public function getAvailable(){
            $this->db->query("SELECT * FROM products
                                WHERE quantity > 0");
            return $this->db->getResultSet();
        }

        public function searchByColour($colour){
            $this->db->query("SELECT * FROM products
                                WHERE colour=:colour");
            $this->db->bind('colour', $colour);
            return $this->db->getResultSet();
        }
    }

?>
