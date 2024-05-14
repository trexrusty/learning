<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1>
        £{{$job->salary}}
    </h1>
    <h1>
        Company: {{$job->employer['name']}}

    </h1>
    <p class="mt-6">
        <a class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" href="/jobs/{{$job->id}}/edit">Edit Job</a>
    </p>
</x-layout>
