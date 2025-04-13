<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Catagory Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3 class="m-0">Category Edit</h3>
                    <a href="{{ route('category.index') }}" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" value="{{ $category->name }}"  name="name" placeholder="Enter Name">
                        </div>
                        <div class="form-group mb-3">
                            <label>Slug</label>
                            <input type="text" class="form-control" value="{{ $category->slug }}"  name="slug" placeholder="Enter Slug">
                        </div>
                        <div class="form-group mb-3">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" placeholder="image/*">
                            @if ($category->image)
                                <img src="{{ asset('storage/'.$category->image) }}" alt="" width="100">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
