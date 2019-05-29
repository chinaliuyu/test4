<?php
	header('content-type:text/html;charset=utf-8');
	if(isset($_POST['submit'])){
		$kid=$_POST['kid'];
		$kname=$_POST['kname'];
		$kdes=$_POST['kdes'];
		$kpubdate=$_POST['kpubdate'];
		$sql="insert into kemu(kid,kname,kdes,kpubdate) values($kid,'$kname','$kdes','$kpubdate')";
		include("conn.php");  //执行sql语句之前,必须要连接数据库服务器
		$regresult=mysql_query($sql);  //执行sql语句
		if(!$regresult){
			die('注册失败'.mysql_error());
		}else{
			echo "<script>alert('注册成功');window.location.href='new_file.html';</script>";
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
		</style>
	</head>
	<body>
		<header>鲲鹏九班</header>
		<div class="content">
			<form method="post" action="kemu.php">
				<table width="40%">
					<tr>
						<td>科目id:</td>
						<td>
							<input type="number" name="kid" />
						</td>
					</tr>
					<tr>
						<td>科目名称:</td>
						<td>
							<input type="text" name="kname" />
						</td>
					</tr>
					<tr>
						<td>科目描述:</td>
						<td>
							<input type="text" name="kdes"/>
						</td>
					</tr>
					<tr>
						<td>科目记录时间:</td>
						<td>
							<input type="datetime" name="kpubdate"/>
						</td>
					</tr>
					<tr><td colspan="2"><input type="submit" name="submit" value="注册" /></td></tr>
				</table>
			</form>
		</div>
		<footer>
			版权所有：鲲鹏九班<br />
		</footer>
	</body>
</html>
