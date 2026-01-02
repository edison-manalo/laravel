<x-layout>
    <x-slot:heading>Job</x-slot:heading>

    <h2 class="text-lg font-medium text-white">{{ $job->title }}</h2>
    <p class="text-blue-400">{{ $job->employer->name }}</p>
    <p class="text-gray-300 mt-3">This job pays {{ $job->salary }} per year.</p>

    <x-button href="/jobs/{{ $job->id }}/edit" class="mt-18">Edit Job</x-button>
</x-layout>