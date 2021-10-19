<?php
  //Instancia do Banco de dados
  require_once "MySQL/ConfigSession.php";
  require_once "MySQL/conexao.php";
  require_once "include/funcao/functions.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Cadastro | Search People </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF8">
    <!-- Bootstrap da pagina -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
  </head>
  <body style="padding: 0px 0px 0px 0px ; background-color:#f2f2f2;">
    <!-- Menu da Pagina-->
    <?php
       if(isset($_SESSION['id'])){
            require_once "include/menuLogado.php";
        }else{
            require_once "include/menu.php";
        }
    ?>
    <!-- Conteudo Da pagina   -->
    <div class="container">
      <?php 
        require_once "include/formularios/modal.php";
      ?>
    </div>
    <!-- Fim do Conteudo -->
    <!-- Script da pagina -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="src/jquery.responsive-collapse.js"></script>
    <?php
      include "include/script/geral.php";
    ?>
  </body>
</html>