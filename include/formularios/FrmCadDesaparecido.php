<form id="FrmCadDesaparecido" name="cadastro" onsubmit="return ValidaDesaparecido()" action="MySQL/insertDesaparecido.php" method="POST" autocomplete="off" >
    <div class="row"><br><br><br><br>
        <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
                <label style="color:black;" for="txtNome">Nome Completo</label>
                <input type="text" id="txtNome" name="txtNome" placeholder="Digite seu Nome Completo" class="form-control" maxlength="50">
            </div>
        </div>
        <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
                <label style="color:black;" for="txtData">Data de Nascimento</label>
                <input type="text" id="txtData" name="txtData" placeholder="Digite a data de Nascimento" class="form-control">
            </div>
        </div>
        <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
                <label style="color:black;" for="txtData2">Data do Desaparecimento</label>
                <input type="text" id="txtData2" name="txtData2" placeholder="Digite do dia do Desaparecimento" class="form-control">
            </div>
        </div>
        <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
                <label style="color:black;" for="txtCpf">CPF</label>
                <input type="text" id="txtCpf" name="txtCpf" placeholder="000.000.000-00" class="form-control">
            </div>
        </div>
        <div class="form-row">
        <div class="form-group col-sm-7"></div>
            <div class="form-group col-sm-5">
                <button type="button" style="text-align:center; border-radius: 15px; padding: 5.5px 40px;" class="btn btn-primary" >Cadastrar Desaparecido</button>
            </div>
        </div>			                                			                                
    </div>
</form>
