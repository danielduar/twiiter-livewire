<?php

use App\Http\Livewire\ShowTweets;
use Illuminate\Support\Facades\Route;

Route::get('tweets',ShowTweets::class)->name('show.tweets');
Route::get('/', function () {
    return view('welcome');
});
