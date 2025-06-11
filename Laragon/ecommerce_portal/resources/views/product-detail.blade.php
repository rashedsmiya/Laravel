@extends('layouts.main')
 
 @push('title')  
 <title>Product Details</title>
 @endpush  

 @section('content')      

    <div class="container-fluid bg-light p-5">
        <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Product Detail </h1>
    </div> 
           
    <section class="my-5">   
            <div class="container">  
                <div class="row"> 
                    <div class="col-lg-4">                          
                          <img src="{{asset('assets/images/products/1.jpg')}}" class="rounded-full img-thumbnail img-fluid">
                    </div> 
                    <div class="col-lg-8"> 
                        <div>                                      
                             <h2>Women Shoes</h2>     
                             <h5>₹ 599.00</h5>   
                             <div>     
                                <div class="d-flex flex-row mb-3">
                                  <div>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star"></span>
                             </div>
                             <div class="p-1 mx-2">
                                 <h6>(2 Customer Ratings)</h6>  
                               </div>   
                             </div>
                            </div>       

                            <div>
                                 <div class="d-flex flex-row mb-3">
                                     <div class="p-1"><h6>Quantity</h6></div>
                                     <div class="p-1">  
                                        <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                                        <span class="mx-2">01</span>   
                                        <span class="btn btn-secondary btn-sm rounded-end-pill"><i class="fa-solid fa-plus"></i></span>
                                        </div>
                                 </div>
                            </div>   

                              <p>The Lorem ipsum text is derived from sections 1.10.32 and 1.10.33 of Cicero's De finibus bonorum et malorum.[6][7] The physical source may have been the 1914 Loeb Classical Library edition of De finibus, where the Latin text, presented on the left-hand (even) pages, breaks off on page 34 with "Neque porro quisquam est qui do-" and continues on page 36 with "lorem ipsum ...," suggesting that the galley type of that page was mixed up to make the dummy text seen today</p> 

                            <div>    
                                <a class="btn theme-green-btn text-light me-1 rounded-pill">Add To Cart</a>
                                <a class="btn theme-orange-btn text-light rounded-pill">Buy Now</a>
                            </div>   
                        </div>    
                    </div>
                         
                    <div class="my-4"> 
                        <h4>Product Description</h4>  
                        <p>
                        The Lorem ipsum text is derived from sections 1.10.32 and 1.10.33 of Cicero's De finibus bonorum et malorum.[6][7] The physical source may have been the 1914 Loeb Classical Library edition of De finibus, where the Latin text, presented on the left-hand (even) pages, breaks off on page 34 with "Neque porro quisquam est qui do-" and continues on page 36 with "lorem ipsum ...," suggesting that the galley type of that page was mixed up to make the dummy text seen today</p>
                        <p> 
                            The Lorem ipsum text is derived from sections 1.10.32 and 1.10.33 of Cicero's De finibus bonorum et malorum.[6][7] The physical source may have been the 1914 Loeb Classical Library edition of De finibus, where the Latin text, presented on the left-hand (even) pages, breaks off on page 34 with "Neque porro quisquam est qui do-" and continues on page 36 with "lorem ipsum ...," suggesting that the galley type of that page was mixed up to make the dummy text seen today.
                        </p>
                           
                        <p>    
                            The Lorem ipsum text is derived from sections 1.10.32 and 1.10.33 of Cicero's De finibus bonorum et malorum.[6][7] The physical source may have been the 1914 Loeb Classical Library edition of De finibus, where the Latin text, presented on the left-hand (even) pages, breaks off on page 34 with "Neque porro quisquam est qui do-" and continues on page 36 with "lorem ipsum ...," suggesting that the galley type of that page was mixed up to make the dummy text seen today.  
                        </p>
                          
                    </div>
                         
                    <div>  
                        <section class="my-5">
                            <div class="container">  
                                                
                                <div class="d-flex">
                                    <div class="flex-grow-1"><h2>Recently Products</h2></div>
                                    <div><a href="/" class="btn btn-sm theme-orange-btn text-light rounded-pill">View All</a></div>
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
                    </div>
                    <hr> 
                       <!-- Review -->
                        <section>
                            <h2>02 Reviews</h2>
                            <div class="row mt-4">
                                <div class="col-lg-1">
                                    <img src="{{asset('assets/images/review/user.png')}}" class="rounded-circle img-fluid">
                                </div>
                                <div class="col-lg-11 mt-4">
                                     <div>
                                         <h4>John Doe</h4>
                                     </div>   
                                     <div class="d-flex">
                                         <div class="flex-grow-1"><h6>19 Dec, 2024</h6></div>
                                         <div>
                                             <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star checked"></span>
                                         </div>                                         
                                     </div>   
                                     <p> suggesting that the galley type of that page was mixed up to make the dummy text seen today</p>
                                     <div> 
                                         <a class="btn theme-orange-btn btn-sm text-light rounded-pill">Reply</a>
                                     </div>
                                </div>
                            </div>      

                                  <div class="row mt-4">
                                <div class="col-lg-1">
                                    <img src="{{asset('assets/images/review/user.png')}}" class="rounded-circle img-fluid">
                                </div>
                                <div class="col-lg-11 mt-4">
                                     <div>
                                         <h4>Alen Musk</h4>
                                     </div>   
                                     <div class="d-flex">
                                         <div class="flex-grow-1"><h6>19 Nov, 2024</h6></div>
                                         <div>
                                             <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star checked"></span>
                                             <span class="fa fa-star checked"></span>
                                         </div>                                         
                                     </div> 
                                     <p> suggesting that the galley type of that page was mixed up to make the dummy text seen today</p>
                                     <div> 
                                         <a class="btn theme-orange-btn btn-sm text-light rounded-pill">Reply</a>
                                     </div> 
                                </div> 
                             </div>
                            </div>        
                         </div>
                    </section> 

                    <!-- Add a Review -->

                    <section> 
                        <div class="container my-5 bg-light p-5">
                            <h2>Add a review</h2>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form>
                                        <div class="form-text">Rete This Product? *

                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>

                                        <div class="row my-3">
                                            <div class="col-lg-6 mb-3">
                                                 <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                 <input type="email" class="form-control form-control-lg" placeholder="Your Email">
                                             </div>                                             

                                           <div class="col-lg-12 mb-3">
                                                 <textarea class="form-control form-control-lg" placeholder="Your Message" rows="4"></textarea>
                                             </div> 

                                             <div>
                                                 <a class="btn theme-orange-btn btn-sm text-light rounded-pill">Post a Comment <i class="fa-solid fa-arrow-right"></i></a>
                                             </div>
                                           </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>   
    </section> 
	         
@endsection  
    

