<?php 
	require_once("conect.php");

	$id = $_GET['id'];
	$curso = htmlspecialchars(trim(strtoupper($_POST['curso'])));
	$cidade = htmlspecialchars(trim($_POST['cidade']));
	$desc = htmlspecialchars(trim($_POST['desc']));
	$data = date("Y-m-d");
	$res = mysql_query("INSERT INTO cursos( usuario_curso_cod,
											curso_nome,
											curso_cidade,
											curso_desc,
											curso_data)
									VALUES( '$id',
											'$curso',
											'$cidade',
											'$desc',
											'$data')")or die(mysql_error());
	if(!mysql_error()){
		header("Location:../home.php?go=cursos");
		
		}
		else{
			echo mysql_error();
		}

?>