<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>{{ option('site.name') }}</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="{{ a('css/bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ a('css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ a('css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ a('css/icon.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ a('css/font.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ a('css/app.css') }}" type="text/css" />  
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="" >
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xl">
      @yield('content')
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
      <small><br>&copy; {{ date('Y') }}</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
    <script src="{{ a('js/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ a('js/bootstrap.js') }}"></script>
  <!-- App -->
  <script src="{{ a('js/app.js') }}"></script>  
  <script src="{{ a('js/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ a('js/app.plugin.js') }}"></script>
</body>
</html>
