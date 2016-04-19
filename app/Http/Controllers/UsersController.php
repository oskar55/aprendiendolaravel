<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{

	public function index()
	{
		$users = User::orderBy('id','ASC')->paginate(2);
		return view('admin.users.index')->with('users', $users);
	}

	public function create()
	{
		return view('admin.users.create');
	}

	public function store(Request $request)
	{	
		$user = new User($request->all());
		$user->password=bcrypt($request->password);
		$user->save();
		dd('Usuario Creado');
	}
}
