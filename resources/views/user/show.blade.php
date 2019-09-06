@extends('layouts.templates.show')

@section('page_title')
    Gebruiker {{$user->naam}}
@endsection

@section('show_type', 'Gebruiker')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Gebruiker</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gebruikers Instellingen</li>
    </ol>
@endsection

@section('edit_link')
    {{url('/user')}}/{{$user->id}}/edit
@endsection

@section('delete_link')
    {{url('/user')}}/{{$user->id}}
@endsection

@section('delete_text')
    de gebruiker {{$user->naam}}
@endsection

@section('card_body')
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="basisgegevens-tab" data-toggle="tab" href="#basisgegevens" role="tab" aria-controls="basisgegevens" aria-selected="true"><i class="far fa-address-card"></i>&nbsp;Account gegevens</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="Influencer-tab" data-toggle="tab" href="#influencer" role="tab" aria-controls="influencer" aria-selected="false"><i class="fas fa-chart-line"></i>&nbsp;Wachtwoord Wijzigen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="doelen-tab" data-toggle="tab" href="#doelen" role="tab" aria-controls="doelen" aria-selected="false"><i class="fas fa-bullseye"></i>&nbsp;Business</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <!--------------------------------------------------------------basisgegevens tab------------------------------------------------------------------------->
        <div class="tab-pane active" id="basisgegevens" role="tabpanel" aria-labelledby="basisgegevens-tab"><div class="d-flex">
                <div class="flex-fill">
                    <div class="d-flex flex-column mb-3">
                        <h5>Naam</h5>
                        <i>{{$user->name}}</i>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <h5>Huidige Email adress</h5>
                        <i>{{$user->email}}</i>
                   </div>
                    <div class="d-flex flex-column mb-3">
                        <h5>Aantal ingeschreven campagnes</h5>
                    </div>
                </div>
            </div>
        </div>


        <div class="tab-pane" id="influencer" role="tabpanel" aria-labelledby="Influencer-tab">
            <div class="d-flex">
                <div class="flex-fill mb-3">
                    <h5>Instagram gebruikersnaam</h5>
                    <p>{{$user->influencer->instagram_name}}</p>
                    <span class="clearfix"></span>
                        <h6 class="font-weight-bolder">Statestieken</h6>
                        <table class="table table-responsive-sm table-striped">
                            <thead>
                            <tr>
                                <th class="w-25">Volgers</th>
                                <th class="w-75">Telefoonnummer</th>
                            </tr>
                                
                                    <td>{{$user->influencer->volgers}}</td>
                                    <td>{{$user->influencer->telefoonnummer}}</td>
                            </thead>
                        </table>
                
                </div>
            </div>
        </div>

    </div>




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
