@extends('layouts.templates.show')

@section('page_title')
    Gebruiker {{$influencer->user->naam}}
@endsection

<<<<<<< HEAD
@section('page_title', 'Campagne tonen')
=======
@section('show_type', 'Gebruiker')
>>>>>>> 21904c263aa023b1d5c7dcc34e7066de826d1153

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('influencers.index')}}">Gebruiker</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gebruikers Instellingen</li>
    </ol>
@endsection

@section('edit_link')
    {{url('/influencers')}}/{{$influencer->id}}/edit
@endsection

@section('delete_link')
    {{url('/influencers')}}/{{$influencer->id}}
@endsection

@section('delete_text')
    de gebruiker {{$influencer->voornaam}}
@endsection

@section('card_body')
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
<<<<<<< HEAD
            <a class="nav-link active" id="campaigndata-tab" data-toggle="tab" href="#campaigninfo" role="tab" aria-controls="campaigninfo" aria-selected="true"><i class="far fa-address-card"></i>&nbsp;Algemeen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="campaigndetail-tab" data-toggle="tab" href="#campaigndetails" role="tab" aria-controls="campaigndetails" aria-selected="false"><i class="fas fa-chart-line"></i>&nbsp;Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="campaigninfluencers-tab" data-toggle="tab" href="#campaigninfluencers" role="tab" aria-controls="campaigninfluencers" aria-selected="false"><i class="fas fa-bullseye"></i>&nbsp;Ingeschreven influencers</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <!--------------------------------------------------------------basisgegevens tab------------------------------------------------------------------------->
        <div class="tab-pane active" id="campaigninfo" role="tabpanel" aria-labelledby="campaigninfo-tab"><div class="d-flex">
        <div class="flex-fill">
        <div class="d-flex">
            {{--Column 1--}}
            <div class="d-flex flex-fill flex-column">
                <div class="pr-2">
                         <div class="d-flex flex-column mb-3">
                        <h5>Titel campagne</h5>
                        <i>{{$campagne->title}}</i>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <h5>Locatie campagne</h5>
                        <i>{{$campagne->postal_code}},{{$campagne->city}}</i>
                   </div>
                   <div class="d-flex flex-column mb-3">
                        <h5>Startdatum campagne</h5>
                        <i>{{$campagne->startDateTime}}</i>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <h5>Einddatum campagne</h5>
                        <i>{{$campagne->endDateTime}}</i>
                    </div>
=======
            <a class="nav-link active" id="basisgegevens-tab" data-toggle="tab" href="#basisgegevens" role="tab" aria-controls="basisgegevens" aria-selected="true"><i class="far fa-address-card"></i>&nbsp;Campagne Gegevens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Influencer-tab" data-toggle="tab" href="#influencer" role="tab" aria-controls="influencer" aria-selected="false"><i class="fas fa-chart-line"></i>&nbsp;Ingeschreven Influencers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="doelen-tab" data-toggle="tab" href="#doelen" role="tab" aria-controls="doelen" aria-selected="false"><i class="fas fa-chart-line"></i>&nbsp;Beschrijving</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="doelen-tab" data-toggle="tab" href="#doelen" role="tab" aria-controls="doelen" aria-selected="false"><i class="fas fa-bullseye"></i>&nbsp;Persoonlijke gegevens</a>
        </li>
    </ul>

<!-- Tab panes -->
    <div class="tab-content">
        <!--------------------------------------------------------------basisgegevens tab------------------------------------------------------------------------->
        <div class="tab-pane active" id="basisgegevens" role="tabpanel" aria-labelledby="basisgegevens-tab"><div class="d-flex">
                <div class="flex-fill">
                    <div class="d-flex flex-column mb-3">
                        <h5>Naam</h5>
                        <i>{{$influencer->user->name}}</i>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <h5>Huidige Email adress</h5>
                        <i>{{$influencer->user->email}}</i>
                   </div>
                    <div class="d-flex flex-column mb-3">
                        <h5>Aantal ingeschreven campagnes</h5>
                    </div>
                </div>
            </div>
        </div>
