<x-layout>
    <x-slot:heading>Job Listings</x-slot:heading>
    
    <div class="divide-y divide-white/10">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block text-white py-6 group">
                <h3 class="text-lg font-medium group-hover:underline decoration-2 underline-offset-2">{{ $job['title'] }}</h3>
                <p class="text-blue-400">{{ $job->employer->name }}</p>
                <p class="text-gray-300 mt-3">Pays {{ $job['salary'] }} per year.</p>
            </a>
        @endforeach
    </div>

    <div class="mt-4">
        {{ $jobs->links() }}
    </div>
</x-layout>