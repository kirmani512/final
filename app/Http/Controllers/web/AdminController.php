<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function index()
    {
        $pass = "raza";
        return view("web.adminlogin");
    }

    function adminlogin(Request $req)
    {
        $req->validate([
            "email" => "required|email",
            "password" => "required"
        ]);
        $user = Admin::where("email", $req->email)->first();
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
    function add_admin()
    {
        return view("web.adminregister");
    }
    function save(Request $req)
    {
        $req->validate([
            "name" => "required",
            "password" => "required",
            "email" => "required"
        ]);
        $user = new Admin();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return response(['message'=>'admin registered successfully']);

    }
    function logout(Request $req)
    {
        $req->session()->forget('name');
        $req->session()->forget('password');
        $req->session()->flush();
        return response(['message'=>'admin logout successfully']);
    }
}
