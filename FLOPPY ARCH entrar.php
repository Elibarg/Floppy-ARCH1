<?php 
    session_start();
    echo $_SESSION['usuario'];
    if ($_SESSION['usuario'] != 'nenhum') {
        $paginasupostapraseroperfil = 'FLOPPY ARCH.php';
        header("location: $paginasupostapraseroperfil");
    } 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <link rel="stylesheet" type="text/css" href="estilo entrar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="img/diskmenu.png"png/png">
    <style>
        /*http://localhost/login/ entrar no htdocs */
    </style>
</head>
<body>
    <form action="verifica-login.php" method="post">
        <div class="d0" style="display: flex; justify-content: space-between; flex-direction: column; align-items: center;">
            <fieldset style="text-align: center; font-size: 36px;font-family: 'AuX DotBitC Xtra SmallCaps', sans-serif; color: yellow;">
                Nick:<input type="text" style="display:block; margin: 0 auto;width: 300px;height: 27px;" class="caixa_larga" id="nome" name="login" >
                <br> <br>
                Senha:<input type="password" style="display:block; margin: 0 auto;width: 300px;height: 27px;" class="caixa_larga" id="senha"name="senha">
            </fieldset>
            <button type="submit" class="pulha" style="display: block; margin: 0 auto;font-size: 36px; height: 50px;width: 180px;font-family: 'AuX DotBitC Xtra SmallCaps', sans-serif; ">
                    Entrar
            </button>
            <button class="pulha" style="display: block; margin: 0 auto;font-size: 36px; height: 50px;width: 260px;font-family: 'AuX DotBitC Xtra SmallCaps', sans-serif; ">
                <a href="cadastro.html" style="display: block; height: 100%; width: 100%; text-decoration: none; color: inherit;">
                Cadastrar
                </a>
                </button>
                </div>
    </form>
    

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>
