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
            <ul class="nav-pill" style="padding:0;list-style:none;"> 
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
