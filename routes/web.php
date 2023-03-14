<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\clientController;
use Http\Controllers\AdminController;
/*
Route::get('/help', function () {
    return view('layout.app');
});
Route::get('/apropos', [App\Http\Controllers\PagesController::class, 'apropos']);

Route::get('/services', [App\Http\Controllers\PagesController::class, 'services']);

Route::get('/show/{id}', [App\Http\Controllers\PagesController::class, 'show']);

Route::get('/create', [App\Http\Controllers\PagesController::class, 'create']);

Route::post('/saveproduct', [App\Http\Controllers\PagesController::class, 'saveproduct']);

Route::get('/edit/{id}', [App\Http\Controllers\PagesController::class, 'edit']);

Route::put('/edit/{product}', [App\Http\Controllers\PagesController::class, 'update']);
*/

Route::get('/', [App\Http\Controllers\clientController::class, 'home']);
Route::get('/shop', [App\Http\Controllers\clientController::class, 'shop']);
Route::get('/cart', [App\Http\Controllers\clientController::class, 'panier']);
Route::get('/client_login', [App\Http\Controllers\clientController::class, 'client_login']);
Route::get('/signup', [App\Http\Controllers\clientController::class, 'signup']);
Route::get('/checkout', [App\Http\Controllers\clientController::class, 'checkout']);
Route::get('/select_par_cat/{name}', [App\Http\Controllers\clientController::class, 'select_par_cat']);
Route::get('/ajouter_au_panier/{id}', [App\Http\Controllers\clientController::class, 'ajouter_au_panier']);
Route::post('/modifier_qty/{id}', [App\Http\Controllers\clientController::class, 'modifier_panier']);
Route::get('/retirer_produit/{id}', [App\Http\Controllers\clientController::class, 'retirer_produit']);
Route::post('/payer', [App\Http\Controllers\clientController::class, 'payer']);
Route::post('/creer_compte', [App\Http\Controllers\clientController::class, 'creer_compte']);
Route::post('/acceder_compte', [App\Http\Controllers\clientController::class, 'acceder_compte']);
Route::get('/logout', [App\Http\Controllers\clientController::class, 'logout']);




Route::get('/admins', [App\Http\Controllers\AdminController::class, 'admin']);
Route::get('/commandes', [App\Http\Controllers\AdminController::class, 'commandes']);



Route::get('/addcategory', [App\Http\Controllers\CategoryController::class, 'addCategory']);
Route::get('/savecategory', [App\Http\Controllers\CategoryController::class, 'saveCategory']);
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'category']);
Route::get('editcategory/{category}', [App\Http\Controllers\categoryController::class, 'edit_category']);
Route::put('editcategory/{category}', [App\Http\Controllers\categoryController::class, 'update']);
Route::get('/deletecategory/{id}', [App\Http\Controllers\categoryController::class, 'destroy']);



Route::get('/addproduct', [App\Http\Controllers\ProductController::class, 'addProduct']);
Route::post('/saveproduct', [App\Http\Controllers\ProductController::class, 'saveProduct']);
Route::get('/product', [App\Http\Controllers\ProductController::class, 'product']);
Route::get('/edit_product/{id}', [App\Http\Controllers\ProductController::class, 'edit_product']);
Route::post('/modifier_product', [App\Http\Controllers\ProductController::class, 'modifier_product']);
Route::get('/delete_product/{id}', [App\Http\Controllers\ProductController::class, 'delete_product']);
Route::get('/activer_product/{id}', [App\Http\Controllers\ProductController::class, 'activer_product']);
Route::get('/desactiver_product/{id}', [App\Http\Controllers\ProductController::class, 'desactiver_product']);





Route::get('/addslider', [App\Http\Controllers\SliderController::class, 'addslider']);
Route::post('/saveslider', [App\Http\Controllers\SliderController::class, 'saveslider']);
Route::get('/sliders', [App\Http\Controllers\SliderController::class, 'sliders']);
Route::get('/edit_slider/{id}', [App\Http\Controllers\SliderController::class, 'edit_slider']);
Route::post('/modifier_slider', [App\Http\Controllers\SliderController::class, 'modifier_slider']);
Route::get('/delete_slider/{id}', [App\Http\Controllers\SliderController::class, 'delete_slider']);
Route::get('/desactiver_slider/{id}', [App\Http\Controllers\SliderController::class, 'desactiver_slider']);
Route::get('/activer_slider/{id}', [App\Http\Controllers\SliderController::class, 'activer_slider']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
