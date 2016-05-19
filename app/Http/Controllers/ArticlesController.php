<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Tag;

class ArticlesController extends Controller
{
    public function index()
	{

	}

	public function create()
	{
		$categorias=Category::orderBy('name', 'ASC')->get();
		$tags = Tag::orderBy('name', 'ASC')->get();

		return view('admin.articles.create')
			->with('categorias', $categorias)
			->with('tags', $tags);
	}

	public function store()
	{	

	}

	public function destroy()
	{

	}

	public function edit()
	{

	}

	public function update()
	{

	}
}
