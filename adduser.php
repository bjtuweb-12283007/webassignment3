<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add User</title>
</head>

<body>
<?php
	//$con = mysql_connect("localhost","root","");
	//$con = mysql_connect("59.188.244.39","a0402232708","16261866");
	$con = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if (!$con)
  	{
 		 die('Could not connect: ' . mysql_error());
  	}

	mysql_select_db(SAE_MYSQL_DB, $con);

	$sql="INSERT INTO firsttable (email, password)
	VALUES
	('$_POST[email_new]','$_POST[password_new]')";

	if (!mysql_query($sql,$con))
  	{
  	die('Error: ' . mysql_error());
  	}
	else
	{
		$url = "http://3.husky4.sinaapp.com/";
		echo "<script language='javascript' type='text/javascript'>";
		echo "alert('注册成功，点击确定跳转到主页尝试登录');";
		echo "window.location.href='$url'";
		echo "</script>";
	}

	mysql_close($con)
?>
</body>
</html>