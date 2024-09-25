<?php

use App\Livewire\TestPage;
use App\Livewire\CarList;
use App\Livewire\AddCar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test/page', TestPage::class);
Route::get('/cars', CarList::class);

Route::get('/add/new', AddCar::class);