<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Nunito', sans-serif;

        }

        .wrapper,
        .winner {

            border: 1px solid rgb(221, 221, 221);
            padding: 30px;
            border-radius: 10px;
        }

        @media only screen and (max-width: 600px) {

            .wrapper,
            .winner {

                border: 1px solid rgb(221, 221, 221);
                padding: 5px;
                border-radius: 10px;
                font-size: 10px;
                width: 75% !important
            }

            .wrapper {
                padding: 14px;
            }

            ul {
                padding-left: 0;
            }

            .wrapper input[type="text"] {
                max-height: 20px !important;
                margin-top: 1px;
                font-size: 10px;

            }

            .row {
                margin-bottom: 2px !important;
            }

            .button-group {
                margin-top: 10px;

            }

            .button-group input {
                /* width: 10px;
                height: 12px; */
                padding: 4px !important;
                font-size: 10px;
            }


        }


        .winner {
            text-align: center
        }

        .winner li {
            list-style: none;
            margin-bottom: 10px;
        }

        .wrapper .button-group {
            display: flex;
            justify-content: end;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 4px;
        }

        .name {
            color: rgb(3, 153, 3);
        }

        body {
            height: 1000px;
        }
    </style>
</head>

<body class="antialiased">
    {{-- star navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">CEH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">


            </div>
        </div>
    </nav>
    {{-- end navbat --}}
    {{-- start winners section--}}
    <div class="winner w-50 mx-auto mt-5">
        <h4>Winners</h4>
        <ul>
            @foreach ($winners as $winner )
            <li>#{{ $loop->iteration }} <span class="name">{{ $winner->name }}</span> in
                {{$winner->created_at->setTimezone('Asia/Damascus')->toDateTimeString()}} since
                {{ $winner->created_at->diffForHumans(); }}

            </li>
            @endforeach

        </ul>
    </div>
    {{-- end winner section --}}
    <div class="wrapper w-50 mx-auto mt-5 mb-5">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="staticEmail" name="username" value="">
                    @error('username')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Flag</label>
                <div class="col-sm-10">
                    <input type="text" name="flag" class="form-control" id="inputPassword">
                    @error('flag')
                    <p class="error">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="button-group mx-auto">

                <input type="reset" role="button" class="btn btn-secondary px-3 py-2 mx-2" value="Reset">
                <input type="submit" role="button" class="btn btn-success px-3 py-2" value="Check">

            </div>
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if (session()->get('winner')=='success')
<script>
    toastr.options={
        'closeButton':true,
        'progressBar':true,
        'rtl' : false,
        "positionClass": 'toast-top-left',
    }
    toastr.success("congratulations, you got it :)");
</script>
@endif


@if (session()->get('winner')=='failed')
<script>
    toastr.options={
        'closeButton':true,
        'progressBar':true,
        'rtl' : false,
        "positionClass": 'toast-top-left',
    }
    toastr.error("wrong :( , try again you will find it I'm sure.");
    
</script>
@endif


@if(session()->get('owner') =='no')
<script>
    toastr.options={
        'closeButton':true,
        'progressBar':true,
        'rtl' : false,
        "positionClass": 'toast-top-left',
    }
    toastr.error("this name is reserved only for admin, and admin can't participate");
    
</script>
@endif


</html>