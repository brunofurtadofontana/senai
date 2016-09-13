<?php
	require_once("conect.php");
 	include "verifica.php";

	$id = $_GET['id'];
	$usuarioCod = $_GET['cod'];
	$curso = htmlspecialchars(trim(strtoupper($_POST['curso'])));
	$cidade = htmlspecialchars(trim($_POST['cidade']));
	$desc = htmlspecialchars(trim($_POST['desc']));
	$data = date("Y-m-d");
				$res = mysql_query("UPDATE cursos SET
									usuario_curso_cod = '$usuarioCod',
									curso_nome = '$curso',
									curso_cidade = '$cidade',
									curso_desc = '$desc',
									curso_data = '$data'
									WHERE curso_cod = '$id'")or die(mysql_error());
		if(!mysql_error()){
		header("Location:../home.php?go=cursos");
	}
	else{
		echo mysql_error();
	}

	?>