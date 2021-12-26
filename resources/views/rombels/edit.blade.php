@extends('layouts.app')

<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form action="{{ route('rombels.update',$rombel->id)}}" method="POST"  enctype="multipart/form-data">

            <div class="pull-right">
                <a class="btn btn-secondary" href="{{ route('rombels.index') }}"><i class="bi bi-arrow-left-circle"></i> Back</a>
            </div>

               <!-- title -->
               <div>
                <div class="text-center fs-2 fw-bolder" >Edit rombel</div>
            </div> 

             <!-- title icons -->
             <div>
                <div class="text-center">
                    <i class="bi bi-file-earmark-diff-fill fs-1" style="color:rgba(0, 0, 0, 0.812);"></i>
                </div>
            </div>

            @csrf

            @method('PUT')

            <div class="mt-4">
                <x-jet-label for="rombel" value="{{ __('Rombel') }}" />
                <x-jet-input id="rombel" class="block mt-1 w-full" type="text" name="rombel" value="{{$rombel->rombel}}" required />
            </div>


            <div class="flex items-center justify-content-center mt-4">

                <x-jet-button class="">
                    {{ __('Edit') }}
                </x-jet-button>

            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
{{-- 
<form action="{{ route('studentGroups.update',$studentGroup->id) }}" method="POST" enctype="multipart/form-data"> 
    @csrf

    @method('PUT')
        <div class="row mx-auto" style="width: 400px">
            <div class="col-xs-12 col-sm-12">
                <div class="form-group  col-md-18 ">
                    <strong>Rombel</strong>
                    <input type="text" name="rombel" class="form-control" placeholder="Rombel" value="{{$studentGroup->rombel}}">
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    
</form> --}}