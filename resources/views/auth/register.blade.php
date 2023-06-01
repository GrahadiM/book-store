<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>Register at GIFY TECH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
            max-width: 400px;
            margin-top: 18px;
            border-radius: 9px;
            margin-bottom: 40px;
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
                    <a class="nav-item nav-link " href="{{ route('home') }}" style="color: antiquewhite" ;>Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="{{ route('login') }}" style="color: antiquewhite" ;>Login</a>
                    <a class="nav-item nav-link" href="{{ route('register') }}" style="color: antiquewhite" ;>Register</a>
                </div>
            </div>

        </nav>
    </div>

    <h3>Create An Account</h3>
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name" style="color: aliceblue;"><b>Name:</b></label>
                <input type="text" class="form-control" name="name" required id="name" placeholder="Enter your name" style="color: black;">
            </div>
            <div class="form-group">
                <label for="email" style="color: aliceblue;"><b>Email address:</b></label>
                <input type="email" class="form-control" name="email" required id="email" placeholder="Enter Email-id" style="color: black;">
            </div>
            <div class="form-group">
                <label for="password" style="color: aliceblue;"><b>Password:</b></label>
                <input type="password" class="form-control" required name="password" minlength="8" maxlength="15" id="password" placeholder="Enter Password" style="color: black;">
            </div>
            <div class="form-group">
                <label for="password_confirmation" style="color: aliceblue;"><b>Confirm Password:</b></label>
                <input type="password" class="form-control" required minlength="8" name="password_confirmation" maxlength="15" id="password_confirmation" placeholder="Re-enter Password" style="color: black;">
            </div>
            <div class="form-group">
                <label for="age" style="color: aliceblue;"><b>Age:</b></label>
                <input type="number" class="form-control" required id="age" name="age" placeholder="Enter age" style="color: black;">
            </div>
            <div class="form-group">
                <label for="phone" style="color: aliceblue;"><b>Contact Number:</b></label>
                <input type="text" class="form-control" required id="phone" placeholder="Enter your phone number" required name="phone" maxlength="10" minlength="10" style="color: black;">
            </div>
            <a href="{{ route('login') }}" style="color: aliceblue;">Already a member? Log In </a><br><br>
            <button type="submit" class="btn btn-primary" name="submit" style="background-color: blue;box-shadow: 2px 2px white;">Submit</button>
        </form>
    </div>
</body>

</html>
