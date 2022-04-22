<?php

    Class productsModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getProducts(){
            $this->db->query("SELECT * FROM products");
            return $this->db->getResultSet();
        }

        public function getProduct($UPC){
            $this->db->query("SELECT * FROM products WHERE UPC = :UPC");
            $this->db->bind(':UPC',$UPC);
            return $this->db->getSingle();
        }

        // NEEDS EDITING
        // public function createProduct($data){
        //     $this->db->query("INSERT INTO products (ProductName, ProductDescription, ProductPrice, ProductAmount, picture) values (:ProductName, :ProductDescription, :ProductPrice, :ProductAmount, :picture)");
        //     $this->db->bind(':ProductName', $data['ProductName']);
        //     $this->db->bind(':ProductDescription', $data['ProductDescription']);
        //     $this->db->bind(':ProductPrice', $data['ProductPrice']);
        //     $this->db->bind(':ProductAmount',$data['ProductAmount']);
        //     $this->db->bind(':picture',$data['picture']);

        //     if($this->db->execute()){
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }
        // }

        // NEEDS EDITING
        // public function updateProduct($data){
        //     $this->db->query("UPDATE products SET ProductName=:ProductName, ProductDescription=:ProductDescription, ProductPrice=:ProductPrice, ProductAmount=:ProductAmount, picture=:picture WHERE UPC=:UPC");
        //     $this->db->bind(':ProductName', $data['ProductName']);
        //     $this->db->bind(':ProductDescription', $data['ProductDescription']);
        //     $this->db->bind(':ProductPrice', $data['ProductPrice']);
        //     $this->db->bind(':ProductAmount', $data['ProductAmount']);
        //     $this->db->bind(':picture',$data['picture']);
        //     $this->db->bind('UPC',$data['UPC']);
        //     if($this->db->execute()){
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }

        // }

        // NEEDS EDITING
        // public function searchProduct($data){
        //     $this->db->query("SELECT * FROM products WHERE ProductName OR ProductDescription LIKE :search");
        //     $this->db->bind(':search', "%".$data['Search']."%");
        //     return $this->db->getResultSet();
        // }

        public function delete($data){
            $this->db->query("DELETE FROM products WHERE UPC=:UPC");
            $this->db->bind('UPC',$data['UPC']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }

?>