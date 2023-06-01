<?php
include("conecta.php");
$nick = $_POST["Nick"];
$senha = $_POST["senha"];
$nome = $_POST["Nome"];
$telefone = $_POST["telefone"];
$email = $_POST["E-mail"];


        $comando = $pdo->prepare("INSERT INTO cadastro (nick, senha, nome, telefone, email) VALUES ('$nick', '$senha', '$nome', '$telefone', '$email')");
        $resultado = $comando->execute();
        
        
        header("location:FLOPPY ARCH entrar.html");

?>
