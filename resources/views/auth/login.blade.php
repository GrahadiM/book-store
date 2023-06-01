<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: midnightblue;
        }

        .container {

            background-color: #1e88e5;
            box-shadow: 6px 6px 5px white;
            padding: 14px;
            align-content: center;
            max-width: 300px;
            margin-top: 18px;
            border-radius: 9px;
        }

        h3 {
            color: aliceblue;
            font-family: cursive;
            text-align: center;
            margin-top: 70px;
            margin-bottom: 0px;
            margin-left: 20px;
        }

        .container .form-group .form-control {
            color: aliceblue;
        }
    </style>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand" href="home.php">GIFY TECH</a>
            <span style="font-size: 2em; color: white;">
                <i class="fas fa-book-open"></i>
            </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto ">
                    <a class="nav-item nav-link " href="home.php" style="color: antiquewhite" ;>Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="login.php" style="color: antiquewhite" ;>Login</a>
                    <a class="nav-item nav-link" href="register.php" style="color: antiquewhite" ;>Register</a>
                </div>
            </div>

        </nav>
    </div>

    <h3>Login</h3>
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email" style="color: aliceblue;"><b>Email address:</b></label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email-id" required style="color: black;">
            </div>
            <div class="form-group">
                <label for="pwd" style="color: aliceblue;"><b>Password:</b></label>
                <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter Password" required style="color: black;">
            </div>
            <div class="form-group form-check">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> <b>Remember me</b>
                </label>
            </div>
            <a href="{{ route('register') }}" style="color: aliceblue;">Don't have an account? Register Here </a><br><br>
            <button type="submit" class="btn btn-primary" name="loginsubmit" style="background-color: blue;box-shadow: 2px 2px white;">Submit</button>
        </form>
    </div>
</body>

</html>
