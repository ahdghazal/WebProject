<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function showSignupPage(Request $request) {
        return view('signup');
    }

    public function showLoginPage(Request $request) {
        return view('login', ['errorMsg' => $request->query('errorMsg')]);
    }

    public function signup(Request $request) {
        $user = new User;
        $user->first_name = $request->fname;
        $user->last_name = $request->lname;
        $user->email = $request->email;
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login');
    }

    public function login(Request $request) {
        $user = User::where('email', "=", $request->email)->first();
        if (!$user) {
            return redirect('login?errorMsg=User not found');
        }
        if(!(\Auth::attempt(['email' => $request->email, 'password' => $request->password]))){
            return redirect('login?errorMsg=Wrong Password!');
        }

        return redirect('/');
    }
    public function logout(Request $request) {
        \Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response()->json(["status"=>true,"msg"=>"You have successfully logged out","redirect_location"=>url("")]);
    }
}

