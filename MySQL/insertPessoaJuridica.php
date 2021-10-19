<?php
    //Instancia do Banco de dado
    require_once "../MySQL/conexao.php";
    require_once "../include/funcao/validaForm.php";
    
    
    //Variaveis Recebendo Valores do Formulario
    $razaoSocial   = $_REQUEST['txtRazao'];
    $NomeFantasia  = $_REQUEST['txtNomeFantasia'];
    $CNPJ          = $_REQUEST['txtCnpj'];
    $TelPessoaJurudica = $_REQUEST['txtTelefone'];
    $IE            = $_REQUEST['txtIE'];
    $dtRegistro    = $_REQUEST['txtData'];
    $EmailJuridico = $_REQUEST['txtEmail']; 
    $senha         = sha1($_REQUEST['txtSenha']);
    $dtRegistro    = implode("-", array_reverse(explode("/", $dtRegistro)));

    $String = "insert into pessoa (id_Pessoa, cpf_cnpj, nome, razao_social, telefone, inscricao_est, data_registro, email, senha, id_pf_pj) 
                values (NULL,'".$CNPJ."','".$NomeFantasia."','".$razaoSocial."','".$TelPessoaJurudica."','".$IE."','$dtRegistro','".$EmailJuridico."','".$senha."', 2)";
    // echo $String;
    $result = mysqli_query($conexao, $String);
    // echo $result;

    if (mysqli_affected_rows($conexao) > 0) {
        echo"<script type=\"text/javascript\">
                alert('Cadastro Efetuado com Sucesso');
                window.location='../Login.php';
            </script>";
    } else {
        echo"<script type=\"text/javascript\">
                alert('Não Foi possivel Fazer o Cadastro, Contate um Administrador');
                window.location='../Cadastro.php#bg';
            </script>";
    }

    mysqli_close($conexao);

?>