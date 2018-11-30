@extends('layouts.app')
@section('content')
<div class="jambotron">
    <section>
        <div class="container">
            <div class="row">
                @include('layouts.category')

                <div class="col-sm-9 padding-right">
                    @include('shop.product_detail')
                    @include('shop.review')
                </div>
            </div>
        </div>
    </section>
</div>
@endsection