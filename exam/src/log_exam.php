<?php
	session_start();
	echo 
	'<div id="header"></div>
	<div id="navi">
		<div class="hd_exam">';
	echo "<h2>".$_SESSION["subject"]."</h2>";	
		
	echo '</div>
		<div class="hd_sel">
				<div class="loghd_sel_con">
					<a href="exam.php" style="padding:7px;font-size:16px;border: 1px solid #ccc;">单选题</a>
					&nbsp;&nbsp;<a href="exam-mul.php" style="padding:7px;font-size:16px;border: 1px solid #ccc;">多选题</a>
					&nbsp;&nbsp;<a href="exam-test.php" style="padding:7px;font-size:16px;border: 1px solid #ccc;">解答题</a>
					&nbsp;&nbsp;<a href="exam-score.php" style="padding:7px;font-size:16px;border: 1px solid #ccc;">交卷</a>
				</div>
		</div>
		<div  class="clear"></div>
	</div>';
?>