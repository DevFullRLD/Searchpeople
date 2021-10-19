<?php
    //Instancia do Banco de dados
    require_once "MySQL/ConfigSession.php";
    require_once "MySQL/conexao.php";
    require_once "include/funcao/functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pessoa Juridica | Search People </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF8">
        <!-- Bootstrap da pagina -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <?php 
            // Função de Validar Formulario
            require_once "include/funcao/validaForm.php";
            //Função de Verificar senhas Iguais
            require_once "include/script/verificaSenha.php";
        ?>
    </head>
    <body style="padding: 0px 0px 0px 0px ; background-color:#f2f2f2;">
        <?php
            // Menu da Pagina
            if(isset($_SESSION['id'])){
                require_once "include/menuLogado.php";
            }else{
                require_once "include/menu.php";
            }
        ?>
        <!-- Conteudo Da pagina   -->
        <div class="container"><br>
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"><font face="Azonix" size="6" color="Black">Search People</font></h1><br>
            <?php
                // Formulario Pessoa Fisica
                require_once "include/formularios/FrmPessoaJuridica.php";
            ?>
        </div>
        <!-- Fim do Conteudo -->
        <!-- Script da pagina -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="src/jquery.responsive-collapse.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.mask.min.js"></script>
        <!-- colocar aqui as formatações de formulário dentro de um <script></script>, sempre abaixo do Jquery e do Jquery.mask
            0: Um digito obrigatório
            9: Um digito opcional
            #: Um digito com recurção
            A: Uma letra de a até z (maiúsculas ou minusculas) ou um digito
            S: Uma letra de a até z (maiúsculas ou minusculas) sem digito
        -->
        <?php
            require_once "include/script/Mascara.php";
            require_once "include/script/geral.php";
        ?>
    </body>
</html>