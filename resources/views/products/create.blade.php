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
    <form action="{{ route('products.store') }}" method="POST" class="bg-dark p-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter the Product Name">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Product Description" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <div class="mb-3">
            <label for="poids" class="form-label">Product Name</label>
            <input type="text" name="poids" class="form-control" id="poids" placeholder="Enter the Weight">
        </div>
        <div class="mb-3">
            <label for="taille" class="form-label">Product Name</label>
            <input type="text" class="form-control" name="taille" id="taille" placeholder="Enter the size">
        </div>
        <div class="mb-3">
            <label for="stock-quantity" class="form-label">Quantity in Stock</label>
            <input type="text" class="form-control" name="stockQuantity" id="stock-quantity" placeholder="Enter the Quantity in stock">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
    <div class="card mb-3">
        <img src="" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content.
                This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    <div class="card-body mb-5">
        <h5 class="card-title">Dark card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.
        </p>
    </div>

</div>
@endsection
