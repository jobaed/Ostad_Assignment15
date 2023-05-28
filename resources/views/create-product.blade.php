<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Add Products</title>
</head>

<body>

    <div class="container py-5">

        <div class="d-flex justify-content-between py-3">
            <h2>
                Add Products
            </h2>

            <div>
                <a href="{{ route('products.index') }}" class="btn btn-sm btn-success">All Product</a>
            </div>
        </div>

        <div class="container">
            <form action="{{ route('products.store') }}" method="POST" class="border rounded p-5 bg-light">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" id="tittle" name="tittle" aria-describedby="tittle"
                        placeholder="Enter Tittle">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Enter Content" name="content" style="height: 150px" id="content"></textarea>
                    <label for="content">Content</label>
                </div>
                <div class="row my-3">
                    <div class="col-md-6">
                        <div class="">
                            <input type="text" class="form-control" id="sky" name="sku"
                                aria-describedby="sky" placeholder="Enter Product SKU">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <input type="number" class="form-control" id="price" name="price"
                                aria-describedby="price" placeholder="Enter Product Price">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-sm px-4 mt-3">Submit</button>
            </form>
        </div>

    </div>

</body>

</html>
