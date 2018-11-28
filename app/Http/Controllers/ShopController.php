<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException; //this allows to use DB commands

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at','desc') -> paginate(6);

        return view('Pages.shoplist')->with('products',$products);
    }

 

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($sid)
    {
        $product = Product::where('session_id',$sid)->firstOrFail();

         $similar = Product::where('session_id', '!=' ,$sid)->inRandomOrder()->take(4)->get();


         //return view('Pages.shopdetail')->with('product', $product);

        return view('Pages.shopdetail')->with([
            'product'=> $product,
            'similar'=> $similar,
            ]);
    
    }

    
}
