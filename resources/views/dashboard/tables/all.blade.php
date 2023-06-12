<table class="table table-striped-columns">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)      
      <tr>
        <th>{{ request('page') > 1 ? $loop->iteration+5*(request('page')-1) : $loop->iteration}}</th>
        <td>{{ $product->title }}, ini id: {{ $product->id }}</td>
        <td>{{ $product->category->name }}</td>
        <td>Rp {{ $product->price }}</td>
        <td>
          <a class="btn btn-warning" href="#"><i height="15px" width="15px" data-feather="edit"></i></a>
          <form action="/dashboard/{{ $product->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this product?')"><i height="15px" width="15px" data-feather="trash"></i></button>
          </form>
          <a class="btn btn-primary" href="/products/{{ $product->slug }}"><i height="15px" width="15px" data-feather="eye"></i></a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<div class="d-flex justify-content-center">
  {{ $products->links() }}
</div>