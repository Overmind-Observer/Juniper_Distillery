<footer id="footer"><!--Footer-->
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <div class="companyinfo">
            <h2><span>J</span>uniper <span>D</span>istillery</h2>
            <p>Juniper, Lemon and Lavender balanced with orange. We made Jinn, threw it out
              Made Jinn, threw that one out, after about a years experimentation We finally got the taste close to something people enjoyed.
               
              </p>
          </div>
        </div>
        <div class="col-sm-7">
          <div class="col-sm-3">
            <div class="video-gallery text-center">
              <a href="#">
                <div class="iframe-img">
                  <img src="" alt="" />
                </div>
                <div class="overlay-icon">
                  <i class="fa fa-play-circle-o"></i>
                </div>
              </a>
              <p>Jinn Liqueur @ 27.5% ABV</p>
              <h2>24 DEC 2018</h2>
            </div>
          </div>
          
          <div class="col-sm-3">
            <div class="video-gallery text-center">
              <a href="#">
                <div class="iframe-img">
                  <img src="" alt="" />
                </div>
                <div class="overlay-icon">
                  <i class="fa fa-play-circle-o"></i>
                </div>
              </a>
              <p>Jinn, @ 40% ABV</p>
              <h2>12 JULY 2018</h2>
            </div>
          </div>
          
          <div class="col-sm-3">
            <div class="video-gallery text-center">
              <a href="#">
                <div class="iframe-img">
                  <img src="" alt="" />
                </div>
                <div class="overlay-icon">
                  <i class="fa fa-play-circle-o"></i>
                </div>
              </a>
              <p>Jinn Rose Liqueur @27.5% ABV</p>
              <h2>30 JUNE 2011</h2>
            </div>
          </div>
          
        </div>
        <div class="col-sm-3">
          <div class="address">
            <img src="{{asset('images/home/map.png')}}" alt="" />
            <p>23 Riverview Rd Rangiora</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="footer-widget">
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <div class="single-widget">
            <h2>Products</h2>
            <ul class="nav-pill" style="padding:0;list-style:none;"> 
              <li><a href="#" >Whisky</a></li>
              <li><a href="#">Wine</a></li>
              <li><a href="#">Spirits</a></li>
            </ul>
          </div>
        </div>


        <div class="col-sm-2">
          <div class="single-widget">
            <h2>Product Recipe</h2>
<<<<<<< HEAD
            <ul class="nav-pill" style="padding:0;list-style:none;"> 
=======
            <ul class="nav nav-pills nav-stacked">
>>>>>>> efc101ba33679f28a799048c2d41ca40e6a9bd5a
              <li><a href="#">Recipes</a></li>
              <li><a href="#">How to make</a></li>
            </ul>
          </div>
        </div>


        <div class="col-sm-2">
          <div class="single-widget">
              <h2>New Arrivals</h2>
              <ul class="nav-pill" style="padding:0;list-style:none;"> 
                <li><a href="#">Product Launching</a></li>
                <li><a href="#">Tasting Tips</a></li>
              </ul>

              <br>
              <h2>Customer</h2>
              <ul class="nav-pill" style="padding:0;list-style:none;">
                  <li><a href="#">Tastring Experiences</a></li>
              </ul>
          </div>
        </div>


        <div class="col-sm-2">
          <div class="single-widget">
            <h2>History</h2>
            <ul class="nav-pills" style="padding:0;list-style:none;">
              <li><a href="#">About Company</a></li><br>
              <li><a href="#">Our News</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>

          </div>
        </div>


        <div class="col-sm-3 col-sm-offset-1">
          <div class="single-widget">
            <h2>Email to request</h2>
            <form action="#" class="searchform">
              <input type="text" placeholder="Your email address" />
              <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
              <p>Send the mail request to us <br />our step try to help you </p>
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <p class="pull-left">Copyright © 2018 Juniper Distillery Inc. All rights reserved.</p>
        <p class="pull-right">Designed by <span>LMW</span></p>
      </div>
    </div>
  </div>
  
</footer><!--/Footer-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<<<<<<< HEAD
    <script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('js/price-range.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
<script>
$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('nav').addClass('fixed-header');
    }
    else {
        $('nav').removeClass('fixed-header');
    }
});
</script> 
=======
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/SmoothScroll.js')}}"></script> 
<script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script> 
<script src="{{asset('js/owl.carousel.js')}}"></script> 
<script src="{{asset('js/jquery.waypoints.min.js')}}"></script> 
<!-- Custom Javascripts
    ================================================== --> 

    <script type="{{asset('text/javascript" src="js/main.js')}}"></script> 
<script src="{{asset('js/wow.min.js')}}"></script> 
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 900
        });
    });
</script> 
<script>
new WOW().init();
</script>

<script>
  // Initialize and add the map
  function initMap() {
    // The location of Uluru
    var Aspire2Ch = {lat: -43.535037, lng: 172.646573};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: Aspire2Ch});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: Aspire2Ch, map: map});
  }
  initMap();
      </script>
      <!--Load the API from the specified URL
      * The async attribute allows the browser to render the page while the API loads
      * The key parameter will contain your own API key (which is not needed for this tutorial)
      * The callback parameter executes the initMap() function
      -->

>>>>>>> efc101ba33679f28a799048c2d41ca40e6a9bd5a
