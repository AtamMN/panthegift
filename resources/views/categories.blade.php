@extends('layouts.main')

@section('container')
    <h2 class="mb-5">All Categories</h2>

    @foreach ($categories as $category)            
      <ul>
        <li>
          <h4><a href="/products?category={{ $category->slug }}">{{ $category->name }}</a></h4>
        </li>
      </ul>
    @endforeach

@endsection