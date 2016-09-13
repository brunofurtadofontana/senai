<?php 
	$dado=mysql_connect("localhost","root","")or die(mysql_error());
	$ok=mysql_select_db("aprendizagem",$dado)or die(mysql_error());
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
?>