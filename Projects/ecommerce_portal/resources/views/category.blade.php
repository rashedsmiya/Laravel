@extends('layouts.main')

@push('title')
    <title>Category</title>
@endpush

@section('content')
 <div class="contain-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Category</h1>
 </div>

{{--    Products--}}  

 <section class="my-5">
     <div class="container">

         <div class="d-flex">
             <div class="p-2 flex-grow-1"><h2>Recently Viewed</h2></div>
             <div class="p-2"><a href="#" class="btn btn-sm theme-orange-btn text-light">View All</a></div>

         </div>
         <div class="row theme-product">
             <div class="col-lg-3 mb-4">
                 <div class="card">

                     <a href="#"><img src="{{asset('build/assets/images/products/5.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                         <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Camera</a></h6>
                         <h5 class="card-title text-center">$ 2499.00</h5>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 mb-4">
                 <div class="card">

                     <a href="#"><img src="{{asset('build/assets/images/products/6.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                         <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Women Shoes</a></h6>
                         <h5 class="card-title text-center">$ 1099.00</h5>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 mb-4">
                 <div class="card">

                     <a href="#"><img src="{{asset('build/assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                         <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LED TV</a></h6>
                         <h5 class="card-title text-center">$ 5999.00</h5>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 mb-4">
                 <div class="card">

                     <a href="#"><img src="{{asset('build/assets/images/products/5.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                         <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LED TV</a></h6>
                         <h5 class="card-title text-center">$ 5999.00</h5>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 mb-4">
                 <div class="card">

                     <a href="#"><img src="{{asset('build/assets/images/products/6.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                         <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Camera</a></h6>
                         <h5 class="card-title text-center">$ 599.00</h5>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 mb-4">
                 <div class="card">

                     <a href="#"><img src="{{asset('build/assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                         <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Women Shoes</a></h6>
                         <h5 class="card-title text-center">$ 799.00</h5>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 mb-4">
                 <div class="card">

                     <a href="#"><img src="{{asset('build/assets/images/products/8.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                         <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LED TV</a></h6>
                         <h5 class="card-title text-center">$ 5999.00</h5>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 mb-4">
                 <div class="card">

                     <a href="#"><img src="{{asset('build/assets/images/products/10.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                         <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LED TV</a></h6>
                         <h5 class="card-title text-center">$ 5999.00</h5>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3 mb-4">
                 <div class="card">

                     <a href="#"><img src="{{asset('build/assets/images/products/8.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                         <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Hand Bag</a></h6>
                         <h5 class="card-title text-center">$ 1399.00</h5>
                     </div>
                 </div>
             </div>

             <div class="col-lg-3">
                 <div class="card">

                     <a href="#"><img src="{{asset('build/assets/images/products/8.jpg')}}" class="card-img-top" alt="..."></a>
                     <div class="card-body">
                         <h6 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing Machine</a></h6>
                         <h5 class="card-title text-center">$ 13999.00</h5>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

@endsection

