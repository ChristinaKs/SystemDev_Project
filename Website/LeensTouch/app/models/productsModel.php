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

        public function createProduct($data){
            $this->db->query("INSERT INTO products (product_name, description, price, colour, quantity, image) values (:product_name, :description, :price, :colour, :quantity, :image)");
            $this->db->bind(':product_name', $data['product_name']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':colour',$data['colour']);
            $this->db->bind(':quantity',$data['quantity']);
            $this->db->bind(':image',$data['image']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateProduct($data){
            $this->db->query("UPDATE products SET product_name=:product_name, description=:description, price=:price, colour=;colour, quantity=:quantity, image=:image WHERE UPC=:UPC");
            $this->db->bind(':product_name', $data['product_name']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':colour', $data['colour']);
            $this->db->bind(':quantity', $data['quantity']);
            $this->db->bind(':image',$data['image']);
            $this->db->bind('UPC',$data['UPC']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

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