<?php
use Illuminate\Support\Facades\Route;
use App\Models\listings;


Route::get('/', function () {
    return view('main');
});

Route::get('/jobs', function () {
    return view('jobs', [

        'listings' => listings::all()

    ]);
});

Route::get('/jobs/{id}', function ($id) {
        $job = listings::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

