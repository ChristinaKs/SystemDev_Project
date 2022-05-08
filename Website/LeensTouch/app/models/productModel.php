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

        public function getCustomId($message, $picture){
            $this->db->query("SELECT custom_id FROM customization WHERE text = :text AND image = :image");
            $this->db->bind(':text',$message);
            $this->db->bind(':image',$picture);
            return $this->db->getSingle();
        }

        public function getCustomizations($custom_id){
            $this->db->query("SELECT * FROM customization WHERE custom_id = :custom_id");
            $this->db->bind(':custom_id',$custom_id);
            return $this->db->getSingle();
        }

        public function editCustomization($data, $id){
            $this->db->query("UPDATE customization SET text=:text, image=:image WHERE custom_id=:custom_id");
            $this->db->bind(':custom_id', $id);
            $this->db->bind(':text', $data['text']);
            $this->db->bind(':image', $data['image']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function addToCart($item, $picture){
            $this->db->query("INSERT INTO cart (upc, total_price, custom_id, quantity, user_id) 
            values (:upc, :total_price, :custom_id, :quantity, :user_id)");
            $this->db->bind(':upc', $item['upc']);
            $this->db->bind(':total_price', $item['price']);
            $this->db->bind(':custom_id', $picture->custom_id);
            $this->db->bind(':quantity', 1);
            $this->db->bind(':user_id', $_SESSION['user_id']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function getQuantity($upc){
            $this->db->query("SELECT quantity FROM products WHERE upc = :upc");
            $this->db->bind(':upc',$upc);

            return $this->db->getSingle();
        }

        public function getCart(){
            $this->db->query("SELECT * FROM cart WHERE user_id = :user_id");
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $cart = $this->db->getResultSet();

            foreach ($cart as $item) {
                $quantity = $this->getQuantity($item->upc);
                $this->db->query("SELECT * FROM customization WHERE custom_id = :custom_id");
                $this->db->bind(':custom_id', $item->custom_id);
                $custom[] = $this->db->getResultSet();
                $quantities[] = $quantity->quantity;
            }
            
            $data = array();
            $count = 0;
            foreach ($cart as $product) {
                $product->custom = $custom[$count];
                $data[] = $product;
                $count++;
            }

            $count2 = 0;
            $newArray = array();
            foreach ($data as $dat) {
                $dat->itemquantity = $quantities[$count2];
                $newArray[] = $dat;
                $count2++;
            }

            return $data;
        }

        public function remove($data){
            $this->db->query("DELETE FROM cart WHERE cart_id=:cart_id");
            $this->db->bind('cart_id',$data);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function addCustomization($message, $picture){
            $this->db->query("INSERT INTO customization (text, image) 
            values (:text, :image)");
            $this->db->bind(':text', $message);
            $this->db->bind(':image', $picture);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function changeQuantity($cart_id, $quantity){
            $this->db->query("UPDATE cart SET quantity=:quantity WHERE cart_id=:cart_id");
            $this->db->bind(':quantity', $quantity);
            $this->db->bind(':cart_id', $cart_id);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>