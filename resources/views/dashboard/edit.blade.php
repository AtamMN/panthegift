@extends('dashboard.layouts.main')

@section('container')
  <div class="col-lg-8">
    <form method="post" action="/dashboard/{{ $product->id }}">
      @method('put')
      @csrf
      <h1 class="pb-3 mb-3 border-bottom">Edit Products</h1>
      <div class="mb-3">
        <label for="title" class="form-label">Product Name</label>
        <input required value="{{ old('title', $product->title) }}" autofocus type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="new product name">
        @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input required value="{{ old('slug', $product->slug) }}" type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="new-product-name">
        @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select class="form-select" name="category_id" id="category">
          @foreach ($categories as $category)
            @if ( old('category_id', $product->category_id) == $category->id)
              <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
              @else
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
          @endforeach
        </select>
        @error('category')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
      <div class="mb-3">
        <label for="title" class="form-label">Price</label>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Rp</span>
          <input required type="number" value="{{ old('price', $product->price) }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="20000"/>
        </div>
        @error('price')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="desc" class="form-label">Description</label>
        <textarea required value="{!! old('desc', $product->desc) !!}" class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc" rows="3"></textarea>
        @error('desc')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" >Save changes</button>
      </div>
    </form>
  </div>
@endsection

@include('dashboard.modals.create')

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/{{ $product->id }}/editcheckSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });
</script>
 