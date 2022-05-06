<?php

    class userModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function getUsers(){
            $this->db->query("SELECT * FROM user");
            return $this->db->getResultSet();
        }

        public function getUser($user_id){
            $this->db->query("SELECT * FROM user WHERE user_id = :user_id");
            $this->db->bind(':user_id',$user_id);
            return $this->db->getSingle();
        }

        public function createUser($data){
            $this->db->query("INSERT INTO user (Name, City, Phone, Picture) values (:name, :city, :phone, :picture)");
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':city', $data['city']);
            $this->db->bind(':phone', $data['phone']);
            $this->db->bind(':picture',$data['picture']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }

        public function updateUser($data, $userId){
            $this->db->query("UPDATE user SET fname=:fname, lname=:lname WHERE user_id=:user_id");
            $this->db->bind(':user_id', $userId);
            $this->db->bind(':fname', $data['fname']);
            $this->db->bind(':lname', $data['lname']);
            
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }

        public function delete($data){
            $this->db->query("DELETE FROM user WHERE ID=:user_id");
            $this->db->bind('user_id',$data['ID']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }

?>