
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

        <!--#########-->
        <div class="clear"> </div>
        <div class="wrap">
            <div class="content">
                <div class="content-grids">
                    <!--  ############################## Cart-->
                    <div class="details-page">
                        <div class="back-links">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a><img src="{{asset('front-end/')}}/images/arrow.png" alt=""></li>
                                <li><a href="{{url('product-details/'.$product_by_id->id)}}">Product-Details</a><img src="{{asset('front-end/')}}/images/arrow.png" alt=""></li>
                                <li><a href="">{{$product_by_id->product_name}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="detalis-image">
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="">
                                    <div class="thumb-image"> <img src="{{asset($product_by_id->product_image)}}" data-imagezoom="true" class="img-responsive" alt="" /> </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="detalis-image-details">
                        <div class="details-categories">
                            <ul>
                                <li><h3>Category:</h3></li>
                                <li class=""><a href="{{url('category/'.$product_by_id->category_name)}}"><span>{{$product_by_id->category_name}}</span></a></li>
                            </ul>
                        </div><br />
                        <div class="brand-value">
                            <h3>{{$product_by_id->product_name}}</h3>
                            <div class="left-value-details">
                                <ul>
                                    <li>Price:</li>

                                    <li><h3>{{$product_by_id->product_price}} $</h3></li>
                                    <br />

                                </ul>
                            </div>
                            <div class="right-value-details">
                                <a href="#">Instock</a>
                                <p>No reviews</p>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="brand-history">
                            <h3>Description :</h3>
                            <p>{{$product_by_id->product_description}} </p>
                            <form action="{{url('/cart')}}" method="post">
                                @csrf
                                <input type="hidden"  name="id" value="{{$product_by_id->id}}"/>
                                <button type="submit" class="btn btn-success btn-sm">Add Cart</button>
                                
                            </form>
                        </div>

                        <div class="clear"                                                                                                                 > </div>
                        <!--  #                                                                                                                 #########################                                                                                                                 #### Cart-->

                    </div>

                </div>
                <!--################# Category-->

                <div class="content-sidebar">
                    <h4>Categories</h4>
                    <ul>
                        <?php
                        $category = DB::table('category')
                                ->where('publication_Status', 1)
                                ->get();
                        foreach ($category as $category) {
                            ?>
                            <li><a href="{{url('category/'.$category->category_name)}}">{{$category->category_name}}</a></li>
                            <?php
                        }
                        ?>  


                    </ul>
                </div>
                <!--################# Category-->
                <div class="clear"> </div>
        </div>
        <div class="footer">
            <div class="wrap">
                <div class="section group">
                    <div class="col_1_of_4 span_1_of_4">
                        <h3>Our Info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, qis nostrud 
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                            dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h3>Latest-News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>                                                                                                                                                         Lorem ipsum dolor sit amet, consectetur adipisicin                                                                                                                                                                        g elit.</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h3>Store Location</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <h3>Order-online</h3>
                        <p>080-1234-56789</p>
                        <p>080-1234-56780</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4 footer-lastgrid">
                        <h3>News-Letter</h3>
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


