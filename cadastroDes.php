<?php
//Instancia do Banco de dados
require_once "MySQL/ConfigSession.php";
require_once "MySQL/conexao.php";
if ((isset($_SESSION['id'])) == "") {
	echo "<script>
                window.location.href='Login.php'; 
            </script>";
}

// Select Dos tipos de caracteristicas
$Caracteristicas = "SELECT id_Tipo, descricao FROM tipocaracter ORDER BY descricao";
$result = mysqli_query($conexao, $Caracteristicas);

// Select da altura pre cadastrada
$SelecDesaparecido = "SELECT * FROM desaparecido WHERE id_pessoa = {$_SESSION['id']} and id_status = 1";
$Desaparecido = mysqli_query($conexao, $SelecDesaparecido);

$SelecDesaparecido = "SELECT * FROM desaparecido WHERE id_pessoa = {$_SESSION['id']} and id_status = 1";
$Desaparecido1 = mysqli_query($conexao, $SelecDesaparecido);

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<?php require_once "include/funcao/validaForm.php";  ?>
	<title>Cadastro de Desaparecidos</title>
</head>


<body>
	<?php
	if (isset($_SESSION['id'])) {
		require_once "include/menuLogado.php";
	} else {
		require_once "include/menu.php";
	}
	?>
	<div class="container"><br><br>
		<!-- remove this if you use Modernizr -->
		<script>
			(function(e, t, n) {
				var r = e.querySelectorAll("html")[0];
				r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
			})(document, window, 0);
		</script>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs nav-justified" role="tablist">
			<li class="nav-item">
				<a class="nav-link active " data-toggle="tab" href="#home">Adicionar Desaparecido</a>
			</li>
			<li class="nav-item">
				<a class="nav-link " data-toggle="tab" href="#menu1">Adicionar Caracteristica</a>
			</li>
			<!-- <li class="nav-item">
			<a class="nav-link " data-toggle="tab" href="#menu2">Adicionar Foto ao Desaparecido</a>
			</li> -->
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div id="home" class="container tab-pane active"><br>
				<h5 class="h3 mb-3 font-weight-normal" style="text-align: center">
					<font face="Azonix" size="5" color="Black">Adicione o Desaparecido</font>
				</h5>
				<form id="FrmCadDesaparecido" name="cadastro" onsubmit="return ValidaDesaparecido()" action="MySQL/insertDesaparecido.php" method="POST" autocomplete="off" enctype="multipart/form-data">
					<div class="row">
						<div style="text-align:center;" class="col-sm-12 alert" id="alert" role="alert"></div>
						<div class="col-sm-6">
							<div class="form-group">
								<label style="color:black;" for="txtNome">Nome Completo</label>
								<input type="text" id="txtNome" name="txtNome" placeholder="Digite seu Nome Completo" class="form-control" maxlength="50">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label style="color:black;" for="txtData">Data de Nascimento</label>
								<input type="text" id="txtData" name="txtData" placeholder="Digite a data de Nascimento" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label style="color:black;" for="txtData2">Data do Desaparecimento</label>
								<input type="text" id="txtData2" name="txtData2" placeholder="Digite do dia do Desaparecimento" class="form-control">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label style="color:black;" for="txtCpf">CPF</label>
								<input type="text" id="txtCpf" name="txtCpf" placeholder="000.000.000-00" class="form-control">
							</div>
						</div>
						<div class="col-sm-5 col-sm-offset-3">
							<center>
								<input name="arquivo" type="file"><br>
							</center>
						</div><br>
						<div class="form-row">
							<div class="form-group col-sm-7"></div>
							<div class="form-group col-sm-5">
								<button type="submit" style="text-align:center; border-radius: 15px; padding: 5.5px 40px;" class="btn btn-primary">Cadastrar Desaparecido</button>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div id="menu1" class="container tab-pane "><br>
				<form id="FrmCadCaracteristica" name="FrmCadCaracteristica" onsubmit="return ValidaCaracteristica()" method="POST" action="MySQL/insertCaracteristica.php" autocomplete="off">
					<h5 class="h3 mb-3 font-weight-normal" style="text-align: center">
						<font face="Azonix" size="5" color="Black">Selecione o Desaparecido e adicione Caracteristicas</font>
					</h5>
					<div style="text-align:center;" class="col-sm-12 alert" id="alertCaract" role="alertCaract"></div>
					<div class="col-sm-8 col-sm-offset-2"><br>
						<select class="form-control " name="cbx_desaparecido" id="cbx_desaparecido">
							<option value="0">Selecione o Desaparecido</option>
							<?php while ($row = $Desaparecido->fetch_assoc()) { ?>
								<option value="<?php echo utf8_encode($row['id_Desaparecido']); ?>"><?php echo utf8_encode($row['nome_desaparecido']); ?></option>
							<?php } ?>
						</select><br><br>
					</div>
					<div class="col-sm-5 col-sm-offset-1">
						<select class="form-control " name="id_categoria" id="id_categoria">
							<option value="0">Selecione a Caracteristica Desejada</option>
							<?php while ($row = $result->fetch_assoc()) { ?>
								<option value="<?php echo utf8_encode($row['id_Tipo']); ?>"><?php echo utf8_encode($row['descricao']); ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-sm-5">
						<select class="form-control" name="id_sub_categoria" id="id_sub_categoria">
							<option value="0">Selecione a SubCaracteristica </option>
						</select>
					</div>
					<div class="col-sm-5 col-sm-offset-1"><br>
						<button type="submit" id="insertCarac" style="text-align:center; border-radius: 15px; padding: 5.5px 40px;" class="btn btn-primary">Cadastrar Desaparecido</button>
					</div>
				</form>

			</div><br><br><br><br><br><br><br>

		</div>
		
	</div>
	<?php  require_once "include/footer.php" ?>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<!-- colocar aqui as formatações de formulário dentro de um <script></script>, sempre abaixo do Jquery e do Jquery.mask
            0: Um digito obrigatório
            9: Um digito opcional
            #: Um digito com recurção
            A: Uma letra de a até z (maiúsculas ou minusculas) ou um digito
            S: Uma letra de a até z (maiúsculas ou minusculas) sem digito
        -->
	<?php
	require_once "include/script/Mascara.php";
	require_once "include/script/geral.php";
	?>
	<!-- jQuery first, then Bootstrap JS. -->

	<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
	<script src="js/custom-file-input.js"></script>

	<script src="js/jquery-v1.min.js"></script>
	<script src="js/jquery.custom-file-input.js"></script>


	<script>
		$("#id_categoria").on("change", function() {
			var idCarac = $("#id_categoria").val();
			$.ajax({
				url: 'MySQL/pega_valores.php',
				type: 'POST',
				data: {
					id_categoria: idCarac
				},
				beforeSend: function() {
					$("#id_sub_categoria").css({
						'display': 'block'
					});
					$("#id_sub_categoria").html("Carregando...");
				},
				success: function(data) {
					$("#id_sub_categoria").css({
						'display': 'block'
					});
					$("#id_sub_categoria").html(data);

				},
				error: function(data) {
					$("#id_sub_categoria").css({
						'display': 'block'
					});
					$("#id_sub_categoria").html("Houve um erro ao Carregar");
				}
			});
		});
	</script>
</body>

</html>