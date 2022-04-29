<?php

    class Clients extends Controller{
        public function __construct(){
            $this->loginModel = $this->model('loginModel');
        }

        public function index(){
            $clients = $this->loginModel->getClients();
            $data = [
                "clients" => $clients
            ];
            $this->view('Clients/viewClients',$data);
        }

        public function getClients(){
            $clients = $this->loginModel->getClients();
            $data = [
                "clients" => $clients
            ];
            $this->view('Clients/viewClients',$data);
        }

        public function delete($ClientEmail){
               if($this->model('profileModel')->delete($ClientEmail)){
                $data = [
                    "clients" => $this->model('loginModel')->getClients()
                ];
                $this->view('Clients/viewClients',$data);
               }
        }
    }

?>