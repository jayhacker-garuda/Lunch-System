@extends('layouts.default')

@section('content')
    <div class="md:container md:mx-auto mt-40">
        <div class="row justify-center">
            <div class="bg-teal-400 w-1/2 h-80 mx-auto rounded-lg shadow-lg flex justify-center overflow-y-scroll overflow-hidden">
                @foreach ($mealsCategories as $category)
                    <table class="table border-separate text-sm flex-row w-20">
                        <thead>
                            <tr>
                                <th class="p-3 text-2xlx">{{ $category->name }}</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php  
                    $count = 0;    
                ?>
                            @foreach ($mealTypes as $meal)
                                @if ($meal->meals_category_id === $category->id)
                                    <tr>
                                        <td class="p-3">
                                            <div class="flex align-items-center">
                                                <div class="ml-3">
                                                    <div id="{{ $category->name . $count }}"
                                                        class="text-teal-700 hover:bg-teal-800 duration-300 px-4 py-2 rounded-lg" onclick='addMeal({{ $category->name.$count }})'>
                                                        {{ $meal->name }}</div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php  
                                        ++$count;    
                                    ?>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                @endforeach
            </div>
            <div class="container flex justify-center">
                <form class="px-6 space-y-6 sm:px-10 sm:space-y-8" method="POST" action="{{ route('dashboard.storeOrder') }}">
                    @csrf
                    <div class="flex flex-wrap">
                        <input hidden type="text" name="order" id="put-order">
                        <div id="display" class="w-full relative h-20 rounded-2xl border-4 border-teal-400 overflow-y-scroll"></div>
                        @error('order')
                            <p class="text-teal-200 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <input type="date" name="date_order" class="w-full form-input">

                        @error('date_order')
                            <p class="text-teal-200 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap">
                        <button type="submit"
                            class="bg-teal-600 mb-4 hover:bg-teal-900 duration-300 text-white font-bold p-2 rounded w-full">
                            {{ __('ADD LUNCH') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/addvalue/addInner.js') }}"></script>
@endsection
