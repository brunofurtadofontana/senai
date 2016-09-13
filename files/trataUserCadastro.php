<?php 
	require("conect.php");
		
		$nome = htmlspecialchars(trim(strtoupper($_POST['nome'])));
		$cidade = htmlspecialchars(trim($_POST['cidade']));
		$log =  htmlspecialchars(trim(strtoupper($_POST['login'])));
		$pass =  htmlspecialchars(trim(strtoupper(md5($_POST['pass']))));
		$priv =  htmlspecialchars(trim(strtoupper('USERCOMUM')));
		$data = date("Y-m-d");
		$status = 'INATIVO';
		$res = mysql_query("INSERT INTO usuario(usu_nome,
												usu_adm_cod,
												usu_cidade,
												usu_login,
												usu_pass,
												usu_data,
												usu_privilegio,
												usu_status)
										VALUES('$nome',
												'1',
												'$cidade',
												'$log',
												'$pass',
												'$data',
												'$priv',
												'$status')")or die(mysql_error());
												
	if(!mysql_error()){
		header("Location:../index.php?$log");
	}
	else{
		echo mysql_error();
	}
?>