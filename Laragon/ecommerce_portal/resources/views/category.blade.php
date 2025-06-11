@extends('layouts.main')
 
 @push('title') 
  
 <title>Category</title>

 @endpush

@section('content')  
    <div class="container-fluid bg-light p-5">
        <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Category</h1>
    </div>

    <!-- Products -->

    <section class="my-5">
		    <div class="container"> 

		    	<div class="row theme-product">
		    		<div class="col-lg-3 mb-4">
		    			<div class="card">
		    				<a href="#"><img src="{{asset('assets/images/products/1.jpg')}}" class="card-img-top" alt="..."></a>
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Campus Shoes</a></h6>
								    <h4 class="card-title text-center">₹ 499.00</h4>						     
								 	
		    				</div>						  
						</div>
		    		</div>

		    		<div class="col-lg-3 mb-4">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/2.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple Watch</a></h6>
								    <h4 class="card-title text-center">₹ 899.00</h4>						     
								 	 
		    				</div>						  
						</div>
		    		</div>

		    		<div class="col-lg-3 mb-4">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/3.jpg')}}" class="card-img-top" alt="...">
		    				 			    				 
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Nike Cap</a></h6>
								    <h4 class="card-title text-center">₹ 599.00</h4>						     
		
		    				</div>						  
						</div>
		    		</div>
  
		    		<div class="col-lg-3 mb-4">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/4.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
								    <h4 class="card-title text-center">₹ 699.00</h4>						     
		    				</div>						  
						</div>
		    		</div>

                    <div class="col-lg-3 mb-4">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/5.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
								    <h4 class="card-title text-center">₹ 699.00</h4>						     
		    				</div>						  
						</div>
		    		</div>

                    <div class="col-lg-3 mb-4">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/8.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
								    <h4 class="card-title text-center">₹ 699.00</h4>						     
		    				</div>						  
						</div>
		    		</div>

                    <div class="col-lg-3 mb-4">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/6.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
								    <h4 class="card-title text-center">₹ 699.00</h4>						     
		    				</div>						  
						</div>
		    		</div>
     
                    <div class="col-lg-3 mb-4">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
								    <h4 class="card-title text-center">₹ 699.00</h4>						     
		    				</div>						  
						</div>
		    		</div>

                    <div class="col-lg-3 mb-4">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/9.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
								    <h4 class="card-title text-center">₹ 699.00</h4>						     
		    				</div>						  
						</div>
		    		</div>

                    <div class="col-lg-3 mb-4">
		    			<div class="card">
		    				<img src="{{asset('assets/images/products/8.jpg')}}" class="card-img-top" alt="...">
		    				 			    				
								  <div class="card-body">
								    <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wooden Chair</a></h6>
								    <h4 class="card-title text-center">₹ 699.00</h4>						     
		    				</div>						  
						</div>
		    		</div> 

		    	</div>
		    </div>
	</section>
	
@endsection