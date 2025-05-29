<?php

use Illuminate\Support\Facades\Route;

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::resource('users', 'UserController');
});

// HR routes
Route::middleware(['auth', 'role:hr'])->group(function () {
    Route::get('/hr/dashboard', function () {
        return view('hr.dashboard');
    })->name('hr.dashboard');
    
    Route::resource('employees', 'EmployeeController');
});

// Finance routes
Route::middleware(['auth', 'role:finance'])->group(function () {
    Route::get('/finance/dashboard', function () {
        return view('finance.dashboard');
    })->name('finance.dashboard');
    
    Route::resource('budgets', 'BudgetController');
});

// Programme Officer routes
Route::middleware(['auth', 'role:programme-officer'])->group(function () {
    Route::get('/programme/dashboard', function () {
        return view('programme.dashboard');
    })->name('programme.dashboard');
    
    Route::resource('programmes', 'ProgrammeController');
});

// Secretary General routes
Route::middleware(['auth', 'role:sg'])->group(function () {
    Route::get('/sg/dashboard', function () {
        return view('sg.dashboard');
    })->name('sg.dashboard');
    
    Route::resource('reports', 'ReportController');
});

// User routes (accessible by all authenticated users)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
}); 