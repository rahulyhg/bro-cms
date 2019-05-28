<?php

class IndexController {

    $welcomeText = "Hello there!";   

    public function __construct(){}

    public function index() {
		$this->getView('index', ['welcomeText' => $this->welcomeText]);
 	}

 	public function getView($viewName, $params = []){
 		extract($params);
 		require_once(dirname(__FILE__).'/../views.'.$viewName.'.php');
 	}
}
