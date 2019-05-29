<?php

if(isset($_POST["submit"])){

$cname=$_POST["cname"];
$cnum=$_POST["cnum"];
$cdes=$_POST["cdes"];
$sql="insert into class(cname,cnum,cdes) values('$cname',$cnum,'$cdes')";
include("conn.php");//执行sql语句之前，必须要连接数据服务器
$regresult=mysql_query($sql);//执行sql语句
if(!$regresult){
	die("注册失败".mysql_error());
}
else{
	echo "<script>alert('注册成功');window.location.href='reg.html';</script>";
}
}
?>