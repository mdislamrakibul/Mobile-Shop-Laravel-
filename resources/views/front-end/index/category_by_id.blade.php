
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
        @include('front-end.includes.slider')<!--#########-->
        <div class="clear"> </div>
        <div class="wrap">
            <div class="content">
                <div class="content-grids">
                    <h4>Deals of the day</h4><!-- Starting Content############################-->
                    <div class="section group">
                        <!--#######################-->
                        <?php
                        if (!count($product)){?>
                        <div class="alert alert-danger">
                            No Products Available
                        </div>
                        <?php }else{
                        foreach( $product as $productall ){
                        ?>
                        <div class="grid_1_of_4 images_1_of_4 products-info">
                            <img src="{{asset($productall->product_image)}}">
                            <a href="">{{$productall->product_name}}</a>
                            <h3>{{$productall->product_price}} $</h3>
                            <ul>
                                <form action="{{url('/cart')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$productall->id}}"/>
                                    <button type="submit">Add to Cart</button> 
                                </form>
                                <button class="cart ">
                                    <a href="{{url('product-details/'.$productall->id)}}" >Details</a>
                                </button> 
                            </ul>
                        </div>
                        <?php }} ?>
                        <!--######################-->
                    </div>
                    {{$product->links()}}
                </div>
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
            </div>
            <div class="clear"> </div>
        </div>
        <div class="footer">
            <div class="wrap">
                <div class="section group">
                    <div class="col_1_of_4 span_1_of_4">
                        <h3>Our Info</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, qu                                        is nostrud 
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                            dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                        <h3>Latest-News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis                                        icing elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis                                        icing elit.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicin                                    g elit.</p>
                    </div>
                    <div class="col_1_of_4 span_1_of_4">
                    <h3>Store Location</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicin                                        g elit.</p>
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

