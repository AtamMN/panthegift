@extends('dashboard.layouts.main')

@section('container')
  <h1 class="pb-3 mb-3 border-bottom">Welcome to your Orders Page, {{ auth()->user()->name }}!</h1>
  <div class="container">
    <h3>My Orders
      <a type="button" class="btn btn-primary" href="/products">
        <i data-feather="plus-circle"></i>
      </a>
    </h3>
    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
  </div>
  {{-- <div class="container">
    <h3>Transactions</h3>
    @include('dashboard.tables.all')
  </div> --}}
@endsection
