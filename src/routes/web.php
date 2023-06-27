<?php
//namespace Riyad\Contact\routes;
use \Illuminate\Support\Facades\Route;

Route::group(["namespace"=>"Riyad\Contact\Http\Controllers"],function (){
    Route::get('contact', "ContactController@index")->name('contact');

    Route::post("contact", "ContactController@send");
});


