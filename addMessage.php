<?php
	$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if (!$conn) {
	die('Could not connect: ' . mysql_error());
	}
	mysql_query("set character set 'utf8'");//读库 
	mysql_query("set names 'utf8'");//写库 
	mysql_select_db(SAE_MYSQL_DB, $conn);
	$name = $_POST["name"];
	$email = $_POST["email"];
	$msg = $_POST["msg"];
	$datetime = date("Y-m-d H:i:s",time());
	$sql = "insert into tb_message(name,email,msg,datetime) values('$name','$email','$msg','$datetime')";
	$result = mysql_query($sql);
	if($result)
	{
        mysql_close($conn);
		echo  "0";
	}else
	{
        mysql_close($conn);
  		echo  "1";
	}
?>