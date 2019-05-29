
<?php
	header('content-type:text/html;charset=utf-8');
	include("conn.php");  //执行sql语句之前,必须要连接数据库服务器
	$sql2="select cid,cname from class";
	$claresult=mysql_query($sql2);
	if(isset($_POST['submit'])){
		$sname=$_POST['sname'];
		$spwd=md5($_POST['spwd']);
		$ssex=$_POST['ssex'];
		$sage=$_POST['sage'];
		$scid=$_POST['scid'];
		$semail=$_POST['semail'];
		$saddress=$_POST['saddress'];
		$stel=$_POST['stel'];
		$classid=$_POST['cid'];
		$pubdate=$_POST['pubdate'];
		
		
		$filename='';
		$arr=$_FILES["image"];
		if(($arr["type"]=="image/png" || $arr["type"]=="image/jpeg") && $arr["size"]<10240000){
			$filename="./upload/image/".date("YmdHis").$arr("filename");
			if(file_exists($filename)){
				echo "已存在";
			}else{
				move_uploaded_file("tmp_name",$filename);
			}
		}
		echo $filename;
		
//		$sql="insert into student(sname,spwd,ssex,sage,scid,semail,saddress,stel,classid,pubdate) values('$sname','$spwd','$ssex',$sage,'$scid','$semail','$saddress','$stel',$classid,'$pubdate')";
//		$regresult=mysql_query($sql);  //执行sql语句
//		if(!$regresult){
//			die('注册失败'.mysql_error());
//		}else{
//			echo "<script>alert('注册成功');window.location.href='new_file.html';</script>";
//		}
//	}
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
			<form method="post" action="student.php" enctype="multipart/form-data">
				<table width="40%">
					<tr>
						<td>学生姓名:</td>
						<td>
							<input type="text" name="sname" />
						</td>
					</tr>
					<tr>
						<td>密码:</td>
						<td>
							<input type="password" name="spwd" />
						</td>
					</tr>
					<tr>
						<td>学生性别:</td>
						<td>
							男:
							<input type="radio" required="required" name="ssex"/>
							女:
							<input type="radio" required="required" name="ssex"/>
						</td>
					</tr>
					<tr>
						<td>学生年龄:</td>
						<td>
							<input type="number" name="sage"/>
						</td>
					</tr>
					<tr>
						<td>身份证:</td>
						<td>
							<input type="text" name="scid"/>
						</td>
					</tr>
					<tr>
						<td>邮箱:</td>
						<td>
							<input type="email" name="semail"/>
						</td>
					</tr>
					<tr>
						<td>地址:</td>
						<td>
							<input type="text" name="saddress"/>
						</td>
					</tr>
					<tr>
						<td>图片：</td>
						<td><input type="file" name="image"/></td>
					</tr>
					<tr>
						<td>电话:</td>
						<td>
							<input type="text" name="stel"/>
						</td>
					</tr>
					<tr>
						<td>班级外键:</td>
						<td>
							<select name="cid">
								<?php
									while($row=mysql_fetch_array($claresult)){
										echo "<option value=".$row['cid'].">".$row["cname"]."</option>";
									
								}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>时间:</td>
						<td>
							<input type="datetime" name="pubdate"/>
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