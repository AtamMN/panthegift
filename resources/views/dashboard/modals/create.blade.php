<form action="/dashboard" method="post">
  @csrf
  <div class="modal fade" style="max-height:100vh" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Product</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="overflow-y: auto; max-height:400px">
          <div class="mb-3">
            <label for="title" class="form-label">Product Name</label>
            <input required value="{{ old('title') }}" autofocus type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="new product name">
            @error('title')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input required value="{{ old('slug') }}" type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="new-product-name">
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
                @if ( old('category_id') == $category->id)
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
              <input required type="number" value="{{ old('price') }}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="20000"/>
            </div>
            @error('price')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="desc" class="form-label">Description</label>
            <textarea required value="{{ old('desc') }}" class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc" rows="3"></textarea>
            @error('desc')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" >Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });
</script>