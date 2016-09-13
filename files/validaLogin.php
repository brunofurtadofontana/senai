<?php 
	require_once("conect.php");

/*	$usuario=trim(htmlspecialchars($_POST['usuario']));
	$senha=trim(htmlspecialchars(md5($_POST['senha'])));

	$ret = mysql_query("select usuario FROM usuarios");
	while($dados=mysql_fetch_assoc($ret)):
	if ($usuario==$dados['usuario']) {
			$pass = mysql_query("select senha FROM usuarios");
			$passFinal=mysql_fetch_assoc($pass);
			if ($senha==$passFinal['senha']) {
				session_start();
				$_SESSION["LOGIN_USUARIO"]=$usuario;
				$_SESSION["SENHA_USUARIO"]=$senha;
				header("Location:index.php");
			}
			else{
				header("Location:login.php?erro=1");
			}
		//$pass = mysql_query("select senha FROM usuarios WHERE $senha='".$dados['senha']."'");
	}
	else{
		header("Location:login.php?erro=2");
	}
	endwhile;
*/
		
		$gravalog= htmlspecialchars(trim($_POST["usuario"]));//salva na variavel $gravaLog o login do adm
		$gravaSenha= htmlspecialchars(trim($_POST["senha"]));//salva na variavel $gravaSenhaADM a senha do admim
		$gravaSenha2=strtoupper(md5($gravaSenha));//criptografa a senha
		if($gravalog && $gravaSenha != ""){
			$sqlAdm = mysql_query("SELECT *FROM adm WHERE adm_login = '$gravalog' ")or die(mysql_error());
			$contAdm = mysql_num_rows($sqlAdm);//cont recebe a a linha selecionada
			if($contAdm == 0){
				$sql = mysql_query("SELECT * FROM usuario  WHERE usu_login='$gravalog' AND usu_status = 'ATIVO' ");//seleciona o banco dados loginfum nome logADM
				$cont = mysql_num_rows($sql);//cont recebe a a linha selecionada
				while($linha = mysql_fetch_array($sql)){
					$senha_db = $linha["usu_pass"];	
					$status = $linha['usu_status'];
					$cod_usuario = $linha["usu_cod"];

				}
				if($cont==0){//se o login do adm não for o cadastrado
					header("Location:../index.php?erro=2");
				}
				else{	
					if($senha_db != $gravaSenha2){//se a senha não for igual a que o admim cadastrou
					header("Location:../index.php?erro=1");
					}
					
					else{	
							session_start();
							$_SESSION["LOGIN_USUARIO"]=$gravalog;
							$_SESSION["SENHA_USUARIO"]=$gravaSenha;
							$_SESSION["COD_USUARIO"]= $cod_usuario;
							header("Location:../home.php");			
							//session_destroy();
						}
							
				}
			}
			else{
			$cont = mysql_num_rows($sqlAdm);//cont recebe a a linha selecionada

				while($linha = mysql_fetch_array($sqlAdm)){
					$cod_usuario = $linha["adm_cod"];
					$senha_db = $linha["adm_pass"];	
					$status = $linha['adm_status'];
					//$ativo = $linha["user_ativo"];
					//echo $ativo;
				}
				if($cont==0){//se o login do adm não for o cadastrado
					header("Location:../index.php?erro=2");
				}
				else{	
					if($senha_db != $gravaSenha2){//se a senha não for igual a que o admim cadastrou
					header("Location:../index.php?erro=1");
					}
					
						else{	
							session_start();
							$_SESSION["LOGIN_USUARIO"]=$gravalog;
							$_SESSION["SENHA_USUARIO"]=$gravaSenha;
							$_SESSION["COD_USUARIO"]= $cod_usuario;
							header("Location:../home.php");			
							//session_destroy();
						}
							
				}
			}
		}
		
		
?>