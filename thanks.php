<html>
	<header>
		<title>Obrigado por se cadastrar!</title>
		<meta charset="utf-8" />
	</header>
	<style>
		body{
			margin:0 auto;
			padding:0 auto;
			background: #ccc;
			background: url('images/bgparallax.png') 60% 0 fixed;
		}
		h1{
			color:#fff;
			
		}
	</style>
<body>
	<center>
	<?php 
		$erro = $_GET['erro'];
		switch ($erro) {
			case 0:
				echo "<h1 style='margin-top:18%;font-family:Arial;padding:5px 5px;border-radius:5px;background:#008B8B;color:#00CED1;width:90%;height:auto;border:1px solid #00CED1;'> Cadastro realizado com sucesso, Obrigado!</h1>";
				break;
			case 1:
				echo "<h1 style='margin-top:18%;font-family:Arial;padding:5px 5px;border-radius:5px;background:#999;color:#B22222;width:90%;height:auto;border:1px solid #B22222;'>Sua idade não se encaixa na legislação de menor aprendiz. A idade deve estar entre 14 e 24 anos. Infelizmente seu cadastro <b>NÃO</b> foi realizado. Obrigado!</h1>";
				break;
			case 2:
				echo "<h1 style='margin-top:18%;font-family:Arial;padding:5px 5px;border-radius:5px;background:#999;color:#B22222;width:90%;height:auto;border:1px solid #B22222;'>Infelizmente você <b>NÃO CONCORDOU</b> com os nossos termos.</h1>";
				break;
			default:
				echo "<h1 style='margin-top:18%;font-family:Arial;padding:5px 5px;border-radius:5px;background:#999;color:#B22222;width:90%;height:auto;border:1px solid #B22222;'>Algo deu Errado.</h1>";
				break;
		}?>
	</center>
	<footer><center><img src="images/lg_senai.png" width="200"/></center></footer>
</body>
</html>