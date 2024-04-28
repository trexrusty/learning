<?php
use Illuminate\Support\Facades\Route;
use App\Models\Listing;


Route::get('/', function () {
    return view('main');
});

Route::get('/jobs', function () {

    $jobs = Listing::with('employer')->latest()->paginate(perPage:15);

    return view('jobs', [
        'listings' => $jobs
    ]);
});
Route::get('/jobs/create', function () {
    return view('jobcreate');
});
Route::post('/job', function () {

    Listing::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);
    return redirect('/jobs');
});

Route::get('/jobs/{id}', function ($id) {
        $job = Listing::find($id);
    return view('jobshow', ['job' => $job]);
});



Route::get('/contact', function () {
    return view('contact');
});

