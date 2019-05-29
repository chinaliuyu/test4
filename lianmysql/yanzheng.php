<?php
session_start();
$username='';
if(!isset($_SESSION["uname"])){
	//echo "<script>alert('您还没有登录,清先登录');window.location.href='yanzheng.php';</script>";
}else{
	$username=$_SESSION["uname"];
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
		</style>
	</head>
	<body>
		<header>鲲鹏九班</header>
		<div class="content">
			<form method="post" action="kemu.php">
				<table width="40%">
					<tr>
						<td>登录名:</td>
						<td>
							<input type="text" name="uname" />
						</td>
					</tr>
					<tr>
						<td>密码:</td>
						<td>
							<input type="password" name="upwd" />
						</td>
					</tr>
					<tr>
						<td>验证码:</td>
						<td>
							<input type="text" name="ucode" />
							<img src="code.php" onclick="this.src='code.php?nocache='+Math.random()" title="点击换一张" alt="点击换一张"/>
						</td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="提交"</td>
					</tr>
				</table>
			</form>
		</div>
		<footer>
			版权所有：鲲鹏九班<br />
		</footer>
	</body>
</html>
