//<?php
//	session_start();
//	if(!isset($_SESSION['sname'])){
//		echo "<script>alert('你还没有登录,请先登录');window.location.href='login.php';</script>";
//	}else{
//		$username=$_SESSION['sname'];
//	}
//?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style type="text/css">
			.content{
				width: 80%;
				margin: 0 auto;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<? include("conn.php"); ?>
			<div></div>
			<div>
				<h1>欢迎光临:<?php echo $username; ?></h1>
				<h2><a href="exit.php">退出登录</a>h</h2>
			</div>
			<?php
				include("footer.php");
//				mysql_close();
			?>
		</div>
	</body>
</html>