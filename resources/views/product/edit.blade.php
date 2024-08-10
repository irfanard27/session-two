@extends('layouts.main')
@section('content')
  <div>
    <h1>Edit Product</h1>

    <div>
      <form action="{{ route('product.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        @include('product._form')

      </form>
    </div>
  </div>
@endsection
