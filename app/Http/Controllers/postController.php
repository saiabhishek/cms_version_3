<?php
namespace App\Http\Controllers;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class postController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
	public function view()
	{	
		$inp=\App\Post::all();
		$int = new \App\Post;
		return view('cms/post')->with('inp',$inp)->with('int',$int);
		
	}
    public function index()
    {
       	$input=Request::all();
       	if($file=Request::file('image'))
       	{		
       	$extension = $file->getClientOriginalExtension();
       	\Storage::disk('local')->put($file->getFilename().'.'.$extension,  File::get($file));		
       	$file1=$file->getFilename().'.'.$extension;
       }
       else
       {
       	$file1='empty';
       }
     	$reg = new \App\post;
		$reg->posts = $input['posts'];
		$reg->user=$input['invisible'];
		$reg->filename =$file1; 
		$reg->save();
		 return redirect('/post');
    }
     
}