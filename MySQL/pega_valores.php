<?php
    //Instancia do Banco de dados
    require_once "../MySQL/conexao.php";

    $dados =  $_REQUEST['id_categoria'];
    $zero = 0;
    $var = "Selecione a SubCaracteristica";
    
    $StringCarrega = "SELECT * from caracteristicapadrao where id_referenciaTipo='".$dados."' ORDER BY id_CaracDefault";
    $result = mysqli_query($conexao, $StringCarrega);
    echo '<option value='.$zero.'>'.$var.'</option>';
    while ($row = $result->fetch_assoc()) { 
			$id	= $row['id_CaracDefault'];
            $nome_sub_categoria = utf8_encode($row['nome_CaracDefault']);
            echo '<option value='.$id.'>'.$nome_sub_categoria.'</option>';
		
	}
?>