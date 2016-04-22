<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{

	public function index()
	{
		$users = User::orderBy('id','ASC')->paginate(4);
		return view('admin.users.index')->with('users', $users);
	}

	public function create()
	{
		return view('admin.users.create');
	}

	public function store(UserRequest $request)
	{	
		$user = new User($request->all());
		$user->password=bcrypt($request->password);
		$user->save();
		
		//el mensaje se insertaria en la barra de menu admin.blade.php pero puede ser en cualquier vista
		Flash::success("se ha registrado ".$user->name . " correctamente");
		return redirect()->route('admin.users.index');
	}

	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		Flash::error("se ha eliminado el Usuario: ".$user->name." correctamente");
		return redirect()->route('admin.users.index');
	}

	public function edit($id)
	{
		//dd($id);
		$user = User::find($id);
		return view('admin.users.edit')->with('user',$user);
	}

	public function update(Request $request, $id)
	{
		$user = User::find($id);
		// Tambien sirve para guardar todo de esta manera:  $user->fill($request->all());
		$user->name = $request->name;
		$user->email = $request->email;
		$user->type = $request->type;
		$user->save();

		Flash::error("se ha editado el Usuario: ".$user->name." correctamente");
		return redirect()->route('admin.users.index');
	}

}
