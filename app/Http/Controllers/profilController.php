<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class profilController extends Controller
{
    //
    function index(Request $request){
        if($request->session()->has('user')){
            return view('profil');
        }
        return redirect()->back();

    }
    function show()
    {
        //$data= User::find($id);
        //$data = auth()->user()->id;
        return view('profil');
    }
    /*function update(Request $req){
        $data= User::find($req->id);
        $data ->nom = $req->nom;
        $data -> prenom = $req-> prenom;
        $data -> telephone = $req-> telephone;
        $data -> adress = $req-> adress;
        $data -> email = $req-> email;
        $data -> save();
        return redirect('/profil');

    }*/
}
