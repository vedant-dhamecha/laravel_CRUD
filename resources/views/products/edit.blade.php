<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Operation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Edit a Product</h1>
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{route('product.update', ['product' => $product])}}" class="needs-validation" novalidate>
            @csrf 
            @method('put')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" value="{{$product->name}}" class="form-control" required>
                <div class="invalid-feedback">Please provide a name.</div>
            </div>
            <div class="form-group">
                <label for="qty">Qty</label>
                <input type="text" name="qty" id="qty" placeholder="Qty" value="{{$product->qty}}" class="form-control" required>
                <div class="invalid-feedback">Please provide a quantity.</div>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" placeholder="Price" value="{{$product->price}}" class="form-control" required>
                <div class="invalid-feedback">Please provide a price.</div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" id="description" placeholder="Description" value="{{$product->description}}" class="form-control" required>
                <div class="invalid-feedback">Please provide a description.</div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
