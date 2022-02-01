<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configuration') }} 
        </h2>
    </x-slot>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-avatar class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <!-- Success alert -->
        @if (session('message'))
            
            <dir class="alert alert-success">
                {{session('message')}}
            </dir>

        @endif    
        <form method="POST" action="{{ route('config.update') }}" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="Auth::user()->name" required autofocus />
            </div>

            <!-- Surnameame -->
            <div>
                <x-label for="surname" :value="__('Surname')" />

                <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="Auth::user()->surname" required />
            </div>

            <!-- Nick -->
            <div>
                <x-label for="nick" :value="__('Nick')" />

                <x-input id="nick" class="block mt-1 w-full" type="text" name="nick" :value="Auth::user()->nick" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="Auth::user()->email" required />
            </div>   

             <!-- Avatar -->
             <div class="mt-4">
                <x-label for="image_path" :value="__('Avatar')"  />              

                <x-input id="image_path" class="block mt-1 w-full" type="file" name="image_path" :value="__('Avatar')" required />
            </div>    

            <div class="flex items-center justify-end mt-4">
                

                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>       
</x-app-layout>