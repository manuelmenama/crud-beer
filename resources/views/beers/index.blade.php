@extends('layouts.main')

@section('content')

<a href="" class="btn btn-success">New</a>

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
                    <a href="" class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
                    <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </td>
          </tr>
        @empty
            <h2>Non ci sono birre</h2>
        @endforelse
    </tbody>
</table>

@endsection
