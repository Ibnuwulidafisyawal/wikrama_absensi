@extends('layouts.app')

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('rombels.store') }}">
            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('rombels.index') }}"><i class="bi bi-arrow-left-circle"></i> Back</a>
            </div>
               <!-- title -->
               <div>
                <div class="text-center fs-2 fw-bolder" >Create new rombel</div>
            </div> 

            <div>
                <div class="text-center">
                    <i class="bi bi-file-earmark-diff-fill fs-1" style="color:rgba(0, 0, 0, 0.812);"></i>
                </div>
            </div>
            @csrf

            <div class="mt-4">
                <x-jet-label for="rombel" value="{{ __('Rombel') }}" />
                <x-jet-input id="rombel" class="block mt-1 w-full" type="text" name="rombel" :value="old('rombel')" required />
            </div>
            

         

            <div class="flex items-center justify-content-center mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}

                <x-jet-button class="">
                    {{ __('Create') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
