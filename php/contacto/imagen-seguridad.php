<?php
$ancho = 100;
$alto = 30;

//Seleccionamos una imagen existente
$imagen = imagecreatefromjpeg("fondo.jpg") or die("Problemas al cargar la imagen.");

//Color de fondo
$colorImagen = imagecolorallocate($imagen, 210,240,254);  

//Añade el color de relleno a la imagen
imageFill($imagen, 0, 0, $colorImagen);

//Color de letras y rayas
$color_texto = imagecolorallocate($imagen, 0, 0, 0);

$valorAleatorio = rand(100000, 999999);

imageString($imagen, 5, 25, 5, $valorAleatorio, $color_texto);

for($i=0; $i<=2; $i++){
  $x1=rand(0, $ancho);
  $y1=rand(0, $alto);
  $x2=rand(0, $ancho);
  $y2=rand(0, $alto);
  ImageLine($imagen, $x1, $y1, $x2, $y2, $color_texto);
}

header("Content-type: image/jpeg");
ImageJPEG($imagen);
ImageDestroy($imagen);

session_start();
$_SESSION["numeroAleatorio"] = $valorAleatorio;
?>