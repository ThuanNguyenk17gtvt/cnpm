<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Auth;

class HomeController extends Controller
{
    public function gethome(){
    	return view('admin.index');
    }
    public function getLogout(){
    	Auth::logout();
    	return redirect()->intended('home');
    }
}
