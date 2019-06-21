@extends('layouts.app')
@section('content')

    <h1>{{$title}}</h1>
    <p>About 3 years ago my son came home form work one day and announced that he was going to buy a still</p>

        <p>Great I said , id been wanting one for ages, having brewed my own beer for about 20 years, i thought it was the next logical step</p>
         
        <p>So we went halves in a small, 3 liter, Alembic copper still. that was it, we were hooked</p>
        
        <p>I decided to experiment in making a Jinn Liqueur</p>
        
        <p>Wanting something a bit different i decided on the following flavor profile</p>
        
        <p>Juniper, Lemon and Lavender balanced with orange. I made Jinn, threw it out</p>
        
        <p>Made Jinn, threw that one out, after about a years experimentation i finally got the taste close to something people enjoyed, further tweaking and experimentation and eventually i got the flavor balance where i wanted it</p>
        
            <p>To produce the Liqueur i diluted the base spirit down to a healthy 27.5% ABV, using distilled water, and sweetened it with glucose</p>
        
                <p>And so a new urban legend was born.</p>
        
                    <p>Excellent on the rocks.</p>
        
                        <p>Current product types</p>
        
                            <p>Jinn, @ 40% ABV</p>
        
                                <p>Jinn Liqueur @ 27.5% ABV</p>
        
                                    <p>Jinn Rose Liqueur @27.5% ABV</p>
        
                                        <p>Coming soon,</p>
        
                                            <p>Stoutamon Spirit, a distillation of cardamon infused stout 2 40% ABV</p>
        
                                                <p>Fruit Flavored Jinn Liqueur</p>
        
                                                    <p>Raspberry, Strawberry and...
        </p>
        <br>
        <img style="width:35%" src="../images/pic.jpg">
        <div style="width: 1000px; height: 500px;">
                {!! Mapper::render() !!}
    </div>
@endsection
