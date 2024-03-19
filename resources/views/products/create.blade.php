<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Create a Product</h1>
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{route('product.store')}}" class="needs-validation" novalidate>
            @csrf
            @method('post')
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a name.</div>
                </div>
            </div>
            <div class="form-group row">
                <label for="qty" class="col-sm-2 col-form-label">Quantity:</label>
                <div class="col-sm-10">
                    <input type="text" name="qty" id="qty" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a quantity.</div>
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Price:</label>
                <div class="col-sm-10">
                    <input type="text" name="price" id="price" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a price.</div>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description:</label>
                <div class="col-sm-10">
                    <input type="text" name="description" id="description" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a description.</div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Save a New Product</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
