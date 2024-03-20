<?php
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'welcome'] )->name('homePage');

Route::get('/Altrapag', [FrontController::class, 'ChiSiamo'])->name('ChiSiamo');

Route::get('/data-page', [FrontController::class, 'Servizi'])->name('Servizi');

Route::get('/DetailPG/{id}', [FrontController::class, 'Dettaglio'])->name('Dettaglio');

Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('contactUs');
Route::post('/send-mail', [FrontController::class, 'sendMail'])->name('sendMail');
