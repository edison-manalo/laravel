<x-layout>
    <x-slot:heading>Register</x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="border-b border-white/10 pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label for="first_name">First Name</x-form-label>
                    <x-form-input type="text" id="first_name" name="first_name" :value="old('first_name')" required></x-form-input>

                    <x-form-error name="first_name"></x-form-error>
                </x-form-field>

                <x-form-field class="row-start-2">
                    <x-form-label for="last_name">Last Name</x-form-label>
                    <x-form-input type="text" id="last_name" name="last_name" :value="old('last_name')" required></x-form-input>

                    <x-form-error name="last_name"></x-form-error>
                </x-form-field>

                <x-form-field class="row-start-3">
                    <x-form-label for="email">Email</x-form-label>
                    <x-form-input type="email" id="email" name="email" :value="old('email')" required></x-form-input>

                    <x-form-error name="email"></x-form-error>
                </x-form-field>

                <x-form-field class="row-start-4">
                    <x-form-label for="password">Password</x-form-label>
                    <x-form-input type="password" id="password" name="password" required></x-form-input>

                    <x-form-error name="password"></x-form-error>
                </x-form-field>

                <x-form-field class="row-start-5">
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                    <x-form-input type="password" id="password_confirmation" name="password_confirmation" required></x-form-input>

                    <x-form-error name="password_confirmation"></x-form-error>
                </x-form-field>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="py-2 font-medium text-white hover:underline decoration-2 underline-offset-2 rounded-xl cursor-pointer">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>