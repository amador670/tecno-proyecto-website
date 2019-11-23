document.getElementById("btnEnviarFormulario").addEventListener("click", function verificacionPrincipal(noEnviar){

 //Variables principales del formulario
 var nombre = document.getElementById("nombre").value,
     apellido = document.getElementById("apellido").value,
     correoElectronico = document.getElementById("correoElectronico").value,
     tituloMensaje = document.getElementById("tituloMensaje").value,
     mensaje = document.getElementById("mensaje").value,
     codigoSeguridad = document.getElementById("codigoSeguridad").value;

 //Verificaciones
 var verificarNombre = /^\S[a-zA-ZAEIOUáéíóúÑñ\s]+$/,
     verificarApellido = /^\S[a-zA-ZAEIOUáéíóúÑñ\s]+$/,
     //Esta verificacion es larga y su significado es el siguiente:
     //Al principio [] permite caracteres - luego seguido de letras y permite entre 1 y 50.
     //Luego sigue un @ seguido entre letras y numeros entre 1 y 50.
     //Continua con un . entre 1 y 50 seguido de letras solamente y solo finaliza con letras
     verificarCorreo = /^[-\w.%+]{1,50}@(?:[A-Z0-9-]{1,50}\.){1,50}[A-Z]{2,50}$/i,
     verificarTitulo = /^\S[a-zA-Z0-9AEIOUáéíóúÑñ\^$.*+-?!:|/()",;\s]+$/,
     verificarMensaje = /^\S[a-zA-Z0-9AEIOUáéíóúÑñ\^$.*+-?!:|/()",;\s]+$/,
     verificarCodigoSeguridad = /^[0-9]+$/;


 if(nombre.length == 0 && apellido.length == 0 && correoElectronico.length == 0 && tituloMensaje.length == 0 && mensaje.length == 0 && codigoSeguridad == 0){
  return false;
 } 

 //Validacion de usuario
 if (nombre.length >= 1 && nombre.length <= 3){
  $("#msjNombreError").fadeIn(500).html("Nombre muy corto.");  
  noEnviar.preventDefault();
  return false;
 }
 else if (nombre.length >= 13){
  $("#msjNombreError").fadeIn(500).html("Nombre demasiado largo.");  
  noEnviar.preventDefault();
  return false;
 } 
 else{
  if(verificarNombre.test(nombre)){
   $("#msjNombreError").fadeOut(300);  
  } else{
   $("#msjNombreError").fadeIn(500).html("Ingresa un Nombre.");  
   noEnviar.preventDefault();
   return false;
  }
 }

 //Validacion de Apellido
 if (apellido.length >= 1 && apellido.length <= 3){
  $("#msjApellidoError").fadeIn(500).html("Apellido muy corto.");  
  noEnviar.preventDefault();
  return false;
 }
 else if (apellido.length >= 13){
  $("#msjApellidoError").fadeIn(500).html("Apellido demasiado largo.");  
  noEnviar.preventDefault();
  return false;
 } 
 else{
  if(verificarApellido.test(apellido)){
   $("#msjApellidoError").fadeOut(300);  
  } else{
   $("#msjApellidoError").fadeIn(500).html("Ingresa un Apellido.");  
   noEnviar.preventDefault();
   return false;
  }
 }

 //Validacion de email.
 if(correoElectronico.length >= 1 && correoElectronico.length <= 11){
  $("#msjCorreoElectronico").fadeIn(500).html("Correo Electrónico muy corto.");
  noEnviar.preventDefault();
  return false;
 } 
 else if(correoElectronico.length >= 60){
  $("#msjCorreoElectronico").fadeIn(500).html("Correo Electrónico demasiado largo.");
  noEnviar.preventDefault();
  return false;
 } 
 else{
  if(verificarCorreo.test(correoElectronico)){
   $("#msjCorreoElectronico").fadeOut(300);
  } else{
   $("#msjCorreoElectronico").fadeIn(500).html("Ingresa un Correo Electrónico.");
   noEnviar.preventDefault();
   return false;
  }
 }

 //Validacion del título del mensaje.
 if(tituloMensaje.length >= 1 && tituloMensaje.length <= 3 ){
  $("#msjTituloMensaje").fadeIn(500).html("Título muy corto.");
  noEnviar.preventDefault();
  return false;
 } 
 else if(tituloMensaje.length >= 100){
  $("#msjTituloMensaje").fadeIn(500).html("Título demasiado largo.");
  noEnviar.preventDefault();
  return false;
 } 
 else{
  if(verificarTitulo.test(tituloMensaje)){
   $("#msjTituloMensaje").fadeOut(300);
  }
  else{
   $("#msjTituloMensaje").fadeIn(500).html("Ingresa un Título.");
   noEnviar.preventDefault();
   return false;
  }
 }

 //Validacion de mensaje
 if(mensaje.length >=1 && mensaje.length <= 11){
  $("#msjMensaje").fadeIn(500).html("Mensaje muy corto.");
  noEnviar.preventDefault();
  return false;
 } 
 else if(mensaje.length >= 1000){
  $("#msjMensaje").fadeIn(500).html("Mensaje demasiado largo.");
  noEnviar.preventDefault();
  return false;
 } 
 else{
  if(verificarMensaje.test(mensaje)){
   $("#msjMensaje").fadeOut(300);
  } else{
   $("#msjMensaje").fadeIn(500).html("Ingresa un Mensaje.");
   noEnviar.preventDefault();
   return false;
  }
 }

 if(codigoSeguridad.length >=1 && codigoSeguridad.length <= 5){
  $("#msjCodigoSeguridad").fadeIn(500).html("Código de Seguridad muy corto.");
  noEnviar.preventDefault();
  return false;
 } 
 else if(codigoSeguridad.length >= 7){
  $("#msjCodigoSeguridad").fadeIn(500).html("Código de Seguridad demasiado largo.");
  noEnviar.preventDefault();
  return false;
 }
 else{
  if(verificarCodigoSeguridad.test(codigoSeguridad)){
   $("#msjCodigoSeguridad").fadeOut(300);
  } 
  else {
   $("#msjCodigoSeguridad").fadeIn(500).html("Ingresa el Código de Seguridad.");
   noEnviar.preventDefault();
   return false;
  } 
 }

 //Corchetes y comillas de cierre de evento click
});