>>>>>>> 21904c263aa023b1d5c7dcc34e7066de826d1153

                    </div>
                </div>

<<<<<<< HEAD
                    {{--Column 2--}}
                    <div class="d-flex flex-fill flex-column">
                        <div class="pl-2">
                            <div class="d-flex flex-column mb-3">
                                <h5>Contactpersoon campagne</h5>
                                <i>{{$campagne->contact_name}}</i>
                           </div>
                            <div class="d-flex flex-column mb-3">
                                <h5>Telefoonnummer contactpersoon</h5>
                                <i>{{$campagne->contact_phone}}</i>
                           </div>
                            <div class="d-flex flex-column mb-3">
                                <h5>Telefoonnummer b.g.g.</h5>
                                <i>{{$campagne->contact_phone2}}</i>
                           </div>
                            <div class="d-flex flex-column mb-3">
                                <h5>Emailadres contactpersoon</h5>
                                <i>{{$campagne->contact_email}}</i>
                           </div>
                        </div>
                    </div>
                  </div>
=======
        <div class="tab-pane" id="influencer" role="tabpanel" aria-labelledby="Influencer-tab">
            <div class="d-flex">
                <div class="flex-fill mb-3">
                    <h5>Instagram gebruikersnaam</h5>
                    <p>{{$influencer->instagram_name}}</p>
                    <span class="clearfix"></span>
                        <h6 class="font-weight-bolder">Statestieken</h6>
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th class="w-25">Volgers</th>
                                <th class="w-75">Telefoonnummer</th>
                            </tr>
                                
                                    <td>{{$influencer->volgers}}</td>
                                    <td>{{$influencer->telefoonnummer}}</td>
                            </thead>
                        </table>
                
>>>>>>> 21904c263aa023b1d5c7dcc34e7066de826d1153
                </div>
            </div>
        </div>

<<<<<<< HEAD

        <div class="tab-pane" id="campaigndetails" role="tabpanel" aria-labelledby="campaigndetails-tab">


        </div>

                <div class="tab-pane" id="campaigninfluencers" role="tabpanel" aria-labelledby="campaigninfluencers-tab">
            <div class="d-flex">
                <div class="flex-fill mb-3">

                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th class="w-25">Insta-id</th>
                                <th class="w-75">Aantal Volgers</th>
                            </tr>
                                
                                    <td>Verder te developen</td>
                                    <td>fdsgsdfsdfsdfgdfsg</td>
                            </thead>
                        </table>
                
                </div>
            </div>
        </div>
=======
    </div>


>>>>>>> 21904c263aa023b1d5c7dcc34e7066de826d1153

    </div>

                    <a class="btn btn-sm btn-success font-weight-bolder mt-3" href="{{route('campagnes.edit', $campagne->id)}}"><i class="fas fa-plus" tabindex="10"></i>&nbsp;Campagne aanpassen</a>
        <a class="btn btn-sm btn-danger font-weight-bolder mt-3" href="{{route('campagnes.index')}}" tabindex="11"><i class="fas fa-times"></i>&nbsp;Terug naar index</a>




    @push('js')
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function(i){
                // Check for anchor and click tab
                let hash = window.location.hash;
                $('#myTab li a').each(function() {
                    if (hash === '#' + this.hash.substr(1)) {
                        $('#' + this.id).trigger( "click" )
                    }
                });

<<<<<<< HEAD
    </script>
    @endpush
@endsection
=======
    @push('js')
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
        <script>
            $(document).ready(function(i){
                // Check for anchor and click tab
                let hash = window.location.hash;
                $('#myTab li a').each(function() {
                    if (hash === '#' + this.hash.substr(1)) {
                        $('#' + this.id).trigger( "click" )
                    }
                });

    </script>
    @endpush
    
@endsection
>>>>>>> 21904c263aa023b1d5c7dcc34e7066de826d1153
