<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function index()
    {
        $pass = "raza";
        return view("web.login");
    }
    public function getuser()
    {
        User::select("*")->today()->get();
        User::select("*")->status(1)->get();
    }
    function login(Request $req)
    {
        $req->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $user = User::where("email", $req->email)->first();
        if (!empty($user)) {
            session([
                "email" => $user->email,
                "name" => $user->name,
                "user_id" => $user->id
            ]);
            if (Hash::check($req->password, $user->password)) {
                return redirect("web");
            } else {
                return back()
                    ->withErrors(["error" => "username / password is incorrect"])
                    ->withInput();
            }
        }
        return redirect("web/login");
    }
    function add_user()
    {
        return view("web.register");
    }
    function save(Request $req)
    {
        $req->validate([
            "name" => "required",
            "password" => "required",
            "email" => "required"
        ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect("web");
    }
    function logout(Request $req)
    {
        $req->session()->forget('name');
        $req->session()->forget('password');
        $req->session()->flush();
        return redirect("web/login");
    }
}
