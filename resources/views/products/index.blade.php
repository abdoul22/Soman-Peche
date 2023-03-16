@extends('layouts.style')

@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4 mt-5 p-5">
    @foreach ($products as $product )
    <div class="col">
        <div class="card h-100">
            <img src="/images/{{ $product->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
