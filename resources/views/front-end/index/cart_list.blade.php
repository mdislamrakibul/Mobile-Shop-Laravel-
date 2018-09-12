
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
                <div class="content-grids">
                <!--################################## Cart Content-->
                <h2 style="color: green"> Your Cart - </h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=0 ; ?>

                        <?php foreach (Cart::content() as $row) : 
                            
                            ?>

                            <tr>
                                <td>
                                    <p><strong><?php echo $row->name; ?></strong></p>
                                   
                                </td>
                                <td>
                                    
                                    <p><img src="{{$row->options->image}}" height="80" width="60"/></p>
                                    
                                </td>
                                
                                <td>
                                    <form action="{{route('cart.update')}}" method="post">
                                        @csrf
                                        <input type="text" name="quantity" value="<?php echo $row->qty; ?>" maxlength="1" style="width: 30px">
                                        <input type="hidden" name="rowId" value="<?php echo $row->rowId; ?>">
                                        <button type="submit" class="btn btn-sm btn-success">Update</button>
                                    </form>
                                    </td>
                                <td>$ <?php echo $row->price; ?></td>
                                <td>$ <?php echo $row->subtotal; ?></td>
                                <td>
                                    <form action="{{route('cart.remove')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="rowId" value="<?php echo $row->rowId; ?>">
                                        <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                    </form>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                            
                            <?php
                            
                            
                            ?>

                    </tbody>

                    <tfoot>
                        
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>Subtotal</td>
                            <td>$ <?php echo Cart::subtotal(); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>Tax</td>
                            <td>$ <?php echo ceil(Cart::tax()); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                            <td>Total</td>
                            <td>$ <?php echo ceil(Cart::total()); ?></td>
                        </tr>
                    </tfoot>
                </table>  
                <!--################################## Cart Content-->
                @if((Cart::count()) and (Session::get('session_value') != 1))
                        <div class="pull-right">
                    <a href="{{'check-out/'}}" class="btn btn-primary">Check Out&nbsp;<span class="glyphicon glyphicon-arrow-right"></span></a>
                </div>
                        @endif
                
                <!--######################-->
            </div>

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

