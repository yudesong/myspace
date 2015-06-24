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
			if($index==0){
			echo 
			'<div id="find-manager">
			<div class="right-user-find">
			<label>请输入要查找的管理员姓名：</label>
			<input type="text" id="manager_name" name="manager_name" class="easyui-validatebox"/>
			<input type="button" value="查找" onclick="find_manager()"/>
			</div>
			<div class="data-grid">
			<table id="dg_manager" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_manager" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true">
			<thead>
			<tr>
			    <th field="name" width="35">管理员姓名</th>
				<th field="passwd" width="25">密码</th>
			</tr>
			</thead>	
			</table>
			</div>
			</div>';
			?>
			<?php }?>
			<!-- find_manager -->
			
			<!-- find_user -->
			<?php
			if($index==4){
			echo	
			'<div id="find-user">
			<div class="right-user-find">
			<label>请输入要查找的用户名：</label>
			<input type="text" id="user_name" name="name" class="easyui-validatebox"/>
			<input type="button" value="查找" onclick="find_user()">
			</div>
			<div class="data-grid">
			<table id="dg_user" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_user" toolbar="#toolbar" pagination="true" rownumbers="true" fitColumns="true" singleSelect="true">
			<thead>
			<tr>
			    <th field="name" width="35">用户名</th>
				<th field="passwd" width="35">密码</th>
				<th field="age" width="25">年龄</th>
				<th field="sex" width="25">性别</th>
				<th field="phone" width="70">电话</th>
				<th field="email" width="110">邮箱</th>
				<th field="question" width="100">密码提示问题</th>
				<th field="answer" width="80">答案</th>
			</tr>
			</thead>	
			</table>
			</div>
		</div>';
			?>
			<?php  }?>
			<!-- find_user -->
			
			<!-- find_subject -->
			<?php
			if($index==8){
			echo	
			'<div id="find-user">
			<div class="right-user-find">
			<label>请输入要查找的科目名称：</label>
			<input type="text" id="subject_name" name="name" class="easyui-validatebox"/>
			<input type="button" value="查找" onclick="find_subject()">
			</div>
			<div class="data-grid">
			<table id="dg_subject" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_subject" toolbar="#toolbar" pagination="true" fitColumns="true" singleSelect="true">
			<thead>
			<tr>
			    <th field="subjectid" width="2"></th>
				<th field="subject" width="35">科目名称</th>
			</tr>
			</thead>	
			</table>
			</div>
		</div>';
			?>
			<?php  }?>
			<!-- find_subject -->			
			
			<!-- find_test-->
			<?php
			if($index==12){
			echo	
			'<div id="find-user">
			<div class="right-user-find">
			<label>请输入要查找的试题编号：</label>
			<input type="text" id="testid" name="testid" class="easyui-validatebox"/>
			<input type="button" value="查找" onclick="find_test()">
			</div>
			<div class="data-grid">
			<table id="dg_test" class="easyui-datagrid" style="width:800px;height:500px"
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
			</div>
		</div>';
			?>
			<?php  }?>
			

			
			<!-- find_test -->

			<!-- find_score -->
			<?php
			if($index==16){
			echo	
			'<div id="find-user">
			<div class="right-user-find">
			<label>请输入要查找的用户名：</label>
			<input type="text" id="name" name="name" class="easyui-validatebox"/>
			<input type="button" value="查找" onclick="find_score()">
			</div>
			<div class="data-grid">
			<table id="dg_score" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_score" toolbar="#toolbar" pagination="true" fitColumns="true" singleSelect="true">
			<thead>
			<tr>
			    <th field="id" width="4"></th>
				<th field="name" width="35">用户名</th>
				<th field="subject" width="25">科目</th>
				<th field="score" width="25">分数</th>
				<th field="datetime" width="70">日期</th>
			</tr>
			</thead>	
			</table>
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
		echo  intval($index/4);
		echo');
		});
	</script>';
		?>
		
		

		
		
		
		<!-- footer -->
			<?php include 'footer.php'?>
		<!-- footer -->