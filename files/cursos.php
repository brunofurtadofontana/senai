<?php 
 require_once("files/conect.php");
 include "files/verifica.php";

?>
<h1><b>Cadastro de Cursos</b></h1>
<hr>
<div class="container-fluid" style="font-size:20px;font-weight:bold;">
	<form action="files/trataCurso.php?id=<?php echo $codUsuario; ?>" method="POST">
	<input type="text" class="form-control" name="curso" placeholder="Informe Titulo do curso" required/><br>
	<?php 
			$result2 = mysql_query("SELECT adm_cidade FROM adm WHERE adm_cod = '$codUsuario'")or die(mysql_error()); 
			$show=mysql_fetch_assoc($result2);
		?>
	<select name="cidade" style="width:100%;height:35px;border-radius:5px;margin-bottom:20px;">	
		<option value="0" <?php if($show['adm_cidade']=='0')echo 'selected'; ?> >Selecione sua cidade</option>
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
		<option value="4214201"<?php if($show['adm_cidade']=='Quilombo')echo 'selected'; ?>>Quilombo</option>
		<option value="Quilombo"<?php if($show['adm_cidade']=='Rancho Queimado')echo 'selected'; ?>>Rancho Queimado</option>
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
	<textarea style="width:100%;border-radius:5px;" name="desc" placeholder="Descrição do curso"></textarea><br><br>
	<input type="submit" class="btn btn-primary"name="enviar" value="Cadastrar"/><br>
	</form>
</div>



<div class="table-responsive">
				<h1 class="page-header">Cursos Cadastrados</h1>
				<table class="table table-striped" style="font-family: Tahoma;">
				              <thead>
				                <tr>
				                  <th>Nome do Curso</th>
				                  <th>Cidade</th>
				                  <th>Descrição</th>
				                  <th>Data de Cadastro</th>
				                  <th>Ação</th>
				                </tr>
				              </thead>
				              <tbody>
