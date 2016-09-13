<?php 
	require_once("conect.php");
	$id = $_GET['id'];

	if(isset($_REQUEST['id'])){
		$res = mysql_query("Delete from usuario WHERE usu_cod = '$id' ")or die(mysql_error());
		if($res){
			echo header("location:../home.php?go=adduser&sts=1");
		}
		else echo header("location:../home.php?go=adduser&sts=2");
	}
	else{
		$url = $_REQUEST['url'];
		header('Location:$url');
	}
?>