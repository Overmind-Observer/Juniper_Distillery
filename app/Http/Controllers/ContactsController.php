<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\contacts;//call the model
use DB; //this allows to use DB commands


class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = contacts::all();
        return view('Contacts.index')->with('contacts',$contacts);
    }
    public function store(Request $request)
    {
        $this -> validate ($request,[
            'address' => 'required',
            'email' =>'required',
            'phone_number' =>'required',

 //           'cover_image' =>'image|nullable|max:1999',
        ]);

        //Create a news
        $contacts = new contacts;
        $contacts -> address = $request ->input('address');
        $contacts -> email = $request ->input('email');
        $contacts -> phone_number = $request ->input('phone_number');
        $contacts -> save();
        return redirect('/Contacts') ->with('success','Contacts Created');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$news = News::table('news')->where('InActive','=', 0)->get();
        return view('Contacts.create');  //->with('news',$news);
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
        $contacts = contacts::find($id);
        return view('contacts.show')->with('contacts', $contacts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts = contacts::find($id);
        return view('contacts.edit')-> with('contacts',$contacts); 
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
            


 //           'cover_image' =>'image|nullable|max:1999',
        ]);

        //Update a contacts
        $contact = contacts::find($id);
        $contact -> address = $request ->input('address');
        $contact -> email = $request ->input('email');
        $contact -> phone_number = $request ->input('phone_number');
        $contact -> save();
        return redirect('/Contacts') ->with('success','Contacts Updated');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                                //Delete a news
                                $contacts = contacts::find($id);
                                //Check for correct users
                                // if(auth()->user()->id !==$post->user_id){
                                //     return redirect('/posts')-> with('error','Unauthorized Page'); 
                                // }
                                $contacts -> delete();
                                return redirect('/Contacts') ->with('success','Contacts Deleted Successfully...');
        
    }
}
