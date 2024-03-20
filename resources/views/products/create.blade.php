<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <style>
        .was-validated input:invalid {
            border-color: #dc3545;
        }

        .was-validated input:valid {
            border-color: #28a745;
        }

        .was-validated textarea:invalid {
            border-color: #dc3545;
        }

        .was-validated textarea:valid {
            border-color: #28a745;
        }

        .was-validated select:invalid {
            border-color: #dc3545;
        }

        .was-validated select:valid {
            border-color: #28a745;
        }

        .was-validated .form-control:invalid:not(:focus) ~ .invalid-feedback,
        .was-validated .form-control:invalid:focus ~ .invalid-feedback {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create a User</h1>
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
        <form method="post" action="{{route('product.store')}}" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="form-group row">
                <label for="profile" class="col-sm-2 col-form-label">Profile:</label>
                <div class="col-sm-10">
                    <input type="file" name="profile" id="profile" class="form-control" required>
                    <div class="invalid-feedback">Please upload a profile picture.</div>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" id="name" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a name.</div>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email:</label>
                <div class="col-sm-10">
                    <input type="email" pattern="^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$" name="email" id="email" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a valid email address.</div>
                </div>
            </div>
            <div class="form-group row">
                <label for="company" class="col-sm-2 col-form-label">Company:</label>
                <div class="col-sm-10">
                    <input type="text" name="company" id="company" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide a company.</div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2">Job Role:</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="php" value="PHP" required>
                        <label class="form-check-label" for="php">PHP Intern</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="backend" value="backend" required>
                        <label class="form-check-label" for="backend">Backend Dev</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="frontend" value="frontend" required>
                        <label class="form-check-label" for="frontend">Frontend Dev</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="role" id="ui" value="ui" required>
                        <label class="form-check-label" for="ui">UI Designer</label>
                    </div>
                    <div class="invalid-feedback">Please select a job role.</div>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Save a New User</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
