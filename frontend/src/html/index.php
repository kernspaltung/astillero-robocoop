<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" href="favicon.ico">

   <title>Astillero | NDT</title>

   <link href="assets/css/astillero.min.css" rel="stylesheet">

   <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
   <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>

<body>

   <header class="container-fluid h-10">

      <div id="cabecera-logotipo" class="col-xs-3 col-md-2 col-lg-1 imagen imgLiquid imgLiquidNoFill">
         <img src="http://fakeimg.pl/300x150/efefef/ccc?text=logo">
      </div>

      <!-- nav#menu.hidden-xs>ul.h-100.v-center>li.col-sm-3.h-a>a{Menú $} -->
      <nav id="menu" class="col-sm-6 col-md-7 col-lg-10 h-100 hidden-xs">
         <ul class="h-100">
            <?php for ($i=0; $i < 6; $i++) : ?>
               <li class="col-sm-2 h-100 v-center text-center">
                  <a href="">Menú 1</a>
               </li>
            <?php endfor; ?>
         </ul>
      </nav>

      <div id="cabecera-cuenta" class="col-xs-4 col-md-2 col-lg-1 h-100 text-center">

         <div class="avatar squareW h-50 imagen imgLiquid imgLiquidNoFill m-lr-a">
            <img src="http://fakeimg.pl/200x250/efefef/ccc?text=avatar">
         </div>

         <div class="avatar h-50 fontS v-center">
            <a href="#" class="h-a">
               Mi Cuenta
            </a>
         </div>

      </div>

   </header><!-- /.container -->

   <div id="contenedor-principal" class="container-fluid p0 m0 h-85-v">

      <nav id="ndt-nodos" class="col-xs-3 col-md-2 col-lg-1 h-90 scroll-y">
         <ul class="m0 p0">

            <?php for ($i=0; $i < 16; $i++) : ?>

            <li class="p3">
               <a href="">
                  <div class="imagen w-100 h-5-v imgLiquid imgLiquidFill">
                     <img src="http://fakeimg.pl/200x250/efefef/ccc?text=logonodo" alt="">
                  </div>
                  <div class="titulo w-100 fontS p0">
                     Lorem ipsum dolor sit.
                  </div>
               </a>
            </li>

            <?php endfor;?>

         </ul>
      </nav>

      <main class="col-xs-9 col-md-10 col-lg-11 h-90">
         <div class="col-xs-5 v-center text-center">
            <div class="fontHuge h-a"> 1 </div>
         </div>
         <div class="col-xs-7 v-center text-center">
            <div class="fontHuge h-a"> 2 </div>
         </div>
      </main>

      <nav class="col-xs-12 h-10">

         <?php for ($i=0; $i < 9 ; $i++) : ?>

         <!-- button.herramienta.drag-button.v-center>div>i.fa.fa-cog^+.titulo{Herramienta} -->
         <div class="herramienta shareW drag-button button btn v-center text-center">
            <div class="h-a m-b-1"><i class="fa fa-cog fontXL"></i></div>
            <div class="titulo h-a">
               Herramienta
            </div>
         </div>

         <?php endfor;?>

      </nav>

   </div>

   <footer class="container-fluid h-5 p0">

      <div id="actividades" class="scroll-x container-fluid p0">

         <div class="actividad col-md-3 f-r hidden-md-down button btn unread bold btn-info fontS">
            <div class="titulo col-xs-10 v-center">
               Lorem ipsum dolor sit.
               <span class="actividad-notificaciones bold"> (3)</span>
            </div>
            <div class="icono col-xs-2 v-center text-center">
               <i class="fa fa-bell"></i>
            </div>
         </div>

         <div class="actividad col-xs-3 f-r button btn v-center fontS">
            <div class="titulo col-xs-10 v-center">
               Lorem ipsum dolor sit.

               <span class="actividad-notificaciones"></span>
            </div>
            <div class="icono col-xs-2 v-center text-center">
               <i class="fa fa-angle-up"></i>
            </div>
         </div>

      </div>

   </footer>

   <script src="assets/js/astillero.min.js"></script>

</body>
</html>
