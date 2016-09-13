<?php 
	require_once("files/conect.php");
    session_cache_limiter();
    session_cache_expire(1);
    include "files/verifica.php";
?>
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
<h1><b>Cadastro de Bairros</b></h1>
	
	<hr>
<div class="container-fluid" style="font-size:20px;font-weight:bold;">

<form action="" method="POST">
	<textarea  style="margin-bottom:5px;" type="text" class="form-control" required name="bairro" Placeholder="Digite o nome do bairro" ></textarea>
	<small style="">Digite vários bairros separados por ; (ponto e virgula) Ex. Centro;Vila Real;...</small><br>
	<input type="submit" class="btn btn-primary" name="enviar" value="Cadastrar"/><br>
</form>

<?php 
error_reporting(0);
	if(isset($_POST['enviar'])){
		$consulta = mysql_query("SELECT adm_cidade FROM adm WHERE adm_cod = '$codUsuario' ")or die(mysql_error());
		$showCidade = mysql_fetch_assoc($consulta);
		$cidade = $showCidade['adm_cidade'];
		$bairro = explode(';',$_POST['bairro']);
		 foreach($bairro as $item){
	   		$query = "INSERT INTO bairros(bairro_cidade,user_bairro_cod,bairro_nome) VALUES ('$cidade','$codUsuario','$item')";
	    	mysql_query($query)or die(mysql_error());
   		 }


		if(!mysql_error()){
		header("Location:home.php?go=bairro");
		
		}
		else{
			echo mysql_error();
		}
	}else{
		echo mysql_error();
	}

	?>
	<div class="table-responsive">
				<h1 class="page-header">Bairros Cadastrados</h1>
				<table class="table table-striped" style="font-family: Tahoma;">
				              <thead>
				                <tr>
				                  <th>Cidade</th>
				                  <th>Nome do Bairro</th>
				                  <th>Ação</th>
				                </tr>
				              </thead>
				              <tbody>
<?php				              	
	$result = mysql_query("SELECT *FROM bairros WHERE user_bairro_cod = '$codUsuario' ORDER BY bairro_nome ASC")or die(mysql_error());
		while ($show = mysql_fetch_assoc($result)) { 
			$id = $show['bairro_cod'];
			$bairro_cidade = $show['bairro_cidade'];
			?>
	              	<tr>
	              		<td><?php echo $show['bairro_cidade'];?></td>
	              		<td><?php echo $show['bairro_nome'];?></td>
						<td>
							<a class="glyphicon glyphicon-remove-sign" href="files/delBairro.php?id=<?php echo $id;?>" Onclick="return ConfirmDelete();"></a>
							<a class="glyphicon glyphicon-edit" data-toggle="modal" data-target=".bs-example-modal-lg-edit<?php echo $id;?>" href="#" ></a>	
						</td>
	              	</tr>
				              	<div class="modal fade bs-example-modal-lg-edit<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <!-- modal -->
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="padding:10px;font-size:20px;">
                      <h1>Editar Cadastro!</h1>
                      <form action="files/editBairro.php?id=<?php echo $id;?>&cod=<?php echo $codUsuario;?>" method="post" >
                       		<textarea  style="margin-bottom:5px;" type="text" class="form-control" required name="bairro" Placeholder="Digite o nome do bairro" ><?php echo $show['bairro_nome']; ?></textarea>
							<small style="">Digite vários bairros separados por ; (ponto e virgula) Ex. Centro;Vila Real;...</small><br>
                       <input type="submit" class="btn btn-primary"name="enviar" value="Atualizar"/><br>

                      </form>
                    </div>
                  </div>
                </div><!-- ACABA MODAL EDITAR -->
		<?php 
	}

?>