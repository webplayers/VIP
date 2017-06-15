<?php
require_once '../config/connectdb.php';
header('Content-Type:text/html;charset=utf-8');
$aw=$_POST['hykh'];
$bw=$_POST['zfmm'];
$cw=$_POST['czje'];

if ($aw&&$bw){
              $sql = "SELECT * FROM MESSAGE WHERE M_cardID='$aw' and M_pas='$bw'";
              $res = mysql_query($sql);
              $rs=mysql_num_rows($res);
                               if($rs){
                               $sqli ="UPDATE MESSAGE SET M_money=M_money+'$cw' WHERE M_cardID ='$aw'";
                               $result=mysql_query($sqli) or die("Error in query:$query.".mysql_error());
                               echo "<script language=javascript>alert('充值成功');window.location='../huiyuanzhongxin/huiyuanleibiao.php';</script>";
                                       }else
                                               echo "<script language=javascript> alert('用户名密码错误');history.back();</script>";
                                       }else
                                                 {
                 echo "<script language=javascript>alert('用户名密码不能为空');history.back();</script>";
                                                 }
?>
