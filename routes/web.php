<?php
use App\Models\product;
use App\Models\Catagory;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProductController;
use App\Http\controllers\CatagoryController;
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
    return view('welcome');
});
Route::get('/product/list', [ProductController::class, 'get_all'])->name('product/list');
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update',[ProductController::class,'update'])->name('product/update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
Route::get('/product/search/{id}', [ProductController::class, 'search'])->name('product/search');
Route::get('/product/register',[productController::class,'register'])->name('product/register');
Route::post('/product/register',[ProductController::class,'store']);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Catagory/register',[CatagoryController::class,'register'])->name('Catagory/register');
Route::post('/Catagory/register',[CatagoryController::class,'store']);
Route::get('/Catagory/list', [CatagoryController::class, 'get_all'])->name('Catagory/list');
Route::get('/Catagory/edit/{id}', [CatagoryController::class, 'edit']);
Route::post('/Catagory/update',[CatagoryController::class,'update'])->name('Catagory/update')->name('Catagory/update');
Route::get('/Catagory/delete/{id}', [CatagoryController::class, 'delete']);
Route::get('/Catagory/search/{id}', [CatagoryController::class, 'search'])->name('Catagory/search');
Auth::routes();