@extends('layouts.main')

@section('container')
  <img src="https://source.unsplash.com/500x500?{{ $product->category->name }}" alt="{{ $product->category->name }}">
  <h2>{{ $product->title }}</h2>
  <h5><a href="/products?{{ $product->category->slug }}">{{ $product->category->name }}</a></h5>
  {!! $product->desc !!}

  <a href="/products">back</a>
@endsection