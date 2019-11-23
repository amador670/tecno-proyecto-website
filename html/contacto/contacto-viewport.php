<!DOCTYPE html>
<html lang="es">
 <head>
  <meta charset="UTF-8">
  <title>Contacto - Tecno Proyectos</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <!--FAVICON-->
  <link rel="icon" type="image/png" href="../../img/favicon1.ico"/> 

  <!--Archivos CSS-->
  <link rel="stylesheet" href="../../css/normalize-resetear-estandar-css/normalize.css">
  <link rel="stylesheet" href="../../css/menu-headroom.css">
  <link rel="stylesheet" href="../../css/fonts-iconos/font-awesome.min.css">
  <link rel="stylesheet" href="../../css/flexboxgrid.min.css">
  <link rel="stylesheet" href="../../css/estilos.css">
  <link rel="stylesheet" href="../../css/html/contacto/estilos-contacto.css">
  <link rel="stylesheet" href="../../css/animated-css-animaciones-de-texto/animate.css">
  <link rel="stylesheet" href="../../css/tabla-de-planes-y-servicios-media-querys/tabla-de-servicios-y-planes.css">

  <!--Metas de FACEBOOK-->
  <!--Lenguaje-->
  <meta property="og:locale" content="es_ES"/>
  <!--Tipo de sitio-->
  <meta property="og:type" content="website"/>
  <!--Titulo-->
  <meta property="og:title" content="Contacto - Tecno Proyectos"/>
  <!--Nombre del sitio-->
  <meta property="og:site_name" content="Tecno Proyectos"/>
  <!--Descripcion-->
  <meta property="og:description" content="Especializados en el desarrollo y diseño de sitios web, usando las tecnologías más modernas y rápidas para crear el sitio web que tanto deseas como lo deseas, diseños innovadores y a un bajo costo en el mercado, porque Tecno Proyectos hace tus sueños realiza."/>
  <!--Imagenes al publicar el sito web-->
  <!--JPEG image-->
  <meta property="og:image:type" content="image/jpeg" />
  <!--JPG image-->
  <meta property="og:image:type" content="image/jpg" />
  <!--PNG image-->
  <meta property="og:image:type" content="image/png" />

  <!--Metas que describen la pagina-->
  <!--Title-->
  <meta name="title" content="Contacto - Tecno Proyectos"/>
  <!--Author-->
  <meta name="author" content="Amador J. Martinez R."/>
  <!--Description-->
  <meta name="description" content="Especializados en el desarrollo y diseño de sitios web, usando las tecnologías más modernas y rápidas para crear sitios web, todo esto a un bajo costo en el mercado."/>
  <!--Language-->
  <meta name="lenguage" content="español, spanish, all language"/>
  <!--Copyright-->
  <meta name="Copyright" content="Todos los derechos de autor reservados."/>
  <!--Robots, para indexar en los navegadores-->
  <meta name="robots" content="index,follow"/>

 </head>
 <body>

  <!--Menu responsive-->
  <div class="espacio-header">
   <header id="header" class="animated-headroom">
    <div class="logo-menu">
     <div class="container">
      <div class="row middle-xs around-xs">

       <div class="logo col-xs-12 col-sm-4"><h1>Tecno Proyectos</h1></div>

       <a href="#" id="btn-menu" class="col-xs-12 end-xs btn-menu"><i class="icono-menu-responsive fa fa-bars" aria-hidden="true"></i><span>Menú</span></a>

       <div id="menu-enlaces" class="menu col-xs-12 col-sm-8 center-xs end-sm">
        <a href="../../index.html"><i class="fa fa-home" aria-hidden="true"></i><span>Inicio</span></a>

          <a href="#"><i class="fa fa-address-card" aria-hidden="true"></i><span>Contacto</span></a>
       </div>

      </div>
     </div>
    </div>
   </header>
  </div>

  <div class="row">
   <div class="container-texto col-xs-12 center-xs">
    <h1>Formulario de Contacto.</h1>
    <p>
     A través del siguiente formulario podrás contactarnos de forma sencilla y rápida, nosotros te responderemos mediante el correo electrónico y/o te devolveremos una llamada rápidamente. Antes de enviarnos tus dudas, preguntas e inquietudes deberás enviar el mensaje correctamente y de la mejor forma explicada y estructurado, para que el mensaje pueda ser respondido rápidamente.
    </p>
    <p> 
     Puedes contactarnos de forma gratuita para preguntar cualquier duda, inquietud o consejo acerca del diseño y desarrollo de páginas web. 
    </p>
   </div>
  </div>


  <div class="fomulario-container row middle-xs around-xs">
   <div class="formulario-estilos col-xs-12 col-md-6">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "UTF-8"); ?>">


     <input type="text" id="nombre" class="formulario-usuario" name="nombre" placeholder="Nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>" maxlength="12" minlength="4">
     <div id="msjNombreError" class="msjError"></div>

     <input type="text" id="apellido" class="formulario-usuario" name="apellido" placeholder="Apellido" value="<?php if(!$enviado && isset($apellido)) echo $apellido?>" maxlength="12" minlength="4">
     <div id="msjApellidoError" class="msjError"></div>

     <input type="email" id="correoElectronico" class="formulario-correo" name="email" placeholder="Correo Electrónico" value="<?php if(!$enviado && isset($email)) echo $email?>" maxlength="60" minlength="11" >
     <div id="msjCorreoElectronico" class="msjError"></div>

     <input type="text" id="tituloMensaje" class="formulario-motivo" name="tituloMensaje" placeholder="Título o motivo del mensaje" value="<?php if(!$enviado && isset($tituloMensaje)) echo $tituloMensaje?>" maxlength="100" minlength="4">
     <div id="msjTituloMensaje" class="msjError"></div>

     <textarea id="mensaje" class="mensaje" name="mensajeDescripcion" placeholder="Mensaje" maxlength="1000" minlength="11" ><?php if(!$enviado && isset($mensajeDescripcion)) echo $mensajeDescripcion?></textarea>
     <div id="msjMensaje" class="msjError"></div>

     <div id="imagenSeguridad"><img src="../../php/contacto/imagen-seguridad.php" alt="Imagen de Seguridad"></div>
     <input type="text" id="codigoSeguridad" name="codigoSeguridad" placeholder="Código de Seguridad" maxlength="6" minlength="6">
     <div id="msjCodigoSeguridad" class="msjError"></div>

     <?php if(!empty($errores)): ?>
     <div class="alert-formulario error">
      <?php echo $errores; ?>
     </div>

     <?php elseif($enviado): ?>
     <div class="alert-formulario sucess">
      <?php echo $enviado; ?>
     </div>

     <?php endif ?>

     <input type="submit" id="btnEnviarFormulario" class="end-xs boton-enviar" value="Enviar Mensaje." name="submit">

    </form>
   </div>

   <div class="imagen-formulario col-xs-12 col-md-6 center-xs animated bounceInDown">
    <img src="../../img/contacto/responsive-contacto.png" alt="Imagen formulario">
   </div>
  </div>

  <div class="contacto-autor row center-xs middle-xs around-xs">
   <div class="texto-autor col-xs-12 col-sm-9">
    <h1>Bibliografía del autor.</h1>
    <p><span><i class="fa fa-quote-left" aria-hidden="true"></i></span> 
     Estudio Ingeniería Informática y he realizado diversos cursos donde se destaca creación, diseño y desarrollo de sitios web. Actualmente he hecho investigaciones por cuenta propia en el área de la programación y diversas ciencias, aficionado de la innovación y a la creación de sitios web. Ayudamos a las personas hacer realidad sus sueños a través de un sitio web y brindarles la mejor atención.
     <span><i class="fa fa-quote-right" aria-hidden="true"></i></span></p>
   </div>

   <div class="foto-autor col-xs-12 col-sm-3">
    <img src="../../img/contacto/autor.jpg" alt="imagen-autor">
   </div>
  </div>

  <div class="hr">
   <img src="../../img/header_colors.png" alt="Linea separadora">
  </div>

  <!--Tabla de precios y planes-->
  <div class="tabla-servicios row top-xs center-xs around-xs">

   <div class="paquetes-de-diseno col-xs-12">
    <h1>Paquetes de diseño web.</h1>
   </div>

   <div class="tabla-de-planes col-xs-12 col-sm-4 center-xs">
    <div class="tabla-individual draw">
     <div class="titulo-tabla scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="20">
      <h2>Paquete Bronze</h2>
      <span><i class="fa fa-star-half-o" aria-hidden="true"></i></span>
     </div>

     <div class="servicios-tabla start-xs scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="20">
      <div class="descripcion-plan center-xs">Página y diseño web sencillo en base a una plantilla a elegir, esta será adaptada al gusto, imagen e identidad del usuario, compatible con dispositivos móviles.</div>

      <ul>
       <li class="lista-espacios">Pagina Sencilla.</li>
       <li class="lista-espacios">Plantilla predeterminada y Adaptación a diferentes tamaños de pantalla.</li>
      </ul>
     </div>

    </div>
    <div class="boton-contratar-servicio boton-efecto-slide-left center-xs"><span>Contratar</span> <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></div>

   </div>

   <div class="tabla-de-planes col-xs-12 col-sm-4 center-xs middle-xs">
    <div class="tabla-individual">
     <div class="titulo-tabla scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="20">
      <h2>Paquete Silver</h2>
      <span><i class="fa fa-star" aria-hidden="true"></i></span>
     </div>

     <div class="servicios-tabla start-xs  scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="20">
      <div class="descripcion-plan center-xs">Página web y diseño personalizado o desarrollado desde cero, agregando animaciones y efectos visuales, compatible con dispositivos móviles y todo tipo de pantallas.</div>

      <ul>
       <li class="lista-espacios">Pagina personalizada.</li>
       <li class="lista-espacios">Animaciones y efectos sencillos.</li>
       <li class="lista-espacios">Alojamiento de contenido web gratis.</li>
      </ul>
     </div>
    </div>

    <div class="boton-contratar-servicio boton-efecto-slide-left center-xs"><span>Contratar</span> <i class="fa fa-heart-o" aria-hidden="true"></i></div>
   </div>

   <div class="tabla-de-planes col-xs-12 col-sm-4 center-xs middle-xs">
    <div class="tabla-individual">
     <div class="titulo-tabla scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="20">
      <h2>Paquete Gold</h2>
      <span><i class="fa fa-diamond" aria-hidden="true"></i></span>
     </div>

     <div class="servicios-tabla start-xs scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="20">

      <div class="descripcion-plan center-xs">Página y diseño web desde cero, además de Marketing Digital con la creación de una página en una red social, o en búsquedas de Google para ayudar a generar más visitas.</div>

      <ul class="lista-precios">
       <li class="lista-espacios">1 Red Social. (Facebook o YouTube).</li>
       <li class="lista-espacios">Impulsador de búsquedas  en Google.</li>       
       <li class="lista-espacios">Dominio .com o .net gratis.</li>
       <li class="lista-espacios">Atención las 24 horas.</li>       
      </ul>
     </div>

    </div>
    <div class="boton-contratar-servicio boton-efecto-slide-left center-xs"><span>Contratar</span> <i class="fa fa-money" aria-hidden="true"></i></div>

   </div>
  </div>

  <!--¿Por que elegirnos?-->
  <div class="habilidades-web-container">
   <div class="titulo-habilidades-container row middle-xs center-xs around-xs">

    <div class="line-decoration-left col-xs-3 col-sm-3"></div>
    <div class="titulo-habilidades col-xs-12 col-sm-6">
     <h1 class="scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="30">
      <i style="color:#292929; padding-right: 5px" class="fa fa-rocket" aria-hidden="true"></i> 
      ¿Por qué elegirnos?
     </h1>
    </div>
    <div class="line-decoration-rigth col-xs-3 col-sm-3"></div>

   </div>

   <div class="contenido-habilidades-container row top-xs center-xs around-xs">

    <div class="contenido-habilidades col-xs-12 col-sm-6 col-md-3 scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="40">
     <img src="../../img/imagenes-habilidades-web/paginas-web-economicas.png" alt="porque-elegirnos-imagen-1">
     <h1>Páginas web al alcance del cliente.</h1>
     <p>Contamos con precios accesibles en el mercado y el mejor servicio para nuestros clientes, disfrutando de muchas funcionalidades disponibles para su sitio web.</p>
    </div>

    <div class="contenido-habilidades col-xs-12 col-sm-6 col-md-3 scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="40">
     <img src="../../img/imagenes-habilidades-web/paginas-web-innovadoras.png" alt="porque-elegirnos-imagen-2">
     <h1>Páginas web profesionales e innovadoras.</h1>
     <p>Los diseños más llamativos e innovadores adaptados a las tendencias web actuales, logrando una mayor atracción para el cliente y mayor reputación para el sitio web. </p>
    </div>

    <div class="contenido-habilidades col-xs-12 col-sm-6 col-md-3 scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="40">
     <img src="../../img/imagenes-habilidades-web/respaldo-del-sitio-web.png" alt="porque-elegirnos-imagen-3">
     <h1>Respaldo del sitio web.</h1>
     <p>Con nosotros no tendrá que preocuparse de algún daño o pérdida de información en su sitio web, mantenemos diariamente su información respaldada y asegurada.</p>
    </div>

    <div class="contenido-habilidades col-xs-12 col-sm-6 col-md-3 scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="40">
     <img src="../../img/imagenes-habilidades-web/soporte-web-ilimitado.png" alt="porque-elegirnos-imagen-4">
     <h1>Soporte web ilimitado.</h1>
     <p>Nuestro equipo de soporte te ayudara a aclarar tus dudas y respuestas de forma rápida y personalizada, preguntas y consejos que necesites de forma gratuita.</p>
    </div>

   </div>
  </div>

  <!--Pie de pagina, final de la pagina. Footer-->
  <footer>
   <div class="container">
    <div class="row middle-xs center-xs scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="30">

     <div class="footer-informacion col-xs-12">

      <p>Este sitio web utiliza cookies <a href="../../html/cookies/cookies.html" class="infoAqui">(Mas Información Aquí)</a>. Si continuas navegando consideramos que aceptas su uso. Los datos personales no son consultados, solo usamos cookies de estadísticas y de redes sociales para facilitar la navegación del usuario en nuestro sitio web.</p>

      <p>Los derechos de diseño, creación y desarrollo web son del autor de este sitio web y  pertenecen a Amador J. Martínez R. Algunas de nuestras imágenes no pertenecen a nosotros y solo son usadas con fines representativos e informativos, sus derechos son reservados para sus respectivos autores y ninguna imagen en nuestro sitio web es usada con fines lucrativos.</p>

      <p>Por medio de nuestras políticas de privacidad y términos de usos le ponemos al tanto de las debidas condiciones de uso en este sitio. La utilización de nuestro sitio web implica su aceptación plena y sin reservas a todas y cada una de las disposiciones incluidas, por lo que si usted no está de acuerdo con cualquiera de las condiciones establecidas, no deberá usar u/o acceder a este sitio.</p>

      <p>Reservamos el derecho a modificar esta Declaración de Privacidad y Términos de Uso en cualquier momento.</p>     
     </div>

     <div class="footer-informacion-copyright col-xs-12 end-xs">
      Todos los derechos reservados. Derechos de autor © Amador J. Martínez R.
     </div>

    </div>
   </div>
  </footer> 

  <!--Script JavaScript-->
  <script src="../../js/jquery-2.2.4.min.js"></script>
  <script src="../../js/headroom-menu-efecto-scroll.min.js"></script>
  <script src="../../js/validacion-de-formulario-de-contactos.js"></script>
  <script src="../../js/animated-efectos-visuales-animados.js"></script>
  <script src="../../js/scrollflow-efectos-visuales-al-hacer-scroll.js"></script>
  <script src="js/animacion-de-boton-contratar-plan.js"></script>

 </body>
</html>