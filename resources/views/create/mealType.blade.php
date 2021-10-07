@extends('layouts.default')

@section('content')
<main class="sm:container sm:w-9/12 sm:mx-auto sm:mt-28  sm:max-w-lg">
    <div class="flex">
        <div class="w-full">
            <section class="flex flex-col break-words bg-teal-200 sm:border-1 sm:rounded-md sm:shadow-sm">

                <header class="font-semibold bg-blackpearl-900 text-Calico-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                    {{ __('Add Meal-Type') }}
                </header>

                <form class="w-full px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('create.storeMeal') }}">
                    @csrf

                    <div class="flex flex-wrap">
                        <input type="text" class="form-input w-full @error('name')  border-red-500 @enderror" name="name" placeholder="Meal Name">

                        @error('name')
                        <p class="text-easternblue-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="flex flex-wrap">
                        <select name="meals_category_id" id="meals_category_id" class="form-select w-full @error('meals_category_id') border-red-500 @enderror">
                            <option selected disabled>Select Category</option>
                            @foreach ($mealCategories as $category )
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('meals_category_id')
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