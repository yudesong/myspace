<?php 
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("Location: index.php");
	}
	$name = $_SESSION["username"];
	$subject = $_SESSION["subject"];
	//$subject=$_REQUEST["select"];
	//$_SESSION["subject"]=$subject;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>考试结果</title>
<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="themes/icon.css">
<link rel="stylesheet" type="text/css" href="css/demo.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
<script type="text/javascript" src="js/html.js"></script>
</head>
<body>
		<?php  include 'src/log_exam-score.php'?>
		<div id="exam">
		<?php		
		include 'src/conn.php';
		$con=new ConnDB;
		$con->get_conn();
		//echo $_SESSION["subject"];
		$sql="select testid,question,answer,youranswer,rightanswer,testrightanswer,jiexi,score from exam_score where subject='".$_SESSION["subject"]."'";
	//	$sql="select testid,question,answera,answerb,answerc,answerd from tb_test where subject='$subject' limit $offset,$pagesize";
		$score_sql = "select score from tb_score where name='$name' and subject='$subject'";
		$score_rs = @mysql_query($score_sql);
		if($score_row=@mysql_fetch_array($score_rs))
		{
			$score = $score_row[0];
		#	$rightnum = $score_row[1];
		#	$rongnum = $score_row[2];
		}
		echo '<div class="exam-leixing">考试结果：';
		echo '你的得分为：'.$score.'分';
	#	echo '答对了：'.$rightnum.'  答错了：'.$rongnum;
		echo '</div>';
		$rs=@mysql_query($sql);
		while($row=@mysql_fetch_array($rs))
			{
			#------题号   试题
			if($row[7]==0.0) echo "<div style='background:#FF1493;'>";
			else echo "<div style='background:#00FFFF;'>";
			echo '<div class="exam-test-score">&nbsp;&nbsp;<label name="testid" style="font-size:15px;">';
			echo $row[0];
			echo '.</label>&nbsp;&nbsp;<label style="font-size:15px;">';
			echo  $row[1];
			echo '</label></div>';
			echo '<div class="exam-test-score" style="margin-top:1px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:15px;">';
			echo "你的答案：".$row[2].". ".$row[3];
			echo '</label></div><div class="exam-test-score" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:15px;">';
			echo "正确答案：".$row[4].". ".$row[5];	
			echo '</label></div><div class="exam-test-score" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:15px;">';
			echo "答案解析：".$row[6];	
			echo '</label></div><div class="exam-test-score" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size:15px;">';
			echo "该题得分：".$row[7];
			echo '</div>';
			echo '</div>';
			echo "</br>";
			}
			
		?>
		</div>		
</body>
</html>