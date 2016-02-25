@extends('layouts.app')
@section('content')


<div class="container">
 
    @foreach ($inp as $inpt)
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
               <div class="panel-heading">{{ $inpt['user'] }} has posted at {{ $inpt['updated_at'] }}</div>
                  <div class="panel-body">
                     {{ $inpt['posts'] }}
                    <a href="http://localhost:8000/image/{{$inpt['filename']}}"> <img  src="http://localhost:8000/image/{{$inpt['filename']}}"height="200" width="200"></a>
                  </div>
            </div>
         </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">image insert</div>
                  <div class="panel-body">
                    {!! Form::open(['url'=>'/post','files'=>'true']) !!}
                    {!! Form::textarea('posts',null,['class'=>'form-control'])!!}
                    {{ Form::hidden('invisible', Auth::user()->name) }}
                    {!! Form::file('image') !!}
                    {!! Form::submit('Submit',['class'=>'btn btn-primary form-control']) !!}
                    {!! Form::close() !!}    
                  </div>
            </div>
        </div>
      </div>
</div>    

@endsection