@extends('layouts.default')

@section('content')
<main class="sm:container sm:w-9/12 sm:mx-auto sm:mt-28  sm:max-w-lg">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-teal-200 sm:border-1 sm:rounded-md sm:shadow-sm">

                <header class="font-semibold bg-blackpearl-900 text-Calico-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Add Category') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('create.storeCategory') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <input type="text" class="form-input w-full @error('name')  border-red-500 @enderror" name="name" placeholder="Category Name">

                        @error('name')
                        <p class="text-easternblue-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="bg-teal-600 mb-4 hover:bg-teal-900 duration-300 text-white font-bold p-2 rounded w-full">
                            {{ __('ADD') }}
                        </button>
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>
@endsection