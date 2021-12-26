@extends('layouts.app');

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register-student.update', $student->id) }}" enctype="multipart/form-data">

            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('register-student.index') }}"><i class="bi bi-arrow-left-circle"></i> Back</a>
            </div>
               <!-- title -->
               <div>
                <div class="text-center fs-2 fw-bolder" >Edit Student</div>
            </div>

             <!-- title icons -->
            <div>
                <div class="text-center">
                    <i class="fas fa-user-edit fs-1" style="color:rgba(0, 0, 0, 0.812);"></i>
                </div>
            </div>
            @csrf

            @method('PUT')

            <div>
                <x-jet-label for="nis" value="{{ __('Nis') }}" />
                <x-jet-input id="nis" class="block mt-1 w-full" type="text" name="nis" value="{{$student->nis}}" required autofocus autocomplete="nis"/>
            </div>

            <div>
                <x-jet-label for="nama" value="{{ __('Nama') }}" />
                <x-jet-input id="nama" class="block mt-1 w-full" type="text" name="nama" value="{{$student->nama}}" required autofocus autocomplete="nama" />
            </div>

            <div class="mt-4">
                    <div class="form-group">
                        <x-jet-label for="rombel" value="{{ __('Rombel') }}" />
                        <select class="form-control" name="rombel" id="rombel">
                            <option value="" hidden></option>
                            @foreach($rombels as $studentGroup)
                            <option value="{{$studentGroup->rombel}}" @if($student->rombel == $studentGroup->rombel)selected @endif>{{$studentGroup->rombel}}</option>
                            @endforeach
                        </select>            
                    </div>
            </div>

            <div class="mt-4">
                <div class="form-group">
                    <x-jet-label for="rayon" value="{{ __('Rayon') }}" />
                    <select class="form-control" name="rayon" id="rayon">
                        <option value="" hidden></option>
                        @foreach($rayons as $rayon)
                        <option value="{{$rayon->rayon}}" @if($student->rayon == $rayon->rayon)selected @endif>{{$rayon->rayon}}</option>
                        @endforeach
                    </select>            
                </div>
        </div>

            <div class="mt-4">
               
            </div>

            <div>
                <x-jet-label for="username" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" value="{{$student->username}}" required autofocus autocomplete="username" />
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
</x-guest-layout>
