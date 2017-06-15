<?php
require_once '../config/connectdb.php';
header('Content-Type:text/html;charset=utf-8');
$aw=$_POST['jmm'];
$bw=$_POST['nmm'];

if ($aw){
 $sql = "SELECT * FROM TMS WHERE TMS_PSWD='$aw'";
 $res = mysql_query($sql);
 $rs=mysql_num_rows($res);
      if($rs){
                   $sqli ="UPDATE TMS SET TMS_PSWD='$bw'";
                   $result=mysql_query($sqli) or die("Error in query:$query.".mysql_error());
                   echo "<script language=javascript>alert('修改密码成功,请重新登录！');window.location='../login.html';</script>";
              }else
                                               echo "<script language=javascript> alert('旧密码错误');history.back();</script>";
          }else
                   {echo "<script language=javascript>alert('密码不能为空');history.back();</script>";}
?>
