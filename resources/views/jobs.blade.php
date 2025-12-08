<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>
    
    <ul>
        @foreach ($jobs as $job)
            <li class="text-white">
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 underline">
                    <span class="font-medium">{{ $job['title'] }}</span>:
                    Pays {{ $job['salary'] }} per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>