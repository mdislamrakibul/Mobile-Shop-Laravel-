<html>
    
    <head>
        <title>Mobilestore
</title>
<link href="{{asset('front-end/')}}/css/style.css" rel="stylesheet" type="text/css"  media="all" />
<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{asset('front-end/')}}/css/responsiveslides.css">
<script src="{{asset('front-end/')}}/js/jquery.min.js"></script>
<script src="{{asset('front-end/')}}/js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {

// Slideshow 1
$("#slider1").responsiveSlides({
maxwidth: 1600,
speed: 600
});
});
</script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{asset('front-end/')}}/checkout.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="wrap">
            <!----start-Header---->
            <div class="header">
                <div class="search-bar">
                    
                </div>
                <div class="clear"> </div>
                <div class="header-top-nav">
                    <ul>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Delivery</a></li>
                        @if((Cart::count() != 0) and (Session::get('session_value') != 1))
                        
                        <li><a href="{{route('checkout')}}">Checkout</a></li>
                        @elseif((Cart::count() != 0) and (Session::get('session_value') == 1))
                        <li><a href="{{route('testpayment')}}">payment</a></li>
                        @endif
                        <li><a href="">My account</a></li>
                        <li><a href="{{route('cart.list')}}">
                                <span>shopping cart&nbsp;&nbsp;: </span>
                            </a>
                                @if(Cart::count())
                                <label class="badge badge-success">{{Cart::count()}}</label>
                                @else
                                <label>&nbsp;noitems</label>
                                @endif
                                
                        </li>
                        @if(Session::get('session_value') == 1)
                        <li><a href="{{route('logout')}}">Logout</a></li>
                        @endif
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
        <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                        <h2>Checkout</h2>
                        <h4>Your Total Amount: <span style="font-weight: bold">Tk. {{ Cart::total() }}</span></h4>
                        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ' ' }}">
                            {{Session::get('error')}}
                        </div>
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        <form action="{{ route('payment') }}" method="POST" id="checkout-form">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input id="name" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input id="address" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <hr/>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="card-name">Card Holder Name</label>
                                        <input id="card-name" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="card-number">Credit Card Number</label>
                                        <input id="card-number" type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="card-expiry-month">Expiration Month</label>
                                                <input id="card-expiry-month" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="card-expiry-year">Expiration Year</label>
                                                <input id="card-expiry-year" type="text" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="card-cvc">CVC</label>
                                        <input id="card-cvc" type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Buy Now</button>
                        </form>
                    </div>
                </div>
    </body>
</html>