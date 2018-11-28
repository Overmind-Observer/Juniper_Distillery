<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper; // googlemap
use App\Product;

class PageController extends Controller
{
    public function index(){
       // return view('pages.index');
       //return view('Pages.index') -> with('title');
       //send product database
       $products = Product::inRandomOrder()->take(6)->get();

       return view('Pages.index')->with('products',$products);
    }

    public function about(){

        //map setting
        Mapper::map(-43.535150, 172.646648);

        //return view('pages.about');
        $title ='A brief history...';
       return view('Pages.about') -> with('title',$title);
    }

    public function service(){
        //return view('pages.service');
        $data = array( 
            'title' =>'Service',
            'services' => ['Web Design','Programming','SEO']
        );
       return view('pages.service') -> with($data);
    }    

}
