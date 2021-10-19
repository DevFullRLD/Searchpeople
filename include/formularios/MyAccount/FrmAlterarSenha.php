<form name="altersenha" action="MySQL/alterarSenha.php" method="POST" >
    <div class="form-group col-sm-6">
        <label for="txtSenhaAtual">Senha Atual</label>
        <input type="password" id="txtSenhaAtual" name="txtSenhaAtual" placeholder=" Digite sua senha Atual" minlength="8" maxlength="30" class="form-control" required >
    </div>
    <div class="form-group col-sm-6">
        <label for="txtSenha">Senha</label>
        <input type="password" id="txtSenha" name="txtSenha" placeholder=" Digite sua nova senha, Minimo 8 digitos" minlength="8" maxlength="30" class="form-control" required >
    </div>
    <div class="form-group col-sm-6">
        <label for="txtConfirmPass">Confirme sua Senha</label>
        <input type="password" id="txtConfirmPass" name="txtConfirmPass" onKeyUp="SenhaOK()" placeholder="Confirme sua senha" minlength="8" maxlength="30" class="form-control" required>
    </div>
    <div class="form-group col-sm-6">
        <button type="submit" id="button" style="padding: 5.5px 52px;" class="btn btn-primary" >Enviar</button>
        <small id="passwordHelpInline" class="text-muted">
            Digite as novas senhar de forma valida Para fazer alteração.
        </small>
    </div>
</form>