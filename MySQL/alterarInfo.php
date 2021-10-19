<?php 
    //Instancia do Banco de dados
    session_start();
    require_once "../MySQL/conexao.php";
    
    $NewTelefone = $_REQUEST['txtTelefone'];

    if(isset($_SESSION['id'])){
        $String = "UPDATE  pessoa SET telefone = '$NewTelefone' WHERE id_Pessoa ={$_SESSION['id']}";
        $result = mysqli_query($conexao, $String);
        if (mysqli_affected_rows($conexao) > 0) {
            echo"<script type=\"text/javascript\">
                    alert('Telefone Alterado com sucesso');
                    window.location='../MinhaConta.php';
                </script>";
        } else {
            echo"<script type=\"text/javascript\">
                    alert('Não Foi possivel Alterar seu Telefone, Contate um Administrador');
                    window.location='../MinhaConta.php';
                </script>";
        }

    }else{
        echo"<script type=\"text/javascript\">
            alert('Não Foi possivel Fazer o Cadastro, Contate um Administrador');
            window.location='../MinhaConta.php';
        </script>";
    }
?>