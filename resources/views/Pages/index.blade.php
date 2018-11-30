@extends('layouts.app')
@section('content')
<div class="jambotron">
    <section>
        @include('inc.banner')
        <div class="container">
            <div class="row">
                @include('layouts.category')                
                <div class="col-sm-9 padding-right">
                        @include('shop.featureitem')
                        @include('shop.item_cate')
                        @include('shop.recommend')
                </div> 
            </div>
        </div>
    </section>
</div>
@endsection
    
        

