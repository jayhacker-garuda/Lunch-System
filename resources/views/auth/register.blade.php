@extends('layouts.default')

@section('content')
<main class="sm:container sm:w-9/12 sm:mx-auto sm:mt-28  sm:max-w-lg">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-teal-200 sm:border-1 sm:rounded-md sm:shadow-sm">

                <header class="font-semibold bg-blackpearl-900 text-Calico-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Register') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('auth.registerUser') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <label for="name" class="block text-Calico-400 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Name') }}:
                        </label>

                        <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror" name="name">

                        @error('name')
                        <p class="text-easternblue-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="email" class="block text-Calico-400 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('E-Mail Address') }}:
                        </label>

                        <input id="email" type="email" class="form-input w-full @error('email') border-red-500 @enderror" name="email">

                        @error('email')
                        <p class="text-easternblue-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="password" class="block text-Calico-400 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Password') }}:
                        </label>

                        <input id="password" type="password" class="focus:border-teal-700 form-input w-full @error('password') border-red-500 @enderror" name="password">
                        @error('password')
                        <p class="text-easternblue-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <label for="confirm_password" class="block text-Calico-400 text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Confirm Password') }}:
                        </label>

                        <input id="confirm_password" type="password" class="focus:border-teal-700 form-input w-full @error('confirm_password') border-red-500 @enderror" name="confirm_password">
                        @error('confirm_password')
                            <p class="text-easternblue-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    {{-- <div class="flex flex-wrap">
                        <label class="block text-sm font-bold mb-2 sm:mb-4">
                            {{ __('Admin') }}
                        </label>
                        <input type="radio" name="user_type" class="focus:border-teal-700 w-4 h-4" value="sham-don">
                    </div> --}}
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="bg-teal-600 hover:bg-teal-900 duration-300 text-white font-bold p-2 rounded w-full">
                            {{ __('Register') }}
                        </button>

                        <p class="w-full text-xs text-center text-Calico-400 my-6 sm:text-sm sm:my-8">
                            {{ __('Already have an account?') }}
                            <a class="text-easternblue-500 hover:text-easternblue-700 no-underline" href="{{ route('auth.loginForm') }}">
                                {{ __('Login') }}
                            </a>
                        </p>
                    </div>
                </form>

            </section>
        </div>
    </div>
</main>
@endsection