<?php

class RequestController {

	public $admin;

	public function __construct($adminPage = 'admin') {
		$this->admin = $adminPage;
	}

	public function handleRequest() {
		$requestUrl = substr($_SERVER['REQUEST_URI'], 1);
		if(!(strlen($requestUrl) > 0)){
			return $this->homePage();
		}

		$this->urlParts = explode('/', $requestUrl);

		if($this->urlParts[0] == 'admin'){
			$this->adminPage();
		}

		$this->loadPage();
	}

	private function homePage(){
		require_once(CONTROLLERS.'/IndexController.php');
		$controller = new IndexController();
		$controller->index();
	}

	private function errorPage(){
		require_once(CONTROLLERS.'/IndexController.php');
		$controller = new IndexController();
		$controller->index();
	}

	private function adminPage(){
		require_once(CONTROLLERS.'/AdminController.php');
		$AC = new AdminController();
		if(isset($this->urlParts[1]) && method_exists($AC, $this->urlParts[1])){
			$function = $this->urlParts[1];
			return $AC->$function();
		} else {
			return $AC->index();
		}
	}

	private function loadPage(){
		$dbconn = pg_connect('host=127.0.0.1 port=5432 dbname=bros user=bros password=bros');
		$result = pg_fetch_assoc(pg_query($dbconn, 'SELECT * FROM "public"."pages" WHERE "title" = \''.$this->urlParts[0].'\''));
		if(!empty($result) && !is_null($result)){
			require_once(MODELS.'/Page.php');
			$page = new Page();
			$page->load($result);
			$page->show();
		} else {
			return $this->errorPage();
		}
	}
}