<?php

use Illuminate\Support\Facades\Route;


Route::get('/index', function () {
    return view('index');
})->name('accueil');

Route::get('/abonnement', function () {
    return view('abonnement');
})->name('abonnement');

Route::get('/', function () {
    return view('conditions-generales');
})->name('conditions');
Route::get('/mentions-legales', function () {
    return view('mentions-legales');
})->name('mentions');
Route::get('/tariff', function () {
    return view('tariff');
})->name('tariff');
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