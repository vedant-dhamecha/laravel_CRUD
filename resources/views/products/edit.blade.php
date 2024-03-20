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
        <h1>Edit a User</h1>
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
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="email" value="{{$product->email}}" class="form-control" required>
                <div class="invalid-feedback">Please provide a email.</div>
            </div>
            <div class="form-group">
                <label for="price">Company</label>
                <input type="text" name="company" id="company" placeholder="company" value="{{$product->company}}" class="form-control" required>
                <div class="invalid-feedback">Please provide a company.</div>
            </div>
            <div class="form-group">
                <label for="description">Job Role</label>
                <input type="text" name="role" id="role" placeholder="role" value="{{$product->role}}" class="form-control" required>
                <div class="invalid-feedback">Please provide a role.</div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
