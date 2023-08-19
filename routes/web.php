<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/user/{id}', function ($id) {
   //echo ' route working..'.$id;
     return view('welcome',compact('id'));
});


Route::get('/admin',[UserController::class,'index'])->name('admin.index');

// Route::controller(UserController::class)->group(function(){
//     Route::get('myadmin/','myadmin');
// });


Route::prefix('admin')->group(function(){
    Route::get('/home',[UserController::class,'myadmin']);
    Route::get('/about',[UserController::class,'myadmin']);
    Route::get('/contact',[UserController::class,'myadmin']);
});
