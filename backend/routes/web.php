<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaterkitController;

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\UserInterfaceController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\PageLayoutController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ChartsController;
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

Route::get('/', [StaterkitController::class, 'home'])->name('home');
Route::get('home', [StaterkitController::class, 'home'])->name('home');
// Route Components
Route::get('layouts/collapsed-menu', [StaterkitController::class, 'collapsed_menu'])->name('collapsed-menu');
Route::get('layouts/full', [StaterkitController::class, 'layout_full'])->name('layout-full');
Route::get('layouts/without-menu', [StaterkitController::class, 'without_menu'])->name('without-menu');
Route::get('layouts/empty', [StaterkitController::class, 'layout_empty'])->name('layout-empty');
Route::get('layouts/blank', [StaterkitController::class, 'layout_blank'])->name('layout-blank');

// user
Route::get('user/list', [AppsController::class, 'user_list'])->name('app-user-list');
Route::get('/bid',[TableController::class, 'bid_list'])->name('app-bid-list');
// Route::get('user/view/account', [AppsController::class, 'user_view_account'])->name('app-user-view-account');
// Route::get('user/view/security', [AppsController::class, 'user_view_security'])->name('app-user-view-security');
// Route::get('user/view/billing', [AppsController::class, 'user_view_billing'])->name('app-user-view-billing');
// Route::get('user/view/notifications', [AppsController::class, 'user_view_notifications'])->name('app-user-view-notifications');
// Route::get('user/view/connections', [AppsController::class, 'user_view_connections'])->name('app-user-view-connections');
// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);
