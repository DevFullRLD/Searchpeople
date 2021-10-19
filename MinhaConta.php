<?php
    
    require_once "MySQL/ConfigSession.php";
    require_once "MySQL/conexao.php";
    require_once "MySQL/selectINFOPessoa.php";
    if ((isset($_SESSION['id'])) == "") {
        echo "<script>
                    window.location.href='Login.php'; 
                </script>";
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Minha Conta | Search People </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF8">
    <!-- Bootstrap da pagina -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/card.css">
    <?php 
        // Função de Validar Formulario
        require_once "include/funcao/validaForm.php";

        //Função de Verificar senhas Iguais
        require_once "include/script/verificaSenha.php";
    ?>
</head>

<body style="padding: 0px 0px 0px 0px ; background-color:#f2f2f2;">
    <!-- Menu da Pagina-->
    <?php
    if (isset($_SESSION['id'])) {
        require_once "include/menuLogado.php";
    } else {
        require_once "include/menu.php";
    }
    ?>
    <!-- Conteudo Da pagina   -->
    <div class="container">
        <br><br>
        <?php if(isset($_SESSION['id'])){
                if($_SESSION['id_pf_pj'] == 1){
                    require_once "include/formularios/MyAccount/FrmCardPFisica.php";
                }else{
                    require_once "include/formularios/MyAccount/FrmCardPJuridica.php";
                }
        }
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