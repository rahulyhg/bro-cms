<?php
class IndexController {

    public $welcomeText = "Hello there!";   

    public function __construct(){
    }

    public function index() {
	echo '<!DOCTYPE html>
			<html>
			    <head>
			        <title>Bros page</title>
			    </head>
			    <body>
			        <h1>Bro page</h1>
			        <p>Welcome to the bro page.</p>';
			   
        echo '<br/>';
	echo "<label>$this->welcomeText</label>";
	echo '<form><input type="text" name="textInputField"/></form>'; 
	echo '</body></html>';
 }
}
