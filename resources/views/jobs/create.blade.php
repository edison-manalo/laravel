<x-layout>
    <x-slot:heading>Create Job</x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="border-b border-white/10 pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label for="title">Title</x-form-label>
                    <x-form-input type="text" id="title" name="title" value="{{ old('title') }}"></x-form-input>

                    <x-form-error name="title"></x-form-error>
                </x-form-field>

                <x-form-field class="row-start-2">
                    <x-form-label for="salary">Salary</x-form-label>
                    <x-form-input type="text" id="salary" name="salary" value="{{ old('salary') }}"></x-form-input>

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
            <a href="/jobs" class="py-2 font-medium text-white hover:underline decoration-2 underline-offset-2 rounded-xl cursor-pointer">Cancel</a>
            <x-form-button>Create</x-form-button>
        </div>
    </form>
</x-layout>