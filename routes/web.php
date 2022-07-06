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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pendaftaran', \App\Http\Livewire\Proposal\Create::class)->name('proposal.create');
Route::get('pendaftaran/{id}', \App\Http\Livewire\Proposal\Detail::class)->name('proposal.detail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->prefix('singgahsana')->group(function () {
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
        Route::get('/', \App\Http\Livewire\Schedule\Create::class)->name('schedules.index');
        Route::get('/create', \App\Http\Livewire\Schedule\Create::class)->name('schedules.create');
        Route::get('/edit/{schedule}', \App\Http\Livewire\Schedule\Edit::class)->name('schedules.edit');
        Route::get('/detail/{schedule}', \App\Http\Livewire\Schedule\Detail::class)->name('schedules.detail');
    });
});
