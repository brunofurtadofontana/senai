<?php 
    require_once("files/conect.php");
    session_cache_limiter();
    session_cache_expire(1);
    session_start();  
    include "files/verifica.php";
?>
<html>	
	<head>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/dash.css" rel="stylesheet">
      <link href="css/simple-sidebar.css" rel="stylesheet">

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
	</head>
	<body>
    <div id="wrapper">
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background:#115c35;">
      <div class="container-fluid">
        <div class="navbar-header" >
          <a class="navbar-brand"  style="font-weight:bold;float:left;" href="#"><img src="images/lg_senai.png" width="150"/></a>
          <div style="position:absolute;right:0px;">
            <a class="navbar-brand"  style="font-weight:bold;cursor:pointer;" href="#"><?php $codUsuario = $_SESSION['COD_USUARIO']; 
                                                                                            echo $sessao = $_SESSION['LOGIN_USUARIO'];?></a>
            <a class="navbar-brand" style="font-weight:bold;cursor:pointer;" href="files/logout.php">Sair</a>
          </div>
        </div>
      </div>
    </nav>
    <?php

      $res = mysql_query("SELECT adm_privilegio,adm_cidade FROM adm WHERE adm_login = '$sessao' ")or die(mysql_error());
      $resUser = mysql_query("SELECT usu_privilegio,usu_cidade FROM usuario WHERE usu_login = '$sessao' ")or die(mysql_error());
      $dat = mysql_fetch_assoc($res);
      $datUser = mysql_fetch_assoc($resUser);
      $privUser = $datUser['usu_privilegio'];
      $priv=$dat['adm_privilegio'];
      if($dat['adm_privilegio'] == 'ADM'){ ?>
       <?php $info = "init.php"; //quanto estiver logado como adm vai para pagina inicial ?>
         <div id="sidebar-wrapper" style="font-size:18px;">
          <ul class="sidebar-nav">
            <li><a href="?go=init">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="?go=cadastro">Cadastrar Aluno</a></li>
            <li><a href="?go=buscar">Buscar Alunos / Relatórios</a></li>
            <li><a href="?go=cursos">Adicionar Cursos</a></li>
            <li><a href="?go=bairro">Cadastrar bairros de <?php echo $dat['adm_cidade']?> </a></li>
            <li><a href="?go=adduser">Adicionar Usuário</a></li>
          </ul>
     </div>
  <?php
      }else if($datUser['usu_privilegio'] == 'USERSENAI'){ ?>
         <?php $info = "init.php"; //quanto estiver logado como adm vai para pagina inicial ?>
          <div id="sidebar-wrapper" style="font-size:18px;">
          <ul class="sidebar-nav">
            <li><a href="?go=init">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="?go=cadastro">Cadastrar Aluno</a></li>
            <li><a href="?go=buscar">Buscar Alunos / Relatórios</a></li>
            <li><a href="?go=cursos">Adicionar Cursos</a></li>
            <li><a href="?go=addusersenai">Adicionar Usuário</a></li>
          </ul>
     </div>
  <?php }
      else{ ?>
        <div id="sidebar-wrapper" style="font-size:18px;">
          <?php $info = "buscar.php"; //quando estiver logado como comum vai para página buscar.php  ?>
          <ul class="sidebar-nav">
            <!--<li><a href="?go=init">HOME<span class="sr-only">(current)</span></a></li>-->
            <li><a href="?go=buscar">BUSCAR ALUNOS / RELATÓRIOS</a></li>
            <!--<li><a class="block" href="">Cadastrar Aluno</a></li>
            <li><a href="?go=buscar">Buscar Alunos</a></li>
            <li><a href="">Adicionar Usuário</a></li> -->
          </ul>
         </div>
    <?php
      }
    ?>
        <a href="#menu-toggle" class="btn btn-default" style="font-size:18px;color:#fff;background:black;border:none;border-radius:0px;"id="menu-toggle">Menu</a>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
            <?php 
              if (isset($_GET['go'])) {
                    $arquivo = 'files/' . str_replace(array('.', ':', '/'), '', $_GET['go']) . '.php';
                    if (file_exists($arquivo))
                        include $arquivo;
                    else {
                        echo "<h1>Pagina não encontrada.</h1>";
                    }
                } else {
                    include 'files/'.$info;
                }
            
                
            ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
      <script src="js/bootstrap.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
	</body>
</html>