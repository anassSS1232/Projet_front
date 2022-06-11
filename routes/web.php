<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\articleController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\profilController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Login */
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 

/* Registration */
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('insert', [dashboardController::class, 'insertform']);
Route::post('create', [dashboardController::class, 'insert'])->name('create.book');

Route::get('addcat', [dashboardController::class, 'insertcat']);
Route::post('creat', [dashboardController::class, 'addcat'])->name('creat.cat');




/* All Books */
Route::get('list', [articleController::class, 'advance'])->name('advance_search');

/* Home */
Route::get('/', [homeController::class, 'show']);
Route::get("detail/{id_article}", [homeController::class, 'detail']);


/* detail article */
Route::get("detail/{id_article}", [articleController::class, 'detail']);

/* Panier */
Route::post('add_to_cart', [articleController::class, 'addToCart']);
Route::get('cartlist', [articleController::class, 'cartList']);
Route::get('removecart/{id_panier}', [articleController::class, 'removeCart']);
Route::get('ordernow', [articleController::class, 'orderNow']);
Route::post('orderplace', [articleController::class, 'orderPlace']);

/* Mes Achats */
Route::get('achats', [articleController::class, 'myOrders']);




//Route::get('profil', [profilController::class, 'index']);
Route::get('profil', [profilController::class, 'show']);
//Route::post("profil", [profilController::class, 'update']);

Route::get('dashboard', [dashboardController::class, 'index']);
Route::get('addproduct', [dashboardController::class, 'show']);



Route::get('/addcategorie', function () {
    return view('addcategorie');
});

Route::get('tables', [articleController::class, 'show_users']);
Route::get('articletable', [articleController::class, 'index']);
Route::get('removearticle/{id_article}', [articleController::class, 'removeArticle']);
Route::get('updatearticle/{id_article}', [articleController::class, 'show']);
Route::post("updatearticle", [articleController::class, 'update']);










