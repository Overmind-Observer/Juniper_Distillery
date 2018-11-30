@extends('layouts.app')
@section('content')
<div class="jambotron">
    	<section id="advertisement">
                <div class="container">
                    <img src="images/shop/advertisement.jpg" alt="" />
                </div>
        </section>

    <section>
        <div class="container">
            <div class="row">
                @include('layouts.category')

                <div class="col-sm-9 padding-right">
                    @include('shop.featureitem')
                </div>
            </div>
        </div>
    </section>
    
</div>
@endsection
    