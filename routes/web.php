<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Models\OrderMenu;
use App\Models\OrderCust;
use App\Models\User;
use App\Jobs\ClearOrderMenuJob;

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/loginmethod', [LoginController::class, 'method'])->name('loginmethod');

require __DIR__.'/auth.php';

Route::get('/welcust', function () {
    return view('welcust');
})->name('welcust');

Route::get('/contactcust', function () {
    return view('contactcust');
})->name('contactcust');

Route::get('/eventcust', function () {
    return view('eventcust');
})->name('eventcust');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/status', function () {
    return view('status');
})->name('status');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/menu', [MenuController::class, 'showmenu'])->name('menu');

Route::get('/event', [EventController::class, 'showevent'])->name('event');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/menus', [MenuController::class, 'index'])->name('menus.index');
Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');
Route::get('/menus/{menu}', [MenuController::class, 'show'])->name('menus.show');
Route::get('/menus/{menu}/edit', [MenuController::class, 'edit'])->name('menus.edit');
Route::put('/menus/{menu}', [MenuController::class, 'update'])->name('menus.update');
Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');

Route::get('/eventcust', [EventController::class, 'showeventcust'])->name('eventcust');
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/submit-order', [CartController::class, 'submitOrder'])->name('submit.order');
Route::post('/cart', [CartController::class, 'addToCart'])->name('cart');
Route::delete('/cart/remove/{itemId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('/orderlists', [OrderListController::class, 'index'])->name('orderlists.index');
Route::get('/orderlists/create', [OrderListController::class, 'create'])->name('orderlists.create');
Route::post('/orderlists', [OrderListController::class, 'store'])->name('orderlists.store');
Route::get('/orderlists/{orderlist}', [OrderListController::class, 'show'])->name('orderlists.show');
Route::get('/orderlists/{orderlist}/edit', [OrderListController::class, 'edit'])->name('orderlists.edit');
Route::put('/orderlists/{orderlist}', [OrderListController::class, 'update'])->name('orderlists.update');
Route::delete('/orderlists/{orderCust}', [OrderListController::class, 'destroy'])->name('orderlists.destroy');

//Users
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::post('/submit-order', [OrderMenuController::class, 'submitOrder'])->name('submit.order');

Route::post('/submit-order', [OrderCustController::class, 'submitOrder'])->name('submit.order');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/status', function () {
    // Retrieve authenticated user's name
    $name = Auth::user()->name;

    // Retrieve order details from the OrderMenu model
    $orders = OrderMenu::latest()->get();

    // Pass data to the view, including the user's name
    return view('status', [
        'name' => $name,
        'orders' => $orders,
    ]);
})->name('status');