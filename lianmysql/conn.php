<?php

//$conn=@mysql_connect("localhost","root","root") or die("连接失败:".mysql_error());
//mysql_query("set names utf8");
//mysql_select_db("biao",$conn);

$conn=@mysql_connect("localhost","root","root") or die("连接失败".mysql_error());
mysql_query("set names utf8");
mysql_select_db("biao",$conn); 
?>