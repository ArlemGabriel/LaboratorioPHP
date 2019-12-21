function validarusuariotemp(){
    var usuario, contrasena;
    console.log("ENTRE");
    usuario = document.getElementById("authusuario").value;
    contrasena = document.getElementById("authpass")

    if(usuario !== "Gabriel123" && contrasena !== "ABCDef123"){
        $('#authalert').show();
        return false;
    }
}