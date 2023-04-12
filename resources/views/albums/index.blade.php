@extends('layouts.style')
@section('content')
@include('layouts.header')
<br>
<h1 class="text-gray-700 text-lg uppercase text-center font-bold mt-6 ">Here You can see our Gallery with good pictures</h1>
<div class="mt-6 grid sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-2 p-5 bg-sky-900 ">
    @foreach ($albums as $album )
    <div class="mx-2 card hover:shadow-lg transform hover:scale-150 hover:z-50 transition ease-in-out duration-200 ">
        <img class="w-full sm:h-48 h-42 object-cover " src="{{ asset('albums1/'.$album->image) }}" alt="">
    </div>
    @endforeach
</div>
@endsection
