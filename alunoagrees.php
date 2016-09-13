<?php 
    require_once("files/conect.php");
   // require_once("files/conect.php");
			$cidadeCursos = $_GET['cidade'];
    		$cidade = $_GET['cidade'];
    		
?>
<html>	
	<head>
	
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mask.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
		    $('[name=fone_res]').mask('(00) 0000-0000');
		    $('[name=fone_com]').mask('(00) 0000-0000');
		    $('[name=fone_cel]').mask('(00) 0000-0000');
		});
    </script>
	<script type="text/javascript">
	$(function () {
  		$('[data-toggle="tooltip"]').tooltip()
	})
	</script>
	
	<script>
		$(function(){
		  var MAX_SELECT = 2; // Máximo de 'input' selecionados
		  $('input.limited').on('change', function(){
		    if($(this).siblings(':checked').length >= MAX_SELECT ){
		       this.checked = false;
		    }
		  });
		});
	</script>	
	<style type="text/css">
		body{
		margin:0 auto;
		padding:0 auto;
		color:black;
		}
		header{
			position:fixed;
			float:left;
			width: 100%;
			height:150px;
			background:url('images/cloud.png')repeat-x;
			background-size: 100% 150px;
			margin-top: -92px;
		}
		header img{
			margin-top:70px;
			margin-left:20px;
		}
		#parallaxBar{
			width:100%;
		    height:auto;
		    background-color:#004c82;
		    background: url('images/bgparallax.png') 60% 0 fixed;
		    position: relative; 
		    float:left;	

		}
		.form-control{
			font-size:20px !important;
			font-weight: bold;
			padding:5px;
			margin-bottom:-10px;
		}
		input[type=checkbox]{
			color:white;
		}
		input[type=submit]{
			margin:0 auto;
			padding:0 auto;
			width:20%;
			font-size: 20px;
		}	
		.container{
			background: url('images/bg_box.png');
			width:50%;
		}
		footer{
			float:left;
			width: 100%;
			height:100px;
			background:url('images/footerblue.png');
			background-size: 100% 130px;
			margin-top: 10px;
		}
		
		@media screen and (max-width: 800px) {
			body{
				background: url('images/bg3.jpg');
				background-attachment: fixed;
			}
			
			.container{
				background: url('images/bg_white.png');
				width:90%;
			}zz
			.form-control{
				font-size:20px !important;
				font-weight: bold;
				padding:5px;
				margin-bottom:-25px;
			}
			.input[type=submit]{
				width:100%;
				font-size: 10px;
			}	
		}
	</style>

	</head>
