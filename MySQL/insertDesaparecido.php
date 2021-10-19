<?php

    //Instancia do Banco de dados
    session_start();
    require_once "../MySQL/conexao.php";
    require_once "../include/funcao/validaForm.php";

    //Puxar as informações do formulario para cadastrar Desaparecido
    $NomeDesaparecido    = $_REQUEST['txtNome'];
    $Data1               = $_REQUEST['txtData'];
    $Data2               = $_REQUEST['txtData2'];
    $CPF_Desaparecido    = $_REQUEST['txtCpf'];
    $DataNascimento      = implode("-", array_reverse(explode("/", $Data1)));
    $DataDesaparecimento = implode("-", array_reverse(explode("/", $Data2)));

    //String com comando de inserir desaparecido no Banco de Dados
    if(isset($_SESSION['id'])){
            if(isset($_FILES['arquivo'])){
            $extensao  = strtolower(substr($_FILES['arquivo']['name'], -4)); // pegar extensâo do Arquivo
            $new_name  = md5(time()).$extensao; // Definir novo nome para o Arquivo
            $diretorio = "../fotos/"; // Definir o destivo do arquivo
            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$new_name ); // fazer upload da imagem 


            //insert Desaparecido no banco de dados
            $String = "insert into desaparecido (id_Desaparecido, nome_desaparecido, data_nascimentoDesaparecido, cpf_desaparecido, data_desaparecimento, foto, id_pessoa, id_status)
                values (NULL, '". $NomeDesaparecido."', '$DataNascimento', '".$CPF_Desaparecido."', '$DataDesaparecimento','".$new_name."', {$_SESSION['id']}, 1 )";
            $result = mysqli_query($conexao, $String);
            //echo $String;
            //echo $result;
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
    }
?>