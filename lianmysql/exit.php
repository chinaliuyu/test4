<?php
header("content-stype:text/html;charset=utf-8");
	session_start();
	unset($_SESSION["sname"]);
	session_destroy();
	
	if(isset($_SESSION["sname"])){
		echo "退出失败";
	}
	else{
		echo "<script>window.location.href='login.php'</script>";
	}
?>