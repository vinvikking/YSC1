@extends('coreui::master')

@section('title', 'Home')
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
</ol>
@endsection

@section('body')
    <p>See the <a href="https://coreui.io/docs/getting-started/introduction/" target="_blank">official CoreUI docs</a> to see how to build your amazing app!</p>

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

