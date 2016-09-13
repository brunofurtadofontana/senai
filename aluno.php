<?php 
    require_once("files/conect.php");
   // require_once("files/conect.php");
			$cidadeCursos = $_GET['cidade'];
    		$cidade = $_GET['cidade'];
   			$aleatorio = mt_rand(999,9999999);
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
	<script type="text/javascript">
	function redirect(){
			$('#myModal').modal('show');
			
	}
	$(document).ready(function() {
	  	//$('#sim').click(function(event){ 
   			redirect();
	});
		 
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
	<div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content" style="padding:10px 10px;">
	      <span style="width:100%;height:60px;font-size:25px;font-family:Tahoma;color:#dc0f0f;"><b>Obsevação:</b>  O preenchimento deste formulário não garantirá a matrícula nos Cursos de Aprendizagem Industrial, é apenas um cadastro que poderá ser encaminhado para Indústrias que buscarem candidatos junto ao SENAI/SC.</b></span>
	      <h3>Você concorda com os termos citados acima?</h3>
	      <a href="thanks.php?erro=2" value="nao" id="nao" class="btn btn-danger" />NÃO CONCORDA</a> 	
	      <a href="alunoagrees.php?cidade=<?php echo $cidade; ?>&ok=<?php echo $aleatorio;?>" value="" id="sim" class="btn btn-success" />CONCORDA</a>
	    </div>
	  </div>
	</div>
	<section id="parallaxBar" data-speed="6" data-type="background">
	<header><img src="images/lg_senai.png" width="200"/></header>
	<div class="container" >
		<center><h1><b>Cadastro de Interessados em Cursos de Aprendizagem Indústrial</b> <span>SENAI - SC</span></h1></center>
		

		<hr>
	<div class="container-fluid" style="height:90%;width:100%;font-size:20px;font-weight:bold;">
	
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