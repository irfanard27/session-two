@extends('layouts.main')
@section('content')
  <div>
    {{-- make create product btn with bootstrap --}}
    <a href="{{ route('product.create') }}" class="btn btn-primary">Create Product</a>

    {{-- make table with bootstrap --}}

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Price</th>
          <th>Category</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $product)
          <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->category->name }}</td>
            <td>
              <a href="{{ route('product.edit', $product->id) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display: inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
  </div>
@endsection
