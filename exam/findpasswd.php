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
					<div style="background:#fee"><label style="font-size:16px;">找回密码</label></div>
					<div class="zhu_ce_info">
							<form method="get" id="find_passwd">
							<input type="text" name="type" value="user_find_passwd" hidden style="display: none">
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">用户名：</label><input type="text" required="true" name="name" style="width:150px;" onblur="find_question(this)"/><span id="show"></span></div>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">邮&nbsp;&nbsp;箱：</label><input type="text"  required="true" name="email" style="width:150px;"/></div>
							<div class="info_left"><label style="font-size:15px;color:white;font-family:'黑体';">密码问题：</label><input type="text" id="question" name="question" readonly style="width:150px;"></div>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">答&nbsp;&nbsp;案：</label><input type="text" required="true" name="answer" style="width:150px;"/></div>
							<div class="zhuce_but"><button style="font-size:15px;color:white;font-family:'黑体';" class="but_log" onclick="findpasswd()">确定</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="font-size:15px;color:white;font-family:'黑体';" class="but_log">取消</button></div>						
							</form>
					</div>
			</div>
		</div>
</body>
</html>