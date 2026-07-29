<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\OutreachchannelController;
use App\Http\Controllers\OutreachController;
use App\Http\Controllers\ProfileController;
use App\Models\Outreach;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-email',[LeadController::class,'sendEmail'])->name('send.email');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard',[LeadController::class,'index'])->name('dashboard');
    Route::post('/dashboard',[LeadController::class,'store'])->name('dashboard.store');
    Route::get('/dashboard/detail/{leads:slug}',[LeadController::class,'detail'])->name('dashboard.detail');
    Route::get('/dashboard/form',[LeadController::class,'create'])->name('dashboard.create');   
    Route::delete('/dashboard/{lead}/destroy',[LeadController::class,'destroy'])->name('delete');
    Route::put('/dashboard/{lead}/update', [LeadController::class, 'update'])->name('update');
    Route::get('/dashboard/{lead}/edit',[LeadController::class,'edit'])->name('edit');

    
    Route::get('/outreachchannel', [OutreachchannelController::class, 'index'])->name('outreachchannel.index');
    Route::post('/outreachchannel', [OutreachchannelController::class, 'store'])->name('outreachchannel.store');
    Route::get('/outreachchannel/create', [OutreachchannelController::class, 'create'])->name('outreachchannel.create');
    Route::delete('/outreachchannel/{outreachchannel}/destroy', [OutreachchannelController::class, 'destroy'])->name('outreach.destroy');    
    Route::get('/outreachchannel/{outreachchannel}/show', [OutreachchannelController::class, 'show'])->name('outreachchannel.show');        
    Route::put('/outreachchannel/{outreachchannel}/update',[OutreachchannelController::class,'update'])->name('outreachchannel.update');
    Route::get('/outreachchannel/{outreachchannel}/edit',[OutreachchannelController::class,'edit'])->name('outreachchannel.edit');
 
 
    Route::get('/outreach', [OutreachController::class, 'index'])->name('outreach.index');
    Route::post('/outreach', [OutreachController::class, 'store'])->name('outreach.store');
    Route::get('/outreach/create', [OutreachController::class, 'create'])->name('outreach.create');
    Route::delete('/outreach/{outreach}/destroy', [OutreachchannelController::class, 'destroy'])->name('outreachchannel.destroy');    
    Route::get('/outreach/{outreach}/show', [OutreachController::class, 'show'])->name('outreach.show');        
    Route::put('/outreach/{outreach}/update',[OutreachController::class,'update'])->name('outreach.update');
    Route::get('/outreach/{outreach}/edit',[OutreachController::class,'edit'])->name('outreach.edit');





});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
