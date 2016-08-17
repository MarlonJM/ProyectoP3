var app = {
    init: function() {
        this.cargarPersona();
    },
    cargarPersona: function(){
        $.ajax({
            url: "./json/jsonPersonas.php",
            type: "GET",
            dataType: "json",
            success: function(resultado){
                if (resultado != " ") {
                    for (var i = 0; resultado.length > i; i++) {
                        $('#team').append(
                            '<div class="profile">' +
                                '<div class="profilePic" style="background-image: url(img/'+resultado[i].profileImg+')">'+
                                '</div>'+
                                '<div class="profileDesc">'+
                                    '<h1>' + resultado[i].nombre + '</h1>'+
                                    '<a href="portafolio.php?id='+ resultado[i].id_persona +'"> Ver Portafolio</a>'+
                                '</div>'+
                            '</div>');    
                    }
                    
                }
            }
        });
    }
}
$(document).ready(
    function () {
        app.init();
    }
);