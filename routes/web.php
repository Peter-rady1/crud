<?php

use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\ContantController;

 Route::get('/', function () {
     return view('contant.home')  ;
 });



Route::resource('tasks',TasksController::class);


Route::controller(ContantController::class)->group(function(){
    Route::get('/home', 'home')->name('contant.home');

});


Route::controller( commentsController::class )->group(function (){
    Route::post('single','create')->name('add.comment');
    Route::get('single/{id}','show')->name('show.comment');
    Route::get('comm','page')->name('page.comments');
});






Route::middleware  ([ 'auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
Route::get('/dashboard', function () {
    if(auth()->user()->role == 'admin' ){
        return redirect()->route('tasks.create') ;
       }else{
        return view('contant.home');
       }
    })->name('dashboard');

});



//  Route::midd  (['logmidd'])->group(function(){
//
// });

Route::resource('tasks',TasksController::class);
Route::get('single/{id}',[TasksController::class,'single'])->name('tasks.single');

Route::get('mark/{id}',[TasksController::class,'mark'])->name('mark');
Route::get('markall',[TasksController::class,'markall'])->name('markall');
