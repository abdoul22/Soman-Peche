@extends('layouts.style')


@section('content')

<div class="container mt-5">
    <br>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('products.update', $product->id) }}" method="POST" class="bg-dark p-5" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" id="name" value='{{ $product->name }}'>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description"rows="3">{{ $product->description }}</textarea>
        </div>
        <div class="mb-3" style="text-align: center;">
            <img  src="/images/{{ $product->image }}" height="300px" width="1000px" alt="">
            <br><br>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <div class="mb-3">
            <label for="poids" class="form-label">Product Name</label>
            <input type="text" name="poids" class="form-control" id="poids" value='{{ $product->poids }}'>
        </div>
        <div class="mb-3">
            <label for="taille" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="taille" id="taille" value='{{ $product->taille }}'>
        </div>
        <div class="mb-3">
            <label for="stock-quantity" class="form-label">Quantity in Stock</label>
            <input type="text" class="form-control" name="stockQuantity" value='{{ $product->stockQuantity }}' id="stock-quantity">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
   

</div>
@endsection
