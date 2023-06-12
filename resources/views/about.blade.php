@extends('layouts.main')

@section('container')
<style>
    body{}
</style>
<h1 class="">ABOUT US</h1>
<hr>
<h3 class="text-center">HISTORY of PANTHEGIFT</h3>
<div class="text-center pt-3 pb-3">
    <img src="image/panthegift.jpeg" class="text-center" height="300px" width="300px" style="border-radius: 50%">
</div>
<p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat quae aspernatur atque nihil deleniti, ipsa enim reprehenderit adipisci odio laboriosam ipsum obcaecati modi ratione, iure neque, aut odit maiores incidunt. Veniam quas tempora dolor. Reprehenderit, vitae fuga, quis at repellendus ipsum facilis distinctio, id eligendi non doloribus? Nobis blanditiis mollitia labore laboriosam maxime ut a ex id deserunt veritatis placeat sapiente aut quasi accusamus asperiores sequi, quae distinctio, temporibus nulla dignissimos at. Laudantium, aspernatur temporibus ducimus quo fugiat unde excepturi assumenda odio nam nesciunt perspiciatis eligendi et libero praesentium! Dolore, aperiam facilis beatae numquam excepturi pariatur ducimus doloremque amet tempora.
</p>
<hr>
<h3 class="text-center">OUR TEAM</h3>
      <div class="row hidden-md-up">
        @foreach ($about as $team)
            <div class="col-md-4">
                <div class="">
                    <div class="card-block">
                    <div class="d-flex justify-content-center">
                        <img src="{{ $team['image'] }}" alt="" height="250px" width="250px" style="border-radius:50%">
                    </div>
                    <h5 class="card-title text-center" style="margin-top: 10px">{{ $team['name'] }}</h5>
                    <div class="d-flex justify-content-center gap-2 rounded" style="font-size: 20px">
                        <a href="{{ $team['instagram'] }}" style="color:black;"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $team['whatsapp'] }}" style="color:black;"><i class="bi bi-whatsapp"></i></a>
                        <a href="{{ $team['github'] }}" style="color:black;"><i class="bi bi-github"></i></a>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>


@endsection
