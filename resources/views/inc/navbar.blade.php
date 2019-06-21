@include('inc.navbarheader')
@include('inc.navbarmiddle')

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
                                            <li><a href="/shop">Whisky</a></li>
                                            <li><a href="/shop">Wine</a></li> 
                                            <li><a href="/shop">Spirits</a></li> 
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Cocktail Recipes<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li class="dropdown"><a href="#">Spirits</a><i class="fa fa-angle-down"></i></li>

                                            <li class="dropdown"><a href="#">Liqeuer</a><i class="fa fa-angle-down"></i></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">New Arrivals<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="/home">New Product Lunching</a></li>
                                            <li><a href="/home">Tasting Tips</a></li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown"><a href="#">Company<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="/about">History</a></li>
                                            <li><a href="/news">Our News</a></li>
                                            <li><a href="/contacts">Contacts</a></li>
                                          </ul>
                                    </li> 
                                    <li><a href="/contact">Contact Us<i></i></a>
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
        </header>
