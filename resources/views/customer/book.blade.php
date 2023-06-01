<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Books">
    <meta name="author" content="Shivangi Gupta">
    <title> Description</title>
    <!-- Bootstrap -->
    <link href="{{ asset('customer') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('customer') }}/css/my.css" rel="stylesheet">

    <style>
        @media only screen and (width: 768px) {
            body {
                margin-top: 150px;
            }
        }

        @media only screen and (max-width: 760px) {
            #books .row {
                margin-top: 10px;
            }
        }

        .tag {
            display: inline;
            float: left;
            padding: 2px 5px;
            width: auto;
            background: #F5A623;
            color: #fff;
            height: 23px;
        }

        .tag-side {
            display: inline;
            float: left;
        }

        #books {
            border: 1px solid #DEEAEE;
            margin-bottom: 20px;
            padding-top: 30px;
            padding-bottom: 20px;
            background: #fff;
            margin-left: 10%;
            margin-right: 10%;
        }

        #description {
            border: 1px solid #DEEAEE;
            margin-bottom: 20px;
            padding: 20px 50px;
            background: #fff;
            margin-left: 10%;
            margin-right: 10%;
        }

        #description hr {
            margin: auto;
        }

        #service {
            background: #fff;
            padding: 20px 10px;
            width: 112%;
            margin-left: -6%;
            margin-right: -6%;
        }

        .glyphicon {
            color: #D67B22;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    </nav>

    <div class="container-fluid" id="books">
        <div class="row">
            <div class="col-sm-10 col-md-6">
                <div class="tag">{{ $book['discount'] }}%OFF</div>
                <div class="tag-side"><img src="{{ asset('customer') }}/img/orange-flag.png">
                </div>
                <img class="center-block img-responsive" src="{{ asset('customer') }}/img/books/{{ $book['pid'] }}.jpg" height="550px" style="padding:20px;">
            </div>
            <div class="col-sm-10 col-md-4 col-md-offset-1">
                <h2>{{ $book['title'] }}</h2>
                <hr>
                <span style="font-weight:bold;"> Quantity : </span>
                <select id="quantity">
                    <?php $count = $book['available'] ?>
                    @for ($i = 1; $i <= $count; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
                <br><br><br>
                <a id="buyLink" class="btn btn-lg btn-danger"
                    style="padding:15px;color:white;text-decoration:none;"
                    href="{{ route('frontend.cartPost') }}"
                    onclick="event.preventDefault(); document.getElementById('cart-post-{{ $book['id'] }}').submit();">
                    ADD TO CART for IDR {{ $book['price']*$book['discount']/100 }} <br>
                    <span style="text-decoration:line-through;"> IDR {{ $book['price'] }}</span>
                    | {{ $book['discount'] }}% discount
                </a>

                <form id="cart-post-{{ $book['id'] }}" action="{{ route('frontend.cartPost') }}" method="POST" class="d-none">
                    @csrf

                    <input type="hidden" name="book_id" value="{{ $book['id'] }}">
                    <input type="hidden" name="total_price" id="total_price">
                    <input type="hidden" name="qty" id="quantityFix">
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="description">
        <div class="row">
            <h2> Description </h2>
            <p>{{ $book['description'] }}</p>
            <pre style="background:inherit;border:none;">
                PRODUCT CODE  {{ $book['pid'] }} <hr>
                TITLE         {{ $book['title'] }} <hr>
                AUTHOR        {{ $book['author'] }} <hr>
                AVAILABLE     {{ $book['available'] }} <hr>
                PUBLISHER     {{ $book['publisher'] }} <hr>
                EDITION       {{ $book['edition'] }} <hr>
                LANGUAGE      {{ $book['language'] }} <hr>
                PAGES         {{ $book['page'] }} <hr>
                WEIGHT        {{ $book['weight'] }} <hr>
            </pre>
        </div>
    </div>

    <div class="container-fluid" id="service">
        <div class="row">
            <div class="col-sm-6 col-md-3 text-center">
                <span class="glyphicon glyphicon-heart"></span> <br>
                24X7 Care <br>
                Happy to help 24X7, call us on 0120-3062244 or click here
            </div>
            <div class="col-sm-6 col-md-3 text-center">
                <span class="glyphicon glyphicon-ok"></span> <br>
                Trust <br>
                Your money is yours! All refunds come with no question asked guarantee.
            </div>
            <div class="col-sm-6 col-md-3 text-center">
                <span class="glyphicon glyphicon-check"></span> <br>
                Assurance <br>
                We provide 100% assurance. If you have any issue, your money is immediately refunded. Sit back and enjoy
                your shopping.
            </div>
            <div class="col-sm-6 col-md-3 text-center">
                <span class="glyphicon glyphicon-tags"></span> <br>
                24X7 Care <br>
                Happiness is guaranteed. If we fall short of your expectations, give us a shout.
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('customer') }}/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            var price = {{ $book['price']*$book['discount']/100 }};
            var qty = $('#quantity option:selected').val();
            var total_price = price;
            // console.log(total_price);

            $('#quantityFix').val(qty);
            $('#total_price').val(total_price);

            $('#quantity').on('change', function() {
                var price = {{ $book['price']*$book['discount']/100 }};
                var qty = $('#quantity option:selected').val();
                var total_price = price*qty;
                // console.log(total_price);

                $('#quantityFix').val(qty);
                $('#total_price').val(total_price);
            });
        });
    </script>

</body>

</html>
