<?php
$id = intval($_REQUEST['id']);
$name = $_REQUEST['name'];
$leixing = $_REQUEST['leixing'];
$sex = $_REQUEST['sex'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$location = $_REQUEST['location'];
include 'conn.php';
$sql = "update tb_contact set name='$name',leixing='$leixing',sex='$sex',phone='$phone',email='$email',location='$location' where id=$id";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>