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
            <h2 style="color: #20a8d8; text-align: center;"><b>Abbonementen</b></h2>
              <hr>
        </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="box-shadow: 5px 10px 5px grey;">
              <div class="card-body">
                <img class="card-img-top" src="{{asset('images/business.png') }}" style="width: 80%; max-width:600px; margin-left: 10%;" alt="Business Analytics">
                  <hr>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Geniet van advertentievrije muziek</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Family Mix: een playlist voor</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> 6 Premium-accounts voor gezinsleden</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Geniet van advertentievrije muziek</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Family Mix: een playlist voor</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> 6 Premium-accounts voor gezinsleden</p>
                  <hr>
                    <h4 style="color: #20a8d8; text-align: center;"><b>Business Analytics</b></h4>
                    <p  style="text-align: center;"><b>€9,99 / maand</b></p>    
                </div>
                <div class="card-footer" style="text-align: center;">
                    <a href="#" class="btn btn-primary">Abboneren</a>
                    <p style="font-size: 10px; margin-top: 5px;"><i>Er zijn gebruiksvoorwaarden van toepassing.</i></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="box-shadow: 5px 10px 5px grey;">
              <div class="card-body">
                <img class="card-img-top" src="{{asset('images/business.png') }}" style="width: 80%; max-width:600px; margin-left: 10%;" alt="Business Analytics">
                  <hr>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Geniet van advertentievrije muziek</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Family Mix: een playlist voor</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> 6 Premium-accounts voor gezinsleden</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Geniet van advertentievrije muziek</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Family Mix: een playlist voor</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> 6 Premium-accounts voor gezinsleden</p>
                  <hr>
                    <h4 style="color: #20a8d8; text-align: center;"><b>Business Analytics</b></h4>  
                    <p  style="text-align: center;"><b>€9,99 / maand</b></p>     
                </div>
                <div class="card-footer" style="text-align: center;">
                    <a href="#" class="btn btn-primary">Abboneren</a>
                    <p style="font-size: 10px; margin-top: 5px;"><i>Er zijn gebruiksvoorwaarden van toepassing.</i></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="box-shadow: 5px 10px 5px grey;">
              <div class="card-body">
                <img class="card-img-top" src="{{asset('images/business.png') }}" style="width: 80%; max-width:600px; margin-left: 10%;" alt="Business Analytics">
                  <hr>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Geniet van advertentievrije muziek</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Family Mix: een playlist voor</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> 6 Premium-accounts voor gezinsleden</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Geniet van advertentievrije muziek</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> Family Mix: een playlist voor</p>
                  <p style=" margin-bottom: 0.5rem;"><i class="fas fa-check"></i> 6 Premium-accounts voor gezinsleden</p>
                  <hr>
                    <h4 style="color: #20a8d8; text-align: center;"><b>Business Analytics</b></h4>  
                    <p  style="text-align: center;"><b>€9,99 / maand</b></p>     
                </div>
                <div class="card-footer" style="text-align: center;">
                    <a href="#" class="btn btn-primary">Abboneren</a>
                    <p style="font-size: 10px; margin-top: 5px;"><i>Er zijn gebruiksvoorwaarden van toepassing.</i></p>
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

