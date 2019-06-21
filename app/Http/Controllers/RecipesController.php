<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Recipe; //call the model
use App\Product; //call the model
use DB; //this allows to use DB commands

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::orderBy('created_at','desc') -> paginate(5);
        return view('Recipes.index')->with('recipes',$recipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = DB::table('products_1')->where('InActive','=', 0)->get();
        return view('Recipes.create')->with('products',$products);
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
            'Product_Name' => 'required',
            'Title' =>'required',            
            'Main_Ingrident' =>'required',
            // 'Sub_Ingrident' =>'required',
            'Description' =>'required',
            'InActive' =>'required',
        ]);

        //Add new recipes
        $recipes = new recipe;
        $recipes -> Product_Id = $request ->input('Product_Name');
        $recipes -> Title = $request ->input('Title');
        $recipes -> Main_Ingrident = $request ->input('Main_Ingrident');
        $recipes -> Sub_Ingrident = $request ->input('Sub_Ingrident');
        $recipes -> Description = $request ->input('Description');
        $recipes -> InActive = $request ->input('InActive');
        //$product -> user_id = auth()->user()->id;
        $recipes -> save();
        return redirect('/Recipes') ->with('success','Recipes Added Successfully...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipes = Recipe::find($id);
        $products = DB::table('products_1')
        ->join('recipies', function ($join) use ($id) {
            $join->on('products_1.id', '=', 'recipies.Product_Id')
                 ->where('recipies.id', '=', $id);
        })
        ->get();
        // dd($products);
        $products = json_decode($products);
        // dd($products[0]->Product_Name);
        return view('Recipes.show')-> with('recipes',$recipes) ->with('products',$products); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipes = Recipe::find($id);
        //Check for correct users
        // if(auth()->user()->id !==$post->user_id){
        //     return redirect('/posts')-> with('error','Unauthorized Page'); 
        // }
        return view('Recipes.edit')-> with('recipes',$recipes); 
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
            //'Product_Name' => 'required',
            'Title' =>'required',            
            'Main_Ingrident' =>'required',
            // 'Sub_Ingrident' =>'required',
            'Description' =>'required',
            'InActive' =>'required',
        ]);

        //Update a recipes
                $recipes = new recipe;
                $recipes = Recipe::find($id);
                //$recipes -> Product_Id = $request ->input('Product_Name');
                $recipes -> Title = $request ->input('Title');
                $recipes -> Main_Ingrident = $request ->input('Main_Ingrident');
                $recipes -> Sub_Ingrident = $request ->input('Sub_Ingrident');
                $recipes -> Description = $request ->input('Description');
                $recipes -> InActive = $request ->input('InActive');
                //$product -> user_id = auth()->user()->id;
                $recipes -> save();

      
        return redirect('/Recipes') ->with('success','Recipe Updated Successfully...');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                                //Delete a Recipes
                                $recipes = Recipe::find($id);
                                //Check for correct users
                                // if(auth()->user()->id !==$post->user_id){
                                //     return redirect('/posts')-> with('error','Unauthorized Page'); 
                                // }
                                $recipes -> delete();
                                return redirect('/Recipes') ->with('success','Recipe Deleted Successfully...');
        
    }
}
