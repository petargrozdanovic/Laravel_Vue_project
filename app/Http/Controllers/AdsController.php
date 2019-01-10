<?php

namespace App\Http\Controllers;

use Response;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Session;

class AdsController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
    $results = "";
    $countsPost = "";

    $count = 0;
    $profile = $this->GetProfile(Auth::id());
    $countsPost = $this->GetCountPost(Auth::id());
    $results = $this->GetPost(Auth::id());
    return view('layouts.my-ads', ['results' => $results], compact('profile', 'countsPost'));
  }

  public function getMyAds() {
    $results = $this->GetPost(Auth::id());
    return response()->json($results->jsonSerialize());
  }

  public function GetProfile($results) {
    $results = DB::table('users')->where('id', $results)->get();
    return $results;
  }

  public function GetCountPost($results) {
    $count = DB::table('users')
      ->Join('posts', 'users.id', '=', 'posts.user_id')
      ->where('posts.user_id', $results)->count();
    return $count;
  }

  public function GetPost($results) {

    $results = DB::table('posts')->where('posts.user_id', $results)->get();
    return $results;
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      //
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $itemName = Post::find($id);
    $itemName ->delete();
    Session::flash('message', 'Your Record Deleted Successfully');
    Session::flash('alert-class', 'alert-danger');
    //return redirect('my-ads');
    return response()->json(null);
  }
}
