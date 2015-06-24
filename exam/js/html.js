/* JavaScript Document */
	var url;	
	var i=0;
	//处理退出事件
	function closeWindow() { 
　　window.opener = null; 
　　window.open('', '_top', ''); 
　　window.parent.close(); 
　　} 
	
	//处理登陆事件
	function login()
	{
	var url="src/conn.php";
	$('#login_form').attr("action",url).submit();
	}
	
	//处理找回密码事件
	function find_question(name1)
	{
	var name=name1.value;
	if(name!=""){
	$.get("src/conn.php?type=find_question&name="+name,function(data,status){
	if(data.toString().trim()=="") { $('#show').html("<font color='red'>"+"该用户不存在"+"</font>");}
	else{
	$('#show').html("<font color='red'>"+"</font>");
	document.getElementById("question").value=data.toString().trim();
	document.getElementById("question").readonly;	}
	});
	}
	}
	
	function findpasswd()
	{
	url="src/conn.php";
	$('#find_passwd').attr("action",url).submit();
	}
	//处理管理员登陆
	function manager_login()
	{
	var url="src/conn.php";
	$('#manager_login').attr("action",url).submit();
	}
	
	//注册事件
	function user_zhuce()
	{
	var url="src/conn.php";
	$('#user_zhuce').attr("action",url).submit();
	}
	
	function check_name(name1)
	{
	var name=name1.value;
	if(name!=""){
	$.get("src/conn.php?type=check_user&name="+name,function(data,status){
	if(data.toString().trim()=="该用户名已被注册")    $('#show').html("<font color='red'>"+data+"</font>");
	if(data.toString().trim()=="可以注册")    $('#show').html("<font color='green'>"+data+"</font>");
	});
	}
	}
	
	function check_passwd(passwd)
	{
	if(document.getElementById("passwd").value!=passwd.value){
	$('#show1').html("<font color='red'>两次密码不一致</font>");
	passwd.value="";
	}
	}
	
	function choce_subject()
	{
		var select = $('#select').combobox('getText');
		if(select=="")
		{
			alert("请选择考试科目！");
		}else
		{
		url="exam.php?select="+select;
		$.post("src/conn.php?type=insert_score",{},function(data,status){alert(data);});
		$('#choceSubject').attr("action",url).submit();
		}
	}
	
	var json = {"option":[]};
	function checkAnswer(varDiv)
	{
		var score=0.0;
		var testid=$(varDiv).attr("name");	//获取题号
		var answer=$(varDiv).val();				//获取答案
		var rightanswer=$(varDiv).attr("ra");
		//console.log(rightanswer);
		if(answer==rightanswer) score=2.0; 
		//var question=$(varDiv).parent().prev(".exam-test").children(".question").text();
		//alert(question);
		switch(answer)
		{
			case "A":
				$(varDiv).parent("#answer-a").addClass("display-answer");
				//$(varDiv).parent("#answer-b").addClass("display-answer");
				$(varDiv).parent("#answer-a").nextAll("#answer-b").removeClass("display-answer");
				$(varDiv).parent("#answer-a").nextAll("#answer-c").removeClass("display-answer");
				$(varDiv).parent("#answer-a").nextAll("#answer-d").removeClass("display-answer");
				break;
			case "B":
				$(varDiv).parent("#answer-b").prevAll("#answer-a").removeClass("display-answer");
				$(varDiv).parent("#answer-b").nextAll("#answer-c").removeClass("display-answer");
				$(varDiv).parent("#answer-b").nextAll("#answer-d").removeClass("display-answer");
				//$(varDiv).parent("#answer-a").removeClass("display-answer");
				$(varDiv).parent("#answer-b").addClass("display-answer");
			case "C":
				$(varDiv).parent("#answer-c").prevAll("#answer-a").removeClass("display-answer");
				$(varDiv).parent("#answer-c").prevAll("#answer-b").removeClass("display-answer");
				$(varDiv).parent("#answer-c").nextAll("#answer-d").removeClass("display-answer");
				//$(varDiv).parent("#answer-a").removeClass("display-answer");
				$(varDiv).parent("#answer-c").addClass("display-answer");
			case "D":
				$(varDiv).parent("#answer-d").prevAll("#answer-a").removeClass("display-answer");
				$(varDiv).parent("#answer-d").prevAll("#answer-c").removeClass("display-answer");
				$(varDiv).parent("#answer-d").prevAll("#answer-b").removeClass("display-answer");
				//$(varDiv).parent("#answer-a").removeClass("display-answer");
				$(varDiv).parent("#answer-d").addClass("display-answer");				
				break;
		}
		var option = {};
		option["testid"] = testid;
		option["answer"] = answer; 
		option["score"] = score; 		
		json.option.push(option);

		/*
		$.post("src/conn.php?type=insert_examinfo",
		{
			//
			testid:testid,
			answer:answer,
			score:score
		},		
		function(data,status)
		{
		}
		);
		*/
	}

	function postData()
	{
		{
			var chk_value=[];
			$('input[name=17]:checked').each(function(){ 		
				chk_value.push($(this).val()); 
			});
			//alert($(".17").attr("ra"));
			if($(".17").attr("ra")==chk_value.join("")) score=2.0;
			else score=0.0;
			var option = {};
			option["testid"] = 17;
			option["answer"] = chk_value.join(""); 
			option["score"] = score; 		
			json.option.push(option);
			/*
			$.post("src/conn.php?type=insert_examinfo",
			{
				testid:17,
				answer:chk_value.join(""),
				score:score
			},		
			function(data,status)
			{
			}
			);
			*/
		}
		
		{
			var chk_value=[];
			$('input[name=18]:checked').each(function(){ 		
				chk_value.push($(this).val()); 
			});
			if($(".18").attr("ra")==chk_value.join("").trim()) score=2;
			else score=0;
			var option = {};
			option["testid"] = 18;
			option["answer"] = chk_value.join(""); 
			option["score"] = score; 		
			json.option.push(option);
		}
		
		{
			var chk_value=[];
			$('input[name=19]:checked').each(function(){ 		
				chk_value.push($(this).val()); 
			});
			if($(".19").attr("ra")==chk_value.join("").trim()) score=2;
			else score=0;
			var option = {};
			option["testid"] = 19;
			option["answer"] = chk_value.join(""); 
			option["score"] = score; 		
			json.option.push(option);
		}
		
		{
			var chk_value=[];
			$('input[name=20]:checked').each(function(){ 		
				chk_value.push($(this).val()); 
			});
			if($(".20").attr("ra")==chk_value.join("").trim()) score=2;
			else score=0;
			var option = {};
			option["testid"] = 20;
			option["answer"] = chk_value.join(""); 
			option["score"] = score; 		
			json.option.push(option);
		}	
 
		{
			var chk_value=[];
			$('input[name=21]:checked').each(function(){ 		
				chk_value.push($(this).val()); 
			});
			if($(".21").attr("ra")==chk_value.join("").trim()) score=2;
			else score=0;
			var option = {};
			option["testid"] = 21;
			option["answer"] = chk_value.join(""); 
			option["score"] = score; 		
			json.option.push(option);
		}		
		
		{
			var chk_value=[];
			$('input[name=22]:checked').each(function(){ 		
				chk_value.push($(this).val()); 
			});
			if($(".22").attr("ra")==chk_value.join("").trim()) score=2;
			else score=0;
			var option = {};
			option["testid"] = 22;
			option["answer"] = chk_value.join(""); 
			option["score"] = score; 		
			json.option.push(option);
		}		
		
		{
			var chk_value=[];
			$('input[name=23]:checked').each(function(){ 		
				chk_value.push($(this).val()); 
			});
			if($(".23").attr("ra")==chk_value.join("").trim()) score=2;
			else score=0;
			var option = {};
			option["testid"] = 23;
			option["answer"] = chk_value.join(""); 
			option["score"] = score; 		
			json.option.push(option);
		}
		
		{
			var chk_value=[];
			$('input[name=24]:checked').each(function(){ 		
				chk_value.push($(this).val()); 
			});
			if($(".24").attr("ra")==chk_value.join("").trim()) score=2;
			else score=0;
			var option = {};
			option["testid"] = 24;
			option["answer"] = chk_value.join(""); 
			option["score"] = score; 		
			json.option.push(option);
		}		
		
		{
			var chk_value=[];
			$('input[name=25]:checked').each(function(){ 		
				chk_value.push($(this).val()); 
			});
			if($(".25").attr("ra")==chk_value.join("").trim()) score=2;
			else score=0;
			var option = {};
			option["testid"] = 25;
			option["answer"] = chk_value.join(""); 
			option["score"] = score; 		
			json.option.push(option);
		}		
		
		{
			var chk_value=[];
			$('input[name=26]:checked').each(function(){ 		
				chk_value.push($(this).val()); 
			});
			if($(".26").attr("ra")==chk_value.join("").trim()) score=2;
			else score=0;
			var option = {};
			option["testid"] = 26;
			option["answer"] = chk_value.join(""); 
			option["score"] = score; 		
			json.option.push(option);
		}		
		
		window.location.href = "exam-test.php";
	//	window.open("exam-test.php","_self"); 
	//	console.log($(".26").attr("ra"));
		//console.log(chk_value)
	//	if(chk_value.join("").trim()==$(".26").attr("ra")) console.log("aa");
		
//		var testid=1,answer,score;
//		var data={"test":[{"testid":testid,"answer":answer,"score":score}]};
//		var c={"testid":2,"answer":"ABC","score":0.12};
//		data.test.push(c);
		//delete data.test[1];
/*
				[
		{"testid":testid,"answer":answer,"score":score}
		]	
		};
*/		
//		console.log(data.test[1].answer);
	}
	
	function jiaojuan()
	{
		alert(json);
		$.post("src/exam-score.php",
			{
				json:json
			},		
			function(data,status)
			{
				window.location.href = "exam-score.php"
			}
			);
	}
	
	function checkMulAnswer(varDiv)
	{
		if($(varDiv).prop("checked"))
		{
			$(varDiv).parent().addClass("display-answer");
			
		}else
		{
			$(varDiv).parent().removeClass("display-answer");
		}
		
		/*
		var json={
		"person":[
		          {"name":"yds","age":25,"sex":"男"},
		          {"name":"ly","age":26,"sex":"女"}
		          ]		
		}
		console.log(json.person[0].name);
		*/
		
		
		
		
		
		
		/*
		var str='{"name":"yudesong"}';
		var test = $.parseJSON(str);
		console.log(test.name);
		*/
		
		/*
		var score=0.0;
		var testid=$(varDiv).attr("name");	//获取题号
		var answer=$(varDiv).val();				//获取答案
		var rightanswer=$(varDiv).attr("ra");
		//console.log(rightanswer);
		//console.log(testid);
		//=true;
		//alert($(varDiv).attr("checked"));
		alert($(varDiv).prop("checked"));
		
		
		//if(answer==rightanswer) score=1.5; 
		//var question=$(varDiv).parent().prev(".exam-test").children(".question").text();
		//alert(question);
		switch(answer)
		{
			case "A":
				$(varDiv).parent("#answer-a").addClass("display-answer");
				//$(varDiv).parent("#answer-b").addClass("display-answer");
			//	$(varDiv).parent("#answer-a").nextAll("#answer-b").removeClass("display-answer");
			//	$(varDiv).parent("#answer-a").nextAll("#answer-c").removeClass("display-answer");
			//	$(varDiv).parent("#answer-a").nextAll("#answer-d").removeClass("display-answer");
				break;
			case "B":
			//	$(varDiv).parent("#answer-b").prevAll("#answer-a").removeClass("display-answer");
			//	$(varDiv).parent("#answer-b").nextAll("#answer-c").removeClass("display-answer");
			//	$(varDiv).parent("#answer-b").nextAll("#answer-d").removeClass("display-answer");
				//$(varDiv).parent("#answer-a").removeClass("display-answer");
				$(varDiv).parent("#answer-b").addClass("display-answer");
			case "C":
			//	$(varDiv).parent("#answer-c").prevAll("#answer-a").removeClass("display-answer");
			//	$(varDiv).parent("#answer-c").prevAll("#answer-b").removeClass("display-answer");
			//	$(varDiv).parent("#answer-c").nextAll("#answer-d").removeClass("display-answer");
				//$(varDiv).parent("#answer-a").removeClass("display-answer");
				$(varDiv).parent("#answer-c").addClass("display-answer");
			case "D":
			//	$(varDiv).parent("#answer-d").prevAll("#answer-a").removeClass("display-answer");
			//	$(varDiv).parent("#answer-d").prevAll("#answer-c").removeClass("display-answer");
			//	$(varDiv).parent("#answer-d").prevAll("#answer-b").removeClass("display-answer");
				//$(varDiv).parent("#answer-a").removeClass("display-answer");
				$(varDiv).parent("#answer-d").addClass("display-answer");				
				break;
		}
		*/
	}