<body>
	<section id="parallaxBar" data-speed="6" data-type="background">
	<header><img src="images/lg_senai.png" width="200"/></header>
	<div class="container" >
		<center><h1><b>Cadastro de Interessados em Cursos de Aprendizagem Indústrial</b> <span>SENAI - SC</span></h1></center>
		

		<hr>
	<div class="container-fluid" style="font-size:20px;font-weight:bold;">
	<form action="files/trataAlunos.php" method="post" autocomplete="off" >
		
		<input type="text" class="form-control" name="nome" placeholder="Informe seu nome" required/><br>
		<input type="text" onfocus="(this.type='date')"  class="form-control" name="datanasc" placeholder="Data de nascimento" required/><br>
			<!--<select name="idade" class="form-control">
				<option value="0">Selecione sua idade</option>
				<option value="14">14 anos</option>
				<option value="15">15 anos</option>
				<option value="16">16 anos</option>
				<option value="17">17 anos</option>
				<option value="18">18 anos</option>
				<option value="19">19 anos</option>
				<option value="20">20 anos</option>
				<option value="21">21 anos</option>
				<option value="22">22 anos</option>
				<option value="23">23 anos</option>
				<option value="24">24 anos</option>
			</select><br>-->
			<?php 
			$resCidade = mysql_query("SELECT *FROM bairros WHERE bairro_cidade = '$cidade' ")or die(mysql_error());
			$show=mysql_fetch_assoc($resCidade);
			?>
		<select name="cidade" style="width:100%;height:35px;border-radius:5px;margin-bottom:20px;" >	
			<option value="0" <?php if($show['bairro_cidade']=='0')echo 'selected'; ?> >Selecione a cidade onde mora</option>
							<option value="Abdon Batista" <?php if($show['bairro_cidade']=='Abdon Batista')echo 'selected'; ?> >Abdon Batista</option>
							<option value="Abelardo Luz" <?php if($show['bairro_cidade']=='AAbelardo Luz')echo 'selected'; ?>>Abelardo Luz</option>
							<option value="Agrolândia" <?php if($show['bairro_cidade']=='Agrolândia')echo 'selected'; ?>>Agrolândia</option>
							<option value="Agronômica" <?php if($show['bairro_cidade']=='Agronômica')echo 'selected'; ?>>Agronômica</option>
							<option value="Água Doce" <?php if($show['bairro_cidade']=='Água Doce')echo 'selected'; ?>>Água Doce</option>
							<option value="Águas de Chapecó" <?php if($show['bairro_cidade']=='Águas de Chapecó')echo 'selected'; ?>>Águas de Chapecó</option>
							<option value="Águas Frias" <?php if($show['bairro_cidade']=='Águas Frias')echo 'selected'; ?>>Águas Frias</option>
							<option value="Águas Mornas" <?php if($show['bairro_cidade']=='Águas Mornas')echo 'selected'; ?>>Águas Mornas</option>
							<option value="Alfredo Wagner" <?php if($show['bairro_cidade']=='Alfredo Wagner')echo 'selected'; ?>>Alfredo Wagner</option>
							<option value="Alto Bela Vista" <?php if($show['bairro_cidade']=='Alto Bela Vista')echo 'selected'; ?>>Alto Bela Vista</option>
							<option value="Anchieta" <?php if($show['bairro_cidade']=='Anchieta')echo 'selected'; ?>>Anchieta</option>
							<option value="Angelina"<?php if($show['bairro_cidade']=='Angelina')echo 'selected'; ?>>Angelina</option>
							<option value="Anita Garibaldi" <?php if($show['bairro_cidade']=='Anita Garibaldi')echo 'selected'; ?>>Anita Garibaldi</option>
							<option value="Anitápolis" <?php if($show['bairro_cidade']=='Anitápolis')echo 'selected'; ?>>Anitápolis</option>
							<option value="Antônio Carlos" <?php if($show['bairro_cidade']=='Antônio Carlos')echo 'selected'; ?>>Antônio Carlos</option>
							<option value="Apiúna"<?php if($show['bairro_cidade']=='Apiúna')echo 'selected'; ?>>Apiúna</option>
							<option value="Arabutã"<?php if($show['bairro_cidade']=='Arabutã')echo 'selected'; ?>>Arabutã</option>
							<option value="Araquari"<?php if($show['bairro_cidade']=='Araquari')echo 'selected'; ?>>Araquari</option>
							<option value="Araranguá"<?php if($show['bairro_cidade']=='Araranguá')echo 'selected'; ?>>Araranguá</option>
							<option value="Armazém"<?php if($show['bairro_cidade']=='Abdon Batista')echo 'selected'; ?>>Armazém</option>
							<option value="Arroio Trinta"<?php if($show['bairro_cidade']=='Armazém')echo 'selected'; ?>>Arroio Trinta</option>
							<option value="Arvoredo"<?php if($show['bairro_cidade']=='Arvoredo')echo 'selected'; ?>>Arvoredo</option>
							<option value="Ascurra"<?php if($show['bairro_cidade']=='Ascurra')echo 'selected'; ?>>Ascurra</option>
							<option value="Atalanta"<?php if($show['bairro_cidade']=='Atalanta')echo 'selected'; ?>>Atalanta</option>
							<option value="Aurora"<?php if($show['bairro_cidade']=='Aurora')echo 'selected'; ?>>Aurora</option>
							<option value="Balneário Arroio do Silva"<?php if($show['bairro_cidade']=='Balneário Arroio do Silva')echo 'selected'; ?>>Balneário Arroio do Silva</option>
							<option value="Balneário Barra do Sul"<?php if($show['bairro_cidade']=='Abdon Batista')echo 'selected'; ?>>Balneário Barra do Sul</option>
							<option value="Balneário Camboriú"<?php if($show['bairro_cidade']=='Balneário Barra do Sul')echo 'selected'; ?>>Balneário Camboriú</option>
							<option value="Balneário Gaivota"<?php if($show['bairro_cidade']=='Balneário Gaivota')echo 'selected'; ?>>Balneário Gaivota</option>
							<option value="420208Bandeirante1"<?php if($show['bairro_cidade']=='Bandeirante')echo 'selected'; ?>>Bandeirante</option>
							<option value="Barra Bonita"<?php if($show['bairro_cidade']=='Barra Bonita')echo 'selected'; ?>>Barra Bonita</option>
							<option value="Barra Velha"<?php if($show['bairro_cidade']=='Barra Velha')echo 'selected'; ?>>Barra Velha</option>
							<option value="Bela Vista do Toldo"<?php if($show['bairro_cidade']=='Bela Vista do Toldo')echo 'selected'; ?>>Bela Vista do Toldo</option>
							<option value="Belmonte"<?php if($show['bairro_cidade']=='Belmonte')echo 'selected'; ?>>Belmonte</option>
							<option value="Benedito"<?php if($show['bairro_cidade']=='Benedito')echo 'selected'; ?>>Benedito Novo</option>
							<option value="Biguaçu"<?php if($show['bairro_cidade']=='Biguaçu')echo 'selected'; ?>>Biguaçu</option>
							<option value="Blumenau"<?php if($show['bairro_cidade']=='Blumenau')echo 'selected'; ?>>Blumenau</option>
							<option value="Bocaina do Sul"<?php if($show['bairro_cidade']=='Bocaina do Sul')echo 'selected'; ?>>Bocaina do Sul</option>
							<option value="Bombinhas"<?php if($show['bairro_cidade']=='Bombinhas')echo 'selected'; ?>>Bombinhas</option>
							<option value="Bom Jardim da Serra"<?php if($show['bairro_cidade']=='Bom Jardim da Serra')echo 'selected'; ?>>Bom Jardim da Serra</option>
							<option value="Bom Jesus"<?php if($show['bairro_cidade']=='Bom Jesus')echo 'selected'; ?>>Bom Jesus</option>
							<option value="Bom Jesus do Oeste"<?php if($show['bairro_cidade']=='Bom Jesus do Oeste')echo 'selected'; ?>>Bom Jesus do Oeste</option>
							<option value="Bom Retiro"<?php if($show['bairro_cidade']=='Bom Retiro')echo 'selected'; ?>>Bom Retiro</option>
							<option value="Botuverá"<?php if($show['bairro_cidade']=='Botuverá')echo 'selected'; ?>>Botuverá</option>
							<option value="Braço do Norte"<?php if($show['bairro_cidade']=='Braço do Norte')echo 'selected'; ?>>Braço do Norte</option>
							<option value="Braço do Trombudo"<?php if($show['bairro_cidade']=='Braço do Trombudo')echo 'selected'; ?>>Braço do Trombudo</option>
							<option value="Brunópolis"<?php if($show['bairro_cidade']=='Brunópolis')echo 'selected'; ?>>Brunópolis</option>
							<option value="Brusque"<?php if($show['bairro_cidade']=='Brusque')echo 'selected'; ?>>Brusque</option>
							<option value="Caçador"<?php if($show['bairro_cidade']=='Caçador')echo 'selected'; ?>>Caçador</option>
							<option value="Caibi"<?php if($show['bairro_cidade']=='Caibi')echo 'selected'; ?>>Caibi</option>
							<option value="Calmon"<?php if($show['bairro_cidade']=='Calmon')echo 'selected'; ?>>Calmon</option>
							<option value="Camboriú"<?php if($show['bairro_cidade']=='Camboriú')echo 'selected'; ?>>Camboriú</option>
							<option value="Campo Alegre"<?php if($show['bairro_cidade']=='Campo Alegre')echo 'selected'; ?>>Campo Alegre</option>
							<option value="Campo Belo do Sul"<?php if($show['bairro_cidade']=='Campo Belo do Sul')echo 'selected'; ?>>Campo Belo do Sul</option>
							<option value="Campo Erê"<?php if($show['bairro_cidade']=='Campo Erê')echo 'selected'; ?>>Campo Erê</option>
							<option value="Campos Novos"<?php if($show['bairro_cidade']=='Campos Novos')echo 'selected'; ?>>Campos Novos</option>
							<option value="Canelinha"<?php if($show['bairro_cidade']=='Canelinha')echo 'selected'; ?>>Canelinha</option>
							<option value="Canoinhas"<?php if($show['bairro_cidade']=='Canoinhas')echo 'selected'; ?>>Canoinhas</option>
							<option value="Capão Alto"<?php if($show['bairro_cidade']=='Capão Alto')echo 'selected'; ?>>Capão Alto</option>
							<option value="Capinzal"<?php if($show['bairro_cidade']=='Capinzal')echo 'selected'; ?>>Capinzal</option>
							<option value="Capivari de Baixo"<?php if($show['bairro_cidade']=='Capivari de Baixo')echo 'selected'; ?>>Capivari de Baixo</option>
							<option value="Catanduvas"<?php if($show['bairro_cidade']=='Catanduvas')echo 'selected'; ?>>Catanduvas</option>
							<option value="Caxambu do Sul"<?php if($show['bairro_cidade']=='Caxambu do Sul')echo 'selected'; ?>>Caxambu do Sul</option>
							<option value="Celso Ramos"<?php if($show['bairro_cidade']=='Celso Ramos')echo 'selected'; ?>>Celso Ramos</option>
							<option value="Cerro Negro"<?php if($show['bairro_cidade']=='Cerro Negro')echo 'selected'; ?>>Cerro Negro</option>
							<option value="Chapadão do Lageado"<?php if($show['bairro_cidade']=='Chapadão do Lageado')echo 'selected'; ?>>Chapadão do Lageado</option>
							<option value="Chapecó"<?php if($show['bairro_cidade']=='Chapecó')echo 'selected'; ?>>Chapecó</option>
							<option value="Cocal do Sul"<?php if($show['bairro_cidade']=='Cocal do Sul')echo 'selected'; ?>>Cocal do Sul</option>
							<option value="Concórdia"<?php if($show['bairro_cidade']=='Concórdia')echo 'selected'; ?>>Concórdia</option>
							<option value="Cordilheira Alta"<?php if($show['bairro_cidade']=='Cordilheira Alta')echo 'selected'; ?>>Cordilheira Alta</option>
							<option value="Coronel Freitas"<?php if($show['bairro_cidade']=='Coronel Freitas')echo 'selected'; ?>>Coronel Freitas</option>
							<option value="Coronel Martins"<?php if($show['bairro_cidade']=='Coronel Martins')echo 'selected'; ?>>Coronel Martins</option>
							<option value="Correia Pinto"<?php if($show['bairro_cidade']=='Correia Pinto')echo 'selected'; ?>>Correia Pinto</option>
							<option value="Corupá"<?php if($show['bairro_cidade']=='Corupá')echo 'selected'; ?>>Corupá</option>
							<option value="Criciúma"<?php if($show['bairro_cidade']=='Criciúma')echo 'selected'; ?>>Criciúma</option>
							<option value="Cunha Porã"<?php if($show['bairro_cidade']=='Cunha Porã')echo 'selected'; ?>>Cunha Porã</option>
							<option value="Cunhataí"<?php if($show['bairro_cidade']=='Cunhataí')echo 'selected'; ?>>Cunhataí</option>
							<option value="Curitibanos"<?php if($show['bairro_cidade']=='Curitibanos')echo 'selected'; ?>>Curitibanos</option>
							<option value="Descanso"<?php if($show['bairro_cidade']=='Descanso')echo 'selected'; ?>>Descanso</option>
							<option value="Dionísio Cerqueira"<?php if($show['bairro_cidade']=='Dionísio Cerqueira')echo 'selected'; ?>>Dionísio Cerqueira</option>
							<option value="Dona Emma"<?php if($show['bairro_cidade']=='Dona Emma')echo 'selected'; ?>>Dona Emma</option>
							<option value="Doutor Pedrinho"<?php if($show['bairro_cidade']=='Doutor Pedrinho')echo 'selected'; ?>>Doutor Pedrinho</option>
							<option value="Entre Rios"<?php if($show['bairro_cidade']=='Entre Rios')echo 'selected'; ?>>Entre Rios</option>
							<option value="Ermo"<?php if($show['bairro_cidade']=='Ermo')echo 'selected'; ?>>Ermo</option>
							<option value="Erval Velho"<?php if($show['bairro_cidade']=='Erval Velho')echo 'selected'; ?>>Erval Velho</option>
							<option value="Faxinal dos Guedes"<?php if($show['bairro_cidade']=='Faxinal dos Guedes')echo 'selected'; ?>>Faxinal dos Guedes</option>
							<option value="Flor do Sertão"<?php if($show['bairro_cidade']=='Flor do Sertão')echo 'selected'; ?>>Flor do Sertão</option>
							<option value="Florianópolis"<?php if($show['bairro_cidade']=='Florianópolis')echo 'selected'; ?>>Florianópolis</option>
							<option value="Formosa do Sul"<?php if($show['bairro_cidade']=='Formosa do Sul')echo 'selected'; ?>>Formosa do Sul</option>
							<option value="Forquilhinha"<?php if($show['bairro_cidade']=='Forquilhinha')echo 'selected'; ?>>Forquilhinha</option>
							<option value="Fraiburgo"<?php if($show['bairro_cidade']=='Fraiburgo')echo 'selected'; ?>>Fraiburgo</option>
							<option value="Frei Rogério"<?php if($show['bairro_cidade']=='Frei Rogério')echo 'selected'; ?>>Frei Rogério</option>
							<option value="Galvão"<?php if($show['bairro_cidade']=='Galvão')echo 'selected'; ?>>Galvão</option>
							<option value="Garopaba"<?php if($show['bairro_cidade']=='Garopaba')echo 'selected'; ?>>Garopaba</option>
							<option value="Garuva"<?php if($show['bairro_cidade']=='Garuva')echo 'selected'; ?>>Garuva</option>
							<option value="Gaspar"<?php if($show['bairro_cidade']=='Gaspar')echo 'selected'; ?>>Gaspar</option>
							<option value="Governador Celso Ramos"<?php if($show['bairro_cidade']=='Governador Celso Ramos')echo 'selected'; ?>>Governador Celso Ramos</option>
							<option value="Grão Pará"<?php if($show['bairro_cidade']=='Grão Pará')echo 'selected'; ?>>Grão Pará</option>
							<option value="Gravatal"<?php if($show['bairro_cidade']=='Gravatal')echo 'selected'; ?>>Gravatal</option>
							<option value="Guabiruba"<?php if($show['bairro_cidade']=='Guabiruba')echo 'selected'; ?>>Guabiruba</option>
							<option value="Guaraciaba"<?php if($show['bairro_cidade']=='Guaraciaba')echo 'selected'; ?>>Guaraciaba</option>
							<option value="Guaramirim"<?php if($show['bairro_cidade']=='Guaramirim')echo 'selected'; ?>>Guaramirim</option>
							<option value="Guarujá do Sul"<?php if($show['bairro_cidade']=='Guarujá do Sul')echo 'selected'; ?>>Guarujá do Sul</option>
							<option value="Guatambú"<?php if($show['bairro_cidade']=='Guatambú')echo 'selected'; ?>>Guatambú</option>
							<option value="Herval d`Oeste"<?php if($show['bairro_cidade']=='Herval d`Oeste')echo 'selected'; ?>>Herval d`Oeste</option>
							<option value="Ibiam"<?php if($show['bairro_cidade']=='Ibiam')echo 'selected'; ?>>Ibiam</option>
							<option value="Ibicaré"<?php if($show['bairro_cidade']=='Ibicaré')echo 'selected'; ?>>Ibicaré</option>
							<option value="Ibirama"<?php if($show['bairro_cidade']=='Ibirama')echo 'selected'; ?>>Ibirama</option>
							<option value="Içara"<?php if($show['bairro_cidade']=='Içara')echo 'selected'; ?>>Içara</option>
							<option value="Ilhota"<?php if($show['bairro_cidade']=='Ilhota')echo 'selected'; ?>>Ilhota</option>
							<option value="Imaruí"<?php if($show['bairro_cidade']=='Imaruí')echo 'selected'; ?>>Imaruí</option>
							<option value="Imbituba"<?php if($show['bairro_cidade']=='Imbituba')echo 'selected'; ?>>Imbituba</option>
							<option value="Imbuia"<?php if($show['bairro_cidade']=='Imbuia')echo 'selected'; ?>>Imbuia</option>
							<option value="Indaial"<?php if($show['bairro_cidade']=='Indaial')echo 'selected'; ?>>Indaial</option>
							<option value="Iomerê"<?php if($show['bairro_cidade']=='Iomerê')echo 'selected'; ?>>Iomerê</option>
							<option value="Ipira"<?php if($show['bairro_cidade']=='Ipira')echo 'selected'; ?>>Ipira</option>
							<option value="Iporã do Oeste"<?php if($show['bairro_cidade']=='Iporã do Oeste')echo 'selected'; ?>>Iporã do Oeste</option>
							<option value="Ipuaçu"<?php if($show['bairro_cidade']=='Ipuaçu')echo 'selected'; ?>>Ipuaçu</option>
							<option value="Ipumirim"<?php if($show['bairro_cidade']=='Ipumirim<')echo 'selected'; ?>>Ipumirim</option>
							<option value="Iraceminha"<?php if($show['bairro_cidade']=='Iraceminha')echo 'selected'; ?>>Iraceminha</option>
							<option value="Irani"<?php if($show['bairro_cidade']=='Irani')echo 'selected'; ?>>Irani</option>
							<option value="Irati"<?php if($show['bairro_cidade']=='Irati')echo 'selected'; ?>>Irati</option>
							<option value="Irineópolis"<?php if($show['bairro_cidade']=='Irineópolis')echo 'selected'; ?>>Irineópolis</option>
							<option value="Itá"<?php if($show['bairro_cidade']=='Itá')echo 'selected'; ?>>Itá</option>
							<option value="Itaiópolis"<?php if($show['bairro_cidade']=='Itaiópolis')echo 'selected'; ?>>Itaiópolis</option>
							<option value="Itajaí"<?php if($show['bairro_cidade']=='Itajaí')echo 'selected'; ?>>Itajaí</option>
							<option value="Itapema"<?php if($show['bairro_cidade']=='Itapema')echo 'selected'; ?>>Itapema</option>
							<option value="Itapiranga"<?php if($show['bairro_cidade']=='Itapiranga')echo 'selected'; ?>>Itapiranga</option>
							<option value="Itapoá"<?php if($show['bairro_cidade']=='Itapoá')echo 'selected'; ?>>Itapoá</option>
							<option value="Ituporanga"<?php if($show['bairro_cidade']=='Ituporanga')echo 'selected'; ?>>Ituporanga</option>
							<option value="Jaborá"<?php if($show['bairro_cidade']=='Jaborá')echo 'selected'; ?>>Jaborá</option>
							<option value="Jacinto Machado"<?php if($show['bairro_cidade']=='Jacinto Machado')echo 'selected'; ?>>Jacinto Machado</option>
							<option value="Jaguaruna"<?php if($show['bairro_cidade']=='Jaguaruna')echo 'selected'; ?>>Jaguaruna</option>
							<option value="Jaraguá do Sul"<?php if($show['bairro_cidade']=='Jaraguá do Sul')echo 'selected'; ?>>Jaraguá do Sul</option>
							<option value="Jardinópolis"<?php if($show['bairro_cidade']=='Jardinópolis')echo 'selected'; ?>>Jardinópolis</option>
							<option value="Joaçaba"<?php if($show['bairro_cidade']=='Joaçaba')echo 'selected'; ?>>Joaçaba</option>
							<option value="Joinville"<?php if($show['bairro_cidade']=='Joinville')echo 'selected'; ?>>Joinville</option>
							<option value="José Boiteux"<?php if($show['bairro_cidade']=='José Boiteux')echo 'selected'; ?>>José Boiteux</option>
							<option value="Jupiá"<?php if($show['bairro_cidade']=='Jupiá')echo 'selected'; ?>>Jupiá</option>
							<option value="Lacerdópolis"<?php if($show['bairro_cidade']=='Lacerdópolis')echo 'selected'; ?>>Lacerdópolis</option>
							<option value="Lages"<?php if($show['bairro_cidade']=='Lages')echo 'selected'; ?>>Lages</option>
							<option value="Laguna"<?php if($show['bairro_cidade']=='Laguna')echo 'selected'; ?>>Laguna</option>
							<option value="Lajeado Grande"<?php if($show['bairro_cidade']=='Lajeado Grande')echo 'selected'; ?>>Lajeado Grande</option>
							<option value="Laurentino"<?php if($show['bairro_cidade']=='Laurentino')echo 'selected'; ?>>Laurentino</option>
							<option value="Lauro Muller"<?php if($show['bairro_cidade']=='Lauro Muller')echo 'selected'; ?>>Lauro Muller</option>
							<option value="Lebon Régis"<?php if($show['bairro_cidade']=='Lebon Régis')echo 'selected'; ?>>Lebon Régis</option>
							<option value="Leoberto Leal"<?php if($show['bairro_cidade']=='Leoberto Leal')echo 'selected'; ?>>Leoberto Leal</option>
							<option value="Lindóia do Sul"<?php if($show['bairro_cidade']=='Lindóia do Sul')echo 'selected'; ?>>Lindóia do Sul</option>
							<option value="Lontras"<?php if($show['bairro_cidade']=='Lontras')echo 'selected'; ?>>Lontras</option>
							<option value="Luiz Alves"<?php if($show['bairro_cidade']=='Luiz Alves')echo 'selected'; ?>>Luiz Alves</option>
							<option value="Luzerna"<?php if($show['bairro_cidade']=='Luzerna')echo 'selected'; ?>>Luzerna</option>
							<option value="Macieira"<?php if($show['bairro_cidade']=='Macieira')echo 'selected'; ?>>Macieira</option>
							<option value="Mafra"<?php if($show['bairro_cidade']=='Mafra')echo 'selected'; ?>>Mafra</option>
							<option value="Major Gercino"<?php if($show['bairro_cidade']=='Major Gercino')echo 'selected'; ?>>Major Gercino</option>
							<option value="Major Vieira"<?php if($show['bairro_cidade']=='Major Vieira')echo 'selected'; ?>>Major Vieira</option>
							<option value="Maracajá"<?php if($show['bairro_cidade']=='Maracajá')echo 'selected'; ?>>Maracajá</option>
							<option value="Maravilha"<?php if($show['bairro_cidade']=='Maravilha')echo 'selected'; ?>>Maravilha</option>
							<option value="Marema"<?php if($show['bairro_cidade']=='Marema')echo 'selected'; ?>>Marema</option>
							<option value="Massaranduba"<?php if($show['bairro_cidade']=='Massaranduba')echo 'selected'; ?>>Massaranduba</option>
							<option value="Matos Costa"<?php if($show['bairro_cidade']=='Matos Costa')echo 'selected'; ?>>Matos Costa</option>
							<option value="Meleiro"<?php if($show['bairro_cidade']=='Meleiro')echo 'selected'; ?>>Meleiro</option>
							<option value="Mirim Doce"<?php if($show['bairro_cidade']=='Mirim Doce')echo 'selected'; ?>>Mirim Doce</option>
							<option value="Modelo"<?php if($show['bairro_cidade']=='Modelo')echo 'selected'; ?>>Modelo</option>
							<option value="Mondaí"<?php if($show['bairro_cidade']=='Mondaí')echo 'selected'; ?>>Mondaí</option>
							<option value="Monte Carlo"<?php if($show['bairro_cidade']=='Monte Carlo')echo 'selected'; ?>>Monte Carlo</option>
							<option value="Monte Castelo"<?php if($show['bairro_cidade']=='Monte Castelo')echo 'selected'; ?>>Monte Castelo</option>
							<option value="Morro da Fumaça"<?php if($show['bairro_cidade']=='Morro da Fumaça')echo 'selected'; ?>>Morro da Fumaça</option>
							<option value="Morro Grande"<?php if($show['bairro_cidade']=='Morro Grande')echo 'selected'; ?>>Morro Grande</option>
							<option value="Navegantes"<?php if($show['bairro_cidade']=='Navegantes')echo 'selected'; ?>>Navegantes</option>
							<option value="Nova Erechim"<?php if($show['bairro_cidade']=='Nova Erechim')echo 'selected'; ?>>Nova Erechim</option>
							<option value="Nova Itaberaba"<?php if($show['bairro_cidade']=='Nova Itaberaba')echo 'selected'; ?>>Nova Itaberaba</option>
							<option value="Nova Trento"<?php if($show['bairro_cidade']=='Nova Trento')echo 'selected'; ?>>Nova Trento</option>
							<option value="Nova Veneza"<?php if($show['bairro_cidade']=='Nova Veneza')echo 'selected'; ?>>Nova Veneza</option>
							<option value="Novo Horizonte"<?php if($show['bairro_cidade']=='Novo Horizonte')echo 'selected'; ?>>Novo Horizonte</option>
							<option value="Orleans"<?php if($show['bairro_cidade']=='Orleans')echo 'selected'; ?>>Orleans</option>
							<option value="Otacílio Costa"<?php if($show['bairro_cidade']=='Otacílio Costa')echo 'selected'; ?>>Otacílio Costa</option>
							<option value="Ouro"<?php if($show['bairro_cidade']=='Ouro')echo 'selected'; ?>>Ouro</option>
							<option value="Ouro Verde"<?php if($show['bairro_cidade']=='Ouro Verde')echo 'selected'; ?>>Ouro Verde</option>
							<option value="Paial"<?php if($show['bairro_cidade']=='Paial')echo 'selected'; ?>>Paial</option>
							<option value="Painel"<?php if($show['bairro_cidade']=='Painel')echo 'selected'; ?>>Painel</option>
							<option value="Palhoça"<?php if($show['bairro_cidade']=='Palhoça')echo 'selected'; ?>>Palhoça</option>
							<option value="Palma Sola"<?php if($show['bairro_cidade']=='Palma Sola')echo 'selected'; ?>>Palma Sola</option>
							<option value="Palmeira"<?php if($show['bairro_cidade']=='Palmeira')echo 'selected'; ?>>Palmeira</option>
							<option value="Palmitos"<?php if($show['bairro_cidade']=='Palmitos')echo 'selected'; ?>>Palmitos</option>
							<option value="Papanduva"<?php if($show['bairro_cidade']=='Papanduvaa')echo 'selected'; ?>>Papanduva</option>
							<option value="Paraíso"<?php if($show['bairro_cidade']=='Paraísoa')echo 'selected'; ?>>Paraíso</option>
							<option value="Passo de Torres"<?php if($show['bairro_cidade']=='Passo de Torres')echo 'selected'; ?>>Passo de Torres</option>
							<option value="Passos Maia"<?php if($show['bairro_cidade']=='Passos Maia')echo 'selected'; ?>>Passos Maia</option>
							<option value="Paulo Lopes"<?php if($show['bairro_cidade']=='Paulo Lopes')echo 'selected'; ?>>Paulo Lopes</option>
							<option value="Pedras Grandes"<?php if($show['bairro_cidade']=='Pedras Grandes')echo 'selected'; ?>>Pedras Grandes</option>
							<option value="Penha"<?php if($show['bairro_cidade']=='Penha')echo 'selected'; ?>>Penha</option>
							<option value="Peritiba"<?php if($show['bairro_cidade']=='Peritiba')echo 'selected'; ?>>Peritiba</option>
							<option value="Petrolândia"<?php if($show['bairro_cidade']=='Petrolândia')echo 'selected'; ?>>Petrolândia</option>
							<option value="Piçarras"<?php if($show['bairro_cidade']=='Piçarras')echo 'selected'; ?>>Piçarras</option>
							<option value="Pinhalzinho"<?php if($show['bairro_cidade']=='Pinhalzinho')echo 'selected'; ?>>Pinhalzinho</option>
							<option value="Pinheiro Preto"<?php if($show['bairro_cidade']=='Pinheiro Preto')echo 'selected'; ?>>Pinheiro Preto</option>
							<option value="Piratuba"<?php if($show['bairro_cidade']=='Piratuba')echo 'selected'; ?>>Piratuba</option>
							<option value="Planalto Alegre"<?php if($show['bairro_cidade']=='Planalto Alegre')echo 'selected'; ?>>Planalto Alegre</option>
							<option value="Pomerode"<?php if($show['bairro_cidade']=='Pomerode')echo 'selected'; ?>>Pomerode</option>
							<option value="Ponte Alta"<?php if($show['bairro_cidade']=='Ponte Alta')echo 'selected'; ?>>Ponte Alta</option>
							<option value="Ponte Alta do Norte"<?php if($show['bairro_cidade']=='Ponte Alta do Norte')echo 'selected'; ?>>Ponte Alta do Norte</option>
							<option value="Ponte Serrada"<?php if($show['bairro_cidade']=='Ponte Serrada')echo 'selected'; ?>>Ponte Serrada</option>
							<option value="Porto Belo"<?php if($show['bairro_cidade']=='Porto Belo')echo 'selected'; ?>>Porto Belo</option>
							<option value="Porto União"<?php if($show['bairro_cidade']=='Porto União')echo 'selected'; ?>>Porto União</option>
							<option value="Pouso Redondo"<?php if($show['bairro_cidade']=='Pouso Redondo')echo 'selected'; ?>>Pouso Redondo</option>
							<option value="Praia Grande"<?php if($show['bairro_cidade']=='Praia Grande')echo 'selected'; ?>>Praia Grande</option>
							<option value="Presidente Castelo Branco"<?php if($show['bairro_cidade']=='Presidente Castelo Branco')echo 'selected'; ?>>Presidente Castelo Branco</option>
							<option value="Presidente Getúlio"<?php if($show['bairro_cidade']=='Presidente Getúlio')echo 'selected'; ?>>Presidente Getúlio</option>
							<option value="Presidente Nereu"<?php if($show['bairro_cidade']=='Presidente Nereu')echo 'selected'; ?>>Presidente Nereu</option>
							<option value="Princesa"<?php if($show['bairro_cidade']=='Princesa')echo 'selected'; ?>>Princesa</option>
							<option value="4214201"<?php if($show['bairro_cidade']=='Quilombo')echo 'selected'; ?>>Quilombo</option>
							<option value="Quilombo"<?php if($show['bairro_cidade']=='Rancho Queimado')echo 'selected'; ?>>Rancho Queimado</option>
							<option value="Rio das Antas"<?php if($show['bairro_cidade']=='Rio das Antas')echo 'selected'; ?>>Rio das Antas</option>
							<option value="Rio do Campo"<?php if($show['bairro_cidade']=='Rio do Campo')echo 'selected'; ?>>Rio do Campo</option>
							<option value="Rio do Oeste"<?php if($show['bairro_cidade']=='Rio do Oeste')echo 'selected'; ?>>Rio do Oeste</option>
							<option value="Rio dos Cedros"<?php if($show['bairro_cidade']=='Rio dos Cedros')echo 'selected'; ?>>Rio dos Cedros</option>
							<option value="Rio do Sul"<?php if($show['bairro_cidade']=='Rio do Sul')echo 'selected'; ?>>Rio do Sul</option>
							<option value="Rio Fortuna"<?php if($show['bairro_cidade']=='Rio Fortuna')echo 'selected'; ?>>Rio Fortuna</option>
							<option value="Rio Negrinho"<?php if($show['bairro_cidade']=='Rio Negrinho')echo 'selected'; ?>>Rio Negrinho</option>
							<option value="Rio Rufino"<?php if($show['bairro_cidade']=='Rio Rufino')echo 'selected'; ?>>Rio Rufino</option>
							<option value="Riqueza"<?php if($show['bairro_cidade']=='Riqueza')echo 'selected'; ?>>Riqueza</option>
							<option value="Rodeio"<?php if($show['bairro_cidade']=='Rodeio')echo 'selected'; ?>>Rodeio</option>
							<option value="Romelândia"<?php if($show['bairro_cidade']=='Romelândia')echo 'selected'; ?>>Romelândia</option>
							<option value="Salete"<?php if($show['bairro_cidade']=='Salete')echo 'selected'; ?>>Salete</option>
							<option value="Saltinho"<?php if($show['bairro_cidade']=='Saltinho')echo 'selected'; ?>>Saltinho</option>
							<option value="Salto Veloso"<?php if($show['bairro_cidade']=='Salto Veloso')echo 'selected'; ?>>Salto Veloso</option>
							<option value="Sangão"<?php if($show['bairro_cidade']=='Sangão')echo 'selected'; ?>>Sangão</option>
							<option value="Santa Cecília"<?php if($show['bairro_cidade']=='Santa Cecília')echo 'selected'; ?>>Santa Cecília</option>
							<option value="Santa Helena"<?php if($show['bairro_cidade']=='Santa Helena')echo 'selected'; ?>>Santa Helena</option>
							<option value="Santa Rosa de Lima"<?php if($show['bairro_cidade']=='Santa Rosa de Lima')echo 'selected'; ?>>Santa Rosa de Lima</option>
							<option value="Santa Rosa do Sul"<?php if($show['bairro_cidade']=='Santa Rosa do Sul')echo 'selected'; ?>>Santa Rosa do Sul</option>
							<option value="Santa Terezinha"<?php if($show['bairro_cidade']=='Santa Terezinha')echo 'selected'; ?>>Santa Terezinha</option>
							<option value="Santa Terezinha do Progresso"<?php if($show['bairro_cidade']=='Santa Terezinha do Progresso')echo 'selected'; ?>>Santa Terezinha do Progresso</option>
							<option value="Santiago do Sul"<?php if($show['bairro_cidade']=='Santiago do Sul')echo 'selected'; ?>>Santiago do Sul</option>
							<option value="Santo Amaro da Imperatriz"<?php if($show['bairro_cidade']=='Santo Amaro da Imperatriz')echo 'selected'; ?>>Santo Amaro da Imperatriz</option>
							<option value="São Bento do Sul"<?php if($show['bairro_cidade']=='São Bento do Sul')echo 'selected'; ?>>São Bento do Sul</option>
							<option value="São Bernardino"<?php if($show['bairro_cidade']=='São Bernardino')echo 'selected'; ?>>São Bernardino</option>
							<option value="São Bonifácio"<?php if($show['bairro_cidade']=='São Bonifácio')echo 'selected'; ?>>São Bonifácio</option>
							<option value="São Carlos"<?php if($show['bairro_cidade']=='São Carlos')echo 'selected'; ?>>São Carlos</option>
							<option value="São Cristovão do Sul"<?php if($show['bairro_cidade']=='São Cristovão do Sul')echo 'selected'; ?>>São Cristovão do Sul</option>
							<option value="São Domingos"<?php if($show['bairro_cidade']=='São Domingos')echo 'selected'; ?>>São Domingos</option>
							<option value="São Francisco do Sul"<?php if($show['bairro_cidade']=='São Francisco do Sul')echo 'selected'; ?>>São Francisco do Sul</option>
							<option value="São João Batista"<?php if($show['bairro_cidade']=='São João Batista')echo 'selected'; ?>>São João Batista</option>
							<option value="São João do Itaperiú"<?php if($show['bairro_cidade']=='São João do Itaperiú')echo 'selected'; ?>>São João do Itaperiú</option>
							<option value="São João do Oeste"<?php if($show['bairro_cidade']=='São João do Oeste')echo 'selected'; ?>>São João do Oeste</option>
							<option value="São João do Sul"<?php if($show['bairro_cidade']=='São João do Sul')echo 'selected'; ?>>São João do Sul</option>
							<option value="São Joaquim"<?php if($show['bairro_cidade']=='São Joaquim')echo 'selected'; ?>>São Joaquim</option>
							<option value="São José"<?php if($show['bairro_cidade']=='São José')echo 'selected'; ?>>São José</option>
							<option value="São José do Cedro"<?php if($show['bairro_cidade']=='São José do Cedro')echo 'selected'; ?>>São José do Cedro</option>
							<option value="São José do Cerrito"<?php if($show['bairro_cidade']=='São José do Cerrito')echo 'selected'; ?>>São José do Cerrito</option>
							<option value="São Lourenço do Oeste"<?php if($show['bairro_cidade']=='São Lourenço do Oeste')echo 'selected'; ?>>São Lourenço do Oeste</option>
							<option value="São Ludgero"<?php if($show['bairro_cidade']=='São Ludgero')echo 'selected'; ?>>São Ludgero</option>
							<option value="São Martinho"<?php if($show['bairro_cidade']=='São Martinho')echo 'selected'; ?>>São Martinho</option>
							<option value="São Miguel da Boa Vista"<?php if($show['bairro_cidade']=='São Miguel da Boa Vista')echo 'selected'; ?>>São Miguel da Boa Vista</option>
							<option value="São Miguel do Oeste"<?php if($show['bairro_cidade']=='São Miguel do Oeste')echo 'selected'; ?>>São Miguel do Oeste</option>
							<option value="São Pedro de Alcântara"<?php if($show['bairro_cidade']=='São Pedro de Alcântara')echo 'selected'; ?>>São Pedro de Alcântara</option>
							<option value="Saudades"<?php if($show['bairro_cidade']=='Saudades')echo 'selected'; ?>>Saudades</option>
							<option value="Schroeder"<?php if($show['bairro_cidade']=='Schroeder')echo 'selected'; ?>>Schroeder</option>
							<option value="Seara"<?php if($show['bairro_cidade']=='Seara')echo 'selected'; ?>>Seara</option>
							<option value="Serra Alta"<?php if($show['bairro_cidade']=='Serra Alta')echo 'selected'; ?>>Serra Alta</option>
							<option value="Siderópolis"<?php if($show['bairro_cidade']=='Siderópolis')echo 'selected'; ?>>Siderópolis</option>
							<option value="Sombrio"<?php if($show['bairro_cidade']=='Sombrio')echo 'selected'; ?>>Sombrio</option>
							<option value="Sul Brasil"<?php if($show['bairro_cidade']=='Sul Brasil')echo 'selected'; ?>>Sul Brasil</option>
							<option value="Taió"<?php if($show['bairro_cidade']=='Taió')echo 'selected'; ?>>Taió</option>
							<option value="Tangará"<?php if($show['bairro_cidade']=='Tangará')echo 'selected'; ?>>Tangará</option>
							<option value="Tigrinhos"<?php if($show['bairro_cidade']=='Tigrinhos')echo 'selected'; ?>>Tigrinhos</option>
							<option value="Tijucas"<?php if($show['bairro_cidade']=='Tijucas')echo 'selected'; ?>>Tijucas</option>
							<option value="Timbé do Sul"<?php if($show['bairro_cidade']=='Timbé do Sul')echo 'selected'; ?>>Timbé do Sul</option>
							<option value="Timbó"<?php if($show['bairro_cidade']=='Timbó')echo 'selected'; ?>>Timbó</option>
							<option value="Timbó Grande"<?php if($show['bairro_cidade']=='Timbó Grande')echo 'selected'; ?>>Timbó Grande</option>
							<option value="Três Barras"<?php if($show['bairro_cidade']=='Três Barras')echo 'selected'; ?>>Três Barras</option>
							<option value="Treviso"<?php if($show['bairro_cidade']=='Treviso')echo 'selected'; ?>>Treviso</option>
							<option value="Treze de Maio"<?php if($show['bairro_cidade']=='Treze de Maio')echo 'selected'; ?>>Treze de Maio</option>
							<option value="Treze Tílias"<?php if($show['bairro_cidade']=='Treze Tílias')echo 'selected'; ?>>Treze Tílias</option>
							<option value="Trombudo Central"<?php if($show['bairro_cidade']=='Trombudo Central')echo 'selected'; ?>>Trombudo Central</option>
							<option value="Tubarão"<?php if($show['bairro_cidade']=='Tubarão')echo 'selected'; ?>>Tubarão</option>
							<option value="Tunápolis"<?php if($show['bairro_cidade']=='Tunápolis')echo 'selected'; ?>>Tunápolis</option>
							<option value="Turvo"<?php if($show['bairro_cidade']=='Turvo')echo 'selected'; ?>>Turvo</option>
							<option value="União do Oeste"<?php if($show['bairro_cidade']=='União do Oeste')echo 'selected'; ?>>União do Oeste</option>
							<option value="Urubici"<?php if($show['bairro_cidade']=='Urubici')echo 'selected'; ?>>Urubici</option>
							<option value="Urupema"<?php if($show['bairro_cidade']=='Urupema')echo 'selected'; ?>>Urupema</option>
							<option value="Urussanga"<?php if($show['bairro_cidade']=='Urussanga')echo 'selected'; ?>>Urussanga</option>
							<option value="Vargeão"<?php if($show['bairro_cidade']=='Vargeão')echo 'selected'; ?>>Vargeão</option>
							<option value="Vargem"<?php if($show['bairro_cidade']=='Vargem')echo 'selected'; ?>>Vargem</option>
							<option value="Vargem Bonita"<?php if($show['bairro_cidade']=='Vargem Bonita')echo 'selected'; ?>>Vargem Bonita</option>
							<option value="Vidal Ramos"<?php if($show['bairro_cidade']=='Vidal Ramos')echo 'selected'; ?>>Vidal Ramos</option>
							<option value="Videira"<?php if($show['bairro_cidade']=='Videira')echo 'selected'; ?>>Videira</option>
							<option value="Vitor Meireles"<?php if($show['bairro_cidade']=='Vitor Meireles')echo 'selected'; ?>>Vitor Meireles</option>
							<option value="Witmarsum"<?php if($show['bairro_cidade']=='Witmarsuma')echo 'selected'; ?>>Witmarsum</option>
							<option value="Xanxerê"<?php if($show['bairro_cidade']=='Xanxerê')echo 'selected'; ?>>Xanxerê</option>
							<option value="Xavantina"<?php if($show['bairro_cidade']=='Xavantina')echo 'selected'; ?>>Xavantina</option>
							<option value="Xaxim"<?php if($show['bairro_cidade']=='Xaxim')echo 'selected'; ?>>Xaxim</option>
							<option value="Zortéa"<?php if($show['bairro_cidade']=='Zortéa')echo 'selected'; ?>>Zortéa</option>
		</select><br>
		<select name="bairro" style="width:100%;height:35px;border-radius:5px;margin-bottom:20px;">
			<option value="0">Escolha o bairro onde mora</option>
		<?php 
			
			$resBairro = mysql_query("SELECT *FROM bairros WHERE bairro_cidade = '$cidade' ORDER BY bairro_nome ASC")or die(mysql_error());
			while($show=mysql_fetch_assoc($resBairro)){ ?>
				<option value="<?php echo $show['bairro_nome']; ?>"><?php echo $show['bairro_nome']; ?></option>
			<?php }
		?>
		<input type="text" class="form-control" name="rua" placeholder="Informe sua rua" required/><br>
		<input type="text" class="form-control" name="fone_res" placeholder="Telefone Fixo" required/><br>
		<input type="text" class="form-control" name="fone_com" placeholder="Telefone Responsavel" required/><br>
		<input type="text" class="form-control" name="fone_cel" placeholder="Telefone Celular" required/><br>
		<select name="serie" class="form-control">
			<option value="0">Selecione sua escolaridade</option>
			<option value="7">7ª série</option>
			<option value="8">8ª série</option>
			<option value="9">9ª série</option>
			<option value="1">1º Ano segundo grau</option>
			<option value="2">2º Ano segundo grau</option>
			<option value="3">3º Ano segundo grau</option>
			<option value="emc">Ensino médio completo</option>
			<option value="eja">(EJA) Educação de jovens e adultos</option>
		</select><br>
		<label><h1><b>Escolha até dois CURSOS DE APRENDIZAGEM que gostaria de fazer em 2017 .</b></h1></label><br>
		<?php 
			
    		//echo $cidade;
    		$res = mysql_query("SELECT *from cursos  WHERE curso_cidade = '$cidadeCursos' ")or die(mysql_error());
    		while($show = mysql_fetch_assoc($res)):
   
		?>
			<input type="checkbox" name="area[]" value="<?php echo $show['curso_nome']?>" class="limited"><a href="#" style="color:black;" data-toggle="tooltip" data-placement="top" title="<?php echo $show['curso_desc']; ?>"><?php echo $show['curso_nome'] ?></a><br>
			<?php endwhile; ?>
			
		<label><h1><b>Possui disponibilidade para contratação no contraturno?</b></h1></label><br>
		<small>Ex: curso realizado no período matutino no SENAI e Vespertino na Empresa.</small><br>
			<input type="radio" name="interesse" value="SIM">SIM<br>
			<input type="radio" name="interesse" value="NÃO">NÃO<br>
		<label><h1><b>Já realizou algum curso de Aprendizagem no SENAI?</b></h1></label><br>
			<input type="radio" name="cursou" value="SIM"> SIM<br>
			<input type="radio" name="cursou" value="NAO"> NÃO<br>
		<label><h1><b>Já trabalhou ou está atualmente trabalhando com Carteira Assinada ?</b></h1></label><br>
			<input type="radio" name="trabalhou" value="SIM"> SIM<br>
			<input type="radio" name="trabalhou" value="NAO"> NÃO<br>
		<input type="submit" class="btn btn-primary"name="enviar" value="Cadastrar"/><br>
	</form>
	</div>
	</div>
	<footer><center><h2 style="margin-top:60px;">INFORMÁTICA - SENAI</h2></center></footer>
</section> 

<script type="text/javascript">
	$(document).ready(function(){
    $window = $(window);
    //Captura cada elemento section com o data-type "background"
    $('section[data-type="background"]').each(function(){
        var $scroll = $(this);   
            //Captura o evento scroll do navegador e modifica o backgroundPosition de acordo com seu deslocamento.            
            $(window).scroll(function() {
                var yPos = -($window.scrollTop() / $scroll.data('speed')); 
                var coords = '60% '+ yPos + 'px';
                $scroll.css({ backgroundPosition: coords });    
            });
   });  
}); 
</script>
</body>
</html>