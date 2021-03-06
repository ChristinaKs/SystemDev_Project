<?php

    Class productsModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getProducts(){
            $this->db->query("SELECT * FROM products");
            return $this->db->getResultSet();
        }

        public function getProduct($upc){
            $this->db->query("SELECT * FROM products WHERE upc = :upc");
            $this->db->bind(':upc',$upc);
            return $this->db->getSingle();
        }

        public function createProduct($data){
            $this->db->query("INSERT INTO products (product_name, description, price, colour, quantity, image, showit) values (:product_name, :description, :price, :colour, :quantity, :image, '1')");
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
            $this->db->query("UPDATE products SET product_name=:product_name, description=:description, price=:price, colour=:colour, quantity=:quantity, image=:image WHERE upc=:upc");
            $this->db->bind(':product_name', $data['product_name']);
            $this->db->bind(':description', $data['description']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':colour', $data['colour']);
            $this->db->bind(':quantity', $data['quantity']);
            $this->db->bind(':image',$data['image']);
            $this->db->bind('upc',$data['upc']);
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        // public function delete($data){
        //     $this->db->query("DELETE FROM products WHERE upc=:upc");
        //     $this->db->bind('upc',$data['upc']);

        //     if($this->db->execute()){
        //         return true;
        //     }
        //     else{
        //         return false;
        //     }

        // }

        public function delete($data){
            $this->db->query("UPDATE products SET showit='0' WHERE upc =:upc");
            $this->db->bind('upc',$data['upc']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }

?>