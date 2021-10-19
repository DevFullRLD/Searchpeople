<?php 
    if(isset($_POST['userID'])){
        
        require_once "conexao.php";

        $StringCaracteristica = " SELECT  tc.descricao, cp.nome_CaracDefault From caracteristica c 
        join caracteristicapadrao cp on c.id_caracDes = cp.id_CaracDefault
        join tipocaracter tc on cp.id_referenciaTipo = tc.id_Tipo where c.id_desaparecido='{$_POST['userID']}'";
        $result = mysqli_query($conexao, $StringCaracteristica);
        while($row = mysqli_fetch_assoc($result)){
            $tipo  = utf8_encode( $row['descricao']);
            $carac = utf8_encode( $row['nome_CaracDefault']);
            echo $tipo .' : '. $carac .'<br>';
        };
    }
?>