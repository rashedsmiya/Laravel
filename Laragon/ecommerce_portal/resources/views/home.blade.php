@extends('layouts.main')
 @push('title')
 <title>Home Page</title>
 @endpush
@section('content')  
	<div id="carouselExample" class="carousel slide">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="{{asset('assets/images/slider1.png')}}" class="d-block w-100" alt="slider 1">
	    </div>
	    <div class="carousel-item">
	      <img src="{{asset('assets/images/slider2.png')}}" class="d-block w-100" alt="slider 2">
	    </div>
	    <div class="carousel-item">  
	      <img src="{{asset('assets/images/slider3.png')}}" class="d-block w-100" alt="slider 3">
	    </div>  
	  </div>  
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button> 
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
    
	<!-- Product Section -->
                        
	<section class="my-5">
		    <div class="container"> 
		    	
		    	<div class="d-flex">
		    		<div class="flex-grow-1"><h2>Top Deals</h2></div>
		    		<div><a href="/" class="btn btn-sm theme-green-btn text-light">View All</a></div>
		    	</div>

		    	<div class="row theme-product">
		    		<div class="col-lg-3">
		    			<div class="card">
		    				<a href="#"><img src="{{asset('assets/images/products/1.jpg')}}" class="card-img-top" alt="..."></a>
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Campus Shoes</a></h6>
								    <h4 class="card-title text-center">₹ 499.00</h4>						     
								 	
		    				</div>						  
						</div>
		    		</div>

		    		<div class="col-lg-3">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/2.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple Watch</a></h6>
								    <h4 class="card-title text-center">₹ 899.00</h4>						     
								 	 
		    				</div>						  
						</div>
		    		</div>

		    		<div class="col-lg-3">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/3.jpg')}}" class="card-img-top" alt="...">
		    				 			    				 
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Nike Cap</a></h6>
								    <h4 class="card-title text-center">₹ 599.00</h4>						     
		
		    				</div>						  
						</div>
		    		</div>
  
		    		<div class="col-lg-3">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/4.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
								    <h4 class="card-title text-center">₹ 699.00</h4>						     
		    				</div>						  
						</div>
		    		</div>
		    	</div>
		    </div>
	</section>

	<!-- Recently Viewe -->

		<section class="my-5">
		    <div class="container"> 
		    	
		    	<div class="d-flex">
		    		<div class="flex-grow-1"><h2>Recently View</h2></div>
		    		<div><a href="/" class="btn btn-sm theme-orange-btn text-light">View All</a></div>
		    	</div>

		    	<div class="row theme-product">
		    		<div class="col-lg-3">
		    			<div class="card">
		    				<a href="#"><img src="{{asset('assets/images/products/5.jpg')}}" class="card-img-top" alt="..."></a>
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Campus Shoes</a></h6>
								    <h4 class="card-title text-center">₹ 4199.00</h4>						     
								 	
		    				</div>						  
						</div>
		    		</div>

		    		<div class="col-lg-3">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/6.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple Watch</a></h6>
								    <h4 class="card-title text-center">₹ 1899.00</h4>						     
								 	 
		    				</div>						  
						</div>
		    		</div>

		    		<div class="col-lg-3">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="...">
		    				 			    				 
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Nike Cap</a></h6>
								    <h4 class="card-title text-center">₹ 1599.00</h4>						     
		
		    				</div>						  
						</div>
		    		</div>
  
		    		<div class="col-lg-3">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/8.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
								    <h4 class="card-title text-center">₹ 1699.00</h4>						     
		    				</div>						  
						</div>
		    		</div>
		    	</div>
		    </div>
	</section>

@endsection     