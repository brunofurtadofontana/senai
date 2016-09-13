<?php
	include("conect.php");

	error_reporting(0);
	$id= $_GET['id'];
	$nome = htmlspecialchars(trim(strtoupper($_POST['nome'])));
	$datanas = htmlspecialchars(trim(strtoupper($_POST['datanasc'])));
	$idade = htmlspecialchars(trim(strtoupper($_POST['idade'])));
	$cidade = htmlspecialchars(trim($_POST['cidade']));
	$rua = htmlspecialchars(trim(strtoupper($_POST['rua'])));
	$bairro = htmlspecialchars(trim(strtoupper($_POST['bairro'])));
	$foneres = htmlspecialchars(trim(strtoupper($_POST['fone_res'])));
	$fonecom = htmlspecialchars(trim(strtoupper($_POST['fone_com'])));
	$fonecel = htmlspecialchars(trim(strtoupper($_POST['fone_cel'])));
	$serie = htmlspecialchars(trim(strtoupper($_POST['serie'])));
	$area = strtoupper(implode(',',$_POST['area']));
	$interesse = htmlspecialchars(trim(strtoupper($_POST['interesse'])));
	$cursou = htmlspecialchars(trim(strtoupper($_POST['cursou'])));
	$job = htmlspecialchars(trim(strtoupper($_POST['trabalhou'])));
	$data = date("Y-m-d");
	$res = mysql_query("UPDATE alunos SET  aluno_nome='$nome',
										   aluno_idade='$idade',
										   aluno_dtnasc = '$datanas',
										   aluno_cidade = '$cidade',
										   aluno_rua='$rua',
										   aluno_bairro='$bairro',
										   aluno_grau='$serie',
										   aluno_areas='$area',
										   aluno_interesse='$interesse',
										   aluno_cursou='$cursou',
										   aluno_trabalhou='$job',
										   aluno_datacadas='$data'
										   WHERE aluno_cod = '$id'")or die(mysql_error());

	$res = mysql_query("UPDATE telefones SET telefone_res = '$foneres',
											telefone_com = '$fonecom',
											telefone_cel = '$fonecel'
											WHERE alunos_aluno_cod = '$id'")or die(mysql_error());

	if(!mysql_error()){
		header("Location:../home.php");
	}
	else{
		echo mysql_error();
	}
?>