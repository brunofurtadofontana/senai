<?php 
    require_once("files/conect.php");
?>
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
	  var MIN_SELECT = 1
	  $('input.limited').on('change', function(){
	    if($(this).siblings(':checked').length >= MAX_SELECT && $(this).siblings(':checked').length >= MIN_SELECT){
	       this.checked = false;
	    }
	  });
	});
</script>	
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
</style>
	<h1><b>Cadastro de Alunos</b></h1>
	<span style="width:100%;height:60px;border:1px solid red;border-radius:5px;font-size:15px;font-family:Tahoma;padding:5px;">Obsevação: O preenchimento deste formulário não garante vaga nos próximos cursos de aprendizagem. É apenas uma cadastro.</span>
	<hr>
	<?php 
		$res = mysql_query("SELECT *FROM adm WHERE adm_cod = '$codUsuario' ")or die(mysql_error());
		$show=mysql_fetch_assoc($res);
		$cidadeCursos = $show['adm_cidade'];

	?>
<div class="container-fluid" style="font-size:20px;font-weight:bold;">
<form action="files/trata.php" method="post" >
	<input type="text" class="form-control" name="nome" placeholder="Informe seu nome" required/><br>
	<input type="text" onfocus="(this.type='date')" class="form-control" name="datanasc" placeholder="Data de nascimento" required/><br>
		<select name="cidade" style="width:100%;height:35px;border-radius:5px;margin-bottom:20px;">	
		<option value="Abdon Batista" <?php if($show['adm_cidade']=='Abdon Batista')echo 'selected'; ?> >Abdon Batista</option>
		<option value="Abelardo Luz" <?php if($show['adm_cidade']=='AAbelardo Luz')echo 'selected'; ?>>Abelardo Luz</option>
		<option value="Agrolândia" <?php if($show['adm_cidade']=='Agrolândia')echo 'selected'; ?>>Agrolândia</option>
		<option value="Agronômica" <?php if($show['adm_cidade']=='Agronômica')echo 'selected'; ?>>Agronômica</option>
		<option value="Água Doce" <?php if($show['adm_cidade']=='Água Doce')echo 'selected'; ?>>Água Doce</option>
		<option value="Águas de Chapecó" <?php if($show['adm_cidade']=='Águas de Chapecó')echo 'selected'; ?>>Águas de Chapecó</option>
		<option value="Águas Frias" <?php if($show['adm_cidade']=='Águas Frias')echo 'selected'; ?>>Águas Frias</option>
		<option value="Águas Mornas" <?php if($show['adm_cidade']=='Águas Mornas')echo 'selected'; ?>>Águas Mornas</option>
		<option value="Alfredo Wagner" <?php if($show['adm_cidade']=='Alfredo Wagner')echo 'selected'; ?>>Alfredo Wagner</option>
		<option value="Alto Bela Vista" <?php if($show['adm_cidade']=='Alto Bela Vista')echo 'selected'; ?>>Alto Bela Vista</option>
		<option value="Anchieta" <?php if($show['adm_cidade']=='Anchieta')echo 'selected'; ?>>Anchieta</option>
		<option value="Angelina"<?php if($show['adm_cidade']=='Angelina')echo 'selected'; ?>>Angelina</option>
		<option value="Anita Garibaldi" <?php if($show['adm_cidade']=='Anita Garibaldi')echo 'selected'; ?>>Anita Garibaldi</option>
		<option value="Anitápolis" <?php if($show['adm_cidade']=='Anitápolis')echo 'selected'; ?>>Anitápolis</option>
		<option value="Antônio Carlos" <?php if($show['adm_cidade']=='Antônio Carlos')echo 'selected'; ?>>Antônio Carlos</option>
		<option value="Apiúna"<?php if($show['adm_cidade']=='Apiúna')echo 'selected'; ?>>Apiúna</option>
		<option value="Arabutã"<?php if($show['adm_cidade']=='Arabutã')echo 'selected'; ?>>Arabutã</option>
		<option value="Araquari"<?php if($show['adm_cidade']=='Araquari')echo 'selected'; ?>>Araquari</option>
		<option value="Araranguá"<?php if($show['adm_cidade']=='Araranguá')echo 'selected'; ?>>Araranguá</option>
		<option value="Armazém"<?php if($show['adm_cidade']=='Abdon Batista')echo 'selected'; ?>>Armazém</option>
		<option value="Arroio Trinta"<?php if($show['adm_cidade']=='Armazém')echo 'selected'; ?>>Arroio Trinta</option>
		<option value="Arvoredo"<?php if($show['adm_cidade']=='Arvoredo')echo 'selected'; ?>>Arvoredo</option>
		<option value="Ascurra"<?php if($show['adm_cidade']=='Ascurra')echo 'selected'; ?>>Ascurra</option>
		<option value="Atalanta"<?php if($show['adm_cidade']=='Atalanta')echo 'selected'; ?>>Atalanta</option>
		<option value="Aurora"<?php if($show['adm_cidade']=='Aurora')echo 'selected'; ?>>Aurora</option>
		<option value="Balneário Arroio do Silva"<?php if($show['adm_cidade']=='Balneário Arroio do Silva')echo 'selected'; ?>>Balneário Arroio do Silva</option>
		<option value="Balneário Barra do Sul"<?php if($show['adm_cidade']=='Abdon Batista')echo 'selected'; ?>>Balneário Barra do Sul</option>
		<option value="Balneário Camboriú"<?php if($show['adm_cidade']=='Balneário Barra do Sul')echo 'selected'; ?>>Balneário Camboriú</option>
		<option value="Balneário Gaivota"<?php if($show['adm_cidade']=='Balneário Gaivota')echo 'selected'; ?>>Balneário Gaivota</option>
		<option value="420208Bandeirante1"<?php if($show['adm_cidade']=='Bandeirante')echo 'selected'; ?>>Bandeirante</option>
		<option value="Barra Bonita"<?php if($show['adm_cidade']=='Barra Bonita')echo 'selected'; ?>>Barra Bonita</option>
		<option value="Barra Velha"<?php if($show['adm_cidade']=='Barra Velha')echo 'selected'; ?>>Barra Velha</option>
		<option value="Bela Vista do Toldo"<?php if($show['adm_cidade']=='Bela Vista do Toldo')echo 'selected'; ?>>Bela Vista do Toldo</option>
		<option value="Belmonte"<?php if($show['adm_cidade']=='Belmonte')echo 'selected'; ?>>Belmonte</option>
		<option value="Benedito"<?php if($show['adm_cidade']=='Benedito')echo 'selected'; ?>>Benedito Novo</option>
		<option value="Biguaçu"<?php if($show['adm_cidade']=='Biguaçu')echo 'selected'; ?>>Biguaçu</option>
		<option value="Blumenau"<?php if($show['adm_cidade']=='Blumenau')echo 'selected'; ?>>Blumenau</option>
		<option value="Bocaina do Sul"<?php if($show['adm_cidade']=='Bocaina do Sul')echo 'selected'; ?>>Bocaina do Sul</option>
		<option value="Bombinhas"<?php if($show['adm_cidade']=='Bombinhas')echo 'selected'; ?>>Bombinhas</option>
		<option value="Bom Jardim da Serra"<?php if($show['adm_cidade']=='Bom Jardim da Serra')echo 'selected'; ?>>Bom Jardim da Serra</option>
		<option value="Bom Jesus"<?php if($show['adm_cidade']=='Bom Jesus')echo 'selected'; ?>>Bom Jesus</option>
		<option value="Bom Jesus do Oeste"<?php if($show['adm_cidade']=='Bom Jesus do Oeste')echo 'selected'; ?>>Bom Jesus do Oeste</option>
		<option value="Bom Retiro"<?php if($show['adm_cidade']=='Bom Retiro')echo 'selected'; ?>>Bom Retiro</option>
		<option value="Botuverá"<?php if($show['adm_cidade']=='Botuverá')echo 'selected'; ?>>Botuverá</option>
		<option value="Braço do Norte"<?php if($show['adm_cidade']=='Braço do Norte')echo 'selected'; ?>>Braço do Norte</option>
		<option value="Braço do Trombudo"<?php if($show['adm_cidade']=='Braço do Trombudo')echo 'selected'; ?>>Braço do Trombudo</option>
		<option value="Brunópolis"<?php if($show['adm_cidade']=='Brunópolis')echo 'selected'; ?>>Brunópolis</option>
		<option value="Brusque"<?php if($show['adm_cidade']=='Brusque')echo 'selected'; ?>>Brusque</option>
		<option value="Caçador"<?php if($show['adm_cidade']=='Caçador')echo 'selected'; ?>>Caçador</option>
		<option value="Caibi"<?php if($show['adm_cidade']=='Caibi')echo 'selected'; ?>>Caibi</option>
		<option value="Calmon"<?php if($show['adm_cidade']=='Calmon')echo 'selected'; ?>>Calmon</option>
		<option value="Camboriú"<?php if($show['adm_cidade']=='Camboriú')echo 'selected'; ?>>Camboriú</option>
		<option value="Campo Alegre"<?php if($show['adm_cidade']=='Campo Alegre')echo 'selected'; ?>>Campo Alegre</option>
		<option value="Campo Belo do Sul"<?php if($show['adm_cidade']=='Campo Belo do Sul')echo 'selected'; ?>>Campo Belo do Sul</option>
		<option value="Campo Erê"<?php if($show['adm_cidade']=='Campo Erê')echo 'selected'; ?>>Campo Erê</option>
		<option value="Campos Novos"<?php if($show['adm_cidade']=='Campos Novos')echo 'selected'; ?>>Campos Novos</option>
		<option value="Canelinha"<?php if($show['adm_cidade']=='Canelinha')echo 'selected'; ?>>Canelinha</option>
		<option value="Canoinhas"<?php if($show['adm_cidade']=='Canoinhas')echo 'selected'; ?>>Canoinhas</option>
		<option value="Capão Alto"<?php if($show['adm_cidade']=='Capão Alto')echo 'selected'; ?>>Capão Alto</option>
		<option value="Capinzal"<?php if($show['adm_cidade']=='Capinzal')echo 'selected'; ?>>Capinzal</option>
		<option value="Capivari de Baixo"<?php if($show['adm_cidade']=='Capivari de Baixo')echo 'selected'; ?>>Capivari de Baixo</option>
		<option value="Catanduvas"<?php if($show['adm_cidade']=='Catanduvas')echo 'selected'; ?>>Catanduvas</option>
		<option value="Caxambu do Sul"<?php if($show['adm_cidade']=='Caxambu do Sul')echo 'selected'; ?>>Caxambu do Sul</option>
		<option value="Celso Ramos"<?php if($show['adm_cidade']=='Celso Ramos')echo 'selected'; ?>>Celso Ramos</option>
		<option value="Cerro Negro"<?php if($show['adm_cidade']=='Cerro Negro')echo 'selected'; ?>>Cerro Negro</option>
		<option value="Chapadão do Lageado"<?php if($show['adm_cidade']=='Chapadão do Lageado')echo 'selected'; ?>>Chapadão do Lageado</option>
		<option value="Chapecó"<?php if($show['adm_cidade']=='Chapecó')echo 'selected'; ?>>Chapecó</option>
		<option value="Cocal do Sul"<?php if($show['adm_cidade']=='Cocal do Sul')echo 'selected'; ?>>Cocal do Sul</option>
		<option value="Concórdia"<?php if($show['adm_cidade']=='Concórdia')echo 'selected'; ?>>Concórdia</option>
		<option value="Cordilheira Alta"<?php if($show['adm_cidade']=='Cordilheira Alta')echo 'selected'; ?>>Cordilheira Alta</option>
		<option value="Coronel Freitas"<?php if($show['adm_cidade']=='Coronel Freitas')echo 'selected'; ?>>Coronel Freitas</option>
		<option value="Coronel Martins"<?php if($show['adm_cidade']=='Coronel Martins')echo 'selected'; ?>>Coronel Martins</option>
		<option value="Correia Pinto"<?php if($show['adm_cidade']=='Correia Pinto')echo 'selected'; ?>>Correia Pinto</option>
		<option value="Corupá"<?php if($show['adm_cidade']=='Corupá')echo 'selected'; ?>>Corupá</option>
		<option value="Criciúma"<?php if($show['adm_cidade']=='Criciúma')echo 'selected'; ?>>Criciúma</option>
		<option value="Cunha Porã"<?php if($show['adm_cidade']=='Cunha Porã')echo 'selected'; ?>>Cunha Porã</option>
		<option value="Cunhataí"<?php if($show['adm_cidade']=='Cunhataí')echo 'selected'; ?>>Cunhataí</option>
		<option value="Curitibanos"<?php if($show['adm_cidade']=='Curitibanos')echo 'selected'; ?>>Curitibanos</option>
		<option value="Descanso"<?php if($show['adm_cidade']=='Descanso')echo 'selected'; ?>>Descanso</option>
		<option value="Dionísio Cerqueira"<?php if($show['adm_cidade']=='Dionísio Cerqueira')echo 'selected'; ?>>Dionísio Cerqueira</option>
		<option value="Dona Emma"<?php if($show['adm_cidade']=='Dona Emma')echo 'selected'; ?>>Dona Emma</option>
		<option value="Doutor Pedrinho"<?php if($show['adm_cidade']=='Doutor Pedrinho')echo 'selected'; ?>>Doutor Pedrinho</option>
		<option value="Entre Rios"<?php if($show['adm_cidade']=='Entre Rios')echo 'selected'; ?>>Entre Rios</option>
		<option value="Ermo"<?php if($show['adm_cidade']=='Ermo')echo 'selected'; ?>>Ermo</option>
		<option value="Erval Velho"<?php if($show['adm_cidade']=='Erval Velho')echo 'selected'; ?>>Erval Velho</option>
		<option value="Faxinal dos Guedes"<?php if($show['adm_cidade']=='Faxinal dos Guedes')echo 'selected'; ?>>Faxinal dos Guedes</option>
		<option value="Flor do Sertão"<?php if($show['adm_cidade']=='Flor do Sertão')echo 'selected'; ?>>Flor do Sertão</option>
		<option value="Florianópolis"<?php if($show['adm_cidade']=='Florianópolis')echo 'selected'; ?>>Florianópolis</option>
		<option value="Formosa do Sul"<?php if($show['adm_cidade']=='Formosa do Sul')echo 'selected'; ?>>Formosa do Sul</option>
		<option value="Forquilhinha"<?php if($show['adm_cidade']=='Forquilhinha')echo 'selected'; ?>>Forquilhinha</option>
		<option value="Fraiburgo"<?php if($show['adm_cidade']=='Fraiburgo')echo 'selected'; ?>>Fraiburgo</option>
		<option value="Frei Rogério"<?php if($show['adm_cidade']=='Frei Rogério')echo 'selected'; ?>>Frei Rogério</option>
		<option value="Galvão"<?php if($show['adm_cidade']=='Galvão')echo 'selected'; ?>>Galvão</option>
		<option value="Garopaba"<?php if($show['adm_cidade']=='Garopaba')echo 'selected'; ?>>Garopaba</option>
		<option value="Garuva"<?php if($show['adm_cidade']=='Garuva')echo 'selected'; ?>>Garuva</option>
		<option value="Gaspar"<?php if($show['adm_cidade']=='Gaspar')echo 'selected'; ?>>Gaspar</option>
		<option value="Governador Celso Ramos"<?php if($show['adm_cidade']=='Governador Celso Ramos')echo 'selected'; ?>>Governador Celso Ramos</option>
		<option value="Grão Pará"<?php if($show['adm_cidade']=='Grão Pará')echo 'selected'; ?>>Grão Pará</option>
		<option value="Gravatal"<?php if($show['adm_cidade']=='Gravatal')echo 'selected'; ?>>Gravatal</option>
		<option value="Guabiruba"<?php if($show['adm_cidade']=='Guabiruba')echo 'selected'; ?>>Guabiruba</option>
		<option value="Guaraciaba"<?php if($show['adm_cidade']=='Guaraciaba')echo 'selected'; ?>>Guaraciaba</option>
		<option value="Guaramirim"<?php if($show['adm_cidade']=='Guaramirim')echo 'selected'; ?>>Guaramirim</option>
		<option value="Guarujá do Sul"<?php if($show['adm_cidade']=='Guarujá do Sul')echo 'selected'; ?>>Guarujá do Sul</option>
		<option value="Guatambú"<?php if($show['adm_cidade']=='Guatambú')echo 'selected'; ?>>Guatambú</option>
		<option value="Herval d`Oeste"<?php if($show['adm_cidade']=='Herval d`Oeste')echo 'selected'; ?>>Herval d`Oeste</option>
		<option value="Ibiam"<?php if($show['adm_cidade']=='Ibiam')echo 'selected'; ?>>Ibiam</option>
		<option value="Ibicaré"<?php if($show['adm_cidade']=='Ibicaré')echo 'selected'; ?>>Ibicaré</option>
		<option value="Ibirama"<?php if($show['adm_cidade']=='Ibirama')echo 'selected'; ?>>Ibirama</option>
		<option value="Içara"<?php if($show['adm_cidade']=='Içara')echo 'selected'; ?>>Içara</option>
		<option value="Ilhota"<?php if($show['adm_cidade']=='Ilhota')echo 'selected'; ?>>Ilhota</option>
		<option value="Imaruí"<?php if($show['adm_cidade']=='Imaruí')echo 'selected'; ?>>Imaruí</option>
		<option value="Imbituba"<?php if($show['adm_cidade']=='Imbituba')echo 'selected'; ?>>Imbituba</option>
		<option value="Imbuia"<?php if($show['adm_cidade']=='Imbuia')echo 'selected'; ?>>Imbuia</option>
		<option value="Indaial"<?php if($show['adm_cidade']=='Indaial')echo 'selected'; ?>>Indaial</option>
		<option value="Iomerê"<?php if($show['adm_cidade']=='Iomerê')echo 'selected'; ?>>Iomerê</option>
		<option value="Ipira"<?php if($show['adm_cidade']=='Ipira')echo 'selected'; ?>>Ipira</option>
		<option value="Iporã do Oeste"<?php if($show['adm_cidade']=='Iporã do Oeste')echo 'selected'; ?>>Iporã do Oeste</option>
		<option value="Ipuaçu"<?php if($show['adm_cidade']=='Ipuaçu')echo 'selected'; ?>>Ipuaçu</option>
		<option value="Ipumirim"<?php if($show['adm_cidade']=='Ipumirim<')echo 'selected'; ?>>Ipumirim</option>
		<option value="Iraceminha"<?php if($show['adm_cidade']=='Iraceminha')echo 'selected'; ?>>Iraceminha</option>
		<option value="Irani"<?php if($show['adm_cidade']=='Irani')echo 'selected'; ?>>Irani</option>
		<option value="Irati"<?php if($show['adm_cidade']=='Irati')echo 'selected'; ?>>Irati</option>
		<option value="Irineópolis"<?php if($show['adm_cidade']=='Irineópolis')echo 'selected'; ?>>Irineópolis</option>
		<option value="Itá"<?php if($show['adm_cidade']=='Itá')echo 'selected'; ?>>Itá</option>
		<option value="Itaiópolis"<?php if($show['adm_cidade']=='Itaiópolis')echo 'selected'; ?>>Itaiópolis</option>
		<option value="Itajaí"<?php if($show['adm_cidade']=='Itajaí')echo 'selected'; ?>>Itajaí</option>
		<option value="Itapema"<?php if($show['adm_cidade']=='Itapema')echo 'selected'; ?>>Itapema</option>
		<option value="Itapiranga"<?php if($show['adm_cidade']=='Itapiranga')echo 'selected'; ?>>Itapiranga</option>
		<option value="Itapoá"<?php if($show['adm_cidade']=='Itapoá')echo 'selected'; ?>>Itapoá</option>
		<option value="Ituporanga"<?php if($show['adm_cidade']=='Ituporanga')echo 'selected'; ?>>Ituporanga</option>
		<option value="Jaborá"<?php if($show['adm_cidade']=='Jaborá')echo 'selected'; ?>>Jaborá</option>
		<option value="Jacinto Machado"<?php if($show['adm_cidade']=='Jacinto Machado')echo 'selected'; ?>>Jacinto Machado</option>
		<option value="Jaguaruna"<?php if($show['adm_cidade']=='Jaguaruna')echo 'selected'; ?>>Jaguaruna</option>
		<option value="Jaraguá do Sul"<?php if($show['adm_cidade']=='Jaraguá do Sul')echo 'selected'; ?>>Jaraguá do Sul</option>
		<option value="Jardinópolis"<?php if($show['adm_cidade']=='Jardinópolis')echo 'selected'; ?>>Jardinópolis</option>
		<option value="Joaçaba"<?php if($show['adm_cidade']=='Joaçaba')echo 'selected'; ?>>Joaçaba</option>
		<option value="Joinville"<?php if($show['adm_cidade']=='Joinville')echo 'selected'; ?>>Joinville</option>
		<option value="José Boiteux"<?php if($show['adm_cidade']=='José Boiteux')echo 'selected'; ?>>José Boiteux</option>
		<option value="Jupiá"<?php if($show['adm_cidade']=='Jupiá')echo 'selected'; ?>>Jupiá</option>
		<option value="Lacerdópolis"<?php if($show['adm_cidade']=='Lacerdópolis')echo 'selected'; ?>>Lacerdópolis</option>
		<option value="Lages"<?php if($show['adm_cidade']=='Lages')echo 'selected'; ?>>Lages</option>
		<option value="Laguna"<?php if($show['adm_cidade']=='Laguna')echo 'selected'; ?>>Laguna</option>
		<option value="Lajeado Grande"<?php if($show['adm_cidade']=='Lajeado Grande')echo 'selected'; ?>>Lajeado Grande</option>
		<option value="Laurentino"<?php if($show['adm_cidade']=='Laurentino')echo 'selected'; ?>>Laurentino</option>
		<option value="Lauro Muller"<?php if($show['adm_cidade']=='Lauro Muller')echo 'selected'; ?>>Lauro Muller</option>
		<option value="Lebon Régis"<?php if($show['adm_cidade']=='Lebon Régis')echo 'selected'; ?>>Lebon Régis</option>
		<option value="Leoberto Leal"<?php if($show['adm_cidade']=='Leoberto Leal')echo 'selected'; ?>>Leoberto Leal</option>
		<option value="Lindóia do Sul"<?php if($show['adm_cidade']=='Lindóia do Sul')echo 'selected'; ?>>Lindóia do Sul</option>
		<option value="Lontras"<?php if($show['adm_cidade']=='Lontras')echo 'selected'; ?>>Lontras</option>
		<option value="Luiz Alves"<?php if($show['adm_cidade']=='Luiz Alves')echo 'selected'; ?>>Luiz Alves</option>
		<option value="Luzerna"<?php if($show['adm_cidade']=='Luzerna')echo 'selected'; ?>>Luzerna</option>
		<option value="Macieira"<?php if($show['adm_cidade']=='Macieira')echo 'selected'; ?>>Macieira</option>
		<option value="Mafra"<?php if($show['adm_cidade']=='Mafra')echo 'selected'; ?>>Mafra</option>
		<option value="Major Gercino"<?php if($show['adm_cidade']=='Major Gercino')echo 'selected'; ?>>Major Gercino</option>
		<option value="Major Vieira"<?php if($show['adm_cidade']=='Major Vieira')echo 'selected'; ?>>Major Vieira</option>
		<option value="Maracajá"<?php if($show['adm_cidade']=='Maracajá')echo 'selected'; ?>>Maracajá</option>
		<option value="Maravilha"<?php if($show['adm_cidade']=='Maravilha')echo 'selected'; ?>>Maravilha</option>
		<option value="Marema"<?php if($show['adm_cidade']=='Marema')echo 'selected'; ?>>Marema</option>
		<option value="Massaranduba"<?php if($show['adm_cidade']=='Massaranduba')echo 'selected'; ?>>Massaranduba</option>
		<option value="Matos Costa"<?php if($show['adm_cidade']=='Matos Costa')echo 'selected'; ?>>Matos Costa</option>
		<option value="Meleiro"<?php if($show['adm_cidade']=='Meleiro')echo 'selected'; ?>>Meleiro</option>
		<option value="Mirim Doce"<?php if($show['adm_cidade']=='Mirim Doce')echo 'selected'; ?>>Mirim Doce</option>
		<option value="Modelo"<?php if($show['adm_cidade']=='Modelo')echo 'selected'; ?>>Modelo</option>
		<option value="Mondaí"<?php if($show['adm_cidade']=='Mondaí')echo 'selected'; ?>>Mondaí</option>
		<option value="Monte Carlo"<?php if($show['adm_cidade']=='Monte Carlo')echo 'selected'; ?>>Monte Carlo</option>
		<option value="Monte Castelo"<?php if($show['adm_cidade']=='Monte Castelo')echo 'selected'; ?>>Monte Castelo</option>
		<option value="Morro da Fumaça"<?php if($show['adm_cidade']=='Morro da Fumaça')echo 'selected'; ?>>Morro da Fumaça</option>
		<option value="Morro Grande"<?php if($show['adm_cidade']=='Morro Grande')echo 'selected'; ?>>Morro Grande</option>
		<option value="Navegantes"<?php if($show['adm_cidade']=='Navegantes')echo 'selected'; ?>>Navegantes</option>
		<option value="Nova Erechim"<?php if($show['adm_cidade']=='Nova Erechim')echo 'selected'; ?>>Nova Erechim</option>
		<option value="Nova Itaberaba"<?php if($show['adm_cidade']=='Nova Itaberaba')echo 'selected'; ?>>Nova Itaberaba</option>
		<option value="Nova Trento"<?php if($show['adm_cidade']=='Nova Trento')echo 'selected'; ?>>Nova Trento</option>
		<option value="Nova Veneza"<?php if($show['adm_cidade']=='Nova Veneza')echo 'selected'; ?>>Nova Veneza</option>
		<option value="Novo Horizonte"<?php if($show['adm_cidade']=='Novo Horizonte')echo 'selected'; ?>>Novo Horizonte</option>
		<option value="Orleans"<?php if($show['adm_cidade']=='Orleans')echo 'selected'; ?>>Orleans</option>
		<option value="Otacílio Costa"<?php if($show['adm_cidade']=='Otacílio Costa')echo 'selected'; ?>>Otacílio Costa</option>
		<option value="Ouro"<?php if($show['adm_cidade']=='Ouro')echo 'selected'; ?>>Ouro</option>
		<option value="Ouro Verde"<?php if($show['adm_cidade']=='Ouro Verde')echo 'selected'; ?>>Ouro Verde</option>
		<option value="Paial"<?php if($show['adm_cidade']=='Paial')echo 'selected'; ?>>Paial</option>
		<option value="Painel"<?php if($show['adm_cidade']=='Painel')echo 'selected'; ?>>Painel</option>
		<option value="Palhoça"<?php if($show['adm_cidade']=='Palhoça')echo 'selected'; ?>>Palhoça</option>
		<option value="Palma Sola"<?php if($show['adm_cidade']=='Palma Sola')echo 'selected'; ?>>Palma Sola</option>
		<option value="Palmeira"<?php if($show['adm_cidade']=='Palmeira')echo 'selected'; ?>>Palmeira</option>
		<option value="Palmitos"<?php if($show['adm_cidade']=='Palmitos')echo 'selected'; ?>>Palmitos</option>
		<option value="Papanduva"<?php if($show['adm_cidade']=='Papanduvaa')echo 'selected'; ?>>Papanduva</option>
		<option value="Paraíso"<?php if($show['adm_cidade']=='Paraísoa')echo 'selected'; ?>>Paraíso</option>
		<option value="Passo de Torres"<?php if($show['adm_cidade']=='Passo de Torres')echo 'selected'; ?>>Passo de Torres</option>
		<option value="Passos Maia"<?php if($show['adm_cidade']=='Passos Maia')echo 'selected'; ?>>Passos Maia</option>
		<option value="Paulo Lopes"<?php if($show['adm_cidade']=='Paulo Lopes')echo 'selected'; ?>>Paulo Lopes</option>
		<option value="Pedras Grandes"<?php if($show['adm_cidade']=='Pedras Grandes')echo 'selected'; ?>>Pedras Grandes</option>
		<option value="Penha"<?php if($show['adm_cidade']=='Penha')echo 'selected'; ?>>Penha</option>
		<option value="Peritiba"<?php if($show['adm_cidade']=='Peritiba')echo 'selected'; ?>>Peritiba</option>
		<option value="Petrolândia"<?php if($show['adm_cidade']=='Petrolândia')echo 'selected'; ?>>Petrolândia</option>
		<option value="Piçarras"<?php if($show['adm_cidade']=='Piçarras')echo 'selected'; ?>>Piçarras</option>
		<option value="Pinhalzinho"<?php if($show['adm_cidade']=='Pinhalzinho')echo 'selected'; ?>>Pinhalzinho</option>
		<option value="Pinheiro Preto"<?php if($show['adm_cidade']=='Pinheiro Preto')echo 'selected'; ?>>Pinheiro Preto</option>
		<option value="Piratuba"<?php if($show['adm_cidade']=='Piratuba')echo 'selected'; ?>>Piratuba</option>
		<option value="Planalto Alegre"<?php if($show['adm_cidade']=='Planalto Alegre')echo 'selected'; ?>>Planalto Alegre</option>
		<option value="Pomerode"<?php if($show['adm_cidade']=='Pomerode')echo 'selected'; ?>>Pomerode</option>
		<option value="Ponte Alta"<?php if($show['adm_cidade']=='Ponte Alta')echo 'selected'; ?>>Ponte Alta</option>
		<option value="Ponte Alta do Norte"<?php if($show['adm_cidade']=='Ponte Alta do Norte')echo 'selected'; ?>>Ponte Alta do Norte</option>
		<option value="Ponte Serrada"<?php if($show['adm_cidade']=='Ponte Serrada')echo 'selected'; ?>>Ponte Serrada</option>
		<option value="Porto Belo"<?php if($show['adm_cidade']=='Porto Belo')echo 'selected'; ?>>Porto Belo</option>
		<option value="Porto União"<?php if($show['adm_cidade']=='Porto União')echo 'selected'; ?>>Porto União</option>
		<option value="Pouso Redondo"<?php if($show['adm_cidade']=='Pouso Redondo')echo 'selected'; ?>>Pouso Redondo</option>
		<option value="Praia Grande"<?php if($show['adm_cidade']=='Praia Grande')echo 'selected'; ?>>Praia Grande</option>
		<option value="Presidente Castelo Branco"<?php if($show['adm_cidade']=='Presidente Castelo Branco')echo 'selected'; ?>>Presidente Castelo Branco</option>
		<option value="Presidente Getúlio"<?php if($show['adm_cidade']=='Presidente Getúlio')echo 'selected'; ?>>Presidente Getúlio</option>
		<option value="Presidente Nereu"<?php if($show['adm_cidade']=='Presidente Nereu')echo 'selected'; ?>>Presidente Nereu</option>
		<option value="Princesa"<?php if($show['adm_cidade']=='Princesa')echo 'selected'; ?>>Princesa</option>
		<option value="Quilombo"<?php if($show['adm_cidade']=='Quilombo')echo 'selected'; ?>>Quilombo</option>
		<option value="Rancho Queimado"<?php if($show['adm_cidade']=='Rancho Queimado')echo 'selected'; ?>>Rancho Queimado</option>
		<option value="Rio das Antas"<?php if($show['adm_cidade']=='Rio das Antas')echo 'selected'; ?>>Rio das Antas</option>
		<option value="Rio do Campo"<?php if($show['adm_cidade']=='Rio do Campo')echo 'selected'; ?>>Rio do Campo</option>
		<option value="Rio do Oeste"<?php if($show['adm_cidade']=='Rio do Oeste')echo 'selected'; ?>>Rio do Oeste</option>
		<option value="Rio dos Cedros"<?php if($show['adm_cidade']=='Rio dos Cedros')echo 'selected'; ?>>Rio dos Cedros</option>
		<option value="Rio do Sul"<?php if($show['adm_cidade']=='Rio do Sul')echo 'selected'; ?>>Rio do Sul</option>
		<option value="Rio Fortuna"<?php if($show['adm_cidade']=='Rio Fortuna')echo 'selected'; ?>>Rio Fortuna</option>
		<option value="Rio Negrinho"<?php if($show['adm_cidade']=='Rio Negrinho')echo 'selected'; ?>>Rio Negrinho</option>
		<option value="Rio Rufino"<?php if($show['adm_cidade']=='Rio Rufino')echo 'selected'; ?>>Rio Rufino</option>
		<option value="Riqueza"<?php if($show['adm_cidade']=='Riqueza')echo 'selected'; ?>>Riqueza</option>
		<option value="Rodeio"<?php if($show['adm_cidade']=='Rodeio')echo 'selected'; ?>>Rodeio</option>
		<option value="Romelândia"<?php if($show['adm_cidade']=='Romelândia')echo 'selected'; ?>>Romelândia</option>
		<option value="Salete"<?php if($show['adm_cidade']=='Salete')echo 'selected'; ?>>Salete</option>
		<option value="Saltinho"<?php if($show['adm_cidade']=='Saltinho')echo 'selected'; ?>>Saltinho</option>
		<option value="Salto Veloso"<?php if($show['adm_cidade']=='Salto Veloso')echo 'selected'; ?>>Salto Veloso</option>
		<option value="Sangão"<?php if($show['adm_cidade']=='Sangão')echo 'selected'; ?>>Sangão</option>
		<option value="Santa Cecília"<?php if($show['adm_cidade']=='Santa Cecília')echo 'selected'; ?>>Santa Cecília</option>
		<option value="Santa Helena"<?php if($show['adm_cidade']=='Santa Helena')echo 'selected'; ?>>Santa Helena</option>
		<option value="Santa Rosa de Lima"<?php if($show['adm_cidade']=='Santa Rosa de Lima')echo 'selected'; ?>>Santa Rosa de Lima</option>
		<option value="Santa Rosa do Sul"<?php if($show['adm_cidade']=='Santa Rosa do Sul')echo 'selected'; ?>>Santa Rosa do Sul</option>
		<option value="Santa Terezinha"<?php if($show['adm_cidade']=='Santa Terezinha')echo 'selected'; ?>>Santa Terezinha</option>
		<option value="Santa Terezinha do Progresso"<?php if($show['adm_cidade']=='Santa Terezinha do Progresso')echo 'selected'; ?>>Santa Terezinha do Progresso</option>
		<option value="Santiago do Sul"<?php if($show['adm_cidade']=='Santiago do Sul')echo 'selected'; ?>>Santiago do Sul</option>
		<option value="Santo Amaro da Imperatriz"<?php if($show['adm_cidade']=='Santo Amaro da Imperatriz')echo 'selected'; ?>>Santo Amaro da Imperatriz</option>
		<option value="São Bento do Sul"<?php if($show['adm_cidade']=='São Bento do Sul')echo 'selected'; ?>>São Bento do Sul</option>
		<option value="São Bernardino"<?php if($show['adm_cidade']=='São Bernardino')echo 'selected'; ?>>São Bernardino</option>
		<option value="São Bonifácio"<?php if($show['adm_cidade']=='São Bonifácio')echo 'selected'; ?>>São Bonifácio</option>
		<option value="São Carlos"<?php if($show['adm_cidade']=='São Carlos')echo 'selected'; ?>>São Carlos</option>
		<option value="São Cristovão do Sul"<?php if($show['adm_cidade']=='São Cristovão do Sul')echo 'selected'; ?>>São Cristovão do Sul</option>
		<option value="São Domingos"<?php if($show['adm_cidade']=='São Domingos')echo 'selected'; ?>>São Domingos</option>
		<option value="São Francisco do Sul"<?php if($show['adm_cidade']=='São Francisco do Sul')echo 'selected'; ?>>São Francisco do Sul</option>
		<option value="São João Batista"<?php if($show['adm_cidade']=='São João Batista')echo 'selected'; ?>>São João Batista</option>
		<option value="São João do Itaperiú"<?php if($show['adm_cidade']=='São João do Itaperiú')echo 'selected'; ?>>São João do Itaperiú</option>
		<option value="São João do Oeste"<?php if($show['adm_cidade']=='São João do Oeste')echo 'selected'; ?>>São João do Oeste</option>
		<option value="São João do Sul"<?php if($show['adm_cidade']=='São João do Sul')echo 'selected'; ?>>São João do Sul</option>
		<option value="São Joaquim"<?php if($show['adm_cidade']=='São Joaquim')echo 'selected'; ?>>São Joaquim</option>
		<option value="São José"<?php if($show['adm_cidade']=='São José')echo 'selected'; ?>>São José</option>
		<option value="São José do Cedro"<?php if($show['adm_cidade']=='São José do Cedro')echo 'selected'; ?>>São José do Cedro</option>
		<option value="São José do Cerrito"<?php if($show['adm_cidade']=='São José do Cerrito')echo 'selected'; ?>>São José do Cerrito</option>
		<option value="São Lourenço do Oeste"<?php if($show['adm_cidade']=='São Lourenço do Oeste')echo 'selected'; ?>>São Lourenço do Oeste</option>
		<option value="São Ludgero"<?php if($show['adm_cidade']=='São Ludgero')echo 'selected'; ?>>São Ludgero</option>
		<option value="São Martinho"<?php if($show['adm_cidade']=='São Martinho')echo 'selected'; ?>>São Martinho</option>
		<option value="São Miguel da Boa Vista"<?php if($show['adm_cidade']=='São Miguel da Boa Vista')echo 'selected'; ?>>São Miguel da Boa Vista</option>
		<option value="São Miguel do Oeste"<?php if($show['adm_cidade']=='São Miguel do Oeste')echo 'selected'; ?>>São Miguel do Oeste</option>
		<option value="São Pedro de Alcântara"<?php if($show['adm_cidade']=='São Pedro de Alcântara')echo 'selected'; ?>>São Pedro de Alcântara</option>
		<option value="Saudades"<?php if($show['adm_cidade']=='Saudades')echo 'selected'; ?>>Saudades</option>
		<option value="Schroeder"<?php if($show['adm_cidade']=='Schroeder')echo 'selected'; ?>>Schroeder</option>
		<option value="Seara"<?php if($show['adm_cidade']=='Seara')echo 'selected'; ?>>Seara</option>
		<option value="Serra Alta"<?php if($show['adm_cidade']=='Serra Alta')echo 'selected'; ?>>Serra Alta</option>
		<option value="Siderópolis"<?php if($show['adm_cidade']=='Siderópolis')echo 'selected'; ?>>Siderópolis</option>
		<option value="Sombrio"<?php if($show['adm_cidade']=='Sombrio')echo 'selected'; ?>>Sombrio</option>
		<option value="Sul Brasil"<?php if($show['adm_cidade']=='Sul Brasil')echo 'selected'; ?>>Sul Brasil</option>
		<option value="Taió"<?php if($show['adm_cidade']=='Taió')echo 'selected'; ?>>Taió</option>
		<option value="Tangará"<?php if($show['adm_cidade']=='Tangará')echo 'selected'; ?>>Tangará</option>
		<option value="Tigrinhos"<?php if($show['adm_cidade']=='Tigrinhos')echo 'selected'; ?>>Tigrinhos</option>
		<option value="Tijucas"<?php if($show['adm_cidade']=='Tijucas')echo 'selected'; ?>>Tijucas</option>
		<option value="Timbé do Sul"<?php if($show['adm_cidade']=='Timbé do Sul')echo 'selected'; ?>>Timbé do Sul</option>
		<option value="Timbó"<?php if($show['adm_cidade']=='Timbó')echo 'selected'; ?>>Timbó</option>
		<option value="Timbó Grande"<?php if($show['adm_cidade']=='Timbó Grande')echo 'selected'; ?>>Timbó Grande</option>
		<option value="Três Barras"<?php if($show['adm_cidade']=='Três Barras')echo 'selected'; ?>>Três Barras</option>
		<option value="Treviso"<?php if($show['adm_cidade']=='Treviso')echo 'selected'; ?>>Treviso</option>
		<option value="Treze de Maio"<?php if($show['adm_cidade']=='Treze de Maio')echo 'selected'; ?>>Treze de Maio</option>
		<option value="Treze Tílias"<?php if($show['adm_cidade']=='Treze Tílias')echo 'selected'; ?>>Treze Tílias</option>
		<option value="Trombudo Central"<?php if($show['adm_cidade']=='Trombudo Central')echo 'selected'; ?>>Trombudo Central</option>
		<option value="Tubarão"<?php if($show['adm_cidade']=='Tubarão')echo 'selected'; ?>>Tubarão</option>
		<option value="Tunápolis"<?php if($show['adm_cidade']=='Tunápolis')echo 'selected'; ?>>Tunápolis</option>
		<option value="Turvo"<?php if($show['adm_cidade']=='Turvo')echo 'selected'; ?>>Turvo</option>
		<option value="União do Oeste"<?php if($show['adm_cidade']=='União do Oeste')echo 'selected'; ?>>União do Oeste</option>
		<option value="Urubici"<?php if($show['adm_cidade']=='Urubici')echo 'selected'; ?>>Urubici</option>
		<option value="Urupema"<?php if($show['adm_cidade']=='Urupema')echo 'selected'; ?>>Urupema</option>
		<option value="Urussanga"<?php if($show['adm_cidade']=='Urussanga')echo 'selected'; ?>>Urussanga</option>
		<option value="Vargeão"<?php if($show['adm_cidade']=='Vargeão')echo 'selected'; ?>>Vargeão</option>
		<option value="Vargem"<?php if($show['adm_cidade']=='Vargem')echo 'selected'; ?>>Vargem</option>
		<option value="Vargem Bonita"<?php if($show['adm_cidade']=='Vargem Bonita')echo 'selected'; ?>>Vargem Bonita</option>
		<option value="Vidal Ramos"<?php if($show['adm_cidade']=='Vidal Ramos')echo 'selected'; ?>>Vidal Ramos</option>
		<option value="Videira"<?php if($show['adm_cidade']=='Videira')echo 'selected'; ?>>Videira</option>
		<option value="Vitor Meireles"<?php if($show['adm_cidade']=='Vitor Meireles')echo 'selected'; ?>>Vitor Meireles</option>
		<option value="Witmarsum"<?php if($show['adm_cidade']=='Witmarsuma')echo 'selected'; ?>>Witmarsum</option>
		<option value="Xanxerê"<?php if($show['adm_cidade']=='Xanxerê')echo 'selected'; ?>>Xanxerê</option>
		<option value="Xavantina"<?php if($show['adm_cidade']=='Xavantina')echo 'selected'; ?>>Xavantina</option>
		<option value="Xaxim"<?php if($show['adm_cidade']=='Xaxim')echo 'selected'; ?>>Xaxim</option>
		<option value="Zortéa"<?php if($show['adm_cidade']=='Zortéa')echo 'selected'; ?>>Zortéa</option>
	</select>
	<select name="bairro" style="width:100%;height:35px;border-radius:5px;margin-bottom:20px;">
			<option value="0">Escolha o bairro onde mora</option>
	<?php 
		$result=mysql_query("SELECT *FROM bairros WHERE user_bairro_cod='$codUsuario' ORDER BY bairro_nome ASC")or die(mysql_error());
		while($showBairro = mysql_fetch_assoc($result)): ?>
		<option value="<?php echo $showBairro['bairro_nome']; ?>"><?php echo $showBairro['bairro_nome']; ?></option>
	<?php	
		endwhile;	
	?>
	<input type="text" class="form-control" name="bairro" placeholder="Informe seu bairro" required/><br>
	<input type="text" class="form-control" name="rua" placeholder="Informe sua rua" required/><br>
	<input type="text" class="form-control" name="fone_res" placeholder="Telefone Fixo" required/><br>
	<input type="text" class="form-control" name="fone_com" placeholder="Telefone Recado" required/><br>
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
	<label><h1><b>Escolha até duas áreas que gostaria de fazer curso de aprendizagem.</b></h1></label><br>
		<?php 
			
    		//echo $cidade;
    		$res = mysql_query("SELECT *from cursos  WHERE curso_cidade = '$cidadeCursos' ")or die(mysql_error());
    		while($show = mysql_fetch_assoc($res)):
   
		?>
		<input type="checkbox" name="area[]" value="<?php echo $show['curso_nome']?>" class="limited"><a href="#" style="color:black;" data-toggle="tooltip" data-placement="top" title="<?php echo $show['curso_desc']; ?>"><?php echo $show['curso_nome'] ?></a><br>
	<?php endwhile; ?>
		
	<label><h1><b>Possui disponibilidade para contratação no contraturno?</b></h1></label><br>
		<input type="radio" name="interesse" value="SIM">SIM<br>
		<input type="radio" name="interesse" value="NAO">NÃO<br>
	<label><h1><b>Já realizou algum curso de Aprendizagem no SENAI?</b></h1></label><br>
		<input type="radio" name="cursou" value="SIM"> SIM<br>
		<input type="radio" name="cursou" value="NAO"> NÃO<br>
	<label><h1><b>Já trabalhou com carteira assinada?</b></h1></label><br>
		<input type="radio" name="trabalhou" value="SIM"> SIM<br>
		<input type="radio" name="trabalhou" value="NAO"> NÃO<br>
	<input type="submit" class="btn btn-primary"name="enviar" value="Cadastrar"/><br>

</form>
</div>