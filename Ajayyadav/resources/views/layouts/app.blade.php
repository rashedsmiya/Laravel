<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        
        <nav class="navbar navbar-expand-sm bg-dark">   
        <!-- Link -->
         <ul class="navbar-nav">
            <li class="nav-item">
                <a href="nav-link text-light" href="/">Products</a>  
            </li>    
          </ul>
        </nav>  

        @if($message = Session::get('success'))
          <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
          </div>
        @endif
        
        @yield('main')
        

  </body> 
</html>