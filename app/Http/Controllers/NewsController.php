<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\News; //call the model
use DB; //this allows to use DB commands

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = news::orderBy('created_at','desc') -> paginate(5);
        return view('News.index')->with('news',$news);
    }
    public function store(Request $request)
    {
        $this -> validate ($request,[
            'Title' => 'required',
            'Body' =>'required',
 //           'cover_image' =>'image|nullable|max:1999',
        ]);

        //Create a news
        $newsN = new News;
        $newsN -> Title = $request ->input('Title');
        $newsN -> Body = $request ->input('Body');
        $newsN -> save();
        return redirect('/News') ->with('success','News Created');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$news = News::table('news')->where('InActive','=', 0)->get();
        return view('News.create');  //->with('news',$news);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $newsN = news::find($id);
        return view('News.show')->with('newsN', $newsN);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newsN = news::find($id);
        //Check for correct users
        // if(auth()->user()->id !==$post->user_id){
        //     return redirect('/posts')-> with('error','Unauthorized Page'); 
        // }
        return view('News.edit')-> with('newsN',$newsN); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate ($request,[
            'Title' => 'required',
            'Body' =>'required',
 //           'cover_image' =>'image|nullable|max:1999',
        ]);

        //Create a news
        $newsN = News::find($id);
        $newsN -> Title = $request ->input('Title');
        $newsN -> Body = $request ->input('Body');
        $newsN -> save();
        return redirect('/News') ->with('success','News Updated');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                                //Delete a news
                                $news = news::find($id);
                                //Check for correct users
                                // if(auth()->user()->id !==$post->user_id){
                                //     return redirect('/posts')-> with('error','Unauthorized Page'); 
                                // }
                                $news -> delete();
                                return redirect('/News') ->with('success','News Deleted Successfully...');
        
    }
}
