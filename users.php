<?php
require('top.inc.php');
isAdmin();
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from tbl_member where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from tbl_member order by id desc";
$res=mysqli_query($con,$sql);
?>
