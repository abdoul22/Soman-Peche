@extends('layouts.style')

@section('content')
@include('layouts.header')
<div class="m-4">
<br>
    @if ($message = Session::get('success'))
    <br>
    <br>
    <div class="alert alert-success mt-5"  role="alert">
        {{ $message }}
    </div>
    @endif
    <h4 class="border-b border-gray-300 font-bold mt-12 pb-2">Latest Recipes</h4>
    <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-10 mt-8">
        @foreach ($products as $product )
      <div class="card hover:shadow-lg">
        <img class="w-full sm:h-48 h-42 object-cover" src="{{asset('images/bannier/requin.jpg')}}" alt="">
        <div class="p-2">
            <span class=" text-gray-600 font-bold">5 Bean chilli strew</span>
            <span class="text-gray-500 block text-sm"> chilli strew</span>
        </div>
        <div class="badge opacity-80">
            <svg class="w-5 inline-block" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z">
                </path>
            </svg>
            <span>14 min</span>
        </div>
    </div>
        @endforeach
    </div>
    <h4 class="border-b border-gray-300 font-bold mt-12 pb-2">Most Popular</h4>
    <div class="mt-8">
        <!--cards go here-->
    </div>
</div>
@endsection
