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
					<div style="background:#fee"><label style="font-size:16px;">用户注册</label></div>
					<div class="zhu_ce_info">
							<form method="get" id="user_zhuce">
							<input type="text" name="type" value="user_zhuce" hidden style="display:none"/>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">用户名：</label><input type="text" required="true" name="name" style="width:130px;" onblur="check_name(this)"/><span id="show"></span></div>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">密&nbsp;&nbsp;码：</label><input type="password" required="true"id="passwd" name="passwd" style="width:130px;"/></div>
							<div class="info_left"><label style="font-size:15px;color:white;font-family:'黑体';">确认密码：</label><input type="password" required="true" name="passwd1" style="width:130px;" onblur="check_passwd(this)"/><span id="show1"></span></div>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">年&nbsp;&nbsp;龄：</label><select style="width:50px" name="age"><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option>
							<option value="27">27</option><option value="28">28</option><option value="29">29</option></select></div>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">性&nbsp;&nbsp;别：</label><input type="radio" name="sex" value="男" checked>男&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="女">女</div>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">电&nbsp;&nbsp;话：</label><input type="text" required="true" name="phone" style="width:130px;"/></div>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">邮&nbsp;&nbsp;箱：</label><input type="text" required="true" name="email" style="width:130px;"/></div>
							<div class="info_left"><label style="font-size:15px;color:white;font-family:'黑体';">密码问题：</label><select name="question" style="width:130px"><option value="我在哪个学校上学？">我在哪个学校上学？</option><option value="我是哪里人？">我是哪里人？</option>
							<option value="我的QQ号是多少?">我的QQ号是多少?</option><option value="我在寝室号多少?">我在寝室号多少?</option></select></div>
							<div class="info"><label style="font-size:15px;color:white;font-family:'黑体';">答&nbsp;&nbsp;案：</label><input type="text"  required="true" name="answer" style="width:130px;"/></div>
							<div class="zhuce_but"><button style="font-size:15px;color:white;font-family:'黑体';" class="but_log" onclick="user_zhuce()">注册</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button style="font-size:15px;color:white;font-family:'黑体';" class="but_log">取消</button></div>						
					</div>
			</div>
		</div>
</body>
</html>