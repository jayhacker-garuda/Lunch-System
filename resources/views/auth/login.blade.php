@extends('layouts.default')

@section('content')
<main class="sm:container sm:w-9/12 sm:mx-auto sm:mt-28  sm:max-w-lg">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-teal-200 sm:border-1 sm:rounded-md sm:shadow-sm">

                <header class="font-semibold bg-blackpearl-900 text-Calico-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Login') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('auth.loginUser') }}">
                    @csrf

                 
                    
                    <div class="flex flex-wrap">
                        <label for="email" class="block text-Calico-400 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email">

                        @error('email')
                        <p class="text-teal-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <label for="email" class="block text-Calico-400 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password" class="form-input w-full @error('password') border-red-500 @enderror" name="password">

                        @error('password')
                        <p class="text-teal-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="bg-teal-600 hover:bg-teal-900 duration-300 text-white font-bold p-2 rounded w-full">
                            {{ __('Login') }}
                        </button>

                        <p class="w-full text-xs text-center text-Calico-400 my-6 sm:text-sm sm:my-8">
                            {{ __('Don`t have an account?') }}
                            <a class="text-teal-500 hover:text-teal-700 no-underline" href="{{ route('auth.registerForm') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection