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
	  $('input.limited').on('change', function(){
	    if($(this).siblings(':checked').length >= MAX_SELECT ){
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
<div class="container-fluid" style="font-size:20px;font-weight:bold;">
<form action="files/trata.php" method="post" >
	<input type="text" class="form-control" name="nome" placeholder="Informe seu nome" required/><br>
	<input type="text" onfocus="(this.type='date')" class="form-control" name="datanasc" placeholder="Data de nascimento" required/><br>
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
		<input type="checkbox" name="area[]" value="metalmecanica" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de Metalmecânica (Curso de Mecânica, Eletromecânica ou Desenho Mecânico)</a><br>
		<input type="checkbox" name="area[]" value="eletrotecnica" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de Eletroeletrônica (Curso de Elétrica)</a><br>
		<input type="checkbox" name="area[]" value="tecnologia" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de Tecnologia da Informação (Curso de suporte e manutenção de computadores ou de Informática)</a><br>
		<input type="checkbox" name="area[]" value="alimentos" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de Alimentos (Curso de Alimentos)</a><br>
		<input type="checkbox" name="area[]" value="gestao" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de Gestão (Curso de Assistente administrativo)</a><br>
		<input type="checkbox" name="area[]" value="pcp" class="limited"><a href="#" data-toggle="tooltip" data-placement="top" title="Descrição rápida do foco do curso em destaque! is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book"> Área de PCP (Curso de planejamento e controle de produção)</a><br>
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