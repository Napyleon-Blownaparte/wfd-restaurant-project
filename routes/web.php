<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\MenuController;
use App\Http\Controllers\User\VoucherController;
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

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/list-order', function () {
    return view('list-order');
});
// Route::get('/add-new-menu', function () {
//     return view('admin/add-menu');
// });
Route::get('/add-new-menu', function () {
    return view('admin-views.menus.index');
});

// Route::get('/add-new-voucher', function () {
//     return view('admin/add-voucher');
// });

Route::get('/orders', function () {
    return view('admin-views.orders.index');
});

// Route::get('/menu', function () {
//     return view('menus.index');
// });

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/voucher', [VoucherController::class, 'index']);

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
        Route::resource('menu-categories', App\Http\Controllers\Admin\MenuCategoryController::class)->shallow()->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
        Route::resource('vouchers', App\Http\Controllers\Admin\VoucherController::class)->shallow()->only(['index', 'create', 'edit', 'store', 'update', 'delete']);
        Route::resource('voucher-purchases', App\Http\Controllers\Admin\VoucherPurchaseController::class)->shallow()->only(['index', 'show', 'edit', 'update']);
    });

    Route::group([
        'prefix' => 'user',
        'middleware' => 'user_middleware',
        'as' => 'user.',
    ], function () {

        // CART ROUTES
        Route::post('/store-cart/{menu}', [App\Http\Controllers\User\CartController::class, 'store'])->name('cart.store');
        Route::post('/update-cart', [App\Http\Controllers\User\CartController::class, 'update'])->name('cart.update');
        Route::get('/destroy-cart/{menu}', [App\Http\Controllers\User\CartController::class, 'destroy'])->name('cart.destroy');

        // VOUCHER CART ROUTES
        Route::post('/store-voucher-cart/{menu}', [App\Http\Controllers\User\CartController::class, 'store'])->name('cart.store');
        Route::post('/update--voucher-cart', [App\Http\Controllers\User\CartController::class, 'update'])->name('cart.update');
        Route::get('/destroy-voucher-cart/{menu}', [App\Http\Controllers\User\CartController::class, 'destroy'])->name('cart.destroy');

        // ORDER ROUTES
        Route::get('/orders/payment/{order}', [App\Http\Controllers\User\OrderController::class, 'payment'])->name('orders.payment');
        Route::get('/orders/pay/{id}', [App\Http\Controllers\User\OrderController::class, 'pay'])->name('orders.pay');

        Route::resource('orders', App\Http\Controllers\User\OrderController::class)->shallow()->only(['index', 'create', 'store', 'show']);
        Route::resource('menus', App\Http\Controllers\User\MenuController::class)->shallow()->only(['index', 'show']);
        Route::resource('vouchers', App\Http\Controllers\User\VoucherController::class)->shallow()->only(['index', 'show']);
        Route::resource('voucher-purchases', App\Http\Controllers\User\VoucherPurchaseController::class)->shallow()->only(['index', 'create', 'store', 'show']);
    });
});



require __DIR__ . '/auth.php';
