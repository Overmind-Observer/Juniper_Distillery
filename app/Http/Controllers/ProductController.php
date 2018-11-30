<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product; //call the model
use DB; //this allows to use DB commands

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::orderBy('created_at','desc') -> paginate(5);
        return view('products.index')->with('products',$products);
       // return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'Description' =>'required',
            'Price' =>'required',
            'Capacity' =>'required',
            'Flag' =>'required',
            'Picture_Path' =>'image|nullable|max:1999',
            'Avl_Qty' =>'required',
            'Prodcut_Range' =>'required',
            'InActive' =>'required',
        ]);

        //Handle File Upload
        if($request->hasFile('Picture_Path')){ // file selected
            // Get filename with the extension
            $filenameWithExt = $request->file('Picture_Path')->getClientOriginalName();  
            // Get just filename  
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
            // Get just ext
            $extension = $request->file('Picture_Path')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path =$request->file('Picture_Path')->storeAs('public/images/products/',$fileNameToStore);
        } else{  // do not selected
            $fileNameToStore = 'noimage.jpg'; 
        }

        //Add new product
        $product = new product;
        $product -> Product_Name = $request ->input('Product_Name');
        $product -> Description = $request ->input('Description');
        $product -> Price = $request ->input('Price');
        $product -> Capacity = $request ->input('Capacity');
        $product -> Spe_Inst = $request ->input('Spe_Inst');
        $product -> Flag = $request ->input('Flag');
        $product -> Avl_Qty = $request ->input('Avl_Qty');
        $product -> Prodcut_Range = $request ->input('Prodcut_Range');
        $product -> InActive = $request ->input('InActive');
        //$product -> user_id = auth()->user()->id;
        $product -> Picture_Path = $fileNameToStore; //image save
        $product -> save();
        return redirect('/products') ->with('success','Product Added Successfully...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')-> with('product',$product);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        //Check for correct users
        // if(auth()->user()->id !==$post->user_id){
        //     return redirect('/posts')-> with('error','Unauthorized Page'); 
        // }
        return view('products.edit')-> with('product',$product); 
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
            'Product_Name' => 'required',
            'Description' =>'required',
            'Price' =>'required',
            'Capacity' =>'required',
            'Flag' =>'required',
            'Picture_Path' =>'image|nullable|max:1999',
            'Avl_Qty' =>'required',
            'Prodcut_Range' =>'required',
            'InActive' =>'required',
        ]);

                //Handle File Upload
                if($request->hasFile('Picture_Path')){ // file selected
                    // Get filename with the extension
                    $filenameWithExt = $request->file('Picture_Path')->getClientOriginalName();  
                    // Get just filename  
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME); 
                    // Get just ext
                    $extension = $request->file('Picture_Path')->getClientOriginalExtension();
                    //Filename to store
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    //Upload Image
                    $path =$request->file('Picture_Path')->storeAs('public/images/products/',$fileNameToStore);
                }

        //Update a product
        $product = Product::find($id);
        $product -> Product_Name = $request ->input('Product_Name');
        $product -> Description = $request ->input('Description');
        $product -> Price = $request ->input('Price');
        $product -> Capacity = $request ->input('Capacity');
        $product -> Spe_Inst = $request ->input('Spe_Inst');
        $product -> Flag = $request ->input('Flag');
        $product -> Avl_Qty = $request ->input('Avl_Qty');
        $product -> Prodcut_Range = $request ->input('Prodcut_Range');
        $product -> InActive = $request ->input('InActive');
        //$product -> user_id = auth()->user()->id;

        if($request->hasFile('cover_image')){ // file existed
            $product->Picture_Path = $fileNameToStore;
        }
        $product -> save();
        return redirect('/products') ->with('success','Product Updated Successfully...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                        //Delete a product
                        $product = Product::find($id);
                        //Check for correct users
                        // if(auth()->user()->id !==$post->user_id){
                        //     return redirect('/posts')-> with('error','Unauthorized Page'); 
                        // }
        
                        if($product-> Picture_Path !='noimage.jpg'){
                            //delete image
                            storage:: delete('public/images/products/'.$product->Picture_Path);
                        }
                        $product -> delete();
                        return redirect('/products') ->with('success','Product Deleted Successfully...');
    }
}
