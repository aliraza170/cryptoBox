<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Twilio\Rest\Client;

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

Route::view('/', 'home')->name('home');
Route::get('/redirect-to-dashboard', function (){
    $redirect_route = 'dashboard';

    if(auth()->user()->hasRole('admin')){
        $redirect_route = 'admin.dashboard';
    }

    return redirect()->route($redirect_route);
})->middleware(['auth', 'verified', 'twofactor'])->name('redirect-to-dashboard');

Route::middleware(['auth', 'verified', 'twofactor', 'permission:view dashboard'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth', 'verified', 'twofactor', 'permission:view admin dashboard'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [Admin\DashboardController::class, 'index']);
    Route::get('/dashboard', [Admin\DashboardController::class, 'index'])->name('dashboard');
});

// Route::get('sms-test', function () {
//     $twilio = new Client(config('app.twilio.sid'), config('app.twilio.token'));
//     $twilio->messages->create('+923365934241', ['from' => '+923365934241', 'body' => 'Hello! This is a test message.']);
// });

require __DIR__.'/auth.php';
