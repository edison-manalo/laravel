<x-layout>
    <x-slot:heading>Edit Job: {{ $job->title }}</x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="border-b border-white/10 pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block font-medium text-white">Title</label>
                    <div class="mt-2">
                        <input
                            id="title"
                            type="text"
                            name="title"
                            class="bg-white/5 block w-full min-w-0 grow bg-transparent py-2 px-3 text-white outline -outline-offset-2 outline-white/10 focus:outline-2 focus:outline-blue-700 focus:-outline-offset-3 rounded-xl"
                            value="{{ old('title', $job->title) }}" />
                    </div>

                    @error('title')
                        <p class="mt-2 text-red-400 font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <div class="sm:col-span-2 row-start-2">
                    <label for="salary" class="block font-medium text-white">Salary</label>
                    <div class="mt-2">
                        <input
                            id="salary"
                            type="text"
                            name="salary"
                            class="bg-white/5 block w-full min-w-0 grow bg-transparent py-2 px-3 text-white outline -outline-offset-2 outline-white/10 focus:outline-2 focus:outline-blue-700 focus:-outline-offset-3 rounded-xl"
                            value="{{ old('salary', $job->salary) }}" />
                    </div>

                    @error('salary')
                        <p class="mt-2 text-red-400 font-medium">{{ $message }}</p>
                    @enderror
                </div>
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