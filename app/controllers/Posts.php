<?php
  class Posts extends Controller{
    public function __construct(){
      if(!isset($_SESSION['user_id'])){
        redirect('users/login');
      }
    }

    // Load All Posts
    public function index(){
      
      $this->view('posts/index');
    }

  }