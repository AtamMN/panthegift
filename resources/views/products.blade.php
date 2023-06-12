@extends('layouts.main')

@section('container')
    <h2 class="mb-5">{{ $title }} <spam><a href="#" data-toggle="modal" data-target="#exampleModal"><i data-feather="shopping-cart"></i></a></spam></h2>
    @if($products->count())
        @if($products->count() > 2)        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://source.unsplash.com/1200x400?{{ $products[0]->category->name }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block" style="max-height:50%; background-color: rgba(0, 0, 0, 0.7)">
                        <h5>{{ $products[0]->title }} <small><a href="/categories/{{ $products[0]->category->slug }}"></a> {{ $products[0]->category->name }}</small></h5>
                        <p><b>Rated: {{ $products[0]->rating->score }}/5</b> - {!! $products[0]->excerpt !!}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1200x400?{{ $products[1]->category->name }}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7)">
                        <h5>{{ $products[1]->title }} <small><a href="/categories/{{ $products[1]->category->slug }}"></a> {{ $products[1]->category->name }}</small></h5>
                        <p><b>Rated: {{ $products[1]->rating->score }}/5</b> - {!! $products[1]->excerpt !!}</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://source.unsplash.com/1200x400?{{ $products[2]->category->name }}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7)">
                        <h5>{{ $products[2]->title }} <small><a href="/categories/{{ $products[2]->category->slug }}"></a> {{ $products[2]->category->name }}</small></h5>
                        <p><b>Rated: {{ $products[2]->rating->score }}/5</b> - {!! $products[2]->excerpt !!}</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="mt-5">
            <div class="row">
                @foreach ($products->skip(3) as $product)     
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img src="https://source.unsplash.com/500x500?{{ $product->category->name }}" class="card-img-top" alt="{{ $product->category->name }}">
                            <div class="card-body">
                                <h4 class="card-title"><a href="/products/{{ $product->slug }}" class="text-decoration-none text-dark text-bold">{{ $product->title }}</a></h4>
                                <p><a href="/products?category={{ $product->category->slug }}">{{ $product->category->name }}</a></p>
                                <p class="card-text">ratings: {{ $product->rating->score }}/5</p>
                                <p>Rp {{ $product->price }}</p>
                                {{-- <form action="{{ url('products/addcart'), $product->id }}" method="post">
                                    @csrf
                                    <button type="submit" href="#" class="btn btn-outline-primary" id="addCart">Add To Cart</button>
                                </form> --}}
                                <a href="#" data-toggle="modal" data-target="#{{ $product->slug }}" class="btn btn-primary">Buy Now!</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endif
        @if ($products->count() < 3)
            <div class="mt-5">
                <div class="row">
                    @foreach ($products as $product)     
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <img src="https://source.unsplash.com/500x500?{{ $product->category->name }}" class="card-img-top" alt="{{ $product->category->name }}">
                                <div class="card-body">
                                    <h4 class="card-title"><a href="/products/{{ $product->slug }}" class="text-decoration-none text-dark text-bold">{{ $product->title }}</a></h4>
                                    <p><a href="/products?category={{ $product->category->slug }}">{{ $product->category->name }}</a></p>
                                    <p class="card-text">ratings: {{ $product->rating->score }}/5</p>
                                    <p>Rp {{ $product->price }}</p>
                                    {{-- <form action="{{ url('products/addcart'), $product->id }}" method="post">
                                        @csrf
                                        <button type="submit" href="#" class="btn btn-outline-primary" id="addCart">Add To Cart</button>
                                    </form> --}}
                                    <a href="#" data-toggle="modal" data-target="#{{ $product->slug }}" class="btn btn-primary">Buy Now!</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif    
    @else
        <h1 class="text-center">No Product Available.</h1>
    @endif
    
    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
@endsection

@foreach ($products as $product)    
    <div class="modal fade" id="{{ $product->slug }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Order?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td>1</td>
                  </tr>
                </tbody>
            </table>
            <h6>Total Price: Rp {{ $product->price }} </h6>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="
                https://api.whatsapp.com/send?phone=62818811075&text=*Konfirmasi%20Order%3A*%0A*Produk%3A%20*%20{{ $product->title }}%0A*Jumlah%3A%20*%202%0A*Total%20Harga%3A%20_Rp%20{{ $product->price }}_*%0A
                " type="button" class="btn btn-primary">Order</a>
            </div>
        </div>
    </div>
    </div>
@endforeach
