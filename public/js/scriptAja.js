$(document).ready(function(){
   

    // $("#no").mask('00.000.000.0-000.000');
    
    // $("#npwp").inputmask({"mask" : "99.999.999.9-999.999", "placeholder" : "00.000.000.0-000.000", "clearMaskOnLostFocus" : false});


    $("#npwp").mask("99.999.999.9-999.999");

    $("#gaji").mask('000.000.000.000', {reverse: true});

    // $("#no").inputmask({"mask" : "(+99) 999 9999 9999", "placeholder" : "(+62) 8** **** ****", "clearMaskOnLostFocus" : false })

    // $("#gaji").inputmask({"alias" : "currency", "prefix" : " ", "clearMaskOnLostFocus" : true});


    
    // $('.salary').mask('000.000.000.000.000,00', {reverse: true});

});


