<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arya:wght@400;700&family=Asar&family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arya:wght@400;700&family=Asar&family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&display=swap"
        rel="stylesheet">
    <style>
    /* Custom styles */
    .profile-image {
        max-width: 75px;
        clip-path: circle();
        border: solid 2px #1D3C9D;
    }

    .action-buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    @media (max-width: 768px) {
        .action-buttons {
            flex-direction: column;
        }
    }

    .back {
        background-color: rgb(213, 216, 222);
    }

    .table-color {
        background-color: rgb(186, 235, 245);
    }

    .concert-one-regular {
        font-family: "Concert One", sans-serif;
        font-weight: 800;
        font-style: normal;
        font-size: 40px;
    }

    .asar-regular {
        font-family: "Asar", serif;
        font-weight: 400;
        font-style: normal;
    }

    .literata-uniquifier {
        font-family: "Literata", serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
    </style>
</head>

<body class="back">
    <div class="container">

        <h1 class="text-center font-heading mb-6 concert-one-regular">
            USER MANAGEMENT
        </h1>
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
        @endif
        <div class="row">
            <div class="col-md-1 text-center">
                <a class="btn btn-primary btn-lg asar-regular" href="{{route('product.create')}}">CREATE USER</a>
            </div>
        </div>
        <br>
        <div class="row overflow-hidden">
            <div class="col-md-12 table-responsive ">
                <table class="table table-striped table-bordered table-color">
                    <thead>
                        <tr class="text-primary asar-regular">
                            <th class="pt-4 pb-3 px-6">ID</th>
                            <th class="pt-4 pb-3 px-6">DATE</th>
                            <th class="pt-4 pb-3 px-6">PROFILE</th>
                            <th class="pt-4 pb-3 px-6">NAME</th>
                            <th class="pt-4 pb-3 px-6">EMAIL</th>
                            <th class="pt-4 pb-3 px-6">QUALIFICATION</th>
                            <th class="pt-4 pb-3 px-6">COMPANY</th>
                            <th class="pt-4 pb-3 px-6">JOB ROLE</th>
                            <th class="pt-4 pb-3 px-6">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody class="literata-uniquifier">
                        @foreach($products as $product)
                        <tr>
                            <td class="py-5 px-6">{{$product->id}}</td>
                            <td class="py-5 px-6">{{$product->date}}</td>
                            <td class="py-5 px-6">
                                @if($product->profile)
                                <img class="profile-image" src="{{ asset('storage/' . $product->profile) }}"
                                    alt="Profile Image">
                                @else
                                No Image
                                @endif
                            </td>
                            <td class="py-5 px-6">{{$product->name}}</td>
                            <td class="py-5 px-6">{{$product->email}}</td>
                            <td class="py-5 px-6">
                                @php
                                $qua = json_decode($product->qua ?? '[]');
                                @endphp
                                @if (is_array($qua) || is_object($qua))
                                @foreach ($qua as $qualification)
                                @if ($qualification == 'UG')
                                Undergraduate
                                @elseif ($qualification == 'PG')
                                Postgraduate
                                @endif
                                @if (! $loop->last)
                                ,
                                @endif
                                @endforeach
                                @else
                                N/A
                                @endif
                            </td>
                            <td class="py-5 px-6">{{$product->company}}</td>
                            <td class="py-5 px-6">{{$product->role}}</td>
                            <td class="action-buttons py-5 px-6">
                                <a class="btn btn-warning asar-regular"
                                    href="{{route('product.edit', ['product' => $product])}}">Update</a>
                                <form method="post" action="{{route('product.destroy', ['product' => $product])}}"
                                    style="display: inline;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger asar-regular">Delete</button>
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