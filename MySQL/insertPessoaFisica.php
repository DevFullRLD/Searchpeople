<?php
//Instancia do Banco de dados
require_once "../MySQL/conexao.php";
require_once "../include/funcao/validaForm.php";


//Variaveis Recebendo Valores do Formulario
$NomePessoaFisica  = $_REQUEST['txtNome'];
$CPF               = $_REQUEST['txtCpf'];
$RG                = $_REQUEST['txtRG'];
$TelPessoaFisica   = $_REQUEST['txtTelefone'];
$dtNascimento      = $_REQUEST['txtData'];
$EmailPessoaFisica = $_REQUEST['txtEmail'];
$senha = sha1($_REQUEST['txtSenha']);
$dtNascimento = implode("-", array_reverse(explode("/", $dtNascimento)));
$String = "insert into pessoa (id_Pessoa, cpf_cnpj, nome, telefone, RG, data_nascimento, email, senha, id_pf_pj)
                values (NULL, '" . $CPF . "', '" . $NomePessoaFisica . "', '" . $TelPessoaFisica . "', '" . $RG . "', '$dtNascimento', '" . $EmailPessoaFisica . "', '" . $senha . "', 1 )";

$result = mysqli_query($conexao, $String);

if (mysqli_affected_rows($conexao) > 0) {
    echo"<script type=\"text/javascript\">
            alert('Cadastro Efetuado com Sucesso');
            window.location='../Login.php';
        </script>";
} else {
    echo"<script type=\"text/javascript\">
            alert('Não foi possivel Fazer o cadastro, Contate um administrador');
        </script>";
}

mysqli_close($conexao);
