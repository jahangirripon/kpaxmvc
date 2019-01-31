<?php 

class Pages {
    public function __construct() 
    {
        
    }

    public function index()
    {
        echo 'this is index';
    }

    public function about($id)
    {
        echo $id;
    }
}