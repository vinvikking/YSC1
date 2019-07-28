@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/influencers ">Influencers</a></li>
    </ol>
@endsection



@section('body')
		
	
	   <div class="card">
        <div class="card-header"> 
           	<div class="card-body">
           		<div class="card">
          			<a class="btn btn-primary" href="{{route('influencers.create')}}">create</a>	
           		</div>
           	</div>
          </div>
        </div>

@endsection

