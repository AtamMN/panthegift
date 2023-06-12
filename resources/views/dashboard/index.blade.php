@extends('dashboard.layouts.main')

@section('container')
  <h1 class="pb-3 mb-3 border-bottom">Welcome to Dashboard, {{ auth()->user()->name }}!</h1>
  <div class="container">
    <h3>My Products 
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
        <i data-feather="plus-circle"></i>
      </button>
    </h3>
    @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    @include('dashboard.tables.all')
  </div>
  {{-- <div class="container">
    <h3>Transactions</h3>
    @include('dashboard.tables.all')
  </div> --}}
@endsection

@include('dashboard.modals.create')
