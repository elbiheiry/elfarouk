<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\AgentController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\MediaController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\CompetitionController;

Route::name('site.')->group(function (){
    /**
     * home route
     */
    Route::get('/' , [HomeController::class , 'index'])->name('index');
    Route::get('/branch/{id}' , [HomeController::class ,'getBranch'])->name('branch');

    /**
     * about us route
     */
    Route::get('/about-us' , [AboutController::class , 'index'])->name('about');

    /**
     * products route
     */
    Route::get('/products' , [ProductController::class , 'index'])->name('products');
    Route::get('/products/{slug}' , [ProductController::class , 'single'])->name('products.single');

    /**
     * agents route
     */
    Route::get('/agents' , [AgentController::class , 'index'])->name('agents');

    /**
     * media route
     */
    Route::get('/media' , [MediaController::class , 'index'])->name('media');

    /**
     * contact us routes
     */
    Route::get('/contact-us' , [ContactController::class , 'index'])->name('contact');
    Route::post('/contact-us' , [ContactController::class , 'store'])->name('contact');

    /*
     * competition routes
     */
    Route::get('/win' , [CompetitionController::class , 'index'])->name('competition.index');
    Route::post('/store-competition' , [CompetitionController::class , 'store'])->name('competition.store');
    Route::get('/thank-you' , [CompetitionController::class , 'index2'])->name('competition.social');
});
