<?php
	$name = $_POST["name"];
	$passwd = $_POST["passwd"];

	include_once 'conn.php';
	
	$sql = "select * from tb_user where name='$name' and passwd='$passwd'";
	$resultset = mysql_query($sql);
	if($row=mysql_fetch_object($resultset))
	{
		session_start();
		$_SESSION["name1"]=$name;
		header("Location:http:show_contact.php");
    }else
    {
    	echo "登录失败";
    }
?>