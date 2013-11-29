<?php
define('DB_SERVER', 'churchinfo.cczwts500sen.eu-west-1.rds.amazonaws.com:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'dclmict4Christ');
define('DB_DATABASE', 'locprofile');

$con = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

?>