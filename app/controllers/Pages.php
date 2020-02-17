<?php
  class Pages {
    public function __construct(){
     
    }

    public function index(){
      
    }

//http://localhost/mvc/pages/about/1
    public function about($id){
      echo $id;
    }
  }