<?php

namespace App\Http\Controllers;

use App\Models\User;
use FontLib\Table\Type\name;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Tempat;
use App\Models\Event;

class loginController extends Controller
{
    public function landing(Request $request){
        if($request->has('search')){
            $dataacara = Event::where('nama','LIKE','%' .$request->search .'%')->paginate();

        }else{
            $data = Event::with('tempat')->paginate();
        }
     $datatempat = Tempat::all();
        return view('lp/landing',compact('datatempat','data'));

    }
    public function login(){
        return view('login');
    }
    public function loginproses(Request $request){
        $this->validate($request, [
            'email' => 'required|exists:users,email',
            'email' => 'required',
            'password' => 'required',
        ],[

            'email.exists' => 'Harus diisi',
            'email.required' => 'Harus diisi',
            'password.required' => 'Harus diisi',
        ]
    );
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('login');

    }
    public function register(){
        return view('register');
    }
    public function registeruser(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'name.required' => 'Harus diisi',
            'email.exists' => 'Harus diisi',
            'password.required' => 'Harus diisi',
        ]
        );
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

    return redirect('/login');

    }
    public function logout(){
        Auth::logout();
        return redirect('/');



        }

}
