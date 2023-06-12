<style>
    .reveal{
  position: relative;
  transform: translateY(150px);
  opacity: 0;
  transition: 1s all ease;
}

.reveal.active{
  transform: translateY(0);
  opacity: 1;
}
</style>

@extends('layouts.main')


@section('container')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="1000">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="image/bunga1.png" alt="First slide" height="500px" width="250px">
                <div class="carousel-caption d-none d-md-block" style="max-height:50%; background-color: rgba(0, 0, 0, 0.7)">
                    <h5>Bucket<small><a href=""></a></small></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/bunga2.png" alt="First slide" height="500px" width="250px">
                <div class="carousel-caption d-none d-md-block" style="max-height:50%; background-color: rgba(0, 0, 0, 0.7)">
                    <h5>Trophy<small><a href=""></a></small></h5>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="image/bunga3.png" alt="First slide" height="500px" width="250px">
                <div class="carousel-caption d-none d-md-block" style="max-height:50%; background-color: rgba(0, 0, 0, 0.7)">
                    <h5>Baloon<small><a href=""></a></small></h5>

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


    <div class="row pt-5 reveal">
      <div class="col-sm" style="font-size: 30px">
        <h1>PANTHEGIFT</h1>
        <span style="">
            is a brand specializing in the sale of trophy buckets and balloon buckets. We are dedicated to providing high-quality products that cater to various occasions and celebrations. Our range of trophy buckets offers an elegant and stylish option for commemorating achievements and honoring accomplishments. Crafted with precision and attention to detail, these trophy buckets are designed to make a lasting impression.
        </span>
      </div>
      <div class="col-sm ta-center" >
            <img src="image/home1.jpeg" alt="" height="100%" width="100%" style=" opacity: 0.5;">
      </div>
    </div>
    <div class="row pt-5 reveal">
        <div class="col-sm ta-center" >
              <img src="image/home2.jpeg" alt="" height="100%" width="100%" style=" opacity: 0.5;">
        </div>
        <div class="col-sm" style="font-size: 30px">
          In addition to trophy buckets, PANTHEGIFT also offers a wide selection of balloon buckets. These creative and unique buckets are perfect for adding a touch of joy and festivity to any event or party. Whether you are celebrating a birthday, anniversary, or special occasion, our balloon buckets will enhance the atmosphere and create memorable experiences.
        </div>
    </div>

    <div class="row pt-5 reveal">
        <div class="col-sm" style="font-size: 30px">
          At PANTHEGIFT, we prioritize customer satisfaction and strive to exceed expectations. Our commitment to quality extends beyond our products to include exceptional customer service. We aim to provide a seamless shopping experience, ensuring that every customer finds the perfect bucket that meets their needs.
        </div>
        <div class="col-sm ta-center" >
              <img src="image/home3.jpeg" alt="" height="100%" width="100%" style=" opacity: 0.5;">
        </div>
    </div>
    <div class="text-center pt-5 pb-10 reveal" style="font-size: 30px">
        Choose PANTHEGIFT for your trophy bucket and balloon bucket needs and discover the perfect blend of style, quality, and celebration. Let us help you create unforgettable moments with our exquisite range of products.
    </div>

<script>
    function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
        } else {
        reveals[i].classList.remove("active");
        }
    }
    }

    window.addEventListener("scroll", reveal);

</script>

@endsection

