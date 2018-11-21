@include('inc.navbarheader')
@include('inc.navbarmiddle')

      <nav class="navbar navbar-expand-md navbar-light navbar-laravel ">
        <div class="container">

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                </button>
                            </div>
                            <div class="mainmenu pull-left">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li class="dropdown"><a href="#">Products<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="#">Whisky</a></li>
                                            <li><a href="#">Wine</a></li> 
                                            <li><a href="#">Spirits</a></li> 
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Product Recipe<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="/home">Recipes</a></li>
                                            <li><a href="/home">How to make</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">New Arrivals<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="/welcome">New Product Lunching</a></li>
                                            <li><a href="/welcome">Tasting Tips</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Cutomer Experiences<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="/posts">Tasting Experiences</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">History<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="/about">About Company</a></li>
                                            <li><a href="/service">Our News</a></li>
                                            <li><a href="/service">Contact Us</a></li>
                                          </ul>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="search_box pull-right">
                                <input type="text" placeholder="Search"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-bottom-->
  
        </div>
    </nav>

    <!-- scroll up-->     
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Price range-->   
    <script src="js/price-range.js"></script>
    <!-- PrettyPhoto-->   
    <script src="js/jquery.prettyPhoto.js"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script src="js/jquery.waypoints.min.js"></script> 
<!-- Custom Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script> 
<script src="js/wow.min.js"></script> 
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script> 
<script>
new WOW().init();
</script>
