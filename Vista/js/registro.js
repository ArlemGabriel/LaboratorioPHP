
function validar() {
    $('.ag-date').datepicker({
        format: "yyyy/mm/dd"
    });
    var nombre, apellidos, usuario, correo, telefono,contrasena,confcontrasena,exprcorreo,exprtelefono,exprcontrasena,expnombreapellido,exprusuario;
    nombre = document.getElementById("inputName").value;
    apellidos = document.getElementById("inputLastName").value;
    usuario = document.getElementById("inputUsername").value;
    correo = document.getElementById("inputEmail").value;
    telefono = document.getElementById("inputNumber").value;
    contrasena = document.getElementById("inputPassword").value;
    confcontrasena = document.getElementById("inputConfirmPassword").value;

    exprcorreo = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/
    exprcontrasena = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/
    expnombreapellido = /^[a-zA-Z  ]+$/
    exprusuario = /^[a-zA-Z0-9_-]{3,16}$/

    console.log("ENTRE");
        
    if(usuario.length === "" || nombre.length === "" || apellidos === "" || contrasena === "" || correo === ""){
        $('#camposobligatoriosalert').show();
        return false;
    }else{
        $('#camposobligatoriosalert').hide();
    }
    if(contrasena !== confcontrasena){
        $('#passwordconfalert').show();
        return false;
    }else{
        $('#passwordconfalert').hide();
    }
    if(isNaN(telefono)){
        $('#telefonoalert').show();
        return false;
    }else{
        $('#telefonoalert').hide();
    }
    if(!exprcorreo.test(correo)){
        $('#formatocorreoalert').show();
        return false;
    }else{
        $('#formatocorreoalert').hide();
    }
    if(!exprcontrasena.test(contrasena)){
        $('#passwordalert').show();
        return false;
    }else{
        $('#passwordalert').hide();
    }
    if(!expnombreapellido.test(nombre) || !expnombreapellido.test(apellidos)){
        $('#nombreapellidosalert').show();
        return false;
    }else{
        $('#nombreapellidosalert').hide();
    }
    if(!exprusuario.test(usuario)){
        $('#usuarioalert').show();
        return false;
    }else{
        $('#usuarioalert').hide();
    }
}
function validarolvidocontra(){
    var correo, nuevacontra;
    nuevacontra = document.getElementById("inputPassForgot").value;
    correo = document.getElementById("inputEmailForgot").value;
    confnuevacontrasena = document.getElementById("inputConfirmPassForgot").value;

    exprcorreo = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/
    exprcontrasena = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/

    console.log("ENTRE");
    if(nuevacontra === "" || correo === "" || confnuevacontrasena ===! ""){
        $('#camposobligatoriosalertforgot').show();
        return false;
    }else{
        $('#camposobligatoriosalertforgot').hide();
    }
    if(!exprcorreo.test(correo)){
        $('#emailforgotalert').show();
        return false;
    }else{
        $('#emailforgotalert').hide();
    }
    if(nuevacontra !== confnuevacontrasena){
        $('#passconfforgotalert').show();
        return false;
    }else{
        $('#passconfforgotalert').hide();
    }
    if(!exprcontrasena.test(nuevacontra)){
        $('#passforgotalert').show();
        return false;
    }else{
        $('#passforgotalert').hide();
    }
    
}