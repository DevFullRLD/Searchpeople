<script type="text/javascript">
     $("#txtTelefone").mask("(00) 00000-0009", {reverse: true});

    $("#txtTelefone").blur(function(event) {
        if ($(this).val().length == 15) {
            $("#txtTelefone").mask("(00) 00000-0009")
        } else {
            $("#txtTelefone").mask("(00) 0000-00009")
        }
    });

   
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>