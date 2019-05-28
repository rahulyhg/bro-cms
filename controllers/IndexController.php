<?php

require(dirname(__FILE__).'/DataBaseController.php');

class IndexController {

    public $welcomeText = "Hello there!";
    public $result; 

    public function __construct(){
    	$dbController = new DataBaseController();
	$this->result = $dbController->getSites();
	foreach($this->result as $result) {
	echo "<div><label>$result[name]</label>&nbsp; <span>$result[url]</span></div>";
	}


    }

    public function index() {
		$this->getView('index', ['welcomeText' => $this->welcomeText]);
 	}

 	public function getView($viewName, $params = []){
 		extract($params);
 		require_once(dirname(__FILE__).'/../views/'.$viewName.'.php');
 	}
}
