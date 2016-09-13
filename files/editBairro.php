<?php 
	require_once("conect.php");
	$id_bairro=$_GET['id'];
	$id_adm = $_GET['cod'];

	$bairro_nome=$_POST['bairro'];
	$res = mysql_query("UPDATE bairros SET 
										bairro_nome='$bairro_nome' 
										WHERE bairro_cod = '$id_bairro' ")or die(mysql_error());

	if(!mysql_error()){
		header("location:../home.php?go=bairro&sts=1");
	}else{
		header("location:../home.php?go=bairro&sts=2");
	}
?>