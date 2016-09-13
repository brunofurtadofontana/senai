<?php
// Carregando arquivo da classe mpdf
	include("conect.php");
	require_once('../MPDF60/mpdf.php');
	$mpdf = new mPDF('utf-8', 'A4-H'); // Instanciando a classe mpdf
	
	$id = $_GET['id'];
	$arrayDados = array();
	$res = mysql_query("SELECT *FROM alunos JOIN telefones WHERE aluno_cod = '$id' AND alunos_aluno_cod = '$id' ")or die(mysql_error());
	$exibe = mysql_fetch_array($res);
	$nome = $exibe['aluno_nome'];
	$idade = $exibe['aluno_idade'];
	$rua = $exibe['aluno_rua'];
	$bairro = $exibe['aluno_bairro'];
	$foneres = $exibe['telefone_res'];
	$fonecom = $exibe['telefone_com'];
	$fonecel = $exibe['telefone_cel'];
	$grau = $exibe['aluno_grau'];
	$areas = $exibe['aluno_areas'];
	$interesse = $exibe['aluno_interesse'];
	$cursou = $exibe['aluno_cursou'];
	$trab = $exibe['aluno_trabalhou'];
	$datacada = $exibe['aluno_datacadas'];
	$datahoje = date("d-m-Y H:i");
	
	  if($grau<=7) $grau .= "º ANO";
	  else if($grau>7) $grau .= "ª SÉRIE";
	  else echo " ";

      if($interesse=='T')$interesse =" TRABALHAR";
      else $interesse = " BOLSA";

	// Criando o conteudo a ser impresso no arquivo pdf
	$html = "<div style='background:#f2f3f4;width:100%;height:auto;'>
			<div style='text-align:center;width:100%;height:60px;background:#017338;'>
					<img style='margin-top:15px' src='../images/lg_senai.png' width='200'/>
			</div>
			<div style='width:100%;height:auto;font-family:Tahoma;display:table;padding:10px 10px;float:left;'>
				
				<img src='../images/avat.png' width='100' style='float:left;border:2px solid;border-radius:100px;'/>
				<h3 style='color:#115C35; margin-left:20px;margin-top:35px;'> $nome </h3>
				<h3 style='border-bottom:2px solid #ccc;'>DADOS PESSOAIS</h3>
				<h5>IDADE: $idade Anos</h5>
				<h5><b>RUA:</b> $rua</h5>
				<h5>BAIRRO: $bairro</h5>
				<h5>TELEFONE RESIDENCIAL: $foneres</h5>
				<h5>TELEFONE RECADO: $fonecom</h5>
				<h5>TELEFONE CELULAR: $fonecel</h5>
				<h3 style='border-bottom:2px solid #ccc;'>ESCOLARIDADE</h3>
				<h5>ESCOLARIDADE: $grau </h5>
				<h3 style='border-bottom:2px solid #ccc;'>AREAS & INTERESSE</h3>
				<h5>ÁREA DE INTERESSE: $areas</h5>
				<h5>INTERESSE EM: $interesse</h5>
				<h3 style='border-bottom:2px solid #ccc;'>OUTRAS INFORMAÇÃO</h3>
				<h5>JÁ FEZ ALGUM CURSO NO SENAI? $cursou</h5>
				<h5>JÁ TRABALHOU? $trab</h5>
			</div>

	";
	
	$html .="
				<small>Curriculo gerado em: $datahoje </small>	
				<div style='width:100%;height:60px;background:#017338;text-align:center;'>
					<img style='margin-top:15px;' src='../images/lg_senai.png' width='200' />
				</div>
			</div>
			<pagebreak/>
	";
			
		
	
	$mpdf->AddPage();
	$mpdf->SetDisplayMode('fullpage');
	$mpdf->WriteHTML( $html); // Setando html para a classe
	$mpdf->Output( 'CURRICULO-'.$nome.'.pdf', 'I' ); // Setando o nome do arquivo a ser gerado e exibindo o pdf
	
	
?>