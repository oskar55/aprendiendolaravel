<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\tagRequest;
use App\Tag;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class TagsController extends Controller
{
    public function index(Request $request)
	{
		$tags = Tag::search($request->name)->orderBy('id', 'DESC')->paginate(5);
		return view('admin.tags.index')->with('tags', $tags);
	}

	public function create()
	{
		return view('admin.tags.create');
	}

	public function store(tagRequest $request)
	{	
		$tags = new Tag($request->all());
		$tags->save();
		Flash::success('el tag  ' . $tags->name . ' se ha creado');
		return redirect()->route('admin.tags.index');


	}

	public function destroy($id)
	{
		$tag = Tag::find($id);
		$tag->delete();

		Flash::error('se ha eliminado el tag: '. $tag->name .' satisfactoriamente');
		return redirect()->route('admin.tags.index');
	}

	public function edit($id)
	{
		$tag = Tag::find($id);
		return view('admin.tags.edit')->with('tag', $tag);
	}

	public function update(tagRequest $request, $id)
	{
		$tag = Tag::find($id);
		$tag->fill($request->all());
		$tag->save();
		Flash::warning('el tag '.$tag->name.' ha sido editado con exito');
		return redirect()->route('admin.tags.index');
	}
}
