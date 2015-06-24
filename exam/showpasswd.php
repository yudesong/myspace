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
								<?php
								$passwd=$_REQUEST['passwd'];
								echo '
								<div style="float:left;margin-top:50px;margin-left:100px;">
								<label style="font-size:15px;font-family:黑体;">你的密码为：'.$passwd.
								'</div>';
								?>
			</div>
		</div>
</body>
</html>