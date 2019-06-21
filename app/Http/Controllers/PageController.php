<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper; // googlemap
use App\Product;
use App\News;
use App\contacts;
use DB;

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

    public function news(){
       // return view('pages.news');

       //$news = news::orderBy('created_at','desc') -> paginate(5);
       $title ='Our news';
       $news = news::orderBy('created_at','desc') -> paginate(5);
       return view('Pages.news')->with('news',$news);
   }    

   public function newsN($id){
    // return view('pages.news');
    $newsN = news::find($id);
    return view('Pages.newsN')->with('newsN', $newsN);
    }     
 
    public function contacts(){

        //map setting
        Mapper::map(-43.535150, 172.646648);

        //return view('pages.contacts');
        $title ='Our contacts';
        $contacts = Contacts::all();
        return view('Pages.contacts') -> with('contacts',$contacts);
    }
}
