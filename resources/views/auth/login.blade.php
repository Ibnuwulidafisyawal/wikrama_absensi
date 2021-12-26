<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

     
           <!-- title -->
           <div>
            <div class="text-center fs-2 fw-bolder" >Login admin</div>
        </div>

        <div>
            <div class="text-center">
                <i class="fas fa-user-cog  fs-1" style="color:rgba(0, 0, 0, 0.812);"></i>
            </div>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="username" value="{{ __('Username :') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username"  :value="old('username')" required autofocus  />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password :') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password"/>
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>


            <div class="flex items-center justify-content-center mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
