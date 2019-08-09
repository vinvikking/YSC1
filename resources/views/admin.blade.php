@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/influencers ">Admin Panel</a></li>
    </ol>
@endsection



@section('body')
		
	
	   <div class="card">
        <div class="card-header"> 
           	<div class="card-body">
           		<div class="card">
          			<a class="btn btn-primary" href="{{route('influencers.create')}}">Influencers test</a>	
           		</div>
           	</div>
          </div>
        </div>

@endsection

