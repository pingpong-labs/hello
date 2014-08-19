<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>@yield('title', 'Administrator')</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="{{ a('css/bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ a('css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ a('css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ a('css/icon.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ a('css/font.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ a('css/app.css') }}" type="text/css" />  
    <!--[if lt IE 9]>
    <script src="{{ a('js/ie/html5shiv.js') }}"></script>
    <script src="{{ a('js/ie/respond.min.js') }}"></script>
    <script src="{{ a('js/ie/excanvas.js') }}"></script>
  <![endif]-->
</head>
<body class="" >
  <section class="vbox">
    @include('admin.partials.header')
    <section>
      <section class="hbox stretch">
        @include('admin.partials.aside')
        <section id="content">
          <section class="vbox">    
            <header class="header bg-white b-b b-light">
              <p>@yield('header')</p>
            </header>      
            <section class="scrollable wrapper">
              @yield('content')
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>
  </section>
  <script src="{{ a('js/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ a('js/bootstrap.js') }}"></script>
  <!-- App -->
  <script src="{{ a('js/app.js') }}"></script>  
  <script src="{{ a('js/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ a('js/app.plugin.js') }}"></script>
</body>
</html>
