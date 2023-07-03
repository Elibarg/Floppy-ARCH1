  <?php
                    
                    include ("conecta.php");
                   
                    $comando = $pdo->prepare("SELECT * FROM cadastro ");
                    $resultado = $comando->execute();
            
                    while( $linhas = $comando->fetch()){
                        $nome = $linhas["nome"];
                        $telefone = $linhas["telefone"];
                        $email = $linhas["email"];
                    

                    }




                ?>
                

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Perfil.css">
    <link rel="stylesheet" type="text/css" href="menuteste.css">
    <link rel="stylesheet" type="text/js" href="menuteste.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="img/diskmenu.png"png/png">
    <title>Perfil</title>
</head>
<body>
    <div class="d1">
        <div class="d3">
            <div class="foto">
                <form action="salvar_imagem.php" method="post" enctype="multipart/form-data">
                    Selecione uma imagem: <input  type="file" id="imagem" name="imagem" onchange="previewImagem()">
                    <br> <br>
                    <img id="imagem-preview" src="#" alt="Preview da imagem">
                    <input class="pulha" type="submit" value="Enviar">
                </form>
            </div>
        </div>
        <div class="d2">
            <div class="inf">
                <h2>Informações do Usuário</h2>
                <p>Nome: <span id="nome" name="nome"><?php echo("$nome") ?></span></p>
                <p>Email: <span id="email"name="email"><?php echo ("$email"); ?></span></p>
                <p>Telefone: <span id="telefone" name="telefone"><?php echo ("$telefone"); ?></span></p>
                <button class="pulha2" id="editar">Editar Informações</button>
                <button class="pulha3" id="sair">Sair</button>
            </div>
        </div>
    </div>
    <img src="img/diskmenu.png" alt="Menu" id="menu-botao" class="menu-image">

    <ul id="menu">
    <li class="menu-item"><a href="FLOPPY ARCH comprar.html">comprar</a></li>
    <li class="menu-item"><a href="FLOPPY ARCH carrinho.html">carrinho</a></li>
    <li class="menu-item"><a href="FLOPPY ARCH.php">Inicio</a></li>
    <li class="menu-item"><a href="FLOPPY ARCH entrar.html">entrar</a></li>
    <li class="menu-item"><a href="FLOPPY ARCH contato.html">contato</a></li>
    <li class="menu-item"><a href="Perfil.php">Perfil</a></li>
</ul>

    <script>
        function previewImagem() {
            var imagemInput = document.getElementById('imagem');
            var imagemPreview = document.getElementById('imagem-preview');

            var fileReader = new FileReader();
            fileReader.onload = function() {
                imagemPreview.src = fileReader.result;
                imagemPreview.style.display = 'block';
            };

            fileReader.readAsDataURL(imagemInput.files[0]);
        }
    </script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="menuteste.js"></script>
</html>
