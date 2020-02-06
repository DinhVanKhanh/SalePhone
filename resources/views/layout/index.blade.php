
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Shop bán hàng online</title>
    <base href="{{ asset('') }}">
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/starter-template/starter-template.css" rel="stylesheet">
    
  </head>
  <body>
  

     {{--  @include('config.php'); // knoi csdl
      $query = new config(); //khoi tao csdl de truy van
      @session_start();
      @session_destroy(); --}}
		  @include('layout/header')
	  	@include('layout/title')
		  {{-- @include('body.php'); --}}
      @yield('body')
	 	  @include('layout/footer')


    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    

    <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script> -->
  </body>
</html>


  			


