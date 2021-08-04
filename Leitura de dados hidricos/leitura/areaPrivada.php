<?php
	error_reporting(0);
	session_start();

	if(!isset($_SESSION['id_usuario']))
	{
		header("location: index.php");
		exit;
		
	}
	include("conexao.php"); 
	
$test = "SELECT `nome` FROM `tb_usuarios` WHERE`id_usuario` =" .$_SESSION['id_usuario'];
$teste     = $mysqli-> query($test) or die($mysqli->error);


?>
<script src="script/alerta.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="CSS/icone.png">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <title>Bem-vindo</title>
  	<link rel="stylesheet" href="CSS/estilo1.css">
</head>
<body >
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; </a>
  <a href="areaPrivada.php">Principal</a>
  <a href="consumo.php">Consumo</a>
  <a href="fatura.php">Fatura</a>
  <a href="relatorios.php">Relatórios</a>
  <a href="sair.php">Sair</a>
</div>
<span style="	font-size:30px;
				cursor:pointer;
				right: 0.5%;
				position: absolute;" onclick="openNav()">&#9776; Menu</span>
	<div id="corpo-form-cad"> 
	<h1>Bem-vindo</h1>
	<h1><?php while($dado = $teste->fetch_array()) { ?>
    <tr>
      <td><?php echo $dado['nome']; ?></td>
    </tr>
    <?php    } ?>
	</h1>
	</div>
	 </div>
<div id="corpo-form"> 
	<h1>Principais noticias: </h1>
	</div>
	<div id="coluna">
	<div id="corpo-noticia"> 
	
	<div id="corpo-imagem">
	<img src="CSS/imagem3.jpg" width="196">
	</div>
	<div id="corpo-texto"> 
	 <b style =  "font-size: 16px;">Situação dos Mananciais</b><br>
	<style>font-size: 10px; text-align: justify; </style>Veja a situação dos mananciais, em tempo real.
	<a style =  "font-size: 12px;width:196;" href="http://mananciais.sabesp.com.br/Situacao" target="_blank">http://mananciais.sabesp.com.br/Situacao</a>
	
	</div>
	</div>
	
	<div style =  "margin-top: -8%;" id="corpo-noticia"> 

	<div id="corpo-imagem">
	<img src="CSS/imagem2.jpg" width="196">
	</div>
	<div id="corpo-texto"> 
	 <b style =  "font-size: 16px;">Nível de água caiu em todas as represas de SP, diz Sabesp</b><br>
	<style>font-size: 10px; text-align: justify; </style>A Sabesp informou que o nível de água recuou em todos os reservatórios de São Paulo
	<a style =  "font-size: 12px;" href="https://exame.com/brasil/nivel-de-agua-caiu-em-todas-as-represas-de-sp-diz-sabesp/" target="_blank">https://exame.com/brasil/nivel-de-agua-caiu-em-todas-as-represas-de-sp-diz-sabesp/</a>
	
	</div>
	</div>
	</div>
	<div id="coluna">
	<div id="corpo-noticia"> 
	
	<div id="corpo-imagem">
	<img src="CSS/imagem1.jpg" width="196">
	</div>
	<div id="corpo-texto"> 
	 <b style =  "font-size: 16px;">Situação dos Mananciais</b><br>
	<style>font-size: 10px; text-align: justify; </style>Veja a situação dos mananciais, em tempo real.
	<a  style =  "font-size: 12px;" href="http://mananciais.sabesp.com.br/Situacao" target="_blank">http://mananciais.sabesp.com.br/Situacao</a>
	
	</div>
	</div>
	
	<div style =  "margin-top: -8%;" id="corpo-noticia"> 

	<div id="corpo-imagem">
	<img src="CSS/imagem2.jpg" width="196">
	</div>
	<div id="corpo-texto"> 
	 <b style =  "font-size: 16px;">Nível de água caiu em todas as represas de SP, diz Sabesp</b><br>
	<style>font-size: 10px; text-align: justify; </style>A Sabesp informou que o nível de água recuou em todos os reservatórios de São Paulo
	<a style =  "font-size: 12px;" href="https://exame.com/brasil/nivel-de-agua-caiu-em-todas-as-represas-de-sp-diz-sabesp/" target="_blank">https://exame.com/brasil/nivel-de-agua-caiu-em-todas-as-represas-de-sp-diz-sabesp/</a>
	
	</div>
	</div>
	</div>
	<div id="coluna">
	<div id="corpo-noticia"> 
	
	<div id="corpo-imagem">
	<img src="CSS/imagem1.jpg" width="196">
	</div>
	<div id="corpo-texto"> 
	 <b style =  "font-size: 16px;">Situação dos Mananciais</b><br>
	<style>font-size: 10px; text-align: justify; </style>Veja a situação dos mananciais, em tempo real.
	<a  style =  "font-size: 12px;" href="http://mananciais.sabesp.com.br/Situacao" target="_blank">http://mananciais.sabesp.com.br/Situacao</a>
	
	</div>
	</div>
	
	<div style =  "margin-top: -8%;" id="corpo-noticia"> 

	<div id="corpo-imagem">
	<img src="CSS/imagem2.jpg" width="196">
	</div>
	<div id="corpo-texto"> 
	 <b style =  "font-size: 16px;">Nível de água caiu em todas as represas de SP, diz Sabesp</b><br>
	<style>font-size: 10px; text-align: justify; </style>A Sabesp informou que o nível de água recuou em todos os reservatórios de São Paulo
	<a style =  "font-size: 12px;" href="https://exame.com/brasil/nivel-de-agua-caiu-em-todas-as-represas-de-sp-diz-sabesp/" target="_blank">https://exame.com/brasil/nivel-de-agua-caiu-em-todas-as-represas-de-sp-diz-sabesp/</a>
	
	</div>
	</div>
	</div>
	
</body>
</html>

