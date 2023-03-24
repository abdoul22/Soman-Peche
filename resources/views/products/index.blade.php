@extends('layouts.style')

@section('content')

<div class="container">

    @if ($message = Session::get('success'))
    <br>
    <br>
    <div class="alert alert-success mt-5"  role="alert">
        {{ $message }}
    </div>
    @endif
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5 p-5">
        @foreach ($products as $product )
        <a href="{{ route('products.show', $product->id) }}" style="text-decoration: none; color:rgb(14, 27, 37);">
            <div class="col">
                <div class="card h-100">
                    <img src="/images/{{ $product->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection
