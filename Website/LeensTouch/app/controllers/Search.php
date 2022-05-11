<?php

    class Search extends Controller{
        public function __construct(){
            $this->searchModel = $this->model('searchModel');
        }

        public function index(){

        }

        public function getResult(){
            if(isset($_POST['search']) && $_POST['search_type'] == "Name"){
                $data = strtolower($_POST['search_text']);
                $isSucc = $this->searchModel->getResultByName($data);
                $data1 = [
                    "products" => $isSucc
                ];
                $this->view('Search/search', $data1);
            }

            else if(isset($_POST['search']) && $_POST['search_type'] == "Colour"){
                $data = strtolower($_POST['search_text']);
                $isSucc = $this->searchModel->searchByColour($data);
                $data1 = [
                    "products" => $isSucc
                ];
                $this->view('Search/search', $data1);
            }

            else if(isset($_POST['search']) && $_POST['search_type'] == "available"){
                $isSucc = $this->searchModel->getAvailable();
                $data1 = [
                    "products" => $isSucc
                ];
                $this->view('Search/search', $data1);
            }

            else if(isset($_POST['search']) && $_POST['search_type'] == "sortLowest"){
                $isSucc = $this->searchModel->sortByPriceLowest();
                $data1 = [
                    "products" => $isSucc
                ];
                $this->view('Search/search', $data1);           
            }

            else if(isset($_POST['search']) && $_POST['search_type'] == "sortHighest"){
                $isSucc = $this->searchModel->sortByPriceHighest();
                $data1 = [
                    "products" => $isSucc
                ];
                $this->view('Search/search', $data1);          
            }
        }
    }

?>
