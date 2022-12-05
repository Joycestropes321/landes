<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
    <title>App Name - @yield('title')</title> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  

  <!-- Bootstrap CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="{{ asset('css/elegant-icons-style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

  <!-- Custom styles -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet" />
<style>
    
</style>
  @yield('head')
 
</head>
<body
        style="background-image: url({{ asset('landing/images/hero_2.jpg') }});"
        data-aos="fade">

<input type="hidden" id="url" value="{{ url('') }}">

 <div class="container">

@yield('content')

  </div>
  
  <!-- javascripts -->
  <script src="{{ asset('js/jquery.js' ) }}"></script>
  <script src="{{ asset('js/jquery-ui-1.10.4.min.js') }}"></script>
  <script src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <!-- bootstrap -->
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/beedy.js') }}"></script> 

    @yield('footer')
  
 
</body>
</html>