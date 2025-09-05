<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('abonnement');
});
Route::get('/', function () {
    return view('conditions-generales');
});
Route::get('/', function () {
    return view('mentions-legales');
});
Route::get('/tariff', function () {
    return view('tariff');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/', function () {
    return view('index');
});
Route::post('request_quote/send', [App\Http\Controllers\RequestQuoteController::class, 'send'])->name('request_quote.send');