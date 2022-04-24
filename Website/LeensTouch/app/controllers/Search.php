<?php

    class Search extends Controller{
        public function __construct(){
            $this->searchModel = $this->model('searhModel');
        }

        public function index(){

        }

        public function getResult(){
            if(isset($_POST['search']) && $_POST['search_type'] == "Name"){
                $data = $_POST['search_text'];
                $isSucc = $this->searchModel->getResultByName($data);
                $this->view('Search/search', $isSucc);
            }

            else if(isset($_POST['search']) && $_POST['search_typr'] == "Colour"){
                $data = $_POST['search_text'];
                $isSucc = $this->searchModel->searchByColour($data);
                $this->view('Search/search', $isSucc);
            }

            else if(isset($_POST['search']) && $_POST['search_type'] == "available"){
                $isSucc = $this->searchModel->getAbailable();
                $this->view('Search/search', $isSucc);
            }

            else if(isset($_POST['search']) && $_POST['search_type'] == "sortLowest"){
                $isSucc = $this->searchModel->sortPriceLowest();
                $this->view('Search/search', $isSucc);           
            }

            else if(isset($_POST['search']) && $_POST['search_type'] == "sortHighest"){
                $isSucc = $this->searchModel->sortPriceHighest();
                $this->view('Search/search', $isSucc);           
            }
        }
    }

?>
