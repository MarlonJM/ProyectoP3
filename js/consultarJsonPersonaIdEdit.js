var app = {
    init: function() {
        this.cargarPersonaIdEdit();
        this.cargarTelefonoEdit();
        this.cargarEstudiosEdit();
        this.cargarProyectosEdit();
        this.cargarGaleriaEdit();
        this.cargarPasatiemposEdit();
    },
    cargarPersonaIdEdit: function(){
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
                    +'<input type= "text" name= "nombre" value="'+resultado['nombre']+'">'
                    +'<input type= "text" name= "apellido1" value="'+resultado['apellido1']+'">'
                );
                $('#descripcion').append(
                    'Enfasis: <input type="text" value="'+ resultado['descripcion'] +'" name="enfasis">'
                    +'<textarea rows="4" cols="50">'+resultado['acerca']+'</textarea>'
                );

                $('#datos').append(
                    '<div class="acercaIcon"><i class="icon-markunread"></i><input type="text" value="'+ resultado['correo'] +'" name="correo">'
                    +'</div>'
                    +'<div style="clear:both;"></div>'
                );
            }
        });
    },
    cargarTelefonoEdit: function(){
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
                                '<div class="acercaIcon" style="padding-top:20px;"><i class="icon-phone"></i><input type="text" value="'+resultado[i].telefono+'"name="telefono">'
                                +'</div>'
                                +'<div style="clear:both;"></div>'
                            );
                        }  
                    }
                }
            }
        });
    },
    cargarEstudiosEdit: function(){
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
                            '<div class="acercaIcon" style="padding-top:20px;"><i class="icon-graduation-cap"></i><input type="text" value="'+resultado[i].descripcion+'" name="estudio">'
                            +'</div>'
                            +'<div style="clear:both;"></div>'
                        );  
                    }
                }
            }
        });
    },
    cargarProyectosEdit: function(){
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
                            +'<input type="text" value="'+resultado[i].nombre+'" name="proyecto">'
                            +'<textarea rows="4" cols="50">'+resultado[i].descripcion+'</textarea>'
                        );  
                    }
                }
            }
        });
    },
    cargarGaleriaEdit: function(){
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
    cargarPasatiemposEdit: function(){
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
                            +'<input type"text" value="'+resultado[i].descripcion+'" name="descripcion">'
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
