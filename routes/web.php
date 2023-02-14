<?php

use App\Models\Products;
use App\Http\Livewire\ShowProduct;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebhooksController;

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

Route::get('/', function () {
    $productos = Products::inRandomOrder()->limit(3)->get();
    return view('welcome',['products'=>$productos]);
});

//User
Route::get('/register',[UserController::class, 'register'])->middleware('guest');
Route::get('/login',[UserController::class, 'login'])->middleware('guest');
Route::post('/register-new-user', [UserController::class, 'registerUser']);
Route::post('/login-user',[UserController::class, 'loginUser']);
Route::get('logout',[UserController::class, 'logout'])->middleware('auth');

//Pages
Route::get('/admin',[UserController::class, 'adminPage'])->middleware('auth');
Route::get('/shop', [ProductController::class, 'shopPage'])->name('shop');
Route::get('/collections',[UserController::class, 'collectionsPage']);

//Products
Route::post('/publish',[ProductController::class, 'publish'])->middleware('auth');

//Cart 
Route::get('/product/{id}', [ProductController::class, 'showProduct']);
Route::get('/cart',[CartController::class, 'cart'])->middleware('auth');
Route::get('/addToCart/{id}',[CartController::class, 'AddToCart'])->name('add.to.cart')->middleware('auth');
Route::get('/DeleteFromCart/{id}',[CartController::class, 'DeleteFromCart'])->name('delete.from.cart');
Route::post('/UpdateFromCart/{id}',[CartController::class,'UpdateCart'])->name('update.from.cart');

//Favourite
Route::get('/favourites',[FavController::class, 'Favs'])->middleware('auth');
Route::get('/addToFav/{id}',[FavController::class, 'AddToFav'])->name('add.to.fav')->middleware('auth');
Route::get('/DeleteFromFav/{id}',[FavController::class,'DeleteFromFav'])->name('delete.from.fav');

//MercadoPago

