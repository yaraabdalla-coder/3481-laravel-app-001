<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
 return 'welcome to about us page';
});

Route::get('contact -us', function () {
    return  view ('static.about.index');
});
//Route::get('services', function () {
   // return view ('static.services.all-services');
 //});
 
route::view( 'services','static.services.all-services');


 Route::prefix('products')->group(function(){
 Route::view('products','products\all-products');
 Route::view('electronics','products\electronics');
 Route::view('homecare','products\homecare');
 
})};
Route::view('types','types\alltypes');
Route::view('laptobtypes','types/laptobtypes');
Route::view('phonetypes','types\phonetypes');

Route::prefix('Transportation')->group(function(){
Route::View('ships','transportation\ships');
Route::view('cars','transportation\cars');
Route::view('trains','transportation\trains');

});





