<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Post;

class PostsController extends Controller
{
	public  function index()
	{
		//$posts = Post::all()->dd();
		//$posts = Post::paginate(3)->dd();
		//$posts = Post::all();
		$posts = Post::paginate(3);
		return  view('index', compact('posts'));

	}

}
