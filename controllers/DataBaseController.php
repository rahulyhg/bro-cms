<?php

class DataBaseController {

    public function __construct(){}

    public function connect() {
        $dbconn = pg_connect('host=127.0.0.1 port=5432 dbname=bros user=bros password=wegotburningblades');
        $result = pg_query($dbconn, 'SELECT * FROM public.bros_website');
        var_dump($dbconn);
        var_dump(pg_last_error());
        var_dump($result);
        var_dump(pg_fetch_all($result));
        return $dbconn;
 	}
}