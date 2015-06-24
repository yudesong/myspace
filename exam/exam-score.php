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
	//	include 'src/conn.php';
	//	$con=new ConnDB;
	//	$con->get_conn();
		//echo $_SESSION["subject"];
		//$sql="select testid,question,answera,answerb,answerc,answerd,rightanswer from tb_test where subject='".$_SESSION["subject"]."' and leixing=2";
	//	$sql="select testid,question,answera,answerb,answerc,answerd from tb_test where subject='$subject' limit $offset,$pagesize";
		echo '<div class="exam-leixing">试卷已提交！谢谢！</div>';
		/*
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
			*/
		?>
		</div>		
</body>
</html>