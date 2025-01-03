<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\SubscriberController;
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


Route::view('/', 'components.home');
Route::view('/ceo-workspace', 'components.ceo-workspace');
Route::view('/membership-subscription', 'components.membership');
Route::view('/about-us', 'components.about');
Route::view('/private-events', 'components.private-events');
Route::view('/directory', 'components.directory');


Route::post('/save-membership', [MembershipController::class, 'store']);
Route::post('/subscribe-user', [SubscriberController::class, 'subscribeUser']);
Route::get('/contact', [ContactFormController::class, 'viewContactForm']);
Route::post('/contact', [ContactFormController::class, 'ContactForm'])->name('contact');
