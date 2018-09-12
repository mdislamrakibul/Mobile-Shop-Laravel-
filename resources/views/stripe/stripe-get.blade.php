<html>
    <head>
        <script src="{{asset('front-end/checkout.js')}}"></script>
    </head>
    <body>
        <div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <h1>Checkout</h1>
       
        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ' ' }}">
            {{Session::get('error')}}
        </div>
        @if(Session::has('success'))
        
         @endif   
        <form action="{{url('/stripe-post')}}" method="POST" id="checkout-form">
            @csrf
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" name="name" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input id="Address" name='address' type="text" class="form-control" required>
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