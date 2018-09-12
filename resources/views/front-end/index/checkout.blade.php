
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
                                <div class="col-sm-12">

                                    <div class="col-sm-10  col-sm-offset-2">

                                        <div style="padding-top: 40px; padding-bottom: 100px">
                                            <h3 style="text-decoration: underline">User Login</h3>
                                            <div style="padding-top: 20px; padding-bottom: 80px">

                                                <form class="form-horizontal" action="{{route('login')}}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                                        <div class="col-sm-7">
                                                            <input type="email" class="form-control{{$errors->has('login_email') ? 'is-invalid' : ' '}}" name="login_email" required autofocus >


                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-7">
                                                            <input type="password" class="form-control" name="login_password" required autofocus >

                                                        </div>
                                                    </div>


                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-default">Login</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>  

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="col-sm-10  col-sm-offset-2">
                                        

                                        <div style="padding-top: 40px; padding-bottom: 100px">
                                            <h3 style="text-decoration: underline">User Register</h3>
                                            <div style="padding-top: 20px; padding-bottom: 80px">

                                                <form class="form-horizontal" action="{{route('register')}}" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                                        <div class="col-sm-7">
                                                            <input type="text" class="form-control" name="name" required autofocus >

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                                                        <div class="col-sm-7">
                                                            <input type="email" class="form-control{{$errors->has('email') ? 'is-invalid' : ' '}}" name="email" required autofocus >

                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-7">
                                                            <input type="password" class="form-control" name="password" required autofocus >

                                                        </div>
                                                    </div>

                                                    <div class="for                m-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-default">Registration</button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    @if(count($errors)>0)
                    <div class="alert alert-danger" style="padding-top: 10px;">
                        @foreach ($errors->all() as $error)
                        {{ $error }}
                        @endforeach
                    </div>
                    @endif
                    
            </div>
                        @if(Session::has('success'))
                              <div class="alert alert-success" style="padding-top: 10px;">
                                  {{Session::get('success')}}
                                 </div>
                         @endif

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

