<?php
	include("conect.php");

	error_reporting(0);

	$nome = htmlspecialchars(trim(strtoupper($_POST['nome'])));
	$datanas = $_POST['datanasc'];
	$dataHoje = date('Y-m-d');
	
	list($ano,$mes,$dia) = explode('-', $datanas);
	$mes = mktime( 0, $mes);

	$idade = $dataHoje - $datanas; 

    if($idade >= 14 && $idade < 24 ){
    	//if($idade==22 && $mes == 12 && $dia >17){
	
	//$idade = htmlspecialchars(trim(strtoupper($_POST['idade'])));
	$cidade = htmlspecialchars(trim($_POST['cidade']));
	$rua = htmlspecialchars(trim(strtoupper($_POST['rua'])));
	$bairro = htmlspecialchars(trim(strtoupper($_POST['bairro'])));
	$foneres = htmlspecialchars(trim(strtoupper($_POST['fone_res'])));
	$fonecom = htmlspecialchars(trim(strtoupper($_POST['fone_com'])));
	$fonecel = htmlspecialchars(trim(strtoupper($_POST['fone_cel'])));
	$serie = htmlspecialchars(trim(strtoupper($_POST['serie'])));
	$area = strtoupper(implode(',',$_POST['area']));
	$interesse = htmlspecialchars(trim(strtoupper($_POST['interesse'])));
	$cursou = htmlspecialchars(trim(strtoupper($_POST['cursou'])));
	$job = htmlspecialchars(trim(strtoupper($_POST['trabalhou'])));
	$data = date("Y-m-d");
	$status = 'DISPONIVEL';
	$res = mysql_query("insert into alunos(aluno_nome,
										   aluno_idade,
										   aluno_dtnasc,
										   aluno_cidade,
										   aluno_rua,
										   aluno_bairro,
										   aluno_grau,
										   aluno_areas,
										   aluno_interesse,
										   aluno_cursou,
										   aluno_trabalhou,
										   aluno_datacadas,
										   aluno_status) VALUES (
										   '$nome',
										   '$idade',
										   '$datanas',
										   '$cidade',
										   '$rua',
										   '$bairro',
										   '$serie',
										   '$area',
										   '$interesse',
										   '$cursou',
										   '$job',
										   '$data',
										   '$status')")or die(mysql_error());

				$data = mysql_query("SELECT aluno_cod FROM alunos WHERE aluno_nome = '$nome' AND aluno_dtnasc = '$datanas' ")or die(mysql_error());
				$show = mysql_fetch_assoc($data);
				$cod = $show['aluno_cod'];

				$res = mysql_query("INSERT INTO telefones(
														  alunos_aluno_cod,
														  telefone_res,
														  telefone_com,
														  telefone_cel)
												VALUES(
														'$cod',
														'$foneres',
														'$fonecom',
														'$fonecel')") or die(mysql_error());
		if(!mysql_error()){
			header("location:../thanks.php?erro=0");
		}
		//}
	}
	else{
		header("Location:../thanks.php?erro=1");
		
	}
?>