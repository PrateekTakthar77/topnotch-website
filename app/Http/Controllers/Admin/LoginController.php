<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function checkLogin(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->passes()){

            // dd($request->email, $request->password, $request->get('remember'));

            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],
             $request->get('remember'))){

                $admin = Auth::guard('admin')->user();

                return redirect()->route('admin.dashboard')->with('success','Welcome to Dashboard');
                
                
            }else{
                return redirect()->route('admin')->with('error','Username or password not match');
            }

        }else{
            return redirect()->route('admin')
                            ->withErrors($validator)
                            ->withInput($request->only('email'));
        }
    }
}

