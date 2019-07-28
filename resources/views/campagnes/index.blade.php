@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/influencers ">Campagnes</a></li>
    </ol>
@endsection



@section('body')
		
	
	   <div class="card">
        <div class="card-header"> 
           	<div class="card-body">
           		<div class="card">
          			 <form action="{{route('campagnes.store')}}" method="POST">
           @csrf
           <div class="p-4">
            <div class="px-4 py-2">
            <h5><b>Reden</b><span class="badge badge-danger ml-2">Verplicht</span></h5>
               <input type="text" class="form-control" name="reden" placeholder="Reden">
           </div>
           @if ($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                       @endforeach
                   </ul>
               </div>
           @endif
           <button class="btn btn-success mt-3 mb-3 mr-2 float-right" type="submit">Creëer aanmelding</button>
           <a class="btn btn-danger mt-3 mb-3 mr-2 float-right" href="{{route('campagnes.index')}}">Annuleren</a>

       </form>
           		</div>
           	</div>
          </div>
        </div>

@endsection

