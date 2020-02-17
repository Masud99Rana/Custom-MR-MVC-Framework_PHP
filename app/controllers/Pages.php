<?php
	class Pages extends Controller {

	public function __construct(){

	}

	public function index(){
		$data = [
			'title' => 'MR MVC',
		];

		$this->view('pages/index', $data);
	}

	public function about(){
		$data = [
			'title' => 'About Us'
		];

		$this->view('pages/about', $data);
	}
}
//http://localhost/mvc/pages/about/1