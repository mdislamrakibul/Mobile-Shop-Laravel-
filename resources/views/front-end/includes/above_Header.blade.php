<div class="wrap">
            <!----start-Header---->
            <div class="header">
                <div class="search-bar">
                    
                </div>
                <div class="clear"> </div>
                <div class="header-top-nav">
                    <ul>
<!--                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Delivery</a></li>-->
                        @if((Cart::count() != 0) and (Session::get('session_value') != 1))
                            <li><a href="{{route('checkout')}}">Checkout</a></li>
                        @elseif((Cart::count() != 0) and (Session::get('session_value') == 1))
                            <li><a href="{{route('user_payment')}}">payment</a></li>
                        @elseif((Cart::count() != 0) and (Session::get('product') == 1))
                            <li><a href="{{route('user_payment')}}">payment</a></li>
                        @endif
                        
                        <!--############################-->
                        
                        <!--############################-->

                        
                        <li>
                            <a href="{{route('cart.list')}}">
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

