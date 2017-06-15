<?php
require_once '../config/connectdb.php';
header('Content-Type:text/html;charset=utf-8');
$aw=$_POST['yhxx'];

$query="insert into YOUHUI(Y_id,Y_message)
 values(' ','$aw')";
$result=mysql_query($query) or die("Error in query:$query.".mysql_error());
echo "<script language=javascript>alert('发布成功！！');window.location='./chakanindex.php';</script>";;

?>