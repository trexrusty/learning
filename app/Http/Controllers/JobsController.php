<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(){
        $jobs = Listing::with('employer')->latest()->paginate(perPage:15);

        return view('jobs.main', [
            'listings' => $jobs
        ]);
    }

    public function create(){
        return view('jobs.create');
    }

    public function show(Listing $job){
        return view('jobs.show', ['job' => $job]);
    }

    public function store(Request $request){
        $request->validate([
            'title'=> ['required', 'min:3'],
            'salary' => ['required', 'integer']
        ]);
        Listing::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);
        return redirect('/jobs');
    }

    public function edit(Listing $job){
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Listing $job){
        request()->validate([
            'title'=> ['required', 'min:3'],
            'salary' => ['required', 'integer']
        ]);


        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Listing $job){

        $job->delete();

        return redirect('/jobs');
    }

}
