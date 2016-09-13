<style type="text/css">
	.form-control{
		font-size:20px !important;
		font-weight: bold;
		padding:5px;
		margin-bottom:-10px;
	}
	input[type=submit]{
		width:20%;
		font-size: 20px;
	}	
	 select{
            width:100%;
            height:35px;
            border-radius: 5px;
          	margin-bottom:15px;
          }
</style>
<script>
function ConfirmDelete(){
  return confirm("Tem certeza que deseja deletar?");
}
</script>
<h1><b>Cadastro de Usuários</b></h1>
	<span style="width:100%;height:60px;border:1px solid red;border-radius:5px;font-size:15px;font-family:Tahoma;padding:5px;">OBSERVAÇÃO: Cadastro de usuários com privilégios parcial e total.</span>
	<hr>
<div class="container-fluid" style="font-size:20px;font-weight:bold;">

<form action="" method="POST">
	<input type="text" class="form-control" name="nome" placeholder="Informe seu nome" required/><br>
	<select id="estado1" style="display:none;" value="SC"></select>
                         <select id="cidade1" name="cidade" value="chapeco" ></select>
                         <script language="JavaScript" type="text/javascript" src="js/cidades-estados-utf8.js"></script>
                         <script language="JavaScript" type="text/javascript" charset="utf-8">
                            new dgCidadesEstados({
                              cidade: document.getElementById('cidade1'),
                              estado: document.getElementById('estado1')
                            });
                          </script>
	<input type="email" class="form-control" name="login" placeholder="Digite um email" required/><br>
	<input type="password" class="form-control" name="pass" placeholder="Informe uma senha" required/><br>
	<select name="privilegio" class="form-control">
			<option value="0">Selecione privilégio</option>
			<option value="usersenai">Usuário (SENAI)</option>
			<option value="usercomum">Usuário Comum (EMPRESA)</option>
		</select><br>
	<input type="submit" class="btn btn-primary"name="enviar" value="Cadastrar"/><br>
</form>

<?php 
error_reporting(0);
	if(isset($_POST['enviar'])){
		$nome = htmlspecialchars(trim(strtoupper($_POST['nome'])));
		$cidade = htmlspecialchars(trim($_POST['cidade']));
		$log =  htmlspecialchars(trim(strtoupper($_POST['login'])));
		$pass =  htmlspecialchars(trim(strtoupper(md5($_POST['pass']))));
		$priv =  htmlspecialchars(trim(strtoupper($_POST['privilegio'])));
		$data = date("Y-m-d");
		$status = 'INATIVO';
		$codUsuario = $_SESSION['COD_USUARIO'];
		$res = mysql_query("INSERT INTO usuario(usu_nome,
												usu_adm_cod,
												usu_cidade,
												usu_login,
												usu_pass,
												usu_data,
												usu_privilegio,
												usu_status)
										VALUES('$nome',
												'$codUsuario',
												'$cidade',
												'$log',
												'$pass',
												'$data',
												'$priv',
												'$status')")or die(mysql_error());

		if(!mysql_error()){
		header("Location:home.php?go=adduser");
		
		}
		else{
			echo mysql_error();
		}
	}
	?>
	<div class="table-responsive">
				<h1 class="page-header">Usuários Cadastrados</h1>
				<table class="table table-striped" style="font-family: Tahoma;">
				              <thead>
				                <tr>
				                  <th>Nome</th>
				                  <th>Cidade</th>
				                  <th>Login</th>
				                  <th>Senha</th>
				                  <th>Privilégio</th>
				                  <th>Status</th>
				                  <th>Ação</th>
				                </tr>
				              </thead>
				              <tbody>
<?php				              	
	$result = mysql_query("SELECT *FROM usuario WHERE usu_adm_cod = '$codUsuario' ")or die(mysql_error());
		while ($show = mysql_fetch_assoc($result)) { 
			$id = $show['usu_cod'];
			$textoDescriptografado = base64_decode($show['usu_pass']);
			//echo $textoDescriptografado;
			?>
	              	<tr>
	              		<td><?php echo $show['usu_nome'];?></td>
	              		<td><?php echo $show['usu_cidade'];?></td>
	              		<td><?php echo $show['usu_login'];?></td>
	              		<td><?php echo $show['usu_pass'];?></td>
	              		<td><?php echo $show['usu_privilegio'];?></td>
	              		<td><?php echo $show['usu_status'];?></td>
						<td>
							<a class="glyphicon glyphicon-remove-sign" href="files/delUser.php?id=<?php echo $id;?>" Onclick="return ConfirmDelete();"></a>
							<a class="glyphicon glyphicon-edit" data-toggle="modal" data-target=".bs-example-modal-lg-edit<?php echo $id;?>" href="#" ></a>	
						</td>
	              	</tr>
				              	<div class="modal fade bs-example-modal-lg-edit<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <!-- modal -->
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="padding:10px;font-size:20px;">
                      <h1>Editar Cadastro!</h1>
                      <form action="files/editUser.php?id=<?php echo $id;?>" method="post" >
                        <input type="text" class="form-control" name="nome" value="<?php echo $show['usu_nome'];?>"placeholder="Informe seu nome" required/><br>
                        <input type="text" class="form-control" name="cidade" value="<?php echo $show['usu_cidade'];?>"placeholder="Informe seu nome" required/><br>
                        <input type="email" class="form-control" name="login" value="<?php echo $show['usu_login'];?>" placeholder="Informe sua rua" required/><br>
                        <input type="pass" class="form-control" name="pass" value="<?php echo $show['usu_pass'];?>" placeholder="Informe seu bairro" required/><br>
                        <select name="privilegio" class="form-control" <?php if($show['usu_privilegio'] == 'ADM')echo 'disabled';?>  >
                          <option value="ADM" <?php if($show['usu_privilegio'] != 'ADM')echo 'disabled';?> >ADM</option>
                          <option value="USERSENAI" <?php if($show['usu_privilegio'] == 'USERSENAI')echo 'selected';?> >USUÁRIO SENAI</option>
                          <option value="USERCOMUM" <?php if($show['usu_privilegio'] == 'USERCOMUM')echo 'selected';?> >USUÁRIO COMUM (EMPRESA)</option>                      
                        </select><br>
                       <select name="status" class="form-control" <?php if($show['usu_privilegio'] == 'ADM')echo 'disabled';?> >
                          <option value="ATIVO" <?php if($show['usu_status'] == 'ATIVO')echo 'selected';?> >USUÁRIO ATIVO</option>
                          <option value="INATIVO" <?php if($show['usu_status'] == 'INATIVO')echo 'selected';?> >USUÁRIO INITIVO</option>
                        </select><br>
                          
                         
                        <input type="submit" class="btn btn-primary"name="enviar" value="Atualizar"/><br>

                      </form>
                    </div>
                  </div>
                </div><!-- ACABA MODAL EDITAR -->
		<?php 
	}

?>