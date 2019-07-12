<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "@error_reporting";
$dbname = "tz_2k15";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('Error in database Selection');
mysql_query('SET character_set_results=utf8');
mysql_query('SET NAMES utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_connection=utf8');
mysql_query('SET collation_connection=utf8_general_ci');
?>
