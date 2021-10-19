<?php
//Instancia do Banco de dados
require_once "MySQL/ConfigSession.php";
require_once "MySQL/conexao.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home | Search People </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF8">
    <!-- Bootstrap da pagina -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="css/style.css">
    
    <link href="css/bootstrap-responsive.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
    <style>
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }       
    </style>
</head>

<body >
    <!-- Menu da Pagina-->
    <?php
    if (isset($_SESSION['id'])) {
        require_once "include/menuLogado.php";
    } else {
        require_once "include/menu.php";
    }
    ?>
    <!-- Conteudo Da pagina   -->
    <!--SlideShow -->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/sp.jpg" alt="sp" width="1100" height="500">
                <div class="carousel-caption">
                    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                        <font face="Azonix" size="6" color="White">Ajude nos a encontrar!</font>
                    </h1>
                </div>
            </div>

            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div><br>
    <!-- Conteudo da pagina -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-7">
                <h3 style="text-align:center"> MISSÃO / VISÃO / VALORES</h3> 
                <p>
                    <img src="img/missao.png" alt="">
                    Tornar mais fácil a forma de divulgação e concentração de informação de pessoas desaparecidas e perdidas, tornando mais pratico o meio de ajudar ao próximo
                </p>
                <p>
                    <img src="img/visao.png" alt="">
                    Ser referência no quesito inovação encontrar pessoas
                </p>
                <p>
                    <img src="img/valores.png" alt="">
                    Transparência, Lealdade, Comprometimento e Dedicação
                </p><br>
                <p>
                    <img src="img/speople.jpg" >
                </p>
            </div>
            <div class="col-sm-5">
               <img src="img/home.jpeg" class="img-fluid">
            </div>
        </div>
    </div>
    <?php  require_once "include/footer.php" ?>
    <!-- Script da pagina -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    ?>
    <?php
    require_once "include/script/geral.php";
    ?>
</body>

</html>