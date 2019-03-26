<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 4:58
 */

session_start();

const DB_XML = 'resource/xml/bd.php';

ini_set('default_charset', 'UTF-8');
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$options = [
    defined ("DBDRIVER") || define ('DBDRIVER','mysql'),
    defined ("DBHOST") || define ('DBHOST','127.0.0.1'),
    defined ("DBNAME") || define ('DBNAME','s17623'),
    defined ("DBUSER") || define ('DBUSER','s17623'),
    defined ("DBPASS") || define ('DBPASS','MgevqH8dZiut')
];

if ($_SERVER['SERVER_NAME'] === "tabel-refresh.herokuapp.com") {
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $host = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $dbname = substr($url["path"], 1);
}
