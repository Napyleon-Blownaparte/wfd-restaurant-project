<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\MenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('landing-page');
});

Route::get('/add-new-menu', function () {
    return view('admin/add-menu');
});

Route::get('/add-new-voucher', function () {
    return view('admin/add-voucher');
});

Route::get('/orders', function () {
    return view('admin/orders');
});

// Route::get('/menu', function () {
//     return view('menus.index');
// });

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => 'auth'], function () {
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'admin_middleware',
        'as' => 'admin.',
    ], function () {

        Route::resource('orders', App\Http\Controllers\Admin\OrderController::class)->shallow()->only(['index', 'show', 'edit', 'update']);
        Route::resource('menus', App\Http\Controllers\Admin\MenuController::class)->shallow();


    });


    Route::group([
        'prefix' => 'user',
        'middleware' => 'user_middleware',
        'as' => 'user.',
    ], function () {

        Route::resource('orders', App\Http\Controllers\User\OrderController::class)->shallow()->only(['index', 'create', 'store', 'show']);
        Route::resource('menus', App\Http\Controllers\User\MenuController::class)->shallow()->only(['index', 'show']);

    });
});


require __DIR__.'/auth.php';
