{{-- make create like product create --}}
@extends('layouts.main')
@section('content')
  <div>
    <h1>Create Category</h1>

    @include('category._form')
  </div>
@endsection
