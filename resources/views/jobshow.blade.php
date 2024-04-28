<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1>
        £{{$job['salary']}}
    </h1>
    <h1>
        Company: {{$job->employer['name']}}

    </h1>

</x-layout>
