$("#moteur select,#moteur input").change(function() {

    tj = new Array();
    tg = new Array();
    $("#moteur select,#moteur input").each(function() {
        if ($(this).val() === '') {
            // ce champ est vide
        } else {
            // ce champ n'est pas vide
            tj.push('"' + $(this).attr("id") + '": "' + $(this).val() + '" ');
            tg.push('' + $(this).attr("id") + '=' + $(this).val() + '');
            //ttxt+=($(this).attr("id")+"=="+$(this).val()+"**");
            //ttxt[$(this).attr("id")]=$(this).val();
            //alert($(this).attr("id"));
        }
    });

    var get = tg.join('&');
    var tj2 = tj.join();
    var json = "{" + tj2 + "}";
    //var myJsonString = JSON.stringify(ttxt);
    //alert(get);
    idmodule = $(".forajax").attr("data");
    //alert(idmodule); 
    var d = new Date();
    var time = d.getTime();
    $.ajax({

        url: 'module/moteur/ajax.php',


        type: 'GET',

        data: get + "&idmodule=" + idmodule + "&" + time,

        dataType: 'html',

        success: function(code_html, statut) {
            $(".forajax").hide();
            $(".forajax").html(code_html);
            $(".forajax").fadeIn('slow');
        },


        error: function(resultat, statut, erreur) {
            // alert("errorajax");


        }


    });



});