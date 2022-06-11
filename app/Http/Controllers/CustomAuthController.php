<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
      

    public function customLogin(Request $request)
    {
        $user = User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password))
        {
             echo ("Username or password wrong !");
        }
        else{
            if($user->is_admin){
                $request->session()->put('user',$user);
                return redirect('/dashboard');
            }
            $request->session()->put('user',$user);
            return redirect('/');
        }
        
    }



    public function registration()
    {
        return view('auth.registration');
    }
      

    public function customRegistration(Request $request)
    {  
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'adress' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("/")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
      return User::create([
        'nom' => $data['nom'],
        'prenom' => $data['prenom'],
        'telephone' => $data['telephone'],
        'adress' => $data['adress'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }   
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    } 
}
