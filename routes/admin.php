<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BranchController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductFlavourController;
use App\Http\Controllers\Admin\ProductIngredientController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CompetitionController;

Auth::routes(['register' => false]);

Route::name('admin.')->middleware('auth')->group(function () {

    /**
     * dashboard route
     */
    Route::get('/' , [DashboardController::class , 'getIndex'])->name('dashboard');

    /**
     * home routes
     */
    Route::prefix('home')->group(function () {
        Route::get('/', [HomeController::class, 'getIndex'])->name('home');
        Route::post('/edit', [HomeController::class, 'postEdit'])->name('home.edit');
    });

    /**
     * About routes
     */
    Route::prefix('about-us')->group(function () {
        Route::get('/', [AboutController::class, 'getIndex'])->name('about');
        Route::post('/edit', [AboutController::class, 'postEdit'])->name('about.edit');
    });

    /**
     * settings routes
     */
    Route::prefix('site-settings')->group(function () {
        Route::get('/', [SettingsController::class, 'getIndex'])->name('settings');
        Route::post('/edit', [SettingsController::class, 'postEdit'])->name('settings.edit');
    });

    /**
     * branches routes
     */
    Route::group(['prefix' => 'agents'], function () {
        Route::get('/', [BranchController::class, 'getIndex'])->name('branches');
        Route::post('/', [BranchController::class, 'postIndex'])->name('branches');
        Route::get('/edit/{id}', [BranchController::class, 'getEdit'])->name('branches.edit');
        Route::post('/edit/{id}', [BranchController::class, 'postEdit'])->name('branches.edit');
        Route::get('/delete/{id}', [BranchController::class, 'getDelete'])->name('branches.delete');
    });

    /**
     * Media routes
     */
    Route::group(['prefix' => 'media'], function () {
        Route::get('/', [MediaController::class, 'getIndex'])->name('media');
        Route::post('/', [MediaController::class, 'postIndex'])->name('media');
        Route::get('/edit/{id}', [MediaController::class, 'getEdit'])->name('media.edit');
        Route::post('/edit/{id}', [MediaController::class, 'postEdit'])->name('media.edit');
        Route::get('/delete/{id}', [MediaController::class, 'getDelete'])->name('media.delete');
    });

    /**
     * Members routes
     */
    Route::group(['prefix' => 'members'], function () {
        Route::get('/', [MemberController::class, 'getIndex'])->name('members');
        Route::post('/', [MemberController::class, 'postIndex'])->name('members');
        Route::get('/edit/{id}', [MemberController::class, 'getEdit'])->name('members.edit');
        Route::post('/edit/{id}', [MemberController::class, 'postEdit'])->name('members.edit');
        Route::get('/delete/{id}', [MemberController::class, 'getDelete'])->name('members.delete');
    });

    /**
     * products routes
     */
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'getIndex'])->name('products');
        Route::post('/', [ProductController::class, 'postIndex'])->name('products');
        Route::get('/edit/{id}', [ProductController::class, 'getEdit'])->name('products.edit');
        Route::post('/edit/{id}', [ProductController::class, 'postEdit'])->name('products.edit');
        Route::get('/delete/{id}', [ProductController::class, 'getDelete'])->name('products.delete');

        /**
         * flavours routes
         */
        Route::group(['prefix' => 'flavours'], function () {
            Route::get('/{id}', [ProductFlavourController::class, 'getIndex'])->name('products.flavours');
            Route::post('/{id}', [ProductFlavourController::class, 'postIndex'])->name('products.flavours');
            Route::get('/edit/{id}', [ProductFlavourController::class, 'getEdit'])->name('products.flavours.edit');
            Route::post('/edit/{id}', [ProductFlavourController::class, 'postEdit'])->name('products.flavours.edit');
            Route::get('/delete/{id}', [ProductFlavourController::class, 'getDelete'])->name('products.flavours.delete');
        });

        /**
         * ingredients routes
         */
        Route::group(['prefix' => 'ingredients'], function () {
            Route::get('/{id}', [ProductIngredientController::class, 'getIndex'])->name('products.ingredients');
            Route::post('/{id}', [ProductIngredientController::class, 'postIndex'])->name('products.ingredients');
            Route::get('/edit/{id}', [ProductIngredientController::class, 'getEdit'])->name('products.ingredients.edit');
            Route::post('/edit/{id}', [ProductIngredientController::class, 'postEdit'])->name('products.ingredients.edit');
            Route::get('/delete/{id}', [ProductIngredientController::class, 'getDelete'])->name('products.ingredients.delete');
        });
    });

    /**
     * messages routes
     */
    Route::group(['prefix' => 'messages'] , function (){
       Route::get('/' , [MessageController::class , 'getIndex'])->name('messages');
       Route::get('/delete/{id}' , [MessageController::class , 'getDelete'])->name('messages.delete');
    });

    /**
     * competitions routes
     */
    Route::group(['prefix' => 'competitions'] , function (){
        Route::get('/' , [CompetitionController::class , 'getIndex'])->name('competitions');
        Route::post('/filter' , [CompetitionController::class , 'postFilter'])->name('competitions.filter');
        Route::get('/map/{id}' , [CompetitionController::class , 'getMap'])->name('competitions.map');
        Route::get('/delete/{id}' , [CompetitionController::class , 'getDelete'])->name('competitions.delete');
    });

});
