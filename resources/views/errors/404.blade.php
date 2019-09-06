@extends('coreui::master')

@section('title', 'Error: 404')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Error: 404</li>
    </ol>
@endsection

@section('body')
<div class="d-flex justify-content-center">
    <div class="d-flex flex-column"> 
        <div class="text-center">
<<<<<<< HEAD
        <img class="p-2" src="{{secure_asset('images/404.png')}}" height="400" width="320">
=======
        <img class="p-2" src="{{secure_asset('images/pexels-photo-122383.jpeg') }}" height="400" width="320">
>>>>>>> 2d2f256842d5d186a0c2c508a17134eb65485cb2
        </div>
        <h1 class="p-2 text-center"> Error: 404</h1>
        <h3 class="p-2 text-center"> Hmm, ik kon deze pagina niet vinden. Wellicht een verkeerde url getypt? </h3>
        <h3 class="p-2 text-center"> Ga naar <a href="{{route('home')}}"> De home pagina</a></h3> 
        <h3 class="p-2 text-center"> <b>of</b> </h3> 
        <h3 class="p-2 text-center"> probeer contact op te nemen met Your Social Connect als u denk dat dit een fout is.</h3>
    </div>
</div>

@endsection