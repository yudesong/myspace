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
			if($index==2){
			echo 
			'<div class="data-grid" style="margin:0;">
			<table id="dg-manager" class="easyui-datagrid" style="width:800px;height:500px"
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
				<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editManager()">修改</a>
			</div>
			</div>';
			
			echo 
			'<div id="dlg-manager" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px" closed="true" buttons="#dlg-buttons">
			<div class="ftitle">管理员信息</div>
			<form id="fm-manager" method="post">
			<div class="fitem">
			<input type="text" id="id" name="id"  hidden/>
			<label>管理员姓名:</label>
			<input id="name" name="name" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
			<label>密码:</label>
			<input id="passwd" name="passwd" class="easyui-validatebox" required="true">
			</div>
			</form>
		</div>
		<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveManager()">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="closeDlg()">Cancel</a></div>';
			
			?>
			<?php }?>
			<!-- find_manager -->
			
			<!-- find_user -->
			<?php
			if($index==6){
			echo	
			'<div class="data-grid" style="margin:0">
			<table id="dg-user" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_user" toolbar="#toolbar" pagination="true" fitColumns="true" singleSelect="true">
			<thead>
			<tr>
			    <th field="id" width="14"></th>				
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
				<div id="toolbar">
				<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">修改</a>
			</div>
		</div>';
		
		echo 
			'<div id="dlg-user" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px" closed="true" buttons="#dlg-buttons">
			<div class="ftitle">用户信息</div>
			<form id="fm-user" method="post">
			<div class="fitem"><input type="text" id="id" name="id" hidden/></div>
			<div class="fitem"><label >用户名：</label><input type="text" class="easyui-validatebox" required="true" name="name" style="width:130px;" onblur="check_name(this)"/><span id="show"></span></div>
			<div class="fitem"><label >密&nbsp;&nbsp;码：</label><input type="password" class="easyui-validatebox" required="true"id="passwd" name="passwd" style="width:130px;"/></div>
			<div class="fitem"><label >年&nbsp;&nbsp;龄：</label><select style="width:50px" name="age"><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option>
			<option value="27">27</option><option value="28">28</option><option value="29">29</option></select></div>
			<div class="fitem"><label >性&nbsp;&nbsp;别：</label><input type="radio" name="sex" value="男" checked>男&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="sex" value="女">女</div>
			<div class="fitem"><label >电&nbsp;&nbsp;话：</label><input type="text" class="easyui-validatebox" required="true" name="phone" style="width:130px;"/></div>
			<div class="fitem"><label >邮&nbsp;&nbsp;箱：</label><input type="text" class="easyui-validatebox" required="true" name="email" style="width:130px;"/></div>
			<div class="fitem"><label >密码问题：</label><select name="question" style="width:130px"><option value="我在哪个学校上学？">我在哪个学校上学？</option><option value="我在哪个公司上班？">我在哪个公司上班？</option><option value="我是哪里人？">我是哪里人？</option>
			<option value="我的QQ号是多少?">我的QQ号是多少?</option><option value="我在寝室号多少?">我在寝室号多少?</option></select></div>
			<div class="fitem"><label >答&nbsp;&nbsp;案：</label><input type="text" class="easyui-validatebox" required="true" name="answer" style="width:130px;"/></div>
			</form>
		</div>
		<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="closeDlg()">Cancel</a></div>';
			?>
			<?php  }?>
			<!-- find_user -->
			
			<!-- find_subject -->
			<?php
			if($index==10){
			echo	
			'<div class="data-grid" style="margin:0">
			<table id="dg-subject" class="easyui-datagrid" style="width:800px;height:500px"
			url="conn.php?type=get_subject" toolbar="#toolbar" pagination="true" fitColumns="true" singleSelect="true">
			<thead>
			<tr>
				<th field="subjectid" width="2"></th>
			    <th field="subject" width="35">科目名称</th>
			</tr>
			</thead>	
			</table>
				<div id="toolbar">
				<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editSubject()">修改</a>
			</div>			
			</div>
		</div>';
		
		echo 
			'<div id="dlg-subject" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px" closed="true" buttons="#dlg-buttons">
			<div class="ftitle">科目信息</div>
			<form id="fm-subject" method="post">
			<div class="fitem">
			<input type="text" id="subjectid" name="subjectid"  hidden/>
			<label>科目名称:</label>
			<input id="subject" name="subject" class="easyui-validatebox" required="true">
			</div>
			</form>
		</div>
		<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveSubject()">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="closeDlg()">Cancel</a></div>';
		
		
		
			?>
			<?php  }?>
			<!-- find_subject -->			
			
			<!-- find_test-->
			<?php
			if($index==14){
			echo	
			'<div class="data-grid" style="margin:0">
			<table id="dg-test" class="easyui-datagrid" style="width:800px;height:500px"
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
				<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editTest()">修改</a>
				</div>						
			</div>
			</div>';
		
			echo 
			'<div id="dlg-test" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px" closed="true" buttons="#dlg-buttons">
			<div class="ftitle">试题信息</div>
			<form id="fm-test" method="post">
						<table>
				<tr>
					<th>题号：</th>
					<th><input name="testid" class="easyui-validatebox" required="true"/></th>
				</tr>
				<tr>
					<th>科目：</th>
					<th><input name="subject" class="easyui-validatebox" required="true"/></th>
				</tr>
				<tr>
					<th>试题：</th>
					<th><input name="question" class="easyui-validatebox" required="true"/></th>
				</tr>
				<tr>
					<th>答案A：</th>
					<th><input name="answera" class="easyui-validatebox" required="true"/></th>
				</tr>
				<tr>
					<th>答案B：</th>
					<th><input name="answerb" class="easyui-validatebox" required="true"/></th>
				</tr>
					<th>答案C：</th>
					<th><input name="answerc" class="easyui-validatebox" required="true"/></th>
				</tr>
				<tr>
					<th>答案D：</th>
					<th><input name="answerd" class="easyui-validatebox" required="true"/></th>
				</tr>				
					<th>正确答案：</th>
					<th><input name="rightanswer" class="easyui-validatebox" required="true"/></th>
				</tr>
				<tr>
					<th>解析：</th>
					<th><input name="jiexi" class="easyui-validatebox" required="true"/></th>
				</tr>	
				<tr>
					<th>分值：</th>
					<th><input name="score" class="easyui-validatebox" required="true"/></th>
				</tr>
			</table>
			</form>
		</div>
		<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveTest()">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="closeDlg()">Cancel</a></div>';
		
			?>
			<?php  }?>			
			<!-- find_test -->

			<!-- find_score -->
			<?php
			if($index==17){
			echo	
			'<div class="data-grid" style="margin:0">
			<table id="dg-score" class="easyui-datagrid" style="width:800px;height:500px"
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
				<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editScore()">修改</a>
				</div>				
			</div>
		</div>';
		
		echo 
			'<div id="dlg-score" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px" closed="true" buttons="#dlg-buttons">
			<div class="ftitle">成绩信息</div>
			<form id="fm-score" method="post">
			<input type="text" id="id" name="id" hidden/>
			<table>
				<tr>
					<th>用户名：</th>
					<th><input name="name" class="easyui-validatebox" required="true"/></th>
				</tr>
				<tr>
					<th>科目：</th>
					<th><input name="subject" class="easyui-validatebox" required="true"/></th>
				</tr>
				<tr>
					<th>分数：</th>
					<th><input name="score" class="easyui-validatebox" required="true"/></th>
				</tr>
				<tr>
					<th>时间：</th>
					<th><input name="datetime" class="easyui-validatebox" required="true"/></th>
				</tr>
			</table>
			</form>
		</div>
		<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveScore()">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="closeDlg()">Cancel</a></div>';
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