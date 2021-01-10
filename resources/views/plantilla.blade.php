<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ZYB | INGENIERIA</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="/template/img/zyb_logo2.png" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/template/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/template/lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/template/css/style.css" rel="stylesheet">

</head>
  <body>

  <div id="preloader"></div>

<!-- barra de navegacion -->

<header id="header">

<div class='sociales'>
    <div id='logo' class='pull-right'><a target='blank' href="https://www.instagram.com/zyb.ingenieria/"><i
                class='fa fa-instagram'></i></a></div>
    <div id='logo' class='pull-right'><a target='blank' href="https://www.facebook.com/ZYB-Gesti%C3%B3n-Ingenieria-101746941285274"><i
                class='fa fa-facebook'></i></a></div>
    <div id='logo' class='pull-right'><a target='blank' href="https://www.linkedin.com/in/zyb-ingenieria-919427203/"><i
                class='fa fa-linkedin'></i></a></div>
</div>

    <div class="container">
      <div id="logo" class="pull-left">
        <a href="/"><img src="/template/img/zyb_logo5.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="/#services"><b>{{trans('zyb.return')}}</b></a></li>
          <li><a href="/#contact"><b>{{trans('zyb.contact')}}</b></a></li>
          <!-- <li><a class="nav-link" href="{{ route('admin') }}">Administrador</a></li> -->
        </ul>
      </nav>
    </div>
  </header>

 <!--==========================
  Services Section
  ============================-->
  <section id="services">
    <div class="container wow fadeInUp">
      <div class="row">
        

<!-- aca se enuentra nuestro contenido de la pagina -->

  <div class='container'>
    @yield('seccion')
  </div>

<!-- ----------------------------------------------- -->

      </div>
    </div>
  </section>

 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    </div>
  </div>
</nav>

 <!--==========================
  Footer
============================-->

  <footer id="footer-servicios">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class='copyright'>
              <!-- <i class="fa fa-envelope"></i> -->
              <img src="/template/img/zyb_logo5.png" alt="" title="" /></img>
              <a href="MAILTO:zyb.gestion.ingenieria.com"><strong>{{ trans('zyb.mail') }}</strong></a>
            </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- #footer

  Required JavaScript Libraries -->
  <script src="/template/lib/jquery/jquery.min.js"></script>
  <script src="/template/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/template/lib/superfish/hoverIntent.js"></script>
  <script src="/template/lib/superfish/superfish.min.js"></script>
  <script src="/template/lib/morphext/morphext.min.js"></script>
  <script src="/template/lib/wow/wow.min.js"></script>
  <script src="/template/lib/stickyjs/sticky.js"></script>
  <script src="/template/lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="/template/js/custom.js"></script>

  <script src="/template/contactform/contactform.js"></script>
  </body>
</html>