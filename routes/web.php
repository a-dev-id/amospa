<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('front.home');
Route::get('/cafe/canggu-restaurants', [App\Http\Controllers\Front\HomeController::class, 'amo_cafe'])->name('front.amo_cafe');
Route::get('/cafe/drinks-menu', [App\Http\Controllers\Front\HomeController::class, 'drinks_menu'])->name('front.drinks_menu');
Route::get('/cafe/food-menu', [App\Http\Controllers\Front\HomeController::class, 'food_menu'])->name('front.food_menu');
Route::get('/spa-menu/nails', [App\Http\Controllers\Front\HomeController::class, 'nails'])->name('front.nails');
Route::get('/groups-and-mobile', [App\Http\Controllers\Front\HomeController::class, 'groups_mobile'])->name('front.groups_mobile');
Route::get('/monthly-promotions', [App\Http\Controllers\Front\HomeController::class, 'promotion'])->name('front.promotion');
Route::get('/customer-reviews', [App\Http\Controllers\Front\HomeController::class, 'review'])->name('front.review');
Route::get('/media-gallery', [App\Http\Controllers\Front\HomeController::class, 'gallery'])->name('front.gallery');
Route::get('/news-and-informations', [App\Http\Controllers\Front\HomeController::class, 'news_informations'])->name('front.news-informations');
Route::get('/about-us', [App\Http\Controllers\Front\HomeController::class, 'about'])->name('front.about');
Route::get('/contact-us', [App\Http\Controllers\Front\HomeController::class, 'contact'])->name('front.contact');

require __DIR__ . '/auth.php';

// admin
Route::middleware(['auth'])->prefix('panel/admin')->group(function () {
    Route::resource('dashboard', App\Http\Controllers\Admin\DashboardController::class);
    Route::resource('page', App\Http\Controllers\Admin\PageController::class);
    Route::resource('post', App\Http\Controllers\Admin\PostController::class);
    Route::resource('post-image', App\Http\Controllers\Admin\PostImageController::class);
    Route::resource('food-category', App\Http\Controllers\Admin\FoodCategoryController::class);
    Route::resource('food', App\Http\Controllers\Admin\FoodController::class);
    Route::resource('food-image', App\Http\Controllers\Admin\FoodImageController::class);
    Route::resource('drink-category', App\Http\Controllers\Admin\DrinkCategoryController::class);
    Route::resource('drink', App\Http\Controllers\Admin\DrinkController::class);
    Route::resource('drink', App\Http\Controllers\Admin\DrinkController::class);
    Route::resource('spa-category', App\Http\Controllers\Admin\SpaCategoryController::class);
    Route::resource('spa-category-image', App\Http\Controllers\Admin\SpaCategoryImageController::class);
    Route::resource('spa', App\Http\Controllers\Admin\SpaController::class);
    Route::resource('spa-image', App\Http\Controllers\Admin\SpaImageController::class);
    Route::resource('promo', App\Http\Controllers\Admin\PromoController::class);
    Route::resource('promo-image', App\Http\Controllers\Admin\PromoImageController::class);
    Route::resource('news-information', App\Http\Controllers\Admin\NewsInformationController::class);
    Route::resource('review', App\Http\Controllers\Admin\ReviewController::class);
    Route::resource('setting', App\Http\Controllers\Admin\SettingController::class);
});
