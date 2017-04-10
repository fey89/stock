<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class FooController extends Controller
{

	public function index() {

		return view('foo');
	}


	public function store(Request $request) {

		$token = $request->input('_token');
		$name = $request->input('name');
		$email = $request->input('email');
		$sexe = $request->input('sexe');
		$email2 = $request->input('email2');
		$amount = $request->input('amount');

		return "name = ".$name." email = ".$email." email2 = " .$email2." sexe = ".$sexe." token = ".$token." amount =".$amount;
	}

}
