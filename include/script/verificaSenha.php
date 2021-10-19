<script>
    function SenhaOK(){
        var senha = document.getElementById("txtSenha");
        var senha1 = document.getElementById("txtConfirmPass");
        var verificador = document.getElementById("button");

        if(senha.value != senha1.value){
            verificador.disabled = true;
        }else{
            verificador.disabled = false;
        }
    }
</script>