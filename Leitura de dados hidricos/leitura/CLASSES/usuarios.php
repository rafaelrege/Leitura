<?php

class Usuario{
	private $PDO;
	public $msgErro = "";
	public function conectar ($nome, $host, $usuario, $senha){
	
	
	try{
		global $PDO;
		$PDO = new PDO("mysql:dbname=".$nome.";host".$host,$usuario, $senha);
	} catch (PDOException $e) {
		$msgErro = $e-> getMessage();
	}
	}
	
	public function cadastrar ($nome, $cpf, $cep, $num, $user, $senha){
		global $PDO;
		$sql = $PDO -> prepare("SELECT id_usuario FROM tb_usuarios WHERE usuario = :u");
		$sql->bindValue(":u",$user);
		$sql->execute();
	if($sql ->rowCount() > 0) {
		return false;
	}
	else{
		$sql = $PDO->prepare("INSERT INTO tb_usuarios (nome, cpf, cep, numero_complemento, usuario, senha) VALUES (:n, :c, :e, :m, :u, :s)");
		$sql->bindValue(":n",$nome);
		$sql->bindValue(":c",$cpf);
		$sql->bindValue(":e",$cep);
		$sql->bindValue(":m",$num);
		$sql->bindValue(":u",$user);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		return true;
	}
	}
	
	public function logar ($user, $senha){
		global $PDO;
		$sql = $PDO -> prepare("SELECT id_usuario FROM tb_usuarios WHERE usuario = :u AND senha = :s");
		$sql->bindValue(":u",$user);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		if($sql ->rowCount() > 0) {
			$dado = $sql->fetch();
			session_start();
			$_SESSION ['id_usuario'] = $dado['id_usuario'];
			return true;
		}
		else{

		return false;

		}
		
	}
	public function select(){
			global $PDO;
			$sql = $PDO -> prepare("SELECT id_usuario FROM tb_usuarios WHERE usuario = :u AND senha = :s");
			$sql->bindValue(":u",$user);
			$sql->bindValue(":s",md5($senha));
		}
	
	
	
}

?>