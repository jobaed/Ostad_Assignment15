<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Products</title>
</head>

<body>



    <div class="container py-5">

        <div class="d-flex justify-content-between py-3">
            <h2>
                All Products
            </h2>

            <div>
                <a href="{{ route('products.create') }}" class="btn btn-sm btn-success">Add Product</a>
            </div>
        </div>
        <div>
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('danger'))
                <div class="alert alert-danger">
                    {{ session()->get('danger') }}
                </div>
            @endif
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">S/L</th>
                    <th scope="col">Tittle</th>
                    <th scope="col">Content</th>
                    <th scope="col">Sku</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->tittle }}</td>
                        <td>{{ $product->content }}</td>
                        <td>{{ $product->sku }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td class="d-flex">



                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary me-1"><i
                                    class="fa-solid fa-pen"></i></a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this task?')"><i class="fa-solid fa-trash"></i></button>
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


    <script src="https://kit.fontawesome.com/0e5659ef6a.js" crossorigin="anonymous"></script>
</body>

</html>
