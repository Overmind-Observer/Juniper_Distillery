
    <div class="product-details"><!--product-details-->
        <div class="col-sm-5">
            <div class="view-product">
                <img src="{{asset('images/product/'.$product->product_image.'')}}" alt="" />
                <h3>ZOOM</h3>
            </div>
            <div id="similar-product" class="carousel slide" data-ride="carousel">
                
                  <!-- Wrapper for slides-->
                  <div class="carousel-inner">
                    @foreach($similar as $similarone)
                        <div class="item active">
                        <a href="{{route('shop.show',$similarone->session_id)}}"><img src="{{asset('images/product/'.$similarone->product_image.'')}}" alt=""></a>
                        </div>
                    @endforeach
                </div>  

                  <!-- Controls -->
                  <a class="left item-control" href="#similar-product" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="right item-control" href="#similar-product" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                  </a>
            </div>

        </div>
        <div class="col-sm-7">
            <div class="product-information"><!--/product-information-->
                <img src="images/product-details/new.jpg" class="newarrival" alt="" />
                <h2>{{$product->product_subtitle}}</h2>
                <p>Web ID: {{$product->session_id}}</p>
                <img src="images/product-details/rating.png" alt="" />
                <span>
                    <span>US {{$product->presentPrice()}}</span>
                    <label>Quantity:</label>
                    <input type="text" value="3" />
                    <button type="button" class="btn btn-fefault cart">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart
                    </button>
                </span>
                <p><b>Availability:</b> In Stock</p>
                <p><b>Condition:</b> New</p>
                <p><b>Brand:</b> LMW</p>
                <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
            </div><!--/product-information-->
        </div>
    </div><!--/product-details-->