@extends('layouts.main')
@section('content')
  <div>
    <h1>Create Product</h1>

    <div>
      <form action="{{ $route }}" method="POST">
        @csrf

        @include('product._form')

      </form>
    </div>
  </div>
@endsection
