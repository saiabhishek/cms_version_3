@extends('layouts.app')
@section('content')


@foreach ($inp as $inpt)
 <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              	<div class="panel-heading">{{ $inpt['user'] }}</div>
                	<div class="panel-body">
				
				 <h3> {{ $inpt['name'] }}</h3></br>
				  {{ $inpt['header'] }}
				  {!! Form::open(['url'=>'/developer/viewdev/editor']) !!}
				  {{ Form::hidden('invisible', Auth::user()->name) }}
				  {{ Form::hidden('id',$inpt['id'])}}
				  {{ Form::hidden('header',$inpt['header'])}}  
				   <div align="right">
				   <button type="submit" name="edit" value="edit" class="btn btn-default"><span class="glyphicons glyphicons-claw-hammer"></span>edit</button>
				   <button type="submit" name="delete" value="delete" class="btn btn-default"><span class="glyphicons glyphicons-claw-hammer"></span>delete</button>
					</div>
				   {!! Form::close() !!}
				   <div align="right">
					<a href="http://localhost:8000/developer/viewdev/{{$inpt['name']}}"> <button  class="btn btn-default"><span class="glyphicon glyphicon-eye-open"></span>View</button></a>
				</div>
					</div>
				</div>
		</div>
</div>

@endforeach

@endsection