<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        /* Add custom styles here if needed */
    </style>
</head>
<body>
    <div class="container">
        <h1>User Management</h1>
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{route('product.create')}}">Create a User</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company</th>
                            <th>Job Role</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product )
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->email}}</td>
                                <td>{{$product->company}}</td>
                                <td>{{$product->role}}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{route('product.edit', ['product' => $product])}}">Update</a>
                                </td>
                                <td>
                                    <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                                        @csrf 
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
