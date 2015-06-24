<?php
$name = $_REQUEST['name'];
$leixing = $_REQUEST['leixing'];
$sex = $_REQUEST['sex'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$location = $_REQUEST['location'];
include 'conn.php';
$sql = "insert into tb_contact(name,leixing,sex,phone,email,location) values('$name','$leixing','$sex','$phone','$email','$location')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>