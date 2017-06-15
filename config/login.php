<?php  
require_once 'connectdb.php';
header('Content-Type:text/html;charset=utf-8');
$name = $_POST['name'];  
$passowrd = $_POST['password'];  
  
if ($name&&$passowrd){ 
              $sql = "SELECT * FROM TMS WHERE TMS_USER='$name' and TMS_PSWD='$passowrd'";  
              $res = mysql_query($sql);  
              $rs=mysql_num_rows($res); 
                               if($rs){  
                                       header("refresh:0;url=index.php");
                                        exit;
                                       }else
                                               echo "<script language=javascript> alert('用户名密码错误');history.back();</script>";
                                       }else
                                                 {
                 echo "<script language=javascript>alert('用户名密码不能为空');history.back();</script>";
                                                 } 
?>  
