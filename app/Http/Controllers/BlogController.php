<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Isi;

class BlogController extends Controller
{
    public function index(){
		$blogs = Isi::orderBy('id', 'DESC')->take(1)->get();

		$posts = Isi::all();
		return view('blog.blog', ['blogs' => $blogs], ['posts' => $posts]);
	}

	public function show($slug)
    {
		$posts = Isi::where('slug_judul', $slug)->get();
		$blogs = Isi::all();

        return view('blog.blog_content', ['blogs' => $blogs], ['posts' => $posts]);
    } 
    
}
