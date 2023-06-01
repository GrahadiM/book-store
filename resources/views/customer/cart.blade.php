<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cart">
    <link rel="shortcut icon" href="{{ asset('customer') }}/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('customer') }}/favicon.ico" type="image/x-icon">
    <title>My Cart</title>
    <!-- Bootstrap -->
    <link href="{{ asset('customer') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('customer') }}/css/my.css" rel="stylesheet">
    <style>
        #cart {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .panel {
            border: 1px solid #D67B22;
            padding-left: 0px;
            padding-right: 0px;
        }

        .panel-heading {
            background: #D67B22 !important;
            color: white !important;
        }

        @media only screen and (width: 767px) {
            body {
                margin-top: 150px;
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    </nav>

    <div class="container-fluid" id="cart">
        <div class="row">
            <div class="col-xs-12 text-center" id="heading">
                <h2 style="color:#D67B22;text-transform:uppercase;"> YOUR CART </h2>
            </div>
        </div>
        <div class="row text-center">
            @forelse ($books as $book)
                <div class="panel col-xs-12 col-sm-4 col-sm-offset-{{ $loop->iteration  % 2 == 0 ? '2' : '1' }} col-md-4 col-md-offset-{{ $loop->iteration  % 2 == 0 ? '2' : '1' }} col-lg-4 col-lg-offset-{{ $loop->iteration  % 2 == 0 ? '2' : '1' }} text-center" style="color:#D67B22;font-weight:800;">
                    <div class="panel-heading">Order {{ $loop->iteration }}</div>
                    <div class="panel-body">
                        <img class="image-responsive block-center"
                            src="{{ asset('customer') }}/img/books/{{ $book->book['pid'] }}.jpg" style="height :100px;">
                        <br>
                        Title : {{ $book->book['title'] }} <br>
                        Code : {{ $book->book['pid'] }} <br>
                        Author : {{ $book->book['author'] }} <br>
                        Edition : {{ $book->book['edition'] }} <br>
                        Quantity : {{ $book['qty'] }} <br>
                        Price : {{ __('Rp.').number_format($book->book['price'],2,',','.') }} <br>
                        Sub Total : {{ __('Rp.').number_format($book['total_price'],2,',','.') }} <br>
                        <a href="{{ route('frontend.cartDelete') }}" class="btn btn-sm"
                            style="background:#D67B22;color:white;font-weight:800;"
                            onclick="event.preventDefault(); document.getElementById('cart-remove-{{ $book['id'] }}').submit();">
                            Remove
                        </a>

                        <form id="cart-remove-{{ $book['id'] }}" action="{{ route('frontend.cartDelete') }}"
                            method="POST" class="d-none">
                            @method('DELETE')
                            @csrf
                            <input type="hidden" name="id" value="{{ $book['id'] }}">
                        </form>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <span style="color:#D67B22;font-weight:bold;">
                        Cart Is Empty
                    </span>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <a href="{{ route('frontend.index') }}" class="btn btn-lg"
                        style="background:#D67B22;color:white;font-weight:800;">
                        Do Some Shopping
                    </a>
                </div>
            @endforelse
        </div>
        <br><br>
        @if (!empty($book))
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="panel col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 text-center"
                            style="color:#D67B22;font-weight:800;">
                            <div class="panel-heading">TOTAL</div>
                            <div class="panel-body">{{ __('Rp.').number_format($total,2,',','.') }}</div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-3 col-lg-4 col-lg-offset-3">
                    <a href="{{ route('frontend.index') }}" class="btn btn-lg"
                        style="background:#D67B22;color:white;font-weight:800;">Continue Shopping</a>
                </div>
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-1 col-lg-4 ">
                    <a href="{{ route('frontend.checkoutPost') }}" class="btn btn-lg" style="background:#D67B22;color:white;font-weight:800;margin-top:5px;"
                        onclick="event.preventDefault(); document.getElementById('checkout-post-{{ $book['id'] }}').submit();">
                        Continue Checkout
                    </a>

                    <form id="checkout-post-{{ $book['id'] }}" action="{{ route('frontend.checkoutPost') }}" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" name="total_price" value="{{ $total }}">
                        <input type="hidden" name="code_order" value="{{ $random_code }}">
                    </form>
                </div>
            </div>
        @endif
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('customer') }}/js/bootstrap.min.js"></script>
    @if (!empty($book))
        <script>
            $(function() {
                var price = {{ ($book['price'] * $book['discount']) / 100 }};
                var qty = $('#quantity option:selected').val();
                var total_price = price;
                // console.log(total_price);

                $('#quantityFix').val(qty);
                $('#total_price').val(total_price);

                $('#quantity').on('change', function() {
                    var price = {{ ($book['price'] * $book['discount']) / 100 }};
                    var qty = $('#quantity option:selected').val();
                    var total_price = price * qty;
                    // console.log(total_price);

                    $('#quantityFix').val(qty);
                    $('#total_price').val(total_price);
                });
            });
        </script>
    @endif
</body>
<html>
