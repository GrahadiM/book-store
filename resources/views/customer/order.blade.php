<!DOCTYPE HTML>
<html lang="en">

<head>
    <title>GIFY TECH</title>
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
            background-color: #ede7f6;
        }

        .container .row {
            margin-top: 20px;
        }

        @keyframes example {
            0% {
                background-color: #512da8;
            }

            25% {
                background-color: #7e57c2;
            }

            50% {
                background-color: #d1c4e9;
            }

            100% {
                background-color: #ede7f6;
            }
        }

        .container .row .col-sm-6 .card {
            margin-top: 20px;
            margin-right: 30px;
            margin-bottom: 67px;
            box-shadow: 10px 10px 8px darkblue;
            animation-name: example;
            animation-duration: 5s;
        }

        .container .footerhr {
            margin-top: 80px;
            border-width: thin;
            box-shadow: 1px 1px 1px purple;
        }

        .container .foot {
            align-content: center;
            color: black;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            margin-top: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div>
        @include('layouts.customer.navbar')
    </div>

    <div class="container">
        <div class="row">
            @forelse ($order as $item)
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Code Pesanan : {{ $item->code_order }}</h5>
                        <p>
                            Total Harga : {{ __('Rp.').number_format($item->total_price,2,',','.') }}
                            <br>
                            Tanggal Pesanan : {{ Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y') }}
                        </p>
                        <a href="{{ route('frontend.checkoutBook', $item->id) }}" class="btn btn-primary">View Detail</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-12 text-center">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Empty</h5>
                        <a href="{{ route('frontend.index') }}" class="btn btn-outline-primary">Back to Homepage</a>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
    <div class="container">
        <hr class="footerhr">
    </div>
    <div class="container">
        <footer class="foot">
            &copy;2023 PHP Assignment &nbsp;<span class="separator">|</span> Designed by GIFY TECH
        </footer>
    </div>

</body>

</html>
