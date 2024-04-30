<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  index() {
        return view('user.index');
    }
    public function login(Request $request)
    {
        // Validate the form data
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        return redirect()->route('user.index');
    }

    public function sub_test(){
        return view("user.sub_test");
    }

    public function try_out(){
        return view("user.try_out");
    }

    public function hasil(){
        return view("user.hasil");
    }
}

?>