<?php				              	
	$result = mysql_query("SELECT *FROM cursos WHERE usuario_curso_cod = '$codUsuario'")or die(mysql_error());
		while ($show = mysql_fetch_assoc($result)) { 
			$id = $show['curso_cod'];
			?>
	              	<tr>
	              		<td><?php echo $show['curso_nome'];?></td>
	              		<td><?php echo $show['curso_cidade'];?></td>
	              		<td><?php echo $show['curso_desc'];?></td>
	              		<td><?php echo $show['curso_data'];?></td>
						<td>
							<a class="glyphicon glyphicon-remove-sign" href="files/delCurso.php?id=<?php echo $id;?>" Onclick="return ConfirmDelete();"></a>
							<a class="glyphicon glyphicon-edit" data-toggle="modal" data-target=".bs-example-modal-lg-edit<?php echo $id;?>" href="#" ></a>	
						</td>
	              	</tr>
				              	<div class="modal fade bs-example-modal-lg-edit<?php if($id==$id)echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                  <!-- modal -->
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content" style="padding:10px;font-size:20px;">
                      <h1>Editar Cadastro!</h1>
                      <form action="files/editCurso.php?id=<?php echo $id;?>&cod=<?php echo $codUsuario;?>" method="post" >
                        <input type="text" class="form-control" name="curso" value="<?php echo $show['curso_nome'];?>"placeholder="Informe nome do curso" required/><br>
                        <select name="cidade" style="width:100%;height:35px;border-radius:5px;margin-bottom:20px;">	
							<option value="0" <?php if($show['curso_cidade']=='0')echo 'selected'; ?> >Selecione a cidade onde mora</option>
							<option value="Abdon Batista" <?php if($show['curso_cidade']=='Abdon Batista')echo 'selected'; ?> >Abdon Batista</option>
							<option value="Abelardo Luz" <?php if($show['curso_cidade']=='AAbelardo Luz')echo 'selected'; ?>>Abelardo Luz</option>
							<option value="Agrolândia" <?php if($show['curso_cidade']=='Agrolândia')echo 'selected'; ?>>Agrolândia</option>
							<option value="Agronômica" <?php if($show['curso_cidade']=='Agronômica')echo 'selected'; ?>>Agronômica</option>
							<option value="Água Doce" <?php if($show['curso_cidade']=='Água Doce')echo 'selected'; ?>>Água Doce</option>
							<option value="Águas de Chapecó" <?php if($show['curso_cidade']=='Águas de Chapecó')echo 'selected'; ?>>Águas de Chapecó</option>
							<option value="Águas Frias" <?php if($show['curso_cidade']=='Águas Frias')echo 'selected'; ?>>Águas Frias</option>
							<option value="Águas Mornas" <?php if($show['curso_cidade']=='Águas Mornas')echo 'selected'; ?>>Águas Mornas</option>
							<option value="Alfredo Wagner" <?php if($show['curso_cidade']=='Alfredo Wagner')echo 'selected'; ?>>Alfredo Wagner</option>
							<option value="Alto Bela Vista" <?php if($show['curso_cidade']=='Alto Bela Vista')echo 'selected'; ?>>Alto Bela Vista</option>
							<option value="Anchieta" <?php if($show['curso_cidade']=='Anchieta')echo 'selected'; ?>>Anchieta</option>
							<option value="Angelina"<?php if($show['curso_cidade']=='Angelina')echo 'selected'; ?>>Angelina</option>
							<option value="Anita Garibaldi" <?php if($show['curso_cidade']=='Anita Garibaldi')echo 'selected'; ?>>Anita Garibaldi</option>
							<option value="Anitápolis" <?php if($show['curso_cidade']=='Anitápolis')echo 'selected'; ?>>Anitápolis</option>
							<option value="Antônio Carlos" <?php if($show['curso_cidade']=='Antônio Carlos')echo 'selected'; ?>>Antônio Carlos</option>
							<option value="Apiúna"<?php if($show['curso_cidade']=='Apiúna')echo 'selected'; ?>>Apiúna</option>
							<option value="Arabutã"<?php if($show['curso_cidade']=='Arabutã')echo 'selected'; ?>>Arabutã</option>
							<option value="Araquari"<?php if($show['curso_cidade']=='Araquari')echo 'selected'; ?>>Araquari</option>
							<option value="Araranguá"<?php if($show['curso_cidade']=='Araranguá')echo 'selected'; ?>>Araranguá</option>
							<option value="Armazém"<?php if($show['curso_cidade']=='Abdon Batista')echo 'selected'; ?>>Armazém</option>
							<option value="Arroio Trinta"<?php if($show['curso_cidade']=='Armazém')echo 'selected'; ?>>Arroio Trinta</option>
							<option value="Arvoredo"<?php if($show['curso_cidade']=='Arvoredo')echo 'selected'; ?>>Arvoredo</option>
							<option value="Ascurra"<?php if($show['curso_cidade']=='Ascurra')echo 'selected'; ?>>Ascurra</option>
							<option value="Atalanta"<?php if($show['curso_cidade']=='Atalanta')echo 'selected'; ?>>Atalanta</option>
							<option value="Aurora"<?php if($show['curso_cidade']=='Aurora')echo 'selected'; ?>>Aurora</option>
							<option value="Balneário Arroio do Silva"<?php if($show['curso_cidade']=='Balneário Arroio do Silva')echo 'selected'; ?>>Balneário Arroio do Silva</option>
							<option value="Balneário Barra do Sul"<?php if($show['curso_cidade']=='Abdon Batista')echo 'selected'; ?>>Balneário Barra do Sul</option>
							<option value="Balneário Camboriú"<?php if($show['curso_cidade']=='Balneário Barra do Sul')echo 'selected'; ?>>Balneário Camboriú</option>
							<option value="Balneário Gaivota"<?php if($show['curso_cidade']=='Balneário Gaivota')echo 'selected'; ?>>Balneário Gaivota</option>
							<option value="420208Bandeirante1"<?php if($show['curso_cidade']=='Bandeirante')echo 'selected'; ?>>Bandeirante</option>
							<option value="Barra Bonita"<?php if($show['curso_cidade']=='Barra Bonita')echo 'selected'; ?>>Barra Bonita</option>
							<option value="Barra Velha"<?php if($show['curso_cidade']=='Barra Velha')echo 'selected'; ?>>Barra Velha</option>
							<option value="Bela Vista do Toldo"<?php if($show['curso_cidade']=='Bela Vista do Toldo')echo 'selected'; ?>>Bela Vista do Toldo</option>
							<option value="Belmonte"<?php if($show['curso_cidade']=='Belmonte')echo 'selected'; ?>>Belmonte</option>
							<option value="Benedito"<?php if($show['curso_cidade']=='Benedito')echo 'selected'; ?>>Benedito Novo</option>
							<option value="Biguaçu"<?php if($show['curso_cidade']=='Biguaçu')echo 'selected'; ?>>Biguaçu</option>
							<option value="Blumenau"<?php if($show['curso_cidade']=='Blumenau')echo 'selected'; ?>>Blumenau</option>
							<option value="Bocaina do Sul"<?php if($show['curso_cidade']=='Bocaina do Sul')echo 'selected'; ?>>Bocaina do Sul</option>
							<option value="Bombinhas"<?php if($show['curso_cidade']=='Bombinhas')echo 'selected'; ?>>Bombinhas</option>
							<option value="Bom Jardim da Serra"<?php if($show['curso_cidade']=='Bom Jardim da Serra')echo 'selected'; ?>>Bom Jardim da Serra</option>
							<option value="Bom Jesus"<?php if($show['curso_cidade']=='Bom Jesus')echo 'selected'; ?>>Bom Jesus</option>
							<option value="Bom Jesus do Oeste"<?php if($show['curso_cidade']=='Bom Jesus do Oeste')echo 'selected'; ?>>Bom Jesus do Oeste</option>
							<option value="Bom Retiro"<?php if($show['curso_cidade']=='Bom Retiro')echo 'selected'; ?>>Bom Retiro</option>
							<option value="Botuverá"<?php if($show['curso_cidade']=='Botuverá')echo 'selected'; ?>>Botuverá</option>
							<option value="Braço do Norte"<?php if($show['curso_cidade']=='Braço do Norte')echo 'selected'; ?>>Braço do Norte</option>
							<option value="Braço do Trombudo"<?php if($show['curso_cidade']=='Braço do Trombudo')echo 'selected'; ?>>Braço do Trombudo</option>
							<option value="Brunópolis"<?php if($show['curso_cidade']=='Brunópolis')echo 'selected'; ?>>Brunópolis</option>
							<option value="Brusque"<?php if($show['curso_cidade']=='Brusque')echo 'selected'; ?>>Brusque</option>
							<option value="Caçador"<?php if($show['curso_cidade']=='Caçador')echo 'selected'; ?>>Caçador</option>
							<option value="Caibi"<?php if($show['curso_cidade']=='Caibi')echo 'selected'; ?>>Caibi</option>
							<option value="Calmon"<?php if($show['curso_cidade']=='Calmon')echo 'selected'; ?>>Calmon</option>
							<option value="Camboriú"<?php if($show['curso_cidade']=='Camboriú')echo 'selected'; ?>>Camboriú</option>
							<option value="Campo Alegre"<?php if($show['curso_cidade']=='Campo Alegre')echo 'selected'; ?>>Campo Alegre</option>
							<option value="Campo Belo do Sul"<?php if($show['curso_cidade']=='Campo Belo do Sul')echo 'selected'; ?>>Campo Belo do Sul</option>
							<option value="Campo Erê"<?php if($show['curso_cidade']=='Campo Erê')echo 'selected'; ?>>Campo Erê</option>
							<option value="Campos Novos"<?php if($show['curso_cidade']=='Campos Novos')echo 'selected'; ?>>Campos Novos</option>
							<option value="Canelinha"<?php if($show['curso_cidade']=='Canelinha')echo 'selected'; ?>>Canelinha</option>
							<option value="Canoinhas"<?php if($show['curso_cidade']=='Canoinhas')echo 'selected'; ?>>Canoinhas</option>
							<option value="Capão Alto"<?php if($show['curso_cidade']=='Capão Alto')echo 'selected'; ?>>Capão Alto</option>
							<option value="Capinzal"<?php if($show['curso_cidade']=='Capinzal')echo 'selected'; ?>>Capinzal</option>
							<option value="Capivari de Baixo"<?php if($show['curso_cidade']=='Capivari de Baixo')echo 'selected'; ?>>Capivari de Baixo</option>
							<option value="Catanduvas"<?php if($show['curso_cidade']=='Catanduvas')echo 'selected'; ?>>Catanduvas</option>
							<option value="Caxambu do Sul"<?php if($show['curso_cidade']=='Caxambu do Sul')echo 'selected'; ?>>Caxambu do Sul</option>
							<option value="Celso Ramos"<?php if($show['curso_cidade']=='Celso Ramos')echo 'selected'; ?>>Celso Ramos</option>
							<option value="Cerro Negro"<?php if($show['curso_cidade']=='Cerro Negro')echo 'selected'; ?>>Cerro Negro</option>
							<option value="Chapadão do Lageado"<?php if($show['curso_cidade']=='Chapadão do Lageado')echo 'selected'; ?>>Chapadão do Lageado</option>
							<option value="Chapecó"<?php if($show['curso_cidade']=='Chapecó')echo 'selected'; ?>>Chapecó</option>
							<option value="Cocal do Sul"<?php if($show['curso_cidade']=='Cocal do Sul')echo 'selected'; ?>>Cocal do Sul</option>
							<option value="Concórdia"<?php if($show['curso_cidade']=='Concórdia')echo 'selected'; ?>>Concórdia</option>
							<option value="Cordilheira Alta"<?php if($show['curso_cidade']=='Cordilheira Alta')echo 'selected'; ?>>Cordilheira Alta</option>
							<option value="Coronel Freitas"<?php if($show['curso_cidade']=='Coronel Freitas')echo 'selected'; ?>>Coronel Freitas</option>
							<option value="Coronel Martins"<?php if($show['curso_cidade']=='Coronel Martins')echo 'selected'; ?>>Coronel Martins</option>
							<option value="Correia Pinto"<?php if($show['curso_cidade']=='Correia Pinto')echo 'selected'; ?>>Correia Pinto</option>
							<option value="Corupá"<?php if($show['curso_cidade']=='Corupá')echo 'selected'; ?>>Corupá</option>
							<option value="Criciúma"<?php if($show['curso_cidade']=='Criciúma')echo 'selected'; ?>>Criciúma</option>
							<option value="Cunha Porã"<?php if($show['curso_cidade']=='Cunha Porã')echo 'selected'; ?>>Cunha Porã</option>
							<option value="Cunhataí"<?php if($show['curso_cidade']=='Cunhataí')echo 'selected'; ?>>Cunhataí</option>
							<option value="Curitibanos"<?php if($show['curso_cidade']=='Curitibanos')echo 'selected'; ?>>Curitibanos</option>
							<option value="Descanso"<?php if($show['curso_cidade']=='Descanso')echo 'selected'; ?>>Descanso</option>
							<option value="Dionísio Cerqueira"<?php if($show['curso_cidade']=='Dionísio Cerqueira')echo 'selected'; ?>>Dionísio Cerqueira</option>
							<option value="Dona Emma"<?php if($show['curso_cidade']=='Dona Emma')echo 'selected'; ?>>Dona Emma</option>
							<option value="Doutor Pedrinho"<?php if($show['curso_cidade']=='Doutor Pedrinho')echo 'selected'; ?>>Doutor Pedrinho</option>
							<option value="Entre Rios"<?php if($show['curso_cidade']=='Entre Rios')echo 'selected'; ?>>Entre Rios</option>
							<option value="Ermo"<?php if($show['curso_cidade']=='Ermo')echo 'selected'; ?>>Ermo</option>
							<option value="Erval Velho"<?php if($show['curso_cidade']=='Erval Velho')echo 'selected'; ?>>Erval Velho</option>
							<option value="Faxinal dos Guedes"<?php if($show['curso_cidade']=='Faxinal dos Guedes')echo 'selected'; ?>>Faxinal dos Guedes</option>
							<option value="Flor do Sertão"<?php if($show['curso_cidade']=='Flor do Sertão')echo 'selected'; ?>>Flor do Sertão</option>
							<option value="Florianópolis"<?php if($show['curso_cidade']=='Florianópolis')echo 'selected'; ?>>Florianópolis</option>
							<option value="Formosa do Sul"<?php if($show['curso_cidade']=='Formosa do Sul')echo 'selected'; ?>>Formosa do Sul</option>
							<option value="Forquilhinha"<?php if($show['curso_cidade']=='Forquilhinha')echo 'selected'; ?>>Forquilhinha</option>
							<option value="Fraiburgo"<?php if($show['curso_cidade']=='Fraiburgo')echo 'selected'; ?>>Fraiburgo</option>
							<option value="Frei Rogério"<?php if($show['curso_cidade']=='Frei Rogério')echo 'selected'; ?>>Frei Rogério</option>
							<option value="Galvão"<?php if($show['curso_cidade']=='Galvão')echo 'selected'; ?>>Galvão</option>
							<option value="Garopaba"<?php if($show['curso_cidade']=='Garopaba')echo 'selected'; ?>>Garopaba</option>
							<option value="Garuva"<?php if($show['curso_cidade']=='Garuva')echo 'selected'; ?>>Garuva</option>
							<option value="Gaspar"<?php if($show['curso_cidade']=='Gaspar')echo 'selected'; ?>>Gaspar</option>
							<option value="Governador Celso Ramos"<?php if($show['curso_cidade']=='Governador Celso Ramos')echo 'selected'; ?>>Governador Celso Ramos</option>
							<option value="Grão Pará"<?php if($show['curso_cidade']=='Grão Pará')echo 'selected'; ?>>Grão Pará</option>
							<option value="Gravatal"<?php if($show['curso_cidade']=='Gravatal')echo 'selected'; ?>>Gravatal</option>
							<option value="Guabiruba"<?php if($show['curso_cidade']=='Guabiruba')echo 'selected'; ?>>Guabiruba</option>
							<option value="Guaraciaba"<?php if($show['curso_cidade']=='Guaraciaba')echo 'selected'; ?>>Guaraciaba</option>
							<option value="Guaramirim"<?php if($show['curso_cidade']=='Guaramirim')echo 'selected'; ?>>Guaramirim</option>
							<option value="Guarujá do Sul"<?php if($show['curso_cidade']=='Guarujá do Sul')echo 'selected'; ?>>Guarujá do Sul</option>
							<option value="Guatambú"<?php if($show['curso_cidade']=='Guatambú')echo 'selected'; ?>>Guatambú</option>
							<option value="Herval d`Oeste"<?php if($show['curso_cidade']=='Herval d`Oeste')echo 'selected'; ?>>Herval d`Oeste</option>
							<option value="Ibiam"<?php if($show['curso_cidade']=='Ibiam')echo 'selected'; ?>>Ibiam</option>
							<option value="Ibicaré"<?php if($show['curso_cidade']=='Ibicaré')echo 'selected'; ?>>Ibicaré</option>
							<option value="Ibirama"<?php if($show['curso_cidade']=='Ibirama')echo 'selected'; ?>>Ibirama</option>
							<option value="Içara"<?php if($show['curso_cidade']=='Içara')echo 'selected'; ?>>Içara</option>
							<option value="Ilhota"<?php if($show['curso_cidade']=='Ilhota')echo 'selected'; ?>>Ilhota</option>
							<option value="Imaruí"<?php if($show['curso_cidade']=='Imaruí')echo 'selected'; ?>>Imaruí</option>
							<option value="Imbituba"<?php if($show['curso_cidade']=='Imbituba')echo 'selected'; ?>>Imbituba</option>
							<option value="Imbuia"<?php if($show['curso_cidade']=='Imbuia')echo 'selected'; ?>>Imbuia</option>
							<option value="Indaial"<?php if($show['curso_cidade']=='Indaial')echo 'selected'; ?>>Indaial</option>
							<option value="Iomerê"<?php if($show['curso_cidade']=='Iomerê')echo 'selected'; ?>>Iomerê</option>
							<option value="Ipira"<?php if($show['curso_cidade']=='Ipira')echo 'selected'; ?>>Ipira</option>
							<option value="Iporã do Oeste"<?php if($show['curso_cidade']=='Iporã do Oeste')echo 'selected'; ?>>Iporã do Oeste</option>
							<option value="Ipuaçu"<?php if($show['curso_cidade']=='Ipuaçu')echo 'selected'; ?>>Ipuaçu</option>
							<option value="Ipumirim"<?php if($show['curso_cidade']=='Ipumirim<')echo 'selected'; ?>>Ipumirim</option>
							<option value="Iraceminha"<?php if($show['curso_cidade']=='Iraceminha')echo 'selected'; ?>>Iraceminha</option>
							<option value="Irani"<?php if($show['curso_cidade']=='Irani')echo 'selected'; ?>>Irani</option>
							<option value="Irati"<?php if($show['curso_cidade']=='Irati')echo 'selected'; ?>>Irati</option>
							<option value="Irineópolis"<?php if($show['curso_cidade']=='Irineópolis')echo 'selected'; ?>>Irineópolis</option>
							<option value="Itá"<?php if($show['curso_cidade']=='Itá')echo 'selected'; ?>>Itá</option>
							<option value="Itaiópolis"<?php if($show['curso_cidade']=='Itaiópolis')echo 'selected'; ?>>Itaiópolis</option>
							<option value="Itajaí"<?php if($show['curso_cidade']=='Itajaí')echo 'selected'; ?>>Itajaí</option>
							<option value="Itapema"<?php if($show['curso_cidade']=='Itapema')echo 'selected'; ?>>Itapema</option>
							<option value="Itapiranga"<?php if($show['curso_cidade']=='Itapiranga')echo 'selected'; ?>>Itapiranga</option>
							<option value="Itapoá"<?php if($show['curso_cidade']=='Itapoá')echo 'selected'; ?>>Itapoá</option>
							<option value="Ituporanga"<?php if($show['curso_cidade']=='Ituporanga')echo 'selected'; ?>>Ituporanga</option>
							<option value="Jaborá"<?php if($show['curso_cidade']=='Jaborá')echo 'selected'; ?>>Jaborá</option>
							<option value="Jacinto Machado"<?php if($show['curso_cidade']=='Jacinto Machado')echo 'selected'; ?>>Jacinto Machado</option>
							<option value="Jaguaruna"<?php if($show['curso_cidade']=='Jaguaruna')echo 'selected'; ?>>Jaguaruna</option>
							<option value="Jaraguá do Sul"<?php if($show['curso_cidade']=='Jaraguá do Sul')echo 'selected'; ?>>Jaraguá do Sul</option>
							<option value="Jardinópolis"<?php if($show['curso_cidade']=='Jardinópolis')echo 'selected'; ?>>Jardinópolis</option>
							<option value="Joaçaba"<?php if($show['curso_cidade']=='Joaçaba')echo 'selected'; ?>>Joaçaba</option>
							<option value="Joinville"<?php if($show['curso_cidade']=='Joinville')echo 'selected'; ?>>Joinville</option>
							<option value="José Boiteux"<?php if($show['curso_cidade']=='José Boiteux')echo 'selected'; ?>>José Boiteux</option>
							<option value="Jupiá"<?php if($show['curso_cidade']=='Jupiá')echo 'selected'; ?>>Jupiá</option>
							<option value="Lacerdópolis"<?php if($show['curso_cidade']=='Lacerdópolis')echo 'selected'; ?>>Lacerdópolis</option>
							<option value="Lages"<?php if($show['curso_cidade']=='Lages')echo 'selected'; ?>>Lages</option>
							<option value="Laguna"<?php if($show['curso_cidade']=='Laguna')echo 'selected'; ?>>Laguna</option>
							<option value="Lajeado Grande"<?php if($show['curso_cidade']=='Lajeado Grande')echo 'selected'; ?>>Lajeado Grande</option>
							<option value="Laurentino"<?php if($show['curso_cidade']=='Laurentino')echo 'selected'; ?>>Laurentino</option>
							<option value="Lauro Muller"<?php if($show['curso_cidade']=='Lauro Muller')echo 'selected'; ?>>Lauro Muller</option>
							<option value="Lebon Régis"<?php if($show['curso_cidade']=='Lebon Régis')echo 'selected'; ?>>Lebon Régis</option>
							<option value="Leoberto Leal"<?php if($show['curso_cidade']=='Leoberto Leal')echo 'selected'; ?>>Leoberto Leal</option>
							<option value="Lindóia do Sul"<?php if($show['curso_cidade']=='Lindóia do Sul')echo 'selected'; ?>>Lindóia do Sul</option>
							<option value="Lontras"<?php if($show['curso_cidade']=='Lontras')echo 'selected'; ?>>Lontras</option>
							<option value="Luiz Alves"<?php if($show['curso_cidade']=='Luiz Alves')echo 'selected'; ?>>Luiz Alves</option>
							<option value="Luzerna"<?php if($show['curso_cidade']=='Luzerna')echo 'selected'; ?>>Luzerna</option>
							<option value="Macieira"<?php if($show['curso_cidade']=='Macieira')echo 'selected'; ?>>Macieira</option>
							<option value="Mafra"<?php if($show['curso_cidade']=='Mafra')echo 'selected'; ?>>Mafra</option>
							<option value="Major Gercino"<?php if($show['curso_cidade']=='Major Gercino')echo 'selected'; ?>>Major Gercino</option>
							<option value="Major Vieira"<?php if($show['curso_cidade']=='Major Vieira')echo 'selected'; ?>>Major Vieira</option>
							<option value="Maracajá"<?php if($show['curso_cidade']=='Maracajá')echo 'selected'; ?>>Maracajá</option>
							<option value="Maravilha"<?php if($show['curso_cidade']=='Maravilha')echo 'selected'; ?>>Maravilha</option>
							<option value="Marema"<?php if($show['curso_cidade']=='Marema')echo 'selected'; ?>>Marema</option>
							<option value="Massaranduba"<?php if($show['curso_cidade']=='Massaranduba')echo 'selected'; ?>>Massaranduba</option>
							<option value="Matos Costa"<?php if($show['curso_cidade']=='Matos Costa')echo 'selected'; ?>>Matos Costa</option>
							<option value="Meleiro"<?php if($show['curso_cidade']=='Meleiro')echo 'selected'; ?>>Meleiro</option>
							<option value="Mirim Doce"<?php if($show['curso_cidade']=='Mirim Doce')echo 'selected'; ?>>Mirim Doce</option>
							<option value="Modelo"<?php if($show['curso_cidade']=='Modelo')echo 'selected'; ?>>Modelo</option>
							<option value="Mondaí"<?php if($show['curso_cidade']=='Mondaí')echo 'selected'; ?>>Mondaí</option>
							<option value="Monte Carlo"<?php if($show['curso_cidade']=='Monte Carlo')echo 'selected'; ?>>Monte Carlo</option>
							<option value="Monte Castelo"<?php if($show['curso_cidade']=='Monte Castelo')echo 'selected'; ?>>Monte Castelo</option>
							<option value="Morro da Fumaça"<?php if($show['curso_cidade']=='Morro da Fumaça')echo 'selected'; ?>>Morro da Fumaça</option>
							<option value="Morro Grande"<?php if($show['curso_cidade']=='Morro Grande')echo 'selected'; ?>>Morro Grande</option>
							<option value="Navegantes"<?php if($show['curso_cidade']=='Navegantes')echo 'selected'; ?>>Navegantes</option>
							<option value="Nova Erechim"<?php if($show['curso_cidade']=='Nova Erechim')echo 'selected'; ?>>Nova Erechim</option>
							<option value="Nova Itaberaba"<?php if($show['curso_cidade']=='Nova Itaberaba')echo 'selected'; ?>>Nova Itaberaba</option>
							<option value="Nova Trento"<?php if($show['curso_cidade']=='Nova Trento')echo 'selected'; ?>>Nova Trento</option>
							<option value="Nova Veneza"<?php if($show['curso_cidade']=='Nova Veneza')echo 'selected'; ?>>Nova Veneza</option>
							<option value="Novo Horizonte"<?php if($show['curso_cidade']=='Novo Horizonte')echo 'selected'; ?>>Novo Horizonte</option>
							<option value="Orleans"<?php if($show['curso_cidade']=='Orleans')echo 'selected'; ?>>Orleans</option>
							<option value="Otacílio Costa"<?php if($show['curso_cidade']=='Otacílio Costa')echo 'selected'; ?>>Otacílio Costa</option>
							<option value="Ouro"<?php if($show['curso_cidade']=='Ouro')echo 'selected'; ?>>Ouro</option>
							<option value="Ouro Verde"<?php if($show['curso_cidade']=='Ouro Verde')echo 'selected'; ?>>Ouro Verde</option>
							<option value="Paial"<?php if($show['curso_cidade']=='Paial')echo 'selected'; ?>>Paial</option>
							<option value="Painel"<?php if($show['curso_cidade']=='Painel')echo 'selected'; ?>>Painel</option>
							<option value="Palhoça"<?php if($show['curso_cidade']=='Palhoça')echo 'selected'; ?>>Palhoça</option>
							<option value="Palma Sola"<?php if($show['curso_cidade']=='Palma Sola')echo 'selected'; ?>>Palma Sola</option>
							<option value="Palmeira"<?php if($show['curso_cidade']=='Palmeira')echo 'selected'; ?>>Palmeira</option>
							<option value="Palmitos"<?php if($show['curso_cidade']=='Palmitos')echo 'selected'; ?>>Palmitos</option>
							<option value="Papanduva"<?php if($show['curso_cidade']=='Papanduvaa')echo 'selected'; ?>>Papanduva</option>
							<option value="Paraíso"<?php if($show['curso_cidade']=='Paraísoa')echo 'selected'; ?>>Paraíso</option>
							<option value="Passo de Torres"<?php if($show['curso_cidade']=='Passo de Torres')echo 'selected'; ?>>Passo de Torres</option>
							<option value="Passos Maia"<?php if($show['curso_cidade']=='Passos Maia')echo 'selected'; ?>>Passos Maia</option>
							<option value="Paulo Lopes"<?php if($show['curso_cidade']=='Paulo Lopes')echo 'selected'; ?>>Paulo Lopes</option>
							<option value="Pedras Grandes"<?php if($show['curso_cidade']=='Pedras Grandes')echo 'selected'; ?>>Pedras Grandes</option>
							<option value="Penha"<?php if($show['curso_cidade']=='Penha')echo 'selected'; ?>>Penha</option>
							<option value="Peritiba"<?php if($show['curso_cidade']=='Peritiba')echo 'selected'; ?>>Peritiba</option>
							<option value="Petrolândia"<?php if($show['curso_cidade']=='Petrolândia')echo 'selected'; ?>>Petrolândia</option>
							<option value="Piçarras"<?php if($show['curso_cidade']=='Piçarras')echo 'selected'; ?>>Piçarras</option>
							<option value="Pinhalzinho"<?php if($show['curso_cidade']=='Pinhalzinho')echo 'selected'; ?>>Pinhalzinho</option>
							<option value="Pinheiro Preto"<?php if($show['curso_cidade']=='Pinheiro Preto')echo 'selected'; ?>>Pinheiro Preto</option>
							<option value="Piratuba"<?php if($show['curso_cidade']=='Piratuba')echo 'selected'; ?>>Piratuba</option>
							<option value="Planalto Alegre"<?php if($show['curso_cidade']=='Planalto Alegre')echo 'selected'; ?>>Planalto Alegre</option>
							<option value="Pomerode"<?php if($show['curso_cidade']=='Pomerode')echo 'selected'; ?>>Pomerode</option>
							<option value="Ponte Alta"<?php if($show['curso_cidade']=='Ponte Alta')echo 'selected'; ?>>Ponte Alta</option>
							<option value="Ponte Alta do Norte"<?php if($show['curso_cidade']=='Ponte Alta do Norte')echo 'selected'; ?>>Ponte Alta do Norte</option>
							<option value="Ponte Serrada"<?php if($show['curso_cidade']=='Ponte Serrada')echo 'selected'; ?>>Ponte Serrada</option>
							<option value="Porto Belo"<?php if($show['curso_cidade']=='Porto Belo')echo 'selected'; ?>>Porto Belo</option>
							<option value="Porto União"<?php if($show['curso_cidade']=='Porto União')echo 'selected'; ?>>Porto União</option>
							<option value="Pouso Redondo"<?php if($show['curso_cidade']=='Pouso Redondo')echo 'selected'; ?>>Pouso Redondo</option>
							<option value="Praia Grande"<?php if($show['curso_cidade']=='Praia Grande')echo 'selected'; ?>>Praia Grande</option>
							<option value="Presidente Castelo Branco"<?php if($show['curso_cidade']=='Presidente Castelo Branco')echo 'selected'; ?>>Presidente Castelo Branco</option>
							<option value="Presidente Getúlio"<?php if($show['curso_cidade']=='Presidente Getúlio')echo 'selected'; ?>>Presidente Getúlio</option>
							<option value="Presidente Nereu"<?php if($show['curso_cidade']=='Presidente Nereu')echo 'selected'; ?>>Presidente Nereu</option>
							<option value="Princesa"<?php if($show['curso_cidade']=='Princesa')echo 'selected'; ?>>Princesa</option>
							<option value="4214201"<?php if($show['curso_cidade']=='Quilombo')echo 'selected'; ?>>Quilombo</option>
							<option value="Quilombo"<?php if($show['curso_cidade']=='Rancho Queimado')echo 'selected'; ?>>Rancho Queimado</option>
							<option value="Rio das Antas"<?php if($show['curso_cidade']=='Rio das Antas')echo 'selected'; ?>>Rio das Antas</option>
							<option value="Rio do Campo"<?php if($show['curso_cidade']=='Rio do Campo')echo 'selected'; ?>>Rio do Campo</option>
							<option value="Rio do Oeste"<?php if($show['curso_cidade']=='Rio do Oeste')echo 'selected'; ?>>Rio do Oeste</option>
							<option value="Rio dos Cedros"<?php if($show['curso_cidade']=='Rio dos Cedros')echo 'selected'; ?>>Rio dos Cedros</option>
							<option value="Rio do Sul"<?php if($show['curso_cidade']=='Rio do Sul')echo 'selected'; ?>>Rio do Sul</option>
							<option value="Rio Fortuna"<?php if($show['curso_cidade']=='Rio Fortuna')echo 'selected'; ?>>Rio Fortuna</option>
							<option value="Rio Negrinho"<?php if($show['curso_cidade']=='Rio Negrinho')echo 'selected'; ?>>Rio Negrinho</option>
							<option value="Rio Rufino"<?php if($show['curso_cidade']=='Rio Rufino')echo 'selected'; ?>>Rio Rufino</option>
							<option value="Riqueza"<?php if($show['curso_cidade']=='Riqueza')echo 'selected'; ?>>Riqueza</option>
							<option value="Rodeio"<?php if($show['curso_cidade']=='Rodeio')echo 'selected'; ?>>Rodeio</option>
							<option value="Romelândia"<?php if($show['curso_cidade']=='Romelândia')echo 'selected'; ?>>Romelândia</option>
							<option value="Salete"<?php if($show['curso_cidade']=='Salete')echo 'selected'; ?>>Salete</option>
							<option value="Saltinho"<?php if($show['curso_cidade']=='Saltinho')echo 'selected'; ?>>Saltinho</option>
							<option value="Salto Veloso"<?php if($show['curso_cidade']=='Salto Veloso')echo 'selected'; ?>>Salto Veloso</option>
							<option value="Sangão"<?php if($show['curso_cidade']=='Sangão')echo 'selected'; ?>>Sangão</option>
							<option value="Santa Cecília"<?php if($show['curso_cidade']=='Santa Cecília')echo 'selected'; ?>>Santa Cecília</option>
							<option value="Santa Helena"<?php if($show['curso_cidade']=='Santa Helena')echo 'selected'; ?>>Santa Helena</option>
							<option value="Santa Rosa de Lima"<?php if($show['curso_cidade']=='Santa Rosa de Lima')echo 'selected'; ?>>Santa Rosa de Lima</option>
							<option value="Santa Rosa do Sul"<?php if($show['curso_cidade']=='Santa Rosa do Sul')echo 'selected'; ?>>Santa Rosa do Sul</option>
							<option value="Santa Terezinha"<?php if($show['curso_cidade']=='Santa Terezinha')echo 'selected'; ?>>Santa Terezinha</option>
							<option value="Santa Terezinha do Progresso"<?php if($show['curso_cidade']=='Santa Terezinha do Progresso')echo 'selected'; ?>>Santa Terezinha do Progresso</option>
							<option value="Santiago do Sul"<?php if($show['curso_cidade']=='Santiago do Sul')echo 'selected'; ?>>Santiago do Sul</option>
							<option value="Santo Amaro da Imperatriz"<?php if($show['curso_cidade']=='Santo Amaro da Imperatriz')echo 'selected'; ?>>Santo Amaro da Imperatriz</option>
							<option value="São Bento do Sul"<?php if($show['curso_cidade']=='São Bento do Sul')echo 'selected'; ?>>São Bento do Sul</option>
							<option value="São Bernardino"<?php if($show['curso_cidade']=='São Bernardino')echo 'selected'; ?>>São Bernardino</option>
							<option value="São Bonifácio"<?php if($show['curso_cidade']=='São Bonifácio')echo 'selected'; ?>>São Bonifácio</option>
							<option value="São Carlos"<?php if($show['curso_cidade']=='São Carlos')echo 'selected'; ?>>São Carlos</option>
							<option value="São Cristovão do Sul"<?php if($show['curso_cidade']=='São Cristovão do Sul')echo 'selected'; ?>>São Cristovão do Sul</option>
							<option value="São Domingos"<?php if($show['curso_cidade']=='São Domingos')echo 'selected'; ?>>São Domingos</option>
							<option value="São Francisco do Sul"<?php if($show['curso_cidade']=='São Francisco do Sul')echo 'selected'; ?>>São Francisco do Sul</option>
							<option value="São João Batista"<?php if($show['curso_cidade']=='São João Batista')echo 'selected'; ?>>São João Batista</option>
							<option value="São João do Itaperiú"<?php if($show['curso_cidade']=='São João do Itaperiú')echo 'selected'; ?>>São João do Itaperiú</option>
							<option value="São João do Oeste"<?php if($show['curso_cidade']=='São João do Oeste')echo 'selected'; ?>>São João do Oeste</option>
							<option value="São João do Sul"<?php if($show['curso_cidade']=='São João do Sul')echo 'selected'; ?>>São João do Sul</option>
							<option value="São Joaquim"<?php if($show['curso_cidade']=='São Joaquim')echo 'selected'; ?>>São Joaquim</option>
							<option value="São José"<?php if($show['curso_cidade']=='São José')echo 'selected'; ?>>São José</option>
							<option value="São José do Cedro"<?php if($show['curso_cidade']=='São José do Cedro')echo 'selected'; ?>>São José do Cedro</option>
							<option value="São José do Cerrito"<?php if($show['curso_cidade']=='São José do Cerrito')echo 'selected'; ?>>São José do Cerrito</option>
							<option value="São Lourenço do Oeste"<?php if($show['curso_cidade']=='São Lourenço do Oeste')echo 'selected'; ?>>São Lourenço do Oeste</option>
							<option value="São Ludgero"<?php if($show['curso_cidade']=='São Ludgero')echo 'selected'; ?>>São Ludgero</option>
							<option value="São Martinho"<?php if($show['curso_cidade']=='São Martinho')echo 'selected'; ?>>São Martinho</option>
							<option value="São Miguel da Boa Vista"<?php if($show['curso_cidade']=='São Miguel da Boa Vista')echo 'selected'; ?>>São Miguel da Boa Vista</option>
							<option value="São Miguel do Oeste"<?php if($show['curso_cidade']=='São Miguel do Oeste')echo 'selected'; ?>>São Miguel do Oeste</option>
							<option value="São Pedro de Alcântara"<?php if($show['curso_cidade']=='São Pedro de Alcântara')echo 'selected'; ?>>São Pedro de Alcântara</option>
							<option value="Saudades"<?php if($show['curso_cidade']=='Saudades')echo 'selected'; ?>>Saudades</option>
							<option value="Schroeder"<?php if($show['curso_cidade']=='Schroeder')echo 'selected'; ?>>Schroeder</option>
							<option value="Seara"<?php if($show['curso_cidade']=='Seara')echo 'selected'; ?>>Seara</option>
							<option value="Serra Alta"<?php if($show['curso_cidade']=='Serra Alta')echo 'selected'; ?>>Serra Alta</option>
							<option value="Siderópolis"<?php if($show['curso_cidade']=='Siderópolis')echo 'selected'; ?>>Siderópolis</option>
							<option value="Sombrio"<?php if($show['curso_cidade']=='Sombrio')echo 'selected'; ?>>Sombrio</option>
							<option value="Sul Brasil"<?php if($show['curso_cidade']=='Sul Brasil')echo 'selected'; ?>>Sul Brasil</option>
							<option value="Taió"<?php if($show['curso_cidade']=='Taió')echo 'selected'; ?>>Taió</option>
							<option value="Tangará"<?php if($show['curso_cidade']=='Tangará')echo 'selected'; ?>>Tangará</option>
							<option value="Tigrinhos"<?php if($show['curso_cidade']=='Tigrinhos')echo 'selected'; ?>>Tigrinhos</option>
							<option value="Tijucas"<?php if($show['curso_cidade']=='Tijucas')echo 'selected'; ?>>Tijucas</option>
							<option value="Timbé do Sul"<?php if($show['curso_cidade']=='Timbé do Sul')echo 'selected'; ?>>Timbé do Sul</option>
							<option value="Timbó"<?php if($show['curso_cidade']=='Timbó')echo 'selected'; ?>>Timbó</option>
							<option value="Timbó Grande"<?php if($show['curso_cidade']=='Timbó Grande')echo 'selected'; ?>>Timbó Grande</option>
							<option value="Três Barras"<?php if($show['curso_cidade']=='Três Barras')echo 'selected'; ?>>Três Barras</option>
							<option value="Treviso"<?php if($show['curso_cidade']=='Treviso')echo 'selected'; ?>>Treviso</option>
							<option value="Treze de Maio"<?php if($show['curso_cidade']=='Treze de Maio')echo 'selected'; ?>>Treze de Maio</option>
							<option value="Treze Tílias"<?php if($show['curso_cidade']=='Treze Tílias')echo 'selected'; ?>>Treze Tílias</option>
							<option value="Trombudo Central"<?php if($show['curso_cidade']=='Trombudo Central')echo 'selected'; ?>>Trombudo Central</option>
							<option value="Tubarão"<?php if($show['curso_cidade']=='Tubarão')echo 'selected'; ?>>Tubarão</option>
							<option value="Tunápolis"<?php if($show['curso_cidade']=='Tunápolis')echo 'selected'; ?>>Tunápolis</option>
							<option value="Turvo"<?php if($show['curso_cidade']=='Turvo')echo 'selected'; ?>>Turvo</option>
							<option value="União do Oeste"<?php if($show['curso_cidade']=='União do Oeste')echo 'selected'; ?>>União do Oeste</option>
							<option value="Urubici"<?php if($show['curso_cidade']=='Urubici')echo 'selected'; ?>>Urubici</option>
							<option value="Urupema"<?php if($show['curso_cidade']=='Urupema')echo 'selected'; ?>>Urupema</option>
							<option value="Urussanga"<?php if($show['curso_cidade']=='Urussanga')echo 'selected'; ?>>Urussanga</option>
							<option value="Vargeão"<?php if($show['curso_cidade']=='Vargeão')echo 'selected'; ?>>Vargeão</option>
							<option value="Vargem"<?php if($show['curso_cidade']=='Vargem')echo 'selected'; ?>>Vargem</option>
							<option value="Vargem Bonita"<?php if($show['curso_cidade']=='Vargem Bonita')echo 'selected'; ?>>Vargem Bonita</option>
							<option value="Vidal Ramos"<?php if($show['curso_cidade']=='Vidal Ramos')echo 'selected'; ?>>Vidal Ramos</option>
							<option value="Videira"<?php if($show['curso_cidade']=='Videira')echo 'selected'; ?>>Videira</option>
							<option value="Vitor Meireles"<?php if($show['curso_cidade']=='Vitor Meireles')echo 'selected'; ?>>Vitor Meireles</option>
							<option value="Witmarsum"<?php if($show['curso_cidade']=='Witmarsuma')echo 'selected'; ?>>Witmarsum</option>
							<option value="Xanxerê"<?php if($show['curso_cidade']=='Xanxerê')echo 'selected'; ?>>Xanxerê</option>
							<option value="Xavantina"<?php if($show['curso_cidade']=='Xavantina')echo 'selected'; ?>>Xavantina</option>
							<option value="Xaxim"<?php if($show['curso_cidade']=='Xaxim')echo 'selected'; ?>>Xaxim</option>
							<option value="Zortéa"<?php if($show['curso_cidade']=='Zortéa')echo 'selected'; ?>>Zortéa</option>
						</select>
                        <textarea style="width:100%;border-radius:5px;" name="desc" value=""><?php echo $show['curso_desc'];?></textarea>               
                        <input type="submit" class="btn btn-primary"name="enviar" value="Atualizar"/><br>

                      </form>
                    </div>
                  </div>
                </div><!-- ACABA MODAL EDITAR -->
		<?php 
	}
