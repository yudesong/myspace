<!DOCTYPE html>
<html>
<head>
	<title>通讯录</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
	<link href="css/index.css" rel="stylesheet"/>	
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
	<link href="css/bootstrap-theme.css" rel="stylesheet"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>  
	<style type='text/css'>
	.syntaxhighlighter,
	.syntaxhighlighter a,
	.syntaxhighlighter div,
	.syntaxhighlighter code,
	.syntaxhighlighter table,
	.syntaxhighlighter table td,
	.syntaxhighlighter table tr,
	.syntaxhighlighter table tbody,
	.syntaxhighlighter table thead,
	.syntaxhighlighter table caption,
	.syntaxhighlighter textarea {
	font-size: 12px !important; /* Set the font size in pixels */  
	font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important; /* Set the font type */  
	}
.syntaxhighlighter table caption {
/* For Title(Caption) */  
font-size: 14px !important; /* Set the font size in pixels */  
font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important; /* Set the font type */  
}
.syntaxhighlighter.nogutter td.code .line {
/* Set the left padding space when no-gutter in ver. 3.0 */  
padding-left: 3px !important;
}
.syntaxhighlighter {
/* For Chrome/Safari(WebKit) */  
/* Hide the superfluous vertical scrollbar in ver. 3.0 */  
overflow-y: hidden !important;
padding: 1px !important;
}
.widget-area.syntaxhighlighter a,
.widget-area.syntaxhighlighter div,
.widget-area.syntaxhighlighter code,
.widget-area.syntaxhighlighter table,
.widget-area.syntaxhighlighter table td,
.widget-area.syntaxhighlighter table tr,
.widget-area.syntaxhighlighter table tbody,
.widget-area.syntaxhighlighter table thead,
.widget-area.syntaxhighlighter table caption,
.widget-area.syntaxhighlighter textarea {
/* For Widget */  
font-size: 14px !important; /* Set the font size in pixels */  
font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important; /* Set the font type */  
}
.widget-area table caption {
/* For Widget */  
/* For Title(Caption) */  
font-size: 10px !important; /* Set the font size in pixels */  
font-family: "Consolas", "Bitstream Vera Sans Mono", "Courier New", Courier, monospace !important; /* Set the font type */  
}
</style>
<link rel="stylesheet" href="css/style.css" media="screen" />
	<!-- link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noticia+Text:400,700italic,700,400italic" media="screen" / -->
	<style>
		*::selection { background: #0099cc; }
		*::-moz-selection { background: #0099cc; }
		body { background: #ffffff  }
		a, .tabs ul.nav li a:hover, .tabs ul.nav li.active a, .dropcap, .toggle.hover .toggle-title, li.comment cite a:hover, h3.widget-title, .post-meta .meta-title:hover, .the-latest a:hover h4, .aw_socialcounter_widget li a:hover, .aw_tabbed_widget #tab-latest-comments a:hover { color: #0099cc; }
		a:hover { color: #b30000; }
		input:focus, textarea:focus { border-color: #0099cc; }
		#searchsubmit, .highlight, .aw_tabbed_widget .tabs ul.nav li.active a, footer .aw_tabbed_widget .tabs ul.nav li.active a, #top .aw_tabbed_widget .tabs ul.nav li.active a, .aw_tabbed_widget .tabs ul.nav li a:hover, footer .aw_tabbed_widget .tabs ul.nav li a:hover, #top .aw_tabbed_widget .tabs ul.nav li a:hover, .aw_twitter_widget .twitter-icon, .testimonial-icon, #top-closed:hover, .flex-control-nav a:hover, .flex-control-nav a.flex-active { background-color: #0099cc; }
		.submit { background-color: #0099cc; border-color: #007399; }
		.submit:hover { background-color: #b30000; border-color: #860000; }
		#searchsubmit:hover { background-color: #b30000; }
		.toggle.hover .toggle-icon { border-top-color: #0099cc; }
		.toggle.hover.active .toggle-icon { border-bottom-color: #0099cc; }
		.flex-direction-nav li .flex-prev:hover { border-right-color: #0099cc; }
		.flex-direction-nav li .flex-next:hover { border-left-color: #0099cc; }
		@media only screen and (min-width: 768px) and (max-width: 959px) {
			.aw_tabbed_widget .tabs ul.nav li a:hover, .tabs ul.nav li.active a { color: #0099cc; }
		}
		@media screen and (max-width: 767px) {
			.tabs ul.nav li a:hover, .tabs ul.nav li.active a { color: #0099cc; }
		}
	</style>
	
	
	
	
	
</head>
<body class="body">
	<div style="margin-left:20px;margin-top:0px;width:1200px;">	
        <a href="admin.php" class="btn btn-primary">管理</a>
<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>
							编号
						</th>
						<th>
							姓名
						</th>
						<th>
							类型
						</th>						
						<th>
							性别
						</th>
						<th>
							电话
						</th>
						<th>
							邮箱
						</th>
						<th>
							住址
						</th>																		
					</tr>
				</thead>
				<tbody>
					<?php
						$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
						if (!$conn) {
							die('Could not connect: ' . mysql_error());
						}
						mysql_query("set character set 'utf8'");//读库 
						mysql_query("set names 'utf8'");//写库 
						mysql_select_db(SAE_MYSQL_DB, $conn);
						$page=intval($_REQUEST["page"]);
						if($page=="") $page=1;
						$sql="select id,name,leixing,sex,phone,email,location from tb_contact order by id limit ".(($page-1)*5).",5";
						$resultset=@mysql_query($sql);
						$var=1;
						while($row = @mysql_fetch_array($resultset)){
							
							echo "<tr class='";
							if($var%5==1) echo "warning'";
							if($var%5==2) echo "success'";
							if($var%5==3) echo "info'";	
							if($var%5==4) echo "warning'";
							if($var%5==0) echo "success'";
							echo "><td>";
							echo $row["id"];
							echo "</td>";
							echo "<td>";
							echo $row["name"];
							echo "</td>";
							echo "<td>";
							echo $row["leixing"];
							echo "</td>";
							echo "<td>";
							echo $row["sex"];
							echo "</td>";
							echo "<td>";
							echo $row["phone"];
							echo "</td>";
							echo "<td>";
							echo $row["email"];
							echo "</td>";
							echo "<td>";
							echo $row["location"];
							echo "</td>";
							echo "</tr>";
							$var++;
						}
						mysql_close($conn);
					?>
				</tbody>
			</table>
        
        <div class="span12" style="margin-left:30%;">
			<div class="pagination">
				<ul>
					<li>
						<a href="show_contact.php?page=1">1</a>
					</li>
					<li>
						<a href="show_contact.php?page=2">2</a>
					</li>
					<li>
						<a href="show_contact.php?page=3">3</a>
					</li>
					<li>
						<a href="show_contact.php?page=4">4</a>
					</li>
					<li>
						<a href="show_contact.php?page=5">5</a>
					</li>
				</ul>
			</div>
			</div>
</div>
</body>
</html>