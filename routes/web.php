<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\PropertyController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;  // include DB Class

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

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/index', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/agent-single', [PageController::class, 'agentSingle']);

Route::get('/agents-grid', [PageController::class, 'agentsGrid']);

Route::get('/blog-grid', [PageController::class, 'blogGrid']);

Route::get('/blog-single', [PageController::class, 'blogSingle']);

// Route::get('/contact', [PageController::class, 'contact'])->middleware(['auth']);

Route::get('/property-grid', [PageController::class, 'propertyGrid']);

Route::get('/property-single/{id}', [PageController::class, 'propertySingle']);

Route::group(["middleware" => ["auth"]], function() {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard.main');

    Route::get('/dashboard/property', [PropertyController::class, 'show'])->name('dashboard.property');
    
    Route::get('/dashboard/listing', [PropertyController::class, 'showListing'])->name('dashboard.listing');
    
    Route::get('/dashboard/contact', [PropertyController::class, 'contact'])->name('dashboard.contact');
    
    Route::get('/dashboard/profile', [ProfileController::class, 'show'])->name('dashboard.profile');
    
    Route::put('/dashboard/profile', [ProfileController::class, 'update'])->name('dashboard.profile.update'); 
});

//show property page
Route::get('/property-grid',

    [PropertyController::class, 'showProperty']

);
Route::get('/index',

    [PropertyController::class, 'showPropertyLast']

);


Route::controller(LoginController::class)->group(function () {
    Route::post('/login', 'authenticate')->name('auth.login');
    Route::post('/register', 'store')->name('auth.register');
    Route::post('/logout', 'destroy')->name('auth.logout');
});


Route::controller(PropertyController::class)->group(function () {
    Route::post('/add', 'storeProperty')->name('dashboard.add');
    Route::post('/contact', 'contactProperty')->name('contact');
});


