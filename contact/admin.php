<?php 
//	session_start() ;
//	session_destroy();
//	if($_SESSION["name1"]=="")
//	{
//		header("Location:http:index.php");
//	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="jquery,ui,easy,easyui,web">
	<meta name="description" content="easyui help you build your web page easily!">
	<title>通讯录管理</title>
	<link rel="stylesheet" type="text/css" href="themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="themes/icon.css">
	<link rel="stylesheet" type="text/css" href="http://www.w3cschool.cc/try/jeasyui/demo/demo.css">
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			color:#666;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
	</style>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="http://www.w3cschool.cc/try/jeasyui/jquery.easyui.min.js"></script>
	<script type="text/javascript">
		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('setTitle','New User');
			$('#fm').form('clear');
			url = 'save_user.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Edit User');
				$('#fm').form('load',row);
				url = 'update_user.php?id='+row.id;
			}
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		function removeUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$.messager.confirm('Confirm','Are you sure you want to remove this user?',function(r){
					if (r){
						$.post('remove_user.php',{id:row.id},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.msg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>
</head>
<body>
	<h2>通讯录管理</h2>
	<table id="dg" title="用户信息" class="easyui-datagrid" style="width:900px;height:400px"
			url="get_users.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
				<th field="name" width="50">姓名</th>
				<th field="leixing" width="50">类型</th>
				<th field="sex" width="50">性别</th>
				<th field="phone" width="50">电话</th>
				<th field="email" width="50">邮箱</th>
				<th field="location" width="50">住址</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">添加</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">修改</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeUser()">删除</a>
	</div>
	<div id="dlg" class="easyui-dialog" style="width:400px;height:400px;padding:10px 20px" closed="true" buttons="#dlg-buttons">
		<div class="ftitle">通讯录</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>用户名:</label>
				<input name="name" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
				<label>类型:</label>
				<input name="leixing" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
				<label>性别:</label>
				<input name="sex" class="easyui-validatebox" required="true">
			</div>
			<div class="fitem">
				<label>电话:</label>
				<input name="phone" class="easyui-validatebox" required="true">
			</div>			
			<div class="fitem">
				<label>邮箱:</label>
				<input name="email" class="easyui-validatebox" validType="email">
			</div>
			<div class="fitem">
				<label>住址:</label>
				<input name="location" class="easyui-validatebox">
			</div>			
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveUser()">保存</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">取消</a>
	</div>
</body>
</html>