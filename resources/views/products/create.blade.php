<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                    <input type="email" name="email" id="email" placeholder="Required" class="form-control" required>
                    <div class="invalid-feedback">Please provide an email.</div>
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
                <label for="role" class="col-sm-2 col-form-label">Job Role:</label>
                <div class="col-sm-10">
                <input type="radio" id="php" name="role" value="PHP">
                        <label for="php">PHP Intern</label><br>

                        <input type="radio" id="backend" name="role" value="backend">
                        <label for="backend">Backend Dev</label><br>

                        <input type="radio" id="frontend" name="role" value="frontend">
                        <label for="frontend">Frontend Dev</label><br>

                        <input type="radio" id="ui" name="role" value="ui">
                        <label for="ui">UI Designer</label><br>
                    
                        <div class="invalid-feedback">Please provide a Job Role.</div>
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
