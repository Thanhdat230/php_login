<?php
/*DataBase credentials.Assuming you are running MySQL sever with default setting (user 'root' with no password)*/
define('DB_SERVER', 'locslhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');

/* Attempt to connect to Mysql database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//check connection
if($mysqli === false){
    die("ERROR: Could not connect. " .$mysqli->connect_error);
}
?>