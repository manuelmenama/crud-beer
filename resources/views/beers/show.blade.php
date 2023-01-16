@extends('layouts.main')

@section('content')

<div class="d-flex justify-content-center">
    <div class="card my_card">
        <div class="d-flex justify-content-center">
            <img src="{{ $beer->image }}" class="card-img-top my_image" alt="{{ $beer->name }}">
        </div>
        <div class="card-body">
          <h2 class="card-title mb-3">{{ $beer->name }}</h2>
          <p class="card-text">Price: $ {{ number_format($beer->price, '2', ',', '.') }}</p>
          <p class="card-text">Rating: {{ $beer->rating }}</p>
          <a href="{{ route('beers.index') }}" class="btn btn-success">Back</a>
        </div>
    </div>
</div>


@endsection
