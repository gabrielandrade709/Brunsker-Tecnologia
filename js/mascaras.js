
$(function () {

    $(".mskValor").mask("R$ 9999,99");
    $(".mskTelefone").mask("(99) 99999-9999");
    $(".mskRg").mask("99.999.999");
    $(".mskData").mask("99/99/9999");
    $(".mskHora").mask("99:99:99");
    $(".mskAno").mask("9999");
    $(".mskPeso").mask("999.999");
    
    $("input").blur(function () {
        $("#info").html("Valor sem máscara: " + $(this).mask());
    });
});


