<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\SuperadminLoginPage;
use App\Livewire\SuperadminPageHome;
use App\Livewire\SuperadminProfile;
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

Route::get('/', SuperadminPageHome::class)->name('home');
Route::get('/profile', SuperadminProfile::class)->name('profile');

Route::get('pages/login' , SuperadminLoginPage::class)->name('login');
