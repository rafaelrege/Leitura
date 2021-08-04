<?php
	error_reporting(0);
	session_start();

	if(!isset($_SESSION['id_usuario']))
	{
		header("location: index.php");
		exit;
		
	}
	include("conexao.php"); 
	
?>
<script src="script/alerta.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="CSS/icone.png">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <title>Consumo</title>
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
				//color: white;
				position: absolute;" onclick="openNav()">&#9776; Menu</span>
	<div id="corpo-form-cad"> 
	<h1>Consumo</h1>
	</div>
	  <div id="corpo-tab-mes"> 
  <?php
  $dataPesquisa = $_POST['data'];
  
  echo "<table border=\"0\">";
  echo "<tr> <th>Litros do Mês</th> <th>Valor em Reais</th> </tr>";
  		if ($dataPesquisa > 0){
			
			$som  = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-" . $dataPesquisa . "-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
			$soma = $mysqli-> query($som) or die($mysqli->error);
		}else{
			$dataAtual =  dataPesquisa;
			$som  = "SELECT sum(litros) as soma FROM tb_leitura WHERE data LIKE '%-" . $dataAtual . "-%'AND `id_usuario` = " .$_SESSION['id_usuario'];
			$soma = $mysqli-> query($som) or die($mysqli->error);
		}
		?>
  <h1><?php while($dado1 = $soma->fetch_array()) { 
  ?>
   <?php echo "<tr>";
   if($dado1['soma']>0){
  echo    	"<td style=\"line-height: 1.5;\">" . $dado1['soma']."L" . "</td>";
  echo		"<td style=\"line-height: 1.5;\">" ;
  $real = $dado1['soma'] * 0.00875; 
 echo "R$".substr($real, 0, -4). "</td>";
   echo  "</tr>";
   }  } ?>
	</h1>
	<?php
	echo "</table>";
	?>
	 </div>
<div id="corpo-form"> 
	<h1>Pesquisar Consumo </h1>
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
	<div id="corpo-tab"> 
	
	<?php		
		if ($_SERVER['REQUEST_METHOD'] == "POST"){
			$dataPesquisa = $_POST['data'];
			$sql = "SELECT * FROM tb_leitura WHERE data LIKE '%-" . $dataPesquisa . "-%' AND `id_usuario` = " .$_SESSION['id_usuario'];
		} 
		
		$stmt = $PDO->prepare($sql);
		$stmt->execute();
		
		echo "<table border=\"0\">";
		
		echo "<tr> <th>Id</th>  <th>Litros</th> <th>Data e hora</th> </tr>";
		
		while ($linha = $stmt->fetch(PDO::FETCH_OBJ)){
		
			$timestamp = strtotime($linha->data);
			$dataTabela = date('d/m/Y H:i:s', $timestamp);
			echo "<tr >";
			echo "<td style=\"line-height: 1.5;\">" . $linha->id . "</td>";
			echo "<td style=\"line-height: 1.5;\">" . $linha->litros . "L". "</td>";
			echo "<td style=\"line-height: 1.5;\">" . $dataTabela . "</td>";		
			echo "</tr>";	
		}
		
		echo "</table>";
			?>
	
			
  

</div>
</body>
</html>

