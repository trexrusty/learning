<?php
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\JobsController;

Route::view('/', 'main');

Route::controller(JobsController::class)->group(function(){
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::post('/jobs', 'store');
    Route::get('/jobs/{job}','show');
    Route::get('/jobs/{job}/edit','edit');
    Route::patch('/jobs/{job}','update');
    Route::delete('/jobs/{job}','destroy');
});

Route::get('/contact', function () {
    return view('contact');
});

