<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>考试登陆</title>
<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="themes/icon.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
<script type="text/javascript" src="js/html.js"></script>
</head>
<body>
		<?php  include 'src/log_head.php'?>
		<div id="log">
			<div class="log_info">
				<form method="get" id="login_form">
					<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">用户名：<input type="text"  required="true" name="name" style="width:115px;"/></label></div>
					<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">密 &nbsp;码：</label><input type="password"  required="true" name="passwd" style="width:115px;"/></div>
					<div class="info">
					<!--
						<div style="float:left">
								<label style="font-size:15px;color:white;font-family:'黑体';">验证码：</label><input type="text" name="yzm"  style="width:50px;" maxlength="4"/>
						</div>
						<div style="float:right">
								<img src="src/yzm.php" alt="" class="img_yzm"/>
						</div>
					-->	
					</div><input name="type" value="user_login" hidden="hidden" style="display:none"/>
					<div class="info_but">&nbsp;&nbsp;&nbsp;<button style="font-size:15px;color:white;font-family:'黑体';" class="but_log" onclick="login()">登陆</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="font-size:15px;color:white;font-family:'黑体';" class="but_quit">取消</button></div>
				</form>
			<div>
		</div>
</body>
</html>