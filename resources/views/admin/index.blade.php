@extends('layouts.default')

@section('content')
    <div class="container mx-auto">

        <div class="flex">
            <div class="w-1/4 h-screen border-l-2 border-r-2 border-teal-700 shadow-outline-teal overflow-x-none">
                <ul class="relative  mt-20">
                    <li class="mb-6">
                        <a href="{{ route('create.category') }}">
                            <button type="button"
                                class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline">
                                <svg :class="selected === 0 ? 'text-indigo-400' : 'text-teal-500'"
                                    class="h-6 w-6 transition-all ease-out transition-medium" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.707 2.293a1 1 0 00-1.414 0l-9 9a1 1 0 101.414 1.414L4 12.414V21a1 1 0 001 1h5a1 1 0 001-1v-6h2v6a1 1 0 001 1h5a1 1 0 001-1v-8.586l.293.293a1 1 0 001.414-1.414l-9-9zM18 10.414l-6-6-6 6V20h3v-6a1 1 0 011-1h4a1 1 0 011 1v6h3v-9.586z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium transition-all ease-out transition-medium">
                                    Create Meal Category
                                </span>
                            </button>
                        </a>
                    </li>
                    <li class="mb-6">
                        <a href="{{ route('create.mealType') }}">
                            <button type="button"
                                class="py-2 px-3 w-full flex items-center focus:outline-none focus-visible:underline">
                                <svg class="h-6 w-6 transition-all ease-out transition-medium" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.707 2.293a1 1 0 00-1.414 0l-9 9a1 1 0 101.414 1.414L4 12.414V21a1 1 0 001 1h5a1 1 0 001-1v-6h2v6a1 1 0 001 1h5a1 1 0 001-1v-8.586l.293.293a1 1 0 001.414-1.414l-9-9zM18 10.414l-6-6-6 6V20h3v-6a1 1 0 011-1h4a1 1 0 011 1v6h3v-9.586z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium transition-all ease-out transition-medium">
                                    Create Meal Type
                                </span>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-9/12 h-screen relative">
                <div class="container mt-20">
                    <div class="flex items-center justify-center ">
                        <div class="col-span-12">
                            <div class="overflow-auto lg:overflow-visible ">
                                <table class="table text-teal-400 border-separate space-y-6 text-sm">
                                    <thead class="bg-teal-800 text-white">
                                        <h2 class="mx-10 font-black p-2">Meal - Category Table</h2>
                                        <tr>
                                            <th class="p-3 hover:text-teal-400 duration-300">Name</th>
                                            <th class="p-3 text-left hover:text-teal-400 duration-300">Created AT</th>
                                            <th class="p-3 hover:text-teal-400 duration-300">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mealCategories as $category)
                                            <tr class="bg-teal-800">
                                                <td class="p-3">
                                                    <div class="flex align-items-center">
                                                        <div class="ml-3">
                                                            <div class="text-teal-500">{{ $category->name }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    {{ $category->created_at->DiffForhumans() }}
                                                </td>
                                                <td class="p-3">
                                                    <a href="#" class="text-teal-400 hover:text-teal-100  mx-2">
                                                        <i class="material-icons-outlined text-base">edit</i>
                                                    </a>
                                                    <a href="#" class="text-teal-400 hover:text-teal-100  ml-2">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-center ">
                        <div class="col-span-12">
                            <div class="overflow-auto lg:overflow-visible ">
                                <table class="table text-teal-400 border-separate space-y-6 text-sm">
                                    <thead class="bg-teal-800 text-white">
                                        <h2 class="mx-10 font-black p-2">Meal - Type Table</h2>
                                        <tr>
                                            <th class="p-3 hover:text-teal-400 duration-300">Name</th>
                                            <th class="p-3 hover:text-teal-400 duration-300">Category Name</th>
                                            <th class="p-3 text-left hover:text-teal-400 duration-300">Created AT</th>
                                            <th class="p-3 hover:text-teal-400 duration-300">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mealTypes as $meal)
                                            <tr class="bg-teal-800">
                                                <td class="p-3">
                                                    <div class="flex align-items-center">
                                                        <div class="ml-3">
                                                            <div class="text-teal-500">{{ $meal->name }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    <div class="flex align-items-center">
                                                        <div class="ml-3">
                                                            <div class="text-teal-500">{{ $meal->mealCategory->name }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="p-3">
                                                    {{ $meal->created_at->DiffForhumans() }}
                                                </td>
                                                <td class="p-3">
                                                    <a href="#" class="text-teal-400 hover:text-teal-100  mx-2">
                                                        <i class="material-icons-outlined text-base">edit</i>
                                                    </a>
                                                    <a href="#" class="text-teal-400 hover:text-teal-100  ml-2">
                                                        <i class="material-icons-round text-base">delete_outline</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@section('css')
    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:nth-child(n+5),
        tr th:nth-child(n+5) {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }

    </style>
@endsection
