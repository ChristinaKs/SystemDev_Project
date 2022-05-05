<?php

    Class aboutModel{
        public function __construct(){
            $this->db = new Model;
        }

        public function displayAbout(){
            $this->db->query("SELECT * FROM about");
            return $this->db->getResultSet();
        }

        public function updateAbout($data){
            $this->db->query("UPDATE about SET first_paragraph=:first_paragraph, second_paragraph=:second_paragraph, third_paragraph=:third_paragraph WHERE about_id=:about_id");
            $this->db->bind(':first_paragraph', $data['first_paragraph']);
            $this->db->bind(':second_paragraph', $data['second_paragraph']);
            $this->db->bind(':third_paragraph', $data['third_paragraph']);
            $this->db->bind(':about_id', '1');
            if($this->db->execute()){
                return true;
            }
            else{
                return false;
            }
        }
    }
?>