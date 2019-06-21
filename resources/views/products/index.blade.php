@extends('layouts.adminapp')
@section('content')
    <h1>Products Details</h1>
    <hr style="border-top: 1px dashed black;">
        @if(count($products) > 0)
            @foreach ($products as $product)
               <div>
                    <div class = "row">
                        <div class="col-md-4 col-sm-4"> <!--show image info -->
                             
                            <img style="width:50%" src="/storage/images/products/{{$product->Picture_Path}}">
                        </div>
                        <div class="col-md-4 col-sm-4"> <!--show post info -->
                            <h3><a href="/products/{{$product ->id}}">{{$product ->Product_Name}}</a></h3> 
                            <small>Written on {{$product->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            
            {{$products->links()}}
        @else
            <p>Products not found...</p>
        @endif
        <hr style="border-top: 1px dashed black;">

        
@endsection
