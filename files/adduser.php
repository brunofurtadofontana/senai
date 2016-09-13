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
	<select name="cidade" style="width:100%;height:35px;border-radius:5px;margin-bottom:20px;">	
		<option value="0">Selecione uma cidade</option>
		<option value="Abdon Batista">Abdon Batista</option>
		<option value="Abelardo Luz">Abelardo Luz</option>
		<option value="Agrolândia">Agrolândia</option>
		<option value="Agronômica">Agronômica</option>
		<option value="Água Doce">Água Doce</option>
		<option value="Águas de Chapecó">Águas de Chapecó</option>
		<option value="Águas Frias">Águas Frias</option>
		<option value="Águas Mornas">Águas Mornas</option>
		<option value="Alfredo Wagner">Alfredo Wagner</option>
		<option value="Alto Bela Vista">Alto Bela Vista</option>
		<option value="Anchieta">Anchieta</option>
		<option value="Angelina">Angelina</option>
		<option value="Anita Garibaldi">Anita Garibaldi</option>
		<option value="Anitápolis">Anitápolis</option>
		<option value="Antônio Carlos">Antônio Carlos</option>
		<option value="Apiúna">Apiúna</option>
		<option value="Arabutã">Arabutã</option>
		<option value="Araquari">Araquari</option>
		<option value="Araranguá">Araranguá</option>
		<option value="Armazém">Armazém</option>
		<option value="Arroio Trinta">Arroio Trinta</option>
		<option value="Arvoredo">Arvoredo</option>
		<option value="Ascurra">Ascurra</option>
		<option value="Atalanta">Atalanta</option>
		<option value="Aurora">Aurora</option>
		<option value="Balneário Arroio do Silva">Balneário Arroio do Silva</option>
		<option value="Balneário Barra do Sul">Balneário Barra do Sul</option>
		<option value="Balneário Camboriú">Balneário Camboriú</option>
		<option value="Balneário Gaivota">Balneário Gaivota</option>
		<option value="420208Bandeirante1">Bandeirante</option>
		<option value="Barra Bonita">Barra Bonita</option>
		<option value="Barra Velha">Barra Velha</option>
		<option value="Bela Vista do Toldo">Bela Vista do Toldo</option>
		<option value="Belmonte">Belmonte</option>
		<option value="Benedito">Benedito Novo</option>
		<option value="Biguaçu">Biguaçu</option>
		<option value="Blumenau">Blumenau</option>
		<option value="Bocaina do Sul">Bocaina do Sul</option>
		<option value="Bombinhas">Bombinhas</option>
		<option value="Bom Jardim da Serra">Bom Jardim da Serra</option>
		<option value="Bom Jesus">Bom Jesus</option>
		<option value="Bom Jesus do Oeste">Bom Jesus do Oeste</option>
		<option value="Bom Retiro">Bom Retiro</option>
		<option value="Botuverá">Botuverá</option>
		<option value="Braço do Norte">Braço do Norte</option>
		<option value="Braço do Trombudo">Braço do Trombudo</option>
		<option value="Brunópolis">Brunópolis</option>
		<option value="Brusque">Brusque</option>
		<option value="Caçador">Caçador</option>
		<option value="Caibi">Caibi</option>
		<option value="Calmon">Calmon</option>
		<option value="Camboriú">Camboriú</option>
		<option value="Campo Alegre">Campo Alegre</option>
		<option value="Campo Belo do Sul">Campo Belo do Sul</option>
		<option value="Campo Erê">Campo Erê</option>
		<option value="Campos Novos">Campos Novos</option>
		<option value="Canelinha">Canelinha</option>
		<option value="Canoinhas">Canoinhas</option>
		<option value="Capão Alto">Capão Alto</option>
		<option value="Capinzal">Capinzal</option>
		<option value="Capivari de Baixo">Capivari de Baixo</option>
		<option value="Catanduvas">Catanduvas</option>
		<option value="Caxambu do Sul">Caxambu do Sul</option>
		<option value="Celso Ramos">Celso Ramos</option>
		<option value="Cerro Negro">Cerro Negro</option>
		<option value="Chapadão do Lageado">Chapadão do Lageado</option>
		<option value="Chapecó">Chapecó</option>
		<option value="Cocal do Sul">Cocal do Sul</option>
		<option value="Concórdia">Concórdia</option>
		<option value="Cordilheira Alta">Cordilheira Alta</option>
		<option value="Coronel Freitas">Coronel Freitas</option>
		<option value="Coronel Martins">Coronel Martins</option>
		<option value="Correia Pinto">Correia Pinto</option>
		<option value="Corupá">Corupá</option>
		<option value="Criciúma">Criciúma</option>
		<option value="Cunha Porã">Cunha Porã</option>
		<option value="Cunhataí">Cunhataí</option>
		<option value="Curitibanos">Curitibanos</option>
		<option value="Descanso">Descanso</option>
		<option value="Dionísio Cerqueira">Dionísio Cerqueira</option>
		<option value="Dona Emma">Dona Emma</option>
		<option value="Doutor Pedrinho">Doutor Pedrinho</option>
		<option value="Entre Rios">Entre Rios</option>
		<option value="Ermo">Ermo</option>
		<option value="Erval Velho">Erval Velho</option>
		<option value="Faxinal dos Guedes">Faxinal dos Guedes</option>
		<option value="Flor do Sertão">Flor do Sertão</option>
		<option value="Florianópolis">Florianópolis</option>
		<option value="Formosa do Sul">Formosa do Sul</option>
		<option value="Forquilhinha">Forquilhinha</option>
		<option value="Fraiburgo">Fraiburgo</option>
		<option value="Frei Rogério">Frei Rogério</option>
		<option value="Galvão">Galvão</option>
		<option value="Garopaba">Garopaba</option>
		<option value="Garuva">Garuva</option>
		<option value="Gaspar">Gaspar</option>
		<option value="Governador Celso Ramos">Governador Celso Ramos</option>
		<option value="Grão Pará">Grão Pará</option>
		<option value="Gravatal">Gravatal</option>
		<option value="Guabiruba">Guabiruba</option>
		<option value="Guaraciaba">Guaraciaba</option>
		<option value="Guaramirim">Guaramirim</option>
		<option value="Guarujá do Sul">Guarujá do Sul</option>
		<option value="Guatambú">Guatambú</option>
		<option value="Herval d`Oeste">Herval d`Oeste</option>
		<option value="Ibiam">Ibiam</option>
		<option value="Ibicaré">Ibicaré</option>
		<option value="Ibirama">Ibirama</option>
		<option value="Içara">Içara</option>
		<option value="Ilhota">Ilhota</option>
		<option value="Imaruí">Imaruí</option>
		<option value="Imbituba">Imbituba</option>
		<option value="Imbuia">Imbuia</option>
		<option value="Indaial">Indaial</option>
		<option value="Iomerê">Iomerê</option>
		<option value="Ipira">Ipira</option>
		<option value="Iporã do Oeste">Iporã do Oeste</option>
		<option value="Ipuaçu">Ipuaçu</option>
		<option value="Ipumirim">Ipumirim</option>
		<option value="Iraceminha">Iraceminha</option>
		<option value="Irani">Irani</option>
		<option value="Irati">Irati</option>
		<option value="Irineópolis">Irineópolis</option>
		<option value="Itá">Itá</option>
		<option value="Itaiópolis">Itaiópolis</option>
		<option value="Itajaí">Itajaí</option>
		<option value="Itapema">Itapema</option>
		<option value="Itapiranga">Itapiranga</option>
		<option value="Itapoá">Itapoá</option>
		<option value="Ituporanga">Ituporanga</option>
		<option value="Jaborá">Jaborá</option>
		<option value="Jacinto Machado">Jacinto Machado</option>
		<option value="Jaguaruna">Jaguaruna</option>
		<option value="Jaraguá do Sul">Jaraguá do Sul</option>
		<option value="Jardinópolis">Jardinópolis</option>
		<option value="Joaçaba">Joaçaba</option>
		<option value="Joinville">Joinville</option>
		<option value="José Boiteux">José Boiteux</option>
		<option value="Jupiá">Jupiá</option>
		<option value="Lacerdópolis">Lacerdópolis</option>
		<option value="Lages">Lages</option>
		<option value="Laguna">Laguna</option>
		<option value="Lajeado Grande">Lajeado Grande</option>
		<option value="Laurentino">Laurentino</option>
		<option value="Lauro Muller">Lauro Muller</option>
		<option value="Lebon Régis">Lebon Régis</option>
		<option value="Leoberto Leal">Leoberto Leal</option>
		<option value="Lindóia do Sul">Lindóia do Sul</option>
		<option value="Lontras">Lontras</option>
		<option value="Luiz Alves">Luiz Alves</option>
		<option value="Luzerna">Luzerna</option>
		<option value="Macieira">Macieira</option>
		<option value="Mafra">Mafra</option>
		<option value="Major Gercino">Major Gercino</option>
		<option value="Major Vieira">Major Vieira</option>
		<option value="Maracajá">Maracajá</option>
		<option value="Maravilha">Maravilha</option>
		<option value="Marema">Marema</option>
		<option value="Massaranduba">Massaranduba</option>
		<option value="Matos Costa">Matos Costa</option>
		<option value="Meleiro">Meleiro</option>
		<option value="Mirim Doce">Mirim Doce</option>
		<option value="Modelo">Modelo</option>
		<option value="Mondaí">Mondaí</option>
		<option value="Monte Carlo">Monte Carlo</option>
		<option value="Monte Castelo">Monte Castelo</option>
		<option value="Morro da Fumaça">Morro da Fumaça</option>
		<option value="Morro Grande">Morro Grande</option>
		<option value="Navegantes">Navegantes</option>
		<option value="Nova Erechim">Nova Erechim</option>
		<option value="Nova Itaberaba">Nova Itaberaba</option>
		<option value="Nova Trento">Nova Trento</option>
		<option value="Nova Veneza">Nova Veneza</option>
		<option value="Novo Horizonte">Novo Horizonte</option>
		<option value="Orleans">Orleans</option>
		<option value="Otacílio Costa">Otacílio Costa</option>
		<option value="Ouro">Ouro</option>
		<option value="Ouro Verde">Ouro Verde</option>
		<option value="Paial">Paial</option>
		<option value="Painel">Painel</option>
		<option value="Palhoça">Palhoça</option>
		<option value="Palma Sola">Palma Sola</option>
		<option value="Palmeira">Palmeira</option>
		<option value="Palmitos">Palmitos</option>
		<option value="Papanduva">Papanduva</option>
		<option value="Paraíso">Paraíso</option>
		<option value="Passo de Torres">Passo de Torres</option>
		<option value="Passos Maia">Passos Maia</option>
		<option value="Paulo Lopes">Paulo Lopes</option>
		<option value="Pedras Grandes">Pedras Grandes</option>
		<option value="Penha">Penha</option>
		<option value="Peritiba">Peritiba</option>
		<option value="Petrolândia">Petrolândia</option>
		<option value="Piçarras">Piçarras</option>
		<option value="Pinhalzinho">Pinhalzinho</option>
		<option value="Pinheiro Preto">Pinheiro Preto</option>
		<option value="Piratuba">Piratuba</option>
		<option value="Planalto Alegre">Planalto Alegre</option>
		<option value="Pomerode">Pomerode</option>
		<option value="Ponte Alta">Ponte Alta</option>
		<option value="Ponte Alta do Norte">Ponte Alta do Norte</option>
		<option value="Ponte Serrada">Ponte Serrada</option>
		<option value="Porto Belo">Porto Belo</option>
		<option value="Porto União">Porto União</option>
		<option value="Pouso Redondo">Pouso Redondo</option>
		<option value="Praia Grande">Praia Grande</option>
		<option value="Presidente Castelo Branco">Presidente Castelo Branco</option>
		<option value="Presidente Getúlio">Presidente Getúlio</option>
		<option value="Presidente Nereu">Presidente Nereu</option>
		<option value="Princesa">Princesa</option>
		<option value="4214201">Quilombo</option>
		<option value="Quilombo">Rancho Queimado</option>
		<option value="Rio das Antas">Rio das Antas</option>
		<option value="Rio do Campo">Rio do Campo</option>
		<option value="Rio do Oeste">Rio do Oeste</option>
		<option value="Rio dos Cedros">Rio dos Cedros</option>
		<option value="Rio do Sul">Rio do Sul</option>
		<option value="Rio Fortuna">Rio Fortuna</option>
		<option value="4215Rio Negrinho000">Rio Negrinho</option>
		<option value="Rio Rufino">Rio Rufino</option>
		<option value="Riqueza">Riqueza</option>
		<option value="Rodeio">Rodeio</option>
		<option value="Romelândia">Romelândia</option>
		<option value="Salete">Salete</option>
		<option value="Saltinho">Saltinho</option>
		<option value="Salto Veloso">Salto Veloso</option>
		<option value="Sangão">Sangão</option>
		<option value="Santa Cecília">Santa Cecília</option>
		<option value="Santa Helena">Santa Helena</option>
		<option value="Santa Rosa de Lima">Santa Rosa de Lima</option>
		<option value="Santa Rosa do Sul">Santa Rosa do Sul</option>
		<option value="Santa Terezinha">Santa Terezinha</option>
		<option value="Santa Terezinha do Progresso">Santa Terezinha do Progresso</option>
		<option value="Santiago do Sul">Santiago do Sul</option>
		<option value="Santo Amaro da Imperatriz">Santo Amaro da Imperatriz</option>
		<option value="São Bento do Sul">São Bento do Sul</option>
		<option value="São Bernardino">São Bernardino</option>
		<option value="São Bonifácio">São Bonifácio</option>
		<option value="São Carlos">São Carlos</option>
		<option value="São Cristovão do Sul">São Cristovão do Sul</option>
		<option value="São Domingos">São Domingos</option>
		<option value="São Francisco do Sul">São Francisco do Sul</option>
		<option value="São João Batista">São João Batista</option>
		<option value="São João do Itaperiú">São João do Itaperiú</option>
		<option value="São João do Oeste">São João do Oeste</option>
		<option value="São João do Sul">São João do Sul</option>
		<option value="São Joaquim">São Joaquim</option>
		<option value="São José">São José</option>
		<option value="São José do Cedro">São José do Cedro</option>
		<option value="São José do Cerrito">São José do Cerrito</option>
		<option value="São Lourenço do Oeste">São Lourenço do Oeste</option>
		<option value="São Ludgero">São Ludgero</option>
		<option value="São Martinho">São Martinho</option>
		<option value="São Miguel da Boa Vista">São Miguel da Boa Vista</option>
		<option value="São Miguel do Oeste">São Miguel do Oeste</option>
		<option value="São Pedro de Alcântara">São Pedro de Alcântara</option>
		<option value="Saudades">Saudades</option>
		<option value="Schroeder">Schroeder</option>
		<option value="Seara">Seara</option>
		<option value="Serra Alta">Serra Alta</option>
		<option value="Siderópolis">Siderópolis</option>
		<option value="Sombrio">Sombrio</option>
		<option value="Sul Brasil">Sul Brasil</option>
		<option value="Taió">Taió</option>
		<option value="Tangará">Tangará</option>
		<option value="Tigrinhos">Tigrinhos</option>
		<option value="Tijucas">Tijucas</option>
		<option value="Timbé do Sul">Timbé do Sul</option>
		<option value="Timbó">Timbó</option>
		<option value="Timbó Grande">Timbó Grande</option>
		<option value="Três Barras">Três Barras</option>
		<option value="Treviso">Treviso</option>
		<option value="Treze de Maio">Treze de Maio</option>
		<option value="Treze Tílias">Treze Tílias</option>
		<option value="Trombudo Central">Trombudo Central</option>
		<option value="Tubarão">Tubarão</option>
		<option value="Tunápolis">Tunápolis</option>
		<option value="Turvo">Turvo</option>
		<option value="União do Oeste">União do Oeste</option>
		<option value="Urubici">Urubici</option>
		<option value="Urupema">Urupema</option>
		<option value="Urussanga">Urussanga</option>
		<option value="Vargeão">Vargeão</option>
		<option value="Vargem">Vargem</option>
		<option value="Vargem Bonita">Vargem Bonita</option>
		<option value="Vidal Ramos">Vidal Ramos</option>
		<option value="Videira">Videira</option>
		<option value="Vitor Meireles">Vitor Meireles</option>
		<option value="Witmarsum">Witmarsum</option>
		<option value="Xanxerê">Xanxerê</option>
		<option value="Xavantina">Xavantina</option>
		<option value="Xaxim">Xaxim</option>
		<option value="Zortéa">Zortéa</option>
	</select>
	<input type="email" class="form-control" name="login" placeholder="Digite um email" required/><br>
	<input type="password" class="form-control" name="pass" placeholder="Informe uma senha" required/><br>
	<select name="privilegio" class="form-control">
			<option value="0">Selecione privilégio</option>
			<option value="ADM">Administrador</option>
			<option value="USERCOMUM">Usuário Comum (EMPRESA)</option>
		</select><br>
	<input type="submit" class="btn btn-primary" name="enviar" value="Cadastrar"/><br>
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
		if($priv == 'ADM'){
			$res = mysql_query("INSERT INTO adm(adm_nome,
												adm_cidade,
												adm_login,
												adm_pass,
												adm_data,
												adm_privilegio,
												adm_status)
										VALUES('$nome',
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
	}else{
		}
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
	$result = mysql_query("SELECT *FROM usuario WHERE usu_adm_cod = '$codUsuario'")or die(mysql_error());
		while ($show = mysql_fetch_assoc($result)) { 
			$id = $show['usu_cod'];
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
                      <form action="files/editUser.php?id=<?php echo $id;?>&cod=<?php echo $codUsuario;?>" method="post" >
                        <input type="text" class="form-control" name="nome" value="<?php echo $show['usu_nome'];?>"placeholder="Informe seu nome" required/><br>
                        <select name="cidade" style="width:100%;height:35px;border-radius:5px;margin-bottom:20px;">	
							<option value="0" <?php if($show['usu_cidade']=='0')echo 'selected'; ?> >Selecione a cidade onde mora</option>
							<option value="Abdon Batista" <?php if($show['usu_cidade']=='Abdon Batista')echo 'selected'; ?> >Abdon Batista</option>
							<option value="Abelardo Luz" <?php if($show['usu_cidade']=='AAbelardo Luz')echo 'selected'; ?>>Abelardo Luz</option>
							<option value="Agrolândia" <?php if($show['usu_cidade']=='Agrolândia')echo 'selected'; ?>>Agrolândia</option>
							<option value="Agronômica" <?php if($show['usu_cidade']=='Agronômica')echo 'selected'; ?>>Agronômica</option>
							<option value="Água Doce" <?php if($show['usu_cidade']=='Água Doce')echo 'selected'; ?>>Água Doce</option>
							<option value="Águas de Chapecó" <?php if($show['usu_cidade']=='Águas de Chapecó')echo 'selected'; ?>>Águas de Chapecó</option>
							<option value="Águas Frias" <?php if($show['usu_cidade']=='Águas Frias')echo 'selected'; ?>>Águas Frias</option>
							<option value="Águas Mornas" <?php if($show['usu_cidade']=='Águas Mornas')echo 'selected'; ?>>Águas Mornas</option>
							<option value="Alfredo Wagner" <?php if($show['usu_cidade']=='Alfredo Wagner')echo 'selected'; ?>>Alfredo Wagner</option>
							<option value="Alto Bela Vista" <?php if($show['usu_cidade']=='Alto Bela Vista')echo 'selected'; ?>>Alto Bela Vista</option>
							<option value="Anchieta" <?php if($show['usu_cidade']=='Anchieta')echo 'selected'; ?>>Anchieta</option>
							<option value="Angelina"<?php if($show['usu_cidade']=='Angelina')echo 'selected'; ?>>Angelina</option>
							<option value="Anita Garibaldi" <?php if($show['usu_cidade']=='Anita Garibaldi')echo 'selected'; ?>>Anita Garibaldi</option>
							<option value="Anitápolis" <?php if($show['usu_cidade']=='Anitápolis')echo 'selected'; ?>>Anitápolis</option>
							<option value="Antônio Carlos" <?php if($show['usu_cidade']=='Antônio Carlos')echo 'selected'; ?>>Antônio Carlos</option>
							<option value="Apiúna"<?php if($show['usu_cidade']=='Apiúna')echo 'selected'; ?>>Apiúna</option>
							<option value="Arabutã"<?php if($show['usu_cidade']=='Arabutã')echo 'selected'; ?>>Arabutã</option>
							<option value="Araquari"<?php if($show['usu_cidade']=='Araquari')echo 'selected'; ?>>Araquari</option>
							<option value="Araranguá"<?php if($show['usu_cidade']=='Araranguá')echo 'selected'; ?>>Araranguá</option>
							<option value="Armazém"<?php if($show['usu_cidade']=='Abdon Batista')echo 'selected'; ?>>Armazém</option>
							<option value="Arroio Trinta"<?php if($show['usu_cidade']=='Armazém')echo 'selected'; ?>>Arroio Trinta</option>
							<option value="Arvoredo"<?php if($show['usu_cidade']=='Arvoredo')echo 'selected'; ?>>Arvoredo</option>
							<option value="Ascurra"<?php if($show['usu_cidade']=='Ascurra')echo 'selected'; ?>>Ascurra</option>
							<option value="Atalanta"<?php if($show['usu_cidade']=='Atalanta')echo 'selected'; ?>>Atalanta</option>
							<option value="Aurora"<?php if($show['usu_cidade']=='Aurora')echo 'selected'; ?>>Aurora</option>
							<option value="Balneário Arroio do Silva"<?php if($show['usu_cidade']=='Balneário Arroio do Silva')echo 'selected'; ?>>Balneário Arroio do Silva</option>
							<option value="Balneário Barra do Sul"<?php if($show['usu_cidade']=='Abdon Batista')echo 'selected'; ?>>Balneário Barra do Sul</option>
							<option value="Balneário Camboriú"<?php if($show['usu_cidade']=='Balneário Barra do Sul')echo 'selected'; ?>>Balneário Camboriú</option>
							<option value="Balneário Gaivota"<?php if($show['usu_cidade']=='Balneário Gaivota')echo 'selected'; ?>>Balneário Gaivota</option>
							<option value="420208Bandeirante1"<?php if($show['usu_cidade']=='Bandeirante')echo 'selected'; ?>>Bandeirante</option>
							<option value="Barra Bonita"<?php if($show['usu_cidade']=='Barra Bonita')echo 'selected'; ?>>Barra Bonita</option>
							<option value="Barra Velha"<?php if($show['usu_cidade']=='Barra Velha')echo 'selected'; ?>>Barra Velha</option>
							<option value="Bela Vista do Toldo"<?php if($show['usu_cidade']=='Bela Vista do Toldo')echo 'selected'; ?>>Bela Vista do Toldo</option>
							<option value="Belmonte"<?php if($show['usu_cidade']=='Belmonte')echo 'selected'; ?>>Belmonte</option>
							<option value="Benedito"<?php if($show['usu_cidade']=='Benedito')echo 'selected'; ?>>Benedito Novo</option>
							<option value="Biguaçu"<?php if($show['usu_cidade']=='Biguaçu')echo 'selected'; ?>>Biguaçu</option>
							<option value="Blumenau"<?php if($show['usu_cidade']=='Blumenau')echo 'selected'; ?>>Blumenau</option>
							<option value="Bocaina do Sul"<?php if($show['usu_cidade']=='Bocaina do Sul')echo 'selected'; ?>>Bocaina do Sul</option>
							<option value="Bombinhas"<?php if($show['usu_cidade']=='Bombinhas')echo 'selected'; ?>>Bombinhas</option>
							<option value="Bom Jardim da Serra"<?php if($show['usu_cidade']=='Bom Jardim da Serra')echo 'selected'; ?>>Bom Jardim da Serra</option>
							<option value="Bom Jesus"<?php if($show['usu_cidade']=='Bom Jesus')echo 'selected'; ?>>Bom Jesus</option>
							<option value="Bom Jesus do Oeste"<?php if($show['usu_cidade']=='Bom Jesus do Oeste')echo 'selected'; ?>>Bom Jesus do Oeste</option>
							<option value="Bom Retiro"<?php if($show['usu_cidade']=='Bom Retiro')echo 'selected'; ?>>Bom Retiro</option>
							<option value="Botuverá"<?php if($show['usu_cidade']=='Botuverá')echo 'selected'; ?>>Botuverá</option>
							<option value="Braço do Norte"<?php if($show['usu_cidade']=='Braço do Norte')echo 'selected'; ?>>Braço do Norte</option>
							<option value="Braço do Trombudo"<?php if($show['usu_cidade']=='Braço do Trombudo')echo 'selected'; ?>>Braço do Trombudo</option>
							<option value="Brunópolis"<?php if($show['usu_cidade']=='Brunópolis')echo 'selected'; ?>>Brunópolis</option>
							<option value="Brusque"<?php if($show['usu_cidade']=='Brusque')echo 'selected'; ?>>Brusque</option>
							<option value="Caçador"<?php if($show['usu_cidade']=='Caçador')echo 'selected'; ?>>Caçador</option>
							<option value="Caibi"<?php if($show['usu_cidade']=='Caibi')echo 'selected'; ?>>Caibi</option>
							<option value="Calmon"<?php if($show['usu_cidade']=='Calmon')echo 'selected'; ?>>Calmon</option>
							<option value="Camboriú"<?php if($show['usu_cidade']=='Camboriú')echo 'selected'; ?>>Camboriú</option>
							<option value="Campo Alegre"<?php if($show['usu_cidade']=='Campo Alegre')echo 'selected'; ?>>Campo Alegre</option>
							<option value="Campo Belo do Sul"<?php if($show['usu_cidade']=='Campo Belo do Sul')echo 'selected'; ?>>Campo Belo do Sul</option>
							<option value="Campo Erê"<?php if($show['usu_cidade']=='Campo Erê')echo 'selected'; ?>>Campo Erê</option>
							<option value="Campos Novos"<?php if($show['usu_cidade']=='Campos Novos')echo 'selected'; ?>>Campos Novos</option>
							<option value="Canelinha"<?php if($show['usu_cidade']=='Canelinha')echo 'selected'; ?>>Canelinha</option>
							<option value="Canoinhas"<?php if($show['usu_cidade']=='Canoinhas')echo 'selected'; ?>>Canoinhas</option>
							<option value="Capão Alto"<?php if($show['usu_cidade']=='Capão Alto')echo 'selected'; ?>>Capão Alto</option>
							<option value="Capinzal"<?php if($show['usu_cidade']=='Capinzal')echo 'selected'; ?>>Capinzal</option>
							<option value="Capivari de Baixo"<?php if($show['usu_cidade']=='Capivari de Baixo')echo 'selected'; ?>>Capivari de Baixo</option>
							<option value="Catanduvas"<?php if($show['usu_cidade']=='Catanduvas')echo 'selected'; ?>>Catanduvas</option>
							<option value="Caxambu do Sul"<?php if($show['usu_cidade']=='Caxambu do Sul')echo 'selected'; ?>>Caxambu do Sul</option>
							<option value="Celso Ramos"<?php if($show['usu_cidade']=='Celso Ramos')echo 'selected'; ?>>Celso Ramos</option>
							<option value="Cerro Negro"<?php if($show['usu_cidade']=='Cerro Negro')echo 'selected'; ?>>Cerro Negro</option>
							<option value="Chapadão do Lageado"<?php if($show['usu_cidade']=='Chapadão do Lageado')echo 'selected'; ?>>Chapadão do Lageado</option>
							<option value="Chapecó"<?php if($show['usu_cidade']=='Chapecó')echo 'selected'; ?>>Chapecó</option>
							<option value="Cocal do Sul"<?php if($show['usu_cidade']=='Cocal do Sul')echo 'selected'; ?>>Cocal do Sul</option>
							<option value="Concórdia"<?php if($show['usu_cidade']=='Concórdia')echo 'selected'; ?>>Concórdia</option>
							<option value="Cordilheira Alta"<?php if($show['usu_cidade']=='Cordilheira Alta')echo 'selected'; ?>>Cordilheira Alta</option>
							<option value="Coronel Freitas"<?php if($show['usu_cidade']=='Coronel Freitas')echo 'selected'; ?>>Coronel Freitas</option>
							<option value="Coronel Martins"<?php if($show['usu_cidade']=='Coronel Martins')echo 'selected'; ?>>Coronel Martins</option>
							<option value="Correia Pinto"<?php if($show['usu_cidade']=='Correia Pinto')echo 'selected'; ?>>Correia Pinto</option>
							<option value="Corupá"<?php if($show['usu_cidade']=='Corupá')echo 'selected'; ?>>Corupá</option>
							<option value="Criciúma"<?php if($show['usu_cidade']=='Criciúma')echo 'selected'; ?>>Criciúma</option>
							<option value="Cunha Porã"<?php if($show['usu_cidade']=='Cunha Porã')echo 'selected'; ?>>Cunha Porã</option>
							<option value="Cunhataí"<?php if($show['usu_cidade']=='Cunhataí')echo 'selected'; ?>>Cunhataí</option>
							<option value="Curitibanos"<?php if($show['usu_cidade']=='Curitibanos')echo 'selected'; ?>>Curitibanos</option>
							<option value="Descanso"<?php if($show['usu_cidade']=='Descanso')echo 'selected'; ?>>Descanso</option>
							<option value="Dionísio Cerqueira"<?php if($show['usu_cidade']=='Dionísio Cerqueira')echo 'selected'; ?>>Dionísio Cerqueira</option>
							<option value="Dona Emma"<?php if($show['usu_cidade']=='Dona Emma')echo 'selected'; ?>>Dona Emma</option>
							<option value="Doutor Pedrinho"<?php if($show['usu_cidade']=='Doutor Pedrinho')echo 'selected'; ?>>Doutor Pedrinho</option>
							<option value="Entre Rios"<?php if($show['usu_cidade']=='Entre Rios')echo 'selected'; ?>>Entre Rios</option>
							<option value="Ermo"<?php if($show['usu_cidade']=='Ermo')echo 'selected'; ?>>Ermo</option>
							<option value="Erval Velho"<?php if($show['usu_cidade']=='Erval Velho')echo 'selected'; ?>>Erval Velho</option>
							<option value="Faxinal dos Guedes"<?php if($show['usu_cidade']=='Faxinal dos Guedes')echo 'selected'; ?>>Faxinal dos Guedes</option>
							<option value="Flor do Sertão"<?php if($show['usu_cidade']=='Flor do Sertão')echo 'selected'; ?>>Flor do Sertão</option>
							<option value="Florianópolis"<?php if($show['usu_cidade']=='Florianópolis')echo 'selected'; ?>>Florianópolis</option>
							<option value="Formosa do Sul"<?php if($show['usu_cidade']=='Formosa do Sul')echo 'selected'; ?>>Formosa do Sul</option>
							<option value="Forquilhinha"<?php if($show['usu_cidade']=='Forquilhinha')echo 'selected'; ?>>Forquilhinha</option>
							<option value="Fraiburgo"<?php if($show['usu_cidade']=='Fraiburgo')echo 'selected'; ?>>Fraiburgo</option>
							<option value="Frei Rogério"<?php if($show['usu_cidade']=='Frei Rogério')echo 'selected'; ?>>Frei Rogério</option>
							<option value="Galvão"<?php if($show['usu_cidade']=='Galvão')echo 'selected'; ?>>Galvão</option>
							<option value="Garopaba"<?php if($show['usu_cidade']=='Garopaba')echo 'selected'; ?>>Garopaba</option>
							<option value="Garuva"<?php if($show['usu_cidade']=='Garuva')echo 'selected'; ?>>Garuva</option>
							<option value="Gaspar"<?php if($show['usu_cidade']=='Gaspar')echo 'selected'; ?>>Gaspar</option>
							<option value="Governador Celso Ramos"<?php if($show['usu_cidade']=='Governador Celso Ramos')echo 'selected'; ?>>Governador Celso Ramos</option>
							<option value="Grão Pará"<?php if($show['usu_cidade']=='Grão Pará')echo 'selected'; ?>>Grão Pará</option>
							<option value="Gravatal"<?php if($show['usu_cidade']=='Gravatal')echo 'selected'; ?>>Gravatal</option>
							<option value="Guabiruba"<?php if($show['usu_cidade']=='Guabiruba')echo 'selected'; ?>>Guabiruba</option>
							<option value="Guaraciaba"<?php if($show['usu_cidade']=='Guaraciaba')echo 'selected'; ?>>Guaraciaba</option>
							<option value="Guaramirim"<?php if($show['usu_cidade']=='Guaramirim')echo 'selected'; ?>>Guaramirim</option>
							<option value="Guarujá do Sul"<?php if($show['usu_cidade']=='Guarujá do Sul')echo 'selected'; ?>>Guarujá do Sul</option>
							<option value="Guatambú"<?php if($show['usu_cidade']=='Guatambú')echo 'selected'; ?>>Guatambú</option>
							<option value="Herval d`Oeste"<?php if($show['usu_cidade']=='Herval d`Oeste')echo 'selected'; ?>>Herval d`Oeste</option>
							<option value="Ibiam"<?php if($show['usu_cidade']=='Ibiam')echo 'selected'; ?>>Ibiam</option>
							<option value="Ibicaré"<?php if($show['usu_cidade']=='Ibicaré')echo 'selected'; ?>>Ibicaré</option>
							<option value="Ibirama"<?php if($show['usu_cidade']=='Ibirama')echo 'selected'; ?>>Ibirama</option>
							<option value="Içara"<?php if($show['usu_cidade']=='Içara')echo 'selected'; ?>>Içara</option>
							<option value="Ilhota"<?php if($show['usu_cidade']=='Ilhota')echo 'selected'; ?>>Ilhota</option>
							<option value="Imaruí"<?php if($show['usu_cidade']=='Imaruí')echo 'selected'; ?>>Imaruí</option>
							<option value="Imbituba"<?php if($show['usu_cidade']=='Imbituba')echo 'selected'; ?>>Imbituba</option>
							<option value="Imbuia"<?php if($show['usu_cidade']=='Imbuia')echo 'selected'; ?>>Imbuia</option>
							<option value="Indaial"<?php if($show['usu_cidade']=='Indaial')echo 'selected'; ?>>Indaial</option>
							<option value="Iomerê"<?php if($show['usu_cidade']=='Iomerê')echo 'selected'; ?>>Iomerê</option>
							<option value="Ipira"<?php if($show['usu_cidade']=='Ipira')echo 'selected'; ?>>Ipira</option>
							<option value="Iporã do Oeste"<?php if($show['usu_cidade']=='Iporã do Oeste')echo 'selected'; ?>>Iporã do Oeste</option>
							<option value="Ipuaçu"<?php if($show['usu_cidade']=='Ipuaçu')echo 'selected'; ?>>Ipuaçu</option>
							<option value="Ipumirim"<?php if($show['usu_cidade']=='Ipumirim<')echo 'selected'; ?>>Ipumirim</option>
							<option value="Iraceminha"<?php if($show['usu_cidade']=='Iraceminha')echo 'selected'; ?>>Iraceminha</option>
							<option value="Irani"<?php if($show['usu_cidade']=='Irani')echo 'selected'; ?>>Irani</option>
							<option value="Irati"<?php if($show['usu_cidade']=='Irati')echo 'selected'; ?>>Irati</option>
							<option value="Irineópolis"<?php if($show['usu_cidade']=='Irineópolis')echo 'selected'; ?>>Irineópolis</option>
							<option value="Itá"<?php if($show['usu_cidade']=='Itá')echo 'selected'; ?>>Itá</option>
							<option value="Itaiópolis"<?php if($show['usu_cidade']=='Itaiópolis')echo 'selected'; ?>>Itaiópolis</option>
							<option value="Itajaí"<?php if($show['usu_cidade']=='Itajaí')echo 'selected'; ?>>Itajaí</option>
							<option value="Itapema"<?php if($show['usu_cidade']=='Itapema')echo 'selected'; ?>>Itapema</option>
							<option value="Itapiranga"<?php if($show['usu_cidade']=='Itapiranga')echo 'selected'; ?>>Itapiranga</option>
							<option value="Itapoá"<?php if($show['usu_cidade']=='Itapoá')echo 'selected'; ?>>Itapoá</option>
							<option value="Ituporanga"<?php if($show['usu_cidade']=='Ituporanga')echo 'selected'; ?>>Ituporanga</option>
							<option value="Jaborá"<?php if($show['usu_cidade']=='Jaborá')echo 'selected'; ?>>Jaborá</option>
							<option value="Jacinto Machado"<?php if($show['usu_cidade']=='Jacinto Machado')echo 'selected'; ?>>Jacinto Machado</option>
							<option value="Jaguaruna"<?php if($show['usu_cidade']=='Jaguaruna')echo 'selected'; ?>>Jaguaruna</option>
							<option value="Jaraguá do Sul"<?php if($show['usu_cidade']=='Jaraguá do Sul')echo 'selected'; ?>>Jaraguá do Sul</option>
							<option value="Jardinópolis"<?php if($show['usu_cidade']=='Jardinópolis')echo 'selected'; ?>>Jardinópolis</option>
							<option value="Joaçaba"<?php if($show['usu_cidade']=='Joaçaba')echo 'selected'; ?>>Joaçaba</option>
							<option value="Joinville"<?php if($show['usu_cidade']=='Joinville')echo 'selected'; ?>>Joinville</option>
							<option value="José Boiteux"<?php if($show['usu_cidade']=='José Boiteux')echo 'selected'; ?>>José Boiteux</option>
							<option value="Jupiá"<?php if($show['usu_cidade']=='Jupiá')echo 'selected'; ?>>Jupiá</option>
							<option value="Lacerdópolis"<?php if($show['usu_cidade']=='Lacerdópolis')echo 'selected'; ?>>Lacerdópolis</option>
							<option value="Lages"<?php if($show['usu_cidade']=='Lages')echo 'selected'; ?>>Lages</option>
							<option value="Laguna"<?php if($show['usu_cidade']=='Laguna')echo 'selected'; ?>>Laguna</option>
							<option value="Lajeado Grande"<?php if($show['usu_cidade']=='Lajeado Grande')echo 'selected'; ?>>Lajeado Grande</option>
							<option value="Laurentino"<?php if($show['usu_cidade']=='Laurentino')echo 'selected'; ?>>Laurentino</option>
							<option value="Lauro Muller"<?php if($show['usu_cidade']=='Lauro Muller')echo 'selected'; ?>>Lauro Muller</option>
							<option value="Lebon Régis"<?php if($show['usu_cidade']=='Lebon Régis')echo 'selected'; ?>>Lebon Régis</option>
							<option value="Leoberto Leal"<?php if($show['usu_cidade']=='Leoberto Leal')echo 'selected'; ?>>Leoberto Leal</option>
							<option value="Lindóia do Sul"<?php if($show['usu_cidade']=='Lindóia do Sul')echo 'selected'; ?>>Lindóia do Sul</option>
							<option value="Lontras"<?php if($show['usu_cidade']=='Lontras')echo 'selected'; ?>>Lontras</option>
							<option value="Luiz Alves"<?php if($show['usu_cidade']=='Luiz Alves')echo 'selected'; ?>>Luiz Alves</option>
							<option value="Luzerna"<?php if($show['usu_cidade']=='Luzerna')echo 'selected'; ?>>Luzerna</option>
							<option value="Macieira"<?php if($show['usu_cidade']=='Macieira')echo 'selected'; ?>>Macieira</option>
							<option value="Mafra"<?php if($show['usu_cidade']=='Mafra')echo 'selected'; ?>>Mafra</option>
							<option value="Major Gercino"<?php if($show['usu_cidade']=='Major Gercino')echo 'selected'; ?>>Major Gercino</option>
							<option value="Major Vieira"<?php if($show['usu_cidade']=='Major Vieira')echo 'selected'; ?>>Major Vieira</option>
							<option value="Maracajá"<?php if($show['usu_cidade']=='Maracajá')echo 'selected'; ?>>Maracajá</option>
							<option value="Maravilha"<?php if($show['usu_cidade']=='Maravilha')echo 'selected'; ?>>Maravilha</option>
							<option value="Marema"<?php if($show['usu_cidade']=='Marema')echo 'selected'; ?>>Marema</option>
							<option value="Massaranduba"<?php if($show['usu_cidade']=='Massaranduba')echo 'selected'; ?>>Massaranduba</option>
							<option value="Matos Costa"<?php if($show['usu_cidade']=='Matos Costa')echo 'selected'; ?>>Matos Costa</option>
							<option value="Meleiro"<?php if($show['usu_cidade']=='Meleiro')echo 'selected'; ?>>Meleiro</option>
							<option value="Mirim Doce"<?php if($show['usu_cidade']=='Mirim Doce')echo 'selected'; ?>>Mirim Doce</option>
							<option value="Modelo"<?php if($show['usu_cidade']=='Modelo')echo 'selected'; ?>>Modelo</option>
							<option value="Mondaí"<?php if($show['usu_cidade']=='Mondaí')echo 'selected'; ?>>Mondaí</option>
							<option value="Monte Carlo"<?php if($show['usu_cidade']=='Monte Carlo')echo 'selected'; ?>>Monte Carlo</option>
							<option value="Monte Castelo"<?php if($show['usu_cidade']=='Monte Castelo')echo 'selected'; ?>>Monte Castelo</option>
							<option value="Morro da Fumaça"<?php if($show['usu_cidade']=='Morro da Fumaça')echo 'selected'; ?>>Morro da Fumaça</option>
							<option value="Morro Grande"<?php if($show['usu_cidade']=='Morro Grande')echo 'selected'; ?>>Morro Grande</option>
							<option value="Navegantes"<?php if($show['usu_cidade']=='Navegantes')echo 'selected'; ?>>Navegantes</option>
							<option value="Nova Erechim"<?php if($show['usu_cidade']=='Nova Erechim')echo 'selected'; ?>>Nova Erechim</option>
							<option value="Nova Itaberaba"<?php if($show['usu_cidade']=='Nova Itaberaba')echo 'selected'; ?>>Nova Itaberaba</option>
							<option value="Nova Trento"<?php if($show['usu_cidade']=='Nova Trento')echo 'selected'; ?>>Nova Trento</option>
							<option value="Nova Veneza"<?php if($show['usu_cidade']=='Nova Veneza')echo 'selected'; ?>>Nova Veneza</option>
							<option value="Novo Horizonte"<?php if($show['usu_cidade']=='Novo Horizonte')echo 'selected'; ?>>Novo Horizonte</option>
							<option value="Orleans"<?php if($show['usu_cidade']=='Orleans')echo 'selected'; ?>>Orleans</option>
							<option value="Otacílio Costa"<?php if($show['usu_cidade']=='Otacílio Costa')echo 'selected'; ?>>Otacílio Costa</option>
							<option value="Ouro"<?php if($show['usu_cidade']=='Ouro')echo 'selected'; ?>>Ouro</option>
							<option value="Ouro Verde"<?php if($show['usu_cidade']=='Ouro Verde')echo 'selected'; ?>>Ouro Verde</option>
							<option value="Paial"<?php if($show['usu_cidade']=='Paial')echo 'selected'; ?>>Paial</option>
							<option value="Painel"<?php if($show['usu_cidade']=='Painel')echo 'selected'; ?>>Painel</option>
							<option value="Palhoça"<?php if($show['usu_cidade']=='Palhoça')echo 'selected'; ?>>Palhoça</option>
							<option value="Palma Sola"<?php if($show['usu_cidade']=='Palma Sola')echo 'selected'; ?>>Palma Sola</option>
							<option value="Palmeira"<?php if($show['usu_cidade']=='Palmeira')echo 'selected'; ?>>Palmeira</option>
							<option value="Palmitos"<?php if($show['usu_cidade']=='Palmitos')echo 'selected'; ?>>Palmitos</option>
							<option value="Papanduva"<?php if($show['usu_cidade']=='Papanduvaa')echo 'selected'; ?>>Papanduva</option>
							<option value="Paraíso"<?php if($show['usu_cidade']=='Paraísoa')echo 'selected'; ?>>Paraíso</option>
							<option value="Passo de Torres"<?php if($show['usu_cidade']=='Passo de Torres')echo 'selected'; ?>>Passo de Torres</option>
							<option value="Passos Maia"<?php if($show['usu_cidade']=='Passos Maia')echo 'selected'; ?>>Passos Maia</option>
							<option value="Paulo Lopes"<?php if($show['usu_cidade']=='Paulo Lopes')echo 'selected'; ?>>Paulo Lopes</option>
							<option value="Pedras Grandes"<?php if($show['usu_cidade']=='Pedras Grandes')echo 'selected'; ?>>Pedras Grandes</option>
							<option value="Penha"<?php if($show['usu_cidade']=='Penha')echo 'selected'; ?>>Penha</option>
							<option value="Peritiba"<?php if($show['usu_cidade']=='Peritiba')echo 'selected'; ?>>Peritiba</option>
							<option value="Petrolândia"<?php if($show['usu_cidade']=='Petrolândia')echo 'selected'; ?>>Petrolândia</option>
							<option value="Piçarras"<?php if($show['usu_cidade']=='Piçarras')echo 'selected'; ?>>Piçarras</option>
							<option value="Pinhalzinho"<?php if($show['usu_cidade']=='Pinhalzinho')echo 'selected'; ?>>Pinhalzinho</option>
							<option value="Pinheiro Preto"<?php if($show['usu_cidade']=='Pinheiro Preto')echo 'selected'; ?>>Pinheiro Preto</option>
							<option value="Piratuba"<?php if($show['usu_cidade']=='Piratuba')echo 'selected'; ?>>Piratuba</option>
							<option value="Planalto Alegre"<?php if($show['usu_cidade']=='Planalto Alegre')echo 'selected'; ?>>Planalto Alegre</option>
							<option value="Pomerode"<?php if($show['usu_cidade']=='Pomerode')echo 'selected'; ?>>Pomerode</option>
							<option value="Ponte Alta"<?php if($show['usu_cidade']=='Ponte Alta')echo 'selected'; ?>>Ponte Alta</option>
							<option value="Ponte Alta do Norte"<?php if($show['usu_cidade']=='Ponte Alta do Norte')echo 'selected'; ?>>Ponte Alta do Norte</option>
							<option value="Ponte Serrada"<?php if($show['usu_cidade']=='Ponte Serrada')echo 'selected'; ?>>Ponte Serrada</option>
							<option value="Porto Belo"<?php if($show['usu_cidade']=='Porto Belo')echo 'selected'; ?>>Porto Belo</option>
							<option value="Porto União"<?php if($show['usu_cidade']=='Porto União')echo 'selected'; ?>>Porto União</option>
							<option value="Pouso Redondo"<?php if($show['usu_cidade']=='Pouso Redondo')echo 'selected'; ?>>Pouso Redondo</option>
							<option value="Praia Grande"<?php if($show['usu_cidade']=='Praia Grande')echo 'selected'; ?>>Praia Grande</option>
							<option value="Presidente Castelo Branco"<?php if($show['usu_cidade']=='Presidente Castelo Branco')echo 'selected'; ?>>Presidente Castelo Branco</option>
							<option value="Presidente Getúlio"<?php if($show['usu_cidade']=='Presidente Getúlio')echo 'selected'; ?>>Presidente Getúlio</option>
							<option value="Presidente Nereu"<?php if($show['usu_cidade']=='Presidente Nereu')echo 'selected'; ?>>Presidente Nereu</option>
							<option value="Princesa"<?php if($show['usu_cidade']=='Princesa')echo 'selected'; ?>>Princesa</option>
							<option value="4214201"<?php if($show['usu_cidade']=='Quilombo')echo 'selected'; ?>>Quilombo</option>
							<option value="Quilombo"<?php if($show['usu_cidade']=='Rancho Queimado')echo 'selected'; ?>>Rancho Queimado</option>
							<option value="Rio das Antas"<?php if($show['usu_cidade']=='Rio das Antas')echo 'selected'; ?>>Rio das Antas</option>
							<option value="Rio do Campo"<?php if($show['usu_cidade']=='Rio do Campo')echo 'selected'; ?>>Rio do Campo</option>
							<option value="Rio do Oeste"<?php if($show['usu_cidade']=='Rio do Oeste')echo 'selected'; ?>>Rio do Oeste</option>
							<option value="Rio dos Cedros"<?php if($show['usu_cidade']=='Rio dos Cedros')echo 'selected'; ?>>Rio dos Cedros</option>
							<option value="Rio do Sul"<?php if($show['usu_cidade']=='Rio do Sul')echo 'selected'; ?>>Rio do Sul</option>
							<option value="Rio Fortuna"<?php if($show['usu_cidade']=='Rio Fortuna')echo 'selected'; ?>>Rio Fortuna</option>
							<option value="Rio Negrinho"<?php if($show['usu_cidade']=='Rio Negrinho')echo 'selected'; ?>>Rio Negrinho</option>
							<option value="Rio Rufino"<?php if($show['usu_cidade']=='Rio Rufino')echo 'selected'; ?>>Rio Rufino</option>
							<option value="Riqueza"<?php if($show['usu_cidade']=='Riqueza')echo 'selected'; ?>>Riqueza</option>
							<option value="Rodeio"<?php if($show['usu_cidade']=='Rodeio')echo 'selected'; ?>>Rodeio</option>
							<option value="Romelândia"<?php if($show['usu_cidade']=='Romelândia')echo 'selected'; ?>>Romelândia</option>
							<option value="Salete"<?php if($show['usu_cidade']=='Salete')echo 'selected'; ?>>Salete</option>
							<option value="Saltinho"<?php if($show['usu_cidade']=='Saltinho')echo 'selected'; ?>>Saltinho</option>
							<option value="Salto Veloso"<?php if($show['usu_cidade']=='Salto Veloso')echo 'selected'; ?>>Salto Veloso</option>
							<option value="Sangão"<?php if($show['usu_cidade']=='Sangão')echo 'selected'; ?>>Sangão</option>
							<option value="Santa Cecília"<?php if($show['usu_cidade']=='Santa Cecília')echo 'selected'; ?>>Santa Cecília</option>
							<option value="Santa Helena"<?php if($show['usu_cidade']=='Santa Helena')echo 'selected'; ?>>Santa Helena</option>
							<option value="Santa Rosa de Lima"<?php if($show['usu_cidade']=='Santa Rosa de Lima')echo 'selected'; ?>>Santa Rosa de Lima</option>
							<option value="Santa Rosa do Sul"<?php if($show['usu_cidade']=='Santa Rosa do Sul')echo 'selected'; ?>>Santa Rosa do Sul</option>
							<option value="Santa Terezinha"<?php if($show['usu_cidade']=='Santa Terezinha')echo 'selected'; ?>>Santa Terezinha</option>
							<option value="Santa Terezinha do Progresso"<?php if($show['usu_cidade']=='Santa Terezinha do Progresso')echo 'selected'; ?>>Santa Terezinha do Progresso</option>
							<option value="Santiago do Sul"<?php if($show['usu_cidade']=='Santiago do Sul')echo 'selected'; ?>>Santiago do Sul</option>
							<option value="Santo Amaro da Imperatriz"<?php if($show['usu_cidade']=='Santo Amaro da Imperatriz')echo 'selected'; ?>>Santo Amaro da Imperatriz</option>
							<option value="São Bento do Sul"<?php if($show['usu_cidade']=='São Bento do Sul')echo 'selected'; ?>>São Bento do Sul</option>
							<option value="São Bernardino"<?php if($show['usu_cidade']=='São Bernardino')echo 'selected'; ?>>São Bernardino</option>
							<option value="São Bonifácio"<?php if($show['usu_cidade']=='São Bonifácio')echo 'selected'; ?>>São Bonifácio</option>
							<option value="São Carlos"<?php if($show['usu_cidade']=='São Carlos')echo 'selected'; ?>>São Carlos</option>
							<option value="São Cristovão do Sul"<?php if($show['usu_cidade']=='São Cristovão do Sul')echo 'selected'; ?>>São Cristovão do Sul</option>
							<option value="São Domingos"<?php if($show['usu_cidade']=='São Domingos')echo 'selected'; ?>>São Domingos</option>
							<option value="São Francisco do Sul"<?php if($show['usu_cidade']=='São Francisco do Sul')echo 'selected'; ?>>São Francisco do Sul</option>
							<option value="São João Batista"<?php if($show['usu_cidade']=='São João Batista')echo 'selected'; ?>>São João Batista</option>
							<option value="São João do Itaperiú"<?php if($show['usu_cidade']=='São João do Itaperiú')echo 'selected'; ?>>São João do Itaperiú</option>
							<option value="São João do Oeste"<?php if($show['usu_cidade']=='São João do Oeste')echo 'selected'; ?>>São João do Oeste</option>
							<option value="São João do Sul"<?php if($show['usu_cidade']=='São João do Sul')echo 'selected'; ?>>São João do Sul</option>
							<option value="São Joaquim"<?php if($show['usu_cidade']=='São Joaquim')echo 'selected'; ?>>São Joaquim</option>
							<option value="São José"<?php if($show['usu_cidade']=='São José')echo 'selected'; ?>>São José</option>
							<option value="São José do Cedro"<?php if($show['usu_cidade']=='São José do Cedro')echo 'selected'; ?>>São José do Cedro</option>
							<option value="São José do Cerrito"<?php if($show['usu_cidade']=='São José do Cerrito')echo 'selected'; ?>>São José do Cerrito</option>
							<option value="São Lourenço do Oeste"<?php if($show['usu_cidade']=='São Lourenço do Oeste')echo 'selected'; ?>>São Lourenço do Oeste</option>
							<option value="São Ludgero"<?php if($show['usu_cidade']=='São Ludgero')echo 'selected'; ?>>São Ludgero</option>
							<option value="São Martinho"<?php if($show['usu_cidade']=='São Martinho')echo 'selected'; ?>>São Martinho</option>
							<option value="São Miguel da Boa Vista"<?php if($show['usu_cidade']=='São Miguel da Boa Vista')echo 'selected'; ?>>São Miguel da Boa Vista</option>
							<option value="São Miguel do Oeste"<?php if($show['usu_cidade']=='São Miguel do Oeste')echo 'selected'; ?>>São Miguel do Oeste</option>
							<option value="São Pedro de Alcântara"<?php if($show['usu_cidade']=='São Pedro de Alcântara')echo 'selected'; ?>>São Pedro de Alcântara</option>
							<option value="Saudades"<?php if($show['usu_cidade']=='Saudades')echo 'selected'; ?>>Saudades</option>
							<option value="Schroeder"<?php if($show['usu_cidade']=='Schroeder')echo 'selected'; ?>>Schroeder</option>
							<option value="Seara"<?php if($show['usu_cidade']=='Seara')echo 'selected'; ?>>Seara</option>
							<option value="Serra Alta"<?php if($show['usu_cidade']=='Serra Alta')echo 'selected'; ?>>Serra Alta</option>
							<option value="Siderópolis"<?php if($show['usu_cidade']=='Siderópolis')echo 'selected'; ?>>Siderópolis</option>
							<option value="Sombrio"<?php if($show['usu_cidade']=='Sombrio')echo 'selected'; ?>>Sombrio</option>
							<option value="Sul Brasil"<?php if($show['usu_cidade']=='Sul Brasil')echo 'selected'; ?>>Sul Brasil</option>
							<option value="Taió"<?php if($show['usu_cidade']=='Taió')echo 'selected'; ?>>Taió</option>
							<option value="Tangará"<?php if($show['usu_cidade']=='Tangará')echo 'selected'; ?>>Tangará</option>
							<option value="Tigrinhos"<?php if($show['usu_cidade']=='Tigrinhos')echo 'selected'; ?>>Tigrinhos</option>
							<option value="Tijucas"<?php if($show['usu_cidade']=='Tijucas')echo 'selected'; ?>>Tijucas</option>
							<option value="Timbé do Sul"<?php if($show['usu_cidade']=='Timbé do Sul')echo 'selected'; ?>>Timbé do Sul</option>
							<option value="Timbó"<?php if($show['usu_cidade']=='Timbó')echo 'selected'; ?>>Timbó</option>
							<option value="Timbó Grande"<?php if($show['usu_cidade']=='Timbó Grande')echo 'selected'; ?>>Timbó Grande</option>
							<option value="Três Barras"<?php if($show['usu_cidade']=='Três Barras')echo 'selected'; ?>>Três Barras</option>
							<option value="Treviso"<?php if($show['usu_cidade']=='Treviso')echo 'selected'; ?>>Treviso</option>
							<option value="Treze de Maio"<?php if($show['usu_cidade']=='Treze de Maio')echo 'selected'; ?>>Treze de Maio</option>
							<option value="Treze Tílias"<?php if($show['usu_cidade']=='Treze Tílias')echo 'selected'; ?>>Treze Tílias</option>
							<option value="Trombudo Central"<?php if($show['usu_cidade']=='Trombudo Central')echo 'selected'; ?>>Trombudo Central</option>
							<option value="Tubarão"<?php if($show['usu_cidade']=='Tubarão')echo 'selected'; ?>>Tubarão</option>
							<option value="Tunápolis"<?php if($show['usu_cidade']=='Tunápolis')echo 'selected'; ?>>Tunápolis</option>
							<option value="Turvo"<?php if($show['usu_cidade']=='Turvo')echo 'selected'; ?>>Turvo</option>
							<option value="União do Oeste"<?php if($show['usu_cidade']=='União do Oeste')echo 'selected'; ?>>União do Oeste</option>
							<option value="Urubici"<?php if($show['usu_cidade']=='Urubici')echo 'selected'; ?>>Urubici</option>
							<option value="Urupema"<?php if($show['usu_cidade']=='Urupema')echo 'selected'; ?>>Urupema</option>
							<option value="Urussanga"<?php if($show['usu_cidade']=='Urussanga')echo 'selected'; ?>>Urussanga</option>
							<option value="Vargeão"<?php if($show['usu_cidade']=='Vargeão')echo 'selected'; ?>>Vargeão</option>
							<option value="Vargem"<?php if($show['usu_cidade']=='Vargem')echo 'selected'; ?>>Vargem</option>
							<option value="Vargem Bonita"<?php if($show['usu_cidade']=='Vargem Bonita')echo 'selected'; ?>>Vargem Bonita</option>
							<option value="Vidal Ramos"<?php if($show['usu_cidade']=='Vidal Ramos')echo 'selected'; ?>>Vidal Ramos</option>
							<option value="Videira"<?php if($show['usu_cidade']=='Videira')echo 'selected'; ?>>Videira</option>
							<option value="Vitor Meireles"<?php if($show['usu_cidade']=='Vitor Meireles')echo 'selected'; ?>>Vitor Meireles</option>
							<option value="Witmarsum"<?php if($show['usu_cidade']=='Witmarsuma')echo 'selected'; ?>>Witmarsum</option>
							<option value="Xanxerê"<?php if($show['usu_cidade']=='Xanxerê')echo 'selected'; ?>>Xanxerê</option>
							<option value="Xavantina"<?php if($show['usu_cidade']=='Xavantina')echo 'selected'; ?>>Xavantina</option>
							<option value="Xaxim"<?php if($show['usu_cidade']=='Xaxim')echo 'selected'; ?>>Xaxim</option>
							<option value="Zortéa"<?php if($show['usu_cidade']=='Zortéa')echo 'selected'; ?>>Zortéa</option>
						</select>
                        <input type="email" class="form-control" name="login" value="<?php echo $show['usu_login'];?>" placeholder="Informe sua rua" required/><br>
                        <input type="pass"  class="form-control" name="pass" value="<?php echo $show['usu_pass'];?>" placeholder="Informe sua senha" required/><br>
                        <select name="privilegio" class="form-control">
                          <option value="ADM" <?php if($show['usu_privilegio'] == 'ADM')echo 'selected';?> >ADM</option>
                          <option value="USERCOMUM" <?php if($show['usu_privilegio'] == 'USERCOMUM')echo 'selected';?> >USUÁRIO COMUM (EMPRESA)</option>                      
                        </select><br>
                       <select name="status" class="form-control">
                          <option value="ATIVO" <?php if($show['usu_status'] == 'ATIVO')echo 'selected';?> >USUÁRIO ATIVO</option>
                          <option value="INATIVO" <?php if($show['usu_status'] == 'INATIVO')echo 'selected';?> >USUÁRIO INATIVO</option>
                          
                        </select><br>
                          
                         
                        <input type="submit" class="btn btn-primary"name="enviar" value="Atualizar"/><br>

                      </form>
                    </div>
                  </div>
                </div><!-- ACABA MODAL EDITAR -->
		<?php 
	}

?>