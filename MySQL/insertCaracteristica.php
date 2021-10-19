<?php

    //Instancia do Banco de dados
    session_start();
    require_once "../MySQL/conexao.php";
    require_once "../include/funcao/validaForm.php";

    $desaparecido   = $_REQUEST['cbx_desaparecido'];
    $TipoCaract     = $_REQUEST['id_categoria'];
    $Caracteristica = $_REQUEST['id_sub_categoria'];

    if(isset($_SESSION['id'])){
        $insertCarac = " INSERT INTO caracteristica (id_Caracteristicas, id_desaparecido, id_caracDes, id_refTipo) values (NULL, '".$desaparecido."', '".$Caracteristica."', '".$TipoCaract."') ";
        $result = mysqli_query($conexao, $insertCarac);
        if (mysqli_affected_rows($conexao) > 0) {
            echo"<script type=\"text/javascript\">
                    alert('Cadastro Efetuado com Sucesso');
                    window.location='../cadastroDes.php';
                </script>";
                                         
        } else {
            echo"<script type=\"text/javascript\">
                    alert('Não foi possivel Fazer o cadastro, Contate um administrador');
                    window.location='../cadastroDes.php';
                </script>";
        }	
    }

?>