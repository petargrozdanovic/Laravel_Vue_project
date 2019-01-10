<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Post;

class IndexController extends Controller
{
    //
    	public function index() {
		$this->sessionlanguage();
		$results = "";
		$results = $this->GetPost($results);
		return view('layouts.index', ['results' => $results]);
	}

		public function sessionlanguage()
	    {
	    	if (!empty(session('language'))) {
	    		$language = session('language');
	    		Session::put('language', $language );		    		
	    	}
	    	else  {		    	
	    		$language = 'FR';
	    		Session::put('language', $language );		    				    		
	    	} 
	    }  
}
