<?php  
$mysql_servername = "localhost";  
$mysql_username = "root";  
$mysql_password ="kaixi123";  
$mysql_database ="huiyuan";  
mysql_connect($mysql_servername , $mysql_username , $mysql_password);
mysql_query("SET NAMES UTF8");
mysql_query("set character_set_client=utf8");
mysql_query("set character_set_results=utf8");
mysql_select_db($mysql_database);   
?>
