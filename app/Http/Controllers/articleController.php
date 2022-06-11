<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
use App\panier;
use App\User;
use App\commande;
use DateTime;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class articleController extends Controller
{
    //
    function index()
    {
        $data = DB::table('articles')
        ->join('categorie','articles.Categorie_idCategorie','=','categorie.idCategorie')
        ->get();
        return view('articletable',['article'=>$data]);
    }
    function show_users()
    {
        $data=User::all();
        return view('tables',['users'=>$data]);
    }
    function detail($id)
    {
        $data= article::find($id);
        return view('detail',['article'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $panier = new panier;
            $panier -> id_user=$req->session()->get('user')['id'];
            $panier->article_id_article=$req->article_id_article;
            $panier->save();
            return redirect()->back();
        }else {
            return redirect('/login');
        }
       
    }
    public function advance(Request $request)
    {
        
      $data = DB::table('articles')
      ->join('categorie','articles.Categorie_idCategorie','=','categorie.idCategorie');
        if( $request->nom_article){
            $data = $data->where('nom_article', 'LIKE', "%" . $request->nom_article . "%");
        }
        if( $request->Categorie_idCategorie){
            $data = $data->where('nom_categorie', 'LIKE', "%" . $request->Categorie_idCategorie . "%");
        }
        if( $request->prix){
            $data = $data->where('prix', 'LIKE', "%" . $request->prix . "%");
        }
       

        $data = $data->paginate(5);
        return view('list',['article'=>$data]);
    }

    function cartList(){

        $userId=Session::get('user')['id'];
        $articles=DB::table('panier')
        ->join('articles','panier.article_id_article','=','articles.id_article')
        ->where('panier.id_user',$userId)
        ->select('articles.*','panier.id_panier as panier_id')
        ->get();
        $sum =DB::table('panier')
        ->join('articles','panier.article_id_article','=','articles.id_article')
        ->where('panier.id_user',$userId)
        ->select('articles.*','panier.id_panier as panier_id')
        ->sum('articles.prix');
     
        return view('cartlist' , ['articles'=>$articles ], ['sum'=>$sum ]);
    }

    function removeCart($id){
        panier::destroy($id);
        return redirect('cartlist');
    }
    function orderNow(){
        $userId=Session::get('user')['id'];
        $total =DB::table('panier')
        ->join('articles','panier.article_id_article','=','articles.id_article')
        ->where('panier.id_user',$userId)
        ->select('articles.*','panier.id_panier as panier_id')
        ->sum('articles.prix');
        return view('ordernow' , ['total'=>$total]);
    }
    function orderPlace(Request $req , $now = 'NOW'){
        $userId=Session::get('user')['id'];
        $allCart = panier::where('id_user',$userId)->get();
        foreach($allCart as $cart)
        {
            $order = new commande ;
            $order->article_id_article=$cart['article_id_article'];
            $order->id_user=$cart['id_user'];
            $order->etat_commande="en cours";
            $order->date_commande= new DateTime($now);
            $order->adress=$req->adress;
            $order->save();
            panier::where('id_user',$userId)->delete();
        }
         $req->input();
         return redirect('/');
    }
    function myOrders(Request $request){
        if($request->session()->has('user')){
            $userId=Session::get('user')['id'];
            $orders = DB::table('commande')
            ->join('articles','commande.article_id_article','=','articles.id_article')
            ->join('categorie','articles.Categorie_idCategorie','=','categorie.idCategorie')
            ->where('commande.id_user',$userId)
            ->orderBy('date_commande','DESC')
            ->get();
            return view('achats' , ['commande'=>$orders]);
        }
        return redirect()->back();


    }
   
    function removeArticle($id){
        article::destroy($id);
        return redirect()->back();
    }
    function show($id)
    {
        $data= article::find($id);
        return view('updatearticle',['data'=>$data]);
    }
    function update(Request $req){
        $data= article::find($req->id);
        $data ->nom_article = $req->nom_article;
        $data -> prix = $req-> prix;
        $data -> quantité = $req-> quantité;
        $data -> Categorie_idCategorie = $req-> Categorie_idCategorie;
        $data -> description = $req-> description;
        $data -> image = $req-> image;
        $data -> save();
        return redirect('/dashboard');

    }

}
