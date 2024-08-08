<?php

use App\Http\Controllers\Portal\AboutController;
use App\Http\Controllers\Portal\ContactController;
use App\Http\Controllers\Portal\EventController;
use App\Http\Controllers\Portal\HomeController;
use App\Http\Controllers\Portal\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');

Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/event/{slug}/{date}', [EventController::class, 'detailEvent'])->name('event-detail');

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}/{date}', [NewsController::class, 'detailNews'])->name('news-detail');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us');
