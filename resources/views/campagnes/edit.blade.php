
@extends('layouts.templates.edit')

@section('page_title', 'Campagne aanpassen')

@section('breadcrumb')
    <ol class='breadcrumb'>
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('campagnes.index')}}">Campagnes</a></li>
        <li class="breadcrumb-item active" aria-current="page">Campagne aanpassen</li>
    </ol>
@endsection


@section('card_body')
    <form action="{{route('campagnes.index')}}" method="POST">
        @csrf
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
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
                        <label for="title">Titel Campagne&nbsp;<span class="badge badge-danger">verplicht</span></label>
                    <input type="text" id="title" class="form-control mb-2" name="title" placeholder="Vul hier een waarde in" value="{{$campagne->title}}" tabindex="1" required>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label for="location">Locatie campagne&nbsp;<span class="badge badge-danger">verplicht</span></label>
                    <input type="text" id="location" class="form-control mb-2" name="location" value="{{$campagne->postal_code}},{{$campagne->city}}" tabindex="1" required>
                   </div>
                   <div class="d-flex flex-column mb-3">
                    <label for="startDateTime">Startdatum campagne&nbsp;<span class="badge badge-danger">verplicht</span></label>
                    <input type="text" id="startDateTime" class="form-control mb-2" name="startDateTime" value="{{$campagne->startDateTime}}" tabindex="1" required>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label for="endDateTime">Einddatum campagne&nbsp;<span class="badge badge-danger">verplicht</span></label>
                    <input type="text" id="endDateTime" class="form-control mb-2" name="endDateTime" value="{{$campagne->endDateTime}}" tabindex="1" required>
                    </div>

                    </div>
                </div>

                    {{--Column 2--}}
                    <div class="d-flex flex-fill flex-column">
                        <div class="pl-2">
                            <div class="d-flex flex-column mb-3">
                    <label for="contact_name">Contactpersoon campagne&nbsp;<span class="badge badge-danger">verplicht</span></label>
                    <input type="text" id="contact_name" class="form-control mb-2" name="contact_name" value="{{$campagne->contact_name}}" tabindex="1" required>
                           </div>
                            <div class="d-flex flex-column mb-3">
                    <label for="contact_phone">Telefoonnummer contactpersoon&nbsp;<span class="badge badge-danger">verplicht</span></label>
                    <input type="text" id="contact_phone" class="form-control mb-2" name="contact_phone" value="{{$campagne->contact_phone}}" tabindex="1" required>
                           </div>
                            <div class="d-flex flex-column mb-3">
                    <label for="contact_phone2">Telefoonnummer b.g.g.&nbsp;<span class="badge badge-danger">verplicht</span></label>
                    <input type="text" id="contact_phone2" class="form-control mb-2" name="contact_phone2" value="{{$campagne->contact_phone2}}" tabindex="1" required>
                           </div>
                            <div class="d-flex flex-column mb-3">
                    <label for="contact_email">Emailadres contactpersoon&nbsp;<span class="badge badge-danger">verplicht</span></label>
                    <input type="text" id="contact_email" class="form-control mb-2" name="contact_email" value="{{$campagne->contact_email}}" tabindex="1" required>
                           </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>


        <div class="tab-pane" id="campaigndetails" role="tabpanel" aria-labelledby="campaigndetails-tab">
                    <div class="flex-fill">
        <div class="d-flex">
            {{--Column 1--}}
            <div class="d-flex flex-fill flex-column">
                <div class="pr-2">
                         <div class="d-flex flex-column mb-3">
                        <h5>Omschrijving</h5>
                        <i>{{$campagne->description}}</i>
                    </div>
                    </div>
                </div>

                    {{--Column 2--}}
                    <div class="d-flex flex-fill flex-column">
                        <div class="pl-2">
                        <div class="d-flex flex-column mb-3">
                        <h5>Afbeeldingen campagne</h5>
                        <i>{{$campagne->postal_code}},{{$campagne->city}}</i>
                   </div>
                        </div>
                    </div>
                  </div>
                </div>

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
                                
                                   <!--  <td>{{$user->influencer->instagram_name}}</td> -->
                                    <td>fdsgsdfsdfsdfgdfsg</td>
                            </thead>
                        </table>
                
                </div>
            </div>
        </div>

    </div>

        <button class="btn btn-sm btn-success font-weight-bolder mt-3" type="submit"><i class="fas fa-plus" tabindex="10"></i>&nbsp;Opslaan</button>
        <a class="btn btn-sm btn-danger font-weight-bolder mt-3" href="{{route('campagnes.index')}}" tabindex="11"><i class="fas fa-times"></i>&nbsp;Annuleren</a>
    </form>





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




