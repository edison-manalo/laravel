<x-layout>
    <x-slot:heading>{{ $job->title }}</x-slot:heading>

    @can('edit-job', $job)
        <x-slot name="actions">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </x-slot>
    @endcan

    <p class="text-blue-400">{{ $job->employer->name }}</p>
    <p class="text-gray-300 mt-3">This job pays {{ $job->salary }} per year.</p>
</x-layout>