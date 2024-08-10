@extends('layouts.main')
@section('content')
  <div>
    <a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $category)
          <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
              <a href="{{ route('category.edit', $category->id) }}" class="btn btn-warning">Edit</a>
              <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display: inline-block">
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
