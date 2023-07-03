<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLOPPY ARCH carrinho</title>
    <link rel="icon" href="img/diskmenu.png"png/png">
    <link rel="stylesheet" type="text/css" href="estilo carrinho.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="menuteste.css">
    <link rel="stylesheet" type="text/js" href="menuteste.js">
    <link href="https://fonts.cdnfonts.com/css/aux-dotbitc" rel="stylesheet">
                

    
    
</head>
<body style="background-image: url(img/Fundo.png);">
<div class='d0'>
<div class='d1'></div> 
<div class='d2'>
    <div class='d21'>
        <?php
        session_start();
        include ("conecta.php");
        $comando = $pdo->prepare("SELECT * FROM carrinho WHERE nick = :user");
        $comando->bindParam(':user', $_SESSION['usuario']);
        $comando->execute();    
    
        $resultado = $comando->execute();

        while ($linhas = $comando->fetch()) {
            $m = $linhas['id_carrinho'];
            $n = $linhas["item"];
            echo "<div style='
            z-index: 1; 
            display: flex; 
            justify-content: space-between; 
            width: 45%; 
            font-size: 20px; 
            height: 10%; 
            background-color: yellow;
             color: #5c5b9c;
            font-family: \"AuX DotBitC Xtra SmallCaps\", sans-serif;
            animation: bounceInUp 4s;'>
            <span onclick='remove($m)' style='width: 10%; height: 100%; background-color: red; color: black;'>x</span>
            300R$ / item: $n
          </div><br>";
    
        }
        ?>
    </div>
    <div class='d22'>
        <?php
        $comando->execute();
        $quantidadeItens = 0;

        while ($linhas = $comando->fetch()) {
            $quantidadeItens++;
        }

        $total = $quantidadeItens * 300;
        echo "<div id='valor' name='valor' style='  animation: bounceInUp 4s; color: yellow; font-family: \"AuX DotBitC Xtra SmallCaps\", sans-serif; font-size: 35px;'>Total: " . $total . "R$</div>";

        ?>

        <button class="pulha8" type="button">Finalizar compra</button>
    </div>
</div>

    <img src="img/diskmenu.png" alt="Menu" id="menu-botao" class="menu-image">

    <ul id="menu">
      <li class="menu-item"><a href="FLOPPY ARCH comprar.html">comprar</a></li>
      <li class="menu-item"><a href="FLOPPY ARCH carrinho.html">carrinho</a></li>
      <li class="menu-item"><a href="FLOPPY ARCH.php">Inicio</a></li>
      <li class="menu-item"><a href="FLOPPY ARCH entrar.html">entrar</a></li>
      <li class="menu-item"><a href="FLOPPY ARCH contato.html">contato</a></li>
    </ul>
  <head>
   
</body>
<script src="menuteste.js"></script>
<script>
  function remove(x){
    window.open("remover.php?id=" + x, "_self");
  }
</script>
</div>
<div class='d3'></div>
</div>
</html>   