<?php
require_once '../config/connectdb.php';
header('Content-Type:text/html;charset=utf-8');
$aw=$_POST['id'];
$aaw=$_POST['name'];
$bw=$_POST['sex'];
$cw=$_POST['money'];
$dw=$_POST['email'];
$ew=$_POST['phone'];
$fw=$_POST['psd'];
$gw=$_POST['jf'];


$query="insert into MESSAGE(ID,M_cardID,M_name,M_sex,M_money,M_email,M_pihone,M_pas,M_jifen)
 values(' ','$aw','$aaw','$bw','$cw','$dw','$ew','$fw','$gw')";
$result=mysql_query($query) or die("Error in query:$query.".mysql_error());
echo "<script language=javascript>alert('会员增加成功');window.location='../huiyuanzhongxin/huiyuanleibiao.php';</script>";;
?>