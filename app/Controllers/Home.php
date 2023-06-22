<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {
        if(!auth()->loggedIn()){
            return redirect()->route('login');
        }
        if (session('magicLogin')) {
            return redirect()->route('set_password');
        }
        return view('admin_dash');
    }
    public function pass_change(){
        return view('welcome_message');
    }
}
