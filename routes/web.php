<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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
    return view('vue.master');
});

Route::get('/{pathMatch}', function () {
    return view('vue.master');
})->where("pathMatch",".*");

//Route::prefix('vue')->group(function(){
//
//});

//Route::get('/', function () {
//
//    /*
//        var key = CryptoJS.enc.Hex.parse("7c8bb0f4b6591e16c1e4cf781a410065");
//        var iv =  CryptoJS.enc.Hex.parse("20710fcb13bd6b29752d7df85e53c191");
//
//        var secret = "d15ab48f527a7ccd7bb72b0c7aff7d9ebda98f21d714218b4052daee0f81dddc";
//
//        var encrypted = CryptoJS.AES.encrypt(secret, key, {iv:iv});
//        encrypted = encrypted.ciphertext.toString(CryptoJS.enc.Base64);
//
//        console.log('encrypted',encrypted);
//        //fKYaB6/4bNzdyQ4bPmDvXBe5O1ZlqcaHgl2meczgXusdcdFKv+PJYEi8vfuwqbeXh8k3ZHSIdKmVwijQ9OiKm9rijmcnF917i5nDNS4GK2c=
//
//    */
//
//    return view('welcome');
//
////    $key_file = file_get_contents(resource_path('secret-key/secret.txt'));
////    $iv_file  = file_get_contents(resource_path('secret-key/iv.txt'));
////
////    $key = pack("H*",$key_file);
////    $iv =  pack("H*",$iv_file);
////
////    //Now we receive the encrypted from the post, we should decode it from base64,
////    $encrypted = "fKYaB6/4bNzdyQ4bPmDvXBe5O1ZlqcaHgl2meczgXusdcdFKv+PJYEi8vfuwqbeXh8k3ZHSIdKmVwijQ9OiKm9rijmcnF917i5nDNS4GK2c=";
////    $shown     = openssl_decrypt($encrypted, 'aes-128-cbc', $key, 0, $iv);
////
////    echo $shown;
//});
Route::get('content/{slug}',[HomeController::class,'getContent'])->name('content');
Route::get('user/verify/{name}',[UserController::class,'verifyEmail'])->name('verifyEmail');
Route::match(['get','post'],'user/reset-password/{any}',[UserController::class,'resetPassword'])->name('reset-password');
