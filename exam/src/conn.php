<?php
	session_start();
	class ConnDB{
	//连接数据库
	function get_conn(){
	$conn = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if (!$conn) {
	die('Could not connect: ' . mysql_error());
	}
	mysql_query("set character set 'utf8'");//读库 
	mysql_query("set names 'utf8'");//写库 
	mysql_select_db(SAE_MYSQL_DB, $conn);
	}

	//处理登陆
	function user_login()
	{
		$name=$_GET['name'];
		$passwd=$_GET['passwd'];
		$sql="select * from tb_exam_user where name='$name' and passwd='$passwd'";
		$rs=mysql_query($sql);
		$row=mysql_fetch_array($rs);
		if($row){
            header("Location: http:/exam/choce.php");
			session_start();
		/*	if(isset($_SESSION["username"]))
			{
				session_destroy();
			}
		*/	
			$_SESSION["username"]=$name;
		}
		else
		{
			echo '登录失败！'.$sql;
		}
	}
	
	function check_user()
	{
	$name=$_GET['name'];
	$sql="select * from tb_exam_user where name='$name'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if($row){   echo "该用户名已被注册";    }
	else {   echo "可以注册";   }
	}
	
	//处理找回密码
	function find_passwd()
	{
	$name=$_GET['name'];
	$email=$_GET['email'];
	$answer=$_GET['answer'];
	$sql="select passwd from tb_exam_user where name='$name' and email='$email' and answer='$answer'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if($row){
        header("Location: http:/exam/showpasswd.php?passwd=$row[0]");
	exit;
	}
	}

	//处理找回密码
	function find_question()
	{
	$name=$_GET['name'];
	$sql="select question from tb_exam_user where name='$name'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	echo $row[0];
	}
	
	//后台管理
	function manager_login()
	{	
	$name=$_GET['name'];
	$passwd=$_GET['passwd'];
	$sql="select * from tb_manager where name='$name' and passwd='$passwd'";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
	if($row){
        header("Location: http:/exam/src/bg_find.php");
	session_start();
	$_SESSION["managername"]=$name;
	}
	else{
		echo "登录失败";
	}
	}
	
	function insert_examinfo()
	{
		session_start();
		$subject=$_SESSION["subject"];
		$username=$_SESSION["username"];
		$testid=intval($_POST["testid"]);
	//	$question=$_POST["question"];
	//	return $question;
		$answer=$_POST["answer"];
		$score=floatval($_POST["score"]);
		$sql="select * from tb_examinfo where testid=".$testid;
		$rs=mysql_query($sql);
		if($row=mysql_fetch_array($rs))
		{
			$sql_exam="update tb_examinfo set answer='".$answer."'".",score=".$score." where username='".$username."' and testid=".$testid;
		}else
		{
			$sql_exam="insert into tb_examinfo(username,subject,testid,answer,score) values('$username','$subject','$testid','$answer','$score')";
		}
		$result = mysql_query($sql_exam);
		if(!$result)
		{
			echo $sql_exam;
		}
	}
	//管理员管理模块
	function get_manager()
	{
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	$rs = mysql_query("select count(*) from tb_manager");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysql_query("select * from tb_manager limit $offset,$rows");
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}
	
	function find_manager()
	{
	$name=$_REQUEST['name'];
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	$result["total"] =1;
	$sql="select * from tb_manager where name='$name' limit $offset,$rows";
	$rs = mysql_query($sql);
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}	
	
	function insert_manager()
	{
	$name = $_REQUEST['name'];
	$passwd = $_REQUEST['passwd'];
	$sql = "insert into tb_manager(name,passwd) values('$name','$passwd')";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'.$sql));
	}
	}
	
	function edit_manager()
	{
	$id=intval($_REQUEST['id']);
	$name = $_REQUEST['name'];
	$passwd = $_REQUEST['passwd'];
	$sql = "update tb_manager set name='$name',passwd='$passwd' where id='$id'";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>$sql));
	}
	}
	
	function delete_manager()
	{
	$id = intval($_REQUEST['id']);
	$sql = "delete from tb_manager where id=$id";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
	}
	}
	

	//用户管理模块
	function  get_user(){
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	$rs = mysql_query("select count(*) from tb_exam_user");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysql_query("select * from tb_exam_user limit $offset,$rows");
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}
	
	function find_user()
	{
	$name=$_REQUEST['name'];
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	$result["total"] =1;
	$sql="select * from tb_exam_user where name='$name' limit $offset,$rows";
	$rs = mysql_query($sql);
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}
	
	function insert_user(){
	$name = $_REQUEST['name'];
	$passwd = $_REQUEST['passwd'];
	$age = intval($_REQUEST['age']);
	$sex = $_REQUEST['sex'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$question = $_REQUEST['question'];
	$answer = $_REQUEST['answer'];
	$sql = "insert into tb_exam_user(name,passwd,age,sex,phone,email,question,answer) values('$name','$passwd','$age','$sex','$phone','$email','$question','$answer')";
	mysql_query("set names 'utf8'");//写库 
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'.$sql));
	}
	}
	

	function  edit_user(){
	$id=intval($_REQUEST['id']);
	$name = $_REQUEST['name'];
	$age = $_REQUEST['age'];
	$sex = $_REQUEST['sex'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$question = $_REQUEST['question'];
	$answer = $_REQUEST['answer'];
	$sql = "update tb_exam_user set name='$name', age='$age', sex='$sex' ,phone='$phone', email='$email' ,question='$question',answer='$answer' where id=$id";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Error is !'));
	}
	}
	
	function delete_user()
	{
	$id = intval($_REQUEST['id']);
	$sql = "delete from tb_exam_user where id=$id";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
	}
	}	
	

	//科目管理模块
	function get_subject()
	{
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	$rs = mysql_query("select count(*) from tb_subject");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysql_query("select * from tb_subject limit $offset,$rows");
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}	
	
	function select_subject()
	{
	$result = array();
	$rs = @mysql_query("select * from tb_subject");
	$items = array();
	while($row = @mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	echo json_encode($items);
	}	
	
	function find_subject()
	{
	$name=$_REQUEST['name'];
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	$result["total"] =1;
	$sql="select * from tb_subject where subject='$name' limit $offset,$rows";
	$rs = mysql_query($sql);
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}
	
	function insert_subject()
	{
	$name = $_REQUEST['name'];
	$sql = "insert into tb_subject(subject) values('$name')";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'.$sql));
	}
	}	
	
	function  edit_subject(){
	$id=intval($_REQUEST['subjectid']);
	$name = $_REQUEST['subject'];
	$sql = "update tb_subject set subject='$name' where subjectid='$id'";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Error is !'));
	}
	}
	
	function delete_subject()
	{
	$id = intval($_REQUEST['subjectid']);
	$sql = "delete from tb_subject where subjectid=$id";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
	}
	}	
	
	//试题管理模块
	function get_test()
	{
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	$rs = mysql_query("select count(*) from tb_test");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysql_query("select * from tb_test limit $offset,$rows");
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}
	
	function find_test()
	{
	$testid=$_REQUEST['testid'];
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	$result["total"] =1;
	$sql="select * from tb_test where testid='$testid' limit $offset,$rows";
	$rs = mysql_query($sql);
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}
	
	function insert_test()
	{
	$testid = $_REQUEST['testid'];
	$subject = $_REQUEST['subject'];
	$leixing=$_REQUEST["leixing"];
	$question=$_REQUEST['question'];
	$answera=$_REQUEST['answera'];
	$answerb=$_REQUEST['answerb'];	
	$answerc=$_REQUEST['answerc'];
	$answerd=$_REQUEST['answerd'];
	$rightanswer=$_REQUEST['rightanswer'];
	$jiexi=$_REQUEST['jiexi'];
	$score=$_REQUEST['score'];	
	$sql = "insert into tb_test  values('$testid','$subject','$leixing','$question','$answera','$answerb','$answerc','$answerd','$rightanswer','$jiexi','$score')";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'.$sql));
	}
	}	
	
	function  edit_test(){
	$testid = $_REQUEST['testid'];
	$subject = $_REQUEST['subject'];
	$question=$_REQUEST['question'];
	$answera=$_REQUEST['answera'];
	$answerb=$_REQUEST['answerb'];	
	$answerc=$_REQUEST['answerc'];
	$answerd=$_REQUEST['answerd'];
	$rightanswer=$_REQUEST['rightanswer'];
	$jiexi=$_REQUEST['jiexi'];
	$score=$_REQUEST['score'];	
	$sql = "update tb_test set subject='$subject',question='$question',answera='$answera',answerb='$answerb',answerc='$answerc',answerd='$answerd',rightanswer='$rightanswer',jiexi='$jiexi',score='$score' where testid='$testid'";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Error is !'.$sq));
	}
	}
	
	function delete_test()
	{
	$id = intval($_REQUEST['testid']);
	$sql = "delete from tb_test where testid=$id";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
	}
	}		
	
	//交卷按钮处理响应事件
	function insert_score()
	{
		session_start();
		$name = $_SESSION["username"];
		$subject = $_SESSION["subject"];
		$datetime = date("Y-m-d H:i:s",time());
		$sql = "insert into tb_score(name,subject,score,datetime) values('$name','$subject',0.0,'$datetime')";
		$result = @mysql_query($sql);
		if ($result){
			return 1;
		} else {
			return 0;
		}
	}

	//成绩处理模块
	function get_score()
	{
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	$rs = mysql_query("select count(*) from tb_score");
	$row = mysql_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysql_query("select * from tb_score limit $offset,$rows");
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}
	
	function find_score()
	{
	$name=$_REQUEST['name'];
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	$result = array();
	$result["total"] =1;
	$sql="select * from tb_score where name='$name' limit $offset,$rows";
	$rs = mysql_query($sql);
	$items = array();
	while($row = mysql_fetch_object($rs)){
		array_push($items, $row);
	}
	$result["rows"] = $items;
	echo json_encode($result);
	}
	
	function  edit_score(){
	$id=intval($_REQUEST['id']);
	$name = $_REQUEST['name'];
	$subject=$_REQUEST['subject'];
	$score=$_REQUEST['score'];
	$dadetime=$_REQUEST['dadetime'];
	$sql = "update tb_score set name='$name',subject='$subject',score='$score',datetime='$dadetime' where id='$id'";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Error is !'));
	}
	}
	
	function delete_score()
	{
	$id = intval($_REQUEST['id']);
	$sql = "delete from tb_score where id=$id";
	$result = @mysql_query($sql);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
	}
	}	
	
}
?>
<?php
		$con=new ConnDB;
		$con->get_conn();
		$type=$_REQUEST['type'];
		switch($type)
		{
			case "user_login":
						$con->user_login();
						break;
			case "manager_login":
						$con->manager_login();
						break;
			case "user_find_passwd":
				        $con->find_passwd();
						break;
			case "find_question":
						$con->find_question();
						break;
			case "user_zhuce":			
						$con->insert_user();
						break;
			case "check_user":
						$con->check_user();
						break;
			case "get_manager":
						$con->get_manager();
						break;
			case "find_manager":
						$con->find_manager();
						break;
			case "insert_manager":
						$con->insert_manager();
						break;
			case "edit_manager":			
						$con->edit_manager();
						break;
			case "delete_manager":			
						$con->delete_manager();
						break;
			case "get_user":
						$con->get_user();
						break;
			case "find_user":			
						$con->find_user();
						break;
			case "insert_user":			
						$con->insert_user();
						break;	
			case "edit_user":			
						$con->edit_user();
						break;	
			case "delete_user":			
						$con->delete_user();
						break;					
			case "get_subject":
						$con->get_subject();
						break;
			case "find_subject":
						$con->find_subject();
						break;					
			case "insert_subject":
						$con->insert_subject();
						break;	
			case "edit_subject":
						$con->edit_subject();
						break;	
			case "delete_subject":
						$con->delete_subject();
						break;							
			case "get_test":
						$con->get_test();
						break;
			case "find_test":
						$con->find_test();
						break;					
			case "insert_test":
						$con->insert_test();
						break;	
			case "edit_test":
						$con->edit_test();
						break;	
			case "delete_test":
						$con->delete_test();
						break;						
			case "get_score":
						$con->get_score();
						break;
			case "find_score":
						$con->find_score();
						break;					
			case "insert_score":
						$con->insert_score();
						break;	
			case "edit_score":
						$con->edit_score();
						break;	
			case "delete_score":
						$con->delete_score();
						break;
			case "select_subject":
						$con->select_subject();
						break;
			case "insert_examinfo":
						$con->insert_examinfo();
						break;						
		}
?>