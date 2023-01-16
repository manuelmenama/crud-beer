@extends('layouts.main')

@section('content')

@if(session('deleted'))
    <div class="alert alert-info" role="alert">
        {{ session('deleted') }}
    </div>
@endif

<a href="{{ route('beers.create')}}" class="btn btn-success">New</a>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($beers as $beer)
            <tr>
                <td>{{ $beer->id }}</td>
                <td>{{ $beer->name }}</td>
                <td>$ {{ number_format($beer->price, '2', ',', '.') }}</td>
                <td>
                    <a href="{{ route('beers.show', $beer) }}" class="btn btn-primary"><i class="fa-solid fa-eye text-white"></i></a>
                    <a href="{{route('beers.edit')}}" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                    @include('partials.form-delete')

                    

                </td>
          </tr>
        @empty
            <h2>Non ci sono birre</h2>
        @endforelse
    </tbody>
</table>

@endsection
