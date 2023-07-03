<?php
    $id = $_GET['id'];
    include ("conecta.php");

    $comando = $pdo->prepare("DELETE FROM carrinho WHERE id_carrinho=$id");

    $resultado = $comando->execute();

    header("location: FLOPPY ARCH carrinho.php");
?>