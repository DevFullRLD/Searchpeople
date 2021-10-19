<div class="card">
    <h5 class="card-header" style="text-align:center;"><?php echo "Bem Vindo ao seu Perfil {$_SESSION['nome']}" ?> </h5>
    <div class="card-body">
        <div class="col-sm-3">
            <img style="margin-top:20px;margin-left:20px" src="img/MyAccount/perfilJuridico.png" alt="" class="img-rounded img-responsive" />
        </div>
        <div class="col-sm-9">
            <table style="margin-left:30px" class="table table-borderless">
                <tr>
                    <td>ID: <?php echo $ID ?></td>
                </tr>
                <tr>
                    <td>Nome: <?php echo $Nome ?></td>
                </tr>
                <tr>
                    <td>Razão Social: <?php echo $Razao?></td>
                </tr>
                <tr>
                    <td>CNPJ: <?php echo $CPF_CNPJ ?></td>
                </tr>
                <tr>
                    <td>Inscrição Estadual: <?php echo $IE ?></td>
                </tr>
                <tr>
                    <td>Data de Registro: <?php echo $Registro ?></td>
                </tr>
                <tr>
                    <td>E-mail: <?php echo $Email ?></td>
                </tr>
                <tr>
                    <td>Telefone: <?php echo $telefone ?></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="card-footer text-muted">
        <p style="text-align:center;">*apenas podem ser alterados telefone e senha*</p>
    </div>
</div><br>
<div class="card">
    <h4 class="card-header" style="text-align:center;"><?php echo "Altere sua Senha" ?> </h4>
    <div class="card-body">
        <div class="col-sm-3">
            <img style="margin-top:40px;margin-left:20px" src="img/MyAccount/pass.png" alt="" class="img-rounded img-responsive" />
        </div><br> <br>
        <?php
            require_once "include/formularios/MyAccount/FrmAlterarSenha.php";
        ?>
    </div>
    <div class="card-footer text-muted">
        <p class="card-header" style="text-align:center;"><?php echo "*Para informações que não estejam presentes nos envie um email com a solicitação*" ?> </p>
    </div>
</div><br>

    <div class="card">
    <h4 class="card-header" style="text-align:center;"><?php echo "Altere seu Telefone" ?> </h4>
    <div class="card-body">
        <div class="col-sm-3">
            <img style="margin-top:40px;margin-left:20px" src="img/MyAccount/alterInfo.png" alt="" class="img-rounded img-responsive" />
        </div><br> 
        <form name="alterTelefone" action="MySQL/alterarInfo.php" method="POST">
            <div class="form-group col-sm-6">
                <label for="txtTelefone">Telefone</label>
                <input type="text" id="txtTelefone" name="txtTelefone" placeholder="(00) 00000-0000" class="form-control" required>
                <br><button type="submit" id="button" style="padding: 5.5px 52px;" class="btn btn-primary" >Enviar</button>
                <br><br><small id="passwordHelpInline" class="text-muted">
                    Aperte Tab para validar seu Telefone .
                </small>
            </div>
    </form>
    </div>
    <div class="card-footer text-muted">
        <p class="card-header" style="text-align:center;"><?php echo "*Para informações que não estejam presentes nos envie um email com a solicitação*" ?> </p>
    </div>
       
</div><br>
