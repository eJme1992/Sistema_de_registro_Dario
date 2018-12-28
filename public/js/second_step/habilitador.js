	
       function habilitar() {
    if($("#nati:checked").val()==1) {
        $("#work").attr('disabled', 'disabled');
            }
    else {
             $("#work").removeAttr("disabled");
            
}}

              function habilitar1() {
    if($("#nati:checked").val()==1) {
           $("#work").removeAttr("disabled" , "disabled");

            }
    else {
                   $("#work").attr('disabled', 'disabled');
}}


       function habilitar2() {
    if($("#worked:checked").val()==1) {
        $("#from").attr('disabled', 'disabled');
         $("#to").attr('disabled', 'disabled');
            }
    else {
             $("#from").removeAttr("disabled");
             $("#to").removeAttr("disabled");
            
}}

              function habilitar3() {
    if($("#worked:checked").val()==1) {
              $("#from").removeAttr("disabled");
             $("#to").removeAttr("disabled");

            }
    else {
                   $("#from").attr('disabled', 'disabled');
         $("#to").attr('disabled', 'disabled');
}}