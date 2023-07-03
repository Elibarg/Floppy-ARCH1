<?php
    session_start();
    include('conecta.php');

    $item = $_GET['codigo'];
    $nick = $_SESSION['usuario'];

    if ($nick == "nenhum"){
        header("location: FLOPPY ARCH.php");
    }

    $comando = $pdo->prepare("INSERT INTO carrinho(nick, item) VALUES (:nome, :senha)");
    $comando->bindParam(':nome', $nick);
    $comando->bindParam(':senha', $item);
    $comando->execute();

    header("location: FLOPPY ARCH carrinho.php");
?>