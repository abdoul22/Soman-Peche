@extends('layouts.style')

@section('content')
<div class="container m-5">
    <div class="m-6">
        <img src="/images/{{ $product->image }}" class="figure-img img-fluid rounded" alt="...">
        <h2>{{$product->name}}</h2>
        <figcaption class="figure-caption">{{$product->description }}.</figcaption>
        <br>
        <h4>Le Poids : {{ $product->poids }} kg</h4>
        <h4>La Taille : {{ $product->taille }} cm</h4>
        <h4>La quantité en stock : {{ $product->stockQuantity }} Tones</h4>
        <br>
        <div>
        <a class="btn btn-info" href="{{ route("products.edit", $product->id) }}">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="post" >
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
