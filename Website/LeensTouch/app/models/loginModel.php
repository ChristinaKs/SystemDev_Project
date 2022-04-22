<?php

    class loginModel{
        public function __construct(){
            $this->db = new Model;
        }
    
        public function getUser($email){
            $this->db->query("SELECT * FROM user WHERE email = :email");
            $this->db->bind(':email', $email);
            return $this->db->getSingle();
        }

        public function createUser($data){
            $this->db->query("INSERT INTO user (fname, lname, promotions, email, password) 
            values (:fname, :lname, :promotions, :email, :password)");
            $this->db->bind(':fname', $data['fname']);
            $this->db->bind(':lname', $data['lname']);
            $this->db->bind(':promotions', $data['promotions']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);

            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }

        }
    }
?>