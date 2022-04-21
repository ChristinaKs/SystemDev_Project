<?php
class Catalog extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Catalog/catalog');
    }

    public function viewCart()
    {
        $this->view('Catalog/viewCart');
    }
}
