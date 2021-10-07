@extends('layouts.default')

@section('content')
    <!-- Max width container, center aligned, with some padding -->
<div class="max-w-5xl mx-auto px-4 sm:px-6 py-8 mt-20">
<!-- Grid columns + some font styles for the children elements to inherit -->
  <div class="font-medium leading-7 text-center space-y-2 sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-4 sm:space-y-0">
    <!-- Grid cell #1 -->

    @foreach ($orders as $order )
    {{-- {{ dd($order->users->user_type) }} --}}
        @if($order->users->user_type != "sham-don")
            <div class="text-teal-900 bg-teal-200 py-3 px-6 rounded">
              <div class="flex justify-between">
                <span class=" rounded-full bg-teal-400 px-4">{{ $order->id }}</span>
                <span class="">{{ $order->created_at->DiffForHumans() }}</span>
              </div>
              <p>{{ $order->users->name }}</p>
              <p>{{ $order->order }}</p>
              <p><span class="bg-teal-400 rounded-md px-2 hover:text-white duration-300">Order Date:</span>{{ $order->date_order }}</p>
            </div>
        @endif
    @endforeach
    
  </div>
</div>
@endsection