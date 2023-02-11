<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;;


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

// Route::get('/', function (){
//     return view('home');
// });

// Route::get('/products', [ProductsController::class,'index'])->name('products');

// //How to validate the id data
// Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9+]');

// Route::get('/products/{productName}/{id}', [ProductsController::class, 'detail'])
//     ->where([
//         'productName' => '[a-zA-Z0-9]+',
//         'id' => '[0-9]+',
//     ]);

Route::get('/', [PagesController::class,'index'])->name('home');
Route::get('/about', [PagesController::class,'about'])->name('about');
Route::get('/posts', [PostsController::class,'index'])->name('posts');
Route::resource('/foods', FoodsController::class);


/*
Route::get('/', function () {
    //return env('MY_NAME');
    return view('welcome');
});
//Return a String
Route::get('/users', function () {
    return 'Hello World';
});
//Return an Array
Route::get('/names', function () {
    return ['Viet', 'Hoang', 'Tuan'];
});
//Return an Object
Route::get('/aboutMe', function () {
    return response()->json([
        'name'=>'Viet',
        'age'=>20,
        'email'=>'leviet1612@gmail.com',
    ]);//reponse
});
//Return another request -> redirect to one page
Route::get('/something', function () {
    return redirect('/');//redirect to root page
});
*/