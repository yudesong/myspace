<?php
	@header("Content-type: text/html; charset:utf-8");
	$conn = @mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if (!$conn) {
	die('Could not connect: ' . mysql_error());
	}
	mysql_query("set character set 'utf8'");//读库 
	mysql_query("set names 'utf8'");//写库 
	mysql_select_db(SAE_MYSQL_DB, $conn);
	/*
	$sql_1="insert into tb_story values(3,'万众一心','东汉末年爆发了黄巾大起于攻城一心不好对付')";
	$result=@mysql_query($sql_1);
	if ($result){
		echo json_encode(array('success'=>true));
	} else {
	echo json_encode(array('msg'=>'Some errors occured.'.$sql_1));
	}
*/
	
	$sql="select name,content from tb_music order by id";
#	$sql="select name from tb_story order by id";
	$rs=mysql_query($sql);
	echo "[";
	$i=0;
	while($row = mysql_fetch_object($rs)){
		echo "{";
		echo "\"name\":";
		echo "\"";
		echo $row->name;
		echo "\"";
		echo ",";
        echo "\"content\":";
        echo "\"";
        echo $row->content;
        echo "\"";
		echo "}";
		$i++;
		if($i<=8) echo ",";
	}
        echo "]";
    
//	echo json_encode($items);

	
	
/*
	$testJSON=array('name'=>'中文字符串','value'=>'test');  
    echo json_encode($testJSON);  
*/
?>
