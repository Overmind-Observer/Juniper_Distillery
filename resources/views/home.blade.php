@extends('layouts.app')

@section('content')
@if(auth()->user()->isAdmin == 1)
    {{-- <div class="panel-body"> <a href="{{url('admin/routes')}}">Admin</a> </div> --}}
    {{-- <script>window.location.href = "{{url('admin/routes')}}";</script> --}}
    <?php header("Location: ".url("admin/routes").""); /* Redirect browser */
exit();?>
@else 
<div class="panel-heading">Normal User</div>
                    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div ><a href="/posts/create" class="btn btn-primary">Create Post</a></div>
                    <br>
                    
                    <div><h3>Your experience with flavored Jinn Liqueur range...</h3></div>
                        @if (count($posts) > 0)
                            <table width ="600">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    
                                </tr>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td style="text-align:right"><a href="/posts/{{$post ->id}}/edit" class="btn btn-default">Edit</a>
                                    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
                                            {!! Form::close() !!}</td>
                                    </tr>        
                                @endforeach
                            </table>
                        @else
                                <p>You have no Posts...</p>
                        @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
