<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('title')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link href="{{asset ('assets/css/style.css')}}" rel="stylesheet">
  </head>
  <body>    
                                          
	    <nav class="navbar navbar-expand-lg theme-navbar">
			  <div class="container">
			    <a class="navbar-brand text-light" href="/home"><h1> <img src="{{asset('assets/images/logo/logo.png')}}" style="width: 250px;"> </h1></a>
			    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button> --> 
			    <div>	           
			      <form class="d-flex" role="search">      
			        <input class="form-control form-control-sm" style="width:350px;" type="search" placeholder="Search for Products" aria-label="Search"/>
			        <button class="btn btn-light text-secondary btn-sm" type="submit"><i class="fa-solid fa-search"></i></button>
			      </form>
			    </div>      
			    <div>            
			    	 <a href="#" class="text-decoration-none text-light">Become a Seller</a> 
			    	 <a href="#" class="btn theme-green-btn btn-sm text-light"><i class="fa-solid fa-cart-shopping"></i> Card</a>
			    	 <a href="#" class="btn theme-orange-btn btn-sm text-light"><i class="fa-solid fa-user"></i> Login</a>
			    </div> 
			  </div>  
		</nav>

		<!-- Category Nav  -->  

		<nav class="navbar navbar-expand-lg theme-navbar-light">  
			<div class="container-fluid">			 
				  
				<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
					<ul class="nav">
						<li class="nav-item">
						<a class="nav-link active text-dark"   href="{{url('/category/active/id')}}">Mobile</a>
						</li>
						 <li class="nav-item">
						<a class="nav-link active text-dark" aria-current="page" href="#">Fashion</a>
						</li>   
						<li class="nav-item">   
						<a class="nav-link active text-dark" aria-current="page" href="#">Electronincs</a>
						</li>
						<li class="nav-item">
						<a class="nav-link active text-dark" aria-current="page" href="#">Furniture</a>
						</li>
						<li class="nav-item">
						<a class="nav-link active text-dark" aria-current="page" href="#">Grocery</a>
						</li>
						<li class="nav-item">
						<a class="nav-link active text-dark" aria-current="page" href="#">Applinces</a>
						</li>
					</ul>
				</div>
			</div>     
		</nav>