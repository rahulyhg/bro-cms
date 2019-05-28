<?php

class DataBaseController {

    private $selectQuery ='SELECT * FROM public.bros_website';

    public function __construct(){}

    public function connect() {
        $dbconn = pg_connect('host=127.0.0.1 port=5432 dbname=bros user=bros password=wegotburningblades');
        return $dbconn;
    }

    public function getSites() {
        $dbConnect = $this->connect();
        $result = pg_fetch_all(pg_query($dbConnect, $this->selectQuery));
	
	return $result;
    }

    public function insertSite($name, $url) {
		$dbconn = $this->connect();
		$query =  "INSERT INTO bros_website VALUES ('$name', '$url')";
		pg_query($dbconn, $query);
		$result = pg_fetch_all(pg_query($dbconn, $this->selectQuery));

		foreach($result as $r) {
			echo "<div> $r[name]    $r[url]</div>";
		}
    }

}
