<?php 
    //Instancia do Banco de dados
    session_start();
    require_once "../MySQL/conexao.php";
    require_once "../include/funcao/validaForm.php";
    
    $senha_atual = sha1($_REQUEST['txtSenhaAtual']);
    $NewPaas = sha1($_REQUEST['txtSenha']);
    $ConfirmaNewPass = $_REQUEST['txtConfirmPass'];

    if(isset($_SESSION['id'])){
        $String = "Select * from pessoa where id_Pessoa =" .$_SESSION['id']."";
            $result = mysqli_query($conexao, $String);
            // ler String 
            $row_String = mysqli_fetch_assoc($result);
            $senha_banco = $row_String['senha'];


            if($senha_banco == $senha_atual){
            $String = "UPDATE  pessoa SET senha = '$NewPaas' WHERE id_Pessoa ={$_SESSION['id']}";
            $result = mysqli_query($conexao, $String);
            if (mysqli_affected_rows($conexao) > 0) {
                echo"<script type=\"text/javascript\">
                        alert('Senha Alterada com sucesso');
                        window.location='../MinhaConta.php';
                    </script>";
            } else {
                echo"<script type=\"text/javascript\">
                        alert('Não Foi possivel Alterar sua senha, Contate um Administrador');
                        window.location='../MinhaConta.php';
                    </script>";
            }
    
        }else{
            echo"<script type=\"text/javascript\">
                alert('Não Foi possivel Fazer o Cadastro, Contate um Administrador');
                window.location='../MinhaConta.php';
            </script>";
        }
    }


?>