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
					<a href="exit.php" style="margin-left:40px;padding:7px;font-size:16px;border: 1px solid #ccc;">退出</a>
				</div>
		</div>
		<div  class="clear"></div>
	</div>';
?>