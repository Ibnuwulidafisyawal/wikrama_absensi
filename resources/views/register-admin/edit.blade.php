{{-- @extends('layouts.app');

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register-admin.update',$user->id) }}">

            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('register-admin.index') }}"><i class="bi bi-arrow-left-circle"></i> Back</a>
            </div>
               <!-- title -->
               <div>
                <div class="text-center fs-2 fw-bolder" >Edit data admin</div>  
            </div>

             <!-- title icons -->
            <div>
                <div class="text-center">
                    <i class="fas fa-user-edit fs-1" style="color:rgba(0, 0, 0, 0.812);"></i>
                </div>
                </div>
            </div>

            @csrf

            @method('PUT')


            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus autocomplete="name" />
            </div>
                 
            <div>
                <x-jet-label for="username" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" value="{{$user->username}}" required autofocus autocomplete="username" />
            </div>

            <div>
                <x-jet-label for="email" value="{{ __('Nama') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{$user->email}}" required autofocus autocomplete="email" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="password"  onclick="myFunction()">
                    <label class="form-check-label" for="flexCheckDefault">
                      Show password
                    </label>    
                  </div>
            </div>


        <script>
            function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
            }
            </script>

            <div class="flex items-center justify-content-center mt-4">

                <x-jet-button class="ml-">
                    {{ __('Edit') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}



@extends('layouts.app');

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register-admin.update',$user->id) }}">

            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('register-admin.index') }}"><i class="bi bi-arrow-left-circle"></i> Back</a>
            </div>
               <!-- title -->
               <div>
                <div class="text-center fs-2 fw-bolder" >Edit Admin</div>
            </div>

             <!-- title icons -->
            <div>
                <div class="text-center">
                    <i class="bi bi-person-plus-fill fs-1" style="color:rgba(0, 0, 0, 0.812);"></i>
                </div>
            </div>
            @csrf

  @method('PUT')
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$user->name}}" required autofocus autocomplete="name" />
            </div>
                 
            <div>
                <x-jet-label for="username" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" value="{{$user->username}}" required autofocus autocomplete="username" />
            </div>

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{$user->email}}" required autofocus autocomplete="email" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="password"  onclick="myFunction()">
                    <label class="form-check-label" for="flexCheckDefault">
                      Show password
                    </label>    
                  </div>
            </div>

    <script>
        function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        }
        </script>


            <div class="flex items-center justify-content-center mt-4">
                <x-jet-button class="ml-1 d-flex justify-content-center">
                    {{ __('Edit') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
