<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\SignIn;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\Rtl;


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

Route::get('/', function() {
    return redirect('/sign-in');
});

Route::get('/home', function() {
    return redirect('/dashboard');
})->name('home');

Route::get('/sign-up', SignUp::class)->name('sign-in');
Route::get('/sign-in', SignIn::class)->name('sign-up');

// Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/rtl', Rtl::class)->name('rtl');
// });

