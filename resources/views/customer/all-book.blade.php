<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Books">
    <title>Other Books</title>
    <link href="{{ asset('customer') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('customer') }}/css/my.css" rel="stylesheet">

    <style>
        #books {
            margin-bottom: 50px;
        }

        @media only screen and (width: 767px) {
            body {
                margin-top: 150px;
            }
        }

        #books .row {
            margin-top: 20px;
            margin-bottom: 10px;
            font-weight: 800;
        }

        @media only screen and (max-width: 760px) {
            #books .row {
                margin-top: 10px;
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    </nav>

    <div class="container-fluid" id="books">
        <div class="row">
            <div class="col-xs-12 text-center" id="heading">
                <h2 style="color:rgb(228, 55, 25);text-transform:uppercase;margin-bottom:0px;"> All Books </h2>
            </div>
        </div>

        <div class="row">
            @foreach ($books as $item)
                <a href="{{ route('frontend.book', $item['id']) }}">
                    <div class="col-sm-6 col-md-3 col-lg-3 text-center">
                        <div class="book-block" style="border :3px solid #DEEAEE;">
                            <img class="book block-center img-responsive"
                                src="{{ asset('customer') }}/img/books/{{ $item['pid'] }}.jpg">
                            <hr>
                            {{ $item['title'] }}<br>
                            <span class="text-muted">{{ $item['publisher'] }}</span><br>
                            {{ ($item['price'] * $item['discount']) / 100 }} &nbsp
                            <span style="text-decoration:line-through;color:#828282;"> {{ $item['price'] }} </span>
                            <span class="label label-warning">{{ $item['discount'] }}%</span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('customer') }}/js/bootstrap.min.js"></script>

</body>

</html>
