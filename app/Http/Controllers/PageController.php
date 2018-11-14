<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
       // return view('pages.index');
       $title ='Welcome to Laravel...';
       return view('pages.index') -> with('title',$title);

    }

    public function about(){
        //return view('pages.about');
        $title ='About Us';
       return view('pages.about') -> with('title',$title);
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
