<?php 
	require("conect.php");
	$id = $_GET['id'];//codigo do ser que esta logado
	$nome = htmlspecialchars(trim(strtoupper($_POST['nome'])));
	$cidade = htmlspecialchars(trim($_POST['cidade']));
	$login = htmlspecialchars(trim(strtoupper($_POST['login'])));
	$pass = htmlspecialchars(trim(strtoupper(md5($_POST['pass']))));
	$data = date("Y-m-d");
	$priv = htmlspecialchars(trim(strtoupper($_POST['privilegio'])));
	$status = htmlspecialchars(trim(strtoupper($_POST['status'])));
	$codUsuario = $_GET['cod'];

	if($priv == 'ADM'){
		$consulta = mysql_query("SELECT *from adm WHERE adm_cod = '$id'")or die(mysql_error());
		if(mysql_num_rows($consulta)==0){
			$res = mysql_query("INSERT INTO adm(adm_nome,
													adm_cidade,
													adm_login,
													adm_pass,
													adm_data,
													adm_privilegio,
													adm_status)
											VALUES('$nome',
													'$cidade',
													'$login',
													'$pass',
													'$data',
													'$priv',
													'$status')")or die(mysql_error());
			$mostrar = mysql_fetch_assoc($consulta);
			$adm_cod = $mostrar['adm_cod'];
			$del = mysql_query("DELETE from usuario WHERE usu_adm_cod = '$adm_cod'")or die(mysql_error());		

			if(!mysql_error()){
				header("Location:../home.php?go=adduser");
			}
			else{
				echo mysql_error();
			}
		}else{
			$res = mysql_query("UPDATE adm SET 
											adm_nome='$nome',
											adm_cidade='$cidade',
											adm_login='$login',
											adm_pass='$pass',
											adm_data='$data',
											adm_privilegio='$priv',
											adm_status = '$status'
											WHERE usu_cod = '$id'")or die(mysql_error());
													
			if(!mysql_error()){
				header("Location:../home.php?go=adduser");
			}
			else{
				echo mysql_error();
			}
		}

	}else{
		$res = mysql_query("UPDATE usuario SET 
											usu_nome='$nome',
											usu_adm_cod = '$codUsuario',
											usu_cidade='$cidade',
											usu_login='$login',
											usu_pass='$pass',
											usu_data='$data',
											usu_privilegio='$priv',
											usu_status = '$status'
											WHERE usu_cod = '$id'")or die(mysql_error());
													
		if(!mysql_error()){
			header("Location:../home.php?go=adduser");
		}
		else{
			echo mysql_error();
		}
	}
?>