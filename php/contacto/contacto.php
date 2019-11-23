<?php 

header('Content-Type: text/html; charset=UTF-8');

$errores = "";
$enviado = "";

if(isset($_POST["submit"])){
 //Variables del Metodo $_POST[]
 $nombre = $_POST["nombre"];
 $apellido = $_POST["apellido"];
 $email = $_POST["email"];
 $tituloMensaje = $_POST["tituloMensaje"];
 $mensajeDescripcion = $_POST["mensajeDescripcion"];
 $codigoSeguridad = $_POST["codigoSeguridad"];

 //Verificacion de variables del Metodo $_POST[]
 $verificarNombre = preg_match("/^\S[a-zA-ZAEIOUáéíóúÑñ\s]+$/", $nombre);
 $verificarApellido = preg_match("/^\S[a-zA-ZAEIOUáéíóúÑñ\s]+$/", $apellido);
 $verificarCorreo = preg_match("/^[-\w.%+]{1,50}@(?:[A-Z0-9-]{1,50}\.){1,50}[A-Z]{2,50}$/i", $email);
 $verificarTitulo = preg_match("/^\S[a-zA-ZAEIOUáéíóúÑñ\^$.*+-?!:|()\",;\s]+$/", $tituloMensaje);
 $verificarMensaje = preg_match("/^\S[a-zA-ZAEIOUáéíóúÑñ\^$.*+-?!:|()\",;\s]+$/", $mensajeDescripcion);
 $verificarCodigoSeguridad = preg_match("/^[0-9]+$/", $codigoSeguridad);

 //Validacion del nombre
 if(isset($nombre) && strlen($nombre) >= 1 && strlen($nombre) <= 3){
  $errores .= "Nombre muy corto" . "<br>";
 } 
 elseif(isset($nombre) && strlen($nombre) >= 13){
  $errores .= "Nombre demasiado largo." . "<br>";
 }
 else{
  if(!empty($nombre) && $verificarNombre){
   $nombre = trim($nombre);
   $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
  }
  else{
   $errores .= "Ingresa un Nombre." . "<br>";
  }
 }

 //Validacion del apellido
 if(isset($apellido) && strlen($apellido) >= 1 && strlen($apellido) <= 3){
  $errores .= "Apellido muy corto." . "<br>";
 } 
 elseif(isset($apellido) && strlen($apellido) >= 13) {
  $errores .= "Apellido demasiado largo." . "<br>";
 }
 else{
  if(!empty($apellido) && $verificarApellido){
   $apellido = trim($apellido);
   $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
  } else{
   $errores .= "Ingresa un Apellido." . "<br>";
  }
 }

 /*Validacion del email*/
 if(isset($email) && strlen($email) >= 1 && strlen($email) <= 11){
  $errores .= "Correo Electrónico muy corto." . "<br>";
 } 
 elseif(isset($email) && strlen($email) >= 60){
  $errores .= "Correo Electrónico demasiado largo." . "<br>";
 }
 else{
  if(!empty($email) && $verificarCorreo){
   $email = trim($email);
   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  } 
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
   $errores .= "Ingresa un Correo Electrónico." . "<br>";
  }
  else{
   $errores .= "Ingresa un Correo Electrónico." . "<br>";
  }
 }

 /*Validacion del TituloMensaje*/
 if(isset($tituloMensaje) && strlen($tituloMensaje) >= 1 && strlen($tituloMensaje) <= 3){
  $errores .= "Título muy corto" . "<br>";
 }
 elseif(isset($tituloMensaje) && strlen($tituloMensaje) >= 100){
  $errores .= "Título demasiado largo." . "<br>";
 }
 else{
  if(!empty($tituloMensaje) && $verificarTitulo){
   $tituloMensaje = trim($tituloMensaje);
   $tituloMensaje = filter_var($tituloMensaje, FILTER_SANITIZE_STRING);
  } else{
   $errores .= "Ingresa un Titulo para el Mensaje." . "<br>";
  }
 }

 /*Validacion del Mensaje Descripcion*/
 if(isset($mensajeDescripcion) && strlen($mensajeDescripcion) >= 1 && strlen($mensajeDescripcion) <= 11){
  $errores .= "Mensaje muy corto." . "<br>";
 } 
 elseif(isset($mensajeDescripcion) && strlen($mensajeDescripcion) >= 1000){
  $errores .= "Mensaje demasiado largo." . "<br>";
 }
 else{
  if(!empty($mensajeDescripcion) && $verificarMensaje){
   $mensajeDescripcion = htmlspecialchars($mensajeDescripcion);
   $mensajeDescripcion = stripslashes($mensajeDescripcion);
   $mensajeDescripcion = trim($mensajeDescripcion);
   $mensajeDescripcion = filter_var($mensajeDescripcion, FILTER_SANITIZE_STRING);
  } else{
   $errores .= "Ingresa un Mensaje." . "<br>";
  }
 }


 /*Validacion del codigo de seguridad*/
 if(isset($codigoSeguridad) && strlen($codigoSeguridad) >= 1 && strlen($codigoSeguridad) <= 5){
  $errores .= "Código de Seguridad muy corto" . "<br>";
 }
 elseif(isset($codigoSeguridad) && strlen($codigoSeguridad) >= 7){
  $errores .= "Código de Seguridad demasiado largo." . "<br>";
 }
 else{
  if(!empty($codigoSeguridad) && $verificarCodigoSeguridad){
   session_start();
   if($codigoSeguridad == $_SESSION["numeroAleatorio"] && $verificarCodigoSeguridad) {
    $codigoSeguridad = trim($codigoSeguridad);
    $codigoSeguridad = filter_var($codigoSeguridad, FILTER_SANITIZE_STRING);
   } 
   else{
    $errores .= "Ingresa el Código de Seguridad Correctamente." . "<br>";
   }
  } else{
   $errores .= "Ingresa el Código de Seguridad." . "<br>";
  }
 }

 if(!$errores){

  $enviar_a = "amadorjosemartinezrivera600@gmail.com";
  $asunto = $tituloMensaje . " - TecnoProyectos";
  $mensaje_de = "De: $nombre " . "$apellido \n";
  $mensaje_de .= "Correo: $email \n";
  $mensaje_de .= "Mensaje: " . $mensajeDescripcion;

  mail($enviar_a, $asunto, $mensaje_de);

  $enviado .= "Mensaje Enviado Correctamente.";
 }
} 

require "../../html/contacto/contacto-viewport.php";
?>