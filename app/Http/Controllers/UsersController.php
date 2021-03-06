<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function profile(){
        return view('users.profile');
    }
    public function search(){
        return view('users.search');
    }

    // ログアウト機能（6/1８）
    public function loggedOut(\Illuminate\Http\Request $request){
        Auth::logout();
        return redirect('login');
    }
}
