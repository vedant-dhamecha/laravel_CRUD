<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asar&display=swap" rel="stylesheet">
    <style>
    .was-validated input:invalid,
    .was-validated textarea:invalid,
    .was-validated select:invalid {
        border-color: #dc3545;
    }

    .was-validated input:valid,
    .was-validated textarea:valid,
    .was-validated select:valid {
        border-color: #28a745;
    }

    .was-validated .form-control:invalid:not(:focus)~.invalid-feedback,
    .was-validated .form-control:invalid:focus~.invalid-feedback {
        display: block;
    }

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
        padding: 50px 50px 10px 10px;
        background: #f9f9f9;
        border: 2px solid #333;
    }
    </style>
</head>

<body>
    <div class="container vh-100 gradient-custom">
        <h1 class="text-center font-heading mb-6 concert-one-regular">Create a New User</h1>
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <br>
        <form method="post" action="{{route('product.store')}}" class="needs-validation box" novalidate
            enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="form-group row asar-regular">
                <label for="profile" class="col-sm-2 col-form-label">Profile:</label>
                <div class="col-sm-4">
                    <input type="file" name="profile" id="profile" class="form-control" required>
                    <div class="invalid-feedback">Please upload a profile picture.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-5">
                    <input type="text" name="name" id="name" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a name.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-5">
                    <input type="email" pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$" name="email" id="email"
                        placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label for="date" class="col-sm-2 col-form-label">Date:</label>
                <div class="col-sm-5">
                    <input type="date" name="date" id="date" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a date.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label class="col-sm-2">Qualification:</label>
                <div class="col-sm-5">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="qua[]" id="ug" value="UG" required>
                        <label class="form-check-label" for="ug">UG</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="qua[]" id="pg" value="PG" required>
                        <label class="form-check-label" for="pg">PG</label>
                    </div>
                    <div class="invalid-feedback">Please select a qualification.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label for="company" class="col-sm-2 col-form-label">Company:</label>
                <div class="col-sm-5">
                    <input type="text" name="company" id="company" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a company.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <label class="col-sm-2">Job Role:</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="php" value="PHP" required>
                        <label class="form-check-label" for="php">PHP Intern</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="backend" value="Backend" required>
                        <label class="form-check-label" for="backend">Backend Dev</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="frontend" value="Frontend"
                            required>
                        <label class="form-check-label" for="frontend">Frontend Dev</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="ui" value="UI" required>
                        <label class="form-check-label" for="ui">UI Designer</label>
                    </div>
                    <div class="invalid-feedback">Please select a job role.</div>
                </div>
            </div>
            <div class="form-group row asar-regular">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Save a New User</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>