
<html>
    <head>
        @include('front-end.includes.header')<!--#########-->

    </head>
    <body>
        @include('front-end.includes.above_Header')<!--#########-->

        <div class="clear"> </div>
        @include('front-end.includes.top_Header')<!--#########-->

        <!----End-top-nav---->
        <!----End-Header---->
        <!--start-image-slider---->

        <div class="clear"> </div>
        <div class="wrap">
            <div class="content">
                <!--#############################  checkout form ############################-->



                <div class="row">
                    <div class="col-sm-12">
                        <div class="col-sm-6 ">
                            <div class="row">


                                <div class="col-sm-10  col-sm-offset-2">
                                    <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ' ' }}">
                                        {{Session::get('error')}}
                                    </div>

                                    <div style="padding-top: 10px; padding-bottom: 100px">
                                        <h4 style="text-decoration:none">Place Order(By Card)</h4>
                                        <form action="{{url('process')}}" method="POST">
                                            @csrf()
                                            <script
                                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                data-key="########### Secter api key  #################"
                                                data-amount=ceil(Cart::total())*100
                                                data-name="Neel-Mars"
                                                data-description="Mobile Shop"
                                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                                data-locale="auto"
                                                data-zip-code="false">
                                            </script>
                                        </form>
                                        <hr>
                                       

                                        <div style="padding-top: 0px; padding-bottom: 80px">
                                            <!--#################################-->
                                            
                                            <!--#################################-->

                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="col-sm-10  col-sm-offset-2">



                                        @if((Cart::count() != 0) and (Session::get('product') == 1))
                                        <div style="padding-top: 10px; padding-bottom: 100px">
                                            <h4 style="text-decoration: none">Product Review</h4>
                                            <div style="padding-top: 0px; padding-bottom: 80px">
                                                <!--                                                #################################-->
                                                <h4>Your Total Amount :- <span style="font-weight: bold">
                                                        $ {{ ceil(Cart::total()) }}
                                                    </span>
                                                </h4>

                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>

                                                            <th>Product Name</th>
                                                            <th>Product Image</th>
                                                            <th>Quantity</th>

                                                            <th>Subtotal</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>

                                                        <?php foreach (Cart::content() as $row) : ?>

                                                            <tr>
                                                                <td>
                                                                    <p><strong><?php echo $row->name; ?></strong></p>

                                                                </td>
                                                                <td>

                                                                    <p><img src="{{$row->options->image}}" height="60" width="40"/></p>

                                                                </td>

                                                                <td>
                                                                    <p><strong><?php echo $row->qty; ?></strong></p>
                                                                </td>

                                                                <td>$ <?php echo $row->subtotal; ?></td>

                                                            </tr>

                                                        <?php endforeach; ?>

                                                    </tbody>

                                                    <tfoot>


                                                        <!--                    <div class="alert alert-success">-->
                                                        <tr>
                                                            <td colspan="2">&nbsp;</td>
                                                            <td>Total</td>
                                                            <td>$ <?php echo ceil(Cart::total()); ?></td>
                                                        </tr>
                                                        <!--</div>-->
                                                    </tfoot>
                                                </table></div>
                                        </div>
                                        @elseif((Cart::count() == 0) and (Session::get('product') == 1))
                                        @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{Session::get('success')}}
                                        </div>
                                        @endif
                                        @endif

                                        <!--                                                #################################-->

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>





                <!--############################# checkout form ############################-->               
            </div>
            <div class="clear"> </div>
        </div>
        <div class="footer">
            <div class="wrap">
                <div class="section group">
                    <div class="col_1_of_4 span_1_of_4">
                        <h3>Our Info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, quis nostr                                ud 
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo cons                                equat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit e                                sse cillum 
                            dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h3>Latest-News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis icing elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicin g elit.</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h3>Store Location</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <h3>Order-online</h3>
                        <p>080-1234-56789</p>
                        <p>080-1234-56780</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4 footer-lastgrid">
                        <h3>Ne                ws-Letter</h3>
                        <form>
                            <input type="text"><input type="submit" value="go" />
                        </form>
                        <h3>Follow Us:</h3>
                        <ul>
                            <li><a href="#"><img src="{{asset('front-end/')}}/images/twitter.png" title="twitter" />Twitter</a></li>
                            <li><a href="#"><img src="{{asset('front-end/')}}/images/facebook.png" title="Facebook" />Facebook</a></li>
                            <li><a href="#"><img src="{{asset('front-end/')}}/images/rss.png" title="Rss" />Rss</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="clear"> </div>
            <div class="wrap">
                <div class="copy-right">
                    <p>&copy; 2013 Mobile Store. All Rights Reserved | Design by  <a href="http://w3layouts.com/">W3Layouts</a></p>
                </div>
            </div>
        </div>
    </body>
</html>

