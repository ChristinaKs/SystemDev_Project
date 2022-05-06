<?php
    class Checkout extends Controller{

        public function __construct(){

            $this->loginModel = $this->model('loginModel');

            // $this->cartModel = $this->model('cartModel');
        }

        public function index($data){
            // $data=140;
            $this->view('Checkout/checkout',$data);
        }
    }
?>