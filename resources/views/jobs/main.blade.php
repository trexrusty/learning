<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h1>Jobs Available</h1>
    <br>
        @foreach ($listings as $job)
        <div class="border border-sky-500">
                <a class="" href="/jobs/{{$job['id']}}">
                    <div><h1>{{ $job->employer['name'] }}</h1></div>
                    <strong>{{ $job['title'] }}</strong>: Pays £{{ $job['salary'] }} per year.
                </a>
                <br>
            </div>
        @endforeach
    <div>
        {{$listings->links()}}
    </div>

</x-layout>
