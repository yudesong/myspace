<?php 
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("Location: index.php");
	}
	//$subject=$_REQUEST["select"];
	//$_SESSION["subject"]=$subject;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>考试</title>
<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="themes/icon.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
<script type="text/javascript" src="js/html.js"></script>
</head>
<body>
		<?php  include 'src/log_exam.php'?>
		<div id="exam">
		<form  id="exam_submit"  method="post">
		<?php		
		include 'src/conn.php';
		$con=new ConnDB;
		$con->get_conn();
		//echo $_SESSION["subject"];
		$sql="select testid,question,answera,answerb,answerc,answerd,rightanswer from tb_test where subject='".$_SESSION["subject"]."' and leixing=2";
	//	$sql="select testid,question,answera,answerb,answerc,answerd from tb_test where subject='$subject' limit $offset,$pagesize";
echo '<div class="exam-leixing"></br>三、综合题（本题型共4小题56分。其中一道小题可以选用中文或英文解答，请仔细阅读答题要求。如使用英文解答，须全部使用英文，答题正确的，增加5分。本题型最高得分为61分。答案中的金额单位以万元表示，涉及计算的，要求列出计算步骤。）</div>';
		$rs=@mysql_query($sql);
		while($row=@mysql_fetch_array($rs))
			{
			#------题号   试题	
			echo "<div>";
			echo '<div class="exam-test">&nbsp;&nbsp;<label name="testid" style="font-size:15px;">';
			echo $row[0];
			echo '.</label>&nbsp;&nbsp;<label style="font-size:15px;" class="question">';
			echo  $row[1];
			echo '</label></div>';
			
			#-----答案
			echo '<div class="exam-test" id="answer-a">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="A" name="';
			echo $row[0];
			echo '" onclick="checkMulAnswer(this)" ra="'.$row[6].'"/>&nbsp;<label style="font-size:15px;">';
			echo "A.".$row[2];
			echo '</label></div><div class="exam-test" id="answer-b">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  value="B"  name="';
			echo $row[0];
			echo '" onclick="checkMulAnswer(this)"  ra="'.$row[6].'"/>&nbsp;<label style="font-size:15px;">';
			echo "B.".$row[3];	
			echo '</label></div><div class="exam-test" id="answer-c">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  value="C"  name="';
			echo $row[0];
			echo '" onclick="checkMulAnswer(this)"  ra="'.$row[6].'"/>&nbsp;<label style="font-size:15px;">';
			echo "C.".$row[4];	
			echo '</label></div><div class="exam-test" id="answer-d">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  value="D"  name="';
			echo $row[0];
			echo '" onclick="checkMulAnswer(this)"  ra="'.$row[6].'"/>&nbsp;<label style="font-size:15px;">';
			echo "D.".$row[5];				
			echo '</label>';
			echo '</div>';
			echo '</div>';
			echo "<hr>";
			}
		?>
		<div style="margin-left:35%;padding:20px;margin-top:10px;">
		<a href="exam-mul.php" style="font-size:15px;color:white;font-family:'黑体';" class="but_log">上一页</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="" style="font-size:15px;color:white;font-family:'黑体';" class="but_log">提&nbsp;交</a>
		</div>
		</form>
		</div>		
</body>
</html>