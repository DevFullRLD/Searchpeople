<script>
    $('#txtCpf').mask('000.000.000-00',{reverse: true});
    $("#txtCnpj").mask("99.999.999/9999-99",{reverse: true});
    $('#txtIE').mask("000.000.000.000",{reverse: true});
    $('#txtData').mask("00/00/0000",{reverse: true});
    $('#txtData2').mask("00/00/0000",{reverse: true});
    $("#txtRG").mask("99.999.999-W", {
        translation: {
            'W': {
                pattern: /[X0-9]/
            }
        },
        reverse: true
    });

    $("#txtTelefone").mask("(00) 0000-00009", {reverse: true});

    $("#txtTelefone").blur(function(event) {
        if ($(this).val().length == 15) {
            $("#txtTelefone").mask("(00) 00000-0009")
        } else {
            $("#txtTelefone").mask("(00) 0000-00009")
        }
    });
</script>