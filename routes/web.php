<?php

use App\Livewire\Auth\AuthIndex;
use App\Livewire\Dashboard;
use App\Livewire\Transactions\Deposit;
use App\Livewire\Transactions\Withdrawal;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('dashboard')->middleware('auth');
Route::get('/deposits', Deposit::class)->name('deposit.index');
Route::get('/withdrawals', Withdrawal::class)->name('withdrawal.index');
Route::get('/auth/{page}',AuthIndex::class)->name('auth.index');