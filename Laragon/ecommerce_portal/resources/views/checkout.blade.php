@extends('layouts.main')
 
 @push('title')  
 <title>Checkout</title> 
 @endpush  

 @section('content')        

    <div class="container-fluid bg-light p-5">
        <h1 class="text-center text-secondary"><i class="fa-solid fa-cart-shopping"></i> Checkout </h1>
    </div> 
	<!-- Billing Information -->

	              <section> 
                        <div class="container my-5">
                            <h2>Billing Details</h2> 
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
                                    	<div class="row my-3">
                                    		<div class="col-lg-12 mb-3">
                                           <select class="form-select form-control form-control-lg" aria-label="Default section example">
                                           	<option selected>Select your Country</option>
                                           	<option value="1">India</option>
                                           	<option value="2">Nepal</option>
                                           	<option value="3">Australia</option>
                                           	<option value="3">Uk</option>
                                           	<option value="3">Usa</option>
                                           </select>   
                                        </div> 

                                        <div class="row my-3">
                                            <div class="col-lg-6 mb-3">
                                                 <input type="text" class="form-control " placeholder="First Name">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                 <input type="email" class="form-control " placeholder="Last Email">
                                             </div>    

                                             <div class="col-lg-6 mb-3">
                                                 <input type="email" class="form-control " placeholder="Your Email">
                                             </div>  

                                             <div class="col-lg-6 mb-3">
                                                 <input type="email" class="form-control " placeholder="Last phone">
                                             </div>  

                                             <div class="col-lg-6 mb-3">
                                                 <input type="email" class="form-control " placeholder="Pin Code">
                                             </div>   

                                             <div class="col-lg-6 mb-3">
                                                 <input type="email" class="form-control " placeholder="Landmark">
                                             </div>              

                                             <div class="col-lg-6 mb-3">
                                             	 <select class="form-select form-control " aria-label="Default section example">
		                                           	<option selected>Select your City</option>
		                                           	<option value="1">India</option>
		                                           	<option value="2">Nepal</option>
		                                           	<option value="3">Australia</option>
		                                           	<option value="3">Uk</option>
		                                           	<option value="3">Usa</option>
		                                           </select>
                                             </div>       
                                                  
                                             <div class="col-lg-6 mb-3">
                                             	 <select class="form-select form-control  " aria-label="Default section example">
		                                           	<option selected>Select your Country</option>
		                                           	<option value="1">India</option>
		                                           	<option value="2">Nepal</option>
		                                           	<option value="3">Australia</option>
		                                           	<option value="3">Uk</option>
		                                           	<option value="3">Usa</option>
		                                           </select>
                                             </div>                      
                                             	
                                           <div class="col-lg-12 mb-3">
                                                 <textarea class="form-control  " placeholder="Your Address" rows="4"></textarea>
                                             </div> 

                                             <!-- <div>
                                                 <a class="btn theme-orange-btn btn-sm text-light rounded-pill">Post a Comment <i class="fa-solid fa-arrow-right"></i></a>
                                             </div> -->
                                           </div>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
	         
@endsection  
    
	
