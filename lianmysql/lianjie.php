<?php
$conn=@mysql_connect("localhost","root","root");
if(!$conn){
	echo "连接失败",mysql_error();
}
mysql_query("set names utf8");//连接编码
mysql_select_db("biao",$conn);
$sql="select * from student";
$result=mysql_query($sql);
echo "<pre>";
while($row=mysql_fetch_array($result)){
	echo $row[2].'<br>';
}
?>