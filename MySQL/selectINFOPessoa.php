<?php
   //Instancia do Banco de dados
    require_once "conexao.php";
    

    // Select informações do usuario 
    if(isset($_SESSION['id'])){
        $SelectInfo = "Select * from pessoa where id_Pessoa =" .$_SESSION['id']."";
        //Executar a Query 
        $result = mysqli_query($conexao, $SelectInfo);
        if(mysqli_affected_rows($conexao) > 0) {
            $row_usuario = mysqli_fetch_assoc($result);
            if($row_usuario['id_pf_pj'] == 1 ){
                $ID                   = $row_usuario['id_Pessoa'];
                $CPF_CNPJ             = $row_usuario['cpf_cnpj'];
                $RG                   = $row_usuario['RG'];
                $Email                = $row_usuario['email'];
                $Nome                 = $row_usuario['nome'];
                $telefone             = $row_usuario['telefone'];
                $DataNascimento       = $row_usuario['data_nascimento'];
                $_SESSION['senha']    = $row_usuario['senha'];
                $_SESSION['id_pf_pj'] = $row_usuario['id_pf_pj'];
                $Nascimento        = implode("/", array_reverse(explode("-", $DataNascimento)));
                
            
                }else{
                    $ID              = $row_usuario['id_Pessoa'];
                    $CPF_CNPJ        = $row_usuario['cpf_cnpj'];
                    $Nome            = $row_usuario['nome'];
                    $telefone        = $row_usuario['telefone'];
                    $Email           = $row_usuario['email'];
                    $Razao           = $row_usuario['razao_social']; 
                    $IE              = $row_usuario['inscricao_est'];
                    $DataRegistro    = $row_usuario['data_registro'];
                    $_SESSION['id_pf_pj'] = $row_usuario['id_pf_pj'];
                    $Registro        = implode("/", array_reverse(explode("-", $DataRegistro)));
                }    
            }
    }
    require_once "include/script/Mascara.php";
    mysqli_close($conexao);
?>