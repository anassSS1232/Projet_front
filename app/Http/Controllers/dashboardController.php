<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Category;

class dashboardController extends Controller
{
    //
    function index(Request $request){

        if($request->session()->has('user')){
            $data = DB::table('articles')
            ->join('categorie','articles.Categorie_idCategorie','=','categorie.idCategorie')
            ->get();
            return view('dashboard',['article'=>$data]);
        }
        return redirect()->back();

    }
    public function insertform(){
        return view('addproduct');
        }

    public function insert(Request $request){
        $nom_article = $request->input('nom_article');
        $prix = $request->input('prix');
        $quantité = $request->input('quantité');
        $Categorie_idCategorie = $request->input('Categorie_idCategorie');
        $description = $request->input('description');
        $image = $request->input('image');
        $data=array('nom_article'=>$nom_article,"prix"=>$prix,"quantité"=>$quantité,"Categorie_idCategorie"=>$Categorie_idCategorie,"description"=>$description,"image"=>$image);
        DB::table('articles')->insert($data);
        return redirect("/dashboard");
        }
        public function insertcat(){
            return view('addcategorie');
            }
        public function addcat(Request $request){
            $nom_categorie = $request->input('nom_categorie');
            $data = array('nom_categorie'=>$nom_categorie);
            DB::table('categorie')->insert($data);
            return redirect("/dashboard");
        }
        public function show()
    {
        $stuff_types = DB::table('categorie')->get();

        return view('addproduct', ['items' => $stuff_types]);
    }
}
