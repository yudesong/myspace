<?php 
	session_start();
	if(!isset($_SESSION["username"]))
	{
		header("Location: index.php");
	}
	
	if($_REQUEST["select"]!="")
	{
		$subject=$_REQUEST["select"];
		$_SESSION["subject"]=$subject;
	}
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
		$sql="select testid,question,answera,answerb,answerc,answerd,rightanswer from tb_test where subject='".$_SESSION["subject"]."' and leixing=0";
echo '<div class="exam-leixing" style="margin-left:0px;"></br>一、单项选择题（本题型共16小题，每小题1.5分，共24分。每小题只有一个正确答案，请从每小题的备选答案中选出一个你认为正确的答案。）</div>';
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
			echo '<div class="exam-test" id="answer-a">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="A" name="';
			echo $row[0];
			echo '" onclick="checkAnswer(this)" ra="'.$row[6].'"/>&nbsp;<label style="font-size:15px;">';
			echo "A.".$row[2];
			echo '</label></div><div class="exam-test" id="answer-b">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  value="B"  name="';
			echo $row[0];
			echo '" onclick="checkAnswer(this)"  ra="'.$row[6].'"/>&nbsp;<label style="font-size:15px;">';
			echo "B.".$row[3];	
			echo '</label></div><div class="exam-test" id="answer-c">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  value="C"  name="';
			echo $row[0];
			echo '" onclick="checkAnswer(this)"  ra="'.$row[6].'"/>&nbsp;<label style="font-size:15px;">';
			echo "C.".$row[4];	
			echo '</label></div><div class="exam-test" id="answer-d">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  value="D"  name="';
			echo $row[0];
			echo '" onclick="checkAnswer(this)"  ra="'.$row[6].'"/>&nbsp;<label style="font-size:15px;">';
			echo "D.".$row[5];				
			echo '</label>';
			echo '</div>';
			echo '</div>';
			echo "<hr>";
			}
		?>
		<div style="margin-left:45%;padding:20px;margin-top:10px;">
		<a href="exam-mul.php" style="font-size:15px;color:white;font-family:'黑体';" class="but_log">下一页</a>
		</div>
		</form>
		</div>
</body>
</html>