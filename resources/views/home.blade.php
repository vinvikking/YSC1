@extends('coreui::master')

@section('title', 'Home')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
</ol>
@endsection

@section('body')

<div class="row">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/pexels-photo-122383.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">You can also use headers like this image!</p>
                    <a href="#" class="btn btn-primary">Chat Influencers</a>
                </div>
                <div class="card-footer">
                    Cards can even have footers
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/instagram-social-media-web-pages-internet-163141.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">You can also use headers like this image!</p>
                    <a href="#" class="btn btn-primary">Chat Influencers & Business</a>
                </div>
                <div class="card-footer">
                    Cards can even have footers
                </div>
            </div>
        </div>
         <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ asset('images/pexels-photo-389734.jpeg') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">You can also use headers like this image!</p>
                    <a href="#" class="btn btn-primary">Chat Business</a>
                </div>
                <div class="card-footer">
                    Cards can even have footers
                </div>
            </div>
        </div>
    </div>

<!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block" src="{{ asset('images/instagram-social-media-web-pages-internet-163141.jpeg') }}" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
          </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/pexels-photo-122383.jpeg') }}"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/pexels-photo-389734.jpeg') }}" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
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
</div> -->


    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="https://via.placeholder.com/300x180" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">You can also use headers like this image!</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                <div class="card-footer">
                    Cards can even have footers
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Alarming title</h5>
                    <p class="card-text">You can use a couple of color classes to make your cards more visually appealing too!</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-danger mb-3">
                <div class="card-header">Danger card</div>
                <div class="card-body text-danger">
                    <p class="card-text">Or make use of some slightly less intense coloring, which can convey your intentions well enough too.</p>
                </div>
            </div>
        </div>
    </div>
@stop

