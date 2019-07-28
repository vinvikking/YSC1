@extends('layouts.app')

@section('breadcrumb')
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/influencers ">Influencers</a></li>
    <li class="breadcrumb-item active" aria-current="page">Nieuwe Influencer</li>
    </ol>
@endsection



@section('content')
		
 <div class="container">
	   <div class="card">
           	<div class="card-body">
           		<div class="card">
          		  
                <div class="card-header">
                  <h5 class="form-inline float-left pt-2"><i class="fas fa-plus mr-2"></i> Nieuwe Influencer aanmaken</h5>
                    <br>
                    <hr>

                      <form action="{{route('influencers.store')}}" method="POST">
                       @csrf

                    <div class="row">
                        <div class="col-md-6 px-4 py-2">
                        <h5><b>Voornaam</b><span class="badge badge-danger ml-2">Verplicht</span></h5>
                           <input type="text" class="form-control" name="Voornaam" placeholder="Voornaam" required>
                       </div>


                        <div class="col-md-6 px-4 py-2">
                        <h5><b>Achternaam</b><span class="badge badge-danger ml-2">Verplicht</span></h5>
                           <input type="text" class="form-control" name="Voornaam" placeholder="Voornaam" required>
                       </div>
                    </div>





                       <button class="btn btn-success mt-3 mb-3 mr-2 float-right" type="submit">Aanmaken</button>
                       <a class="btn btn-danger mt-3 mb-3 mr-2 float-right" href="{{route('influencers.index')}}">Annuleren</a>

                   </form>
                </div>

           		</div>
           	</div>
          </div>
        </div>
@endsection

