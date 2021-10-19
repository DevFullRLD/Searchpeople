<?php
    //Instancia do Banco de dados
    require_once "MySQL/ConfigSession.php";
    require_once "MySQL/conexao.php";
    require_once "include/funcao/functions.php";
    if((isset($_SESSION['id']))==""){
        echo"<script>
                window.location.href='Login.php'; 
            </script>";       
        }
          //Selecionar todos os desaparecidos;
            $selectDesaparecidos = "SELECT * from desaparecido";
            $result  = mysqli_query($conexao, $selectDesaparecidos);
            $nresult = mysqli_num_rows( $result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Procurados | Search People </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF8">
        <!-- Bootstrap da pagina -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="css\style.css">
    </head>
    <body">
        <!-- Menu da Pagina-->
        <?php
             if(isset($_SESSION['id'])){
                require_once "include/menuLogado.php";
            }else{
                require_once "include/menu.php";
            }
        ?>
        <!-- Conteudo Da pagina   -->
        <div class="container" role="main">
			<div class="page-header">
            </div>
            <?php 
			echo '<div class="row">'; // inicio da div Row
                while($row  = mysqli_fetch_assoc($result)){
                    $id = $row['id_Desaparecido'];
                    echo"
                    <div class='col-sm-6 col-md-3'>
                        <div class='thumbnail'>
                            <img src='fotos/{$row['foto']}' alt='{$row['nome_desaparecido']}' >
                            <div class='caption text-center'>
                                <h3> {$row['nome_desaparecido']}</h3><BR>
                        
                                <button type='button' class='btn btn-primary view_data' id='{$row['id_Desaparecido']}' > Mais Informações</button><br><br>


                                <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalMensa'>
                                    Enviar Comentario
                                </button>
                            </div>
                        </div>
                    </div>
                    ";
                }
            echo '</div>';//Fim da div Row  ?> 
            <!-- Modal de informações -->
        </div>
        <div class="modal fade" id="modalMensa" tabindex="-1" role="dialog" aria-labelledby="modalMensa" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 style="text-align:center" class="modal-title" id="exampleModalLabel">Envie um Comentario caso tenha Visto esta Pessoa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label style="color:black;" for="txtNome">Nome Completo</label>
                                <input type="text" id="txtNome" name="txtNome" placeholder="Digite seu Nome Completo" class="form-control" maxlength="50">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="textarea">Digite Seu comentario </label>
                                <textarea class="form-control" id="textarea" placeholder="Digite a ultima vez que você viu ou soube desta pessoa. Esta mensagem é enviada á pessoa em que cadastrou" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Enviar Comentario</button>
                </div>
                </div>
            </div>
        </div><div id="visulUsuarioModal" class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3  class="modal-title" id="visulUsuarioModalLabel"style="text-align: center">Detalhes do Usuário</h3><br>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="visul_usuario">

                        </span>
                    </div>
                    <div class="modal-footer">
                        <p style="text-align:center";>&copy;Search People. Since 2019&trade;<p>
                        <button type="button" onclick="document.getElementById('visulUsuarioModal').style.display='none'" class="btn btn-outline-info" >Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php  require_once "include/footer.php" ?>
         
        <!-- --> 
        <!-- Fim Modal de informações -->
        <!-- Script da pagina -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="src/jquery.responsive-collapse.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
      
         <script>
            $(document).ready(function(){
                $(document).on('click','.view_data', function(){
                    var userID = $(this).attr("id");
                    // alert(userID);
                    if(userID !== ''){
                        var dados = {
                            userID: userID
                        };
                        $.post('MySQL/maisInfo.php', dados, function(retorna){
                            //carregar modal
                            $('#visul_usuario').html(retorna);
                            $('#visulUsuarioModal').show();
                        });
                    }
                });
            });
        </script>
    </body>
</html>