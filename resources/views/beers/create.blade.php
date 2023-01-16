@extends('layouts.main')

@section('content')
    <form action="{{ route('beers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="inserire birra" name="name">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" class="form-control" id="image" placeholder="inserire url immagine" name="image">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="float" class="form-control" id="price" placeholder="inserire prezzo" name="price">
        </div>

        <button class="btn btn-primary" type="submit">Create</button>
    </form>
@endsection
