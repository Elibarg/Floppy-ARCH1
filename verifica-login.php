<?php
session_start();
// $_POST pega as informações do input
$nome = $_POST["login"];
$senha = $_POST["senha"];

include("conecta.php"); //conecta com o banco de dados

$comando = $pdo->prepare("SELECT * FROM cadastro WHERE nick = :nome and senha = :senha");
$comando->bindParam(':nome', $nome);
$comando->bindParam(':senha', $senha);
$comando->execute();

$n = $comando->rowCount(); // Verifica o número de linhas retornadas pela consulta
$cu = $comando->fetch();
if($n == 0)
{
    header("Location: cadastro.html");
    exit; // Encerra a execução do script após o redirecionamento
}
else
{
    $linhas = $comando->fetch();
    $admim = $cu["admim"];
    $nome = $cu["nick"];
    $_SESSION['usuario'] = $nome;

    if($admim == "s")
    {
        header("Location: admim.html");
        exit; // Encerra a execução do script após o redirecionamento
    }
    else
    {
        header("Location: FLOPPY ARCH.php");

        exit; // Encerra a execução do script após o redirecionamento
    }
}
?>

