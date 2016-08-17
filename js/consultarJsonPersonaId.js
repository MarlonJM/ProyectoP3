var app = {
    init: function() {
        this.cargarPersonaId();
        this.cargarTelefono();
        this.cargarEstudios();
        this.cargarProyectos();
        this.cargarGaleria();
        this.cargarPasatiempos();
    },
    cargarPersonaId: function(){
        var id = getGET();
        var urlJson = "./json/jsonPersonaId.php?id=";
        var direc = urlJson.concat(id.id);
        $.ajax({
            url: direc,
            type: "GET",
            dataType: "json",
            success: function(resultado){
                $('#perfil').append(
                    '<div id="profileImg" style="background-image: url(img/'+resultado['profileImg']+')">'
                    +'</div>'
                    +'<h1 style="padding-top:20px;">'+resultado['nombre']+' '+resultado['apellido1']
                    +'</h1>'
                );
                $('#descripcion').append(
                    '<h3 style="padding-top:20px;">Enfasis: '+ resultado['descripcion'] +'</h3>'
                    +'<p>'+resultado['acerca']+'</p>'
                );

                $('#datos').append(
                    '<div class="acercaIcon"><i class="icon-markunread"></i><h2>'+resultado['correo']+'</h2></div>'
                    +'<div style="clear:both;"></div>'
                );
            }
        });
    },
    cargarTelefono: function(){
        var id = getGET();
        var urlJson = "./json/jsonTelefonos.php?id=";
        var direc = urlJson.concat(id.id);
        $.ajax({
            url: direc,
            type: "GET",
            dataType: "json",
            success: function(resultado){
                if (resultado != "") {
                    for (var i = 0; resultado.length > i; i++) {
                        if (resultado[i].id_tipoTelefono = 1) {
                            $('#datos').append(
                                '<div class="acercaIcon" style="padding-top:20px;"><i class="icon-phone"></i><h2>'+resultado[i].telefono+'</h2></div>'
                                +'<div style="clear:both;"></div>'
                            );
                        } else if (resultado[i].id_tipoTelefono = 2) {
                            $('#datos').append(
                                '<div class="acercaIcon"><i class="icon-mobile"></i><h2>'+resultado[i].telefono+'</h2></div>'
                                +'<div style="clear:both;"></div>'
                            );
                        }  
                    }
                }
            }
        });
    },
    cargarEstudios: function(){
        var id = getGET();
        var urlJson = "./json/jsonEstudios.php?id=";
        var direc = urlJson.concat(id.id);
        $.ajax({
            url: direc,
            type: "GET",
            dataType: "json",
            success: function(resultado){
                if (resultado != "") {
                    for (var i = 0; resultado.length > i; i++) {
                        $('#formacion').append(
                            '<div class="acercaIcon" style="padding-top:20px;"><i class="icon-graduation-cap"></i><h2>'+resultado[i].descripcion+'</h2></div>'
                            +'<div style="clear:both;"></div>'
                        );  
                    }
                }
            }
        });
    },
    cargarProyectos: function(){
        var id = getGET();
        var urlJson = "./json/jsonProyectos.php?id=";
        var direc = urlJson.concat(id.id);
        $.ajax({
            url: direc,
            type: "GET",
            dataType: "json",
            success: function(resultado){
                if (resultado != "") {
                    for (var i = 0; resultado.length > i; i++) {
                        $('#proyectos').append(
                            '<div class="proyecto">'
                            +'<div class="proyectoImg" style="background-image: url(img/'+resultado[i].img+')">'
                            
                            +'</div>'
                            +'<h2>'+resultado[i].nombre+'</h2>'
                            +'<p>'+resultado[i].descripcion+'</p>'
                        );  
                    }
                }
            }
        });
    },
    cargarGaleria: function(){
        var id = getGET();
        var urlJson = "./json/jsonGaleria.php?id=";
        var direc = urlJson.concat(id.id);
        $.ajax({
            url: direc,
            type: "GET",
            dataType: "json",
            success: function(resultado){
                if (resultado != "") {
                    for (var i = 0; resultado.length > i; i++) {
                        $('#galeria').append( 
                            '<div class="thumb" style="background-image: url(img/'+resultado[i].img+')">'
                        );

                    }
                }
            }
        });
    },
    cargarPasatiempos: function(){
        var id = getGET();
        var urlJson = "./json/jsonPasatiempos.php?id=";
        var direc = urlJson.concat(id.id);
        $.ajax({
            url: direc,
            type: "GET",
            dataType: "json",
            success: function(resultado){
                if (resultado != "") {
                    for (var i = 0; resultado.length > i; i++) {
                        $('#contenedor').append(
                            '<div class="pasatiempo">'
                            +'<div class="pasatiempoImg" style="background-image: url(img/'+resultado[i].img+')">'+'</div>'
                            +'<h2>'+resultado[i].descripcion+'</h2>'
                            +'</div>'
                        );  
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

function getGET(){
   var loc = document.location.href;
   var getString = loc.split('?')[1];
   var GET = getString.split('&');
   var get = {};

   for(var i = 0, l = GET.length; i < l; i++){
      var tmp = GET[i].split('=');
      get[tmp[0]] = unescape(decodeURI(tmp[1]));
   }
   return get;
}
