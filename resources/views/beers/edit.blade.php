@extends('layouts.main')

@section('content')
    <h2>Edit {{$beer->name}}</h2>
    <form action="{{ route('beers.update', $beer) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="inserire birra" name="name" value="">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" placeholder="inserire url immagine" name="image">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="float" class="form-control" id="price" placeholder="inserire prezzo" name="price">
        </div>

        <button class="btn btn-primary" type="submit">Edit</button>
    </form>
@endsection
