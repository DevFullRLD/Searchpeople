<?php
//Instancia do Banco de dados
require_once "MySQL/ConfigSession.php";
require_once "MySQL/conexao.php";
require_once "include/funcao/functions.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Parceiros | Search People </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF8">
    <!-- Bootstrap da pagina -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css\style.css">
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
    <br><br>
    <div class="container">
        <div class="row">
            <div class='col-sm-6 col-md-4'>
                <div class='thumbnail'>
                    <img src='images/gente.jpg' alt=' '>
                    <div class='caption text-center'>
                        <h3> Gente Busca Gente </h3><BR>
                        <a href="http://onggentebuscandogente.blogspot.com/" target="_blank" class="btn btn-primary" role="button" >Mais informações da ONG</a>
                    </div>
                </div>
            </div>
            <div class='col-sm-6 col-md-4'>
                <div class='thumbnail'>
                    <img src='images/desaparecidos.png' alt=' '>
                    <div class='caption text-center'>
                        <h3> Desaparecidos do Brasil </h3><BR>
                        <a href="http://www.desaparecidosdobrasil.org/" class="btn btn-primary" target="_blank" role="button" >Mais informações da ONG</a>
                    </div>
                </div>
            </div>
            <div class='col-sm-6 col-md-4'>
                <div class='thumbnail'>
                    <img src='images/APCD.png' alt=' '>
                    <div class='caption text-center'>
                        <h3> APCD </h3><BR>
                        <a href="https://apcd.pt/web/" class="btn btn-primary"  target="_blank" role="button" >Mais informações da ONG</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class='col-sm-6 col-md-4'>
                <div class='thumbnail'>
                    <img src='images/divisão.jpg' alt=' '>
                    <div class='caption text-center'>
                        <h3> Divisão de Desaparecidos </h3><BR>
                        <a href="https://www.prefeitura.sp.gov.br/cidade/secretarias/direitos_humanos/desaparecidos/a_divisao/index.php?p=254686" target="_blank" class="btn btn-primary" role="button" >Mais informações da ONG</a>
                    </div>
                </div>
            </div>
            <div class='col-sm-6 col-md-4'>
                <div class='thumbnail'>
                    <img src='images/missing.jpg' alt=' '>
                    <div class='caption text-center'>
                        <h3> Missing People </h3><BR>
                        <a href="https://www.missingpeople.org.uk/" target="_blank" class="btn btn-primary" role="button" >Mais informações da ONG</a>
                    </div>
                </div>
            </div>
            <div class='col-sm-6 col-md-4'>
                <div class='thumbnail'>
                    <img src='images/caminho.jpg' alt=' '>
                    <div class='caption text-center'>
                        <h3> Projeto Caminho de Volta </h3><BR>
                        <a href="http://www.caminhodevolta.fm.usp.br/" target="_blank" class="btn btn-primary" role="button" >Mais informações da ONG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
    <!-- fim Conteudo -->
    <?php require_once "include/footer.php" ?>
    <!-- Script da pagina -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="src/jquery.responsive-collapse.js"></script>

    <?php
    require_once "include/script/geral.php";
    ?>
</body>

</html>