<x-layout>
    <x-slot:heading>Log In</x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="border-b border-white/10 pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <x-form-input type="email" id="email" name="email" value="{{ old('email') }}"></x-form-input>

                    <x-form-error name="email"></x-form-error>
                </x-form-field>

                <x-form-field class="row-start-2">
                    <x-form-label for="password">Password</x-form-label>
                    <x-form-input type="password" id="password" name="password"></x-form-input>

                    <x-form-error name="password"></x-form-error>
                </x-form-field>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="py-2 font-medium text-white hover:underline decoration-2 underline-offset-2 rounded-xl cursor-pointer">Cancel</a>
            <x-form-button>Log In</x-form-button>
        </div>
    </form>
</x-layout>