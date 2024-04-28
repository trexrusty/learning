<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <h1>Jobs Available</h1>
    <ul>
        @foreach ($listings as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{ $job['title'] }}</strong>: Pays £{{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
