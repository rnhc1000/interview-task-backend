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

// Route::get('/', static function () {
//     return 'test';
// });

Route::get('/',         [\App\Http\Controllers\InvoiceController::class,  'principal'])->name('site.principal');

Route::get('/invoicesAccepted', [\App\Http\Controllers\AcceptedController::class,  'invoicesAccepted'])->name('site.accepted');

Route::get('/invoicesRejected', [\App\Http\Controllers\RejectedController::class,  'invoicesRejected'])->name('site.rejected');

