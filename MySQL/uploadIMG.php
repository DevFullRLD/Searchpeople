<?php
    require_once "conexao.php";
    $desaparecido   = $_REQUEST['cbx_desaparecido1'];
    if(isset($_FILES['arquivo'])){
        $extensao  = strtolower(substr($_FILES['arquivo']['name'], -4)); // pegar extensâo do Arquivo
        $new_name  = md5(time()).$extensao; // Definir novo nome para o Arquivo
        $diretorio = "../fotos/"; // Definir o destivo do arquivo

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$new_name ); // fazer upload da imagem 
        $string = "INSERT INTO imagens (id_img, foto, data, id_IMGdesaparecido) values (NULL, '$new_name', NOW(), '$desaparecido')";
        $result = mysqli_query($conexao, $string);
        if (mysqli_affected_rows($conexao) > 0) {
            echo"<script type=\"text/javascript\">
                    alert('Imagem Incluida com sucesso');
                    window.location='../cadastroDes.php';
                </script>";
                                         
        } else {
            echo"<script type=\"text/javascript\">
                    alert('Não foi possivel Fazer o incluir, Contate um administrador');
                    window.location='../cadastroDes.php';
                </script>";
        }	
    }
    
?>