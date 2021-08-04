<?php
	error_reporting(0);
	session_start();

	if(!isset($_SESSION['id_usuario']))
	{
		header("location: index.php");
		exit;
		
	}
	include("conexao.php"); 
	
$mes01 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-01-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes001  = $mysqli-> query($mes01) or die($mysqli->error);
$mes02 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-02-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes002  = $mysqli-> query($mes02) or die($mysqli->error);
$mes03 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-03-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes003  = $mysqli-> query($mes03) or die($mysqli->error);
$mes04 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-04-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes004  = $mysqli-> query($mes04) or die($mysqli->error);
$mes05 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-05-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes005  = $mysqli-> query($mes05) or die($mysqli->error);
$mes06 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-06-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes006  = $mysqli-> query($mes06) or die($mysqli->error);
$mes07 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-07-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes007  = $mysqli-> query($mes07) or die($mysqli->error);
$mes08 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-08-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes008  = $mysqli-> query($mes08) or die($mysqli->error);
$mes09 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-09-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes009  = $mysqli-> query($mes09) or die($mysqli->error);
$mes10 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-10-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes010  = $mysqli-> query($mes10) or die($mysqli->error);
$mes11 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-11-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes011  = $mysqli-> query($mes11) or die($mysqli->error);
$mes12 = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-12-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
$mes012  = $mysqli-> query($mes12) or die($mysqli->error);


?>
<script src="script/alerta.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="CSS/icone.png">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <title>Relatórios</title>
  	<link rel="stylesheet" href="CSS/estilo1.css">
</head>
<body>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Janeiro",   <?php while($dado01 = $mes001->fetch_array()) { 
     echo $dado01['soma']; 
      } ?> , "blue"],
        ["Fevereiro", <?php while($dado02 = $mes002->fetch_array()) { 
     echo $dado02['soma']; 
      } ?> , "blue"],
        ["Março", <?php while($dado03 = $mes003->fetch_array()) { 
     echo $dado03['soma']; 
      } ?> , "blue"],
        ["Abril", <?php while($dado04 = $mes004->fetch_array()) { 
     echo $dado04['soma']; 
      } ?> , "blue"],
		["Maio", <?php while($dado05 = $mes005->fetch_array()) { 
     echo $dado05['soma']; 
      } ?> , "blue"],
		["Junho", <?php while($dado06 = $mes006->fetch_array()) { 
     echo $dado06['soma']; 
      } ?> , "blue"],
		["Julho",  <?php while($dado07 = $mes007->fetch_array()) { 
     echo $dado07['soma']; 
      } ?> , "blue"],
		["Agosto", <?php while($dado08 = $mes008->fetch_array()) { 
     echo $dado08['soma']; 
      } ?> , "blue"],
		["Setembro", <?php while($dado09 = $mes009->fetch_array()) { 
     echo $dado09['soma']; 
      } ?> , "blue"],
		["Outubro", <?php while($dado10 = $mes010->fetch_array()) { 
     echo $dado10['soma']; 
      } ?> , "blue"],
		["Novembro",  <?php while($dado11 = $mes011->fetch_array()) { 
     echo $dado11['soma']; 
      } ?> , "blue"],
		["Dezembro", <?php while($dado12 = $mes012->fetch_array()) { 
     echo $dado12['soma']; 
      } ?> , "blue"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Grafico do ano",
        width: 1000,
        height: 700,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

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
	<h1>Relatórios</h1>
	</div>
	
	
<div id="corpo-form"> 
	<h1>Seu relatórios do ano </h1>
	</div>
	
	
	<div id="columnchart_values" style="width: auto; height: auto;  justify-content: center; align-items: center; display: flex; flex-direction: row; margin: 3%;"></div>
	
	</div>
</body>
</html>

