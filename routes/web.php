<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PositiveNum;
use App\Http\Controllers\TestController;

use App\Http\Controllers\ProductController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route middleware

Route::get('/number/{number}', function () {
    return view('number');
})->middleware(['number']);

//.. Other routes

Route::view("noaccess", "noaccess");

Route::get("route-1", function(){ echo "<h3>Welcome To Route 1</h3>"; });

// Protected group by middleware
Route::group(["middleware" => ["s"]], function(){

   Route::get("route-2", function(){ echo "<h3>Welcome To Route 2</h3>"; });
  
   Route::get("route-3", function(){ echo "<h3>Welcome To Route 3</h3>"; });
});


//1) display page
Route::get('/no', function () {
    return ('Hello World!');
});

Route::view('users','noaccess');

//2)using controller
Route::get('/user', [TestController::class, 'index']);

//3)named route
Route::Get('/',function()  
{  
  return view('student');  
}); 

Route::get('student/details',function()  
{  
  $add=2*2;  
 return $add;  
})->name('student.details');  

//form using controller
Route::Get('details',function()  
{  
  return view('form');  
}); 

Route::post('check', [TestController::class, 'create']);

//crud
Route::resource('products', ProductController::class);