<?php
    class searchModel{
        public function __construct(){
            $this->db = new Model;
        }
        // public function getResultByName($product_name){
        //     $this->db->query("SELECT * FROM products
        //                         WHERE ' ' + product_name + ' '  LIKE '% :title %'");
        //     $this->db->bind(':title', $product_name);
        //     return $this->db->getResultSet();
        // }

        // public function getResultByName($content){
        //     var_dump("changed");
        //     $this->db->query("SELECT *
        //                         FROM   products
        //                         WHERE  ' ' + product_name + ' ' LIKE '% :content %'
        //                     ");
        //     $this->db->bind(':content', $content);
        //     return $this->db->getResultSet();                
        // }

        public function getResultByName($product_name){
            $this->db->query("SELECT * FROM products
                                WHERE product_name = :product_name AND showit = '1'");
            $this->db->bind(':product_name', $product_name);
            return $this->db->getResultSet();
        }

        public function sortByPriceHighest(){
            $this->db->query("SELECT * FROM products
                                WHERE showit = '1'
                                ORDER BY price DESC ");
            return $this->db->getResultSet();
        }

        public function sortByPriceLowest(){
            $this->db->query("SELECT * FROM products
                                ORDER BY price");
            return $this->db->getResultSet();
        }

        public function getAvailable(){
            $this->db->query("SELECT * FROM products
                                WHERE quantity > 0 AND showit = '1'");
            return $this->db->getResultSet();
        }

        // public function searchByColour($colour){
        //     $this->db->query("SELECT * FROM products
        //                         WHERE colour LIKE LIKE '%:colour%'");
        //     $this->db->bind('colour', $colour);
        //     return $this->db->getResultSet();
        // }

        public function searchByColour($colour){
            $this->db->query("SELECT * FROM products
                                WHERE colour=:colour");
            $this->db->bind('colour', $colour);
            return $this->db->getResultSet();
        }
    }

?>
