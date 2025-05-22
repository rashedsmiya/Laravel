<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Crud</title>
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
            <div class="container">
                <div class="text-right">
                    <a href="products/create" class="btn btn-dark mt-2">New Products</a>
            </div>
                <table class="table table-hover mt-2">
                    <thead>
                        <tr>
                            <th>Sno.</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>

                            <td><a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->name }}</a></td>
                            <td>
                                <img src="products/{{ $product->image }}" class="rounded-circle" width="50" height="50/">
                            </td>
                            <td>
                                <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>

                                <form method="POST" class="d-inline" action="products/{{ $product->id }}/delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>  
                            </td>     
                        </tr>
                        @endforeach 
                    </tbody>
                </table>          
            </div>    
</body>
</html>