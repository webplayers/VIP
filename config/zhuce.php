<?php
require_once 'connectdb.php';
header('Content-Type:text/html;charset=utf-8');
$aw=$_POST['user'];
$bw=$_POST['psd'];
//$bw = md5($bw);
$query="insert into TMS(TMS_USER,TMS_PSWD)  values('$aw','$bw')";
$result=mysql_query($query) or die("Error in query:$query.".mysql_error());
echo "<script language=javascript>alert('注册成功');history.back();history.back();</script>".mysql_insert_id();
?>
