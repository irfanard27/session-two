@extends('layouts.main')
@section('content')
  <div>
    <a href="{{ route('price.create') }}" class="btn btn-primary">Create price</a>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Selling Price</th>
          <th>Price</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $price)
          <tr>
            <td>{{ $price->id }}</td>
            <td>{{ $price->selling_price }}</td>
            <td>{{ $price->price }}</td>
            <td>
              <a href="{{ route('price.edit', $price->id) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('price.destroy', $price->id) }}" method="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