//	function show_next() 
//	{
//	i+=5;
//	alert();
//	url="exam.php?select=数据库技术&first="+i+"&last="+(i+5);
//	//window.location.href=url;
//	//
//	//window.parent.close();
//	url=encodeURI(url);
//	window.open(url,'self');
//	return true;
//	}	
	
	function insert_manager()
	{
	url="conn.php";	
	$('#fmanager').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '添加成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
	}
	




	function insert_user()
	{
	url="conn.php";	
	$('#fuser').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '添加成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
	}
	
	function insert_subject()
	{
	url="conn.php";	
	$('#fsubject').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '添加成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
	}
	
	function insert_test()
	{
	url="conn.php";	
	$('#ftest').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '添加成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
	}	

	function saveManager(){
		url = "conn.php?type=edit_manager";
		$('#fm-manager').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '修改成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}
		
		function saveUser(){
		url = "conn.php?type=edit_user";
		$('#fm-user').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '修改成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}

		function saveSubject(){
		url = "conn.php?type=edit_subject";
		$('#fm-subject').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '修改成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}		
		
		function saveTest(){
		url = "conn.php?type=edit_test";
		$('#fm-test').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '修改成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}			
		
		function saveScore(){
		url = "conn.php?type=edit_score";
		$('#fm-score').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.success){
					  $.messager.show({
							title: 'Success',
							msg: '修改成功'
							});
				} else {
						$.messager.show({
							title: 'Error',
							msg: result.msg
						});
					}
				}
			});
		}		
			
	function editManager()
	{
	var row=$('#dg-manager').datagrid('getSelected');
	if(row){
	$('#dlg-manager').dialog('open').dialog('setTitle','编辑用户');
	$('#fm-manager').form('load',row);
	}
	}
	
	function editUser()
	{
	var row=$('#dg-user').datagrid('getSelected');
	if(row){
	$('#dlg-user').dialog('open').dialog('setTitle','编辑用户');
	$('#fm-user').form('load',row);
	}
	}
	
	function editSubject()
	{
	var row=$('#dg-subject').datagrid('getSelected');
	if(row){
	$('#dlg-subject').dialog('open').dialog('setTitle','编辑用户');
	$('#fm-subject').form('load',row);
	}
	}
	
	function editTest()
	{
	var row=$('#dg-test').datagrid('getSelected');
	if(row){
	$('#dlg-test').dialog('open').dialog('setTitle','编辑用户');
	$('#fm-test').form('load',row);
	}
	}
	
	function editScore()
	{
	var row=$('#dg-score').datagrid('getSelected');
	if(row){
	$('#dlg-score').dialog('open').dialog('setTitle','编辑用户');
	$('#fm-score').form('load',row);
	}
	}
	
	
	function closeDlg()
	{
	$("#dlg-manager").dialog("close");
	$("#dlg-user").dialog("close");	
	$("#dlg-subject").dialog("close");	
	$("#dlg-test").dialog("close");	
	$("#dlg-score").dialog("close");	
	}
	
	function deleteManager(){
	var row = $('#del-manager').datagrid('getSelected');
	if (row){
		$.messager.confirm('警告','真的要删除该用户吗？',function(r){
			if (r){
				$.post('conn.php?type=delete_manager',{id:row.id},function(result){
					if (result.success){
						$('#del-manager').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}

	function deleteUser(){
	var row = $('#del-user').datagrid('getSelected');
	if (row){
		$.messager.confirm('警告','真的要删除该用户吗？',function(r){
			if (r){
				$.post('conn.php?type=delete_user',{id:row.id},function(result){
					if (result.success){
						$('#del-user').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}

function deleteSubject(){
	var row = $('#del-subject').datagrid('getSelected');
	if (row){
		$.messager.confirm('警告','真的要删除该用户吗？',function(r){
			if (r){
				$.post('conn.php?type=delete_subject',{subjectid:row.subjectid},function(result){
					if (result.success){
						$('#del-subject').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}

	function deleteTest(){
	var row = $('#del-test').datagrid('getSelected');
	if (row){
		$.messager.confirm('警告','真的要删除该用户吗？',function(r){
			if (r){
				$.post('conn.php?type=delete_test',{testid:row.testid},function(result){
					if (result.success){
						$('#del-test').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}

	function deleteScore(){
	var row = $('#del-score').datagrid('getSelected');
	if (row){
		$.messager.confirm('警告','真的要删除该用户吗？',function(r){
			if (r){
				$.post('conn.php?type=delete_score',{id:row.id},function(result){
					if (result.success){
						$('#del-score').datagrid('reload');	// reload the user data
					} else {
						$.messager.show({	// show error message
							title: 'Error',
							msg: result.errorMsg
						});
					}
				},'json');
			}
		});
	}
}	
	function find_manager()
	{
		var user_name=$('#manager_name').val();	
		url="conn.php?type=find_manager&name="+user_name;
		$('#dg_manager').datagrid({
		url:url
		});
	   $('#dg_manager').datagrid('reload');	
	}
	
	
	function find_user()
	{
		var user_name=$('#user_name').val();	
		url="conn.php?type=find_user&name="+user_name;
		$('#dg_user').datagrid({
		url:url
		});
	   $('#dg_user').datagrid('reload');	
	}

	function find_subject()
	{
		var user_name=$('#subject_name').val();	
		url="conn.php?type=find_subject&name="+user_name;
		$('#dg_subject').datagrid({
		url:url
		});
	   $('#dg_subject').datagrid('reload');	
	}
	
	function find_test()
	{
		var testid=$('#testid').val();	
		url="conn.php?type=find_test&testid="+testid;
		$('#dg_test').datagrid({
		url:url
		});
	   $('#dg_test').datagrid('reload');	
	}	
	
	function find_score()
	{
		var name=$('#name').val();	
		url="conn.php?type=find_score&name="+name;
		$('#dg_score').datagrid({
		url:url
		});
	   $('#dg_score').datagrid('reload');	
	}