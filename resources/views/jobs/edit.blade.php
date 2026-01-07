<x-layout>
    <x-slot:heading>{{ $job->title }}</x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="border-b border-white/10 pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label for="title">Title</x-form-label>
                    <x-form-input type="text" id="title" name="title" value="{{ old('title', $job->title) }}"></x-form-input>

                    <x-form-error name="title"></x-form-error>
                </x-form-field>

                <x-form-field class="row-start-2">
                    <x-form-label for="salary">Salary</x-form-label>
                    <x-form-input type="text" id="salary" name="salary" value="{{ old('salary', $job->salary) }}"></x-form-input>

                    <x-form-error name="salary"></x-form-error>
                </x-form-field>
            </div>

            {{-- @if ($errors->any())
                <ul class="mt-8">
                    @foreach($errors->all() as $error)
                        <li class="text-red-400 font-medium">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif --}}
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button class="bg-red-600/25 px-3 py-2 font-medium text-red-400 rounded-xl cursor-pointer mr-auto" form="delete-form">Delete</button>
            <a href="/jobs/{{ $job->id }}" class="py-2 font-medium text-white hover:underline decoration-2 underline-offset-2 rounded-xl cursor-pointer">Cancel</a>
            <button type="submit" class="bg-blue-600 px-3 py-2 font-medium text-white rounded-xl cursor-pointer">Update</button>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</x-layout>