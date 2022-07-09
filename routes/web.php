<?php

use App\Http\Livewire\Schedule\Create;
use App\Http\Livewire\Schedule\Detail;
use App\Http\Livewire\Schedule\Edit;
use App\Http\Livewire\Schedule\Index;
use App\Http\Livewire\Schedule\LatestSchedule;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pendaftaran', \App\Http\Livewire\Proposal\Create::class)->name('proposal.create');
Route::get('pendaftaran/{id}', \App\Http\Livewire\Proposal\Detail::class)->name('proposal.detail');
Route::get('jadwal-terbaru', LatestSchedule::class)->name('schedule-latest');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'students'], function () {
        Route::get('/', \App\Http\Livewire\Student\Index::class)->name('students.index');
        Route::get('/create', \App\Http\Livewire\Student\Create::class)->name('students.create');
        Route::get('/edit/{student}', \App\Http\Livewire\Student\Edit::class)->name('students.edit');
        Route::get('/detail/{student}', \App\Http\Livewire\Student\Detail::class)->name('students.detail');
    });

    Route::group(['prefix' => 'schedules'], function () {
        Route::get('/', Index::class)->name('schedules.index');
        Route::get('/create', Create::class)->name('schedules.create');
        Route::get('/edit/{schedule}', Edit::class)->name('schedules.edit');
        Route::get('/detail/{schedule}', Detail::class)->name('schedules.detail');
    });

    Route::group(['prefix' => 'staff'], function () {
        Route::get('/edit/{staff}', \App\Http\Livewire\Staff\Edit::class)->name('staff.edit');
        Route::get('/detail/{staff}', \App\Http\Livewire\Staff\Detail::class)->name('staff.detail');
    });

    Route::get('keluar', function () {
        auth()->guard('web')->logout();
        return redirect('dashboard');
    })->name('sign-out');
});
