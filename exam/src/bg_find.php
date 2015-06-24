<?php 
	session_start();
	if(!isset($_SESSION["managername"]))
	{
		header("Location: index.php");
	}
?>
		<!-- header -->
			<?php  include 'header.php' ;?>
		<!-- header -->		
		
		<!-- header -->
			<?php  	include 'head.php' ; ?>
		<!-- header -->		
		
		<!-- navigation -->
			<?php  	include 'navigation.php' ; ?>
		<!-- navigation -->
		
		<!-- wrapper -->
			<?php
					echo '<div id="right">';
			?>
			

			<!-- find_manager-->

			<!-- find_manager -->
			
			<!-- find_user -->
	
			<!-- find_user -->
			
			<!-- find_subject -->

			<!-- find_subject -->			
			
			<!-- find_test-->
			
			<!-- find_test -->

			<!-- find_score -->
			
			<!-- find_score -->				
	
			<?php
				echo '</div>';
				?>
				
		<!-- wrapper -->

		<!-- footer -->
			<?php include 'footer.php'?>
		<!-- footer -->