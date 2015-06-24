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
				
			<?php
					$index=$_GET['index'];
			?>
			<!-- find_manager-->
			<?php
			if($index==3){
			echo 
			'<div class="data-grid" style="margin:0;">
			<table id="del-manager" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_manager" toolbar="#toolbar" pagination="true" fitColumns="true" singleSelect="true">
			<thead>
			<tr>
			    <th field="id" width="2"></th>			
			    <th field="name" width="35">管理员姓名</th>
				<th field="passwd" width="25">密码</th>
			</tr>
			</thead>	
			</table>
			<div id="toolbar">
				<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="deleteManager()">删除</a>
			</div>
			</div>';
			?>
			<?php }?>
			<!-- find_manager -->
			
			<!-- find_user -->
			<?php
			if($index==7){
			echo	
			'<div class="data-grid" style="margin:0;">
			<table id="del-user" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_user" toolbar="#toolbar" pagination="true"  fitColumns="true" singleSelect="true">
			<thead>
			<tr>
				<th field="id" width="14"></th>		
			    <th field="name" width="35">用户名</th>
				<th field="age" width="25">年龄</th>
				<th field="sex" width="25">性别</th>
				<th field="phone" width="70">电话</th>
				<th field="email" width="110">邮箱</th>
				<th field="question" width="100">密码提示问题</th>
				<th field="answer" width="80">答案</th>
			</tr>
			</thead>	
			</table>
			<div id="toolbar">
				<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="deleteUser()">删除</a>
			</div>
			</div>
		</div>';
			?>
			<?php  }?>
			<!-- find_user -->
			
			<!-- find_subject -->
			<?php
			if($index==11){
			echo	
			'<div class="data-grid" style="margin:0">
			<table id="del-subject" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_subject" toolbar="#toolbar" pagination="true" fitColumns="true" singleSelect="true">
			<thead>
			<tr>
				<th field="subjectid" width="2"></th>
			    <th field="subject" width="35">科目名称</th>
			</tr>
			</thead>	
			</table>
				<div id="toolbar">
				<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="deleteSubject()">删除</a>
			</div>			
			</div>
		</div>';
			?>
			<?php  }?>
			<!-- find_subject -->			
			
			<!-- find_test-->
			<?php
			if($index==15){
			echo	
			'<div class="data-grid" style="margin:0">
			<table id="del-test" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_test" toolbar="#toolbar" pagination="true" fitColumns="true" singleSelect="true">
			<thead>
			<tr>
			    <th field="testid" width="30">题号</th>
				<th field="subject" width="60">科目</th>
				<th field="question" width="100">试题</th>
				<th field="answera" width="100">答案A</th>
				<th field="answerb" width="100">答案B</th>
				<th field="answerc" width="100">答案C</th>
				<th field="answerd" width="100">答案D</th>
				<th field="rightanswer" width="80">正确答案</th>
				<th field="jiexi" width="100">解析</th>
				<th field="score" width="30">分值</th>
			</tr>
			</thead>	
			</table>
				<div id="toolbar">
				<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="deleteTest()">删除</a>
				</div>	
			</div>
		</div>';
			?>
			<?php  }?>
			<?php
			echo '<script type="text/javascript">

			</script>';
			?>
			
			<!-- find_test -->

			<!-- find_score -->
			<?php
			if($index==18){
			echo	
			'<div class="data-grid" style="margin:0">
			<table id="del-score" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_score" toolbar="#toolbar" pagination="true" fitColumns="true" singleSelect="true">
			<thead>
			<tr>
				<th field="id" width="4"></th>
				<th field="name" width="25">用户名</th>
				<th field="subject" width="25">科目</th>
				<th field="score" width="25">分数</th>
				<th field="datetime" width="25">时间</th>
			</tr>
			</thead>	
			</table>
					<div id="toolbar">
					<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="deleteScore()">删除</a>
					</div>	
			</div>
		</div>';
			?>
			<?php  }?>
			<!-- find_score -->				
			<?php
				echo '</div>';
				?>
				
		<!-- wrapper -->
		<?php
			echo   
			'<script type="text/javascript">
			$(function(){
			$("#choce").accordion({
			animate:false
			});
			$("#choce").accordion("select",';
		?>	
		<?php
		echo	 intval($index/4);
		echo');
		});
	</script>';
		?>
		<!-- footer -->
			<?php include 'footer.php'?>
		<!-- footer -->