<?php

try{

	$HOST = "127.0.0.1";
        $BANCO = "bd_leitura";
        $USUARIO = "root";
        $SENHA = "";
        $PDO = new PDO("mysql:host=".$HOST.";dbname=".$BANCO.";charset=utf8",$USUARIO,$SENHA);
	$mysqli = new mysqli($HOST, $USUARIO, $SENHA, $BANCO);
    } catch (PDOException $erro) {
        echo "conexao_erro";
    }

?>

