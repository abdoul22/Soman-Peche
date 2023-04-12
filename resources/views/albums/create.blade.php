@extends('layouts.style')

@section('content')
@include('layouts.header')
@if ($errors->any())
<div class="bg-red-500 mx-12 mt-6 text-gray-200 " >
    <ul>
        @foreach ($errors->all() as $error)
        <li class="text-center">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('albums.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="h-42 bg-slate-500 m-24 text-lg text-gray-200 p-10 flex justify-center ">
        <label for="imagegallery">The image for Albums</label>
        <input type="file" name="image">
        <button type="submit" class="border-gray-200 border-2 btn">Create</button>
    </div>
</form>
@endsection
