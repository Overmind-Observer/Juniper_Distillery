<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB; //this allows to use DB commands


class PostsController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' =>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::all();        
        //$posts = DB::select('Select * from Posts order by title desc');
        //$posts = Post::orderBy('title','desc') -> take(1) -> get();
        //$posts = Post::orderBy('title','desc') -> get();
        $posts = Post::orderBy('created_at','desc') -> paginate(2);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate ($request,[
            'title' => 'required',
            'body' =>'required',
            'cover_image' =>'image|nullable|max:1999',
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image')){ // file selected
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();  
            // Get just filename  
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path =$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        } else{  // do not selected
            $fileNameToStore = 'noimage.jpg'; 
        }

        //Create a post
        $post = new Post;
        $post -> title = $request ->input('title');
        $post -> body = $request ->input('body');
        $post -> user_id = auth()->user()->id;
        $post -> cover_image = $fileNameToStore; //image save
        $post -> save();
        return redirect('/posts') ->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post = Post::find($id);
        return view('posts.show')-> with('post',$post);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //Check for correct users
        if(auth()->user()->id !==$post->user_id){
            return redirect('/posts')-> with('error','Unauthorized Page'); 
        }
        return view('posts.edit')-> with('post',$post); 
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
            'title' => 'required',
            'body' =>'required'
        ]);

        //Handle File Upload
        if($request->hasFile('cover_image')){ // file selected
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();  
            // Get just filename  
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path =$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        }


        //Update a post
        $post = Post::find($id);
        $post -> title = $request ->input('title');
        $post -> body = $request ->input('body');
        if($request->hasFile('cover_image')){ // file existed
            $post->cover_image = $fileNameToStore;
        }
        $post -> save();
        return redirect('/posts') ->with('success','Post Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                //Delete a post
                $post = Post::find($id);
                //Check for correct users
                if(auth()->user()->id !==$post->user_id){
                    return redirect('/posts')-> with('error','Unauthorized Page'); 
                }
                $post -> delete();
                return redirect('/posts') ->with('success','Post Deleted');
    }
}
