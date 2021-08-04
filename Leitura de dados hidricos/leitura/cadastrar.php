<?php
error_reporting(0);
require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>
<script src="script/alerta.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="CSS/icone.ico">
<html lang="pt-br">
<head>
	<meta charset = "utf-8"/>
	<title>Cadastro</title>
	<link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
	<div id="corpo-form-cad"> 
	<h1>Cadastrar</h1>
	<form method="POST">
		<input type="text" name="nome" placeholder="Nome Completo" maxlength="40" onkeypress="return somenteLetra()">
		<input type="text" name="cpf" placeholder="CPF" maxlength="11" onkeypress="return somenteNumeros()">
		<input type="text" name="cep" placeholder="CEP" maxlength="8" onkeypress="return somenteNumeros()">
		<input type="text" name="num" placeholder="Número e complemento" maxlength="20"onkeypress="return somenteNumerosEletra()">
		<input type="text" name="user" placeholder="Usuário" maxlength="15" style="text-transform: capitalize" id="text" onkeypress="return minusculo()">
		<input type="password" name="senha" placeholder="Senha" maxlength="15" id="text" onkeypress="return minusculo()">
		<input type="password" name="confSenha"   placeholder="Confirmar Senha" maxlength="15" id="text" onkeypress="return minusculo()">
		<input type="submit" value="Cadastrar">
		<input type="button"value="Voltar"  onclick="location.href='index.php'">
	</form>
	</div>
<?php
if(isset($_POST['nome']))
{
	$nome = addslashes($_POST['nome']);
	$cpf = addslashes($_POST['cpf']);
	$cep = addslashes($_POST['cep']);
	$num = addslashes($_POST['num']);
	$user = addslashes($_POST['user']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	
	if(!empty($nome) && !empty($cpf) && !empty($cep) && !empty($num) && !empty($user) && !empty($senha) && !empty($confirmarSenha)) {
		$u ->conectar("bd_tcc","127.0.0.1","root","");
		if($u->$msgErro == "" ){ 
			if($senha == $confirmarSenha){
				if($u->cadastrar($nome, $cpf, $cep, $num, $user, $senha)){
					?>
					<div id="msg-sucesso">
					Cadastrado com sucesso!  Acesse para entrar!
					</div>
					<?php
				}
				else
				{
					?>
					<div class="msg-erro">
					Usuário já cadastrado!
					</div>
					<?php
				}
			}	
			else
			{
					?>
					<div class="msg-erro">
					Senha e Confirmar senha não correspondem!
					</div>
					<?php
			}
		}
		else
		{
					?>
					<div class="msg-erro">
					<?php
					echo "Erro: ". $u->msgErro;
					?>
					</div>
					<?php
			
		}
		
	}
	else{
			?>
			<div class="msg-erro">
			Preencha todos os canpos
			</div>
			<?php

	}
}


?>
</body>
</html>