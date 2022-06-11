<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use Illuminate\Support\Facades\DB;


class homeController extends Controller
{
    function show()
    {
       // $data=article::paginate(6)
        $data = DB::table('articles')
        ->join('categorie','articles.Categorie_idCategorie','=','categorie.idCategorie')
        ->paginate(6);
        return view('home',['article'=>$data]);
    }
    function detail($id)
    {
        $data= article::find($id);
        return view('detail',['article'=>$data]);
    }
    public function advance(Request $request)
    {
        $data = new article;
        if( $request->nom_article){
            $data = $data->where('nom_article', 'LIKE', "%" . $request->nom_article . "%");
        }
        if( $request->Categorie_idCategorie){
            $data = $data->where('Categorie_idCategorie', 'LIKE', "%" . $request->Categorie_idCategorie . "%");
        }
        if( $request->prix){
            $data = $data->where('prix', 'LIKE', "%" . $request->prix . "%");
        }
        $data = $data->paginate(5);
        return view('list',['article'=>$data]);
    }

}
