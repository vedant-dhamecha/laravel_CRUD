<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Operation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asar&display=swap" rel="stylesheet">
    <style>
    .concert-one-regular {
        font-family: "Concert One", sans-serif;
        font-weight: 800;
        font-style: normal;
        font-size: 40px;
    }

    .asar-regular {
        font-family: "Asar", serif;
        font-weight: 500;
        font-style: normal;
    }

    .box {
        align: center;
        margin: auto auto;
        width: 800px;
        padding: 10px 50px 10px 10px;
        background: #f9f9f9;
        border: 2px solid #333;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center font-heading mb-6 concert-one-regular">Update a User</h1>
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{route('product.update', ['product' => $product])}}" class="needs-validation box"
            enctype="multipart/form-data" novalidate>
            @csrf
            @method('put')
            <div class="form-group row asar-regular">
                <label for="profile" class="col-sm-2 col-form-label">Profile:</label>
                <div class="col-sm-4">
                    <img src="{{ asset('storage/'.$product->profile) }}" class="img-fluid img-thumbnail mb-2"
                        width="150">
                    <input type="file" name="profile" id="profile" class="form-control" required>
                    <div class="invalid-feedback">Please upload a profile picture.</div>
                </div>
            </div>

            <div class="form-group row asar-regular">
                <label for="date" class="col-sm-2 col-form-label">Date:</label>
                <div class="col-sm-5">
                    <input type="date" name="date" id="date" placeholder="required" class="form-control"
                        value="{{$product->date}}" required>
                    <div class="invalid-feedback">Please provide a date.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-5">
                    <input type="text" name="name" id="name" placeholder="Name" value="{{$product->name}}"
                        class="form-control" required>
                    <div class="invalid-feedback">Please provide a name.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label class="col-sm-2">Qualification:</label>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="qua[]" id="ug" value="UG"
                            {{ strpos($product->qua, 'UG') !== false ? 'checked' : '' }}>
                        <label class="form-check-label" for="ug">UG</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="qua[]" id="pg" value="PG"
                            {{ strpos($product->qua, 'PG') !== false ? 'checked' : '' }}>
                        <label class="form-check-label" for="pg">PG</label>
                    </div>
                    <div class="invalid-feedback">Please select a Qualification</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="email" pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$" name="email" id="email"
                        placeholder="email" value="{{$product->email}}" class="form-control" required>
                    <div class="invalid-feedback">Please provide a email.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label for="company" class="col-sm-2 col-form-label">Company</label>
                <div class="col-sm-5">
                    <input type="text" name="company" id="company" placeholder="company" value="{{$product->company}}"
                        class="form-control" required>
                    <div class="invalid-feedback">Please provide a company.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label for="role" class="col-sm-2 col-form-label">Job Role:</label>
                <div class="col-sm-5">
                    <input type="radio" id="php" name="role" value="PHP" {{ $product->role == 'PHP' ? 'checked' : ''}}>
                    <label for="php">PHP Intern</label><br>

                    <input type="radio" id="backend" name="role" value="backend"
                        {{ $product->role == 'backend' ? 'checked' : ''}}>
                    <label for="backend">Backend Dev</label><br>

                    <input type="radio" id="frontend" name="role" value="frontend"
                        {{ $product->role == 'frontend' ? 'checked' : ''}}>
                    <label for="frontend">Frontend Dev</label><br>

                    <input type="radio" id="ui" name="role" value="ui" {{ $product->role == 'ui' ? 'checked' : ''}}>
                    <label for="ui">UI Designer</label><br>
                    <div class="invalid-feedback">Please provide a Job Role.</div>
                </div>
            </div>
            <div class="form-group asar-regular">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>