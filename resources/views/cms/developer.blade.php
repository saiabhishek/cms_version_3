@extends('layouts.app')
@section('content')
<script language="javascript" type="text/javascript">

function addbutton() {
   document.editr.header.value += '<input type="button" value="button">';
}
function addtext() {
   document.editr.header.value += '<input type="text">';
}
function addtagh1() {
  
   document.editr.header.value += '<h1></h1>';
  }
 function addtagh2()
  {
    document.editr.header.value += '<h2></h2>';
  }
  function addtagh3(){
   document.editr.header.value += '<h3></h3>'; 
  }
 function clea(){
   document.editr.header.value = ' '; 
  }

</script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Editor</div>
                <input type="button" value="Add Button" onClick="addbutton();">
                <input type="button" value="Add text" onClick="addtext();">
                   <input type="button" value="h1" onclick="addtagh1()">
                   <input type="button"value="h2" onclick="addtagh2()">
                   <input type="button" value="h3" onclick="addtagh3()">
                   <input type="button" value="clear" onclick="clea()">
                   @foreach ($inp as $inpt)
                   <select>
                    <option> <a href="http://localhost:8000/image/{{$inpt['filename']}}"> <img  src="http://localhost:8000/image/{{$inpt['filename']}}"height="20" width="20"></a></option>
                  </select>
                   @endforeach
                   <div class="panel-body">
                    {!! Form::open(['url'=>'/developer','name'=>'editr']) !!}
                    {!! Form::text('name',null,['class'=>'form-control'])!!}
                    {!! Form::textarea('header',null,['class'=>'form-control'])!!}
                    {{ Form::hidden('invisible', Auth::user()->name) }}
                    <input type="submit" name="demo" value="demo"class="btn btn-primary form-control">
                    <input type="submit" name="save" value="save" class="btn form-control">
                    {!! Form::close() !!}
                  </div>
               </div>
        </div>
       </div>
       </div>
@endsection