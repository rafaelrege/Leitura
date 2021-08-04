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
$consulta = "SELECT * FROM `tb_leitura` WHERE `id_usuario` = " .$_SESSION['id_usuario'];
$con      = $mysqli-> query($consulta) or die($mysqli->error);
?>
<script src="script/alerta.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="CSS/icone.png">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <title>Faturas</title>
  	<link rel="stylesheet" href="CSS/estilo1.css">
</head>
<body>

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
	<h1>Faturas</h1>
	</div>
	 
<div id="corpo-form"> 
	<h1>Pesquisar Fatura </h1>
	</div>
	
  <table border="0">
   <div class="container">
	
	<div class="areaPesquisa">
		<form action="" method="POST">
			<select name="data" placeholder="Mês/ano">
			<option value="01">Janeiro</option>
			<option value="02">Fevereiro</option>
			<option value="03">Março</option>
			<option value="04">Abril</option>
			<option value="05">Maio</option>
			<option value="06">Junho</option>
			<option value="07">Julho</option>
			<option value="08">Agosto</option>
			<option value="09">Setembro</option>
			<option value="10">Outubro</option>
			<option value="11">Novembro</option>
			<option value="12">Dezembro</option>
			<input  type ="submit" name="submit" value="Buscar">
			
			</select><br>
			
		</form>
		</table>
		
	</div>
	
	</div>

</body>
</html>

