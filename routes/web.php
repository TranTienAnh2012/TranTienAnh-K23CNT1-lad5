<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TTalogincontroller;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[TTalogincontroller::class,'ttaindex'])->name('ttalogin.ttaindex');
Route::post('/login',[TTalogincontroller::class,'ttaSubmit'])->name('ttalogin.ttaSubmit');

//lad5d
//lấy đường dẫn
Route::get('/user',function(Request $request){
    return $request->path();
});
//lấy full đường dẫn $res=$request->fullUrlWithoutQuery(['email']);
Route::get('/users',function(Request $request){
    return $request->fullUrl();
    $res=$request->fullUrlWithoutQuery(['email']);
});
// Request Host
Route::get('/host-test',function(Request $request){
    $host=$request->host();
    $httpHost=$request->httpHost();
    $schemeAndHttpHost=$request->schemeAndHttpHost();
    return "<h2> Host: ".$host
    . "<h2> httpHost: ".$httpHost
    . "<h2> schemeAndHttpHost: ".$schemeAndHttpHost;
});
//nhận các phương thức qua đối tương request
Route::get('/method-test', function(Request $request){
    $res=$request->method();
    return $res;
});
