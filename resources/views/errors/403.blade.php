@extends('coreui::master')

@section('title', 'Error: 403')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Error: 403</li>
    </ol>
@endsection

@section('body')
<div class="d-flex justify-content-center">
    <div class="d-flex flex-column"> 
        <div class="text-center">
        <img class="p-2" src="{{asset('images/pexels-photo-122383.jpeg') }}" height="400" width="320">
        </div>
        <h1 class="p-2 text-center"> Error: 401</h1>
        <h3 class="p-2 text-center"> Verboden! U begeeft zich op glad ijs. U bent niet bevoegd deze pagina te bekijken. </h3>
        <h3 class="p-2 text-center"> Ga naar <a href="{{route('home')}}"> De home pagina</a></h3> 
        <h3 class="p-2 text-center"> <b>of</b> </h3> 
        <h3 class="p-2 text-center"> probeer contact op te nemen met Your Social Connect als u denk dat dit een fout is.</h3>
    </div>
</div>

@endsection