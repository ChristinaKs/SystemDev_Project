<?php
    Class contactModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function contact($data, $id){
            $this->db->query("INSERT INTO message (fname, lname, promotions, email, password) 
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