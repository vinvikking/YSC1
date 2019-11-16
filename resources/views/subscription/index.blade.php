@extends('coreui::master')

@section('breadcrumb')
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/subscription">Abonnement</a></li>
    </ol>
@endsection



@section('body')
		
	<div class="row">
  <div class="col-sm-2">
    <div class="callout callout-info b-t-1 b-r-1 b-b-1">
      <small class="text-muted">Aantal influencers</small><br>
      <strong class="h4">9,123</strong>
    </div>
  </div><!--/.col-->
  <div class="col-sm-2">
    <div class="callout callout-danger b-t-1 b-r-1 b-b-1">
      <small class="text-muted">Totaal campagnes</small><br>
      <strong class="h4">22,643</strong>
    </div>
  </div><!--/.col-->
  <div class="col-sm-2">
    <div class="callout callout-warning b-t-1 b-r-1 b-b-1">
      <small class="text-muted">Profielviews</small><br>
      <strong class="h4">78,623</strong>
    </div>
  </div><!--/.col-->
  <div class="col-sm-2">
    <div class="callout callout-success b-t-1 b-r-1 b-b-1">
      <small class="text-muted">Bereik</small><br>
      <strong class="h4">49,123</strong>
    </div>
  </div><!--/.col-->
  <div class="col-sm-2">
    <div class="callout b-t-1 b-r-1 b-b-1">
      <small class="text-muted">Succes rate</small><br>
      <strong class="h4">23%</strong>
    </div>
  </div><!--/.col-->
  <div class="col-sm-2">
    <div class="callout callout-primary b-t-1 b-r-1 b-b-1">
      <small class="text-muted">Bounce Rate</small><br>
      <strong class="h4">5%</strong>
    </div>
  </div><!--/.col-->
</div><!--/.row-->






<div class="card">
  <div class="card-header"> 
    <div class="card-body">
      <div class="card">
        <div class="px-4 py-2">
            <h3 style="color: #20a8d8; text-align: center;"><b>Abbonementen</b></h3>
              <hr>
        </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <img class="card-img-top" src="https://via.placeholder.com/300x180" alt="Card image cap">
                  <hr>
                    <p class="card-text">You can also use headers like this image!</p>
                    <a href="#" class="btn btn-primary">Abboneren</a>
                </div>
                <div class="card-footer">
                    Cards can even have footers
                </div>
            </div>
        </div>
        <div class="col-md-4">
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
        <div class="col-md-4">
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
        </div>
      </div>
    </div>
  </div>
</div>
</div>

















	   <div class="card">
        <div class="card-header"> 
           	<div class="card-body">
           		<div class="card">
          			 <form action="{{route('subscription.store')}}" method="POST">
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
           <button class="btn btn-success mt-3 mb-3 mr-2 float-right" type="submit">Creëer rapportage</button>
           <a class="btn btn-danger mt-3 mb-3 mr-2 float-right" href="{{route('subscription.index')}}">Annuleren</a>

       </form>
           		</div>
           	</div>
          </div>
        </div>

@endsection

