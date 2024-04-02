<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    //Views are pages that users can visit
    return view('LandingPage'); // this is the name of the view file in folder views

});

Route::get('/Home',function(){
    return view("Home");
});

Route::post('/register',[UserController::class,'register']);
Route::post('/logout',[UserController::class,'logout']);
Route::post('/login',[UserController::class,'login']);

?>