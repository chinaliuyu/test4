<?php
	session_start();
	include("conn.php");
	if(isset($_POST["submit"])){
		$sname=$_POST["sname"];
		$spwd=md5($_POST["spwd"]);
		$scode=$_POST["scode"];
		if($sname && $spwd){
			if($scode==$_SESSION["authcode"]){
				$sql="select sname from student where sname='$sname' and spwd='$spwd'";
				$lresult=mysql_query($sql);
				$rowresult=mysql_num_rows($lresult);//获取语句的记录数
				if($rowresult){
					$_SESSION["sname"]=$sname;
					echo "<script>alert('登陆成功');window.location.href='index.php';</script>";
				}else{
					echo "<script>alert('登录失败,请重新登录');window.location.href='login.php';</script>";
				}
			}
			else{
				echo "<script>alert('验证码不正确,请重新登录');window.location.href='login.php';</script>";
			}
		}
		else{
			echo "<script>alert('提交失败');window.location.href='login.php';</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<style type="text/css">
			header{
				width: 80%;
				margin: 0 auto;
				text-align: center;
				height: 120px;
			}
			.content{
				width: 80%;
				margin: 0 auto;
				text-align: center;
			}
			footer{
				width: 80%;
				margin: 0 auto;
				text-align: center;
				height: 120px;
			}
			table{
				border: red solid 1px;
			}
		</style>
	</head>
	<body>
		<header>鲲鹏九班</header>
		<div class="content">
			<form method="post" action="login.php">
				<table width="30%" align="center">
					<tr>
						<td>用户名:</td>
						<td>
							<input type="text" name="sname" required="required" />
						</td>
					</tr>
					<tr>
						<td>密码:</td>
						<td>
							<input type="password" name="spwd" required="required" />
						</td>
					</tr>
					<tr>
						<td>验证码:</td>
						<td>
							<input type="text" name="scode" />
						</td>
					</tr>
					<tr>
						<td>
						<img src="code.php"  onclick="this.src='code.php?nocache='+Math.random()" title="点击换一张" alt="点击换一张"/>
					</td>
						<td><input type="submit" name="submit" value="提交" /></td>
						</tr>
				</table>
			</form>
		</div>
		<footer>
			版权所有：鲲鹏九班<br />
		</footer>
	</body>
</html>
