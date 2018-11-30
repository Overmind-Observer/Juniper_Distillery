<nav class="header_middle "> 
    <div ><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div>
                      <a href="/"><img src="{{asset   ('images/home/logo.png')}}" /></a>
                     </div>
                </div>
                <div class="col-sm-6">
                    <div class="shop-menu pull-right">
                        <ul class="nav nav-pills">
                        <!-- guest, login/ register-->
                        @guest
                        <li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> {{ __('Login') }}</a></li>
                        <li>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"><i class="fa fa-crosshairs"></i> {{ __('Register') }}</a>
                            @endif
                        </li>
                        @else
                        <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                        <li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-unlock"></i> {{ __('Logout') }} </a>
                        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                        </li>
                        @endguest

                     </ul>
                    
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->
</nav>
