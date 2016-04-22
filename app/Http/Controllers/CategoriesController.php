<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Laracasts\Flash\Flash;

class CategoriesController extends Controller
{
	public function index()
	{
		$categories = Category::orderBy('id','DESC')->paginate(5);
		return view('admin.categories.index')->with('categories', $categories);
	}

	public function create()
	{
		return view('admin.categories.create');
	}

	public function store(CategoryRequest $request)
	{	
		$category = new Category($request->all());
		$category->save();

		Flash::success('la categoria ' . $category->name . ' se ha creado');
		return redirect()->route('admin.categories.index');
	}




	public function destroy($id)
	{
		$category = Category::find($id);
		$category->delete();
		Flash::error('la categoria ' . $category->name . ' se ha eliminado');
		return redirect()->route('admin.categories.index');
	}

	public function edit()
	{
		$category = Category::find($id);
		return view('admin.categories.edit')->with('category', $category);
	}

	public function update()
	{

	}

}
