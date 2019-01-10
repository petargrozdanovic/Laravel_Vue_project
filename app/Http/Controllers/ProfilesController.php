<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProfilesController extends Controller
{

	public function index() {

		$results = "";
		$count = 0;

		$results = $this->GetProfile(Auth::id());
		$countsPost = $this->GetCountPost(Auth::id());

		return view('layouts.my-profile', compact('results'),compact('countsPost'));
	}

  public function getMyProfile() {
    $results = $this->GetProfile(Auth::id());
    return response()->json($results->jsonSerialize());
  }

	public function GetProfile($results)
	{
		$results = DB::table('users')->where('id', $results)->get();
		return $results;
	}

	public function GetCountPost($results) {
		$count = DB::table('users')
          	->Join('posts', 'users.id', '=', 'posts.user_id')
          	->where('posts.user_id', $results)->count();

		return $count;
	}

  public function update(Request $request, $id) {
    $user = User::find($id);
    $user->update($request->only('phone'));
    Session::flash('message', 'Your Record Updated Successfully');
    Session::flash('alert-class', 'alert-danger');

    return response()->json($user->jsonSerialize());
  }
}
