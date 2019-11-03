<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->	      
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato&display=swap"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/flaticon/flaticon.css')}}">   
    <link rel="stylesheet" type="text/css" href="{{ asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate/animate.min.css')}}">   
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap/bootstrap.min.css')}}">        
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/default.css')}}">      
    
    <!-- Main Content CSS -->
    @yield('css')

    <!-- Navigation Bar CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/navbar.css')}}">

    <!-- Footer CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/footer.css')}}">
    
    <!-- Title -->
    <title>@yield('title')</title>

  </head>
  <body>

        <!-- Navigation Bar -->
        @include('layout.navbar')

        <!-- Main Content -->
        @yield('content')

        <!-- Footer -->
        @include('layout.footer')

    <!-- Optional JavaScript -->
    <!-- jQuery, Popper.js, Bootstrap JS, WOW JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <script type="text/javascript" src="{{ asset('js/wow/wow.min.js') }}"></script>
              <script>
              new WOW().init();
              </script>
    @yield('script')
    
  </body>
</html>