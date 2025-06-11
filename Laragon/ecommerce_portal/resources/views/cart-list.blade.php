@extends('layouts.main')
 
 @push('title')  
 <title>Product Details</title> 
 @endpush  

 @section('content')        

    <div class="container-fluid bg-light p-5">
        <h1 class="text-center text-secondary"><i class="fa-solid fa-cart-shopping"></i> Cart List </h1>
    </div> 

    <!-- Cart List -->

    <section>
		<div class="container">
			<div class="row my-5">
				<div class="col-lg-12">
					<table class="table">
						  <thead>
						  		<tr>
								  	 <th scope="col"><h3>Product</h3></th>
								  	 <th scope="col"><h3>Price</h3></th>
								  	 <th scope="col"><h3>Quantity</h3></th>
								  	 <th scope="col"><h3>Subtotal</h3></th>
								  	 <th scope="col"><h3>Remove</h3></th>
								</tr>
						  </thead>
						  <tbody>
						  	    <tr>
						  	    	<th>
						  	    		<div class="d-flex">
						  	    		<div>
						  	    			<img src="{{asset('assets/images/products/5.jpg')}}" style="width: 100px; "class="rounded-3">
						  	    		 </div>
						  	    		  <div class="p-3"><h4>Camera</h4></div>
						  	    		</div>

							  	    	</th> 
							  	    	 <td>₹ 399.00</td>
							  	    	 <td><div class="d-flex flex-row mb-3">
							  	    	 	
							  	    	 	<div class="p-1">
							  	    	 		<span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
							  	    	 		<span class="mx-2">01</span>
							  	    	 		<span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
							  	    	 	</div>

							  	    	 </div></td>
							  	    	 <td>₹ 5599.00</td>
							  	    	 <td><button type="button" class="btn-close" aria-label="close"></button></td>
							  	    </tr>    


							  	     <tr>
						  	    	<th>
						  	    		<div class="d-flex">
						  	    		<div>
						  	    			<img src="{{asset('assets/images/products/9.jpg')}}" style="width: 100px;"class="rounded-3">
						  	    		 </div>
						  	    		  <div class="p-3"><h4>Handbag</h4></div>
						  	    		</div>

							  	    	</th> 
							  	    	 <td>₹ 4599.00</td>
							  	    	 <td><div class="d-flex flex-row mb-3">
							  	    	 	
							  	    	 	<div class="p-1">
							  	    	 		<span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
							  	    	 		<span class="mx-2">02</span>
							  	    	 		<span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
							  	    	 	</div>

							  	    	 </div></td>
							  	    	 <td>₹ 5199.00</td>
							  	    	 <td><button type="button" class="btn-close" aria-label="close"></button></td>
							  	    </tr>  

							  	     <tr>
						  	    	<th>
						  	    		<div class="d-flex">
						  	    		<div>
						  	    			<img src="{{asset('assets/images/products/2.jpg')}}" style="width: 100px;" class="rounded-3">
						  	    		 </div>
						  	    		  <div class="p-3"><h4>Watch</h4></div>
						  	    		</div>

							  	    	</th> 
							  	    	 <td>₹ 1599.00</td>
							  	    	 <td><div class="d-flex flex-row mb-3">
							  	    	 	
							  	    	 	<div class="p-1">
							  	    	 		<span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
							  	    	 		<span class="mx-2">03</span>
							  	    	 		<span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
							  	    	 	</div>

							  	    	 </div></td>
							  	    	 <td>₹ 599.00</td>
							  	    	 <td><button type="button" class="btn-close" aria-label="close"></button></td>
							  	    </tr>  
						  </tbody>
					</table>
				</div>
			</div>
		</div>
    </section>    
	         
@endsection  
    

