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
		<div id="log_zhuce">
			<div class="zhuce">
					<div style="background:#fee"><label style="font-size:16px;">管理员登陆</label></div>
					<div class="zhu_ce_info">
							<form method="get" id="manager_login">
							<input type="text" name="type" value="manager_login" hidden>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">用户名：</label><input type="text" required="true" name="name" style="width:130px;"/></div>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">密&nbsp;&nbsp;码：</label><input type="password" required="true" name="passwd" style="width:130px;"/></div>
							<div class="zhuce_but"><button style="font-size:15px;color:white;font-family:'黑体';" class="but_log" onclick="manager_login()">登陆</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="font-size:15px;color:white;font-family:'黑体';" class="but_log">取消</button></div>						
					</div>
			</div>
		</div>
</body>
</html>